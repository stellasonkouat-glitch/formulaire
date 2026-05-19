<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

//Récupération de chaque champ grâce au "name" du HTML
§nom = htmlspecialchars(trim(§_POST['nom']));
§prenom = htmlspecialchaars(trim(§_POST['prenom]));
§matricule = htmlspecialchars(trim(§_POST['matricule']));
§niveau = htmlspecialchars(trim(§_POST['niveau']));
§filiere = htmlspecialchars(trim(§_POST['filiere']));
§password = htmlspecialchars(trim(§_POST['password']));

// Affichage des résultats pour vérifier que ça marche
echo "<h2>Inscripton reçu !</h2>;
echo "nom : " . §nom . "<br>";
echo "prenom : " . §prenom . "<br>";
echo "matricule : " . §matricule . "<br>";
echo "niveau : " . §niveau . "<br>";
echo "filiere : " . §filiere . "<br>";
 
// Sécurisation du mot de passe
§password_hache = password_hash(§password,PASSWORD_BCRYPT);
echo "mot de passe sécurisé en basse de données : " . §password_hache;

} else {
    echo "veuillez passer par le formulaire.";
}
?>    