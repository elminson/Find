<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */
require __DIR__ . '/../vendor/autoload.php';


use Elminson\Find\Find;
use PHPUnit\Framework\TestCase;

class testFind extends TestCase
{

    /**
     *
     */
    function testGetDataPatterns()
    {
        $find = new Find('./input.txt');
        $find->findData();
        $data = $find->dataContent;
        $this->assertEquals("A.txt", $data[0]);
        $this->assertEquals("A.cpp", $data[1]);
        $this->assertEquals("A.cs", $data[2]);
        $this->assertEquals("A.java", $data[3]);
    }

    function testGetDataPatternsLowerCase()
    {
        $find = new Find('./input.txt');
        //get all txt
        $find->setPattern('/[a-z](.txt)/');
        $find->findData();
        $data = $find->dataContent;
        $this->assertEquals("a.txt", $data[0]);
        $this->assertEquals("b.txt", $data[1]);
        $this->assertEquals("c.txt", $data[2]);
    }

    function testGetDataPatternsJson()
    {
        $find = new Find('./input.txt');
        $find->findData();
        $data = $find->getDataJson();
        $this->assertEquals('["A.txt","A.cpp","A.cs","A.java"]',$data);
    }

    function testGetDataPatternsLowerCaseJson()
    {
        $find = new Find('./input.txt');
        //get all txt
        $find->setPattern('/[a-z](.txt)/');
        $find->findData();
        $data = $find->getDataJson();
        $this->assertEquals('["a.txt","b.txt","c.txt"]',$data);
    }
}
