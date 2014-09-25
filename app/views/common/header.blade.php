<?php
	$header	= SiteVars::getSiteVars( 'HEADER' ); ?>
<head>

	<meta charset="utf-8" />
	
	<title><?php echo $header['title']; ?></title>
	
	<meta name="description" content="" />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="author" content="<?php echo $header['author']; ?>" />
	<meta name="Copyright" content="<?php echo $header['copyright']; ?>" />

	<meta name="DC.title" content="<?php echo $header['title']; ?>" />
	<meta name="DC.subject" content="<?php echo $header['tagline']; ?>" />
	<meta name="DC.creator" content="<?php echo $header['author']; ?>" />
	
	<meta name="google-site-verification" content="" />
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<link rel="shortcut icon" href="<?php echo Request::root()?>/img/favicon.png"/>
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on broswer support: http://mky.be/favicon/ -->
	
	<link rel="apple-touch-icon" href="-/img/custom_icon.png"/>
	
	<link href="<?php echo Request::root() ?>/css/sass/style.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
		base_url	= '<?php echo Request::root(); ?>';
	</script>	



	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->

	<?php
/*	if($page['head']['css']['files']){
		foreach($page['head']['css']['files'] as $file){
			echo '<link rel="stylesheet" type="text/css" href="/_css/'.$file['name'].'" media="'.$file['media'].'" />'."\r\n";
		
		}
	}*/
	?>
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if !IE 7]>
		<style type="text/css">
			#wrap {display:table;height:100%}
		</style>
	<![endif]-->	
	
	<!-- don't forget Google Analytics -->

</head>
<body>
<body>
    <div id="wrapper">
        <header>
            <h1>The Distribution Engine</h1>
        </header>
		<nav>
			@include( 'common.navigation' )
		</nav>
			