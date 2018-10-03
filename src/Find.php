<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:47 PM
 */

namespace Elminson\Find;

use Elminson\Find\Files;

/**
 * @property array data
 */
class Find
{

    public $files = [];

    public $extensions = [];

    protected $file;

    protected $data;

    // More documentation https://www.phpliveregex.com/
    private $pattern = '/[A-Z](.*)/';

    /**
     * Find constructor.
     * @param $file
     */
    public function __construct($file)
    {
        //   parent::__construct(...func_get_args());
        $this->file = $file;
        $this->setDataOrigin();

    }

    /**
     * @param $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @return void
     */
    public function getData()
    {
        $this->files = [];
        $this->extensions = [];
        foreach ($this->data as $key => $value) {
            if (preg_match($this->pattern, $value, $match_patern)) {
                $this->files [] = $match_patern[0];
                $this->extensions [] = $match_patern[1];
            }
        }
    }

    public function setDataOrigin($type = 'file')
    {
        switch ($type) {
            case 'file':
                {
                    $file = new Files($this->file);
                    $this->setData($file->getDataFile());
                }
            default:
                {
                    $file = new Files($this->file);
                    $this->setData($file->getDataFile());
                }
        }

    }

    /**
     * @param array $data
     */
    private function setData(array $data)
    {
        $this->data = $data;
    }
}
