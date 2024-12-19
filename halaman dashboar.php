<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'pimpinan') {
    $result = $conn->query("SELECT * FROM