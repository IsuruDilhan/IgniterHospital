
<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: Isuru 1-->
<!-- * Date: 22/12/2015-->
<!-- * Time: 21:30-->
<!-- */-->

<div class="text-center text-uppercase h1">Job Positions Information</div>

<table id="example" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr class="success">
        <th>ID</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Action</th>
    </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody class="success">
    <tr class="info">
        <?php foreach($positions as $m){ ?>
    <tr>

        <td> <?php echo $m->id ?> </td>
        <td> <?php echo $m->position; ?> </td>
        <td> <?php echo $m->salary; ?> </td>

        <td>

            <a onclick="GetData('<?php echo $m->id ?>','<?php echo $m->position; ?>','<?php echo $m->salary; ?>')" data-toggle="modal" data-target="#myModal">Edit</a>
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
                <h3 class="text-center">EDIT JOB POSITION DETAILS</h3>
            </div>
            <form method="post" action="<?php echo base_url("/manager/editPositionInfo");?>" class="">
                <div class="col-lg-2">ID</div><div class="col-lg-10"><input class="form-control" type="text" readonly name="id" id="id"></div><br><br>
                <div class="col-lg-2">Position</div><div class="col-lg-10"><input class="form-control" type="text" name="position" id="position"></div><br><br>
                <div class="col-lg-2">Salary</div><div class="col-lg-10"><input class="form-control" type="number" name="salary" id="salary"></div><br><br>
                <div class="col-lg-offset-7"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><input type="submit" class="btn btn-primary" value="Submit" id="submit" ></div>
            </form>
        </div>
    </div>
</div>

<div class="col-lg-3"></div>
<!-- Modal -->

<div class="col-lg-3"></div>

<script>
    function GetData(id,position,salary){
        document.getElementById("id").value=id;
        document.getElementById("position").value=position;
        document.getElementById("salary").value=salary;
    }

    function Delete(id){
        $.post('manager/DeletePosition', {ID: id}, function (data) {
            console.log(data);

        });
        setTimeout(function(){
            $('#menu2').load('/igniterhospital/manager/EditPos', function () {
                $('#menu2').hide();
                $('#menu2').fadeIn('fast');
            });
        },1000);

    }
</script>