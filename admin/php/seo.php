<h2>Edit SEO Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Updated !
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
<form method="post" action="php/useo.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-12">
            <img src="../img/<?=$data['icon']?>" class="img-thumbnail ooo">
        </div>

        <div class="form-group col-md-6">
            <label>Siteicon (Minimum 100px X 100px, Maxsize 2MB)</label>
            <div class="custom-file">

                <input type="file" name="siteicon" class="custom-file-input" id="profilepic" required>
                <label class="custom-file-label" for="projectpic">Choose Picture...</label>
            </div>
        </div>

        <div class="form-group col-md-6 mt-auto">
            <label for="name">Website Title</label>
            <input type="name" name="title" value="<?=$data['title']?>" class="form-control" id="name"
                placeholder="Write the Website title..." required>
        </div>



        <div class="form-group col-md-12">
            <label for="email">Keywords (Seperate with ',' comma)</label>
            <input type="text" name="keywords" value="<?=$data['keyword']?>" class="form-control" id="email"
                placeholder="Write the SEO keywords..." required>
        </div>
        <div class="form-group col-md-12">
            <label for="email">Site Description (160 Characters recommended)</label>
            <input type="text" value="<?=$data['description']?>" name="description" class="form-control" id="email"
                placeholder="Write the Website description..." required>
        </div>
        <div class="form-group ml-auto">
            <input type="submit" name="seo" class="btn btn-primary" value="Update">
        </div>

</form>