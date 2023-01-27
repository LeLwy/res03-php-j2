<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire</title>
</head>
<body>
    <main id="form-main">
        
        <?php
        
        require('form-informations.phtml');
        require('form-competences.phtml');
         
        $formsData = array (
             
            "nom" => "",
            "prenom" => "",
            "email" => "",
            "telephone" => "",
            "linkedin" => "",
            "github" => "",
            "poste" => "",
            "biographie" => "",
            "loisirs" => "",
            "langages" => "",
            "frameworks" => "",
            "logiciels" => "",
            "langues" => ""
             
            );
             
            if(isset($_POST['nom']))
            {
                $formsData["nom"] = $_POST['nom'];
            }
             
            if(isset($_POST['prenom']))
            {
                $formsData["prenom"] = $_POST['prenom'];
            }
             
            if(isset($_POST['email']))
            {
                $formsData["email"] = $_POST['email'];
            }
             
            if(isset($_POST['telephone']))
            {
                $formsData["telephone"] = $_POST['telephone'];
            }
             
            if(isset($_POST['linkedin']))
            {
                $formsData["linkedin"] = $_POST['linkedin'];
            }
             
            if(isset($_POST['github']))
            {
                $formsData["github"] = $_POST['github'];
            }
             
             if(isset($_POST['poste']))
             {
                 $formsData["poste"] = $_POST['poste'];
             }
             
            if(isset($_POST['biographie']))
            {
                $formsData["biographie"] = $_POST['biographie'];
            }
             
            if(isset($_POST['loisirs']))
            {
                
                $formsData["loisirs"] = $_POST['loisirs'];
            }
             
            if(isset($_POST['langages']))
            {
                
                $formsData["langages"] = $_POST['langages'];
            }
        
    
            if(isset($_POST['frameworks']))
            {
                
                $formsData["frameworks"] = $_POST['frameworks'];
            }
  
   
            if(isset($_POST['logiciels']))
            {
                
                $formsData["logiciels"] = $_POST['logiciels'];
            }

            if(isset($_POST['langues']))
            {
                
                
                $formsData["langues"] = $_POST['langues'];
            }
            
            echo "<pre>";
            
            var_dump($formsData);
          
            echo "</pre>";
        ?>

    </main>
</body>
</html>