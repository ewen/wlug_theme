<?php
/* 
 * CSS Extensions to the default theme
 */
?>

body {
	background: #F1F1F1;
}

a {
	color: #1d42be;
	text-decoration: none;
}

a:hover {
	color: #2f6fff;
}

a:visited {
	color: #1d42be;
	text-decoration: none;
}

a:visited:hover {
	color: #2f6fff;
}


div#layout_header {
	background-image: url('<?php echo $vars['url']; ?>mod/wlug_theme/img/header_bg.png');
	background-repeat: repeat-y;
	background-color: #7EB4C1;
	height: 93px;

}

div#wrapper_header {
	height: 100%;
	padding: 11px 0 0 0;
	background-image: url('<?php echo $vars['url']; ?>mod/wlug_theme/img/penguin_head.png');
	background-repeat: no-repeat;
	background-position: right top;
}

div#header_logo {
	width: 250px;
	height: 70px;
	background-image: url('<?php echo $vars['url']; ?>mod/wlug_theme/img/logo.png');
	background-repeat: no-repeat;
}

div#page_wrapper {
	padding-top: 20px;
}