<?php 
/**
	Admin Page Framework v3.5.4b04 by Michael Uno 
	Facilitates WordPress plugin and theme development.
	<http://en.michaeluno.jp/admin-page-framework>
	Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
$aClassFiles = array( 
	"AdminPageFramework"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework.php", 
	"AdminPageFramework_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Controller.php", 
	"AdminPageFramework_Form_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Controller.php", 
	"AdminPageFramework_Form_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Model.php", 
	"AdminPageFramework_Form_Model_Export"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Model_Export.php", 
	"AdminPageFramework_Form_Model_Imort"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Model_Imort.php", 
	"AdminPageFramework_Form_Model_Validation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Model_Validation.php", 
	"AdminPageFramework_Form_Model_Validation_Opiton"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Model_Validation_Opiton.php", 
	"AdminPageFramework_Form_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_View.php", 
	"AdminPageFramework_Menu_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Menu_Controller.php", 
	"AdminPageFramework_Menu_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Menu_Model.php", 
	"AdminPageFramework_Menu_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Menu_View.php", 
	"AdminPageFramework_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Model.php", 
	"AdminPageFramework_Page_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Page_Controller.php", 
	"AdminPageFramework_Page_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Page_Model.php", 
	"AdminPageFramework_Page_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Page_View.php", 
	"AdminPageFramework_Page_View_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Page_View_MetaBox.php", 
	"AdminPageFramework_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Router.php", 
	"AdminPageFramework_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_View.php", 
	"AdminPageFramework_HelpPane_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/controller/AdminPageFramework_HelpPane_Page.php", 
	"AdminPageFramework_Link_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/controller/AdminPageFramework_Link_Page.php", 
	"AdminPageFramework_Resource_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/controller/AdminPageFramework_Resource_Page.php", 
	"AdminPageFramework_CustomSubmitFields"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/model/AdminPageFramework_CustomSubmitFields.php", 
	"AdminPageFramework_ExportOptions"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/model/AdminPageFramework_ExportOptions.php", 
	"AdminPageFramework_FormEmail"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/model/AdminPageFramework_FormEmail.php", 
	"AdminPageFramework_ImportOptions"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/model/AdminPageFramework_ImportOptions.php", 
	"AdminPageFramework_Property_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/model/AdminPageFramework_Property_Page.php", 
	"AdminPageFramework_FormElement_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/model/AdminPageFramework_FormElement/AdminPageFramework_FormElement_Page.php", 
	"AdminPageFramework_PageLoadInfo_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/view/AdminPageFramework_PageLoadInfo_Page.php", 
	"AdminPageFramework_Factory"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/AdminPageFramework_Factory.php", 
	"AdminPageFramework_Factory_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/AdminPageFramework_Factory_Controller.php", 
	"AdminPageFramework_Factory_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/AdminPageFramework_Factory_Model.php", 
	"AdminPageFramework_Factory_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/AdminPageFramework_Factory_Router.php", 
	"AdminPageFramework_Factory_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/AdminPageFramework_Factory_View.php", 
	"AdminPageFramework_HelpPane_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/controller/AdminPageFramework_HelpPane_Base.php", 
	"AdminPageFramework_Link_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/controller/AdminPageFramework_Link_Base.php", 
	"AdminPageFramework_Resource_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/controller/AdminPageFramework_Resource_Base.php", 
	"AdminPageFramework_CSS"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_CSS.php", 
	"AdminPageFramework_InclusionClassFilesHeader"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_InclusionClassFilesHeader.php", 
	"AdminPageFramework_Message"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_Message.php", 
	"AdminPageFramework_Property_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_Property_Base.php", 
	"AdminPageFramework_FormElement"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_FormElement/AdminPageFramework_FormElement.php", 
	"AdminPageFramework_FormElement_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_FormElement/AdminPageFramework_FormElement_Base.php", 
	"AdminPageFramework_FormElement_Meta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/model/AdminPageFramework_FormElement/AdminPageFramework_FormElement_Meta.php", 
	"AdminPageFramework_Debug"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Debug.php", 
	"AdminPageFramework_ErrorReporting"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_ErrorReporting.php", 
	"AdminPageFramework_RegisterClasses"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_RegisterClasses.php", 
	"AdminPageFramework_Utility"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility.php", 
	"AdminPageFramework_Utility_Array"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_Array.php", 
	"AdminPageFramework_Utility_Deprecated"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_Deprecated.php", 
	"AdminPageFramework_Utility_File"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_File.php", 
	"AdminPageFramework_Utility_Path"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_Path.php", 
	"AdminPageFramework_Utility_String"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_String.php", 
	"AdminPageFramework_Utility_SystemInformation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_SystemInformation.php", 
	"AdminPageFramework_Utility_URL"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_Utility/AdminPageFramework_Utility_URL.php", 
	"AdminPageFramework_WPUtility"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility.php", 
	"AdminPageFramework_WPUtility_File"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_File.php", 
	"AdminPageFramework_WPUtility_HTML"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_HTML.php", 
	"AdminPageFramework_WPUtility_Hook"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_Hook.php", 
	"AdminPageFramework_WPUtility_Option"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_Option.php", 
	"AdminPageFramework_WPUtility_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_Page.php", 
	"AdminPageFramework_WPUtility_Post"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_Post.php", 
	"AdminPageFramework_WPUtility_SiteInformation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_SiteInformation.php", 
	"AdminPageFramework_WPUtility_SystemInformation"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_SystemInformation.php", 
	"AdminPageFramework_WPUtility_URL"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/utility/AdminPageFramework_WPUtility/AdminPageFramework_WPUtility_URL.php", 
	"AdminPageFramework_FieldTypeRegistration"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldTypeRegistration.php", 
	"AdminPageFramework_PageLoadInfo_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_PageLoadInfo_Base.php", 
	"AdminPageFramework_FieldType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType.php", 
	"AdminPageFramework_FieldType_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_Base.php", 
	"AdminPageFramework_FieldType_checkbox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_checkbox.php", 
	"AdminPageFramework_FieldType_color"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_color.php", 
	"AdminPageFramework_FieldType_default"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_default.php", 
	"AdminPageFramework_FieldType_export"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_export.php", 
	"AdminPageFramework_FieldType_file"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_file.php", 
	"AdminPageFramework_FieldType_hidden"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_hidden.php", 
	"AdminPageFramework_FieldType_image"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_image.php", 
	"AdminPageFramework_FieldType_import"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_import.php", 
	"AdminPageFramework_FieldType_media"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_media.php", 
	"AdminPageFramework_FieldType_number"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_number.php", 
	"AdminPageFramework_FieldType_posttype"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_posttype.php", 
	"AdminPageFramework_FieldType_radio"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_radio.php", 
	"AdminPageFramework_FieldType_section_title"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_section_title.php", 
	"AdminPageFramework_FieldType_select"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_select.php", 
	"AdminPageFramework_FieldType_size"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_size.php", 
	"AdminPageFramework_FieldType_submit"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_submit.php", 
	"AdminPageFramework_FieldType_system"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_system.php", 
	"AdminPageFramework_FieldType_taxonomy"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_taxonomy.php", 
	"AdminPageFramework_FieldType_text"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_text.php", 
	"AdminPageFramework_FieldType_textarea"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_FieldType_textarea.php", 
	"AdminPageFramework_WalkerTaxonomyChecklist"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FieldType/AdminPageFramework_WalkerTaxonomyChecklist.php", 
	"AdminPageFramework_FormField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormField/AdminPageFramework_FormField.php", 
	"AdminPageFramework_FormField_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormField/AdminPageFramework_FormField_Base.php", 
	"AdminPageFramework_FormField_FieldDefinition"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormField/AdminPageFramework_FormField_FieldDefinition.php", 
	"AdminPageFramework_FormOutput"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormOutput/AdminPageFramework_FormOutput.php", 
	"AdminPageFramework_FormTable"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormTable/AdminPageFramework_FormTable.php", 
	"AdminPageFramework_FormTable_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormTable/AdminPageFramework_FormTable_Base.php", 
	"AdminPageFramework_FormTable_Caption"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormTable/AdminPageFramework_FormTable_Caption.php", 
	"AdminPageFramework_FormTable_Row"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_FormTable/AdminPageFramework_FormTable_Row.php", 
	"AdminPageFramework_Input_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Input/AdminPageFramework_Input_Base.php", 
	"AdminPageFramework_Input_checkbox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Input/AdminPageFramework_Input_checkbox.php", 
	"AdminPageFramework_Input_radio"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Input/AdminPageFramework_Input_radio.php", 
	"AdminPageFramework_Input_select"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Input/AdminPageFramework_Input_select.php", 
	"AdminPageFramework_Script_AttributeUpdator"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_AttributeUpdator.php", 
	"AdminPageFramework_Script_Base"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_Base.php", 
	"AdminPageFramework_Script_CheckboxSelector"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_CheckboxSelector.php", 
	"AdminPageFramework_Script_CollapsibleSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_CollapsibleSection.php", 
	"AdminPageFramework_Script_MediaUploader"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_MediaUploader.php", 
	"AdminPageFramework_Script_OptionStorage"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_OptionStorage.php", 
	"AdminPageFramework_Script_RegisterCallback"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_RegisterCallback.php", 
	"AdminPageFramework_Script_RepeatableField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_RepeatableField.php", 
	"AdminPageFramework_Script_RepeatableSection"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_RepeatableSection.php", 
	"AdminPageFramework_Script_Sortable"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_Sortable.php", 
	"AdminPageFramework_Script_Tab"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_Tab.php", 
	"AdminPageFramework_Script_Utility"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_Utility.php", 
	"AdminPageFramework_Script_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Factory/view/AdminPageFramework_Script/AdminPageFramework_Script_Widget.php", 
	"AdminPageFramework_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/AdminPageFramework_MetaBox.php", 
	"AdminPageFramework_MetaBox_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/AdminPageFramework_MetaBox_Controller.php", 
	"AdminPageFramework_MetaBox_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/AdminPageFramework_MetaBox_Model.php", 
	"AdminPageFramework_MetaBox_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/AdminPageFramework_MetaBox_Router.php", 
	"AdminPageFramework_MetaBox_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/AdminPageFramework_MetaBox_View.php", 
	"AdminPageFramework_HelpPane_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/controller/AdminPageFramework_HelpPane_MetaBox.php", 
	"AdminPageFramework_Resource_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/controller/AdminPageFramework_Resource_MetaBox.php", 
	"AdminPageFramework_Property_MetaBox"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox/model/AdminPageFramework_Property_MetaBox.php", 
	"AdminPageFramework_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/AdminPageFramework_MetaBox_Page.php", 
	"AdminPageFramework_MetaBox_Page_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/AdminPageFramework_MetaBox_Page_Controller.php", 
	"AdminPageFramework_MetaBox_Page_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/AdminPageFramework_MetaBox_Page_Model.php", 
	"AdminPageFramework_MetaBox_Page_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/AdminPageFramework_MetaBox_Page_Router.php", 
	"AdminPageFramework_MetaBox_Page_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/AdminPageFramework_MetaBox_Page_View.php", 
	"AdminPageFramework_HelpPane_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/controller/AdminPageFramework_HelpPane_MetaBox_Page.php", 
	"AdminPageFramework_Resource_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/controller/AdminPageFramework_Resource_MetaBox_Page.php", 
	"AdminPageFramework_Property_MetaBox_Page"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_MetaBox_Page/model/AdminPageFramework_Property_MetaBox_Page.php", 
	"AdminPageFramework_NetworkAdmin"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_NetworkAdmin/AdminPageFramework_NetworkAdmin.php", 
	"AdminPageFramework_Link_NetworkAdmin"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_NetworkAdmin/controller/AdminPageFramework_Link_NetworkAdmin.php", 
	"AdminPageFramework_Property_NetworkAdmin"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_NetworkAdmin/model/AdminPageFramework_Property_NetworkAdmin.php", 
	"AdminPageFramework_PageLoadInfo_NetworkAdminPage"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_NetworkAdmin/view/AdminPageFramework_PageLoadInfo_NetworkAdminPage.php", 
	"AdminPageFramework_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/AdminPageFramework_PostType.php", 
	"AdminPageFramework_PostType_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/AdminPageFramework_PostType_Controller.php", 
	"AdminPageFramework_PostType_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/AdminPageFramework_PostType_Model.php", 
	"AdminPageFramework_PostType_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/AdminPageFramework_PostType_Router.php", 
	"AdminPageFramework_PostType_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/AdminPageFramework_PostType_View.php", 
	"AdminPageFramework_Link_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/controller/AdminPageFramework_Link_PostType.php", 
	"AdminPageFramework_Resource_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/controller/AdminPageFramework_Resource_PostType.php", 
	"AdminPageFramework_Property_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/model/AdminPageFramework_Property_PostType.php", 
	"AdminPageFramework_PageLoadInfo_PostType"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_PostType/view/AdminPageFramework_PageLoadInfo_PostType.php", 
	"AdminPageFramework_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/AdminPageFramework_TaxonomyField.php", 
	"AdminPageFramework_TaxonomyField_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/AdminPageFramework_TaxonomyField_Controller.php", 
	"AdminPageFramework_TaxonomyField_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/AdminPageFramework_TaxonomyField_Model.php", 
	"AdminPageFramework_TaxonomyField_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/AdminPageFramework_TaxonomyField_Router.php", 
	"AdminPageFramework_TaxonomyField_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/AdminPageFramework_TaxonomyField_View.php", 
	"AdminPageFramework_HelpPane_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/controller/AdminPageFramework_HelpPane_TaxonomyField.php", 
	"AdminPageFramework_Resource_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/controller/AdminPageFramework_Resource_TaxonomyField.php", 
	"AdminPageFramework_Property_TaxonomyField"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_TaxonomyField/model/AdminPageFramework_Property_TaxonomyField.php", 
	"AdminPageFramework_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/AdminPageFramework_UserMeta.php", 
	"AdminPageFramework_UserMeta_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/AdminPageFramework_UserMeta_Controller.php", 
	"AdminPageFramework_UserMeta_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/AdminPageFramework_UserMeta_Model.php", 
	"AdminPageFramework_UserMeta_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/AdminPageFramework_UserMeta_Router.php", 
	"AdminPageFramework_UserMeta_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/AdminPageFramework_UserMeta_View.php", 
	"AdminPageFramework_HelpPane_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/controller/AdminPageFramework_HelpPane_UserMeta.php", 
	"AdminPageFramework_Resource_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/controller/AdminPageFramework_Resource_UserMeta.php", 
	"AdminPageFramework_Property_UserMeta"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_UserMeta/model/AdminPageFramework_Property_UserMeta.php", 
	"AdminPageFramework_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/AdminPageFramework_Widget.php", 
	"AdminPageFramework_Widget_Controller"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/AdminPageFramework_Widget_Controller.php", 
	"AdminPageFramework_Widget_Factory"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/AdminPageFramework_Widget_Factory.php", 
	"AdminPageFramework_Widget_Model"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/AdminPageFramework_Widget_Model.php", 
	"AdminPageFramework_Widget_Router"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/AdminPageFramework_Widget_Router.php", 
	"AdminPageFramework_Widget_View"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/AdminPageFramework_Widget_View.php", 
	"AdminPageFramework_HelpPane_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/controller/AdminPageFramework_HelpPane_Widget.php", 
	"AdminPageFramework_Resource_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/controller/AdminPageFramework_Resource_Widget.php", 
	"AdminPageFramework_Property_Widget"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework_Widget/model/AdminPageFramework_Property_Widget.php", 
	"AdminPageFramework_AdminNotice"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_AdminNotice.php", 
	"AdminPageFramework_PluginBootstrap"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_PluginBootstrap.php", 
	"AdminPageFramework_Requirement"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_Requirement.php", 
	"AdminPageFramework_TableOfContents"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_TableOfContents.php", 
	"AdminPageFramework_Zip"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_Zip.php", 
	"AdminPageFramework_WPReadmeParser"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_WPReadmeParser/AdminPageFramework_WPReadmeParser.php", 
	"AdminPageFramework_Parsedown"	=>	AdminPageFramework_Registry::$sDirPath . "/utility/AdminPageFramework_WPReadmeParser/library/AdminPageFramework_Parsedown/AdminPageFramework_Parsedown.php", 
	"AdminPageFramework_Form_Model_Import"	=>	AdminPageFramework_Registry::$sDirPath . "/factory/AdminPageFramework/AdminPageFramework_Form_Model_Imort.php", 
);