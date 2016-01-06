<link rel="stylesheet" href="<?php echo CSS?>bootstrap.min.css">
<script src="<?php echo JS?>jquery-1.11.3.min.js"></script>
<script src="<?php echo JS?>bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo CSS?>material.min.css">
<link rel="stylesheet" href="<?php echo CSS?>material-fullpalette.min.css">
<link rel="stylesheet" href="<?php echo CSS?>ripples.min.css">
<link rel="stylesheet" href="<?php echo CSS?>roboto.min.css">
<link rel="stylesheet" href="<?php echo CSS?>custom.css">
<body>

<div>
    <div class="navbar navbar-default" id="NavBar">
        <div class="navbar-header">
            <a class="navbar-brand" href="/igniterhospital/" id="brand">HMS<sup>BETA</sup></a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id=""><a>Hello, <?php echo $_SESSION['level']?></a></li>
<!--                <li id="profile"><a href="profile">Profile</a></li>-->
                <li><a href="<?php echo base_url('/auth/logout'); ?>">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!--    <div class="container-fluid"><div class="row"><div id="head" class="col-lg-3"></div></div></div>-->
<div id="back-img"></div>
<div id="menu1" class="col-lg-3">
    <form id="sub">
    </form>
</div>
<div id="menu2" class="col-lg-6 panel panel-body">
    <form id="loader" class="col-lg-12">
        <span class=""><div id="staff" class="btn text-center col-lg-12 btn-primary">Staff</div></span>
        <br>
        <span class="panel"><div id="admin" class="btn text-center col-lg-12 btn-primary">Admins</div></span>
    </form>
</div>
<div id="menu3" class="col-lg-3">
</div>
</div>
</body>

<script>
    var content = document.getElementById('loader').innerHTML;
    $('#staff').click(function (e2) {
        document.getElementById('sub').innerHTML=content;
        document.getElementById('sub').setAttribute("class","col-lg-12 panel-body");
        document.getElementById('menu1').setAttribute("class","col-lg-3 panel panel-heading");
        document.getElementById('menu2').setAttribute("class","col-lg-6");
//        document.getElementById('head').setAttribute("class","col-lg-3 panel panel-heading panel-warning");
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#menu2').load('/igniterhospital/manager/' + id, function () {

            $('#menu2').hide();
            $('#menu2').fadeIn('fast');

        });
        if(document.getElementById('sub').innerHTML==content){
            $('#admin').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/manager/admin', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
        if(document.getElementById('sub').innerHTML==content){
            $('#staff').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/manager/staff', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }

    });



    $('#admin').click(function (e2) {
        document.getElementById('sub').innerHTML=content;
        document.getElementById('sub').setAttribute("class","col-lg-12 panel-body");
        document.getElementById('menu1').setAttribute("class","col-lg-3 panel panel-heading");
        document.getElementById('menu2').setAttribute("class","col-lg-6");
//        document.getElementById('head').setAttribute("class","col-lg-3 panel panel-heading panel-danger");
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#menu2').load('/igniterhospital/manager/' + id, function () {

            $('#menu2').hide();
            $('#menu2').fadeIn('fast');

        });
        if(document.getElementById('sub').innerHTML==content){
            $('#admin').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/manager/admin', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
        if(document.getElementById('sub').innerHTML==content){
            $('#staff').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/manager/staff', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
    });

</script>