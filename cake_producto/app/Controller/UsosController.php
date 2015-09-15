<?php
class UsosController extends AppController {
    public $helpers = array ('Html','Form');
    public $uses = array('Producto','Uso');

     public function edit($id = null) {
                    if (!$id) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    $post = $this->Uso->findById($id);
                    if (!$post) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    if ($this->request->is(array('post', 'put'))) {
                        $this->Uso->id = $id;
                        if ($this->Uso->save($this->request->data)) {
                            return $this->redirect(array('action' => 'add'));
                        }
                        $this->Session->setFlash(__('Unable to update your post.'));
                    }

                    if (!$this->request->data) {
                        $this->request->data = $post;
                    }
                     $this->set('productos', $this->Producto->find('list', array('fields' => array('id','nombre'))
        ));
                }

           public function delete($id) {
                    if (!$this->request->is('post')) {
                        throw new MethodNotAllowedException();
                    }
                    if ($this->Uso->delete($id)) {
                   
                        $this->redirect(array('action' => 'add'));
                    }
                }

         public function add() {
            $this->set('usos',$this->Uso->find('all'));
            if ($this->request->is('post')) {
                //Added this line
              //  $this->request->data['Uso']['user_id'] = $this->Auth->User('id');
                if ($this->Uso->save($this->request->data)) {
                    $this->Session->setFlash(__('Your post has been saved.'));
                    return $this->redirect(array('controller'=>'productos','action' => 'admin_index'));
                }
            }
             $this->set('productos', $this->Producto->find('list', array('fields' => array('id','nombre'))
        ));
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
            if ($this->Categoria->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    } 
}
?>