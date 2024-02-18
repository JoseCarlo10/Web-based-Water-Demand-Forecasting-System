<?php
date_default_timezone_set('Asia/Manila');
require('configs.php'); // Ensure 'config.php' contains your database connection code

session_start();

if (isset($_SESSION['user'])) {
    $sth = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $sth->execute(array($_SESSION['user']));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    $count = $sth->rowCount();
    $user_id = ($count > 0) ? $row['user_id'] : null;

    if (!is_null($user_id)) {
        $user_status = "offline";
        $stmt = $conn->prepare('UPDATE users SET user_status = :tt WHERE user_id = :uid');
        $stmt->bindParam(':tt', $user_status);
        $stmt->bindParam(':uid', $user_id);
        $stmt->execute();
    }

    unset($_SESSION['user']);

    if (session_destroy()) {
        header("Location: ../../LWUA/index.php");
        exit();
    }
}
?>
