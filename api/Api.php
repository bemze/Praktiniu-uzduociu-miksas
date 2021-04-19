<?php


class Api {

//     private $namas=55555;
//     private  $senas = "Naglis";
//     public static $senesnis = "Mantas";
  

// public function __get($name) {
//     return $this->$name;
// }
// public function get() {
//     return $this->namas;
// }
// public function gett() {
//     return $this->namas;
// }


public static function valiutuApi() {

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.agify.io?name=Mantas');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$answer = curl_exec($curl); //siunciam uzklausa ir laukiam...atsakymairasome i $answer
curl_close($curl);
$answer = json_decode($answer); // json_decode($answer,1) jei nori gauti kaip masyva, ne "1" gausi objrkta, pasieksi elementa su ->rates vietoj ['rates']
 return $answer;



}



}