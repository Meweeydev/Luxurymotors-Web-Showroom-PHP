<?php
require("config/commande.php");

$Vehicules=afficher();

$Test=autodelete();

?>

<!DOCTYPE html>
<html>
<head>
<title>LuxuryMotors</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/logo.png" type="image/vnd.microsoft.icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", sans-serif;
}
body, html {height: 100%}
.bgimg {
  background-image: url('img/fond.webp');
  min-height: 70%;
  background-position: center;
  background-size: cover;
}

.luxurylogo {
width: 200px;
}

.luxurytext {
    font-family: fangsong;
    font-size: 35px;
}

.luxurytext2 {
    font-family: fangsong;
    font-size: 40px;
    color: white;
    text-align: center;
    padding-top: 25px;

}
.luxurytext3 {
    font-family: fangsong;
    font-size: 40px;
    color: white;
    text-align: center;
    padding-top: 25px;

}

.information { 

  background-color: #000000;
}

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:rgba(216, 0, 0, 0.226);
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  padding-left: 20px;
  padding-bottom: 8px;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

/* Intro */

#intro {
	text-align: center;
	overflow: hidden;
    
}



	#intro section {
		margin: 3em 0;
		padding: 2.5em 0;
	}

	#intro h2 {
		font-size: 1.75em;
	}

	#intro p {
		margin: 0;
	}

	#intro .middle {
		position: relative;
		z-index: 0;
	}

  #intro .two {
    margin-right: 60px;
  }

  #intro .last {
    padding-left: 55px;
  }
		#intro .middle:before {
			content: '';
			width: 35px;
			height: 100%;
			position: absolute;
			left: -22px;
			top: 0;
			display: block;
			z-index: -1;
			box-shadow: 32px 0 0 0 #000000, 0 -32px 0 0 #000000, 0 32px 0 0 #000000, 32px 32px 0 0 #000000 , 32px -32px 0 0 #000000, 0 0 32px 0 rgba(216, 0, 0, 0.226);
		}

		#intro .middle:after {
			content: '';
			width: 32px;
			height: 100%;
			position: absolute;
			right: -24px;
			top: 0;
			z-index: -1;
			box-shadow: -32px 0 0 0 rgba(0, 0, 0, 0.993), 0 -32px 0 0 rgba(0, 0, 0, 0.993), 0 32px 0 0 rgba(0, 0, 0, 0.993), -32px 32px 0 0 rgba(0, 0, 0, 0.993), -32px -32px 0 0 rgba(0, 0, 0, 0.993), 0 0 32px 0 rgba(216, 0, 0, 0.226);
		}

    .presen {
	max-width: 300px;
}
	#intro .button {
		min-width: 12em;
	}

  #intro h2 {
    color: white;
		font-size: 1.75em;
	}

	#intro p {
    color: white;

		margin: 0;
	}

  .container-login100-form-btn {
	width: 100%;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
  padding-top: 10px;
  }
  
  .login100-form-btn {

  
	align-items: center;
	padding: 0 20px;
	width: 100%;
	height: 50px;
	background-color: rgba(216, 0, 0, 0.226);
	border-radius: 25px;
  
	font-family: Ubuntu-Bold;
	font-size: 15px;
	color: #fff;
	text-transform: uppercase;
  
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	-moz-transition: all 0.4s;
	transition: all 0.4s;
  }
  
  .login100-form-btn:hover {
	background-color: rgba(216, 0, 0, 0.425);
  }
.test { 

  padding-top: 10px;

}







