<?php

namespace Kanboard\Plugin\Coverimageurl\Controller;

use Kanboard\Controller\BaseController;

/**
 * Coverimage
 *
 * @package controller
 * @author  creecros
 */
class CoverimageurlController extends BaseController {

    public function set() {
        $values = [];
        
        $values = $_POST;
        
        $project = $this->getProject();
        $task = $this->getTask();

        $this->coverimageurlModel->setCoverimage($task['id'], $values['url_link']);

        $this->flash->success(t('Coverimage set.'));

        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id'])), true);
    }


}
