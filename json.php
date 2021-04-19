<?php

// $masyvas = [
//     'spalva' => 'ryža',
//     'tipas' => 'katė',
//     'charakteris' => 'bjaurus',
//     'dienotvarkė' => [
//         'miega',
//         'ėda',
//         'miega',
//         'ėda',
//         'pupina',
//         'miega'
//     ]
// ];
// _d($masyvas);

// $stringas = json_encode($masyvas);

// file_put_contents('kate.json', $stringas);


$stringas = file_get_contents('kate.json');

_d($stringas);


$masyvas = json_decode($stringas, 1);


_d($masyvas);


// $masyvas['dienotvarkė'][] = 'žaisti';
// $masyvas['dienotvarkė'][] = 'miegoti';


// $stringas = json_encode($masyvas);

// file_put_contents('kate.json', $stringas);