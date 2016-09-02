<?php
require_once('dbconfig.php');

class USER
{
    private $conn;
 
    public function __construct()
    {
      $database = new Database();
      $db = $database->dbConnection();
      $this->conn = $db;
    }

    public function runQuery($sql){
      $stmt = $this->conn->prepare($sql);
      return $stmt;
    }

    public function register($fname,$lname,$cnumber, $email, $pass, $status)
    {

      try
      {
        // $new_password = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO users(first_name, last_name, contact_number, email, password, status) VALUES(:fname, :lname, :cnumber, :email, :pass, :status)");
                            
        $stmt->bindparam(":fname", $fname);
        $stmt->bindparam(":lname", $lname);
        $stmt->bindparam(":cnumber", $cnumber);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":pass", $pass);
        // $stmt->bindparam(":request_date", $reqdate);
        $stmt->bindparam(":status", $status);  

        $stmt->execute();  
        
        return $stmt; 
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }       
    }

    public function doLogin($email,$pass)
    {
      try
      {
        $stmt = $this->conn->prepare("SELECT id, email, password, status FROM users WHERE email=:email");
        $stmt->execute(array(':email'=>$email));
        $user_row=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() == 1)
        {
          // if(password_verify($pass, $user_row['password']))
          // {
          //   $_SESSION['user_session'] = $user_row['id'];
          //   return true;
          // }
          if ($pass == $user_row['password']) {
            $status = $user_row['status'];
            if($status == 'Active'){
              $_SESSION['user_session'] = $user_row['id'];
              return true;
            }elseif ($status == 'Pending') {
              $response = "Account is pending for confimation from Admin";
              return $response;
            }else{
              $response = "Account is Disabled";
              return $response;
            }
          }
      }
      return "Invalid email or password";
    }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }

   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
        return true;
    }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function doLogout()
   {
    unset($_SESSION['user_session']);
    if (isset($_SESSION['admin_session']) && isset($_SESSION['user_session'])) {
      session_destroy();
    }
    return true;
   }
}
?>