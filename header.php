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


 		<div class="bte-masthead container">
					<h1 class="bte-title"><?php echo get_bloginfo( 'name' ); ?></h1>
					<!-- Static navbar -->
			        <nav class="navbar navbar-default">
			          <div class="container-fluid">
			            <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			              <a class="navbar-brand" href="#">Project name</a>
			            </div>
			            <div id="navbar" class="navbar-collapse collapse">
			              <ul class="nav navbar-nav">
							  <li><a href="<?php echo get_permalink( get_page_by_path('faculty'))?>">People</a></li>
							  <li><a href="<?php echo get_permalink( get_page_by_path('research'))?>">Research</a></li>
							  <li><a href="<?php echo get_permalink( get_page_by_path('projects'))?>">Projects</a></li>
			              </ul>
			              <ul class="nav navbar-nav navbar-right">
							  <li><a href="<?php echo get_permalink( get_page_by_path('contact'))?>">Contact</a></li>
			              </ul>
			            </div><!--/.nav-collapse -->
			          </div><!--/.container-fluid -->
			        </nav>

		</div>

	<div class="container">
