<?php
class userController extends framework
{
    public function __construct(){
        
        $this->helper('link');

    }
    public function index()
    {
        $this->view('userView');
    }
    public function userMethod()
    {
        $myModel = $this->model("userModel");
        if($myModel->myData()){
            $result = $myModel->myData();
        }else{
            echo "Sorry Issue";
        }
        // $myData = [
        //     "title" => "My first post",
        //     "body"  => "my first post body",
        // ];
         $this->view("userView", $result);
    }
    public function signup()
    {
        $userModel = $this->model("userModel");

        $fullName = $this->input(('fullName'));
        $email = $this->input('email');
        $password = $this->input('password');

        if ($userModel->userSignup($fullName, $email, $password)) 
        {
            echo "Your account has been created successfully";
        }
    }

}
