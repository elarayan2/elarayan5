<!DOCTYPE html>
<html>
<head>
	<title class="formulaire">Formulaire de contact</title>
</head>
<body class="fond">
<ul>
        <li><a href="#" > Acceuil </a></li>
        <li><a href="#" > Presentation </a></li>
        <li><a href="#"> Projets </a></li>
        <li><a href="#"> Contactez-nous</a></li>
        </ul>
    </nav>
    <nav>
    <img class="mg"  src="Événement @CaminoTV x @Adidas - @ChronosCorp..mp4">
    </nav>
    <header>
        <div>
        <h1 class="h1"> </h1>
        <video  class="video"  width="800" height="400" controls>
            <source src="Événement @CaminoTV x @Adidas - @ChronosCorp..mp4" type="video/mp4">
          Votre navigateur ne supporte pas la balise vidéo.
          </video>
        </div>
        <div class="blok">
          <img class="nizar" src="./man.jpeg">
          <h1 class="style">CHRONOS CORP. est une agence de réalisations audiovisuelles qui peut contribuer au développement de votre entreprise et être acteur de la partie communication à travers des réalisations vidéos, photos, animations ou encore sur la création d’un site web.

            Que vous soyez un restaurant, un salon de coiffure, un chauffeur privé.
            
            Une jeune entreprises ou entreprises à succès?
            
            Nous sommes là pour vous aider à accroître votre clientèle et vous accompagne dans tout vos projets digitaux.
            
            Nous vous proposons aussi d’autre prestations comme des shootings photo ou des vidéos de tout type d’événements. 
        </h1>
         </div>

          
        <nav>
            <div class="Cont">

                <div class="slider">
                  <img class="ph" src="./SITE/1.png">
                  <img class="ph" src="./SITE/2.png">
                  <img class="ph" src="./SITE/3.png">
                  <img class="ph" src="./SITE/LA BOMBA 2 FINAL.png">
                  <video  class="video2"  width="400" height="200" controls>
                    <source src="./COCKTAIL VF.mp4" type="video/mp4">
                </div>
            
                <div class="cont-btn">
                  <div class="btn-nav left">←</div>
                  <div class="btn-nav right">→</div>
                </div>
        <script>
  
  const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let count = 0;

function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide - 1){
        count++;
    } else {
        count = 0;
    }

    items[count].classList.add('active')
    console.log(count);
    
}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    // console.log(count);
    
}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente();
    } else if(e.keyCode === 39){
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)
    </script>
<div class="Ryn">
	<h2 class="Rayan">Formulaire de contact</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="nom">Nom:</label>
		<input type="text" name="nom" id="nom" required><br><br>
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required><br><br>
		<label for="message">Message:</label>
		<textarea name="message" id="message" required></textarea><br><br>
		<input type="submit" name="submit" value="Envoyer">
    </form>
</div>     
<style>
*{
    margin:0;
    padding:0;
    text-decoration: none;
    list-style: none;
}
body{
    font-family: 'Poppins' ; 
    background-image: url(./y23.gif);
}
.navbar{
    background-color: azure;
}
header{
    height: 100vh;
    width: 100vw;
    background-image: url(./y23.gif);
    background-size: cover;
}

.mg{
    height: 100%;
    width: 40%;
    background-color: wheat;
    display: flex;
    margin-left: 400px;
    background-color: black;
    opacity: 1.0;
    

}
.ph{
    height: 300px;
    width: 200px;
    margin-left: 200px;
    float: left ;
}
.ph{
    height: 300px;
    width: 200px;
    float: left ;
    margin-left: 200px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #111;
  }
  .h1{
    color: white;
    text-align: center;
    font-size: larger;
    font-style: unset;
  }
  .ph{
    height: 300px;
    width: 200px;
    float: left ;
    margin-left: 200px;
  }
  .video2{
    height: 200px;
    width: 400px;
    float: left ;
    margin-left: 150px;
    margin-top: 70px;

  }
  .ph{
    height: 300px;
    width: 200px;
    float: left ;
    margin-left: 200px;
  }
  .Cont{
    width: 700px;
    height: 320px;
    border: solid 4px #fff;
    margin-top: 100px;
    margin-left: 450px;
  }
  .photo{
    height: 400px;
    height: 800px;
    margin: 0;
    display: inline-block;
    background-size:cover ;
  }
  .bouton{
    position:absolute;
    width: 70px;
    cursor: pointer;
    top: 150px;
  }
.video{
    margin-left: 300px;
    border: solid 4px #fff;
    margin-bottom: 70px;
}
.style{
    color: #fff;
    width: 50%;
    height: 90%;
    text-align: center;
    margin-left: 280px;
}
.nizar{
    width: 180px;
    height: 200px;
    border-radius: 100%;
    border: solid 4px white;
    margin-left: 1100px;
}
.blok{
    border: solid 6px whitesmoke;
}
.slider img {
    max-width: 100%;
    display: none;
  }
  img.active {
    display: block;
    animation: fade 0.8s;
  }
  @keyframes fade {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
  
  .cont-btn {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    color: #fff;
    margin-top: 150px;
  }
  .btn-nav {
    font-size: 50px;
    margin: 0 15px;
    cursor: pointer;
  }
  .Contact{
    color: white;
    margin-left: 500px;
    font-size: 60px;
    margin-top: 150px;
  }
.phone{
    background-color: #fff;
    width: 50px;
    height: 60px;
    margin-left: 400px;
}
.num{
    color: #fff;
}
.mail{
    background-color: #fff;
    width: 50px;
    height: 60px;
    margin-left: 400px;
}
.Mail{
    color: aliceblue;
}
.ver{
    background-color: white;
    color: white;
   
}
.font{
    background-color:white;
}
.Rayan{
  color: white;
}
.Ryn{
  color: white;
  width: 700px;
    height: 320px;
    border: solid 4px #fff;
    margin-top: 100px;
    margin-left: 450px;
}
</style>
<div class="ver ">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées par le formulaire
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Vérifier si les données sont valides
    if (empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs du formulaire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Veuillez saisir une adresse email valide.";
    } else {
        // Envoyer un e-mail avec les données saisies dans le formulaire
        $destinataire = 'votre_adresse_email@example.com';
        $objet = 'Nouveau message de ' . $nom;
        $corps_message = 'Nom: ' . $nom . "\r\n" .
                         'E-mail: ' . $email . "\r\n" .
                         'Message: ' . $message . "\r\n";
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        if (mail($destinataire, $objet, $corps_message, $headers)) {
            echo 'Votre message a été envoyé avec succès.';
        } else {
            echo 'Une erreur est survenue lors de l\'envoi de votre message.';
        }
    }
}
?>
</div>
</body>
</html>



 