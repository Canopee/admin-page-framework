<?php
/**
 Admin Page Framework v3.5.4b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class AdminPageFramework_Factory_View extends AdminPageFramework_Factory_Model {
    function __construct($oProp) {
        parent::__construct($oProp);
        if ($this->_isInThePage() && !$this->oProp->bIsAdminAjax) {
            if (is_network_admin()) {
                add_action('network_admin_notices', array($this, '_replyToPrintSettingNotice'));
            } else {
                add_action('admin_notices', array($this, '_replyToPrintSettingNotice'));
            }
        }
    }
    static private $_bSettingNoticeLoaded = false;
    public function _replyToPrintSettingNotice() {
        if (!$this->_isInThePage()) {
            return;
        }
        if (self::$_bSettingNoticeLoaded) {
            return;
        }
        self::$_bSettingNoticeLoaded = true;
        $_iUserID = get_current_user_id();
        $_aNotices = $this->oUtil->getTransient("apf_notices_{$_iUserID}");
        if (false === $_aNotices) {
            return;
        }
        $this->oUtil->deleteTransient("apf_notices_{$_iUserID}");
        if (isset($_GET['settings-notice']) && !$_GET['settings-notice']) {
            return;
        }
        $this->_printSettingNotices($_aNotices);
    }
    private function _printSettingNotices($aNotices) {
        $_aPeventDuplicates = array();
        foreach (array_filter(( array )$aNotices, 'is_array') as $_aNotice) {
            $_sNotificationKey = md5(serialize($_aNotice));
            if (isset($_aPeventDuplicates[$_sNotificationKey])) {
                continue;
            }
            $_aPeventDuplicates[$_sNotificationKey] = true;
            echo $this->_getSettingNotice($_aNotice);
        }
    }
    private function _getSettingNotice(array $aNotice) {
        if (!isset($aNotice['aAttributes'], $aNotice['sMessage'])) {
            return '';
        }
        $aNotice['aAttributes']['class'] = isset($aNotice['aAttributes']['class']) ? $aNotice['aAttributes']['class'] . ' admin-page-framework-settings-notice-container' : 'admin-page-framework-settings-notice-container';
        return "<div " . $this->oUtil->generateAttributes($aNotice['aAttributes']) . ">" . "<p class='admin-page-framework-settings-notice-message'>" . $aNotice['sMessage'] . "</p>" . "</div>";
    }
    public function _replyToGetFieldOutput($aField) {
        $_oField = new AdminPageFramework_FormField($aField, $this->oProp->aOptions, $this->_getFieldErrors(), $this->oProp->aFieldTypeDefinitions, $this->oMsg, $this->oProp->aFieldCallbacks);
        $_sOutput = $this->oUtil->addAndApplyFilters($this, array('field_' . $this->oProp->sClassName . '_' . $aField['field_id']), $_oField->_getFieldOutput(), $aField);
        return $_sOutput;
    }
}