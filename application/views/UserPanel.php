<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
        <?php
            if(isset($errors))
            {
               echo '<div class="alert alert-error">' .$error. '</div>';
            }
        ?>
        <div class="container">
            <div class="span3 well">
                <form action="/UserPanel/addNewAvatar" method="POST" enctype="multipart/form-data">
                    <p><input type="file" name="avatar"/></p>
                    <p><input type="submit"/></p>
                </form> 
            </div>
            <div class="span6">
                <?php
                    if(isset($avatars))
                    {
                        foreach ($avatars as $avatar) {
                            echo '<image src="data:image/jpg;base64,'.$avatar->avatar.'"></Image>';
                        }
                    }
                ?>
            </div>
        </div>
             
        
        <script src="/js/jquery-1.8.2.js"></script>
	<script src="/js/bootstrap.js"></script>
    </body>
</html>
