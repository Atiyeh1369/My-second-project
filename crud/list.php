<html>
 <head>
  <title>View-Users</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
 </head>
 <body>
    <div class="navbar navbar-dark bg-dark">
       <div class="container">
         <a href="#" class="navbar-brand">CRUD APPLICATION</a>
       </div>
    </div>
    <div class="container" style="padding-top:10px;">
          <div class="row">
             <div class="col-md-12">
               <?php 
                  $success = $this->session->userdata('success');
                  if($success != ""){
                  ?>
                  <div class="alert alert-success"><?php echo $success; ?></div>
                  <?php
                    }
                    ?>
                <?php 
                  $failure = $this->session->userdata('failure');
                  if($failure != ""){
                  ?>
                  <div class="alert alert-success"><?php echo $failure; ?></div>
                  <?php
                    }
                    ?>
             </div>
          </div>
       <div class="col-md-8">
         <div class="row">
          <div class="col-5"><h3>View User</h3></div>
          <div class="col-6 text-right">
            <a href="<?php echo base_url().'crud/create'; ?>" class="btn btn-primary">Create </a>
          </div>
         </div>
         <hr>
        </div>
     
      <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
                
                </tr>
                <?php if(!empty($users)){foreach($users as $user) {?>
                    <tr>
                        <td><?php echo $user['id'] ;?></td>
                        <td><?php echo $user['firstname'] ;?></td>
                        <td><?php echo $user['lastname'] ;?></td>
                        <td><?php echo $user['age'] ;?></td>
                        <td><?php echo $user['email'] ;?></td>
                        <td><a href="<?php echo base_url().'crud/edit/'.$user['id']; ?>" class="btn btn-primary" >Edit</a></td>
                        <td><a href="<?php echo base_url().'crud/delete/'.$user['id']; ?>" class="btn btn-secondary" >Delete</td>
                    </tr>
                  <?php } }else{?>
                   <tr>
                        <td colspan="5"> Record not found</td>
                   </tr>
                 <?php }?>

            </table>
        </div>
      </div>
    </div>
 </body>
</html>