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

print_r($find->getFiles());

print_r($find->getFilespatterns());
print_r($find->extensions);