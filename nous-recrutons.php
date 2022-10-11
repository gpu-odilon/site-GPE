<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>GROUPE EXTERNALISATION</title>
</head>
<body>
    <!--Site header-->
    <header class="myHeaderContent">
        <div class="hero-webmarketing-bg">
             <div class="header-wrapper" id="myHeader">
                    <a href="index.php">
                    <img class="logo"  id="myLogo" src="images/logo.png" alt="GROUPE EXTERNALISATION"/>
                    </a>
                    <span class="mobile-btn"><a href="javascript:void(0);" class="icon" onclick="toggleNavFunction()">&#9776;</a></span>    
                    <nav class="menu-navigation row" id="menuNavigation">
                        
                        <li> <a class="active" id="activeNav" href="index.php">ACCUEIL</a></li>

                        <div class="dropdown" id="dropScroll">
                            <li><a href="nos-services.php">SERVICE</a></li>
                            <div class="dropdown-content" id="drop-subNav">
                              
                             <div class="sub-left">
                                    <a href="centre-de-relation-client.php">CENTRE DE RELATION CLIENT</a>
                                    <a href="#">ASSISTANAT</a>
                                    
                             </div>
                             <div class="sub-center">
                                    <a href="comptabilite.php">COMPTABILITÉ</a>
                                     <a href="bpo-processus-metiers.php">BPO & PROCESSUS DE METIER</a>
                             </div>
                              <div class="sub-right">
                                   
                                    <a href="webmarketing.php">WEBMARKETING</a>
                                    <a href="pao-conception-graphique.php">PAO & CONCEPTION GRAPHIQUE</a>
                              </div>
                            </div>
                            
                        </div>
                        <li> <a href="nous-recrutons.php">RECRUTEMENT</a></li>
                        <li>
                            <select id="custom-select">
                                <option value="fr" selected>FR</option>
                                <option value="en">EN</option>
                            </select>
                        </li>
                        <span class="mobile-close-btn"><a href="javascript:void(0);" class="icon" onclick="toggleNavFunction()">&times;</a></span>
                    </nav>
                </div>
            <!--Section Hero-->
            <section id="hero-acceuil" class="hero">
            <div class="wrapper">
                <div class="row">
                    <div class="col-6 hero-title hero-title-2">
                        <h1 class="exte-title" data-aos="zoom-in" data-aos-duration="3000">NOUS RECRUTONS</h1>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </header>

    <!--Nous recrutons body-->
    <section class="hire-bg">
        <div class="wrapper">
            <div class="hire-content-1">
                <h5 data-aos="fade-up" data-aos-duration="1500">Vous êtes à la recherche d'un emploi ou d'un stage ? <br> aimez les défis ? <br>Venez-nous rejoindre ! Une équipe FUN et sympa !</h5>
            </div>
            <div class="hire-content-2" data-aos="zoom-in" data-aos-duration="1500">
                <span class="hire-form-title">Candidature rapide</span>
                <p class="hire-form-desc">Pour rejoindre notre équipe, vous pouvez envoyer votre CV par mail ou nous contacter directement via ce formulaire de candidature.</p>
                <form class="hireform" id="hire-form" autocomplete="off">
                    <input type="text" name="nickname" id="nickname" placeholder="Nom" autocomplete="off" tabindex="-1" class="nickname-ucs">
                    <div><input type="text" name="nom" id="nom" placeholder="Nom"></div>
                    <div><input type="text" name="email" id="email" placeholder="e-mail"></div>
                    <div><input type="tel" name="tel" id="tel" placeholder="Téléphone"></div>
                    <div><input type="text" name="poste" id="poste" placeholder="Poste libre"></div>
                    <div class="textarea-form"><textarea name="message" id="message" rows="10" placeholder="Parcours et lettre de motivation"></textarea></div>
                    <input type="submit" name="hire-submit" value="Postuler">
                    <span id="sendmailLoading" class="sendmail-loading">Loading...</span>
                </form>
            </div>
        </div>
        
    </section>
    
