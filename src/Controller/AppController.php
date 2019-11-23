<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */


    public function initialize()
    {

        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Posts',
                'action' => 'index'

            ],
            'logoutRedirect' => [
                'prefix'=>false,
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

    }

    public function beforeFilter(Event $event)
    {
        if ($this->Auth->user('role') == '1') {
            $this->Auth->allow(['logout','add', 'index','delete','edit','view','preview']);
        } else if ($this->Auth->user('role') == '2') {
            $this->Auth->allow(['logout', 'index','edit','view']);
        } else if ($this->Auth->user('role') == '3') {
            $this->Auth->allow(['logout', 'index','view']);
        } else {
            $this->Auth->allow(['home']);
        }


        $session = $this->request->getSession(); // 3.5 or more
        $user_data = $session->read('Auth.User');
        $this->set(compact('user_data'));

    }

    
}
