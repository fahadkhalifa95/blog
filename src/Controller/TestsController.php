<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class TestsController extends AppController
{
    public function index()
    {
//        $blogs = TableRegistry::getTableLocator()->get('Blog');
//        $connection = ConnectionManager::get('default');
//        $results = $connection->execute('SELECT * FROM blog')->fetchAll('assoc');
        echo 'test / index';
    }
}

?>
