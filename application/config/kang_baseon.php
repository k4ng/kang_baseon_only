<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*************************************************************
* CONFIGURATION File
*
* Author 	: Kang cahya
* Blog 		: www.kang-cahya.com
* Core 		: kang_baseon
* 
*************************************************************
 */

/*
**************************************
* AUTH TEXT
**************************************
* AUTH TEXT adalah config untuk mengatur text yang berada di atas form.
* auth sendiri terdiri dari : login, register, dan recovery password.
*
* 	// SETTING DEFAULT
*	"text1"		=> "Kang",
*	"text2"		=> "baseon",
*	"tagline"	=> "I call this core for codeigniter"
* 
 */

$config["auth_text"] = array(
	"text1"		=> "Kang",
	"text2"		=> "baseon",
	"tagline"	=> "I call this core for codeigniter"
);

/*
**************************************
* SITE INFO
**************************************
* Pada bagian ini kamu hanya perlu mendefinisikan namanya saja.
* (untuk gambar pada icon dan favicon terletak di kang_baseon/assets/configs )
*
* 	// SETTING DEFAULT
*	"favicon"		=> "default.png",
*	"icon"			=> "default.png",
*	"title"			=> "Kang_baseon"
* 
 */

$config["site_info"] = array(
	"favicon"		=> "default.png",
	"icon"			=> "default.png",
	"title"			=> "KangBaseon"
);


/*
**************************************
* META
**************************************
* Pada bagian ini semua meta tag kamu bisa definisikan
* Terdapat 4 parameter :
* 	- description merupakan meta tag yang berfungsi untuk mendefinisikan deskripsi sebuah website
* 	- author merupakan meta tag yang berfungsi untuk mendefinisikan siapa authornya
* 	- keyword merupakan meta tag yang berfungsi untuk mendefinisikan keyword.
* 	- meta_extends merupakan variabel berisi array yang berfungsi untuk mendefiniskan meta tag lainnya, contohnya seperti:
*
* 	// EXAMPLE meta_extends
*   "meta_extends"	=> array(
*	  	'<meta name="site-verification" content="String_we_ask_for">'
*	)
*	
* 	// SETTING DEFAULT
*	"description"	=> "made with core kang_baseon",
*	"author"		=> "Kang cahya",
*	"keywords"		=> "kang_baseon core",
*	"meta_extends"	=> array()
* 
 */

$config["meta"] = array(
	"description"	=> "made with core kang_baseon",
	"author"		=> "Kang cahya",
	"keywords"		=> "kang_baseon core",
	"meta_extends"	=> array()
);


/*
**************************************
* JS Framework
**************************************
* Fungsi ini bertujuan untuk mengaktifkan js framework. 
* Jika nilai TRUE maka js framework akan otomatis di aktifkan dan di load pada html, untuk nilai FALSE berarti js framework tidak aktif.
*
* JS Framework yang di dukung adalah :
* - Vue 2.1
* 
 */

$config['js_framework_support'] = array('vue');
$config['js_framework'] = array(
	"vue" 		=> array(
		"load"		=> FALSE,
		"minify"	=> TRUE,
		"version"	=> "2.1"
	)
);


/*
**************************************
* ASSETS DEFAULT (CSS DAN JS)
**************************************
* Format penulisan asset default adalah :
* 
* $config['assets_default'] = array( 
*	"header" => array( 
*		"js" =>	array(),
*		"jsi" => array(),
*		"css" => array(),
*		"cssi" => array()
*	),
*	"footer" => array(
*		"js" =>	array(),
*		"jsi" => array(),
*		"css" => array(),
*		"cssi" => array()
*	)
* );
*
* jsi adalah akronim dari js include
* cssi adalah akronim dari css include
*
* 
 */

$config['assets_default'] = array( 
	"header" => array( 
		"js" =>	array(
			"js/modernizr.min.js"
		),
		"jsi" => array(),
		"css" => array(
			"css/bootstrap.min.css",
			"css/core.css",
			"css/components.css",
			"css/icons.css",
			"css/pages.css",
			"css/menu.css",
			"css/responsive.css"
		),
		"cssi" => array()
	),
	"footer" => array(
		"js" => array(
			"js/jquery.min.js",
			"js/bootstrap.min.js",
			"js/detect.js",
			"js/fastclick.js",
			"js/jquery.slimscroll.js",
			"js/jquery.blockUI.js",
			"js/waves.js",
			"js/wow.min.js",
			"js/jquery.nicescroll.js",
			"js/jquery.scrollTo.min.js",
			"plugins/initialjs/dist/initial.min.js",
			"js/jquery.core.js",
			"js/jquery.app.js"
		),
		"jsi" => array(
			"$('.initialx').initial();" 
		),
		"css" => array(),
		"cssi" => array()
	)
);


/*
**************************************
* EMAIL SERVER
**************************************
* Pada bagian ini berfungsi untuk mengatur configurasi email.
* https://github.com/PHPMailer/PHPMailer
* 
 */

$config['kang_mail'] = array(
	"smtp"	=> array(
		"host"		=> "smtp.gmail.com",
		"auth" 		=> TRUE,
		"username"	=> "yourmail@gmail.com",
		"password"	=> "yourpassword",
		"secure"	=> "TLS",
		"port"		=> 587,
		"setFrom"	=> "noreply@kangbase.on"
	)
);

/*
**************************************
* EMAIL TEMPLATE
**************************************
* Pada bagian ini berfungsi untuk mengatur text pada template email.
*
* 
 */

$config['kang_mail_template'] = array(
	"intro"		=> "Are you human ?",
	"descrip"	=> "Please confirm your email address by clicking the link below.",
	"by"		=> "&mdash; <b>KangBaseon</b> - I call this core for codeigniter"
);

/*
**************************************
* COPYRIGHT
**************************************
* Pada bagian ini berfungsi untuk mengatur copyright dan link pada footer.
* Untuk bagian link, harap perhatikan posisi array-nya, Jika pada link_name posisi about ada di array 0 maka link-url nya harus berada di posisi array 0
* 
 */

$config['copyright'] = array(
	'created_by' => '2016 © (core) Kang_baseon.',
	'link_name'	=> array(
		'About',
		'Help',
		'Contact'
	),
	'link_url'	=> array(
		'http://www.kang-cahya.com/about',
		'http://www.kang-cahya.com/help',
		'http://www.kang-cahya.com/contact'
	)
);

/*
**************************************
* MENU
**************************************
* Pada bagian ini berfungsi untuk mengatur menu.
*
* 
 */

$config['menu_reg'] = array(
	'dashboard',
	'manage_user',
	'config'
);
$config['menu'] = array(
	'dashboard' 	=> array(
		'name'	=> 'Dashboard',
		'icon'	=> 'zmdi zmdi-view-dashboard',
		'url'	=> 'main/dashboard'
	),
	'manage_user'	=> array(
		'name'	=> 'Manage User',
		'icon'	=> 'zmdi zmdi-account',
		'child' => array(
			array(
				'name' 	=> 'Create New User',
				'url'	=> 'main/dashboard'
			),
			array(
				'name' 	=> 'List User',
				'url'	=> 'main/dashboard'
			),
			array(
				'name' 	=> 'Test',
				'url'	=> 'main/dashboard'
			)
		)
	),
	'config'		=> array(
		'name'	=> 'Configuration',
		'icon'	=> 'zmdi zmdi-settings',
		'child'	=> array(
			array(
				'name'	=> 'Mailer',
				'url'	=> 'configure/mailer'
			),
			array(
				'name'	=> 'Site',
				'url'	=> 'configure/site'
			)
		)
	)
);