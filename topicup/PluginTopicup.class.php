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

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginTopicup extends Plugin {

    protected $aInherits=array(
        'entity' => array(
            'ModuleTopic_EntityTopic' => '_ModuleTopic_EntityTopic',
        ),
    );

    // Активация плагина
    public function Activate() {
        return true;
    }

    // Деактивация плагина
    public function Deactivate(){       
        return true;
    }
    // Инициализация плагина
    public function Init() {
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/jquery-ui-timepicker-addon.css");
        $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__)."js/jquery-ui-timepicker-addon.js");
        $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__)."js/jquery-ui-timepicker-ru.js");
    }
}
?>
