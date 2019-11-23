<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Email\Email;
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
        $this->Auth->allow(['home', 'preview']);

        $session = $this->request->getSession();
        $user_data = $session->read('Auth.User');
        $this->set(compact('user_data'));

        if ($this->Auth->user('role') === '2') {
            return $this->redirect(['prefix'=>false,'controller'=>'posts','action' => 'index']);
        } else if ($this->Auth->user('role') === '3') {
            return $this->redirect(['prefix'=>'guest','controller'=>'posts','action' => 'index']);
        }
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
        

        $this->LoadModel('Users');

        $users = $this->paginate($this->Users);
        $this->set(compact('posts', 'users'));
    }

    public function preview() {

        $posts = $this->Posts->find('all', ['contain' => ['Categories']]);
        
        
        $data = $posts->toArray();
        $this->set('data', $data);

        $this->LoadModel('Categories');
        $categories = $this->Categories->find('all', ['fields'=>['id','name', 'class_name'],'condition'=>['enabled'=>1,], 'order'=>['display_sequence' => 'ASC']]);
        $data_categories = $categories->toArray();
        $this->set('categories', $data_categories);
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
            'contain' => ['Images']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->Log($this->request->getData(), 'debug');
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


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function sendmail() {
        /*
        $email = new Email('default');     
        $email->from(['gresola_bernard@yahoo.com' => 'My Site'])      // sender email
        ->to('gresolabernard@gmail.com') // receiver email
        ->cc('yourmanager@example.com') //  cabron copy email (optional)
        ->bcc('anothercolleage@example.com') // blind carbon (optional)
        ->subject('About')   // message subject        
        ->replyTo('you@example.com'); // email to reply to  
        
        $this->getMailer('User')->send('registered', [$user]);
        $this->Log($email, 'debug');
        */

        $email = new Email();
        $email->transport('gmail')
            ->from(['pcic.web.msg@gmail.com' => 'PCIC Website'])
            ->to('gresolabernard@gmail.com')
            ->subject('Test Subject')
            ->send('This is a test 2.');

        $this->Flash->success(__('Email has been sent'));
        $this->viewBuilder()->setLayout('admin');
    }
         
 

}