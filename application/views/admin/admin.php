<link rel="stylesheet" href="<?php echo CSS?>bootstrap.min.css">
<script src="<?php echo JS?>jquery-1.11.3.min.js">
//    var url = "<?php //echo JS?>//dataTables.bootstrap.min.js";
//    var url1 ="<?php //echo JS?>//jquery.dataTables.min.js";
//    var url2 ="<?php //echo CSS?>//dataTables.bootstrap.min.css";
//    $.getScript(url);
//    $.getScript(url1);
//    $.getScript(url2);
</script>
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
<!--                <li id="profile"><a href="" id="profile">Profile</a></li>-->
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
            <span class=""><div id="patients" class="btn text-center col-lg-12 btn-primary">Patients</div></span>
            <br>
            <span class="panel"><div id="prescription" class="btn text-center col-lg-12 btn-primary">Prescriptions</div></span>
        </form>
    </div>
    <div id="menu3" class="col-lg-3">
    </div>
    </div>
</body>

<script>
    var content = document.getElementById('loader').innerHTML;
    $('#patients').click(function (e2) {
        document.getElementById('sub').innerHTML=content;
        document.getElementById('sub').setAttribute("class","col-lg-12 panel-body");
        document.getElementById('menu1').setAttribute("class","col-lg-3 panel panel-heading");
        document.getElementById('menu2').setAttribute("class","col-lg-6");
//        document.getElementById('head').setAttribute("class","col-lg-3 panel panel-heading panel-warning");
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#menu2').load('/igniterhospital/admin/' + id, function () {

            $('#menu2').hide();
            $('#menu2').fadeIn('fast');

        });
        if(document.getElementById('sub').innerHTML==content){
            $('#prescription').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/admin/prescription', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
        if(document.getElementById('sub').innerHTML==content){
            $('#patients').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/admin/patients', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }

    });



    $('#prescription').click(function (e2) {
        document.getElementById('sub').innerHTML=content;
        document.getElementById('sub').setAttribute("class","col-lg-12 panel-body");
        document.getElementById('menu1').setAttribute("class","col-lg-3 panel panel-heading");
        document.getElementById('menu2').setAttribute("class","col-lg-6");
//        document.getElementById('head').setAttribute("class","col-lg-3 panel panel-heading panel-danger");
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#menu2').load('/igniterhospital/admin/' + id, function () {

            $('#menu2').hide();
            $('#menu2').fadeIn('fast');

        });
        if(document.getElementById('sub').innerHTML==content){
            $('#prescription').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/admin/prescription', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
        if(document.getElementById('sub').innerHTML==content){
            $('#patients').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/admin/patients', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
    });

    $('#profile').click(function (e2) {
        e2.preventDefault();
        document.getElementById('sub').innerHTML=content;
        document.getElementById('sub').setAttribute("class","col-lg-12 panel-body");
        document.getElementById('menu1').setAttribute("class","col-lg-3 panel panel-heading");
        document.getElementById('menu2').setAttribute("class","col-lg-6");

        $('#menu2').load('/igniterhospital/profile/index', function () {

            $('#menu2').hide();
            $('#menu2').fadeIn('fast');

        });

        if(document.getElementById('sub').innerHTML==content){
            $('#prescription').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/admin/prescription', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
        if(document.getElementById('sub').innerHTML==content){
            $('#patients').click(function (e2) {
                e2.preventDefault();

                $('#menu2').load('/igniterhospital/admin/patients', function () {

                    $('#menu2').hide();
                    $('#menu2').fadeIn('fast');

                });

            });
        }
    });
</script>