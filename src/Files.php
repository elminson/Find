<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 3:33 PM
 */

namespace Elminson\Find;


/**
 * @property  file
 */
class Files
{
    private $file;

    /**
     * Files constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getDataFile()
    {
        $data = file_get_contents($this->file, true);
        return explode("\n", $data);;
    }
}