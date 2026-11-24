<!DOCTYPE HTML>
<html>  
<head>
<title>Aments register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Registration Form</title>
     <style>
			  input[type=text], input[type=number],input[type=gender],input[type=date], input[type=email],input[type=password]{
			  width: 100%;
			  padding: 10px;
			  margin: 5px 0 22px 0;
			  display: inline-block;
			  border: none;
			  background: white;
}

				  .registerbtn {
			  background-color: #04AA6D;
			  width:100%;
			  color: white;
			  padding: 16px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  opacity: 0.9;
			   border-radius: 20px;
			}
			.select-1{
				width: 100%;
			  padding: 10px;
			  margin: 5px 0 22px 0;
			  display: inline-block;
			  border: none;
			  background: white;
			}
			.color{
				background-color:#022E30;
			}
			.color-1{
				color:#C4A484
			}
			.color-3{
				background-color:#04AA6D
			}
			.color-4{
				background-color:#BCCFC6
			}
			.width{
				width:40%
			}
			.width-1{
				width:50%
			}
			.color-5{
				   background-color: #772f1a;
background-image: linear-gradient(315deg, #772f1a 0%, #f2a65a 74%);


							}
			.color-6{
				background: #F9F6EE;
				  border-radius: 35px;
			}
			.bg-bakery {
				background: url("images/bakery1.png") no-repeat center center/cover;
			min-height: 100vh;
			
}
							
</style>
</head>
<body>	
	<div class="bg-bakery"> 
	<div class="d-flex justify-content-center  pt-5">
		<form action="class/Register1Class.php" class="color-6 color-1 p-3 width" method="post">
			<div class=" p-2 text-center ">
				<h2><b>Register Our Bakery</h2>
			</div>
			<div class="row">	
					<label> First Name</label>
					<input type="text" name="name" required>
			</div>	
			<div >
				<label>E-mail :</label>
				<input type="email" name="email" required placeholder="Email Id" >
			</div>
			<div>
				<label>Password :</label>
				<input type="password" name="password" required required placeholder="********">
			</div>
			<div>
					<label> Country :</label>
					<select class="form-select select-1"  class="" autocomplete="country" id="country" name="country">
						<option>select country</option>
						<option value="US">U.S. Outlying Islands</option>
						<option value="IND">India</option>
						<option value="AUST">Australia</option>
						<option value="CHI">china</option>
						<option value="UK">United Kingdom</option>
						<option value="US">United States</option>
						<option value="ENG">England</option>
						<option value="CAN">Canada</option>
						<option value="GER">German</option>
						<option value="AUST">Austria</option>
						<option value="JAP">Japan</option>
						<option value="PAK">Pakistan</option>
						<option value="RUSS">Russia</option>
						<option value="AMER">America</option>
						<option value="NZ">newzeland</option>
						<option value="ZW">Zimbabwe</option>
				</select>
			</div>
			<div> 
				<label>contact :</label>
				<input type="number" name="contact" required >
			</div>
			<div> 
				<label>DOB :</label>
				<input type="date" name="dob" required>
			</div>
			<div>
				<label>Gender :</label>
				<input type="radio" name="gender" value="female" required>Female
					<input type="radio" name="gender" value="male" required>Male
					<input type="radio" name="gender" value="other" required>Other
			</div>		
			<input type="submit" name="register_now" value="register now" class="registerbtn color-5">
			</form>
	</div>		
</div>
	
	

</body>
</html>