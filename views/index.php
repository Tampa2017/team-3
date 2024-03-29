
<?php setcookie('login', "Yo", time() + (86400 * 30), "/", "", 0); ?>

<html lang="en">

  <head>
    <script type="text/javascript" src="index.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>Narrow Jumbotron Template for Bootstrap</title>



    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <p><a id="playB" class="btn btn-lg btn-success" href="#" role="button"  onClick="soundB()">Play 🔊</a></p>
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Trivia</a></li>
            <li role="presentation"><a href="scoreboard.html">Scoreboard</a></li>
            <li role="presentation"><a href="about.html">About</a></li>
            <li role="presentation"> <?php echo $COOKIE[] ?></li>

          </ul>
        </nav>
      </div>
      <div class="jumbotron">
        <h1>Swimming With Guppies</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button" onclick="document.getElementById('id01').style.display='block'">Login</a></p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign Up</a></p>
      </div>



<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>


  <!-- Modal Content -->

      <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="loginForm" method="POST" action="/php/login.php" novalidate="novalidate">
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" class="form-control" id="name" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" name="pass" value="" required="" title="Please enter your password">
                        <span class="help-block"></span>
                    </div>
                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                    <button style="display: block; margin: 0 auto;" type="submit" class="btn btn-success btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
