<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Thanks.php">
</head>
<body>
<?php
echo 'Merci' . $_GET['user_name'] . ' ' . $_GET['user_firstname'] . ' de nous avoir contacté à propos de ' . $_GET['user_sujet'];?><br>

<?php echo 'Une de nos conseiler vous contacteras rapidement soit à l\'adresse' . $_GET['user_email'] . ' ou par telephone au numero suivant:' . $_GET['user_phone'] . ' Dans les plus brefs delais pour votre demande:';?><br>

<?php echo 'Votre message :';?><br>

<?php echo $_GET['user_message'] . ' :';

?>
</body>
</html>
