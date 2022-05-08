<div class="posts">
  <div class="post-cards">
    <?php foreach ($posts as $post) : ?>
      <?= snippet('post/card', ['post' => $post]); ?>
    <?php endforeach; ?>
  </div>
</div>