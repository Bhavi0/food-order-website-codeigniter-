<div class="container shadow-container">
  <h2 class="p-2 text-center">Add Restaurant Category</h2>
  <form action="<?php echo base_url().'admin/category/create_category';?>" class="container my-3" method="POST"
    id="myForm">
    <div class="form-group">
      <label for="category">Category</label>
      <input type="text" id="category" class="form-control" placeholder="Enter Category" name="category">
      <?php echo form_error('category'); ?>
      <span></span>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a class="btn btn-secondary" href="<?php echo base_url().'admin/category/index';?>">Back</a>
  </form>
</div>