<?php

    include 'conn.php';

    $sql = "SELECT 	Nic_or_Passport_Number FROM tourism_booking_application_form";

    $query_run = mysqli_query($con, $sql);

    $row = mysqli_num_rows($query_run);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>


    <style>
 td {
  padding: 15px;
}









    </style>
   
</head>
<body>

   

    <div class="banner">
            
            <div><h2 align="center">Tourism Booking Application Form</h2></div>

           


           
           

        

        
                <a href="Tourism_Booking_Details.php">Tourism Booking Detail</a>
                
                <a href="Tourism_Booking_Application_Form.php">Tourism Booking Application Form</a>
            
        

        <br>
            

        
        
          <form action="" metdod="post" enctype="multipart/form-data">
             
            

              <table align="Center" >
  <tr>
    <td><label for="">Nic or Passport Number: </label></td>
    <td><input type="text" name="Nic_or_Passport_Number" id="" ></td>
    
  </tr>


  <tr>
    <td><label for="">Full_Name : </label></td>
    <td><input type="text" name="Full_Name" id="" ></td>
    
  </tr>



  <tr>
    <td><label for="">Last Name : </label></td>
    <td><input type="text" name="Last_Name" id="" ></td>
    
  </tr>


  <tr>
    <td><label for="">Contact Number : </label></td>
    <td><input type="text" name="Contact_Number" id="" ></td>
    
  </tr>


  <tr>
    <td><label for="">Address  : </label></td>
    <td><input type="text" name="Address" id="" ></td>
    
  </tr>

  <tr>
    <td><label for="">Email  : </label></td>
    <td><input type="text" name="Email" id=""  ></td>
    
  </tr>

  <tr>
    <td><label for="">Traveling Tourism place  : </label></td>
    <td><input type="text" name="Traveling_Tourism_place" id="" ></td>
    
  </tr>


  <tr>
    <td><label for="">Start_Date : </label></td>
    <td><input type="text" name="Start_Date" id="" ></td>
    
  </tr>

  <tr>
    <td><label for="">End_Date : </label></td>
    <td><input type="text" name="End_Date" id="" ></td>
    
  </tr>

  <tr>
    <td><label for="">Packages  : </label></td>
    <td><input type="text" name="Packages" id="" ></td>
    
  </tr>

  <tr>
    <td><label for=""> Proof of payment : </label></td>
    <td><input type="file" name="image" id="" ></td>
    
  </tr>

  <tr>
    <td><label for="">Comment  : </label></td>
    <td><input type="text" name="Opinion" id="" ></td>
    
  </tr>


  <tr>
    <td><button type="submit" name="submit" style="cursor: pointer;">submit</button></td>
    <td><button type="reset" style="cursor: pointer;">clear</button></td>
    
  </tr>
  



  </table>






            
              
          </form>
       
        



    <?php

        include 'conn.php';

         if (isset($_POST['submit']))
         {
        
             $Nic_or_Passport_Number= $_POST["Nic_or_Passport_Number"];
             $Full_Name= $_POST["Full_Name"];
             $Last_Name= $_POST["Last_Name"];
             $Contact_Number= $_POST["Contact_Number"];
             $Address= $_POST["Address"];
             $Email=$_POST["Email"];
             $Traveling_Tourism_place=$_POST["Traveling_Tourism_place"];
             $Start_Date=$_POST["Start_Date"];
             $End_Date=$_POST["End_Date"];
             $Packages=$_POST["Packages"];
             $Opinion=$_POST["Opinion"];


             
             
             $image =$_FILES['image']['tmp_name'];
             //$name =$_FILES['name'];
             $image =file_get_contents($image);

             $image =base64_encode($image);

             



             
            

             
            
             $sql ="INSERT INTO tourism_booking_application_form (Nic_or_Passport_Number, Full_Name, Last_Name,Contact_Number,Address,Email ,Traveling_Tourism_place,Start_Date, End_Date,Packages, Image,Opinion) 
                     VALUES ('$Nic_or_Passport_Number', '$Full_Name',' $Last_Name', ' $Contact_Number', '$Address', '$Email', '$Traveling_Tourism_place', '$Start_Date', '$End_Date', '$Packages', '$image','$Opinion')";
     
             
     
             if (mysqli_query($con,$sql))
             {
                 ?>
                 <script>
                    alert("Successfully Booking Application")
                    window.location.href='Tourism_Booking_Application_Form.php?success';
                 </script>
                 <?php
             }
            
             
     
             }
    ?>
</body>
</html>