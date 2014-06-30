<?php

/*
Template Name: HomePage
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




 
 
 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
  <?php the_content(); ?>
 
   
  <?php endwhile; ?>
<?php endif; ?>
 
 


 
  
 <?php   get_footer();  ?>