<?php
$coverimage = $this->task->coverimageurlModel->getCoverimage($task['id']);
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: transparent;
  color: #555;
  padding: 5px 0px;
  border: none;
  cursor: pointer;
  position: absolute;
  width: 185px;
  top: 80px;
  right: 28px;
  
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  left: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<button class="open-button" id="cvrimgopen"><i class="fa fa-image fa-fw" aria-hidden="true"></i> + Cover Image URL</button>

<div class="form-popup" id="myForm">
  <form method="POST" action="<?= $this->url->href('CoverimageurlController', 'set', ['plugin' => 'coverimage', 'task_id' => $task['id'], 'project_id' => $task['project_id']]) ?>" class="form-container" autocomplete="off">
    <h1>Cover Image URL</h1>

    <label for="form-url_link"><b>URL</b></label>
    <input type="text" placeholder="<?= $coverimage ?>" name="url_link" id="form-url_link">

    <button type="submit" class="btn">Save</button>
    <button type="button" class="btn close" id="cvrimgclose">Close</button>
  </form>
</div>


