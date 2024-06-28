<?php
    include 'conn.php';

    $nic = $_GET['Nic_No_or_Passport'];

    $sql = "DELETE FROM tourism_booking_application_form WHERE Nic_or_Passport_Number = '$Nic_or_Passport_Number'";

    if (mysqli_query($con, $sql))
    {
        echo "Booking Record Delete Succesfully ";
        header("location:Tourism_Booking_Details.php");
    }

    else
    {
        echo "error";
    }
?>