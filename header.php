<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>


 		<div class="bte-masthead">
			<div class="col-sm-3">
				<img height="100px" src="<?php echo get_bloginfo( 'template_directory' );?>/favicon.png">
			</div>
			<div class="bte-header col-sm-9">
					<h1 class="bte-title"><?php echo get_bloginfo( 'name' ); ?></h1>
				<div class="container">
					<nav class="bte-nav">
						<a class="blog-nav-item active" href="#">Home</a>
						<?php wp_list_pages( '&title_li=' ); ?>
					</nav>
				</div>
			</div>
		</div>

	<div class="container">
