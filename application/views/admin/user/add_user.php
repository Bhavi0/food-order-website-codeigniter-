<div class="conatiner">

  <form action="<?php echo base_url().'admin/user/create_user'; ?>" method="POST"
    class="form-container mx-auto shadow-container" style="width:80%" id="myForm">
    <h3 class="mb-3 p-2 text-center">Add User's Information</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="username">Enter Username</label>
          <input type="text" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username" id="userName"
            placeholder="Enter Username" value="<?php echo set_value('username')?>">
          <?php echo form_error('username'); ?>
          <span></span>
        </div>
        <div class="form-group">
          <label for="firstname">Enter First Name</label>
          <input type="text" class="form-control
                    <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname" id="firstName"
            placeholder="Enter First Name" value="<?php echo set_value('firstname')?>">
          <?php echo form_error('firstname'); ?>
          <span></span>
        </div>
        <div class="form-group">
          <label for="lastname">Enter Last Name</label>
          <input type="text" class="form-control 
                    <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname" id="lastName"
            placeholder="Enter Last Name" value="<?php echo set_value('lastname')?>">
          <?php echo form_error('lastname'); ?>
          <span></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="Email"
            id="email" value="<?php echo set_value('email')?>">
          <?php echo form_error('email'); ?>
          <span></span>
        </div>
        <div class="form-group">
          <label for="phone">Contact</label>
          <input type="number" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone"
            placeholder="Contact Number" id="phone" value="<?php echo set_value('phone')?>">
          <?php echo form_error('phone'); ?>
          <span></span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control
                    <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password" id="pass"
            placeholder="Password" value="<?php echo set_value('password')?>">
          <?php echo form_error('password'); ?>
          <span></span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea name="address" type="text" style="height:70px;" id="address" class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"
        value="<?php echo set_value('address');?>"></textarea>
      <?php echo form_error('address'); ?>
      <span></span>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <a href="<?php echo base_url().'admin/user/index'; ?>" class="btn btn-secondary">Back</a>
  </form>
</div>