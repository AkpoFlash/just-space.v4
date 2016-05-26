<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/include/const.php");

class File extends Base
{
    public $pdo;
    public function __construct(){
        parent::__construct();
    }

    public function GetList($arOrder = array(), $arFilter = array(), $arSelect = array()){
        $arAllFiles = scandir($_SERVER['DOCUMENT_ROOT'] . DB_BACKUP);
        foreach($arAllFiles as $file) {
            if ($file == "." || $file == "..") {
                continue;
            }
            $arFile[] = array(
                "NAME" => $file,
                "SIZE" => round(filesize($_SERVER['DOCUMENT_ROOT'] . DB_BACKUP . $file)/1024,1),
                "TIME" => date(date("d.m.Y H:i:s"),filemtime($_SERVER['DOCUMENT_ROOT'] . DB_BACKUP . $file)),
                "TYPE" => filetype($_SERVER['DOCUMENT_ROOT'] . DB_BACKUP . $file),
                );
        }
        return $arFile;
    }
}

?>