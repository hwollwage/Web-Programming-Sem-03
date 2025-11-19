<?php 
include('../lib/Session.php');
include('../lib/Connection.php');

$session = new Session();

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if($act == 'login'){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $db->prepare('SELECT * FROM m_user WHERE username = ? LIMIT 1');
    $query->bind_param('s', $username);
    $query->execute();

    $data = $query->get_result()->fetch_assoc();

    // Check if user exists AND password matches
    if($data && password_verify($password, $data['password'])){

        // Save session
        $session->set('is_login', true);
        $session->set('username', $data['username']);
        $session->set('name', $data['nama']);    // <--- FIXED LINE
        $session->set('level', $data['level']);
        $session->commit();

        header('Location: ../index.php', false);
    } else {
        $session->setFlash('status', false);
        $session->setFlash('message', 'Username dan password salah.');
        $session->commit();
        header('Location: ../login.php', false);
    }

} else if($act == 'logout'){

    $session->deleteAll();
    header('Location: ../login.php', false);
}