<!--Footer-->
<footer>
    <div class="wrapper">
        <div id="contactModal" class="modal">
            <div class="modal-content">
                <div class="close-container"><span class="close-modal">&times;</span></div>
                <div class="contact-content-2">
                    <form class="contactform" id="contact-form" autocomplete="off">
                        <input type="text" name="cont-nickname" id="contNickname" placeholder="Nom" autocomplete="off" tabindex="-1" class="nickname-ucs">
                        <div><input type="text" name="cont-nom" id="contNom" placeholder="Nom"></div>
                        <div><input type="text" name="cont-email" id="contEmail" placeholder="e-mail"></div>
                        <div><input type="tel" name="cont-tel" id="contTel" placeholder="Téléphone"></div>
                        <div><input type="text" name="cont-subject" id="contSubject" placeholder="Poste libre"></div>
                        <div class="textarea-form"><textarea name="cont-message" id="contMessage" rows="10" placeholder="Votre message"></textarea></div>
                        <input type="submit" name="contact-submit" value="Envoyer">
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-row row">
            <div class="col-3 col-s-6 footer-item" data-aos="fade-up" data-aos-duration="3000">
                <div>
                    <div class="img-icon-footer">
                        <img src="images/Logo-tel.png" alt="">
                    </div>
                    <div>
                        <span>01 77 62 45 11</span><br>
                        <span>034 05 816 59</span>
                    </div><br>
                    <div class="img-icon-footer">
                        <img src="images/Logo-email.png" alt="">
                    </div>
                    <div>
                        <span>contact@groupe-externalisation.com</span>
                    </div>
                </div>
                <div id="footer-contact-button">
                    <button id="btnFooter" class="btn-footer"><i><img src="images/icons-mail-gm.png" alt=""></i> <span>nous contacter</span></button>
                </div>
                
            </div>
            <div class="col-3 col-s-6 footer-item" data-aos="fade-up" data-aos-duration="3000">
                <div>
                    <h4>NOS SECTEURS</h4>
                </div>
                <div>
                    <li><a href="centre-de-relation-client.php" class="href">Gestion de la relation client</a></li>
                    <li><a href="bpo-processus-metiers.php" class="href">BPO et processus métiers</a></li>
                    <li><a href="pao-conception-graphique.php" class="href">Conception graphique et PAO</a></li>
                    <li><a href="webmarketing.php" class="href">Webmarketing</a></li>
                    <li><a href="comptabilite.php" class="href">Externalisation comptable</a></li>
                </div>
                
            </div>
            <div class="col-3 col-s-6 footer-item" data-aos="fade-up" data-aos-duration="3000">
                <div>
                    <h4>NOS ENGAGEMENTS</h4>
                </div>
                <div>
                    <li>Traitement personnalisé des commandes</li>
                    <li>Profils correspondant à vos besoins</li>
                    <li>Une excellente qualité de travail</li>
                    <li>Satisfaction client au cœur de nos métiers</li>
                    <li>Ecoute active et actions</li>
                </div>
                
            </div>
            <div class="col-3 col-s-6 footer-item footer-item-2" data-aos="fade-up" data-aos-duration="3000">
                <div>
                    <img src="images/Home-logo-footer.png" alt="">
                </div>
                <div>
                    <a target="_blank" href="https://www.facebook.com/groupeexternalisationmada/"><img src="images/Logo-facebook.png" alt=""><span>facebook</span></a>
                    <a target="_blank" href="https://mg.linkedin.com/company/groupeexternalisation/"><img src="images/Logo-linkedin.png" alt=""><span>Linkedin</span></a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="wrapper footer-copyright">
        <span>Copyright © 2022 - Tous droits réservés • Politique de Confidentialité • Mentions légales</span>
    </div>

            <script type="text/javascript" src="js/animationHome.js"></script>
            <script type="text/javascript" src="js/scripts.js"></script>
            <script type="text/javascript" src="js/scripts-service-carousel.js"></script>
            <script type="text/javascript" src="js/contact-modal.js"></script>
            <script type="text/javascript" src="js/contact-form-validation.js"></script>
            <script type="text/javascript" src="js/stiky-header.js"></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>AOS.init();</script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</footer>
</body>
</html>