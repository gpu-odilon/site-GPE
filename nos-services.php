<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="node_modules/aos/dist/aos.css">
        <title>GROUPE EXTERNALISATION</title>
    </head>
    <body>
        <!--Site header-->
        <header class="header-page-interne">
            <div class="hero-service-bg">
                <div class="header-wrapper" id="myHeader">
                    <a href="index.php">
                    <img class="logo"  id="myLogo" src="images/logo.png" alt="GROUPE EXTERNALISATION"/>
                    </a>
                    <span class="mobile-btn"><button id="myBtn">&#9776;</button></span> 
                    <!-- The Modal -->
                    <div id="myModal" class="modal2">
                        <!-- Modal content -->
                        <div class="modal-content-mobile">
                            <span class="closed1">&times;</span>
                            <div class="content-mobile2">
                                <button class="accordion1">
                                    <li> <a href="index.php">ACCUEIL</a></li>
                                </button>
                                <button class="accordion click-mob">SERVICES</button>
                                <div class="panel">
                                    <ul>
                                        <li>
                                            <a href="centre-de-relation-client.php">CENTRE DE RELATION CLIENT</a>
                                        </li>
                                        <li>
                                            <a href="#">ASSISTANAT</a>
                                        </li>
                                        <li>
                                            <a href="comptabilite.php">COMPTABILITÉ</a>
                                        </li>
                                        <li>
                                            <a href="bpo-processus-metiers.php">BPO & PROCESSUS DE METIER</a>
                                        </li>
                                        <li>
                                            <a href="webmarketing.php">WEBMARKETING</a>
                                        </li>
                                        <li>
                                            <a href="pao-conception-graphique.php">PAO & CONCEPTION GRAPHIQUE</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="accordion1">
                                    <li> <a href="nous-recrutons.php">RECRUTEMENT</a></li>
                                </button>
                            </div>
                        </div>
                    </div>
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
                        <!-- <span class="mobile-close-btn"><a href="javascript:void(0);" class="icon" onclick="toggleNavFunction()">&times;</a></span> -->
                    </nav>
                </div>
                <!--Section Hero-->
                <section id="hero-acceuil" class="hero">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-6 hero-title hero-title-2" data-aos="zoom-in" data-aos-duration="3000">
                                <h1 class="exte-title">NOS SERVICES</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>
        <!--Service body-->
        <section class="service-bg">
            <div class="wrapper">
                <div class="service-body">
                    <h2 data-aos="fade-down" data-aos-duration="3000">CLÉ DU RÉUSSITE POUR RÉUSSIR ET SE DEMARQUER DE LA CONCURRENCE</h2>
                    <h3 data-aos="fade-right" data-aos-duration="3000">Confiez-vous à notre Externalisation à moindre coût mais efficace sur l’ensemble de vos projets.</h3>
                    <span data-aos="fade-left" data-aos-duration="3000">
                        <p>Pour  chaque partenariat, une remise spéciale de 10% vous est réservée sur toutes nos prestations.</p>
                    <p><em>"1% de notre chiffre d'affaires annuel sera versé à une association humanitaire"</em></p>
                    </span>
                    
                </div>
            </div>
            <div class="wrapper">
                <div class="service-row">
                    <div class="service-item" data-aos="fade-up" data-aos-duration="3000">
                        <div class="container">
                            <img src="images/thumb-services-1.png" alt="" class="image" width="100%">
                            <div class="middle">
                                <div class="text">Centre relation client</div>
                            </div>
                        </div>
                        <span class="service-item-title">Centre relation client</span>
                        <p>Nous vous accompagnons aussi bien dans vos missions de développement marketing et commercial (prise de rendez-vous, télévente, détection de projets…), que dans la gestion de votre relation clientèle (support technique ou commercial, standard téléphonique, suivi de commandes).</p>
                        <a class="btn-secondary" href="centre-de-relation-client.php">en savoir plus</a>
                    </div>
                    <div class="service-item service-item-pad" data-aos="fade-up" data-aos-duration="3000">
                        <div class="container">
                            <img src="images/thumb-services-2.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">Assistanat</div>
                            </div>
                        </div>
                        <span class="service-item-title">Assistanat</span>
                        <p>Nous vous accompagnons aussi bien dans vos missions de développement marketing et commercial (prise de rendez-vous, télévente, détection de projets…), que dans la gestion de votre relation clientèle (support technique ou commercial, standard téléphonique, suivi de commandes).</p>
                        <a class="btn-secondary" href="#">en savoir plus</a>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-duration="3000">
                        <div class="container">
                            <img src="images/thumb-services-3.png" alt="" class="image">
                            <div class="middle">
                                <div class="text">Comptabilité</div>
                            </div>
                        </div>
                        <span class="service-item-title">Comptabilité</span>
                        <p>Nous vous accompagnons aussi bien dans vos missions de développement marketing et commercial (prise de rendez-vous, télévente, détection de projets…), que dans la gestion de votre relation clientèle (support technique ou commercial, standard téléphonique, suivi de commandes).</p>
                        <a class="btn-secondary" href="comptabilite.php">en savoir plus</a>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-duration="3000">
                        <div class="container">
                            <img src="images/thumb-services-4.png" alt="">
                            <div class="middle">
                                <div class="text">BPO & processus métiers</div>
                            </div>
                        </div>
                        <span class="service-item-title">BPO & processus métiers</span>
                        <p>Nous vous accompagnons aussi bien dans vos missions de développement marketing et commercial (prise de rendez-vous, télévente, détection de projets…), que dans la gestion de votre relation clientèle (support technique ou commercial, standard téléphonique, suivi de commandes).</p>
                        <a class="btn-secondary" href="bpo-processus-metiers.php">en savoir plus</a>
                    </div>
                    <div class="service-item service-item-pad" data-aos="fade-up" data-aos-duration="3000">
                        <div class="container">
                            <img src="images/thumb-services-5.png" alt="">
                            <div class="middle">
                                <div class="text">PAO|Conception graphique</div>
                            </div>
                        </div>
                        <span class="service-item-title">PAO|Conception graphique</span>
                        <p>Nous vous accompagnons aussi bien dans vos missions de développement marketing et commercial (prise de rendez-vous, télévente, détection de projets…), que dans la gestion de votre relation clientèle (support technique ou commercial, standard téléphonique, suivi de commandes).</p>
                        <a class="btn-secondary" href="pao-conception-graphique.php">en savoir plus</a>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-duration="3000">
                        <div class="container">
                            <img src="images/thumb-services-6.png" alt="">
                            <div class="middle">
                                <div class="text">Webmarketing</div>
                            </div>
                        </div>
                        <span class="service-item-title">Webmarketing</span>
                        <p>Nous vous accompagnons aussi bien dans vos missions de développement marketing et commercial (prise de rendez-vous, télévente, détection de projets…), que dans la gestion de votre relation clientèle (support technique ou commercial, standard téléphonique, suivi de commandes).</p>
                        <a class="btn-secondary" href="webmarketing.php">en savoir plus</a>
                    </div>
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
                                <span id="sendmailLoading" class="sendmail-loading">Loading...</span>
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
                            </div>
                            <br>
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
            <script type="text/javascript" src="js/scripts.js"></script>
            <script type="text/javascript" src="js/scripts-service-carousel.js"></script>
            <script type="text/javascript" src="js/contact-modal.js"></script>
            <script type="text/javascript" src="js/contact-form-validation.js"></script>
            <script type="text/javascript" src="js/stiky-header.js"></script>
            <script type="text/javascript" src="node_modules/aos/dist/aos.js"></script>
            <script>AOS.init();</script>
        </footer>
    </body>
</html>