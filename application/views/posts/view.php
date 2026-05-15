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