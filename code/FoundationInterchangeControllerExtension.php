<?php

class FoundationInterchangeControllerExtension extends Extension {
	
	public $template_param = 'ss_interchange_template';
	
	public function onAfterInit() {
		$controller = $this->owner;
		$vars = $controller->request->getVars();
		$partial = (isset($vars[$this->template_param]) && $vars[$this->template_param] != "") ? $vars[$this->template_param] : false;
		if ($partial) {
			$controller->response->setBody($controller->renderWith($partial));
			$controller->response->output();
			exit();
		}
	}
	
	public function InterchangePartial($template) {
		return $this->owner->Link() . '?' . $this->template_param . '=' . $template;
	}
	
}