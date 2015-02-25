<?php
/**
 Admin Page Framework v3.5.4b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class AdminPageFramework_Page_View_MetaBox extends AdminPageFramework_Page_Model {
    public function __construct($sOptionKey = null, $sCallerPath = null, $sCapability = 'manage_options', $sTextDomain = 'admin-page-framework') {
        parent::__construct($sOptionKey, $sCallerPath, $sCapability, $sTextDomain);
        if ($this->oProp->bIsAdminAjax) {
            return;
        }
        add_action('admin_head', array($this, '_replyToEnableMetaBox'));
        add_filter('screen_layout_columns', array($this, '_replyToSetNumberOfScreenLayoutColumns'), 10, 2);
    }
    protected function _printMetaBox($sContext, $iContainerID) {
        $_sCurrentScreenID = $this->oUtil->getCurrentScreenID();
        if (!isset($GLOBALS['wp_meta_boxes'][$_sCurrentScreenID][$sContext])) {
            return;
        }
        if (count($GLOBALS['wp_meta_boxes'][$_sCurrentScreenID][$sContext]) <= 0) {
            return;
        }
        echo "<div id='postbox-container-{$iContainerID}' class='postbox-container'>";
        do_meta_boxes('', $sContext, null);
        echo "</div>";
    }
    protected function _getNumberOfColumns() {
        $_sCurrentScreenID = $this->oUtil->getCurrentScreenID();
        if (isset($GLOBALS['wp_meta_boxes'][$_sCurrentScreenID]['side']) && count($GLOBALS['wp_meta_boxes'][$_sCurrentScreenID]['side']) > 0) {
            return 2;
        }
        return 1;
    }
    public function _replyToSetNumberOfScreenLayoutColumns($aColumns, $sScreenID) {
        if (!isset($GLOBALS['page_hook'])) {
            return;
        }
        if (!$this->_isMetaBoxAdded()) {
            return;
        }
        if (!$this->oProp->isPageAdded()) {
            return;
        }
        $_sCurrentScreenID = $this->oUtil->getCurrentScreenID();
        add_filter('get_user_option_' . 'screen_layout_' . $_sCurrentScreenID, array($this, '_replyToReturnDefaultNumberOfScreenColumns'), 10, 3);
        if ($sScreenID == $_sCurrentScreenID) {
            $aColumns[$_sCurrentScreenID] = 2;
        }
        return $aColumns;
    }
    private function _isMetaBoxAdded($sPageSlug = '') {
        if (!isset($GLOBALS['aAdminPageFramework']['aMetaBoxForPagesClasses']) || !is_array($GLOBALS['aAdminPageFramework']['aMetaBoxForPagesClasses'])) {
            return false;
        }
        $sPageSlug = $sPageSlug ? $sPageSlug : $this->oUtil->getElement($_GET, 'page', '');
        if (!$sPageSlug) {
            return false;
        }
        foreach ($GLOBALS['aAdminPageFramework']['aMetaBoxForPagesClasses'] as $sClassName => $oMetaBox) {
            if ($this->_isPageOfMetaBox($sPageSlug, $oMetaBox)) {
                return true;
            }
        }
        return false;
    }
    private function _isPageOfMetaBox($sPageSlug, $oMetaBox) {
        if (in_array($sPageSlug, $oMetaBox->oProp->aPageSlugs)) {
            return true;
        }
        if (!array_key_exists($sPageSlug, $oMetaBox->oProp->aPageSlugs)) {
            return false;
        }
        $_aTabs = $oMetaBox->oProp->aPageSlugs[$sPageSlug];
        $_sCurrentTabSlug = $this->oProp->getCurrentTabSlug();
        return ($_sCurrentTabSlug && in_array($_sCurrentTabSlug, $_aTabs));
    }
    public function _replyToReturnDefaultNumberOfScreenColumns($vStoredData, $sOptionKey, $oUser) {
        $_sCurrentScreenID = $this->oUtil->getCurrentScreenID();
        if ($sOptionKey != 'screen_layout_' . $_sCurrentScreenID) {
            return $vStoredData;
        }
        return $vStoredData ? $vStoredData : $this->_getNumberOfColumns();
    }
    public function _replyToEnableMetaBox() {
        if (!$this->oProp->isPageAdded()) {
            return;
        }
        if (!$this->_isMetaBoxAdded()) {
            return;
        }
        $_sCurrentScreenID = $this->oUtil->getCurrentScreenID();
        do_action("add_meta_boxes_{$_sCurrentScreenID}", null);
        do_action('add_meta_boxes', $_sCurrentScreenID, null);
        wp_enqueue_script('postbox');
        if (isset($GLOBALS['page_hook'])) {
            add_action("admin_footer-{$GLOBALS['page_hook']}", array($this, '_replyToAddMetaboxScript'));
        }
    }
    public function _replyToAddMetaboxScript() {
        if (isset($GLOBALS['aAdminPageFramework']['bAddedMetaBoxScript']) && $GLOBALS['aAdminPageFramework']['bAddedMetaBoxScript']) {
            return;
        }
        $GLOBALS['aAdminPageFramework']['bAddedMetaBoxScript'] = true;
        $_sScript = <<<JAVASCRIPTS
jQuery( document).ready( function(){ 
    postboxes.add_postbox_toggles( pagenow ); 
});
JAVASCRIPTS;
        echo '<script class="admin-page-framework-insert-metabox-script">' . $_sScript . '</script>';
    }
}