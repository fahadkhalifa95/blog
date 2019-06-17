<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ArticleController extends AppController
{
    public function view()
    {
        $articles = TableRegistry::getTableLocator()->get('articles');
        $query = $articles->find('all');
        $data = $query->toArray();

      /*  $data = [
            [
                "title" => "title 1",
                "author" => "aurthor 1",
                "body" => "body 1"
            ],
            [
                "title" => "title 2",
                "author" => "aurthor 2",
                "body" => "body 2"
            ]


        ];*/
        $this->set('articles', $data);
    }



}
