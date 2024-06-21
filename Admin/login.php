<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    
    $akun = " SELECT*FROM akun WHERE Username= '$Username' AND password = '$Password'";
    $result = $koneksi->query($akun);

    if ($result->num_rows > 0) {
        $_SESSION["Username"] = $Username;
        header("Location: index.php");
    } else {
            $_SESSION['error'] = "Username atau password salah.";
            header("Location: login.php");
    }
}
?>
<?php
  session_start();

  if (!isset($_SESSION['Username'])) {
    header("Location: login.php");
    exit();
  }

  $Username = $_SESSION['Username'];
?>