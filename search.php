<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Booking Search Form</title>
    <style>

        th{

                color:red:

        }


        /* Nawbar*/

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}



@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}





footer {
	color:#7f7f7f;
	font-size:14px;
	overflow:hidden;
	padding:28px 40px;
	background:#000;
	margin:0 10px;
}
footer a {
	color:#fff;
}
.copyright {
	float:left;
}
.social-list {
	float:right;
}
.social-list li {
	float:left;
	margin:0 0 0 10px;
}
.social-list li a:hover img {
	opacity:0.8;
}
/* Calendar styles */


.fc {
	direction: ltr;
	text-align: left;
	padding:30px 0 0 0;
	position:relative;
}
.fc table {
	border-collapse: collapse;
	border-spacing: 0;
}
html .fc, .fc table {
	font-size: 1em;
}
.fc td, .fc th {
	padding: 0;
	vertical-align: top;
}


label{

font-size: larger;

text-align: justify;
}

.btn {
margin: auto;
width: 5%;
padding: 4px;
background-color: #41a512;
color: #f2f2f2;
font-size: medium;
}

    </style>
</head>
<body>
   
       


        <ul>
        <li><a class="active" href="Home.html">Home</a></li>
     
      
     <li><a href="Most_Visited_Places.html"> Most Visited Places</a></li>
     <li><a href="Tourism_Booking_Details.php">Booking Application Details</a></li>

     <li><a href="Tourism_Booking_Application_Form.php">Booking Application Form</a></li>

     

     <li><a href="contact-details.html">Contact Us</a></li>

</ul>
  <br><br><br>

  <h1 style="text-align:center;">Search Tourism Booking Application Form</h1>

  <br><br><br><br><br>

        <form method="post">
          
              
                  <center> <label for="">Nic or Passport Number </label>
                  <input type="text" name="Nic_or_Passport_Number" id="">
                    <input type="submit" class="btn" value="Search" name="search">
                </center>
            
        </form>

        


 
        <?php
        if(isset($_POST['search']))
        {
            
            include 'conn.php';

            $Nic_or_Passport_Number = $_POST['Nic_or_Passport_Number'];

            $sql = "SELECT * FROM tourism_booking_application_form WHERE Nic_or_Passport_Number = '$Nic_or_Passport_Number'";

            $resut = mysqli_query($con, $sql);

            $row = mysqli_fetch_array($resut);

            if ($resut -> num_rows>0)
            {
                ?>
                <table align="center" border=5 style="border-collapse:collapse; width:90%; text-align:center; margin-top:100px; padding:50px" font-size: 17px;  >
                    <tr>
                     <th>Nic or Passport Number</th>
                            <th>Full Name </th>
                            <th> Last Name</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Traveling_Tourism_place</th>
                            <th>Start_Date</th>
                            <th>End_Date</th>
                            <th>Packages</th>
                            <th>Comment</th>
                            <th>Payment Proof</th

                    </tr>
                    <tr style="font-size: 17px;">
                    <td> <?php echo $row['Nic_or_Passport_Number']?> </td>
                    <td> <?php echo $row['Full_Name']?> </td>
                    <td> <?php echo $row['Last_Name']?> </td>
                    <td> <?php echo $row['Contact_Number']?> </td>
                    <td> <?php echo $row['Address']?> </td>
                    <td> <?php echo $row['Email']?> </td>
                    <td> <?php echo $row['Traveling_Tourism_place']?> </td>
                    <td> <?php echo $row['Start_Date']?> </td>
                    <td> <?php echo $row['End_Date']?> </td>
                    <td> <?php echo $row['Packages']?> </td>
                    <td> <?php echo $row['Comment']?> </td>
                   <td><br> <br><br><br><br> <?php echo "<img src='data:image;base64,{$row['Image']}' alt='img' width='150px' height='250px'>"?></td>
                    </tr>
                </table>

                <?php
            }

            else 
            {
                echo "<br><br> <h3 style='color:red'><center>No information</center></h3>";
            }
        }

        ?>
  

   

<br><br><br><br><br>




  
</body>

<footer>
  <div class="copyright"> Website  design develop by <a target="_blank" href="http://www.hasfak.com/">HM.Hasfak</a> </div>
  <ul class="social-list">
    <li><a href="wwww.twitter.com"><img src="images/soc-icon-1.png" alt=""></a></li>
    <li><a href="www.facebook.com"><img src="images/soc-icon-2.png" alt=""></a></li>
    <li><a href="www.whatsup.com"><img src="images/soc-icon-3.png" alt=""></a></li>
  </ul>
</footer>
</html>