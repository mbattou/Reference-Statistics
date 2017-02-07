<!DOCTYPE html>
<!-- 
Auth:Mohamed Battou
Date:22/12/2016
This is the main page that will contain the common layout of the application
 -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reference Statistics Tool - @yield('title')</title>
    <!-- CHANGE THIS TITLE FOR EACH PAGE -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>

  <body style="background-color:#DCDCDC"><!-- Light grey for the body background-->
    <!-- Default Bootstrap Navbar -->
   <!-- <nav class="navbar navbar-default"> -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Reference Statistics Tool</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">
           <!-- the old home page, active as default -->
           <!-- <li class="active"><a href="/">Home</a></li> -->
            <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
          <!-- Hide the dropdown for now-->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Forms <span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color:#DCDCDC">
                <li><a href="/ondesk">On Desk From</a></li>
                <li><a href="/offdesk">Off Desk From</a></li>
                <li><a href="/report">Report</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/demo">Demo</a></li>
                <li role="separator" class="divider">Stats Dashboard</li>
                <li><a href="/dash">Stats Dash</a></li>
                <li><a href="/sample">Sample Dashboard</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <div class="container">
    <!-- creating a blade layout -->
        @yield('content')
    </div>
    <!-- end of .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!-- Footer -->
<footer class="container-fluid text-center">
<div class="container">
  <p>Copyright - All rights reserved.</p>
  </div>
</footer>

  </body>
</html>