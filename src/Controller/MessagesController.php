<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Email\Email;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['sendfeedback']);

        $session = $this->request->getSession();
        $user_data = $session->read('Auth.User');
        $this->set(compact('user_data'));

        if ($this->Auth->user('role') === '1') {
            return $this->redirect(['prefix'=>'admin','controller'=>'posts','action' => 'index']);
        } else if ($this->Auth->user('role') === '3') {
            return $this->redirect(['prefix'=>'guest','controller'=>'posts','action' => 'index']);
        }
    }


    public function index()
    {
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);

        $this->set('message', $message);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function sendfeedback() {
        


        $email = new Email();
                    $email->transport('gmail')
                        ->from(["contact@renopatrimoine.fr" => "Contact Reno Patrimoine"])
                        ->to('gresolabernard@gmail.com')
                        ->subject('sdfkdjfd')
                        ->send('sdklfdjsflksjdf');

        /*
        $message = $this->Messages->newEntity();

        if ($this->request->is('post', 'put')) {
                $message = $this->Messages->patchEntity($message, $this->request->getData());

                  

                if ($this->Messages->save($message)) {

                    $this->Log($message, 'debug');
                    $email_from = $message['email'];
                    $subject = $message['subject'];
                    $content = $message['message'];

                    $email = new Email();
                    $email->transport('gmail')
                        ->from('gresola_bernard@yahoo.com')
                        ->to('gresolabernard@gmail.com')
                        ->subject($subject)
                        ->send($content);

                    $this->Flash->success(__('The email has been sent.'));

                }
                $this->Flash->error(__('The message could not be saved. Please, try again.'));

               

            
            //$this->Flash->error(__('The email was not sent. Please, try again.'));
        }
        */


    }
}
