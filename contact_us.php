
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
            <!--important tags : these are important settings for your machine to know more about your code and how to display it-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--title-->
    <title>ABOUT US </title>
    
    <!--google fonts(the fonts that we are going to use in this tutorial: raleways and  open sans)-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
     <!--Link for open sans font type and its values-->  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
     
    <!--Linking fontawesome file with html-->
    <link rel="stylesheet" href="font-awesome.min.css">

    <!--Linking bootstrap file to html-->
    <link rel="stylesheet" href="bootstrap.css">

    <!--Linking the css file to html-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  width: 100%;
  align-items: center;
  justify-content: center;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: black;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
  text-align: left;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: maroon;
  text-align: center;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
  border-radius: 6px;
  align:center;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: maroon;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: ;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
.mapouter{
text-align:center;
height:500px;
width:2000px;}
.gmap_canvas {
  overflow:hidden;
  background:none!important;
  height:500px;
  width:2000px;
  align:center;
  }
</style>
    </head>
    <body>
       
    <section id="ABOUT">
    <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-left: 150px; margin-top: 1% !important;"><h1 align="center"><strong>CU<br> CLINIC</strong></h1>
                    <h5 align="center"><strong>Health, Our Priority</strong></h5>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ></a>
                    </div>
            <div class="header">
            <style>
                .header{
                    width: 100%;
                    height:150px;
                    background-image: url("gallery_05.jpg");
                    background-size:cover;
                }
            </style>
            <nav class="navbar">
            <div class="menu" style=" font-weight:bold;">
                        <ul>
                            <li><a href="index.php"  style="color:maroon">Home</a></li>
                            <li><a href="services.php"  style="color:maroon">Services</a></li>
                            <li><a href="about_us.php"  style="color:maroon">About Us</a></li>
                            <li><a href="gallery.php"  style="color:maroon">Gallery</a></li>
                            <li><a href="contact_us.php"  style="color:maroon">Contact Us</a></li>
                        </ul>
</div>
</nav>
</div>
<div class="about-1">      
 <h1 style="color:maroon" align="center"> CONTACT US</strong> </h1>
</div>
<div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt" style="color:maroon"></i>
          <div class="topic" style="color:maroon">Address</div>
          <div class="text-one">Central University, Miotso near Dawhenya.  Off the Accra - Aflao Road.  </div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt" style="color:maroon"></i>
          <div class="topic" style="color:maroon">Phone</div>
          <div class="text-one">0303318580</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"style="color:maroon"></i>
          <div class="topic" style="color:maroon">Email</div>
          <div class="text-one">info.central.cu.clinic@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <form method="post"><br>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label style="color:black" align="left">Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label style="color:black">Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label style="color:black">Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label style="color:black">Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label style="color:black"></label></div>
                        <div class="col-sm-8">
                         <button class="button" style="background-color:maroon" type="submit" name="submit"><h6 style="color:white">Send Message</h6></button>
                        </div>
                </div>
            </form>
    </div>
    </div>
  </div>
  <div class="mapouter">
    <div class="gmap_canvas">
      <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Central%20university,%20Tema.%C2%A0&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  style="align:center" position="fixed">
    <a href="https://www.embedgooglemap.net"></a>
  </iframe><br>
  </div>
</div>
        
   



<footer class="footer">
<div class="col-md-6 col-sm-12">
                    <h2 style="color:black">Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="https://www.central.edu.gh/" style="color:maroon">Central University</a></li>
                        <li><a ui-sref="portfolio" href="https://ghs.gov.gh/" style="color:maroon">Ghana Health Service</a></li>
                        <li><a ui-sref="portfolio" href="https://www.who.int/" style="color:maroon">World Health Organization</a></li>
                        <li><a ui-sref="portfolio" href="https://www.unicef.org/" style="color:maroon">UNICEF</a></li>
                    </ul>
                </div>

                
<div class="col-md-6 col-sm-12 map-img">
                    <h2 style="color:black">Contact Us</h2>
                    <address style="color:white" class="md-margin-bottom-40">



                      Central University Miotso, Off Accra-Aflao road
<li>Phone: 0303318580</li>
<li>Email: info.central.cu.clinic@gmail.com</li>
<li>Time: Opened 24hrs </li>
                    <address style="color:white" class="md-margin-bottom-40">







                </div>


 

    
</footer>
<div class="copy">
            <div class="container">
         
            <p style="color:white">Copyright &copy;2023  CU Clinic Management System. All Rights Reserved</p>   
     
            </div>

        </div>
</body>
</html>