<div class="container col-lg-12">
    <span class=""><div class="btn text-center col-lg-12 btn-primary text-uppercase" id="EditPos">Edit Positions</div></span>
    <br>
    <span class="panel"><div class="btn text-center col-lg-12 btn-primary text-uppercase" id="EditStaff">Edit Staff Information</div></span>
</div>

<script>
    $('#EditPos').click(function(){
        $('#menu2').load('manager/EditPos',function(){
            $('#menu2').hide();
            $('#menu2').fadeIn('fast');
        });
    });
    $('#EditStaff').click(function(){
        $('#menu2').load('manager/EditStaff',function(){
            $('#menu2').hide();
            $('#menu2').fadeIn('fast');
        });
    });
</script>