<?php


class ContactosController extends AppController {
    public $helpers = array ('Html','Form');
    public $uses = array('Contacto','User');


            public function edit($id = null) {
                    if (!$id) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    $post = $this->Contacto->findById($id);
                    if (!$post) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    if ($this->request->is(array('post', 'put'))) {
                        $this->Contacto->id = $id;
                        if ($this->Contacto->save($this->request->data)) {
                            return $this->redirect(array('action' => 'add_contacto'));
                        }
                        $this->Session->setFlash(__('Unable to update your post.'));
                    }

                    if (!$this->request->data) {
                        $this->request->data = $post;
                    }
                }

           public function delete($id) {
                    if (!$this->request->is('post')) {
                        throw new MethodNotAllowedException();
                    }
                    if ($this->Contacto->delete($id)) {
                   
                        $this->redirect(array('action' => 'add_contacto'));
                    }
                }

       
   public function add_contacto() {
    $this->set('contactos',$this->Contacto->find('all'));
    if ($this->request->is('post')) {
        //anonimo o usuario
        if(!$this->Auth->User('id')){
        $this->request->data['Contacto']['user_id'] = 1;
        }else{
        $this->request->data['Contacto']['user_id'] = $this->Auth->User('id');
            }
        if ($this->Contacto->save($this->request->data)) {
            $this->Session->setFlash(__('tu comentario se guardo.'));
             /*Email*/
 
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from('inf112066@upsin.edu.mx');
        // $email->from('fcrios145@gmail.com');
        $email->to($this->User->data['Contacto']['email']);
        $email->subject('Producto para bebe');
        $email->send("Gracias por ponerse en contacto con nosotros"."\n\n".$this->request->data['Contacto']['titulo']."\n".$this->request->data['Contacto']['comentario']);
 
            return $this->redirect(array('action'=>'add_contacto'));
        }

    }
}

public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }
      if ($this->action === 'edit') {
        return true;
    }
      if ($this->action === 'delete') {
        return true;
    }
    


    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = $this->request->params['pass'][0];
        if ($this->Contacto->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
} 
}