<?php
	
	//Dormitórios
	$taxonomies = get_the_terms(get_the_ID(),'bedrooms');
	$c == 1;
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {
    		$dormitorio = $term->name;
        }
	endif;

	//Metragem
	$taxonomies = get_the_terms(get_the_ID(),'metreage');
	$c == 1;
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {    
    		$metragem = $term->name;
        }
	endif;

	//Dormitórios
	$taxonomies = get_the_terms(get_the_ID(),'bathroom');
	$c == 1;
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {
    		$banheiro = $term->name;
        }
	endif;

	//Dormitórios
	$taxonomies = get_the_terms(get_the_ID(),'garage');
	$c == 1;
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {
	    	$garagem = $term->name;
        }
	endif;

	//Cidade
	$taxonomies = get_the_terms(get_the_ID(),'city');
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {
	    	$cidade = $term->name;
        }
	endif;

	//Estado
	$taxonomies = get_the_terms(get_the_ID(),'state');
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {
	    	$estado = $term->name;
        }
	endif;

	//Status
	$taxonomies = get_the_terms(get_the_ID(),'status');
	if ( !empty($taxonomies) ) :
	    foreach( $taxonomies as $term ) {
	    	$status = $term->name;
        }
	endif;

	$localizacao = $cidade.'/'.$estado;

?>

<div class="enterprise">	
	<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
		<div class="thumbnail-enterprise">
			<img src="<?php the_post_thumbnail_url('enterprise-grid'); ?>" alt="<?php echo get_the_title(); ?>" />
		</div>
	</a>
	<div class="city"><?php echo $localizacao; ?></div>
	<div class="info-enterprise">
		<h2 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
		<div class="row">
			<?php if ($status != "Comercial") : ?>
			<div class="col-xs-6"><span class="icon icon-bed"><?php echo $dormitorio; ?></span></div>
			<?php else : ?>
			<div class="col-xs-6"><span class="icon icon-location"><?php _e('Localização'); ?></span></div>
			<?php endif; ?>
			<div class="col-xs-6"><span class="icon icon-metric"><?php echo $metragem; ?></span></div>
		</div>
		<div class="row">
			<div class="col-xs-6"><span class="icon icon-bathroom"><?php echo $banheiro; ?></span></div>
			<div class="col-xs-6"><span class="icon icon-vacancies"><?php echo $garagem; ?></span></div>
		</div>
	</div>
</div>