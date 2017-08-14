<?php

/*add_action('zm_sh_add_iconset', 'zm_sh_iconset_default');
function zm_sh_iconset_default(){
	global $zm_sh;
	
	$zm_sh->iconsets->add_iconset(new zm_sh_iconset_default);
	
}*/

class zm_sh_iconset_default extends __iconset_parent_class{
		public $id			= 'default';				//Required
		public $name		= 'Default';				//Required
		public $__FILE__	= __FILE__;					//Required, the path of file.
		//public $stylesheet	= "style.css";			//Optional, Use if that not named as style.css
		//public $preview_img	= "preview.png";		//Optional, Use if that not named as preview.png
		public $types		= array("square");
		public $icons		= array(
				'facebook'=>array(
								'id' => 'facebook',
								'name' => "Facebook",
								'class' => 'facebook',
								'image' => 'facebook.png',
								'url' => "http://www.facebook.com/sharer.php?u=%%permalink%%&amp;t=%%title%%",
							),
				'twitter'=>array(
								'id' => 'twitter',
								'name' => "Twitter",
								'class' => 'twitter',
								'image' => 'twitter.png',
								'url' => "http://twitter.com/share?url=%%permalink%%&amp;text=%%title%%",
							),
				'linkedin'=>array(
								'id' => 'linkedin',
								'name' => "Linkedin",
								'class' => 'linkedin',
								'image' => 'linkedin.png',
								'url' => "http://www.linkedin.com/shareArticle?mini=true&url=%%permalink%%&amp;title=%%title%%",
							),
				'googlepluse'=>array(
								'id' => 'googlepluse',
								'name' => "Google Plus",
								'class' => 'googlepluse',
								'image' => 'googlepluse.png',
								'url' => "https://plus.google.com/share?url=%%permalink%%",
							),
				'bookmark'=>array(
								'id' => 'bookmark',
								'name' => "Google Bookmarks",
								'class' => 'bookmark',
								'image' => 'bookmark.png',
								'url' => "http://www.google.com/bookmarks/mark?op=edit&bkmk=%%permalink%%&amp;title=%%title%%&annotation=%%description%%",
							),
				'pinterest'=>array(
								'id' => 'pinterest',
								'name' => "Pinterest",
								'class' => 'pinterest',
								'image' => 'pinterest.png',
								'url' => "http://pinterest.com/pin/create/button/?url=%%permalink%%&amp;media=%%imageurl%%&amp;description=%%title%%",
							),
				'mail'=>array(
								'id' => 'mail',
								'name' => "Email",
								'class' => 'mail',
								'image' => 'mail.png',
								'url' => "mailto:?subject=I wanted you to see this site&amp;body=This is about %%title%% %%permalink%%",
							),
				);
	
	
	
	
}

