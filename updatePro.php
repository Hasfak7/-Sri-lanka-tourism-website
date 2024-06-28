<?php
    include 'conn.php';

    //$id = $_POST['nic'];

    $Nic_or_Passport_Number = $_POST['Nic_or_Passport_Number'];
    $Full_Name = $_POST['Full_Name'];
    $address = $_POST['Last_Name'];

    $sql = "UPDATE tourism_booking_application_form SET Nic_or_Passport_Number='$Nic_or_Passport_Number', Full_Name= '$Full_Name', Last_Name='$Last_Name' WHERE Full_Name = '$Full_Name'";

    if(mysqli_query($con, $sql))
    {
        echo "record B update Succwsfully";
        header("location:index.php");
    }

    else{
        echo "Error";
    }
?>