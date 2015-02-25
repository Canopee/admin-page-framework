<?php
/**
 Admin Page Framework v3.5.4b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class AdminPageFramework_Utility_File extends AdminPageFramework_Utility_URL {
    static public function getFileTailContents($asPath = array(), $iLines = 1) {
        $_aPath = is_array($asPath) ? $asPath : array($asPath);
        $_aPath = array_values($_aPath);
        $_sPath = array_shift($_aPath);
        return file_exists($_sPath) ? trim(implode("", array_slice(file($_sPath), -$iLines))) : '';
    }
    static public function sanitizeFileName($sFileName, $sReplacement = '_') {
        $sFileName = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).])", $sReplacement, $sFileName);
        return preg_replace("([\.]{2,})", '', $sFileName);
    }
}