<?php
//array - grazinam masyva
// funkcija skaito is json failo
function readData() : array
{
    //jei json neegzistuoja, mes ji sukuriam
    if(!file_exists(DIR.'data/boxes.json')) {
   $data = json_encode([]);
   file_put_contents(DIR.'data/boxes.json', $data);     
    }
    $data = file_get_contents(DIR.'data/boxes.json');
    return json_decode($data,1);
}
//void - nieko negrazina
//funkcija iraso i JSON list
function writeData(array $data) : void 
{
    $data = json_encode([]);
    file_put_contents(DIR.'data/boxes.json', $data);     
}

//funkcija, kuri grazins  kita ID, kad nesikartotu 
function getNextId()
{
    if(!file_exists(DIR.'data/indexes.json')) {
        $index = json_encode(['id' => 1]);
        file_put_contents(DIR.'data/indexes.json', $index);     
         }
         $index = file_get_contents(DIR.'data/indexes.json');
         $index =json_decode($index,1);


         $id = (int) $index['id'];
         $index ['id'] = $id +1;
         $index = json_encode($index);
         file_put_contents(DIR.'data/indexes.json', $index);     

         return $id;
}


