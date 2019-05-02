<?php
if(!empty($_POST)) {
    if ($_POST['email'] == 'toto@toto.com' && $_POST['password'] == '1234') {
        // ok, connexion acceptee
        session_start();
        $_SESSION['utilisateur'] = "Toto";
        header('Location: acces.php');
    } else {
        $message = "Connexion refusée";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    if (!empty($message)) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $message; ?>
        </div>
    <?php
    }
    ?>
    <h1>Identifiez-vous</h1>
    <form action="authentification.php" method="post">
        <div class="form-group">
            <label for="champemail">Votre email</label>
            <input id="champemail" class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="champmotdepasse">Votre mot de passe</label>
            <input id="champmotdepasse" class="form-control" type="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</div>
</body>
</html>