.tm-slideshow-section {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.tm-slideshow-section-reverse {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: row-reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
}

.tm-slideshow { width: 50%; }

.tm-slideshow-description {
    padding: 50px;
    color: white;
    width: 48%;
    z-index: 100;
    margin-left: -42px;
}

.tm-slideshow-description-left {
    margin-left: auto;
    margin-right: -42px;    
}
 
.photobmw {

  width: 600px;

}

.photor8 {

width: 600px;
margin-left: 320px;
}

.tm-bg-primary { background: rgba(216, 0, 0, 0.226); }
.tm-bg-highlight { background: rgba(216, 0, 0, 0.226); }
.form-group {
    max-width: 600px;
	text-align: center;
    margin-left: auto;
  margin-right: auto;
    font-family: fangsong;
}

.btn-block {

    background-color: rgba(216, 0, 0, 0.226);
    border-color: rgba(216, 0, 0, 0.226);
    font-family: fangsong;
}

.btn-block:hover {

background-color: rgba(216, 0, 0, 0.425);
border-color: rgba(216, 0, 0, 0.425);
font-family: fangsong;
}

.form-control {
	text-align: center;
    font-family: fangsong;
    
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .liste {
        width: 1400px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    

        margin-left: auto;
        margin-right: auto;
        margin-bottom: 25px;
        border-radius: 500px;
        line-height: 350%;
        
      }
      .liste>* {
          flex: 0 0 32.3333%;
          
      }

     .shadow-sm {

        background-color: rgba(216, 0, 0, 0.226);
        color: white;
     }

     .nomvehicules {

        font-weight: bolder;
     }


</style>
</head>
<body class="information">

<!--accueil-->

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div ><img  class="luxurylogo" src="img/luxurylogo.png"></img>
    
  </div>
  <div class="w3-display-middle">
    <h1 class="luxurytext">VENDRE SON VEHICULES CHEZ LUXURY MOTORS</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%" >
  </div>
  
</div>

<div >


  <div style="padding-bottom:70px">
    <h1 class="luxurytext2">ESTIMER VOTRE VOITURE</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%" >
  </div>

  

</div>



<form action="contact.php" method="post" >
<div class="form-group">

<input type="text" name="marque" class="form-control" placeholder="Marque du véhicule" required="required" autocomplete="off">
</div>
        <div class="form-group">

            <input type="text" name="nom" class="form-control" placeholder="Model du véhicule" required="required" autocomplete="off">
</div>
<div class="form-group">

    <input type="text" name="annee" class="form-control" placeholder="Année de le première mise en circulation du véhicule" required="required" autocomplete="off">
</div>
<div class="form-group">

    <input type="text" name="killometrage" class="form-control" placeholder="Kilométrage du véhicule" required="required" autocomplete="off">
</div>
<div class="form-group"> 

    <input type="text" name="boite" class="form-control" placeholder="Type de boite" required="required" autocomplete="off">
</div>

<div class="form-group"> 

    <input type="text" name="carburant" class="form-control" placeholder="Type de carburant" required="required" autocomplete="off">
</div>

<div class="form-group"> 

    <input type="text" name="couleur" class="form-control" placeholder="Couleur du véhicules" required="required" autocomplete="off">
</div>
<div class="form-group"> 

    <input type="text" name="prix" class="form-control" placeholder="Prix du véhicules souhaiter" required="required" autocomplete="off">
</div>
<div class="form-group"> 

    <input type="text" name="image" class="form-control" placeholder="lien en ligne d'une preview du véhicules" required="required" autocomplete="off">
</div>

<div class="form-group"> 

    <input type="text" name="image2" class="form-control" placeholder="lien en ligne d'une preview du véhicules" required="" autocomplete="off">
</div>
<div class="form-group"> 

    <input type="text" name="image3" class="form-control" placeholder="lien en ligne d'une preview du véhicules" required="" autocomplete="off">
</div>
<div class="form-group"> 

    <input type="text" name="image4" class="form-control" placeholder="lien en ligne d'une preview du véhicules" required="" autocomplete="off">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">Envoyer votre demande</button>
</div>
            
        </form>



        <div style="padding-bottom:70px">
        </div>


<div class="footer"><!--Footer-->
<div class="footer-dark">
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-3 item">
                  <h3>Nos Services</h3>
                  <ul>
                      <li><a href="#">Achats Véhicules occasions</a></li>
                      <li><a href="#">Ventes Vehicules occasions</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 item">
                  <h3>Nos Réseaux</h3>
                  <ul>
                      <li class="col item social"><a href="https://www.facebook.com/maxence.philippon.5/"><i class="icon ion-social-facebook"></i></a></li>
                      <li class="col item social"><a href="https://twitter.com/Meweey"><i class="icon ion-social-twitter"></i></a></li>
                      <li class="col item social"><a href="https://www.instagram.com/maxence_philippon/"><i class="icon ion-social-instagram"></i></a></li>
                  </ul>
              </div>
              <div class="col-md-6 item text">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.0138752268313!2d4.754864851460524!3d46.21017897901429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f37b3e96dd9bcf%3A0xcace642271355016!2s55%20Rte%20du%20Vieux%20Moulin%2C%2071570%20La%20Chapelle-de-Guinchay!5e0!3m2!1sfr!2sfr!4v1676281669841!5m2!1sfr!2sfr" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>Nous contacter</h3>
            <ul>
                <li><a href="#">maxence.philippon@outlook.com</a></li>
            </ul>
        </div>


  </footer>
</div>
</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</html>

