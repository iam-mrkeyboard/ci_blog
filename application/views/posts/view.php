<div class="row">
  <div class="col-md-8 offset-md-2">
    <h2><?= $title ?></h2>
    <p class="text-muted">Posted on <?= date('F j, Y', strtotime($post['created_at'])) ?></p>
    <hr>
    <div class="post-body">
      <?= $post['body'] ?>
    </div>
    <hr>
    <a href="<?= site_url('posts') ?>" class="btn btn-secondary">Back to Posts</a>
  </div>
</div>



<div class="d-flex gap-3 mt-6 ">

  <a href="<?= site_url('posts/edit/' . $post['slug']) ?>" class="btn btn-primary">Edit</a>

  <?php echo  form_open('/posts/delete/' . $post['id']); ?>

  <input type="submit" value="Delete" class="btn btn-danger">
  </form>
</div>