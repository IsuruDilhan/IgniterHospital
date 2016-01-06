<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login screen</title>
    <link href="<?php echo base_url().LOGIN;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().LOGIN;?>css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
      <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
<!--    <![endif]-->
</head>

<body>
<?php echo form_open("auth/check_login"); ?>
    <div class="container custom-container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center">Hi, logging in?</h3>
                <br>

                <form class="form" role="form">
                    <div class="form-group custom-elem">
                        <label class="placeholder">Username</label>
                        <input id="username" type="text" name="username" class="form-control material-input" autocomplete="off">
                            <span class="bottom-liner"></span>
                            <span class="highlight"></span>
                    </div>
                    <div class="form-group custom-elem">
                        <label class="placeholder">Password</label>
                        <input id="password" type="password" name="password" class="form-control material-input" autocomplete="off">
                            <span class="bottom-liner"></span>
                            <span class="highlight"></span>
                    </div>
                </form>

                <br>
<!--                <p class="text-center"><small><b><a href="#">Forgot something?</a></b></small></p>-->
            </div>
        </div>
        <button id="flow-button" class="btn btn-custom btn-block" type="submit">Sign in</button>
    </div>

    <!-- Bootstrap.min.js was deleted since it wasn't used in this example -->
    <script src="<?php echo base_url().LOGIN;?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url().LOGIN;?>js/velocity.min.js"></script>
    <script src="<?php echo base_url().LOGIN;?>js/scripts.js"></script>
<?php echo form_close(); ?>
</body>

</html>
