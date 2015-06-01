<?php 
add_action('wp_head','hook_css');

function hook_css()
{

	$plugins_url = plugins_url();
	echo '<link rel="stylesheet" href="'. $plugins_url .'/ResponsiveMe/assets/responsive-nav.css" type="text/css" />';
	
	$breakpoint = esc_attr( get_option('set_reponsiveme_breakpoint') );
	$customCSS = esc_attr( get_option('custom_responsiveme_css') );
	$navigationClass = esc_attr( get_option('set_reponsiveme_navclass') );
	$brandColor = esc_attr( get_option('set_reponsiveme_main_color') );
	
	$h1 = esc_attr( get_option('set_reponsiveme_h1') );
	$h1lineheight = $h1 / 100 * 120;
	
	$h2 = esc_attr( get_option('set_reponsiveme_h2') );
	$h2lineheight = $h2 / 100 * 120;
	
	$h3 = esc_attr( get_option('set_reponsiveme_h3') );
	$h3lineheight = $h3 / 100 * 120;

	$h4 = esc_attr( get_option('set_reponsiveme_h4') );
	$h4lineheight = $h4 / 100 * 120;
	
	$h5 = esc_attr( get_option('set_reponsiveme_h5') );
	$h5lineheight = $h5 / 100 * 120;
	
	$h6 = esc_attr( get_option('set_reponsiveme_h6') );
	$h6lineheight = $h6 / 100 * 120;
	
	$p = esc_attr( get_option('set_reponsiveme_p') );
	$plineheight = $p / 100 * 120;
	
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	
	echo '<style>		
		.nav-collapse{
		  margin: 0;
		  padding: 0;
		  width: 100%;
		  display: block;
		  list-style: none;
		}
		
		ul.nav-collapse{
			display:block;
			width: 100%;
		}
		
		.nav-collapse li {
		  width: 100%;
		  display: block;
		}
		
		.js .nav-collapse {
		  clip: rect(0 0 0 0);
		  max-height: 0;
		  position: absolute;
		  display: block;
		  overflow: hidden;
		  zoom: 1;
		}
		
		.nav-collapse.opened {
		  max-height: 9999px;
		}
		
		.nav-toggle {
		  -webkit-tap-highlight-color: rgba(0,0,0,0);
		  -webkit-touch-callout: none;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  -o-user-select: none;
		  user-select: none;
		}
		
		@media screen and (min-width: '. $breakpoint .') {
		  .js .nav-collapse {
		    position: relative;
		  }
		  .js .nav-collapse.closed {
		    max-height: none;
		  }
		  .nav-toggle {
		    display: none;
		  }
		}
		</style>
	';
	
	echo '<style>';
	
	echo '@media screen and (max-width:'. $breakpoint .'px){';
		
		echo '
			  html, body{
			  	margin: 0!important;
			  	padding: 0!important;
			  	width: 100%!important;
			  }
			  
			  div{width: 100%!important;
				font-size: '. $p .'px;
				padding-left: 0!important;
				padding-right: 0!important;
				margin-left: 0!important;
				margin-right: 0!important;
			   }
			  
			  * img, * h1 a, * h2 a, * h3 a, * h4 a, * h5 a, * h6 a{
				width: 100%!important;
				height: auto!important;
			  }
			  
			  .menu-item a, .menu-item span{
			  	display: block!important;
			  	font-size: 16px!important;
			  	text-align: center!important;
			  	padding: 15px 0!important;
			  	background: #f1f1f1!important;
			  	color: #333!important;
			  	border-bottom: 2px groove #fff!important;
			  }
			  
			  .current-page-ancestor a, .current-page-ancestor span, .current-menu-item a, .current-menu-item span{
				  color: '. $brandColor .'!important;
			  }
			  
			  .nav-toggle{
			  	width: 90%!important;
			  	display: block!important;
		  		font-size: 16px!important;
		  		text-align: right!important;
		  		padding: 15px 5%!important;
		  		background: '. $brandColor .'!important;
		  		color: #fff!important;
		  		border-bottom: 2px groove '. $brandColor .'!important;
			  }
			  
			  ';
		
		if ($h1) {
		    echo 'h1{
		    	font-size:'.$h1.'px!important;
		    	line-height:'.$h1lineheight.'px!important;
		    	font-weight: normal;
		    	display:block!important;
		    	overflow:hidden!important;
		    }
		    h1 a, h1 span, h1 strong, h1 b, h1 em, h1 i{
		    	font-size:'.$h1.'px!important;
		    	line-height:'.$h1lineheight.'px!important;
		    	font-weight: normal;
		    }';
		}
		
		if ($h2) {
		    echo 'h2{
		    	font-size:'.$h2.'px!important;
		    	line-height:'.$h2lineheight.'px!important;
		    	font-weight: bold;
		    	display:block!important;
		    	overflow:hidden!important;
		    }
		    h2 a, h2 span, h2 strong, h2 b, h2 em, h2 i{
		    	font-size:'.$h2.'px!important;
		    	line-height:'.$h2lineheight.'px!important;
		    	font-weight: bold;
		    }';
		}
		
		if ($h3) {
		    echo 'h3{
		    	font-size:'.$h3.'px!important;
		    	line-height:'.$h3lineheight.'px!important;
		    	font-weight: bold;
		    	display:block!important;
		    	overflow:hidden!important;
		    }
		    h3 a, h3 span, h3 strong, h3 b, h3 em, h3 i{
		    	font-size:'.$h3.'px!important;
		    	line-height:'.$h3lineheight.'px!important;
		    	font-weight: bold;
		    }';
		}
		
		if ($h4) {
		    echo 'h4{
		    	font-size:'.$h4.'px!important;
		    	line-height:'.$h4lineheight.'px!important;
		    	font-weight: bold;
		    	display:block!important;
		    	overflow:hidden!important;
		    }
		    
		    h4 a, h4 span, h4 strong, h4 b, h4 em, h4 i{
		    	font-size:'.$h4.'px!important;
		    	line-height:'.$h4lineheight.'px!important;
		    	font-weight: bold;
		    }';
		}
		
		if ($h5) {
		    echo 'h5{
		    	font-size:'.$h5.'px!important;
		    	line-height:'.$h5lineheight.'px!important;
		    	font-weight: bold;
		    	display:block!important;
		    	overflow:hidden!important;
		    }
		    h5 a, h5 span, h5 strong, h5 b, h5 em, h5 i{
		    	font-size:'.$h5.'px!important;
		    	line-height:'.$h5lineheight.'px!important;
		    	font-weight: bold;
		    }';
		}
		
		if ($h6) {
		    echo 'h6{
		    	font-size:'.$h6.'px!important;
		    	line-height:'.$h6lineheight.'px!important;
		    	font-weight: bold;
		    	display:block!important;
		    	overflow:hidden!important;
		    }
		    
		    h6 a, h6 span, h6 strong, h6 b, h6 em, h6 i{
		    	font-size:'.$h6.'px!important;
		    	line-height:'.$h6lineheight.'px!important;
		    	font-weight: bold;
		    }';
		}
		
		if ($p) {
			echo 'p{
				display:block!important;
				overflow:hidden!important;
				font-size:'.$p.'px!important;
				line-height:'.$plineheight.'px!important;
				font-weight: normal;
			}';
		}
		
		echo $customCSS;
	echo '}
	</style>
	';
}