<?php
class Controller_about extends Controller {
    function action_index() {
    $this->view->generate('feedback_view.php', 'template_view.php');
    }
    
}

