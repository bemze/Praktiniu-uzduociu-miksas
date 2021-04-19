<?php

class Currency {

    public static function valiutuApi() {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.exchangeratesapi.io/latest');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $answer = curl_exec($curl); //siunciam uzklausa ir laukiam...atsakymairasome i $answer
        curl_close($curl);
        $answer = json_decode($answer); // json_decode($answer,1) jei nori gauti kaip masyva, ne "1" gausi objrkta, pasieksi elementa su ->rates vietoj ['rates']
         return $answer;
         $result="API";
        
        
        
        }

}