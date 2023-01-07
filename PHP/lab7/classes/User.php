<?php

    class User{
        private $name;
        private $login;
        private $password;
        
        public function __construct($name, $login, $password){
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
        }
        
        public function showInfo(){
            echo "<br>Имя: {$this->name}; Логин: {$this->login}; Пароль: {$this->password} \n";
        }
        
        public function __destruct(){
            echo " Пользователь {$this->login} удален<br> \n";
        }
    }

?>