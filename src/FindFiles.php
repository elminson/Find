<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:47 PM
 */

namespace Elminson\FindFiles;

class FindFiles
{
    protected $files = [];
    public $extensions = [];
    protected $file;
    // More documentation https://www.phpliveregex.com/
    private $pattern = '/[A-Z](.*)/';

    /**
     * FindFiles constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * @param $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @return array
     */
    public function getFiles()
    {
        $this->files = [];
        $this->extensions = [];
        $data = file_get_contents($this->file, true);
        $files = explode("\n", $data);
        foreach ($files as $key => $value) {
            $file_name = explode(".", $value);

            if (isset($file_name[1])) {
                $file_name2 = explode("_", $value);
                $this->extensions[] = $file_name[1];
                if (!isset($file_name2[1])) {
                    $this->files[] = $file_name2[0];
                } else {
                    $this->files[] = $file_name2[1];
                }
            }
        }
        return $this->files;
    }

    /**
     * @return array
     */
    public function getFilespatterns()
    {
        $this->files = [];
        $this->extensions = [];
        $data = file_get_contents($this->file, true);
        $files = explode("\n", $data);
        foreach ($files as $key => $value) {
            if (preg_match($this->pattern, $value, $match_patern)) {
                $this->files [] = $match_patern[0];
                $this->extensions [] = $match_patern[1];
            }
        }
        return $this->files;
    }
}
