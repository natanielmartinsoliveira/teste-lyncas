<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Books Controller
 *
 *
 * @method \App\Model\Entity\Book[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index($q = null)
    {
        $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=".$this->request->getParam('q'));
        $data = json_decode($page, true);

        $this->set([
            'books' => $data,
            '_serialize' => ['books']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/".$this->request->getParam('id'));
        $data = json_decode($page, true);

        $this->set([
            'books' => $data,
            '_serialize' => ['books']
        ]);
    }


}
