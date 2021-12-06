<?php

    include_once 'db.php';

    class User extends DB {

        private $name;        
        private $username;        


        public function userExists($user, $pass) {
            // $md5pass = md5($pass);            
            $sql = 'SELECT * FROM users WHERE username = :user AND password = :pass';            
            $query = $this->connect()->prepare($sql);
            $query->execute(['user' => $user, 'pass' => $pass]);

            return $query->rowCount() ? true : false;              
        }

        public function setUser($user) {
            $sql = 'SELECT * FROM users WHERE username = :user';
            $query = $this->connect()->prepare($sql);
            $query->execute(['user' => $user]);

            foreach ($query as $currentUser) {
                $this->name = $currentUser['name'];
                $this->username = $currentUser['username'];                
            }
        }

        public function getName() {
            return $this->name;
        }

    }

?>