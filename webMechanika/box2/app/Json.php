<?php

class Json
{

    private static $JsonObj;
    private $data;

    public static function getDB()
    {
        return self::$JsonObj ?? self::$JsonObj = new self;
    }

    private function __construct()
    {
        if (!file_exists(DIR . 'data/boxes.json')) {
            // sukuria ir iraso tuscia masyva i json faila
            $data = json_encode([]);
            file_put_contents(DIR . 'data/boxes.json', $data);
        }
        $data = file_get_contents(DIR . 'data/boxes.json');
        // jei vietoj objekto norim grazinti masyva, parasom 1
        $this->data = json_decode($data);
    }

    //pries numirstant scriptui, kad spetu irasyti i musu faila
    public function __destruct()
    {
       
        file_put_contents(DIR.'data/boxes.json', json_encode($this->data));
    }


    // kaistys failus is JSON 
    public function readData(): array
    {
        return $this->data;
    }

    public function writeData(array $data): void
    {
        $this->data = json_encode($data);
        file_put_contents(DIR . 'data/boxes.json', $data);
        
    }

    private function getNextId()
    {
        if (!file_exists(DIR . 'data/indexes.json')) {

            //jau bus i masyva irasyta ID 1
            $index = json_encode(['id' => 1]);
            file_put_contents(DIR . 'data/indexes.json', $index);
        }
        // nuskaitome duomenis
        $index = file_get_contents(DIR . 'data/indexes.json');
        //isdekodinam, kad nemestu klaidos: Cannot access offset of type string on string in 
        $index = json_decode($index, 1);
        //paverciam ID i skaiciu
        $id = (int) $index['id'];
        //kitas ID bus +1
        $index['id'] = $id + 1;
        //reikia vel nepamirst encodint
        $index = json_encode($index);
        //irasom i faila ir grazinam
        file_put_contents(DIR . 'data/indexes.json', $index);
        return $id;
    }

    public function store(Box $box): void
    {
       
        $id = $this->getNextId();
        $box -> id = $id;
        $this->data[] = $box;
    }
    public function update(object $updateBox) : void
    {
        foreach($this->data as $key => $box) {
            if ($box->id== $updateBox->id) {
                $this->data[$key] = $updateBox;
                return;
            }
        }
    }

    //klaustukas ? reiksia grazina funkcija masyva arba 0
    public function getBox(int $id) : ?object
    {
        foreach($this->data as $box) {
            if ($box->id== $id) {
                return $box;
            }
        }
        return null;
    }
    public function delete(int $id) : void
    {
        foreach($this->data as $key => $box) {
            if ($box->id== $id) {
                unset($this->data[$key]);
                // normalizuojam masyva iki normalaus masyvo be "skyliu"
                $this->data = array_values($this->data);
                //
                /*
                pvz indeksai pries trynima 0 1 2 3 4
                trinam 2 elementa
                indeksai po trynimo 0 1 3 4
                indeksai po normalizavimo 0 1 2 3
                */
                return;
            }
        }
    }


    public function edit(int $id)
    {
        $box = Json::getDB()->getBox($id);
        $pageTitle = 'Edit Bananna Box NR: '.$box->id;
        require DIR.'views/edit.php';
    }

}
