<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php wp_title( '|', true, 'left' ); ?></title>
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet"/>
	
<?php wp_head(); ?>
</head>
<body>
    

<div class="header">
    <div class="contentContainer">
        <h1><a href="<?php echo get_option('home'); ?>"><abbr title="Global Access Project">GAP</abbr> / Global Access Project</a></h1>
        <h2>A One-Stop Accessibility Shop for the <strong>Higher Education Sector</strong></h2>