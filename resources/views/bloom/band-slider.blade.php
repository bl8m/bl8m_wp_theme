<?php
	$slider_taxonomy_id = esc_attr( $taxonomy_id );

	$slides_array = get_posts(
	    array(
	        'posts_per_page' => -1,
	        'post_type' => 'slide',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'slider',
	                'field' => 'term_id',
	                'terms' => $slider_taxonomy_id,
	            )
	        )
	    )
	);

?>

<div class="slider-container">

	@if(!empty($slides_array))
		<div class="slick-carousel">
			@foreach($slides_array as $slide)	
				<?php
				setup_postdata($slide);
				$slide->fields = get_fields($slide->ID);
				?>
			<div class="slide" style="background-image:url('{{ $slide->fields['image'] }}')">
				<div class="container">

					<div class="caption">

						<h2>{{ $slide->post_title }}</h2>
						<h4>{{ $slide->fields['summary'] }}</h4>

						
						@if($slide->fields['cta_enabled'])
							<div class="text-right">
								<a class="cta cta-slider" href="{{ $slide->fields['cta_link'] }}" {{ $slide->fields['cta_link_blank']?' target="_blank"':'' }}>{{ $slide->fields['cta_label'] }}</a>
							</div>
						@endif

					</div>
				</div>
			</div>	

			@endforeach
		</div>

		@endif
			
</div>

