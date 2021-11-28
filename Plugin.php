<?php

namespace Kanboard\Plugin\CCIT;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:js', array('template' => 'plugins/CCIT/Assets/js/CCIT.js'));

        $this->route->addRoute('PITM/Checkbox', 'CheckboxController', 'toggle', 'CCIT');
    }

    public function getPluginName()
    {
        return "ClickableCheckboxInTextAreas";
    }

    public function getPluginAuthor()
    {
        return 'Tomas Dittmann';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginDescription()
    {
        return 'Clickable boxes in Textareas';
    }
    
    public function getPluginHomepage()
    {
        return "https://github.com/Chaosmeister/CCIT";
    }
}
