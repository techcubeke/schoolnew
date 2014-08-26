<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
		//cGrid styling with Bootstrap
		'components' => array(
				'widgetFactory' => array(
						'widgets' => array(
								'CLinkPager' => array(
										'htmlOptions' => array(
												'class' => 'pagination'
										),
										'header' => false,
										'maxButtonCount' => 5,
										'cssFile' => false,
								),
								'CGridView' => array(
										'htmlOptions' => array(
												'class' => 'table-responsive'
										),
										'pagerCssClass' => 'dataTables_paginate paging_bootstrap',
										'itemsCssClass' => 'table table-striped table-hover',
										'cssFile' => false,
										'summaryCssClass' => 'dataTables_info',
										'summaryText' => 'Showing {start} to {end} of {count} entries',
										'template' => '{items}<div class="row"><div class="col-md-5 col-sm-12">{summary}</div><div class="col-md-7 col-sm-12">{pager}</div></div><br />',
								),
						),
				),
		),	
		
		
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'school system',
	'theme'=>'abound',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

		
		
		
	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'root',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),
		

	// application components
	'components'=>array(
				'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
			
			
			
			
		// uncomment the following to enable URLs in path-format

			'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		 
	
		// uncomment the following to use a MySQL database
	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=schoolnew',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		'authManger'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	


	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'smbugua11@gmail.com',
	),

);
	