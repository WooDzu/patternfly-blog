<?php get_header(); ?>
		<div class="container-fluid" id="overview">
			<div id="content" class="clearfix row">

				<div id="main" class="col-md-12 clearfix" role="main">

					<article id="post-not-found" class="clearfix">

						<header>

								<h1><?php _e("File Not Found","bonestheme"); ?></h1>
								<p><?php _e("This is embarassing. We can't find what you were looking for.","bonestheme"); ?></p>

						</header> <!-- end article header -->

						<section class="post_content">

							<p><?php _e("Whatever you were looking for was not found, but maybe try looking again or search using the form below.","bonestheme"); ?></p>

							<div class="row">
								<div class="col-md-12">
									<?php get_search_form(); ?>
								</div>
							</div>

						</section> <!-- end article section -->

					</article> <!-- end article -->

				</div> <!-- end #main -->

			</div> <!-- end #content -->

			<?php get_footer(); ?>

		</div> <!-- end #overiew -->
