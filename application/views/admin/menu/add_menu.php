<div class="conatiner">
  <form action="<?php echo base_url().'admin/menu/create_menu';?>" method="POST" id="myForm" name="myForm"
    class="form-container mx-auto  shadow-container" style="width:80%" enctype="multipart/form-data">
    <h3 class="mb-3 text-center">Add Food Items</h3>
    <div class="form-group">
      <label class="control-label">Select Restaurant</label>
      <select name="rname" id="resname"
        class="form-control <?php echo (form_error('rname') != "") ? 'is-invalid' : '';?>">
        <option>--Select Restaurant--</option>
        <?php 
                if (!empty($stores)) { 
                    foreach($stores as $store) {
                        ?>
        <option value="<?php echo $store['r_id'];?>">
          <?php echo set_select('resname');?>
          <?php echo $store['name'];?>
        </option>
        <?php }
                }
                ?>
      </select>
      <?php echo form_error('rname');?>
      <span></span>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="name">Dish Name</label>
          <input type="text" class="form-control my-2 
                    <?php echo (form_error('name') != "") ? 'is-invalid' : '';?>" name="name" id="name"
            placeholder="Enter Dish name" value="<?php echo set_value('name'); ?>">
          <?php echo form_error('name'); ?>
          <span></span>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control my-2
                    <?php echo (form_error('price') != "") ? 'is-invalid' : '';?>" id="price" name="price"
            placeholder="Enter Price $" value="<?php echo set_value('price'); ?>">
          <?php echo form_error('price'); ?>
          <span></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="about">About</label>
          <input type="text" class="form-control my-2
                    <?php echo (form_error('about') != "") ? 'is-invalid' : '';?>" id="about" name="about"
            placeholder="About" value="<?php echo set_value('about'); ?>">
          <?php echo form_error('about'); ?>
          <span></span>
        </div>
        <div class="form-group">
          <label for="img">Food Image</label>
          <input type="file" id="image" name="image" placeholder="Enter Image" class="form-control my-2
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
          <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
          <span></span>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary ml-2">Submit</button>
    <a href="<?php echo base_url().'admin/menu/index'?>" class="btn btn-secondary">Back</a>
  </form>
</div>