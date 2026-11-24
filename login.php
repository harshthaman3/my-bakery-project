<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="style.css"></link>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Login Form</title>
    
 <style>
			  input[type=email],input[type=Password]{
			  width: 100%;
			  padding: 10px;
			  margin: 5px 0 22px 0;
			  display: inline-block;
			  border: none;
			  background: white;
}

				  .submit {
			  background-color: black;
			  width:100%;
			  color: background-color: #772f1a;
				background-image: linear-gradient(315deg, #772f1a 0%, #f2a65a 74%);
			  padding: 16px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  opacity: 0.9;
			  border-radius: 20px;
			}
			.color{
				background-color:#ffe5b4;
				border-radius: 35px;
			}
			.color-1{
				color:black
			}
			.color-3{
				 background-color: #e6c79c;
				background-image: linear-gradient(315deg, #e6c79c 0%, #d6a3a3 74%);
				);
			}
			.width{
				width:40%;	
			}
			.bg-bakery1 {
				background: url("images/bakery3.jpg") no-repeat center center/cover;
			min-height: 100vh;
			
}
 .rounded {
    border-radius: 50%;
    object-fit: cover;
}
				
    </style>
</head>
<body>
	<div class=" bg-bakery1">
		<div class="container d-flex justify-content-center pt-5" >
			<form action="class/loginClass.php" class=" p-4 width color" method="post">
			<div class="d-flex  justify-content-center m-0 pb-3">
				<img width="100%" class="rounded" src="images/bakeryl.jfif" alt="Photo">
			</div>
						<div>
							<label>E-mail :</label>
							<input type="email" name="email" required>
						</div>
						<div>
							<label>Password :</label>
							<input type="password" name="password" required>
						</div>
		
				<div>
					<input type="submit" name="submit" value="Login" class="submit">
				</div>	
			
	</form>
		</div>
	</div>	

</body>
</html>