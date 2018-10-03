<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:49 PM
 */

namespace Elminson\Find;

require __DIR__ . '/vendor/autoload.php';

$find = new Find('./tests/input.txt');
$find->findData();
print_r($find->dataContent);
$find->setPattern('/[a-z](.txt)/');
$find->findData();
print_r($find->dataContent);