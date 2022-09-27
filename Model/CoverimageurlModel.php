<?php

namespace Kanboard\Plugin\Coverimageurl\Model;

use Kanboard\Model\TaskFileModel;

class CoverimageurlModel extends TaskFileModel {

    public function setCoverimage($task_id, $url) {

        $this->taskMetadataModel->save($task_id, array('coverimage' => $url));
    }

    public function getCoverimage($task_id) {

        $img = $this->taskMetadataModel->get($task_id, 'coverimage');
        if (!$img)
          return(null);
        return $img;
    }

}
