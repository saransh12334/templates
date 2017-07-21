<!DOCTYPE html>
<html>
<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="jquery-3.2.1.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 
		  
<title>website</title>

<link rel ="stylesheet" type="text/css" href = "stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Ubuntu" rel="stylesheet"> 
<script>
 $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</head>
<style>
.slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1s; 
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
a{
	text-decoration:none;
	color:#FFF8DC;
	font-size: 24px;
}
a:hover{
	text-decoration: none;
	color:#FFF8DC;
}
.logo-1{
	color:#FFF8DC;
	font-size: 30px;
}
.txt-e{
	color:#FFF8DC;
}
.logo-h{
	padding-left: 35px;
}
.row_1{
	padding-top: 35px;
}
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #FFF8DC;
}

.carousel-indicators li {
    border-color:#FFF8DC;
}

.carousel-indicators li.active {
    background-color: #FFF8DC;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
.panel {
    border: 1px solid #54434a; 
    border-radius:0;
    transition: box-shadow 1s;
    opacity:0.6;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgb(179, 179, 179);
    opacity:1;
}

.panel-footer .btn:hover {
    border: 1px solid #54434a;
    background-color: #54434a ;
    color: #f4511e;
}

.panel-heading {
   background-color: #54434A;
  
}
.panel-footer {
    background-color: #54434A;
}

.panel-footer h3 {
    font-size: 32px;
}

.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}

.panel-footer .btn {
    margin: 15px 0;
    background-color: #54434A;
    color: #fff;
}
.panel-body{
	background-color: #54434A;
}
.contact-1{
	color:#FFF8DC;
	font-size: 20px;
	padding-left: 35px;
}
.txt-f{
	color: #FFF8DC;
	padding-left: 35px;
	line-height: 1.5em;
	
}

.contact-2{
padding-right:45px;
}
</style>
<body>
<?php
$emailErr = $passwordErr = "";
$email = $password  = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_POST['email'])){
		$emailErr = 'Email is required';
	}
	else
	{
		$email = test_input($_POST['email']);
	if(!filter_var($email , FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format";
		}
	}

	if(empty($_POST['password'])){
		$passwordErr = "Password is required";
	}
	else{
			$password = test_input($POST['password']);
	if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$password)) 
		{
      		$passwordErr = "password does not meet the requirements"; 
    	}
		}

}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}





?>

<div class = "bg-1">
	<div class = "row">
		
		<div class = "col-md-6 txt-a">
			<h2 >Sample Website</h2>
			<p><em>Welcome to our page</em></p>
		</div>

		<div class = "col-md-6">
			<table>
				
				<tr>
					<th class = "txt-b"> Email id or Phone</th>
					<th class = "table-width-1"></th><!-- width to be defined-->
					<th class = "txt-b"> Password </th>
				</tr>

				<tr>
						<td>
							<form method = "POST" action  = "login.php" class = "form-inline">
								
								<div class  = "form-group">
									<input type = "email" id="Email" class ="form-control " name = "email"><?php echo $emailErr;?>
								</div> 
							</form>
						</td>

						<td class = "table-width-1"></td><!-- width to be defined-->

						<td>
							<form method = "POST" action  = "login.php" class = "form-inline">
								<div class = "form-group">
									<input type = "Password" id = "Password" class= "form-control" name  = "password"><?php echo $passwordErr;?>
								</div>
							</form>

						</td>

						<td class = "table-width-1"></td><!-- width to be defined-->

						<td>
							<button class ="btn btn-info btn-xs" type = "button">Log in</button>
						</td>
				</tr>
			</table>
		</div>
	</div>
<hr style = "width:85%;opacity:0.8;">
<div class = "row">
	
	<div class = "col-md-12 img-1">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
  
			<div class="carousel-inner">
				    
				    <div class="item active">
				        <img src="im1.jpg" alt="Los Angeles">
				    </div>
			    	<div class="item">
			      		<img src="im2.jpg" alt="Chicago">
			    	</div>

			    	<div class="item">
			      		<img src="im3.jpg" alt="New York">
			    	</div>
	  		
	  		</div>
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>

		</div>
	</div>
