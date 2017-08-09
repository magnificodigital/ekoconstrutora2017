<section id="faq">
	<div class="container">
		<ul>
			<?php 
			$args = array(
			    'orderby' => 'date',
			    'order' => 'DESC',
			    'post_type' => 'faq',
			    'showposts' => 50
			); 
			$posts = get_posts($args);
			foreach ($posts as $post) : ?>
			<li>
				<p class="item-faq"><?php echo $post->post_title; ?></p>
				<div class="dropdown">
					<?php echo $post->post_content; ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>