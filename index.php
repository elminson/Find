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

$find->getData();
print_r($find->files);
print_r($find->extensions);
$find->setPattern('/[a-z](.txt)/');
$find->getData();
print_r($find->files);
print_r($find->extensions);