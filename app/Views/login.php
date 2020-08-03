<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.form-wrapper
		{
			
			width:;
		}

	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6 QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
</style>
<body class="bg-secondary">
<form action="/" method="post">
  <div class="container w-50 h-50 border p-5 form-wrapper text-black bg-white shadow-lg" style="margin-top: 180px;"> 
  	<div class="container ">
  	<div class="row  border-bottom"><h2>Login</h1></div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="mx-auto">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" >
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
  <div class="alert alert-danger mt-3" ><?= isset($errors) ? "$errors" : "Enter all fields" ?> </div>
</div>
</div>
</form>
</body>
</html>