<!DOCTYPE html>
<html lang="en">

<head>
  <title>LCC CIT Lab</title>
  
  <link rel="stylesheet" href="login.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<body>
	<div class="container">
		<div class="row">
		  <div class="col-sm-3"></div>
		  <div class="col-sm-6" id="login">
			<div class="login-screen">
				<div class="greeting">
					<p>Welcome to LCC CIT Lab <br />
					Please Login
					</p>
				</div>

				<div class="login-form">
					<div class="control-group">
					<label class="label-group" for="lnum">Username</label><br>
					<input type="text" class="login-field" value="" id="lnum">
					<label class="login-field-icon fui-user" for="login-name"></label>
					</div>

					<div class="control-group">
					<label class="label-group" id="lbl">Password</label><br>
					<input type="password" class="login-field" value="" id="pass">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>
					
					<br />
					<div class="form-actions">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					</div>
					<br />
					<input type="checkbox" name="tutor" value="tutor" id="tutChck">Are you a tutor?
				</div>
		    </div>
		  </div>
		  <div class="col-sm-3"></div>
		</div>
	</div>


</body>
