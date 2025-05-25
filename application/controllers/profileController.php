<?php 
class profileController extends framework{

    public function __construct(){
        $this->helper("link");
    }
    public function index(){

        $this->view("profile");
    }
    public function logout(){

        $this->destroy();
        $this->redirect("accountController/loginForm");
    }
}

?>