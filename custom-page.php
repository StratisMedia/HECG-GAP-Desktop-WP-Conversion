<?php

/*
Template Name: Custom Page
*/


get_header();

?>






<style type="text/css">

.sidebar label
{
display: none;
}

.sidebar ul li
{
list-style: none !important;
}

.sidebar li
{
list-style: none !important;
}

.sidebar ul li a
{
color:#3570E6;
font-size:14px;
text-decoration:none;
}

.sidebar ul li a:hover
{
text-decoration:underline;
}

.mediaRelease input[type="submit"]
{
background:#3570E6;
border:1px solid #3570E6;
padding:4px 8px;
cursor:pointer;
border-radius:20px;
}

.mediaRelease a
{
color:#3570E6;
font-size:12px;
text-decoration:none;
}

.mediaRelease a:hover
{
text-decoration:underline;
}

</style>
</div></div>
<div class="mainMessage" id="mainMessage" role="banner">
    <div class="contentContainer">
        <h2><a href="/">Disability no longer a barrier to higher education</a></h2>
    </div>
</div>



<div class="executiveTeam" role="contentinfo" >
    <div class="contentContainer">

        <div class="mediaRelease" style="clear:both;">



<div style="width:60%; float:left;">

	 <?php
query_posts('$args'); ?>
<?php while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>

<?php endwhile;?>

  </div>

  
   <div style="width:33%; padding:3% 1%; float:left; margin-left:5%; background:#F2F3F4;" class="sidebar">
  <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		
			<?php dynamic_sidebar( 'sidebar' ); ?>
	
	<?php endif; ?>
 </div>
</div>

<?php



get_footer();

?>