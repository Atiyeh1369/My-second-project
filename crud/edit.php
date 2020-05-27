<html>
  <head>
     <title> Edit User </title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark"> 
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    <div class="container" style="padding-top:10;">
      <h3> Update User </h3>
      <hr>
      <form method="post" name="Createuser" action="<?php echo base_url().'crud/edit/'.$user['id'];?>">
      <div class="row">
        <div class="col-md-6">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="firstname" value="<?php echo set_value("firstname",$user['firstname']);?>" class="form-control">
                        <?php echo form_error('firstname');?>
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lastname" value="<?php echo set_value("lastname",$user['lastname']);?>" class="form-control">
                        <?php echo form_error('lastname');?>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" value="<?php echo set_value("age",$user['age']);?>" class="form-control">
                        <?php echo form_error('age');?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo set_value("email",$user['email']);?>" class="form-control">
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'crud/index';?>" class="btn-secondary btn">Cancel</a>
                    </div>
         </div>
         </div>
         </form>
         </div>





</body>
</html>
        


        