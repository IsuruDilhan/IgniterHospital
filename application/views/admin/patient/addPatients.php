
<div class="container col-lg-6 modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="text-center">ADD PATIENT</h3>
        </div>
    <form method="post" action="<?php echo base_url("/admin/addPatientInfo");?>" class="">
        <div class="col-lg-2">Name</div><div class="col-lg-10"><input class="form-control" type="text" name="name"></div><br><br>
        <div class="col-lg-2">Age</div><div class="col-lg-10"><input class="form-control" type="number" name="age"></div><br><br>
        <div class="col-lg-2">Gender</div><div class="col-lg-10"><input class="" type="radio" name="gender" value="male">Male<br><input class="" type="radio" name="gender" value="female">Female</div><br><br>
        <div class="col-lg-2">Contact</div><div class="col-lg-10"><input class="form-control" type="number" name="contact"></div><br><br>
        <div class="col-lg-2">Address</div><div class="col-lg-10"><input class="form-control" type="text" name="address"></div><br><br>
        <div class="col-lg-2">Occupation</div><div class="col-lg-10"><input class="form-control" type="text" name="occupation"></div><br><br>
        <div class="col-lg-offset-7"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><input type="submit" class="btn btn-primary" value="Submit" ></div>
    </form>
    </div>
    </div>
</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
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