<?php
class CategoriasController extends AppController {
    public $helpers = array ('Html','Form');

     public function edit($id = null) {
                    if (!$id) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    $post = $this->Categoria->findById($id);
                    if (!$post) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    if ($this->request->is(array('post', 'put'))) {
                        $this->Categoria->id = $id;
                        if ($this->Categoria->save($this->request->data)) {
                            return $this->redirect(array('action' => 'add'));
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
                    if ($this->Categoria->delete($id)) {
                   
                        $this->redirect(array('action' => 'add'));
                    }
                }

         public function add() {
            $this->Categoria->recursive = 1;
            $this->set('categorias',$this->Categoria->find('all'));
            if ($this->request->is('post')) {
                //Added this line
                $this->request->data['Categoria']['user_id'] = $this->Auth->User('id');
                if ($this->Categoria->save($this->request->data)) {
                    $this->Session->setFlash(__('Your post has been saved.'));
                    return $this->redirect(array('controller'=>'productos','action' => 'admin_index'));
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
            if ($this->Categoria->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    } 
}
?>