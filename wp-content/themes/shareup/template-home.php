<?php /* Template Name: Home Template */ get_header(); ?>

	<!-- section -->
	<section class="fold fold--home">
		<img src="<?php bloginfo('template_directory'); ?>/img/share.svg">
		<br>
		<a href="https://www.eventbrite.co.uk/e/shareup-soton-2-tickets-27349550241?ref=elink" target="_blank" class="bold link link--signup">Register your free ticket!</a>
	</section>
	<!-- /section -->

</div>

	<section class="wrapper events">

	<?php
		$args = array('post_type' => 'event', 'posts_per_page' => 5 );
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();?>
		<div class="events__post">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<!-- post thumbnail -->
			    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			    <?php the_post_thumbnail( 'small' );?>
			    <?php endif; ?>
			<!-- /post thumbnail -->
			</a>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?> - <?php echo(types_render_field( "event-date", array( 'raw' => false) )); ?></h2></a>
			<nav>
				<a target="_blank" href="<?php echo(types_render_field( "google-calendar-url", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"></a>
				<a target="_blank" href="<?php echo(types_render_field( "google-map-url", array( 'raw' => true) )); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/location.svg"></a>
				<a target="_blank" href="https://twitter.com/ShareUpSoton"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.svg"></a>
			</nav>

			<p><?php the_excerpt(); ?></p>

			<p class="bold"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read more about the event</a></p>

		</div>

	<?php endwhile; ?>

	</section>

<div class="wrapper background--dark">

	<main role="main">
		<h1>About ShareUp</h1>

		<h2>Why?</h2>
		<p>Many people make a commitment to themselves to share more online. Be that writing, code, artwork or anything else. But this commitment is often short-lived as it tumbles down the priorities list.</p>

		<h2>What?</h2>
		<p>Shareup is a real world meet up to make that same commitment to like-minded peers and support them with their own content creation goals. Each attendee's commitment will be recorded and each attendee is randomly allocated a "buddy" whose content you will help by checking before they share it publicly. It's opt-in pressure to keep content creation higher up your todo list.</p>

		<h2>Where?</h2>
		<p>We're relying on our friends at local digital agencies in the area to help out with venues to give folks an opportunity to experience different creative environments in the area. If your place of work would be up for sharing your venue for an event please let us know!</p>

		<h2>When?</h2>
		<p>We're aiming to hold Shareup every month but will be dependent on the availability of venues. Check the website and follow @shareupsoton on Twitter to find out the next event.</p>
	</main>

	<hr>

	<section class="faq">

		<h1>FAQ</h1>

		<h2>What do I have to create?</h2>
		<p>Whatever you want. The focus of Shareup is on the process and discipline of creating and sharing. What you create is entirely up to you.</p>

		<h2>What if I don't know what to create?</h2>
		<p>You don't have to make a huge commitment and we'll help you come up with something, even if it's a simple write up about the event itself. There is no pressure on what you produce, just that you produce something. You can be more adventurous when you're ready.</p>

		<h2>What if I don't understand my buddy's content?</h2>
		<p>Doesn't matter. You're there to purely help by checking it's viewable and works as the creator expected. You can offer any feedback you want be that spelling/grammar, opinion, bug reports, usability feedback or anything else but that's entirely up to you.</p>

		<h2>I'm not in Southampton, can I participate remotely?</h2>
		<p>The key thing about Shareup is the real-world commitment to actual people. If you can't get to Southampton why not create your own Shareup near you?</p>

		<h2>But...</h2>
		<p>Enough with the questions already! Everyone is welcome, so just come along - there's no reason not to!</p>

	</section>

</div>




<?php get_footer(); ?>
