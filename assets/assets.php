<?php 

//** add some styling **//

function replace_admin_menu_icons_css() {
     ?>
     <style>
         #adminmenu #toplevel_page_ResponsiveMe-ResponsiveMe div.wp-menu-image:before {
             content: '\f470';
         }
         #responsiveme_px_input{
         	display: block;
         	width: 100%;
         	max-width: 730px;
         }
         
         #branding{
         	float: right;
         	margin: 0 0 10px 10px;
         }
     </style>
     <?php
 }
 
 add_action( 'admin_head', 'replace_admin_menu_icons_css' );