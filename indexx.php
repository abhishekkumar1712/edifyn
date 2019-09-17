<?php
include_once '/var/www/main/global/styles.php'
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edifyn | Transforming Education</title>
	<link rel="stylesheet" type="text/css" href="../css/normal.css">
	<link rel="stylesheet" type="text/css" href="../css/font.css">

<style type="text/css">

	    body{
	    	margin: 0;
	    	padding: 0; 
	    }

		.nav{
			width: 100%;
			height: 70px;
			background: #333;
		}
		.main{
			width: 100%;
			height: 900px;
		}
		.logo{
			position: absolute;
			background: #857;
			width: 150px;
			height: 50px;
			margin-left: 30px;
			margin-top: 10px;
			background: url('../images/logo-white.png');
			background-size: 90% 90%;
			background-repeat: no-repeat;
		}

		.say{
			width: 600px;
			position:absolute;
			background: #094;
			height: 800px;
			margin-top: 50px;
			margin-left: 20px;
		}
		.signup{
			width: 320px;
			height: 800px;
			float: right;
			margin-top: 50px;
			background: #efefef;
			margin-right: 50px;
		}

		.form-login{
			float: right;
			width: 500px;
            height: 60px;
            margin-top: 5px;
            margin-right: 10px;
            box-sizing: border-box;
            padding-top: 15px;
		}
		.username{
			width: 190px;
			height: 27px;
			outline: none;
			border: none;
			border-radius: 2px;
			margin-right: 10px;
			box-sizing: border-box;
			padding-left: 10px;
		}
		.passwd{
			width: 190px;
			height: 27px;
			outline: none;
			border: none;
			border-radius: 2px;
			margin-right: 10px;
			box-sizing: border-box;
			padding-left: 10px;
		}
		.submit{
			width: 77px;
			height: 27px;
			border-radius: 2px;
			outline: none;
			border: none;
			text-transform: uppercase;
			background: rgb(0,121,197); 
			color: rgb(255,255,255);
		}
		.usrtxt , .pastxt , .mntxt , .fntxt , .confpastxt , .firstntxt , .lastntxt{
			  width: 270px;
			  height: 20px;
			  color: rgb(0,0,0);
			  font-size: 15px;
			  margin-left: 25px;
			  margin-top: 21px;
			  color: #234;
			}
		.firstn , .lastn  , .confpas , .username-sup , .password-sup  , .mn {
			  width: 280px;
			  height: 35px;
			  background: rgb(253,253,253);
			  font-size: 15px;
			  padding-left: 13px;
			  border: none;
			  outline: none;
			  border-radius: 3px;
			  margin-left: 20px;
			  box-sizing: border-box;
			  margin-top: 10px;
			  color: rgb(0,0,0);
			  border: 1px solid rgb(230,230,230);
        }
        .termtxt{
  width: 280px;
  height: auto; 
  margin-top: 20px;
  margin-left: 20px;
  font-size: 15px;
  line-height:21px;
}

.submit-sup{
  margin-top: 30px;
  width: 280px;
  margin-left: 20px;
  height: 40px;
  background: rgb(0,121,234);
  border-radius: 2px;
  text-align: center;
  font-size: 15px;
  line-height: 40px;
  color: rgb(250,250,250);
  border:none;
  outline: none;
  font-family:wrf,Verdana;
  cursor: pointer;
  text-transform: uppercase;
}



	</style>
</head>
<body>
<div class="nav">
	<div class="logo"></div>
	<form class="form-login" action="http://192.168.56.101/apps/login/index.php" method="post">
		<input class="username" type="text" name="" placeholder="username">
		<input class="passwd" type="password" name="" placeholder="password">
		<input class="submit" type="submit" value="login">

	</form>
</div>
<div class="main">
	<div class="say"></div>
	<div class="signup">
	  <form id="form payment-form" class="form-signup forum" action="index.php" method="POST">
                <div class="usrtxt">Username</div>
                <input type="text" class="username-sup" id="username" name="username" placeholder="Pick a Username" value="" required="" maxlength="255">


                <div class="firstntxt" for="fname">First Name </div>

                <input type="text" class="firstn" id="fname" name="fname" placeholder="First Name" value="" required="" maxlength="255">


                <div class="lastntxt" for="lname">Last Name </div>

                <input type="text" class="lastn" id="lname" name="lname" placeholder="Last Name" value="" required="" maxlength="255">


                <div class="mntxt" for="email">Email Address </div>

                <input class="mn" type="text" name="email" id="email" placeholder="you@example.com" value="" required="" maxlength="255">      
                    
                <div class="pastxt" for="password">Password</div>

                <input class="password-sup" type="password" maxlength="255" name="password" id="password" placeholder="Password" required="" autocomplete="off" aria-describedby="passwordhelp">


                <div class="confpastxt" for="confirm">Confirm Password</div>

                <input type="password" id="confirm" required="" maxlength="255" name="confirm" class="confpas" placeholder="Confirm Password" autocomplete="off">

              
       
        <div class="termtxt">By continuing with any of the options, you agree to our By continuing with any of the options, you agree to our <a href="http://192.168.56.101/">Terms of Service</a></div>

        <button class="submit-sup " type="submit" id="next_button"><i class="fa fa-plus-square"></i> Create Account</button>
          

</form>



	</div>
</div>


<?php include_once '/var/www/main/global/footer.php' ?>


</body>
</html>