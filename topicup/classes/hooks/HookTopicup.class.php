<?php
/* -------------------------------------------------------
 *
 *   LiveStreet (v1.0)
 *   Plugin TopicUp for liveStreet 1.0.1
 *   Copyright © 2013 1099511627776@mail.ru
 *
 * --------------------------------------------------------
 *
 *   Contact e-mail: 1099511627776@mail.ru
 *
  ---------------------------------------------------------
*/

class PluginTopicup_HookTopicup extends Hook {

    public function RegisterHook() {
        $this->AddHook('topic_edit_after', 'doTopicUp',__CLASS__);

        $this->AddHook('template_form_add_topic_topic_end', 'injectTopicUp',__CLASS__);
        $this->AddHook('template_form_add_topic_photoset_end', 'injectTopicUp',__CLASS__);
        $this->AddHook('template_form_add_topic_question_end', 'injectTopicUp',__CLASS__);
        $this->AddHook('template_form_add_topic_link_end', 'injectTopicUp',__CLASS__);

        $this->AddHook('template_topic_content_end', 'injectTopicUpReason',__CLASS__);
        $this->AddHook('template_footer_end', 'displayCopyright',__CLASS__);

    }
	
	public function injectTopicUp(){
		return $this->Viewer_Fetch(Plugin::GetTemplatePath('topicup').'inject.TopicUp.tpl');
	}
	public function injectTopicUpReason($params){
		$oTopic = $params['oTopic'];
		$bTopicList = $params['bTopicList'];	
		if(!$bTopicList){			
			return $this->Viewer_Fetch(Plugin::GetTemplatePath('topicup').'inject.TopicUpReason.tpl');
		}
		return;
	}

	public function doTopicUp($params){
		$oTopic = $params['oTopic'];
		if($doTopicUp = getRequest('topic_topicUp')){
			$sTopicUpReason = getRequestStr('topic_topicUp_reason');
			$oTopic->setTopicUpReason($sTopicUpReason);
			$oTopic->setDateAdd(date('Y-m-d H:i:s'));
			$oTopic->setDateEdit(date('Y-m-d H:i:s'));
			$this->Topic_UpdateTopic($oTopic);
			$oTopic = $this->Topic_GetTopicById($oTopic->getId());
		}
	}

	public function displayCopyright(){
		return '<a href="http://crashbox.ws/">Дыхание Мейнстрима</a>';
	}

}
?>
