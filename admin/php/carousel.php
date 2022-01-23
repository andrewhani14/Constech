<h2>Edit Landing Page</h2>
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
    Add a Slide
</button>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <form action="php/ucarousel.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Slide Title</label>
                    <input type="text" name="image_title" class="form-control" id="website"
                        placeholder="Write the Slide Title" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Slide Image</label>
                    <div class="custom-file">
                        <input type="file" name="image_path" class="custom-file-input" id="profilepic" required>
                        <label class="custom-file-label" for="projectpic">Choose Slide Image...</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Slide Caption</label>
                    <textarea class="form-control" name="image_caption" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Write the Slide Caption" required></textarea>
                </div>
                <div class="form-group col-md-2 ml-auto">
                    <input type="submit" name="addtocarousel" class="btn btn-primary form-control" value="Add Slide">
                </div>
            </div>
        </form>
    </div>
</div>

<table id="clist" class="table table-striped table-bordered table-hover table-sm .table-responsive ">
    <thead>
        <tr>
            <th class="col-1">ID</th>
            <th class="col-2">Slide Title</th>
            <th class="col-5">Slide Caption</th>
            <th class="col-2">Slide Image</th>
            <th class="col-2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query2="SELECT * FROM image_carousel";
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
                            <h6 class="modal-title" id="exampleModalLabel">Edit</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="skilleditbox">
                            <form action="php/ucarousel.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="ID" value="<?=$data2['ID']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <img src="../img/slider/<?=$data2['image_path']?>" class="img-thumbnail ooo">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Slide Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image_path" class="custom-file-input" id="profilepic" required>
                                            <label class="custom-file-label" for="projectpic">Choose Slide Image...</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="title">Slide Title</label>
                                        <input type="text" name="image_title" value="<?=$data2['image_title']?>"
                                            class="form-control" id="website" placeholder="Write the Slide Title"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleFormControlTextarea1">Slide Caption</label>
                                        <textarea class="form-control" name="image_caption" id="exampleFormControlTextarea1"
                                            rows="3" required placeholder="Write the Slide Caption"><?=$data2['image_caption']?></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" name="cupdate" value="Update">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td class="col-1">#<?=$count?></td>
                <td class="col-2"><?=$data2['image_title']?></td>
                <td class="col-5" style="text-align: left;"><?=$data2['image_caption']?></td>
                <td class="col-2"><img src="../img/slider/<?=$data2['image_path']?>" class="ooo img-thumbnail"></td>
                <td class="col-2">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#modal<?=$data2['ID']?>">
                        Edit
                    </button> <a href="php/ucarousel.php?del=<?=$data2['ID']?>"><button type="button"
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
#clist td,
th {
    vertical-align: middle;
    text-align: center;
}
 </style>
