 <h2>Edit Projects Section</h2>
 <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
 <div class="alert alert-success text-center" role="alert">
     Project Successfully Added !
 </div>
 <?php
  }  
  if($_GET['msg']=='error'){
      ?>
 <div class="alert alert-danger text-center" role="alert">
     Something wrong with your image please check type or size !
 </div>
 <?php
  } } 
?>
 <style>
.remove-image {
    display: none;
    position: absolute;
    border-radius: 10em;
    padding: 2px 6px 3px;
    text-decoration: none;
    font: 700 16px/15px sans-serif;
    background: #555;
    border: 2px solid #fff;
    color: #FFF;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
    -webkit-transition: background 0.5s;
    transition: background 0.5s;
}

.remove-image:hover {
    background: #E54E4E;
    padding: 3px 7px 5px;
    color: #fff;
    text-decoration: none;
}

.remove-image:active {
    background: #E54E4E;
}
 </style>
 <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="collapse"
     data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin:20px 0px">
     Add a Project
 </button>
 <div class="collapse" id="collapseExample">
     <div class="card card-body">
         <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label>Project Image (Minimum 600px X 600px, Maxsize 2MB)</label>
                     <div class="custom-file">
                         <input type="file" name="projectpic" class="custom-file-input" id="profilepic" required>
                         <label class="custom-file-label" for="projectpic">Choose Picture...</label>
                     </div>
                 </div>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6 mt-auto">
                     <label for="name">Project Name</label>
                     <input type="name" name="projectname" class="form-control" id="name" placeholder="Write the Project Name..." required>
                 </div>
                 <div class="form-group col-md-6 mt-auto">
                     <label for="name">Project Category</label>
                     <input type="name" name="project_category" class="form-control" id="name" placeholder="Write the Project Category..." required>
                 </div>
                 <div class="form-group col-md-6 mt-auto">
                     <label for="name">Project Location</label>
                     <input type="name" name="plocation" class="form-control" id="name" placeholder="Write the Project Location..." >
                 </div>
                 <div class="form-group col-md-6 mt-auto">
                     <label for="name">Project Year</label>
                     <input type="name" name="pyear" class="form-control" id="name" placeholder="Write the Project Year..." >
                 </div>
                 <div class="form-group col-md-12 mt-auto">
                     <label for="name">Project Description</label>
                     <textarea class="form-control" name="project_desc" id="exampleFormControlTextarea1" rows="3"
                     placeholder="Write the Project Description..." required></textarea>
                 </div>
                 <div class="form-group col-md-2 ml-auto">
                     <input type="submit" name="addtoportfolio" class="btn btn-primary" value="Add To Project">
                 </div>
         </form>
     </div>
 </div>
 </div><br>
 <table class="table table-striped table-bordered table-hover table-sm" id="projects">
     <thead>
         <tr>
             <th class="col-1">ID</th>
             <th class="col-1">Project Image</th>
             <th class="col-1">Project Name</th>
             <th class="col-1">Project Category</th>
             <th class="col-1">Project Year</th>
             <th class="col-1">Project Location</th>
             <th class="col-4">Project Description</th>
             <th class="col-1">Action</th>
             <th class="col-1">Project Gallery</th>
         </tr>
     </thead>
     <tbody>
         <?php
          $query2="SELECT * FROM portfolio";
          $queryrun2=mysqli_query($db,$query2);
          $count=1;
          while($data2=mysqli_fetch_array($queryrun2)){
            $id = $data2['id'];
          ?>
         <tr>
             <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h6 class="modal-title" id="exampleModalLabel">Edit Project</h6>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                         </div>
                         <div class="modal-body">
                             <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
                                 <input type="hidden" name="id" value="<?=$data2['id']?>">
                                 <div class="form-row">
                                     <div class="form-group col-md-12">
                                         <img src="../img/projects/<?=$data2['projectpic']?>" class="oo img-thumbnail">
                                     </div>
                                     <div class="form-group col-md-12">
                                         <label>Project Header Image (Minimum 600px x 600px, Maxsize 2MB)</label>
                                         <div class="custom-file">
                                             <input type="file" name="projectpic" class="custom-file-input" id="profilepic" required>
                                             <label class="custom-file-label" for="projectpic">Choose Picture...</label>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-row">
                                     <div class="form-group col-md-6 mt-auto">
                                         <label for="name">Project Name</label>
                                         <input type="name" name="projectname" value="<?=$data2['projectname']?>" class="form-control" id="name" required>
                                     </div>
                                     <div class="form-group col-md-6 mt-auto">
                                         <label for="name">Project Category</label>
                                         <input type="name" name="project_category" value="<?=$data2['project_category']?>" class="form-control" id="name" required>
                                     </div>
                                     <div class="form-group col-md-6 mt-auto">
                                        <label for="name">Project Location</label>
                                        <input type="name" name="plocation" value="<?=$data2['plocation']?>" class="form-control" id="name">
                                    </div>
                                    <div class="form-group col-md-6 mt-auto">
                                        <label for="name">Project Year</label>
                                        <input type="name" name="pyear" value="<?=$data2['pyear']?>" class="form-control" id="name">
                                    </div>
                                    <div class="form-group col-md-12 mt-auto">
                                        <label for="name">Project Description</label>
                                        <textarea class="form-control" name="project_desc" id="exampleFormControlTextarea1"
                                        rows="3" required><?=$data2['project_desc']?></textarea>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
                                </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal fade" id="gallery<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="galleryLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h6 class="modal-title" id="galleryLabel">Edit Gallery</h6>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         </div>
                         <div class="modal-body">
                             <form method="post" action="php/uprojectgallery.php" enctype="multipart/form-data">
                                 <div class="form-row">
                                     <h5>Add a Picture</h5>
                                     <div class="form-group col-md-12">
                                         <label>Project Picture (Minimum 600px x 600px, Maxsize 2MB)</label>
                                         <div class="custom-file">
                                             <input type="file" name="picture_path" class="custom-file-input" id="profilepic" required multiple>
                                             <label class="custom-file-label" for="files">Add Picture...</label>
                                         </div>
                                     </div>
                                     <h5>Remove Project Pictures</h5>
                                     <div class="form-row col-md-12">
                                         <?php 
						                    $query6 = "SELECT * FROM project_images where $id = project_ID";
						                    $runquery6= mysqli_query($db,$query6);
						                    while($data6=mysqli_fetch_array($runquery6)){
				                         ?>
                                         <div class="gallery-item">
                                             <div class="gallery-img">
                                                 <a class="remove-image" href="php/uprojectgallery.php?delg=<?=$data6['ID']?>" style="display: inline;">&#215;</a>
                                                 <img src="../img/projects/<?=$data6['picture_path']?>" class="ooo img-thumbnail" alt="">
                                             </div>
                                         </div>
                                         <?php } ?>
                                     </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <input type="submit" class="btn btn-primary" name="galleryAdd" value="Add Picture">
                                </div>
                             </form>
                         </div>
                        </div>
                    </div>
                </div>
             <td class="col-1">#<?=$count?></td>
             <td class="col-1"><img src="../img/projects/<?=$data2['projectpic']?>" class="ooo img-thumbnail"></td>
             <td class="col-1"><?=$data2['projectname']?></td>
             <td class="col-1"><?=$data2['project_category']?></td>
             <td class="col-1"><?=$data2['pyear']?></td>
             <td class="col-1"><?=$data2['plocation']?></td>
             <td class="col-4"><?=$data2['project_desc']?></td>
             <td class="col-1">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">Edit</button>
                <a href="php/uportfolio.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button></a>
             </td>
             <td class="col-1"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gallery<?=$data2['id']?>">Edit</button></td>
         </tr>

         <?php $count++; } ?>
     </tbody>
 </table>

<style>
#projects td,
th {
    vertical-align: middle;
    text-align: center;
}
 </style>