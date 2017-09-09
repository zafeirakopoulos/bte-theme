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


 		<div class="bte-masthead col-sm-12">
				<div class="col-sm-1 col-sm-offset-2">
					<img height="100px" src="<?php echo get_bloginfo( 'template_directory' );?>/favicon.png">
				</div>

				<div class="col-sm-7">
					<h1 class="bte-title"><?php echo get_bloginfo( 'name' ); ?></h1>
					<!-- Static navbar -->
			         <nav class="navbar navbar-default">
			           <div class="container-fluid">
			             <div id="navbar" class="navbar-collapse collapse">
			               <ul class="nav navbar-nav">
			                 <li><a href="#">Home</a></li>
			                 <li><a href="<?php get_permalink( get_page_by_path('faculty'))?>">Faculty</a></li>
			                 <li><a href="research">Research</a></li>
			               </ul>
			               <ul class="nav navbar-nav navbar-right">
			               		<li><a href="contact">Contact</a></li>
			               </ul>
			             </div><!--/.nav-collapse -->
			           </div><!--/.container-fluid -->
			         </nav>

				</div>
		</div>

	<div class="container">
