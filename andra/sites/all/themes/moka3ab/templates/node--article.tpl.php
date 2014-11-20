<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  <div<?php print $content_attributes; ?>>
	<div class="breadcumb-wrapper">
			<a href='/'>← Retour à l'accueil</a>
	</div>
	<div class="header-article">
		<?php print render($content['field_image']); ?>
		<h2> <?php print $title; ?> </h2>
		<h4> <?php print render($content['field_slogan']); ?> </h4>
	</div>
	<div class="article-wrapper">
		<?php
		  // We hide the comments and links now so that we can render them later.
		  hide($content['comments']);
		  hide($content['links']);
		  print render($content);
		?>
	</div>
	<div class="col-wrapper">
		<div class="author-wrapper">
			<div class="author-pic"><?php print $user_picture; ?></div>
			<div class="author-name"><?php print $name;?></div>
		</div>
		<div class="edit-this-node"><a href="#">Éditer </a></div>
		<div class="share-this-node">
			<a class="comment-this" href="#">Commenter</a>
			<a href="#" class="partage-node">Partager</a>
		</div>
		<div class="docs-wrapper">
			<h5>Documents joints</h5>
			<div class="files-wrapper"><?php print render($content['field_fichiers']); ?></div>
		</div>
		<div class="tags-wrapper">
			<h5>#Hashtags</h5>
			<div class="hash-wrapper"><?php print render($content['field_hashtags']); ?></div>
		</div>
	</div>
	</div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>