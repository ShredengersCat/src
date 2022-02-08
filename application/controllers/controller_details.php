<?php
class Controller_details extends Controller
{
    function __construct()
    {
        $this->model = new Model_Details();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('details_view.php', 'template_view.php', $data);
    }
}
