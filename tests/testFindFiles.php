<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */
require __DIR__ . '/../vendor/autoload.php';


use Elminson\FindFiles\FindFiles;
use PHPUnit\Framework\TestCase;

class testFindFiles extends TestCase
{

    /**
     *
     */
    function testGetFiles()
    {
        $find = new FindFiles('./input.txt');
        $files = $find->getFiles();
        $this->assertEquals("A.txt", $files[0]);
        $this->assertEquals("A.cpp", $files[1]);
        $this->assertEquals("A.cs", $files[2]);
        $this->assertEquals("A.java", $files[3]);
    }

    function testGetFilesPatterns()
    {
        $find = new FindFiles('./input.txt');
        $files = $find->getFilespatterns();
        $this->assertEquals("A.txt", $files[0]);
        $this->assertEquals("A.cpp", $files[1]);
        $this->assertEquals("A.cs", $files[2]);
        $this->assertEquals("A.java", $files[3]);
    }

    function testGetFilesPatternsLowerCase()
    {
        $find = new FindFiles('./input.txt');
        //get all txt finales
        $find->setPattern('/[a-z](.txt)/');
        $files = $find->getFilespatterns();
        $this->assertEquals("a.txt", $files[0]);
        $this->assertEquals("b.txt", $files[1]);
        $this->assertEquals("c.txt", $files[2]);
    }
}
