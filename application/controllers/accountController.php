<?php
class accountController extends framework
{
    // Declare $accountModel as a class property
    protected $accountModel;

    public function __construct()
    {
        $this->helper("link");
        $this->accountModel = $this->model("accountModel");  // Dynamically load the model
    }

    public function index()
    {
        $this->view("signup");
    }

    public function createAccount()
    {
        $userData = [
            'fullName' => $this->input('fullName'),
            'email' => $this->input('email'),
            'password' => $this->input('password'),
            'fullNameError' => '',
            'emailError' => '',
            'passwordError' => '',
        ];

        // Validate user input
        if (empty($userData['fullName'])) {
            $userData['fullNameError'] = "Full Name is required";
        }

        if (empty($userData['email'])) {
            $userData['emailError'] = "Email is required";
        } else {
            if (!$this->accountModel->checkEmail($userData['email'])) {
                $userData['emailError'] = "Sorry this email already exists";
            }
        }

        if (empty($userData['password'])) {
            $userData['passwordError'] = "Password is required";
        } else if (strlen($userData['password']) < 8) {
            $userData['passwordError'] = "Password must be at least 8 characters long";
        }

        // If there are no errors, submit the form
        if (empty($userData['fullNameError']) && empty($userData['emailError']) && empty($userData['passwordError'])) {
            echo "Form submitted";
        } else {
            // Pass the data to the view
            $this->view('signup', $userData);
        }
    }

    public function loginForm()
    {
        $this->view("login");
    }
}

