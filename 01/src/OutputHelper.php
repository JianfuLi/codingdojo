<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-29
 * Time: 下午4:03.
 */

class OutputHelper
{
    protected static function _header($charset = 'utf-8'){
        ob_end_clean();
        ob_start();
        @header("Expires: -1");
        @header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
        @header("Pragma: no-cache");
        @header("Content-type: text/xml; charset=".$charset);
    }

    public static function html($s){
        self::_header();
        echo $s;
        exit();
    }

    public static function json($data){
        self::_header();
        echo json_encode($data);
        exit();
    }

    public static function xml($s) {
        self::_header();
        echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n", '<root><![CDATA[', $s, ']]></root>';
        exit();
    }
}