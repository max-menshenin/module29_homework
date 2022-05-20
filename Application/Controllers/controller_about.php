class Controller_About extends Controller {
    function action_about() {
    $this->view->generate('about_view.php', 'template_view.php');
    }
}