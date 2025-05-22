<?php 
class accountModel extends database{

    public function checkEmail($email){
        if ($this->Query("SELECT email FROM users WHERE email = ?", [$email])) {
            if ($this->rowCount() > 0) {
                return false;
            }else{
                return true;
            }
        }
    }

}
?>