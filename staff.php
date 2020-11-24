<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="staffstyle.css">
    <title>Railway Reservation System</title>
    <script>
    function myFunction() {
        
        if (window.confirm('You loggedin successfully. Redirecting to Homepage'))
{
   
    window.open("homepage.php");
}
else
{
    die();
}
        
    }
</script>
</head>
<body>
    

    <form class="background login">


         <video autoplay muted loop id="myVideo">
            <source src="download_Trim (online-video-cutter.com)_Trim.mp4" type="video/mp4">
          </video>
       <!--  <div class="HeadLine">DTU Railways Reservation System</div>-->
        <marquee behavior="scroll" class="HeadLine"scrollamount="20" direction="left">Welcome To Railway Reservation System!</marquee>
        <div class="credentials"> 
           
            <div class="username">
                Username :  <input type="text" placeholder="Enter your Username"> 
            </div>
            <div class="password">    
                Password :  <input type="password" placeholder="Enter your Password">
            </div>
            <div class="button">
                <Button  href="Staffhomepage.php">LOGIN</Button>   
                
            &nbsp; &nbsp;
               <!--   <Button   type="reset" value="Reset" > Reset </Button>-->
                
              </div>
             
              <a href="forgot.php"> Forgot password?</a> 
              &nbsp; &nbsp;&nbsp; &nbsp; 
              <br> 
              
              <!-- <a href="register.php">New User? Signup here</a> -->
           
        </div>
    </form>

    <!-- FOOTER-->

    
</body>
</html>