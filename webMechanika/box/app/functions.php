<?php 
// kaistys failus is JSON 
function readData() : array {
    if(!file_exists(DIR.'data/boxes.json')) {
        // sukuria ir iraso tuscia masyva i json faila
        $data = json_encode([]); 
        file_put_contents(DIR.'data/boxes.json', $data);
    }
    $data = file_get_contents(DIR.'data/boxes.json');
    // jei vietoj objekto norim grazinti masyva, parasom 1
    return json_decode($data, 1);

}
function writeData(array $data) : void
 {
    $data = json_encode($data);
    file_put_contents(DIR.'data/boxes.json', $data);
    
}

function getNextId ()
{
    if(!file_exists(DIR.'data/indexes.json')) {
        
        //jau bus i masyva irasyta ID 1
        $index = json_encode(['id'=>1]); 
        file_put_contents(DIR.'data/indexes.json', $index);
}
// nuskaitome duomenis
$index = file_get_contents(DIR.'data/indexes.json');
//isdekodinam, kad nemestu klaidos: Cannot access offset of type string on string in 
$index= json_decode($index, 1);
//paverciam ID i skaiciu
$id = (int) $index['id'];
//kitas ID bus +1
$index['id'] = $id + 1;
//reikia vel nepamirst encodint
$index = json_encode($index); 
//irasom i faila ir grazinam
file_put_contents(DIR.'data/indexes.json', $index);
return $id;

}

function create (int $count) : void {
    if($count < 0) {
        return;
    }
    
    // perreina per duomenis
    $boxes = readData();
    //pasiimam ID
    $id = getNextId();
    // susikuriam savo masyva, kuris turi musu paskaiciuota ID ir tiek bananu, kiek bus ivesta inpute
    $box = [ 
        'id' => $id,
        'bananai' => $count
    ];
    //i masyva idedamas musu sukurtas masyvas ir irasomas i JSON faila
    $boxes[] =  $box;
    writeData($boxes);
}
function update (int $id, int $count) : void {
    if($count < 0) {
        return;
    }
    
    // perreina per duomenis
    $boxes = readData();
    //pasiimam ID
    $box = getBox( $id);
    
    // jei nera tokios dezes, iskart returnina
    if(!$box) {
        return;
    }
    $box['bananai'] = $count;
    deleteBox($id);
    $boxes = readData(); 
    $boxes[] =  $box;
    writeData($boxes);
}

//klaustukas ? reiksia grazina funkcija masyva arba 0
function getBox (int $id) : ?array
{
foreach(readData() as $box) {
    if ($box['id'] == $id){
        return $box;
    }
}
return null;
}
function deleteBox(int $id) : void
{
    $boxes = readData();
    foreach($boxes as $key => $box) {
        if ($box['id'] == $id) {
            unset($boxes[$key]);
            writeData($boxes);
            return;
        }
    }
}