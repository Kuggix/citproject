<!DOCTYPE html>
<html lang="en">

<head>
  <title>LCC CIT Lab Student Home</title>
  
  <link rel="stylesheet" type="text/css"
          href="main.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>


<div class="title">
  <div class="container text-center">
    <h1>Lane Community College CIT Lab</h1>      
  </div>
</div>

<body>
<!--Nav Bar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
	<div class="navbar-header">
	  <a class="navbar-brand" href="#">CIT Lab</a>
	</div>
	<div class="collapse navbar-collapse" id="navbar">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#">Schedule</a></li>
		<li><a href="#">Questions</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#"><span class="glyphicon glyphicon-envelope"><span class="badge">1</span></span></a></li>
		<li><a href="#"><span ></span> Logout</a></li>
	  </ul>
	</div>
  </div>
</nav>

<!-- Container for student content -->
<div class="container-fluid" >
	<div class="row">
	  <div class="container">
			<div class="col-sm-2"></div>
			<div class=" col-sm-4 form-group">
			<label class="" for="class">Please tell us what class you are working on.</label>
			<select class="form-control" id="class">
				<option>classs 1</option>	
				<option>classs 2</option>	
				<option>classs 3</option>
				<option>classs 4</option>	
			</select>
			</div>
			<div class=" col-sm-4 form-group">
			<label class="" for="location">Where are you working today?</label>
			<select class="form-control" id="location">
				<option>CIT Lab</option>	
				<option>Elsewhere</option>	
			</select>
			</div>
			<div class="col-sm-2"></div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-lg-6 well" id="student_div">
		<img src="smiley.png" align="left" class="smiley">
		<h4 class="yourName">Amanda Akin</h4>
		<h4><a href="#">Edit Profile</a></h4>
	  </div>
	  <div class="col-lg-6 well" id="question_div">
		<table >
			<tr>Place Holder for Ryans question table</tr>
		</table>
	  </div>
	</div>
</div>
<!-- Container for Tutor List -->
<div class="container-fluid" id="tutor_list_table_div">
	<div class="row">
		
			<div class="col-sm-12">
				<h1 id="tutor_header">Available Tutors</h1>
				<hr>
				<table class="table table-hover" id="tutor_list_table">
				  <thead>
					<tr>
					  <th></th>
					  <th>Name</th>
					  <th>Status</th>
					  <th>Expertise</th> 
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <th><img src="smiley.png" class="smiley"></th>
					  <td>Gidget Goober</td>
					  <td>Online</td>
					  <td>Proficient in C# and shenanigans.</td>
					</tr>
					<tr>
					  <th><img src="smiley.png" class="smiley"></th>
					  <td>Billy Bob Thornton</td>
					  <td>In Lab</td>
					  <td>Jedi Knight of Python, Javascript, and all things geek.</td>
					</tr>
					<tr>
					  <th><img src="smiley.png" class="smiley"></th>
					  <td>Beyonce</td>
					  <td>Online</td>
					  <td>Queen Bee... Duh.</td>
					</tr>
				  </tbody>
				</table>
			</div>
		
	</div>
</div>

<footer class="container-fluid text-center">
		<div class="container">
			<h4>CITLab &nbsp;<small> Lane Community College &copy; 2016</small></h4
		</div>
</footer>

</body>
</html>

