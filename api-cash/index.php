<?php
// include 'Currency.php';
// $result = Currency::valiutuApi();
define("TIME", 15); //cashins kas 15 sec

//vienkartinis scenarijus
//jei nera failo, susikuriam
if(!file_exists(__DIR__.'/valiutos.json')) {
    file_put_contents(__DIR__.'/valiutos.json', 
        json_encode([
            'time' => time()-TIME-1, //1sek atimam, kad butu neberealus laikas. time() dabartininis laikas, atimam casho galiojimo laika
            'valiutos' => (object)[]
            ])
    );
}

$cashe = json_decode(file_get_contents(__DIR__.'/valiutos.json'));
//tikrinimas, ar pasenes cashas
// _dc($cashe ->time);
// _dc(time()-TIME);
if($cashe ->time < time()-TIME) {
//ir jei cashas pasenes, vyksta skaitymas is API
$curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.ratesapi.io/api/latest');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $answer = curl_exec($curl); //siunciam uzklausa ir laukiam...atsakymairasome i $answer
        curl_close($curl);
        $answer = json_decode($answer); // json_decode($answer,1) jei nori gauti kaip masyva, ne "1" gausi objrkta, pasieksi elementa su ->rates vietoj ['rates']
         //gave atsakyma, irasom i VALIUTOS
         file_put_contents(__DIR__.'/valiutos.json', 
        json_encode([
            'time' => time(), //realus laikas
            'valiutos' => $answer
            ])
        );
        $result="API";
} else   
//skaitymas is casho 
{
    $answer = $cashe->valiutos;
    $result="CASHE";
}

        
        // _dc($answer);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API cashinimas</title>
</head>
<body>

<h2>GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGg</h2>
<h1 style="color:red;"> Result from <?= $result ?>   </h1>
<!-- <h3> CAD: <?= $answer->rates->CAD ?></h3> -->


      <?php foreach($answer -> rates as $key => $valiutos) : ?>  
        <!-- //paleidzia visas valiutas -->
        <h3> <?= $key." ".$valiutos ?></h3>

<?php endforeach?>

</body>
</html>