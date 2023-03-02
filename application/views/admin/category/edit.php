<div class="container shadow-container">
  <h2 class="p-2 text-center">Edit Restaurant Category "<?php echo $cat['c_name'];?>"</h2>
  <form action="<?php echo base_url().'admin/category/edit/'.$cat['c_id'];?>" class="container" method="POST"
    id="myForm">
    <div class="form-group">
      <label for="category">Category</label>
      <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category"
        value="<?php echo set_value('category', $cat['c_name']);?>">
      <?php echo form_error('category'); ?>
      <span></span>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Make Changes</button>
    <a class="btn btn-secondary" href="<?php echo base_url().'admin/category/index';?>">Back</a>
  </form>
</div>