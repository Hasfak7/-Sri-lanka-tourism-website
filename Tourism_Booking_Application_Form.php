<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Booking ApplicationForm Form</title>


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

label{

font-size: larger;

text-align: justify;
}

.btn {
margin: 5px;
width: 30%;
padding: 5px;
background-color: green;
color: #f2f2f2;
font-size: medium;
}



      </style>
    





    <script>
   
   // Form validation code will come here.
   function validate() {
   
      if( document.myForm.Nic_or_Passport_Number.value == "" ) {
         alert( "Please Type Your Nic or Passport Number!" );
         document.myForm.Nic_or_Passport_Number.focus() ;
         return false;
      }

      if( document.myForm.Full_Name.value == "" ) {
         alert( "Please Type Your Full Name!" );
         document.myForm.Full_Name.focus() ;
         return false;
      }

      if( document.myForm.Last_Name.value == "" ) {
         alert( "Please Type Your Last Name!" );
         document.myForm.Last_Name.focus() ;
         return false;
      }

      if( document.myForm.Contact_Number.value == "" ) {
         alert( "Please Type Your Contact Number!" );
         document.myForm.Contact_Number.focus() ;
         return false;
      }

      if( document.myForm.Address.value == "" ) {
         alert( "Please Type Your Address!" );
         document.myForm.Address.focus() ;
         return false;
      }
     
      if( document.myForm.Email.value == "" ) {
         alert( "Please Type Your Email!" );
         document.myForm.Email.focus() ;
         return false;
      }

    


      if( document.myForm.Traveling_Tourism_place.value == "" ) {
         alert( "Please Enter Your Tourism place!" );
         document.myForm.Traveling_Tourism_place.focus() ;
         return false;
      }
      if( document.myForm.Start_Date.value == "" ) {
         alert( "Please Enter Your Start Date!" );
         document.myForm.Start_Date.focus() ;
         return false;
      }
      if( document.myForm.End_Date.value == "" ) {
         alert( "Please Enter Your End Date!" );
         document.myForm.End_Date.focus() ;
         return false;
      }
      if( document.myForm.Packages.value == "" ) {
         alert( "Please Enter Your Packages!" );
         document.myForm.Packages.focus() ;
         return false;
      }

      if( document.myForm.Comment.value == "" ) {
         alert( "Please Type Your Comment" );
         document.myForm.Opinion.focus() ;
         return false;
      }

      if( document.myForm.image.value == "" ) {
         alert( "Please Upload your Payment Proof Image jpg File" );
         document.myForm.image.focus() ;
         return false;
      }


     
      



      return( true );
   }

</script>


</head>




<body>

<ul>
    <li><a class="active" href="Home.html">Home</a></li>
    
    <li><a href="Most_Visited_Places.html"> Most Visited Places</a></li>
    <li><a href="Tourism_Booking_Details.php">Booking Application Details</a></li>
    <li><a href="search.php">Search Booking Application Details</a></li>
    <li><a href="contact-details.html">Contact Us</a></li>
  </ul>
  <br><br><br>

    <div style="width:80%; margin:auto">
        <h1 style="text-align:center;">Tourism Booking Application Form</h1>
        <br><br>
        
        <form action="Tourism.php" method="post" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">
            <table align="center">
                <tr>
                    <td><label for="">NIC  or Passport No : </label></td>
                    <td><input type="text" name="Nic_or_Passport_Number" id=""></td>
                </tr>

                <tr>
                    <td><label for="">Full Name : </label></td>
                    <td><input type="text" name="Full_Name" id=""></td>
                </tr>
            </tr> <tr>
                <td><label for="">Last Name : </label></td>
                <td><input type="text" name="Last_Name" id=""></td>
            </tr>

                <tr>
                    <td><label for="">Contact Number : </label></td>
                    <td><input type="number" name="Contact_Number" id=""></td>
                </tr>
                <tr>
                    <td><label for="">Address :</label></td>
                    <td><textarea name="Address" id="" cols="50" rows="4"></textarea></td>
                



                <tr>
                    <td><label for="">Email : </label></td>
                    <td><input type="email" name="Email" id=""></td>
                </tr>
                <tr>
                    <td><label for="">Traveling Tourism place : </label></td>
                    <td><input type="text" name="Traveling_Tourism_place" id=""></td>
                </tr>
                
                <tr>
                    <td><label for="">Start_Date :  </label></td>
                    <td><input type="Date" name="Start_Date" id=""></td>
                </tr>
                <tr>
                    <td><label for=""> End_Date :  </label></td>
                    <td><input type="date" name="End_Date" id=""></td>
                </tr>

                <tr>
                    <td><label for=""> Packages : </label></td>
                    <td><input type="number" name="Packages" id=""></td>
                </tr>
                
                <tr>
                    <td><label for=""> Comment : </label></td>
                    <td><input type="text" name="Comment" id=""></td>
                </tr>

                <tr>
                    <td><label for=""> Payment Proof : </label></td>
                    <td><input type="file" name="image" id="" ></td>
                </tr>



               

                <tr>
                    <td></td>
                    <td><br> <br><br> <input type="submit" class="btn" value="Submit" name="Register ">  <input type="reset" class="btn" value="Clear All" name="Reset "></td>
                </tr>
            </table>
        </form>
    </div>

   


    <br>
    <br>
    <br>
    <br>
    <br>


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