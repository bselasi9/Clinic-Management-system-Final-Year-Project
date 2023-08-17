
<!DOCTYPE html>
<html>
    <head>
        <title>gallery</title>
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
    <link rel="stylesheet" href="servicesstyle.css">
    <style>
li {
list-style: none;
    }   
.navbar  {
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px;
color: #fff;
  }
.menu a {
    display:block;
	padding:3px;
	text-decoration:none;
    color: #fff;
    }	
.menu{
    margin: 10px;
    width: 900px;
    display: flex;
    font-size: 17px;
    font-family: sans-serif;
}
.menu li {
    display:block;
	width:120px;
	float:left;
	margin-left:2px;
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
            <div class="menu" style=" font-weight:; text-transform: uppercase;" >
                        <ul>
                            <li><a href="index.php"  style="color:maroon">Home</a></li>
                            <li><a href="services.php"  style="color:maroon">Services</a></li>
                            <li><a href="about-us.php"  style="color:maroon">About Us</a></li>
                            <li><a href="gallery.php"  style="color:maroon">Gallery</a></li>
                            <li><a href="contact_us.php"  style="color:maroon">Contact Us</a></li>
                        </ul>
</div>
</nav>
</div>
<div class="container">
        <h2 style="color:maroon">Our Gallery</h2>
        <section class="services">
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/anaesthesia.jpeg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/ChildHealth.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/pharmacy.jpeg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/ambulance.jpeg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/theatre.jpeg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/outpatient.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/generalpractice.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/family.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/lab.jpeg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/gallery_01.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/gallery_02.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/gallery_03.jpg"  alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/gallery_04.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/gallery_05.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
            <div class="card">
                <div class="content">
                    <div class="icon"><img src="gallery/gallery_06.jpg" alt="lights" style="width:100%"></div>
                </div>
            </div> 
        </section>
    </div>


<footer class="footer">
<div class="col-md-6 col-sm-12">
                    <h2 style="color:white">Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="https://www.central.edu.gh/" style="color:maroon">Central University</a></li>
                        <li><a ui-sref="portfolio" href="https://ghs.gov.gh/" style="color:maroon">Ghana Health Service</a></li>
                        <li><a ui-sref="portfolio" href="https://www.who.int/" style="color:maroon">World Health Organization</a></li>
                        <li><a ui-sref="portfolio" href="https://www.unicef.org/" style="color:maroon">UNICEF</a></li>
                    </ul>
                </div>             
<div class="col-md-6 col-sm-12 map-img">
                    <h2 style="color:white">Contact Us</h2>
                    <ul>
                      Central University Miotso, Off Accra-Aflao road
<li>Phone: 0303318580</li>
<li>Email: info.central.cu.clinic@gmail.com</li>
<li>Time: Opened 24hrs </li></ul>
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