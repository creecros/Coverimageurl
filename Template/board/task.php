<?php
$img = $this->task->coverimageurlModel->getCoverimage($task['id']);
if(!empty($img)){
    ?>
    <span class="coverimage">
        <img src="<?= $img ?>">    
    </span>
    <?php
}
?>

