<?php 
/**
* 
*/
require_once('dbconfig.php');
class ADMIN
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

    public function updateStatusOfUser($id, $status){
      try {
        $stmt = $this->conn->prepare("UPDATE users SET status=:status WHERE id=:id");
        $stmt->execute(array(':id'=>$id, ':status'=>$status));
        return $stmt;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

    public function insertTransactionHistory($transaction_name, $admin_id, $user_id){
      try {
        $stmt = $this->conn->prepare("INSERT INTO admin_transaction_history(log_id, log_time, transaction_name, admin_id, user_id) VALUES (NULL, CURRENT_TIMESTAMP, :transaction_name, :admin_id, :user_id)");
        $stmt->execute(array(':transaction_name'=>$transaction_name, ':admin_id'=>$admin_id, ':user_id'=>$user_id));
        return $stmt;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

    public function doLogin($email,$pass)
    {
      try
      {
        $stmt = $this->conn->prepare("SELECT id, email, password FROM admins WHERE email=:email ");
        $stmt->execute(array(':email'=>$email));
        $adminRow=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() == 1)
        {
          // if(password_verify($pass, $adminRow['password']))
          // {
          //   $_SESSION['admin'] = $adminRow['id'];
          //   return true;
          // }
          if(($pass == $adminRow['password']))
          {
            $_SESSION['admin_session'] = $adminRow['id'];
            return true;
          }
          else
          {
            return false;
          }
        }
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }

    public function is_loggedin()
   {
      if(isset($_SESSION['admin_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function doLogout()
   {
        unset($_SESSION['admin_session']);
        if (isset($_SESSION['admin_session']) && isset($_SESSION['user_session'])) {
          session_destroy();
        }
        return true;
   }

}

 ?>