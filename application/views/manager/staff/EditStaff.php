
<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: Isuru 1-->
<!-- * Date: 22/12/2015-->
<!-- * Time: 21:30-->
<!-- */-->

<div class="text-center text-uppercase h1">Staff Information</div>

<table id="example" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr class="success">
        <th>ID</th>
        <th>Name</th>
        <th>NIC</th>
        <th>DOB</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Reg Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody class="success">
    <tr class="info">
        <?php foreach($staff as $m){ ?>
    <tr>

        <td> <?php echo $m->id ?> </td>
        <td> <?php echo $m->name; ?> </td>
        <td> <?php echo $m->nic; ?> </td>
        <td> <?php echo $m->dob; ?> </td>
        <td> <?php echo $m->contact; ?> </td>
        <td> <?php echo $m->address; ?> </td>
        <td> <?php echo $m->position; ?> </td>
        <td> <?php echo $m->salary; ?> </td>
        <td> <?php echo $m->date; ?> </td>
        <td>

            <a onclick="GetData('<?php echo $m->id ?>','<?php echo $m->name; ?>','<?php echo $m->nic; ?>','<?php echo $m->dob; ?>','<?php echo $m->contact; ?>','<?php echo $m->address; ?>','<?php echo $m->position; ?>','<?php echo $m->salary; ?>','<?php echo $m->date; ?>')" data-toggle="modal" data-target="#myModal">Edit</a>
            <a onclick="Delete('<?php echo $m->id ?>')">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </tr>
    </tbody>
</table>


<!--edit model-->

<div class="container col-lg-6 modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="text-center">EDIT EMPLOYEE DETAILS</h3>
            </div>
            <form method="post" action="<?php echo base_url("/admin/editPatientInfo");?>" class="">
                <div class="col-lg-2">ID</div><div class="col-lg-10"><input class="form-control" type="text" readonly name="id" id="id"></div><br><br>
                <div class="col-lg-2">Name</div><div class="col-lg-10"><input class="form-control" type="text" name="name" id="name"></div><br><br>
                <div class="col-lg-2">Age</div><div class="col-lg-10"><input class="form-control" type="number" name="age" id="age"></div><br><br>
                <div class="col-lg-2">Gender</div><div class="col-lg-10"><input class="" type="radio" name="gender" id="male" value="male">Male<br><input class="" type="radio" name="gender" id="female" value="female">Female</div><br><br>
                <div class="col-lg-2">Contact</div><div class="col-lg-10"><input class="form-control" type="number" name="contact" id="contact"></div><br><br>
                <div class="col-lg-2">Address</div><div class="col-lg-10"><input class="form-control" type="text" name="address" id="address"></div><br><br>
                <div class="col-lg-2">Occupation</div><div class="col-lg-10"><input class="form-control" type="text" name="occupation" id="occupation"></div><br><br>
                <div class="col-lg-2">Date</div><div class="col-lg-10"><input class="form-control" type="text" name="date" id="date"></div><br><br>
                <div class="col-lg-offset-7"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><input type="submit" class="btn btn-primary" value="Submit" id="submit" ></div>
            </form>
        </div>
    </div>
</div>

<div class="col-lg-3"></div>
<!-- Modal -->
<div id="myModal" class="modal hide fade" role="dialog" tabindex="-1" data-width="760">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class="col-lg-3"></div>

<script>
    function GetData(id,name,age,gender,contact,address,occupation,date){
        document.getElementById("id").value=id;
        document.getElementById("name").value=name;
        document.getElementById("address").value=address;
        document.getElementById("age").value=age;
        if(gender=='male') {
            document.getElementById('male').setAttribute("checked", "");
        }
        else document.getElementById('female').setAttribute("checked", "");

        document.getElementById("contact").value=contact;
        document.getElementById("occupation").value=occupation;
        document.getElementById("date").value=date;
//        $("#submit").click(function(){
//            setTimeout(function(){
//                $('#menu2').load('/igniterhospital/admin/PatientInfo', function () {
//                    $('#menu2').hide();
//                    $('#menu2').fadeIn('fast');
//                });
//            },1000);
//        });
    }

    function Delete(id){
        $.post('admin/DeletePatient', {ID: id}, function (data) {
            console.log(data);

        });
        setTimeout(function(){
            $('#menu2').load('/igniterhospital/admin/PatientInfo', function () {
                $('#menu2').hide();
                $('#menu2').fadeIn('fast');
            });
        },1000);

    }
</script>