</div>
<hr style="width:85%; padding-bottom: 20px;">
<div class = "row slideanim" >
	
	<div class = "col-md-6 container">
		<div class = "txt-c">
			<h2>About us</h2><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
		</div>
	</div>

	<div class = "col-md-6 ">
		<div class = "container txt-d">
			<h2>Signup!</h2>
			<p><em>Connect with us</em></p>
		</div>

		<form class ="form-inline" method = "POST" action = "singup.php"><!-- Php file to be declared-->
			
			<div class = "form-group">
				<input type="text" name="Fname" class = "form-control" placeholder="First Name" id = "usr">
			</div><br><br>

			<div class = "form-group">
				<input type="text" name = "Lname" class = "form-control" placeholder  = "Last Name" id = "usr">
			</div><br><br>

			<div class = "form-group">
				<input type="email"  placeholder = "Email Address" class ="form-control" id = "email1" name ="email">
			</div><br><br>

			<div class = "form-group">
				<input type="Password"  placeholder = "Password" class ="form-control" id = "pwd" name = "password1">
			</div><br><br>

			<div class = "form-group">
				<input type="Password"  placeholder = "Confirm your password" class ="form-control" id = "pwd">
			</div><br><br>

			<input type="button" class = "btn btn-success btn-md" value="Sign Up!"><!--onclick function to be declared-->
		</form><!-- php file to be declared-->

	</div>
</div>
<hr style ="width:85%">

<div class = "container-fluid text-center slideanim">
	<h2 class  = "txt-e">Services</h2>
	<p class = "txt-e"><em>Services we offer to our customers</em></p>
		<div class = 'row' >
			
			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-heart logo-1"></span>
				<h2 class = "txt-e">Power</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>
		
			<div class = "col-md-3 logo-h">	
				<span class = "glyphicon glyphicon-grain logo-1"></span>
				<h2 class = "txt-e">Farming sector</h2>
				<p class="txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>

			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-headphones logo-1"></span>
				<h2 class = "txt-e">Music Industry</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>

			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-lock logo-1"></span>
				<h2 class = "txt-e">Security Firms</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>
		</div>

		<div class = "row row_1">

			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-map-marker logo-1"></span>
				<h2 class = "txt-e">Location Services</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>

			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-piggy-bank logo-1"></span>
				<h2 class = "txt-e">Banking Services</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>

			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-print logo-1"></span>
				<h2 class = "txt-e">Printing Services</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>

			<div class = "col-md-3 logo-h">
				<span class = "glyphicon glyphicon-road logo-1"></span>
				<h2 class = "txt-e">Construction Services</h2>
				<p class = "txt-e">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
			</div>
		</div>
	</div>
<hr style ="width:85%">
	<div class = "conatiner-fluid text-center">
		<div id = "myCarousel" class = "carousel slide text-center" data-ride = "carousel">
			<ol class = "carousel-indicators">
				<li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
				<li data-target = "#myCarousel" data-slide-to = "1"></li>
				<li data-target = "#myCarousel" data-slide-to = "2"></li>
			</ol>

			<div class = "carousel-inner" role = "listbox">
				<div class = "item-active">
					<h4 class = "txt-e">"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
				</div>

				<div class = "item">
					<h4 class = "txt-e"> I am so happy with the result!"<br><span style="font-style:normal;"> Vice President, Comment Box</span></h4>
				</div>

				<div class = "item">
					<h4 class = "txt-e">"This company is the best."<br><span style="font-style:normal;">Michael Roe, President, Comment Box</span></h4>
				</div>
			</div>

			<a class = "left carousel-control" href = "#myCarousel" role  = "button" data-slide = "prev">
				<span class = "glyphicon glyphicon-chevron-left" aria-hdden = "true"></span>
				<span class = "sr-only">Previous</span>
			</a>

			<a class = "right carousel-control" href = "#myCarousel" role = "button" data-slide = "next">
				<span class = "glyphicon glyphicon-chevron-right" aria-hdden = "true"></span>
				<span class = "sr-only">Next</span>
			</a>
		</div>
	</div>
