<!DOCTYPE html>
<html>
<head>
	<?php if(isset($success)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success","<?php echo $success;?>","success");
                            },
                                100);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed","<?php echo $err;?>","error");
                            },
                                100);
                </script>

        <?php } ?>
<meta charset="utf-8">
<title>Management Portal</title>
 <style>
body {
  background-image: url('gallery/clinic2.png');
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   position: relative;
   height: 500px;
}
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);}

.form-content {
      position: absolute;
      bottom: 10%;
      right: 5%;
      background-color: #cccccc;
      height: 400px;
   }

   .container {
  positsion: relative;
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 77%; /* Full width */
  padding: 20px; /* Some padding */
}
</style> 
</head>

<body>
   
    
     <div class="container">
  <img src="notebook.jpg" alt="" style="width:100%;">
  <div class="content">
    <h1 style="color:white;">WELCOME TO CU CLINIC MANAGEMENT SYSTEM</h1>
     </div>
</div> 
     

     <div class="row align-items-center justify-content-between d-flex" >
     <nav id="nav-menu-container" >
     <ul class="nav-menu" >
        <style>ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}</style>
	<li><a href="index.php" style="color:maroon">Home</a></li>
	<li><a href="backend/doc/index.php" style="color:maroon">Doctor Login</a></li>
    <li><a href="backend/doc/nurse login.php" style="color:maroon">Nurse Login</a></li>
    <li><a href="backend/doc/pharma login.php" style="color:maroon">Pharmacist Login</a></li>
    <li><a href="backend/doc/Lab login.php" style="color:maroon">Lab Login</a></li>
    <li><a href="backend/admin/index.php" style="color:maroon">Admin Login</a></li>
    <style> li {
    float: left;
  display: inline;
} 
a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}</style>
     </ul>
                </nav><!-- #nav-menu-container -->                  
                </div>
   
   

           
</body>

</html>