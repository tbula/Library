<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="span4 well">
                <div class="span2">
                    <ul class="nav nav-list">
                        <?php
                            if(isset($login))
                            {
                                echo '<li class="nav-header">Hello '.$login.'</li>';
                            }
                        ?>
                        <li><a href="#"><i class="icon-ok"></i> Add book</a></li>
                        <li><a href="#"><i class="icon-remove"></i> Search book</a></li>
                        <li><a href="#"><i class="icon-remove"></i> Return book</a></li>
                        <li><a href="#"><i class="icon-remove"></i> Edit profil</a></li>
                        <li><a href="#"><i class="icon-ok"></i> Logout</a></li>
                    </ul>
                </div>
                <?php
                     if(isset($avatar))
                     {
                        echo '<img width="100" src="data:image/jpg;base64,'.$avatar.'">';
                     }
                 ?>
            </div>
            <div class="span6">
                <?php
                    if(isset($content))
                    {
                        echo $content;
                    }
                ?>
            </div>
        </div>
        <script src="/js/jquery-1.8.2.js"></script>
	<script src="/js/bootstrap.js"></script>
    </body>
</html>