<hr style="width: 85%">
	<div class = "container-fluid slideanim">
		<div class = "text-center">
			<h2 class = "txt-e">Pricing </h2>
		</div>
		<div class  = "row">
			<div class = "col-md-4">
				<div class = "panel-group">
					<div class = "panel panel-default text-center">
						
						<div class = "panel-heading txt-e">		
						<h2>Basic</h2>
						</div>

						<div class = "panel-body txt-e">
							<p><strong>20</strong>Lorem</p>
							<p><strong>15</strong>Lorem</p>
							<p><strong>10</strong>Lorem</p>
							<p><strong>7</strong>Lorem</p>
							<p><strong>5</strong>Lorem</p>
						</div>

						<div class= "panel-footer txt-e">
							<h3>$57</h3>
							<h4>per month</h4>
							<button class = "btn btn-lg">Sign up</button>
						</div>
					</div>
				</div>
			</div>

			<div class = "col-md-4">
				<div class = "panel-group">
					<div class = "panel panel-default text-center">
						
						<div class = "panel-heading txt-e">		
						<h2>Pro</h2>
						</div>

						<div class = "panel-body txt-e">
							<p><strong>30</strong>Lorem</p>
							<p><strong>25</strong>Lorem</p>
							<p><strong>20</strong>Lorem</p>
							<p><strong>15</strong>Lorem</p>
							<p><strong>10</strong>Lorem</p>
						</div>

						<div class= "panel-footer txt-e">
							<h3>$105</h3>
							<h4>per month</h4>
							<button class = "btn btn-lg">Sign up</button>
						</div>
					</div>
				</div>
			</div>

			<div class = "col-md-4">
				<div class = "panel-group">
					<div class = "panel panel-default text-center">
						
						<div class = "panel-heading txt-e">		
						<h2>Premium</h2>
						</div>

						<div class = "panel-body txt-e">
							<p><strong>40</strong>Lorem</p>
							<p><strong>35</strong>Lorem</p>
							<p><strong>20</strong>Lorem</p>
							<p><strong>20</strong>Lorem</p>
							<p><strong>11</strong>Lorem</p>
						</div>

						<div class= "panel-footer txt-e">
							<h3>$126</h3>
							<h4>per month</h4>
							<button class = "btn btn-lg">Sign up</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<hr style="width: 85%">
<div class  = "container-fluid txt-f slideanim"> 
	<div class = "text-center">
		<h2>Contact us</h2>
	</div>

	<div class = "row">

		<div class = "col-md-5 contact-1">
			<p>Contact us and we'll get back to you within 24 hours.</p>
			<p><span class ="glyphicon glyphicon-map-marker logo-1" style="font-size: 18px"></span>Delhi , India</p>
			<p><span class = "glyphicon glyphicon-envelope logo-1" style="font-size: 18px"></span>Email us at: contact@example1.com</p>
			<p><span class = "glyphicon glyphicon-earphone logo-1" style="font-size: 18px"></span>Call us at : +91-987xxxxxxx</p>
		</div>

		<div class = "col-md-7 contact-2 ">
			<div class = "row">
				<div class = "col-md-6 form-group">
					<input class ="form-control" id = "Name" name = "Name" placeholder="Your Name" type = "text" required>
				</div>

				<div class ="col-md-6 form-group">
					<input class = "form-control" type="email" name="email" id = "Email" id = "email" placeholder="Your Email" required>
				</div>
			</div>

					<textarea class ="form-control" id = "comments" name = "comments" rows = "5" placeholder="Your comments"></textarea><br>
			<div class = "row">
				<div class = "col-md-12 form-group">
					<button class = "btn btn-default pull-right" type = "submit">Send</button>
				</div>
			</div>
		</div>
	</div>
</div>

<hr style="width: 85%">
				<footer class = "container-fluid text-center slideanim">
					<a href="#myPage" title = "To top">
					<span class = "glyphicon glyphicon-chevron-up logo-1">
					</span>
					</a>
					<p class = "txt-e" style ="font-size: 24px">Theme Made by Saransh<br><a href = "https://www.facebook.com/saransh.rana" title = "Visit facebook Profile">Facebook Profile</a></p>
				</footer>
</div>






</body>
</html>