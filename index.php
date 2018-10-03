<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:49 PM
 */

namespace Elminson\FindFiles;

require __DIR__ . '/vendor/autoload.php';

$find = new FindFiles('./tests/input.txt');

$find->getFilespatterns();
print_r($find->files);
print_r($find->extensions);
$find->setPattern('/[a-z](.txt)/');
$find->getFilespatterns();
print_r($find->files);
print_r($find->extensions);