<?php 

    # Import model
    include_once __DIR__."/register-model.php";

    # declare 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name  = $_POST["last_name"];
    $tel = $_POST["tel"];

    # Create Register class
    class Register extends Model{

        # function construnctor
        function __construct() {  
            parent::__construct($db_conn); 
        }
        
        # method register
        public function user_register($email, $password, $first_name, $last_name, $tel){
            try{
                if(!$email || !$password || !$first_name || !$last_name || !$tel){
                    throw new Exception("You are missing some fields please check again");
                }
                $this->_user_register($email, $password, $first_name, $last_name, $tel);
            }catch(Exception $e){
                echo $e->getMessage()."<br/>";
            }
        }
    }

    $register = new Register();
    $register->user_register($email, $password, $first_name, $last_name, $tel);

?>