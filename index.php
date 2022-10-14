<?php

require_once __DIR__ . '/vendor/autoload.php';

$margerite = new CowSay\Cow('Hey!!');
$margerite->setTongue();
$margerite->setEyes('oO');



echo $margerite;

