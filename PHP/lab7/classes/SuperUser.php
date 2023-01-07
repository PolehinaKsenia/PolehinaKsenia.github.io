<?php 
    require_once "User.php";
    class SuperUser extends User{
        private $role;
        
        public function __construct($name, $login, $password, $role){
            parent::__construct($name,$login,$password);
            $this->role = $role;
        }
        
        public function showInfo(){
            echo parent::showInfo() . "Роль: {$this->role}<br /> \n";
        }
    }
?>