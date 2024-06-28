<?php
    include 'conn.php';

    $nic = $_GET['Nic_or_Passport_Number'];

    $sql = "SELECT * FROM tourism_booking_application_form WHERE Nic_or_Passport_Number = '$Nic_or_Passport_Number'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width:80%; margin:auto">
        <h1 style="text-align:center;">Tourism Booking Update Details Form</h1>
        
        <form action="updatePro.php" method="post">
            <table>
                <tr>
                    <td><label for="">Nic or Passport Number </label></td>
                    <td><input type="text" name="Nic_or_Passport_Number" id="" value="<?php echo $row['Nic_or_Passport_Number']?>"></td>
                </tr>

                <tr>
                    <td><label for="">Full Name </label></td>
                    <td><input type="text" name="Full_Name" id="" value="<?php echo $row['Full_Name']?>"></td>
                </tr>

                <tr>
                    <td><label for="">Last Name</label></td>
                    <td><input type="text" name="Last_Name" id="" value="<?php echo $row['Last_Name']?>"></td>
                </tr>
                <tr>
                    <td><label for="">Contact_Number</label></td>
                    <td><input type="text" name="Contact_Number" id="" value="<?php echo $row['Contact_Number']?>"></td
                </tr>

               

                <tr>
                    <td><label for="">Address</label></td>
                    <td><textarea name="Address" id="" cols="50" rows="4"><?php echo $row['Address']?></textarea></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td><input type="text" name="Email" id="" value="<?php echo $row['Email']?>"></td
                </tr>
                <tr>
                    <td><label for="">Traveling_Tourism_place</label></td>
                    <td><input type="text" name="Traveling_Tourism_place" id="" value="<?php echo $row['Traveling_Tourism_place']?>"></td
                </tr>
                <tr>
                    <td><label for="">End Date</label></td>
                    <td><input type="text" name="End_Date" id="" value="<?php echo $row['End_Date']?>"></td
                </tr>

                <tr>
                    <td><label for="">Packages</label></td>
                    <td><textarea name="Packages" id="" value="<?php echo $row['Packages']?>"></td



                </tr>

                <tr>
                    <td><label for="">Comment</label></td>
                    <td><textarea name="Opinion" id="" value="<?php echo $row['Opinion']?>"></td



                </tr>
                    <td></td>
                    <td><input type="submit" value="update"></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>