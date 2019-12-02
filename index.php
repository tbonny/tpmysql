<?php require ("user.php") ?>
<html>

    <head>

    </head>

        <body>
            
        <form action="index.php" method="POST">
                login :  
                <input type="text" name="nom">
                mot de passe : 
                <input type="text" name="mdp">
                chercher
                <input type="text" name="recherche">
                
                <input type="submit" name="valider" value="valider">
                </form>
            
            
            
            <?php

                $utilisateur1 = new user();
                $utilisateur1->SetNom("Julien");
                $utilisateur1->SetMotDePasse("123");
                $utilisateur1->recherche('recherche');

                $utilisateur2 = new user();
                $utilisateur2->SetNom("Boris");
                $utilisateur2->SetMotDePasse("456");
                $utilisateur2->recherche('recherche');

                //code

                $_recherche = $_POST['recherche'];

                if (isset ($_POST ['nom']) && $_POST ['mdp']){
                        $isConnect = $utilisateur1->VerifMotDePasse($_POST['nom'], $_POST['mdp'] );
                        if($isConnect){
                            echo "connecté";
                        try{
                            //execution du code sur la BDD exemple
                            $maBase=new PDO('mysql:host=192.168.64.116; dbname=TD3exo2;
                            charset=utf8','admin', 'admin');
                            echo "; connecté à la BDD";

                            $LesDonneesBrutesDeLaBdd = $maBase->query("SELECT * FROM $_recherche");


                            while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch())
                                {
                                    ?> <p>  <?php
                                    echo $TableauDeDonnée["nom"] ;
                                    echo " ";
                                    echo $TableauDeDonnée["prenom"] ;
                                    ?> </p> <?php
                                }
                                    $LesDonneesBrutesDeLaBdd ->closeCursor();
                            }
                            catch (Exception $erreur){
                                echo 'Erreur : '.$erreur ->getMessage();
                            }
                            
                        } else {
                                    echo "erreur";
                               }
                    }
                
                    
                    ?>

                    
                    


        </body>

</html>