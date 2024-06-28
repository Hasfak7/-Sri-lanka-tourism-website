<?php
    session_start();
    
    include 'conn.php';

    $sql = "SELECT Nic_or_Passport_Number FROM tourism_booking_application_form";

    $query_run = mysqli_query($con, $sql);

    $row = mysqli_num_rows($query_run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Booking Application Form</title>

    <link rel="stylesheet" href="Asseets/style.css">
</head>
<body>
   
    <?php
        include 'conn.php';
    ?>

    <div class="container">

        <div class="banner">
          
            <div><h2 align="center">Tourism Booking Application Form</h2></div>

     

            
           
            <br>
            <br>
            <div> <hr></div>
            <br><br>
        </div>

        <div class="menu">
            <ul>
                <li><a href="Tourism_Booking_Details.php">Tourism Booking Application Form Details</a></li>
                <li><a href="Tourism_Booking_Application_Form.php">Tourism Booking Application Form</a></li>
                
            </ul>
        </div>

<br> <br><br><br><br>

        <h7>Total Booking Application Form : <?php echo $row; ?></h7>

        <div class="contant">
            <?php
            $sql= "SELECT * FROM tourism_booking_application_form";

            $result = $con->query($sql);

            echo "<table style=width:90%>";

            if ($result->num_rows > 0) {

                
                
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                   
                    
                            <tr><td width="50%"><p>Nic or  Nic_No: <?php echo $row["Nic_or_Passport_Number"]?></p>
                                <p>Full_Name : <?php echo $row["Full_Name"]?></p>
                                <p>Last_Name : <?php echo $row["Last_Name"]?></p>
                                <p>Contact_Number <?php echo $row["Contact_Number"]?> </p>
                                <p>Address  : <?php echo $row["Address"]?></p>
                                <p>Email :<?php echo $row["Email"]?></p>
                                <p>Traveling_Tourism_place : <?php echo $row["Traveling_Tourism_place"]?></p>
                                <p>Start_Date : <?php echo $row["Start_Date"]?></p>
                                <p>End_Date : <?php echo $row["End_Date"]?></p>
                                <p>Packages  : <?php echo $row["Packages"]?></p>
                    
                                <p>Opinion  : <?php echo $row["Opinion"]?></p>

                                <hr>
                                <br>
                            </td></td>


                            <td width="60%">
                            <?php echo "<img src='data:image;base64,{$row['Image']}' alt='img' width='100px' height='100px'>"?>
                            
                                
                            <td width="20%">
                                
                                
                            </td>
                            
                    <?php
                }
                echo "</table>";
            } 
            ?>
        </div>
    </div>
    
</body>
</html>