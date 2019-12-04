<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php if (!empty($title)) {
            echo $title;
        } else {
            echo 'Exo';
        } ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <?php //debug($_SESSION);?>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (!isLogged()) { ?>
                <li><a href="register.php">Inscriptions</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="randomproject.php">Random</a></li>
            <?php } else { ?>
                <li><a href="logout.php">Logout</a></li>

                <li>Bonjour <?php echo $_SESSION['login']['pseudo'] ?> !</li>
            <?php } ?>
        </ul>
    </nav>

</header>
<div id="content">