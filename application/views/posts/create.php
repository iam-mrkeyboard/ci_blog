<h1><?= $title ?></h1>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
<div class="mb-3">
  <label class="form-label">Title</label>
  <input type="text" name="tile" class="form-control" placeholder="Add Title">
</div>
<div class="mb-3">
  <label class="form-label">body</label>
  <textarea name="body" class="form-control"></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>