<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;


/**
 * Contato Controller
 *
 * @property \App\Model\Table\UsersTable $Contato
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    use MailerAwareTrait;
    public function index()
    {
        
        $contatoMsgsTable = TableRegistry::get('ContatosMsgs');
        $contatoMsg = $contatoMsgsTable->newEntity();

        if($this->request->is('post')){
            $contatoMsg = $contatoMsgsTable->patchEntity($contatoMsg, $this->request->getData());
            if($contatoMsgsTable->save($contatoMsg)){                
                $this->getMailer('Contato')->send('novaMsgContato',[$contatoMsg]);
                $contatoMsg->emailAdm = 'sistemas@esymweb.com.br';
                $this->getMailer('Contato')->send('novaMsgContatoAdm',[$contatoMsg]);
                $this->Flash->success(__('Mensagem de contato enviada com sucesso.'));
                return $this->redirect(['controller' => 'Contato', 'action' => 'index']);
            }else{
                $this->Flash->danger(__('Erro: Mensagem de contato não foi enviada com sucesso. Preencha todos os campos!'));
            }
        }

        $this->set(compact('contatoMsg'));
    }

}
