<?php
namespace Blog;

use Zend\Router\Http\Literal;
use Zend\ServiceManger\Factory\InvokableFactory;

return [
	'controllers' => [
        'factories' => [
            Controller\ListController::class => InvokableFactory::class,
        ],
    ],

	'router' => [
		'routes' =>[
			'blog' => [
				'type' => Literal::class ,
				'options' => [
					'route'    =>'/blog',
					'defaults' => [
						'controller' => Controller\ListController::class ,
						'action'     => 'index',
					],
			    ],
		    ],
	    ],
    ],

    'view_manager' => [
    	'template_path_stack' => [
    		__DIR__ . '/../view',
    	],
    ],
];