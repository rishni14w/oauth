<!--IT15529732-->
<!DOCTYPE html>
<html>
	<head>
		<title>Create account</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<style>
			td{
			    padding: 20px;
			}
		</style>
	</head>
	<body>

		<script>
			function requestCode()
			{
				var responseType="code";
				var clientId="811dit6wr6nk26";	
				var redirectUri="http%3A%2F%2Flocalhost%2Foauth%2Frishibakes%2Fcallback.php";
				var state="123";
				var scope="r_basicprofile%20r_emailaddress";

				window.location.href="https://www.linkedin.com/uas/oauth2/authorization?response_type="+responseType+"&client_id="+clientId+"&redirect_uri="+redirectUri+"&state="+state+"&scope="+scope;
			}
		</script>

		<div class="jumbotron text-center" style="margin-bottom:0;background-color: INDIANRED;color: white">
			<div class="container" style="margin-top:30px" >
			  	<div class="row">
				    <div class="col-sm-6" style="float: right">
						<img src="logo.jpg" alt="rishi bakes" height="100" width="100" style="border-radius: 50%;float: right">
					</div>
					<div class="col-sm-6" style="float: left">
						<h1 style="float: left;padding: 20px">RishiBakes</h1>
					</div>
			  		
		  		</div>
		  	</div>
		</div>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#" style="background-color: CRIMSON;color: white;font-size: larger;border-radius: 60%">Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact Us</a>
		      </li>    
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li> 
		    </ul>
		  </div>  
		</nav>

		<div class="container" style="margin-top:0px;background-image: url('background4.jpg');">
			<div class="row">
			    <div class="col-sm-12">			    	
					<h2 style="text-align: center;color: DARKBLUE;">Sign up and enter the world of baking!</h2> <br/><br/>
					<form action="" method="post">
						<table border="0" align="center" style="background-color: SEASHELL">
							<tr>
						        <td>Email address</td>
						        <td><input type="text" name="emailAddress" id="emailAddress"/></td>
						    </tr>
						    <tr>
						        <td>First name</td>
						        <td><input type="text" name="firstName" id="firstName"/></td>
						    </tr>
						    <tr>
						        <td>Last name</td>
						        <td><input type="text" name="lastName" id="lastName"/></td>
						    </tr>
						    <tr>
						        <td>Industry</td>
						        <td><input type="text" name="industry" id="industry"/></td>
						     </tr>
						    <tr>
						        <td>Picture URL</td>
						        <td><input type="text" name="pictureUrl" id="pictureUrl"/></td>
						    </tr>
						    <tr>
						        <td>Public profile URL</td>
						         <td><input type="text" name="publicProfileUrl" id="publicProfileUrl"/></td>
						    </tr>
						    <tr>
						    	<td><button type="button" class="btn btn-primary" id="register">Register</button></td>
						    	<td><button type="button" class="btn btn-primary" id="linkedInLogin" onclick="requestCode()">Log in with LinkedIn</button></td>
						    </tr>						        
						</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
