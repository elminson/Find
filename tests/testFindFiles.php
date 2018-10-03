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
    function testGetFilesPatterns()
    {
        $find = new FindFiles('./input.txt');
        $find->getFilespatterns();
        $files = $find->files;
        $this->assertEquals("A.txt", $files[0]);
        $this->assertEquals("A.cpp", $files[1]);
        $this->assertEquals("A.cs", $files[2]);
        $this->assertEquals("A.java", $files[3]);
    }

    function testGetFilesPatternsLowerCase()
    {
        $find = new FindFiles('./input.txt');
        //get all txt
        $find->setPattern('/[a-z](.txt)/');
        $find->getFilespatterns();
        $files = $find->files;
        $this->assertEquals("a.txt", $files[0]);
        $this->assertEquals("b.txt", $files[1]);
        $this->assertEquals("c.txt", $files[2]);
    }

    function testGetFilesPatternsExt()
    {
        $find = new FindFiles('./input.txt');
        $find->getFilespatterns();
        $extensions = $find->extensions;
        $this->assertEquals(".txt", $extensions[0]);
        $this->assertEquals(".cpp", $extensions[1]);
        $this->assertEquals(".cs", $extensions[2]);
        $this->assertEquals(".java", $extensions[3]);
    }

    function testGetFilesPatternsLowerCaseExt()
    {
        $find = new FindFiles('./input.txt');
        //get all txt
        $find->setPattern('/[a-z](.txt)/');
        $find->getFilespatterns();
        $extensions = $find->extensions;
        $this->assertEquals(".txt", $extensions[0]);
        $this->assertEquals(".txt", $extensions[1]);
        $this->assertEquals(".txt", $extensions[2]);
    }
}
