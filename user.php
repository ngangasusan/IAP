<?php
require_once("account.php");
require_once("dbconnect.php");

    class User implements Account{

        //member variables
        private $firstname;
        private $lastname;
        private $email;
        private $city;
        private $profile_picture;
        private $password;
        private $old_password;
        private $new_password;

        function __construct(){
          
        }
    


        public function register($pdo){
            $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
            try{
                $registerStmt=$pdo->prepare("INSERT INTO `users`(`userFname`, `userLname`, `userEmail`, `userCity`, `profile_picture`, `userPassword`) VALUES (?,?,?,?,?,?)");
                //review this part
                $registerStmt->execute([$this->firstname, $this->lastname, $this->email, $this->city, $this->profile_picture, $this->password]);
                $registerStmt = null;
                return "Record inserted";
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    

        public function login($pdo){
            try{
                $login_sql="SELECT userPassword FROM users WHERE userEmail = ?";
                $loginStmt=$pdo->prepare($login_sql);
                $loginStmt->execute([$this->username]);
                $row = $loginStmt->fetch();
                if ($row==null) {
                    return "This account does not exist";
                }
                if (password_verify($this->password,$row['password'])) {
                    return "Successfully Connected!";
                }
                return "Your Username/Password is incorrect!";
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function changePassword($pdo){


        }
        public function logout($pdo){
            session_destroy();
            header("Location: login.php");
        }

        
        


        /**
         * Get the value of firstname
         */ 
        public function getFirstname()
        {
                return $this->firstname;
        }

        /**
         * Set the value of firstname
         *
         * @return  self
         */ 
        public function setFirstname($firstname)
        {
                $this->firstname = $firstname;

                return $this;
        }
        

        /**
         * Get the value of lastname
         */ 
        public function getLastname()
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setLastname($lastname)
        {
                $this->lastname = $lastname;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of city
         */ 
        public function getCity()
        {
                return $this->city;
        }

        /**
         * Set the value of city
         *
         * @return  self
         */ 
        public function setCity($city)
        {
                $this->city = $city;

                return $this;
        }

        /**
         * Get the value of profile_picture
         */ 
        public function getProfile_picture()
        {
                return $this->profile_picture;
        }

        /**
         * Set the value of profile_picture
         *
         * @return  self
         */ 
        public function setProfile_picture($profile_picture)
        {
                $this->profile_picture = $profile_picture;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of old_password
         */ 
        public function getOld_password()
        {
                return $this->old_password;
        }

        /**
         * Set the value of old_password
         *
         * @return  self
         */ 
        public function setOld_password($old_password)
        {
                $this->old_password = $old_password;

                return $this;
        }

        /**
         * Get the value of new_password
         */ 
        public function getNew_password()
        {
                return $this->new_password;
        }

        /**
         * Set the value of new_password
         *
         * @return  self
         */ 
        public function setNew_password($new_password)
        {
                $this->new_password = $new_password;

                return $this;
        }
    }
?>