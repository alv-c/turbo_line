<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$clientKey = 'turbo_line';

if (!empty($_SESSION['jwt_token']) && !empty($_SESSION['jwt_expires']) && $_SESSION['jwt_expires'] > time()) {
    $token = $_SESSION['jwt_token'];
} else {
    $response = file_get_contents("https://geodrex.com.br/generate_token.php?client=$clientKey");
    $data = json_decode($response, true);
    $token = $data['token'] ?? null;
    
    if ($token) {
        $_SESSION['jwt_token'] = $token;
        $_SESSION['jwt_expires'] = time() + ($data['expires_in'] ?? 3600);
    }
}

if ($token) {
    echo '<iframe style="width: 100%; height: 1000px; border: 2px solid dodgerblue;" src="https://geodrex.com.br/geodrexPro_TurboLine.php?token=' . urlencode($token) . '"></iframe>';
} else {
    echo "Erro ao gerar token.";
}
?>