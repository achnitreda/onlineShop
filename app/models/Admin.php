<?php 

    class Admin extends Controller{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function login($email,$password){
            $this->db->query("SELECT * FROM users WHERE email =:email AND admin = 1"); // email , admin
            $this->db->bind(':email',$email);
            $user = $this->db->single();
            if($user){
                $hashedPassword = $user->password;
                if(password_verify($password,$hashedPassword)){ // Verifies that the given hash matches the given password.
                    // echo $password . '<br>';
                    // echo $hashedPassword;
                    // die();
                    return $user;
                }else{
                    return false;
                }
            }
        }
        

        public function findUserByEmail($email){ 
            $this->db->query("SELECT * FROM users WHERE email =:email");
            $this->db->bind(':email',$email);
            $this->db->execute();
            if($this->db->rowCount() > 0){
                return true;
            }else{
                return false;
            };
        }

        
    }