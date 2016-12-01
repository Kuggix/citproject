<!DOCTYPE html>
<html lang="en">

<head>
  <title>LCC CIT Lab Student Home</title>
  
  <link rel="stylesheet" type="text/css"
          href="main.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/questionFormFix.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>

<div class="title">
  <div class="container text-center">
    <h1>Lane Community College CIT Lab</h1>      
  </div>
</div>

<body>
<div class="container-fluid">
<div id="questionFormContainer" class="col-md-4 col-md-offset-4 well">
                    <h1 class="text-center text-primary">New Question</h1>
                    <!-- The below div (#bar) is just a placeholder that uses css to make a little seperator -->
                    <div id="bar"></div>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label">Select Topic</label>
                            <div class="col-md-9">
                                <select id="topic" name="CourseNumber" class="form-control">
                                    <option>foo 1</option>
                                    <option>foo 2</option>
                                    <option>foo 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9">
                                <input type="text" name="Subject" class="form-control"  placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <textarea id="description" name="Description" class="form-control"  placeholder="Description"></textarea>     
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit question">
                        </div>
                        <div class="col-md-6">
                            <a href="#foo"><input class="btn btn-primary" type="button" value="Take me back!"></a>
                        </div>
                    </form>
                </div>
</div>



