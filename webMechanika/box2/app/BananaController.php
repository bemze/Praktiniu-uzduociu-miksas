<?php 

class BananaController {



    public function index()
        {
            $pageTittle = 'Bananu dezes 2';
            $boxes = Json::getDB()->readData();
            require DIR.'views/index.php';
        }
    public function create()
        {
            $pageTittle = 'Naujos Bananu dezes 2';
            require DIR.'views/create.php';
        }
    public function store()
        {
            $box = new Box;
            $box -> bananas = (int) ($_POST['count'] ?? 0);
                $bananas = $_POST['count'] ?? 0;
                $bananas = (int) $bananas;
                Json::getDB()-> store($box);
                header('Location: '.URL);
                die;
        }

        public function edit(int $id)
        {
            $box = Json::getDB()->getBox($id);
            $pageTitle = 'Atnaujinti bananu deze NR: '.$box->id;
            require DIR.'views/edit.php';
        }

        public function update(int $id)
        {
            $box = Json::getDB()->getBox($id);
            // var_dump($box);
            // die;
            
            $box -> bananas += (int) ($_POST['count'] ?? 0);
            
            
            Json::getDB()->update($box); // updeitina
            header('Location: '.URL);
            die;
        }
    
        
    
        public function delete(int $id)
        {
            Json::getDB()->delete($id);
            header('Location: '.URL);
            die;
        }




}