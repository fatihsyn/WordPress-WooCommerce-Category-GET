<style>
		.paddingcnt{
			padding-top: 20px;
		}
		.listeleme {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;

		}
		.kategori:last-child{
			border-right:none;
			size:1px;
		}

		.kategori {
		    float: left;
				border-right:1px solid #272727;
		}
		.kategori a {
				font-weight: bold;
		    display: block;
		    color: black;
		    text-align: center;
		    padding: 3px 14px;
		    text-decoration: none;
		}
		.kategori a:hover{
			color:grey;
		}
</style>



		<div class="mx-auto d-table paddingcnt">
			<ul class="listeleme">
        //Product category field | Start
				<?php
				$args = array( 'post_type'      => 'product');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				    global $product;
				    echo '<li class ="kategori">'.$product->get_categories().'</li>';
				endwhile;
				wp_reset_query();
				?>
        //Product category field | END
			</ul>
		</div>
