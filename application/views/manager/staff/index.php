<div class="container col-lg-12">
    <span class=""><div class="btn text-center col-lg-12 btn-primary" data-toggle="modal" data-target="#myModal">Add Staff</div></span>
    <br>
    <span class="panel"><div class="btn text-center col-lg-12 btn-primary" data-toggle="modal" data-target="#cat">Add Staff Categories</div></span>
    <br>
    <span class="panel"><div id="StaffInfo" class="btn text-center col-lg-12 btn-primary">Staff Information</div></span>
</div>

<div class="container col-lg-6 modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="text-center">ADD STAFF</h3>
            </div>
            <form method="post" action="<?php echo base_url("manager/addStaffInfo")?>" class="" id="staff">
                <div class="col-lg-2">Name</div><div class="col-lg-10"><input class="form-control" type="text" name="name" id="name"></div><br><br>
                <div class="col-lg-2">NIC</div><div class="col-lg-10"><input class="form-control" type="text" name="nic" id="nic"></div><br><br>
                <div class="col-lg-2">DOB</div><div class="col-lg-10"><input class="form-control" type="date" name="dob" id="dob"></div><br><br>
                <div class="col-lg-2">Contact</div><div class="col-lg-10"><input class="form-control" type="number" name="contact" id="contact"></div><br><br>
                <div class="col-lg-2">Address</div><div class="col-lg-10"><input class="form-control" type="text" name="address" id="address"></div><br><br>
                <div class="col-lg-2">Position</div><div class="col-lg-10">
                    <select class="form-control" id="position" onchange="getPackageAmount()" name="position">
                        <?php foreach ($positions as $package) : ?>
                            <option value="<?php echo ($package->salary); ?>"><?php echo ($package->position); ?></option>
                        <?php endforeach; ?>
                    </select></div><br><br>
                <div class="col-lg-2">Salary</div><div class="col-lg-10"><input class="form-control" type="text" name="salary" id="salary" readonly></div><br><br>
                <div class="col-lg-offset-7"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><input type="submit" class="btn btn-primary" value="Submit" id="submitStaff" ></div>
            </form>
        </div>
    </div>
</div>

<div class="container col-lg-6 modal fade" id="cat" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="text-center">ADD STAFF CATEGORIES</h3>
            </div>
            <form method="post" action="<?php echo base_url("/manager/addStaffCat") ?>" class="">
                <div class="col-lg-2">POSITION</div><div class="col-lg-10"><input class="form-control" type="text" name="position"></div><br><br>
                <div class="col-lg-2">SALARY(Rs.)</div><div class="col-lg-10"><input class="form-control" type="number" name="salary"></div><br><br>
                <div class="col-lg-offset-7"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><input type="submit" class="btn btn-primary" value="Submit" ></div>
            </form>
        </div>
    </div>
</div>

<script>
$('#submitStaff').click(function (e2) {
    e2.preventDefault();
    var name = $("#name").val();
    var contact = $("#contact").val();
    var dob = $("#dob").val();
    var position = $("#position option:selected").text();
    var salary = $("#salary").val();
    var nic = $("#nic").val();
    var address = $("#address").val();
////$('#menu2').load('/igniterhospital/admin/PatientInfo', function () {
//
////$('#menu2').hide();
////$('#menu2').fadeIn('fast');
//
////});
    $.post("manager/addStaffInfo", {
            name: name,
            contact: contact,
            dob: dob,
            position: position,
            salary: salary,
            nic: nic,
            address: address
        },
        function (data) {
            // alert(name+contact+dob+position+salary+nic+address);


////            $('#subloader').empty();
            $('#menu2').load('/igniterhospital/manager/', function () {
////                $('#subloader').hide();
////                $('#subloader').fadeIn('fast');
            });


        });
});

    function getPackageAmount() {
        document.getElementById("salary").value = document.getElementById("position").options[document.getElementById("position").selectedIndex].value;
        var e = document.getElementById("position");
        var strUser = e.options[e.selectedIndex].text;
        //alert(strUser);
    }

    $('#StaffInfo').click(function(e){
        e.preventDefault();
        $('#menu2').load('manager/StaffInfo',function(){
            $('#menu2').hide();
            $('#menu2').fadeIn('fast');
        });
    });

</script>