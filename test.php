
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Authentification</title>
</head>
<body>
    <div class="container">

<div class="content">

<h1>Please, enter user info<span></span><h1>
    <p>WIP<p>

    <section>
        <h1> Connexion</h1>
    <form  method="post">
        <label>Nom/prenom</label>
        <input type="text" name="pseudo" id="pseudo"class="btn" placeholder="Identifiant"required><br/>
        <label>adresse mail</label>
        <input type="text" name="email" id="email" class="btn" placeholder="E-mail"required><br/>
        <label>mots de passe </label>
        <input type="passwords" name="passwords" id="passwords" class="btn" placeholder="Mot de passe"><br>
        <input type="submit" name="formsend" id="formsend"value="Register">    
    </form>
</section>
</div>
 
<?php

if (isset($_POST['formsend'])){

    extract($_POST);
        $options = [
            'cost' => 12,
        ];
        $password = 'asdf123!';

        

       

        include 'database.php'; 

        $passwords = password_hash($passwords, PASSWORD_DEFAULT);
        var_dump($passwords);
        
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $passwords)) {
            echo "Password does not meet the requirements! It must be alphanumeric and atleast 8 characters long";
          }

        
            global $db; 
            $q = $db->prepare("INSERT INTO user (pseudo,email,passwords) VALUES(:pseudo,:email,:passwords)");
            $q->execute([
                'pseudo' =>$pseudo,
                'email'=>$email,
                'passwords'=>$passwords
            ]);
    }


  

  
?>



</body>
</html>

