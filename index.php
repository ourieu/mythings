<?php
// Tentukan halaman (default dashboard)
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// List halaman yang diizinkan
$allowed_pages = [
    'dashboard' => 'pages/dashboard/index.php',
    'hobby'   => 'pages/hobby/movies.php'
];

// Jika halaman tidak ada dalam daftar → fallback ke dashboard
$page_to_load = $allowed_pages[$page] ?? $allowed_pages['dashboard'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
</head>

<body>
<main>
    <?php include $page_to_load; ?>
</main>
</body>
</html>
