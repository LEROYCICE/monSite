 <?php
//   require_once('database/connexion.php') ;

// if(!(empty($_POST['nom'])) && !(empty($_POST['email'])) && !(empty($_POST['messages']))){
//     $nom = strip_tags($_POST['nom']);
//     $email = strip_tags($_POST['email']) ;
//     $messages = strip_tags($_POST['messages']) ;
    
//     $donnee = "INSERT INTO Visiteurs(nom,email,messages) VALUES(:nom,:email,:messages)" ;


//     $requete = $connexion->prepare($donnee) ;

//     $requete->bindParam(':nom',$nom);
//     $requete->bindParam(':email',$email);
//     $requete->bindParam(':messages',$messages) ;
//     $requete->execute();

//  }
     ?>
   










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Matheux informaticiens</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="JS/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            var preloader = $('#preloader');
            if (preloader) {
                window.addEventListener('load', function() {
                    preloader.remove();
                });
            }

            $('#menu').click(function(){
                $('nav ul').toggleClass('show') ;
            });
            $('.active').click(function(){
                $('nav ul').removeClass('show');
            });

            $('button').click(function(){
                $('#msg').text('Votre message sera envoyé sous peu').css('color','green','font-weight','bold');
            })

        });
    </script>
</head>

<body>


    <header>
        <div id="div-menu">
            <nav id="navbar">
                <label class="logo"><img src="img/logooo (2).jpg"></label>
                <ul>
                    <li><a href="#"  class="active">Accueil</a></li>
                    <li><a href="#A_propos" class="active">A_propos</a></li>
                    <li><a href="#Services" class="active">Services</a></li>
                    <li><a href="#Contactez-nous" class="active">Contactez-nous</a></li>
                </ul>
                <label id="menu"><i class="bx bx-menu"></i></label>
            </nav>

        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="colonne">
                    <h1>Apprendre les mathématiques et l'informatique</h1> <br>
                    <h3>Nous sommes un groupe de jeunes mathématiciens de profession, passionnés 
                        par la programmation et le developpement web &amp; mobile.
                    </h3>

                </div>
                <div class="colonne">
                    <img src="img/servi3.jpg" alt="math" >
                </div>

            </div>

        </div>
    </section>
    
    <div>
        <h2 id="A_propos">
            A propos de nous
        </h2>
        <p>
            Nous sommes un groupe de jeunes mathématiciens très motivés
            par les calculs scientifiques; la programmation et le developpement 
            web &amp; mobile . Nous pourrons répondre à vos besoins que ce soit dans 
            l'encadrement de vos enfants en Mathématiques-Physiques ou dans la création de 
            vos sites web de E-commerce ou de Boutique en ligne...
        </p>
    </div>
    <div class="container_2">
        <div class="row">
            <h1 id="Services">Nos Services</h1>
            <p>Nous vous offrons plusieurs services qui sont accéssibles
                à distance comme en présentiel.
            </p>
            <div class="colonne_2">
                <i class='bx bx-math' id="repetition"></i>
                <h3 id="repeter">REPETITION en MATHS et en PHYSIQUES </h3>
                <p>
                Pour des questions d'encadrement des enfants dans les matières scientifiques 
                du niveau secondaire jusqu'à la licence-mathématique ; nous sommes prêts à vous servir. <br> <br>
                
                <img src="img/to-learn-2300141_1920.jpg" alt="mathematique">
                </p>
            </div>

            <div class="colonne_2">
                <i class='bx bxs-graduation' id="repetition"></i>
                <h3 id="repeter">INSCRIPTION EN LIGNE à UL </h3>
                <p>
                   Nouveaux Bacheliers ou anciens étudiants ; souhaitez-vous vous inscrire à l'Université de
                   Lomé pour l'année académique qui commence en Octobre ? Vous êtes au bon endroit.
                   Nous vous conduirons étape par étape dans le processus de l'inscription en ligne à UL.
                <br> <br><a href="https://docs.google.com/forms/d/e/1FAIpQLSe08tXDx3cfKMOmydopVeTmc64HrHu26qZpGI7ualBqH8WGIg/viewform?usp=sf_link" id="inscription"> Je m'inscrie sur la liste d'attente </a><br><br>
                
                <img src="img/telework-6795505_1920.jpg" alt="Inscription_en_ligne">
                </p>
            </div>

            <div class="colonne_2">
                <i class='bx bxs-file-css' id="repetition"></i>
                <h3 id="dev">DEVELOPPEMENT WEB </h3>
                <p>
                Nous vous servirons dans la création des sites vitrines ;
                 des sites de e-commerce ; des sites de boutiques en ligne... <br> <br> <br>
                <img src="img/programmer-1653351_1280.png">
                </p>
            </div>

            <div class="colonne_2">
            <i class='bx bxl-windows' id="repetition"></i>
                <h3 id="dev">INSTALLATION DES PC </h3>
                <p>
                Pour des questions d'installation de vos ordinateurs que ce soit sur Windows ou 
                 Linux , veuillez nous contacter.<br> <br> <br>
                <img src="img/hosting-6661115_1280.png">
                </p>
            </div>

            <div class="colonne_2">
                <i class='bx bxl-bitcoin' id="repetition"></i>
                <h3 id="crypto">LA CRYPTOMONNAIE et LA BLOCKCHAINE </h3>
                <p>
                Avez-vous bésoins d'une formation de qualité sur les
                 <span style="color: black; font-style:italic;font-weight:bold;"> 
                 cryptomonnaies </span>ou sur le fonctionnement de la nouvelle technologie
                  la  <span style="color: black; font-style:italic;font-weight:bold;"> blockchaine </span> en général ?
                Nous sommes prêts à vous servir convenablement. <br> <br> <br> <br> <br>
                <img src="img/blockchain-3212312_1920.jpg" alt="crypto">
                </p>
            </div>
        </div>
    </div>
    <div class="container_3">
        <div class="row">
            <h3 class="contact" id="Contactez-nous">Contactez-nous</h3>
            <div class="colonne_3">
                <label ><i class='bx bxs-location-plus' id="contact_icon" ></i></label>
                <label class="contact_">Localisation : </label>
                <h5>klikamé,Lome-Togo</h5>
                <br>
                <label ><i class='bx bx-envelope' id="contact_icon" ></i></label>
                <label class="contact_">Email : </label>
                <h5>kokoukpomblawou@gmail.com</h5>
                <br>
                <label ><i class='bx bxs-phone-call' id="contact_icon" ></i></label>
                <label class="contact_">Tel : </label>
                <h5>(+228) 79802867 / 70887810</h5>
            </div>
            <div class="colonne_3">
                <form action="index.php" method="post">
                    <input type="text" name="nom" placeholder="Votre nom complet" required>
                    <input type="email" name="email" id="email" placeholder="Votre e-mail" required>
                    <input type="text" name="sujet" placeholder="Votre sujet" required>
                    <textarea name="messages" id="message" placeholder="Votre message" required></textarea>
                    <button type="submit">Envoyer le message</button> <br>
                    <span id="msg"></span>
                </form>

            </div>
            <?php 
                 


                  if(!(empty($_POST['nom'])) && !(empty($_POST['email'])) && !(empty($_POST['messages']))){

                    $nom = strip_tags($_POST['nom']);
                    $email = strip_tags($_POST['email']) ;
                    $sujet = strip_tags($_POST['sujet']) ;
                    $messages = strip_tags($_POST['messages']) ;
  


                    $sms = "Ce message vous a été envoyé depuis la page contact du site math-info 
                    Nom :".$nom."
                    Sujet :".$sujet."
                    Message : ".$messages ;
                    mail("kokoukpomblawou@gmail.com", $sujet,
                     $sms ,"Reply-to:".$email) ;

                  }
                  
        
            ?>
        </div>
    </div>
    <div class="container_3">
        <div class="row">
            <div class="colonne_4">
                <h1>MATH-INFO</h1>
                <p>klikame <br>Lome <br> Togo</p>
                <h4>  <label> Tél : </label><label class="numero"> (+228)79802867 | 70887810 </label></h4>
                <h4>  <label> Email : </label><label class="email"> kokoukpomblawou@gmail.com </label></h4>
            </div>
            <div class="colonne_4">
                <h3>Nos services</h3>
                <ol>
                    <li><a href="#repeter"> >&nbsp; Répétition en mathématiques et Physiques</a></li>
                    <li> <a href="#dev"> > &nbsp;Developpement web et mobile</a></li>
                    <li><a href="#crypto">> &nbsp;Formation sur la cryptomonnaie et la blockchaine
                    </a></li>
                </ol>

            </div>
            <div class="colonne_4">
                <h3>Réseaux sociaux</h3>
                <p style="padding: 20px 0px;">Vous pouvez nous contactez à travers nos différents réseaux sociaux</p>
                <a href="https://wa.me/22879802867" class="reseau"><i class='bx bxl-whatsapp-square'></i></a>
                <a href="https://m.me/leroykokou12" class="reseau"><i class='bx bxl-facebook-circle'></i></a>
               <!-- <a href="https://twitter.com/KpomblawouK" class="reseau"><i class='bx bxl-twitter' ></i></a> -->
            </div>

        </div>

    </div>

    <footer >
        <div>
           
            <p>Copyright &copy; <?php echo date('Y') ?> . Tout droit reservé <br> MATH-INFO
            <a href="#"><i class='bx bx-up-arrow-circle' id="up"></i></a>
            </p>
            
        </div>
        <div>
            
        </div>
        
        <!-- <div>
            
            
            <i class='bx bxl-twitter' ></i>
            
            
            <i class='bx bx-envelope'></i>
            <i class='bx bx-spreadsheet' ></i>
            <i class='bx bxs-pencil'></i>
            <i class='bx bxs-file-css'></i>
            
            <i class='bx bxs-phone-call' ></i>
        
        </div> -->
    </footer>

    <div id="preloader"></div>

</body>

</html>