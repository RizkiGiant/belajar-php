<h1>Form Login</h1>
<form action="login.php" method="POST">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Ex. zerow" />
    <br>
    <label>password</label><br>
    <input type="password" name="password" placeholder="Ex. ---" />
    <br>
    <input type="submit" name="login" value="Masuk" />
</form>

<?php
include("./input-config.php");
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM akun
        WHERE username='$username' AND password=MD5('$password'); ";
    $data = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($data) > 0) {
        $_SESSION["login"] = TRUE;
        echo "
                <script>
                    alert('Login Berhasil');
                    window.location='input-data-diri.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Akun tidak ditemukan, coba lagi');
                window.location='login.php?nis=$nis';
            </script>
            ";
    }
}
