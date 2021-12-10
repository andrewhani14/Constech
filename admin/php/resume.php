<h2>Edit Services Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Added !
</div>
<?php
  }  
 } 
?>
<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
    aria-expanded="false" aria-controls="collapseExample" style="margin:20px 0px">
    Add a Service
</button>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <form action="php/uresume.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Service Name</label>
                    <input type="text" name="title" class="form-control" id="website"
                        placeholder="Write the Service Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Service Icon (Minimum 100px X 100px, Maxsize 2MB)</label>
                    <div class="custom-file">
                        <input type="file" name="icon" class="custom-file-input" id="profilepic" required>
                        <label class="custom-file-label" for="projectpic">Choose Service Icon...</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Service Description</label>
                    <textarea class="form-control" name="workdesc" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Write the Service Description" required></textarea>
                </div>
                <div class="form-group col-md-2 ml-auto">
                    <input type="submit" name="addtoresume" class="btn btn-primary form-control" value="Add Service">
                </div>
            </div>
        </form>
    </div>
</div>

<table id="rlist" class="table table-striped table-bordered table-hover table-sm .table-responsive ">
    <thead>
        <tr>
            <th class="col-1">ID</th>
            <th class="col-2">Service Name</th>
            <th class="col-5">Service Description</th>
            <th class="col-2">Service Icon</th>
            <th class="col-2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query2="SELECT * FROM resume";
            $queryrun2=mysqli_query($db,$query2);
            $count=1;         
            while($data2=mysqli_fetch_array($queryrun2)){
        ?>
        <tr>
            <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalLabel">Edit</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="skilleditbox">
                            <form action="php/uresume.php" method="post">
                                <input type="hidden" name="id" value="<?=$data2['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <img src="../img/services/<?=$data2['icon']?>" class="ooo img-thumbnail">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Service Icon (Minimum 100px x 100px, Maxsize 2MB)</label>
                                        <div class="custom-file">

                                            <input type="file" name="icon" class="custom-file-input" id="profilepic" required>
                                            <label class="custom-file-label" for="projectpic">Choose Service
                                                Icon...</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="title">Service Name</label>
                                        <input type="text" name="title" value="<?=$data2['title']?>"
                                            class="form-control" id="website" placeholder="Write the Service name"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleFormControlTextarea1">Service Description</label>
                                        <textarea class="form-control" name="workdesc" id="exampleFormControlTextarea1"
                                            rows="3" required placeholder="Write the Service description"><?=$data2['workdesc']?></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="rupdate" value="Update">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td class="col-1">#<?=$count?></td>
                <td class="col-2"><?=$data2['title']?></td>
                <td class="col-5" style="text-align: left;"><?=$data2['workdesc']?></td>
                <td class="col-2"><img src="../img/services/<?=$data2['icon']?>" class="ooo img-thumbnail"></td>
                <td class="col-2">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#modal<?=$data2['id']?>">
                        Edit
                    </button> <a href="php/uresume.php?del=<?=$data2['id']?>"><button type="button"
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
#rlist td,
th {
    vertical-align: middle;
    text-align: center;
}
 </style>