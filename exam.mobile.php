<?php
require_once(_XE_PATH_ . 'modules/exam/exam.view.php');

class examMobile extends examView
{
	function init()
	{
		$template_path = sprintf("%sm.skins/%s/", $this->module_path, $this->module_info->mskin);
		if(!is_dir($template_path) || !$this->module_info->mskin)
		{
			$this->module_info->mskin = 'default';
			$template_path = sprintf("%sm.skins/%s/", $this->module_path, $this->module_info->mskin);
		}
		$this->setTemplatePath($template_path);
	}
}
