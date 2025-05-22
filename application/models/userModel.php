<?php 
class userModel extends database{
    public function myData(){
        // $fullName = "Rojifa Akhter";
        // $email = "Rojifa@gmail.com";
        // $password = "12345678";
        

        // if ($this->Query("INSERT INTO users (fullName,email,password)
        // VALUES (?,?,?)",[$fullName,$email,$password])) {
        $id = 2;
        if ($this->Query("SELECT * FROM users WHERE id = ?", [$id])) {
            return $this->fetch();

        }else{
            return false;
        }
    }
    public function userSignup($fullName, $email, $password){

        // if ($this->Query("INSERT INTO users (fullName,email,password)
        // VALUES (?,?,?)",[$fullName,$email,$password])) {
        
        if ($this->Query("INSERT INTO users (fullName, email, password) 
        VALUES (?,?,?)",[$fullName, $email, $password] )) {
            return true;

        }else{
            return false;
        }
    }
}
?>