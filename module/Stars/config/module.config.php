<?php 

	namespace Stars;
	use Zend\ServiceManager\Factory\InvokableFactory;
	use Zend\Router\Http\Segment;

	return
	[
		'controllers' =>
		[
			'factories' =>
			[
				Controller\StarsController::class => InvokableFactory::class,
			],
		],
		'router' =>
		[
			'routes' =>
			[
				'stars' =>
				[
					'type' => Segment::class,
					'options' =>
					[
						'route' => '/stars[/:action[/:id]]',
						'constraints' =>
						[
							'action' 	=> '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'		=> '[0-9]+',
						],
						'defaults' =>
						[
							'controller' => Controller\StarsController::class,
							'action' => 'index',
						],
					],
				],
			],
		],
		'view_manager' =>
		[
			'template_path_stack' =>
			[
				'stars' => __DIR__.'/../view',
			],
		],
	];



	//use Zend\Router\Http\Segment;

	/*return 
	[
		'view_manager' => 
		[
			'template_path_stack' =>
			[
				'stars' => __DIR__ . '/../view',
			],
		],
		'router' =>
		[
			'routes' =>
			[
				'stars' =>
				[
					'type' => Segment::class,
					'options' =>
					[
						'route' => '/stars[/:action[/:id]]',
						'constraints' =>
						[
							'action' 	=> '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'		=> '[0-9]+',
						],
						'defaults' =>
						[
							'controller' => Controller\StarsController::class,
							'action' => 'index',
						],
					],
				],
			],
		],
	];*/

?>