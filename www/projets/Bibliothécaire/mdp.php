<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Exercice 2: Réalisation du modèle physique</title>
</head>
<body>

<div class="container">
    
    <img class="img-fluid" src="mdp.jpg" alt="Modèle de données physique de l'exercice 2">

    <div class="row">
        <button onclick="window.location.href = 'index.php'" type="button" class="btn btn-link">Retour à l'exercice 1 sur la bibliothcécaire</button>

    </div>

    <!-- Auto width -->
    <!-- <button class="btn"><i class="fa fa-download"></i> Download</button>-->

    <a id="btn" class="btn btn-primary" href="mdp.jpg" role="button" download><span>Téléchargé</span></a>

    <script>
        let button = document.querySelector("body a");
        button.addEventListener("click",()=>{
            // visible quand on a cliquais
            const span = document.querySelector("a span");
            button.style.paddingRight = "10px";
            span.style.visibility = "visible";

            setTimeout(() => {
                // se modiife après 1s
                document.getElementById("btn").className = "btn btn-success";
                button.textContent = "Fichier déjà téléchargé";
            },1000);

        })
       
        

    </script>



</div>
</body>
</html>