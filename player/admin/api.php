<?php

/*if (isset($_SERVER['HTTP_REFERER'])) {
    if (stripos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) === false) {
        echo '{"code":110,"msg":"看什么看，再看我报警了。。"}';
        exit;
    }
} else {
      echo '{"code":110,"msg":"看什么看，再看我报警了。。"}';
      exit;
}*/
$yzm =  array(
    'danmuon' => 'on',
    'color' => '#00a1d6',
    'logo' => '',
    'trytime' => '3',
    'waittime' => '3',
    'sendtime' => '3',
    'dmrule' => '../dmku/dm_rule.html',
    'pbgjz' => 'v,QQ',
    'ads' =>
    array(
        'pause' =>
        array(
            'pic' => '',
            'link' => '#',
        ),
    ),
);
$json = [
    'code' => 1,
    'data' => $yzm
];
die(json_encode($json));


//$config = file_get_contents('config.json'); 

//echo $config;
