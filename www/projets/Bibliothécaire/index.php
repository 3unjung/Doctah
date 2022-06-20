<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>La bibliothécaire - Dictionnaire de données et MCD</title>

</head>

<body>
    <div class="container">
        <div class="row">
            
            <br>

            <table class="table table-bordered">
                <thead class="thead-quimarchepas">
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Type et taille des données</th>
                        <th scope="col">Contrainte(s)</th>
                    </tr>
                </thead>

                <tbody>
                    <!--Abonnement d'une nouvelle personne-->

                    <tr>
                        <td st>Identifiant client</td>
                        <td>cli_id</td>
                        <td>INT, AUTO INCREMENT</td>
                        <td>NOT NULL</td>
                    </tr>
                    <tr>
                        <td>Nom du client</td>
                        <td>cli_nom</td>
                        <td>VARCHAR(20)</td>
                        <td>NOT NULL</td>
                    </tr>
                    <tr>
                        <td>Prénom du client</td>
                        <td>cli_prenom</td>
                        <td>VARCHAR(30)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Adresse du client </td>
                        <td>cli_address</td>
                        <td>VARCHAR(30)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Numéro de téléphone du client</td>
                        <td>cli_tel</td>
                        <td>CHAR(10)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Date d'abonnement</td>
                        <td>cli_dateSouscription</td>
                        <td>DATE</td>
                        <td>NOT NULL</td>
                    </tr>

                    <thead class="thead-quimarchepas">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </thead>

                    <!-- Réception d'un nouveau livre -->

                    <tr>
                        <td>Identifiant du livre</td>
                        <td>liv_id</td>
                        <td>INT, AUTO INCREMENT</td>
                        <td>NOt Null </td>
                    </tr>

                    <tr>
                        <td>Titre du livre</td>
                        <td>liv_titre</td>
                        <td>VARCHAR(50)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Auteur du livre</td>
                        <td>liv_autheur</td>
                        <td>VARCHAR(30)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Editeur du livre</td>
                        <td>liv_editeur</td>
                        <td>CHAR(10)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Pastille de couleur rangé par thème</td>
                        <td>liv_theme</td>
                        <td>CHAR(7)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <!-- Lorsque que un livre est emprunté -->

                    <tr>
                        <td st>Identifiant du client qui a emprunté</td>
                        <td>cli_id</td>
                        <td>INT</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Prénom du client qui a emprunté un livre</td>
                        <td>cli_prenom</td>
                        <td>VARCHAR(30)</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Nom du client qui a emprunté un livre</td>
                        <td>ci_name</td>
                        <td>VARCHAR(20)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Identifiant du livre emprunté</td>
                        <td>liv_id</td>
                        <td>INT</td>
                        <td>NOT NULL, classé par x > y</td>
                    </tr>

                    <tr>
                        <td>Date d'emprunt du livre</td>
                        <td>emp_date</td>
                        <td>DATE</td>
                        <td>NOT NULL, </td>
                    </tr>

                    <thead class="thead-quimarchepas">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </thead>
                    
                    <tr>
                        <td st>Identifiant du client qui a emprunté le livre</td>
                        <td>cli_id</td>
                        <td>INT</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Prénom du client qui a emprunté un livre</td>
                        <td>cli_prenom</td>
                        <td>VARCHAR(30)</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Nom du client qui a emprunté un livre</td>
                        <td>ci_name</td>
                        <td>VARCHAR(20)</td>
                        <td>NOT NULL</td>
                    </tr>

                    <tr>
                        <td>Identifiant du livre emprunté</td>
                        <td>liv_id</td>
                        <td>INT</td>
                        <td>NOT NULL, classé par x > y</td>
                    </tr>

                    <tr>
                        <td>Date de retour du livre</td>
                        <td>emp_dateRetour</td>
                        <td>DATE</td>
                        <td>NOT NULL </td>
                    </tr>

                    <tr>
                        <td>Date de relance du livre emprunté</td>
                        <td>emp_relance</td>
                        <td>DATE</td>
                        <td>NOT NULL, <= 3</td>
                    </tr>

                    <tr>
                        <td>Date de mise en rebut</td>
                        <td>reb_date</td>
                        <td>DATE</td>
                        <td></td>
                    </tr>





                </tbody>
            </table>
        </div>

        
        <!-- Probably a picture another time -->
        <img class="img-fluid" src="bibliothécaire.jpg" alt="Modèle Conceptuel des Données de l'exercice de la Bibbliothécaire">

        <br>
        
        <!-- Redirect to another page -->
        <button onclick="window.location.href = 'mdp.php'" type="button" class="btn btn-link">Exercice 2: Réalisation du modèle physique</button>


    </div>

</body>

</html>