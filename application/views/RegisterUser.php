<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
         <div class="container">
            <div class ="span4 offset3 well">
                <h3>Register new user</h1>
                
                <?php
                    if(isset($error))
                    {
                       echo '<div class="alert alert-error">' .$error. '</div>';
                    }
                ?>
                
                <form name="input" action="/RegisterUser/register" method="post" enctype='multipart/form-data' >
                        <p>Login <input type="text" name="login"></p>
                        <p>Password <input type="password" name="pass"></p>
                        <p>Repeat password <input type="password" name="passconfirm"></p>
                        <p>Imie <input type="text" name="firstname"></p>
                        <p>email<input type="text" name="email"></p>
                        <p class="span2 ">
                            <button type="submit" class="btn btn-primary clearfix">Zarejstruj</button>
                            <a href="/Welcome/index" class="btn btn-primary">Zaloguj</a>
                        </p>
                </form>
               
            </div>
        </div>
        <script src="/js/jquery-1.8.2.js"></script>
	<script src="/js/bootstrap.js"></script>
    </body>
</html>
