<?php
/**
 Admin Page Framework v3.5.4b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class AdminPageFramework_Factory_Controller extends AdminPageFramework_Factory_View {
    public function start() {
    }
    public function setUp() {
    }
    public function enqueueStyles($aSRCs, $_vArg2 = null) {
    }
    public function enqueueStyle($sSRC, $_vArg2 = null) {
    }
    public function enqueueScripts($aSRCs, $_vArg2 = null) {
    }
    public function enqueueScript($sSRC, $_vArg2 = null) {
    }
    public function addHelpText($sHTMLContent, $sHTMLSidebarContent = "") {
        if (method_exists($this->oHelpPane, '_addHelpText')) {
            $this->oHelpPane->_addHelpText($sHTMLContent, $sHTMLSidebarContent);
        }
    }
    public function addSettingSections() {
        foreach (func_get_args() as $asSection) {
            $this->addSettingSection($asSection);
        }
        $this->_sTargetSectionTabSlug = null;
    }
    public function addSettingSection($aSection) {
        if (!is_array($aSection)) {
            return;
        }
        $this->_sTargetSectionTabSlug = isset($aSection['section_tab_slug']) ? $this->oUtil->sanitizeSlug($aSection['section_tab_slug']) : $this->_sTargetSectionTabSlug;
        $aSection['section_tab_slug'] = $this->_sTargetSectionTabSlug ? $this->_sTargetSectionTabSlug : null;
        $this->oForm->addSection($aSection);
    }
    public function addSettingFields() {
        foreach (func_get_args() as $aField) {
            $this->addSettingField($aField);
        }
    }
    public function addSettingField($asField) {
        if (method_exists($this->oForm, 'addField')) {
            $this->oForm->addField($asField);
        }
    }
    public function setFieldErrors($aErrors) {
        $GLOBALS['aAdminPageFramework']['aFieldErrors'] = $this->oUtil->getElement($GLOBALS, array('aAdminPageFramework', 'aFieldErrors'), array());
        if (empty($GLOBALS['aAdminPageFramework']['aFieldErrors'])) {
            add_action('shutdown', array($this, '_replyToSaveFieldErrors'));
        }
        $_sID = md5($this->oProp->sClassName);
        $GLOBALS['aAdminPageFramework']['aFieldErrors'][$_sID] = isset($GLOBALS['aAdminPageFramework']['aFieldErrors'][$_sID]) ? $this->oUtil->uniteArrays($GLOBALS['aAdminPageFramework']['aFieldErrors'][$_sID], $aErrors) : $aErrors;
    }
    public function hasFieldError() {
        return isset($GLOBALS['aAdminPageFramework']['aFieldErrors'][md5($this->oProp->sClassName) ]);
    }
    public function setSettingNotice($sMessage, $sType = 'error', $asAttributes = array(), $bOverride = true) {
        $GLOBALS['aAdminPageFramework']['aNotices'] = $this->oUtil->getElement($GLOBALS, array('aAdminPageFramework', 'aNotices'), array());
        if (empty($GLOBALS['aAdminPageFramework']['aNotices'])) {
            add_action('shutdown', array($this, '_replyToSaveNotices'));
        }
        $_sID = md5(trim($sMessage));
        if ($bOverride || !isset($GLOBALS['aAdminPageFramework']['aNotices'][$_sID])) {
            $_aAttributes = is_array($asAttributes) ? $asAttributes : array();
            if (is_string($asAttributes) && !empty($asAttributes)) {
                $_aAttributes['id'] = $asAttributes;
            }
            $GLOBALS['aAdminPageFramework']['aNotices'][$_sID] = array('sMessage' => $sMessage, 'aAttributes' => $_aAttributes + array('class' => $sType, 'id' => $this->oProp->sClassName . '_' . $_sID,),);
        }
    }
    public function hasSettingNotice($sType = '') {
        $_aNotices = $this->oUtil->getElementAsArray($GLOBALS, array('aAdminPageFramework', 'aNotices'), array());
        if (!$sType) {
            return ( bool )count($_aNotices);
        }
        foreach ($_aNotices as $aNotice) {
            if (!isset($aNotice['aAttributes']['class'])) {
                continue;
            }
            if ($aNotice['aAttributes']['class'] == $sType) {
                return true;
            }
        }
        return false;
    }
}