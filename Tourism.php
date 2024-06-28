<?php

    include 'conn.php';

    $Nic_or_Passport_Number = $_POST['Nic_or_Passport_Number'];
    $Full_Name = $_POST['Full_Name'];
    $Last_Name= $_POST['Last_Name'];
    $Contact_Number= $_POST['Contact_Number'];
    $Address= $_POST['Address'];
    $Email= $_POST['Email'];
    $Traveling_Tourism_place= $_POST['Traveling_Tourism_place'];
    $Start_Date= $_POST['Start_Date'];
    $End_Date= $_POST['End_Date'];
    $Packages= $_POST['Packages'];
    $Comment= $_POST['Comment'];
    
    
    $image =$_FILES['image']['tmp_name'];
    //$name =$_FILES['name'];
    $image =file_get_contents($image);

    $image =base64_encode($image);
    

    $sql = "INSERT INTO tourism_booking_application_form(Nic_or_Passport_Number, Full_Name, Last_Name,Contact_Number,Address,Email ,Traveling_Tourism_place,Start_Date, End_Date,Packages,Comment,Image) VALUES ('$Nic_or_Passport_Number', '$Full_Name',' $Last_Name', ' $Contact_Number', '$Address', '$Email', '$Traveling_Tourism_place', '$Start_Date', '$End_Date', '$Packages','$Comment','$image')";
    
    if (mysqli_query($con, $sql))
    {
        ?>
        <script>
            alert("Tourism Application Booking Successfully  ");
            window.location.href="Tourism_Booking_Application_Form.php";
        </script>
        <?php
       
    }

    else
    {
        echo "Error ".mysqli_error($con);
    }
?>