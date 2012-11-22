<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
         <div class="container">
            <div class ="span4 offset3 well">
                <h3>Welcome to library</h3>
                <form name="input" action="/UserPanel/login" method="post" enctype='multipart/form-data' >
                    <p>Login<input type='text' name='login' size=10></p>
                    <p>Password<input type='password' name="pass" size=10></p>
                    <p><input type="checkbox" name="remember"> Zapamietaj<br></p>
                    <p class="span2 ">
                        <button type="submit" class="btn btn-primary clearfix">Zaloguj</button>
                        <a href="/RegisterUser/registerForm" class="btn btn-primary clearfix">Zarejstruj</a>
                    </p>
                </form>
                <?php
                  if(isset($message))
                  {
                      echo '<div class="span2 alert alert-error">' .$message. '</div>';
                  }
             ?>
            </div>
            
        </div>
        <script src="/js/jquery-1.8.2.js"></script>
	<script src="/js/bootstrap.js"></script>
    </body>
</html>
