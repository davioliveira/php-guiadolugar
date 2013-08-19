<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//Router::connect('/:language/register', array("controller" => "users", "action" => "add"), array('language' => '[a-z]{3}','persist'=>array('language')));
//Router::connect('/register', array("controller" => "users", "action" => "add"));
//Router::connect('/:language/pages/*', array("controller" => "pages", "action" => "view"), array('language' => '[a-z]{3}','persist'=>array('language')));
//Router::connect('/:language/posts/*', array("controller" => "posts", "action" => "view"), array('language' => '[a-z]{3}','persist'=>array('language')));
//Router::connect('/pages/*', array("controller" => "pages", "action" => "view"));
//Router::connect('/posts/*', array("controller" => "posts", "action" => "view"));
//Router::connect('/:language/c/*', array("controller"=>"campaigns", "action"=> "index"));
//Router::connect('/c/*', array("controller"=>"campaigns", "action"=> "index"));
#Router::connect('/:language/:controller/:action/*', array(), array('language' => '[a-z]{3}','persist'=>'language'));
//if ($plugins = CakePlugin::loaded()) {
//	foreach ($plugins as $plugin) {
//		$plugin = strtolower($plugin);
//		Router::connect("/:language/{$plugin}", array('plugin' => $plugin,
//		                                              'controller' => 'index',
//		                                              'action' => 'index'), array('language' => '[a-z]{3}',
//		                                                                          'persist' => array('language')));
//		Router::connect("/:language/{$plugin}/:controller", array('plugin' => $plugin,
//		                                                          'action' => 'index'), array('language' => '[a-z]{3}',
//		                                                                                      'persist' => array('language')));
//		Router::connect("/:language/{$plugin}/:controller/:action/*", array('plugin' => $plugin), array('language' => '[a-z]{3}',
//		                                                                                                'persist' => array('language')));
//		Router::connect("/{$plugin}", array('plugin' => $plugin, 'controller' => 'index', 'action' => 'index'));
//		Router::connect("/{$plugin}/:controller", array('plugin' => $plugin, 'action' => 'index'));
//		Router::connect("/{$plugin}/:controller/:action/*", array('plugin' => $plugin));
//	}
//}
//Router::connect('/:language', array('plugin' => 'home',
//                                    'controller' => 'index',
//                                    'action' => 'index'), array('language' => '[a-z]{3}',
//                                                                'persist' => array('language')));
//Router::connect('/:language/:controller', array('plugin' => 'home',
//                                                'action' => 'index'), array('language' => '[a-z]{3}',
//                                                                            'persist' => array('language')));
//Router::connect('/:language/:controller/:action/*', array('plugin' => 'home'), array('language' => '[a-z]{3}',
//                                                                                     'persist' => array('language')));
Router::connect('/', array('plugin' => 'home', 'controller' => 'main', 'action' => 'index'));
Router::connect('/:controller', array('plugin' => 'home', 'action' => 'index'));
Router::connect('/:controller/:action/*', array('plugin' => 'home'));
Router::parseExtensions();
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();
/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';