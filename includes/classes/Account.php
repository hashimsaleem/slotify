<?php 
    class Account {
        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);

            if(empty($this->erroArray)) {
                //Insert into db
                return true;
            } else {
                return false;
            }
        }

        public function getError($error) {
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }

            return "<span class='errorMessage'>$error</span>";

        }

        private function validateUsername($un) {
            $len = strlen($un);
            if($len > 25 || $len < 5) {
                array_push($this->errorArray, "Your username must be between 5 and 25 characters");
                return;
            }

            //TODO: check if username exists
        }
        
        private function validateFirstName($fn) {
            $len = strlen($fn);
            if($len > 25 || $len < 2) {
                array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
                return;
            }
        
        }
        
        private function validateLastName($ln) {
            $len = strlen($ln);
            if($len > 25 || $len < 2) {
                array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
                return;
            }
        }
        
        private function validateEmails($em, $em2) {
            if($em != $em2) {
                array_push($this->errorArray, "Your emails don't match");
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email is inavlid");
                return;
            }

            //TODO: Check that username hasn't already been used.
        }
        
        private function validatePasswords($pw, $pw2) {
            if($pw != $pw2) {
                array_push($this->errorArray, "Your passwords don't match");
                return;
            }
        
            if(preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, "Your password can only contain numbers and letters");
                return;
            }

            $len = strlen($pw);
            if($len > 30 || $len < 5) {
                array_push($this->errorArray, "Your password must be between 30 and 5 characters");
                return;
            }

        }
    }

?>