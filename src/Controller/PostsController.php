<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['home','preview', 'about','careers', 'sendfeedback']);

        $session = $this->request->getSession();
        $user_data = $session->read('Auth.User');
        $this->set(compact('user_data'));

        if ($this->Auth->user('role') === '1') {
            return $this->redirect(['prefix'=>'admin','controller'=>'posts','action' => 'index']);
        } else if ($this->Auth->user('role') === '3') {
            return $this->redirect(['prefix'=>'guest','controller'=>'posts','action' => 'index']);
        }
    }

    public function home() {

        $posts = $this->Posts->find('all', ['contain' => ['Categories']]);
        
        $data = $posts->toArray();
        $this->set('data', $data);

        $this->LoadModel('Categories');
        $categories = $this->Categories->find('all', ['fields'=>['id','name', 'class_name', 'enabled'], 'conditions'=>['enabled'=>1], 'order'=>['display_sequence' => 'ASC']]);
        $data_categories = $categories->toArray();
        
        $this->set('categories', $data_categories);
    }


     public function about() {

        $posts = $this->Posts->find('all', ['contain' => ['Categories']]);
        
        $data = $posts->toArray();
        $this->set('data', $data);

        $this->LoadModel('Categories');
        $categories = $this->Categories->find('all', ['fields'=>['id','name', 'class_name', 'enabled'], 'conditions'=>['enabled'=>1], 'order'=>['display_sequence' => 'ASC']]);
        $data_categories = $categories->toArray();
        
        $this->set('categories', $data_categories);
    }


    public function careers() {

         $posts = $this->Posts->find('all', ['contain' => ['Categories']]);
        
        $data = $posts->toArray();
        $this->set('data', $data);

        $this->LoadModel('Categories');
        $categories = $this->Categories->find('all', ['fields'=>['id','name', 'class_name', 'enabled'], 'conditions'=>['enabled'=>1], 'order'=>['display_sequence' => 'ASC']]);
        $data_categories = $categories->toArray();
        
        $this->set('categories', $data_categories);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {


        $posts = $this->paginate($this->Posts);
        $this->viewBuilder()->setLayout('admin');
        $this->set(compact('posts'));
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);

        $this->set('post', $post);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $categories = $this->Posts->Categories->find('list', ['limit' => 200]);
        $this->set(compact('post', 'categories'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {

                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $this->set(compact('post'));
    }





}
