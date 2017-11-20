<?php
  session_start();
  ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <link rel="stylesheet" href="css/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="utf-8">
        <title>POP School - Contact</title>
    </head>

    <body>
        <?php include "header.php"; ?>

        <div class="contact-clean">
            <form method="post" action="contact_form.php" id="form">
                <h1>Contact</h1>
                <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
                <?php endif; ?>
                <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                    Votre e-mail à bien été transmis !
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Nom">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                    <textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea>
                    <input class="btn btn-primary" type="submit">
                </div>
            </form>
        </div>
        <?php include "footer.php"; ?>

        <!-- Latest compiled and minified JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified FontAwesome -->
        <script src="https://use.fontawesome.com/7458b576e7.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>

    </body>

    </html>
    <?php
  unset($_SESSION['inputs']);
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>
