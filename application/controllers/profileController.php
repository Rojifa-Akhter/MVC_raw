<?php
class profileController extends framework
{

    protected $profileModel;
    public function __construct()
    {
        if (! $this->getSession('userId')) {
            $this->redirect("accountController/loginForm");
        }
        $this->helper("link");
        $this->profileModel = $this->model("profileModel");
    }
    public function index()
    {
        $userId = $this->getSession('userId');
        $data   = $this->profileModel->getData($userId);
        $this->view("profile", $data);
    }
    public function fruitForm()
    {
        $this->view("addFruit");
    }
    public function fruitStore()
    {

        $fruitData = [
            'name'         => $this->input("name"),
            'price'        => $this->input("price"),
            'quality'      => $this->input("quality"),
            'nameError'    => '',
            'priceError'   => '',
            'qualityError' => '',
        ];

        if (empty($fruitData['name'])) {
            $fruitData['nameError'] = "Fruit name is required";
        }
        if (empty($fruitData['price'])) {
            $fruitData['priceError'] = "Fruit price is required";
        }
        if (empty($fruitData['quality'])) {
            $fruitData['qualityError'] = "Fruit quality is required";
        }
        if (empty($fruitData['nameError']) && empty($fruitData['priceError']) && empty($fruitData['qualityError'])) {
            $data = [$fruitData['name'], $fruitData['price'], $fruitData['quality'], $this->getSession('userId')];
            if ($this->profileModel->addFruit($data)) {
                $this->setFlash("fruitAdded", "Fruit added successfully");
                $this->redirect("profileController/index");
            }
        } else {
            $this->view("addFruit", $fruitData);
        }
    }
    public function edit_fruit($id)
    {
        $userId    = $this->getSession('userId');
        $fruitEdit = $this->profileModel->edit_data($id, $userId);
        $data      = [
            'data'         => $fruitEdit,
            'nameError'    => '',
            'priceError'   => '',
            'qualityError' => '',
        ];
        $this->view("edit_fruit", $data);
    }
    public function updateFruit()
    {
        $id        = $this->input('hiddenId');
        $userId    = $this->getSession('userId');
        $fruitEdit = $this->profileModel->edit_data($id, $userId);

        $fruitData = [
            'name'         => $this->input("name"),
            'price'        => $this->input("price"),
            'quality'      => $this->input("quality"),
            'data'         => $fruitEdit,
            'hiddenId'     => $this->input('hiddenId'),
            'nameError'    => '',
            'priceError'   => '',
            'qualityError' => '',
        ];

        if (empty($fruitData['name'])) {
            $fruitData['nameError'] = "Fruit name is required";
        }
        if (empty($fruitData['price'])) {
            $fruitData['priceError'] = "Fruit price is required";
        }
        if (empty($fruitData['quality'])) {
            $fruitData['qualityError'] = "Fruit quality is required";
        }

        if (empty($fruitData['nameError']) && empty($fruitData['priceError']) && empty($fruitData['qualityError'])) {

            $updateData = [$fruitData['name'], $fruitData['price'], $fruitData['quality'], 
            $fruitData['hiddenId'], $userId];
            if($this->profileModel->updateFruit($updateData)){

                $this->setFlash('fruitUpdate','Your fruit record has been update successfully');
                $this->redirect("profileController/index");
            }

        } else {
            $this->view("edit_fruit", $fruitData);
        }
    }
    public function delete($id){
        $userId = $this->getSession('userId');
        if ($this->profileModel->deleteFruit($id, $userId)) {
            $this->setFlash('deleted','Your fruit has been deleted successfully');

            $this->redirect('profileController/index');
        }
    }
    public function logout()
    {

        $this->destroy();
        $this->redirect("accountController/loginForm");
    }
}
