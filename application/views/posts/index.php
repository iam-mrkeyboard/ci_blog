<h1><?= $title ?></h1>





<?php foreach ($posts as $post): ?>
  <div class="d-flex flex-row gap-3">


    <div class="card bg-light" style="max-width: 20rem;">
      <h3 class="card-header"><?= $post['tile'] ?></h3>
      <div class="card-body">
        <p class="card-title">
          <em>

            post on <?= $post['created_at'] ?>
          </em>
        </p>
        <p class="card-text"><?= $post['body'] ?></p>

        <a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']) ?>">Read More</a>
      </div>

    </div>
  <?php endforeach; ?>