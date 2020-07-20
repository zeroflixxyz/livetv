<?php 
session_start(); /* Starts the session */
/*include'html-encoder.php';*/
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('admin' => 'mou280892','zeroflix100' => 'zeroflix100','test123000' => 'test123000');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} 
		
		else {
			/*Unsuccessful attempt: Set error message */
		$msg="<span style='color:red'>Invalid login User Name & password Details</span>";
	}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="shortcut icon" href="assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<link rel="icon" href="https://i.imgur.com/WOxiSRI.png"> 
    <!-- Meta -->
    <meta name="description" content="Direct Video link from Google drive">
    <meta name="author" content="ZeroFlix">
    <meta property="og:image" content="https://i.imgur.com/wqjuqHJ.jpg">
    <meta name="clckd" content="aaaac532696814983c7b2ba82556c242" />
   <title>Create Direct Video link from Google Drive & Google Photos :: ZeroFlix Tools</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
     <!-- toast notification  Start-->
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
	        
      </head>
 <body>
     <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <a href="/index.php"><img src="assets/img/logo.png" alt="ZeroFlix GDrive" height="100"></a>       
      </div>	 
      <div class="login-box">
        <form class="login-form" id="login" action=" " method="post">
          <h3 class="login-head"><span class="tx-normal">[</span>ZeroFlix <span class="tx-info">Video Tools</span><span class="tx-normal">]</span></h3>
          <!-- error/success message -->
           
          <div class="form-group row">
            <label class="control-label">User name</label>
            <input class="form-control" type="text" name="Username" id="username" placeholder="Enter your username" autofocus required>
          </div>
          <div class="form-group row">
            <label class="control-label">Password</label>
            <input class="form-control" name="Password" type="password" id="password" placeholder="Enter your password" required>
          </div>
          <div id="error"></div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" id="btn-login" type="submit" name="Submit">Sign In <i class="fa fa-sign-in fa-lg"></i></button>
          </div> <br>
			<div class="form-group">
            <div class="utility">
              <button class="btn btn-primary btn-success"><a data-toggle="flip">Demo login details</a></button>
            </div>
          </div>		  
        </form>
        <form class="forget-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Demo login Panel</h3>
          <div class="form-group">
			<h5 class="control-label">Sorry !</h5><br>
			<h5 class="control-label">It's Private Zone</h5>
          </div>          
          <div class="form-group mt-20">
            <button class="btn btn-primary btn-block"><a data-toggle="flip"><i class="fa fa-arrow-left fa-fw"></i> Back</a></button>
            <button class="btn btn-danger btn-block"><a href="#"><i class="fa fa-cart-plus fa-fw"></i>Buy from Here</a></button>
          </div>
        </form>	
	      <br>
		<?php if(isset($msg)){?>
		<center>
		<p class="error"><span class="tx-danger tx-13 tx-bold"><?php echo $msg;?></span></p>
			</center>
			<?php } ?>	
					
      </div>	  
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    
	</script>
	
</body>
</html>
