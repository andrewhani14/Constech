<h2>Edit Contact Us Section</h2>
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

<form method="post" action="php/uhome.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="mobile">Number</label>
            <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile"
                placeholder="Write your number..." required>
        </div>

        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email"
                placeholder="Write your email..." required>
        </div>

    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" value="<?=$data['location']?>" class="form-control" id="address"
            placeholder="Write the address..." required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Contact Us Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="contact_text"
                placeholder="Write your Description" required><?=$data['contact_text'];?>
    </textarea>
        </div>
    </div>

    <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>