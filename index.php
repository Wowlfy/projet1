<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim',$_POST);
    
    $errors = [];

    if(empty($data['firstname'])) {
        $errors[] = '⚠️ Le prénom est obligatoire';
    }
    $firstnameLenght = 20;
    if (strlen($data['firstname']) > $firstnameLenght) {
        $errors[] = '⚠️ Le prénom doit faire moins de 20 caractères';
    }
    if (empty($data['lastname'])) {
        $errors[] = '⚠️ Le nom est obligatoire';
    }
    $lastnameLenght = 20;
    if (strlen($data['lastname']) > $lastnameLenght) {
        $errors[] = '⚠️ Le nom doit faire moins de 20 caractères';
    }
    if(empty($data['email'])) {
        $errors[] = '⚠️ L\'Email est obligatoire';
    }
    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
         $errors[] = '⚠️ Mauvais format d\'email';
    }
    if(empty($errors)) {
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/navbar_style.css">
    <link rel="stylesheet" href="assets/form_style.css">
    <title>John McClane</title>
</head>

<?php
require_once 'navbar.php';

?>


<body>

<?php 

require_once 'home.php';
require_once 'skills.php';
require_once 'experiences.php';
require_once 'formations.php';
require_once 'interests.php'; 
<<<<<<< HEAD
require_once 'form.php';
=======
require_once 'form.php'; 

>>>>>>> e5397f09daa470a826be830a02ab7bab2e4c2a82

?> 

</body>

<?php require_once 'footer.php'; ?>


</html>