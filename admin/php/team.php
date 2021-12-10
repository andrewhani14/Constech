<h2>Edit Team Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Updated !
</div>
<?php
  }  
 } 
?>
<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
    aria-expanded="false" aria-controls="collapseExample" style="margin:20px 0px">
    Add a Member
</button>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <form action="php/uteam.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" name="t_name" class="form-control" id="website"
                        placeholder="Write the Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Team Member Photo (Minimum 100px X 100px, Maxsize 2MB)</label>
                    <div class="custom-file">
                        <input type="file" name="t_picture" class="custom-file-input" id="profilepic" required>
                        <label class="custom-file-label" for="projectpic">Choose Member Photo...</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Position</label>
                    <textarea class="form-control" name="t_position" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Write the Position" required></textarea>
                </div>
                <div class="form-group col-md-2 ml-auto">
                    <input type="submit" name="addtoteam" class="btn btn-primary form-control" value="Add Member">
                </div>
            </div>
        </form>
    </div>
</div>
<table id="teamlist" class="table table-striped table-bordered table-hover table-sm .table-responsive ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Team Member Picture</th>
            <th>Name</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query2="SELECT * FROM team";
            $queryrun2=mysqli_query($db,$query2);
            $count=1;         
            while($data2=mysqli_fetch_array($queryrun2)){
        ?>
        <tr>
            <div class="modal fade" id="modal<?=$data2['ID']?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalLabel">Edit Member</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="skilleditbox">
                            <form action="php/uteam.php" method="post">
                                <input type="hidden" name="ID" value="<?=$data2['ID']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <img src="../img/team/<?=$data2['t_picture']?>" class="ooo img-thumbnail">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Team Member Photo (Minimum 100px x 100px, Maxsize 2MB)</label>
                                        <div class="custom-file">

                                            <input type="file" name="t_picture" class="custom-file-input" id="profilepic" required>
                                            <label class="custom-file-label" for="projectpic">Choose Member
                                                Photo...</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="t_name">Name</label>
                                        <input type="text" name="t_name" value="<?=$data2['t_name']?>"
                                            class="form-control" id="website" placeholder="Write the name"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="t_position">Position</label>
                                        <input type="text" name="t_position" value="<?=$data2['t_position']?>"
                                            class="form-control" id="website" placeholder="Write the position"
                                            required>
                                    </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="tupdate" value="Update">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td >#<?=$count?></td>
                <td ><img src="../img/team/<?=$data2['t_picture']?>" class="ooo img-thumbnail"></td>
                <td ><?=$data2['t_name']?></td>
                <td ><?=$data2['t_position']?></td>
                <td >
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#modal<?=$data2['ID']?>">
                        Edit
                    </button> <a href="php/uteam.php?del=<?=$data2['ID']?>"><button type="button"
                            class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Delete
                        </button></a>
                </td>
        </tr>
        <?php $count++;
} ?>
    </tbody>
</table>
<style>
#teamlist td,
th {
    vertical-align: middle;
    text-align: center;
}
 </style>