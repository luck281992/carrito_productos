<?php


class ProductosController extends AppController {
    public $helpers = array ('Html','Form');
    public $uses = array('Producto', 'Categoria','Uso','User');



            public function edit($id = null) {
                    if (!$id) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    $post = $this->Producto->findById($id);
                    if (!$post) {
                        throw new NotFoundException(__('Invalid post'));
                    }

                    if ($this->request->is(array('post', 'put'))) {
                        $this->Producto->id = $id;
                        if ($this->Producto->save($this->request->data)) {
                            return $this->redirect(array('action' => 'add'));
                        }
                        $this->Session->setFlash(__('Unable to update your post.'));
                    }

                    if (!$this->request->data) {
                        $this->request->data = $post;
                    }
                    $this->set('categorias', $this->Categoria->find('list', array('fields' => array('id','nomb'))
        ));
                    
                }

           public function delete($id) {
                    if (!$this->request->is('post')) {
                        throw new MethodNotAllowedException();
                    }
                    if ($this->Producto->delete($id)) {
                   
                        $this->redirect(array('action' => 'add'));
                    }
                }

         public function index_conocenos(){
           $this->set('productos',$this->Producto->find('all',array(
        'limit' => '3')));
        }

        public function index_localizanos(){
               $this->set('productos',$this->Producto->find('all',array(
            'limit' => '3')));
            }

        public function admin_index(){
           $this->set('productos',$this->Producto->find('all',array(
        'limit' => '3')));
        }

        public function buscar(){
          if ($this->request->is('post')) {      
            $nomb=$this->request->data['Producto']['nombre'];
                $this->paginate = array(
                 'conditions' => array('Producto.id !=' => '6'),
                 'limit' => 3,
                'ORDER BY' => array('id' => 'ASC'),
                'conditions'=> array('Producto.nombre ='=> $nomb)
            );
             $posts=$this->paginate('Producto');

            $this->set('productos', $posts);
        }

    }

     public function detalle_producto($id){
        //$this->Producto->recursive = 1;
        $this->Producto->id = $id;
        $this->set('productos', $this->Producto->read());

    }
 
    public function index() {
    $this->set('productos',$this->Producto->find('all',array(
        'limit' => '3')));
    
    }

     public function view_productos() {
     $this->paginate = array(
         'conditions' => array('Producto.id !=' => '6'),
         'limit' => 3,
        'ORDER BY' => array('id' => 'ASC'),
        'conditions'=> array('Producto.status ='=> '2')
    );
     $posts=$this->paginate('Producto');

    $this->set('productos', $posts);
    
    }

    public function add() {
    $this->set('productos',$this->Producto->find('all'));

    if ($this->request->is('post')) {
        //Added this line
       $this->request->data['Producto']['user_id'] = $this->Auth->User('id');
        if ($this->Producto->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'admin_index'));
        }
    }
     $this->set('categorias', $this->Categoria->find('list', array('fields' => array('id','nomb'))
        ));
    
}

public function isAuthorized($user) {
    // All registered users can add posts
    //si son administradores
    if (isset($user['role']) && $user['role'] === 'admin') {
        if ($this->action === 'add') {
            return true;
        }
        
        if ($this->action === 'buscar') {
            return true;
        }
        if ($this->action === 'view_productos') {
            return true;
        }
        if ($this->action === 'detalle_producto') {
            return true;
        }
        if ($this->action === 'index_localizanos') {
            return true;
        }
        if ($this->action === 'index_conocenos') {
            return true;
        }

        if ($this->action === 'admin_index') {
            return true;
        }
        if ($this->action === 'edit') {
            return true;
        }
        if ($this->action === 'delete') {
            return true;
        }
        if ($this->action === 'add_contacto') {
        return true;
        }
   }
//si son otros usuarios
    if ($this->action === 'add_contacto') {
        return true;
    } 
    if ($this->action === 'buscar') {
        return true;
    }
    if ($this->action === 'view_productos') {
        return true;
    }
    if ($this->action === 'detalle_producto') {
        return true;
    }
    if ($this->action === 'index_localizanos') {
        return true;
    }
    if ($this->action === 'index_conocenos') {
        return true;
    }
     


    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = $this->request->params['pass'][0];
        if ($this->Producto->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
} 
}