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

class PluginTopicup_ModuleTopic_EntityTopic extends PluginTopicup_Inherit_ModuleTopic_EntityTopic
{
    public function Init(){
    	parent::Init();
    }

    public function getTopicUpReason(){
    	return $this->getExtraValue('topicup_reason');
    }

    public function setTopicUpReason($reason){
    	$this->setExtraValue('topicup_reason',$reason);
    }
}

?>
