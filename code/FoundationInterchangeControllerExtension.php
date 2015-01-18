<?php

class FoundationInterchangeControllerExtension extends Extension {
	
	public $template_param = 'ss_interchange_template';
	
	public function onAfterInit() {
		$controller = $this->owner;
		$vars = $controller->request->getVars();
		$partial = (isset($vars[$this->template_param]) && $vars[$this->template_param] != "") ? $vars[$this->template_param] : false;
		if ($partial) {
			// render partial
			$controller->response->setBody($controller->renderWith($partial));
			// Prevent redirection of /home/ to / if requesting a partial of homepage, 
			// should happen before $controller->response->output();
			if($this->owner->URLSegment=='home'){
				$this->owner->response->removeHeader('Location');
				$this->owner->response->setStatusCode(200);
			}
			// output to browser
			$controller->response->output();
			exit();
		}
	}
	
	public function InterchangePartial($template) {
		return $this->owner->Link() . '?' . $this->template_param . '=' . $template;
	}
	
}
