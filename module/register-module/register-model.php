<?php
# Import database connection
$conn = include_once "../../config/database.php";
echo "112039irt904ti0345tiw0459tiw409t ============>".$conn;

class Model {

    function __construct(){

    }

    protected function _user_register($email, $password, $first_name, $last_name, $tel) {
        $sql = "INSERT INTO tb_users (email, password, first_name, last_name, tel) 
                VALUES (?, ?, ?, ?, ?)";
        
        $params = [$email, $password, $first_name, $last_name, $tel];

        $stmt = sqlsrv_prepare($conn, $sql, $params);

        if (sqlsrv_execute($stmt)) {
            echo "User registered successfully.";
        } else {
            echo "Error: " . print_r(sqlsrv_errors(), true);
        }
    }
}
?>
