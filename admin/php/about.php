<h2>Edit About Section</h2>
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
<form method="post" action="php/uabout.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <img src="../img/<?=$data['about_picture']?>" class="oo img-thumbnail"><br>
            <label>About Picture (Minimum 600px X 600px, Maxsize 2MB)</label>
            <div class="custom-file">
                <input type="file" name="about_picture" class="custom-file-input" id="profilepic" required>
                <label class="custom-file-label" for="about_picture">Choose About Picture...</label>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="ptitle">Heading</label>
            <input type="text" name="ptitle" value="<?=$data['heading']?>" class="form-control" id="ptitle"
                placeholder="Write your Heading">
        </div>
        <div class="form-group col-md-6">
            <label for="psubtitle">Sub-Heading</label>
            <input type="text" name="psubtitle" value="<?=$data['subheading']?>" class="form-control" id="psubtitle"
                placeholder="Write your Sub-Heading" required>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdesc"
                placeholder="Write your Description"><?=$data['longdesc'];?>
    </textarea>
        </div>
    </div>
    <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>