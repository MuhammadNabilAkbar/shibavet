<?php 

require_once "conn.php";

session_start();


// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];
//     $password = md5($_POST['password']);
   
//     $sql = "SELECT * FROM tb_users WHERE username='$username' AND pass='$pass'";
//     $result = mysqli_query($conn, $sql);
//     if ($result->num_rows > 0) {
//      $row = mysqli_fetch_assoc($result);
//      $_SESSION['username'] = $row['username'];
//      header("Location: ../Front/dashboard.php");
//     } else {
//      echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
//     }
//    }

if(isset($_POST['submit']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        echo"Salah";
        header("location:login.php");
    }
    else
    {
        $query ="SELECT * FROM tb_users WHERE username='".$_POST['username']."'AND password='".$_POST['password']."'";
        $result = mysqli_query($conn,$query);

        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['username']=$_POST['username'];
            header("location:../Front/dashboard/dashboard.php");
        }
    }

}
else{
    header("location:../Front/login/login.php");    
}


?>