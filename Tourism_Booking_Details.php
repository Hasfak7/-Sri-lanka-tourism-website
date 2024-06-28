<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Booking Application Form  Details </title>


    <style>
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



      </style>
    



</head>




<body>
<ul>
    <li><a class="active" href="Home.html">Home</a></li>
    
    <li><a href="Most_Visited_Places.html"> Most Visited Places</a></li>
    <li><a href="Tourism_Booking_Application_Form.php">Booking Application Form</a></li>
     <li><a href="search.php">Search Booking Application Details</a></li>
    <li><a href="contact-details.html">Contact Us</a></li>
  </ul>
  <br><br><br>


    <div style="width:80%; margin:auto; margin-top:50px">
        <?php
            include 'conn.php';

            $sql = "SELECT * FROM tourism_booking_application_form";

            $result = mysqli_query($con, $sql);

            if($result ->num_rows > 0)
            {
                ?>

                    <form    >

                <table border=5 style="text-align:center;font-size: 19px;">
                        <tr >
                            <th >Nic or Passport Number</th>
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
                            <th>Payment Proof</th>
                            
                        </tr>
                    
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
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
                    <?php
                }
            }

            else
            {
                echo "No Booking Records";
            }

        ?>
        </table>

        </form>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
  <div class="copyright"> Website  design develop by <a target="_blank" href="http://www.hasfak.com/">HM.Hasfak</a> </div>
  <ul class="social-list">
    <li><a href="wwww.twitter.com"><img src="images/soc-icon-1.png" alt=""></a></li>
    <li><a href="www.facebook.com"><img src="images/soc-icon-2.png" alt=""></a></li>
    <li><a href="www.whatsup.com"><img src="images/soc-icon-3.png" alt=""></a></li>
  </ul>
</footer>

   


</body>
</html>