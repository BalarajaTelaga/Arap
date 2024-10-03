<?php
session_start();
include 'koneksi.php';

// Proses pendaftaran
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek jika email sudah ada
    $checkEmail = $conn->query("SELECT * FROM users WHERE email = '$email'"); // *Ubah nama tabelnya nanti 
    if ($checkEmail->num_rows > 0) {
        $error = "Email sudah terdaftar!";
    } else {
        // Masukkan user baru ke database
        $conn->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
        $error = "Pendaftaran berhasil! Silakan login.";
    }
}

// Proses login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek user berdasarkan email
    $result = $conn->query("SELECT * FROM users WHERE email = '$email'AND password='$password'"); // *yang ini juga ganti
    if ($result->num_rows > 0) {
        $user = fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header('Location: dashboard.php'); // Redirect ke halaman setelah login
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }
}

?>

