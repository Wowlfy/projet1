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
    if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
         $errors[] = '⚠️ Mauvais format d\'email';
    }
    if(empty($errors)) {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>john McClane</title>
    <link rel="stylesheet" href="assets/form_style.css">
</head>



<section class=form id="form">
        <div class=head>
            <h2>CONTACT MOI</h2>
        </div>
<form action="" method="POST" novalidate>
    <?php if (!empty($errors)) : ?>
        <ul class="error">
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
    <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <label for ="firstname">Prenom</label>
    <input type="text" name="firstname"  value="<?= $data['firstname'] ?? '' ?>" required>
    
    <label for ="lastname">Nom</label>
    <input type="text" id ="lastname" name="lastname"  value="<?= $data['lastname'] ?? '' ?>" required>
   
    <label for ="email">Email</label>
    <input type="text" id ="email" name="email"  value="<?= $data['email'] ?? '' ?>" required>
        
         
    <button>ENVOYER</button>
    </form>  
</section>

</html>

