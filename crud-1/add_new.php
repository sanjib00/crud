<?php
//$student_Id = $_GET["student_Id"];
mysql_connect('localhost','root','');
mysql_select_db('ftfl');

//$qury = mysql_query("SELECT * from students WHERE id=$student_Id");

//$data = mysql_fetch_object($qury);

if(isset($_POST["student_Name"])){
    $student_Name = $_POST["student_Name"];

    mysql_query("INSERT into students (name) values ('$student_Name')");
    header('location: view_All_Students.php?msg=add');
}
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>SHAL Solutions Ltd.</title>

    <!-- Bootstrap core CSS -->
    <link href="Dashboard%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Dashboard%20Template%20for%20Bootstrap_files/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css" id="holderjs-style"></style></head>

  <body>
  
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FTFL Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input class="form-control" placeholder="Search..." type="text">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">MENU</a></li>
            <li><a href="add_new.html">Add Student</a></li>
            <li><a href="add_courses.html">Add New Courses</a></li>
            <li><a href="all_students.html">View All Students</a></li>
			<li><a href="all_courses.html">View All Courses</a></li>
			<li><a href="#">Forum</a></li>
		    <li><a href="#">Contact Us</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            
            <li><a href="">Profile</a></li>
			<li><a href="">Messages</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          
            <li><a href="">Notifications</a></li>
          </ul>
        </div>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FTFL Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input class="form-control" placeholder="Search..." type="text">
          </form>
        </div>
      </div>
    </div>

    
        <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">
         			
		

    <div class="panel-heading"><h4>ADD NEW STUDENT</h4></div>
        <div class="panel-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="inputName">Student Name</label>
                    <input type="name" name="student_Name" class="form-control" id="inputName" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary">ADD</button>
            </form>


        </div>
    </div>


			
      </div>

          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/jquery.js"></script>
    <script src="Dashboard%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
    <script src="Dashboard%20Template%20for%20Bootstrap_files/docs.js"></script>
  

<div data-original-title="Copy to clipboard" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" height="100%" width="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1407987260558">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="Dashboard%20Template%20for%20Bootstrap_files/ZeroClipboard.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit" height="100%" width="100%">                </object></div></body></html>