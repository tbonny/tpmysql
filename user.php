<html>

    <head>

    </head>

        <body>
            <?php
                class user{
                    //propriété :
                    private $_nom;
                    private $_MotDePasse;
                    private $_recherche;

                    //méthode : 
                    public function AfficherNom()
                    {
                        echo "<p>le nom est : ".$this->_nom."</p>";

                    }

                    public function SetNom($NouveauNom)
                    {
                        $this->_nom = $NouveauNom;
                        
                    }

                    public function SetMotDePasse($NouveauMotDePasse)
                    {
                        $this->_MotDePasse = $NouveauMotDePasse;
                    }

                    public function VerifMotDePasse($leNom, $leMDP)
                    {
                        if($leNom == $this->_nom)
                        {
                            if($leMDP == $this->_MotDePasse)
                            {
                                return true;
                            }
                        }

                        return false;
                    }

                    public function recherche($la_recherche)
                    {
                        $this->_recherche = $la_recherche;
                    }
                    

                }
            ?>    
        </body>

</html>