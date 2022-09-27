<?php

namespace Kanboard\Plugin\Coverimageurl;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{

    public function initialize()
    {
        //General style
        $this->hook->on('template:layout:css', array('template' => 'plugins/Coverimageurl/assets/css/board.css'));

        //Task        
        $this->template->hook->attach('template:board:private:task:after-title', 'coverimageurl:board/task');
        $this->template->hook->attach('template:task:sidebar:after-add-attachments', 'coverimageurl:task_file/sidebar');
        
        //java
        $this->hook->on('template:layout:js', array('template' => 'plugins/Coverimageurl/assets/js/coverimageurl.js'));
    }


    public function getClasses()
    {
        return array(
            'Plugin\Coverimageurl\Model' => array(
                'CoverimageurlModel',
            )
        );
    }

    public function getPluginName()
    {
        return 'Coverimageurl';
    }

    public function getPluginDescription()
    {
        return t('Coverimage Function using image URLs');
    }

    public function getPluginAuthor()
    {
        return 'Craig Crosby';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/creecros/coverimageurl';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.14';
    }
}
