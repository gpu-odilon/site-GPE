<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <title>GROUPE EXTERNALISATION</title>
</head>
<body>
    <!--Site header-->
        <header class="header-page-interne">
            <div class="hero-pao-bg">
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
                                            <a href="comptabilite.php">COMPTABILITÃ‰</a>
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
                        <li> <a id="activeNav" href="index.php">ACCUEIL</a></li>
                        <div class="dropdown" id="dropScroll">
                            <li><a class="active" href="nos-services.php">SERVICE</a></li>
                            <div class="dropdown-content" id="drop-subNav">
                                <div class="sub-left">
                                    <a href="centre-de-relation-client.php">CENTRE DE RELATION CLIENT</a>
                                    <a href="#">ASSISTANAT</a>
                                </div>
                                <div class="sub-center">
                                    <a href="comptabilite.php">COMPTABILITÃ‰</a>
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
                                <h1 class="exte-title">PAO & CONCEPTION GRAPHIQUE</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>

    <!--pao | conception graphique body-->
    <section class="crc-bg">
        <div class="wrapper">
            <div class="crc-content-1" data-aos="fade-up" data-aos-duration="3000">
                <h5>Nos Ã©quipes peuvent vous orienter et vous conseiller si vous le souhaitez</h5>
                <p>Nos Ã©quipes dâ€™experts rÃ©alisent vos projets digitaux. Ils allÃ¨gent vos ressources en interne et favorisent lâ€™exploration de nouveaux marchÃ©s.</p>
                <p>RÃ©alisation des plans, mise en page, traitement dâ€™images, montage vidÃ©o, packaging, digital.</p>
            </div>
            <div class="crc-row">
                <div class="crc-item" data-aos="fade-right" data-aos-duration="3000">
                    <h2>Nous intervenons dans plusieurs domaines</h2>
                </div>
                <div class="crc-item pao-item" data-aos="fade-left" data-aos-duration="3000">
                    <li>Traitement dâ€™images simples ou complexes <br><span>(retouche, coloration, redimension, nettoyage â€¦)</span></li>
                    <li>Montage de vidÃ©os <br><span class="">(rÃ©alisation de tutoriels, intÃ©gration de textes, voix dans les vidÃ©o â€¦)</span></li>
                    <li>Mise en page <br><span class="">(livres, catalogues, plaquettes commerciales, affiches â€¦)</span></li>
                    <li>Packaging  <br><span class="">(intÃ©gration de textes, retouches, dÃ©clinaison de packaging â€¦)</span></li>
                    <li>RÃ©alisation de plans 3D  <br><span class="">(conception de plan, intÃ©gration des mobiliers et des Ã©lÃ©ments dÃ©coratifs)</span></li>
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
                        <div><input type="tel" name="cont-tel" id="contTel" placeholder="TÃ©lÃ©phone"></div>
                        <div><input type="text" name="cont-subject" id="contSubject" placeholder="Objet"></div>
                        <div class="textarea-form"><textarea name="cont-message" id="contMessage" rows="10" placeholder="Votre message"></textarea></div>
                        <input type="submit" name="contact-submit" value="Envoyer">
                        <span id="sendmailLoading" class="sendmail-loading">Loading...</span>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-row row">
            <div class="col-3 col-s-6 footer-item" data-aos="fade-up" data-aos-duration="1500">
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
            <div class="col-3 col-s-6 footer-item" data-aos="fade-up" data-aos-duration="1500">
                <div>
                    <h4>NOS SECTEURS</h4>
                </div>
                <div>
                    <li><a href="centre-de-relation-client.php" class="href">Gestion de la relation client</a></li>
                    <li><a href="bpo-processus-metiers.php" class="href">BPO et processus mÃ©tiers</a></li>
                    <li><a href="pao-conception-graphique.php" class="href">Conception graphique et PAO</a></li>
                    <li><a href="webmarketing.php" class="href">Webmarketing</a></li>
                    <li><a href="comptabilite.php" class="href">Externalisation comptable</a></li>
                </div>
                
            </div>
            <div class="col-3 col-s-6 footer-item" data-aos="fade-up" data-aos-duration="1500">
                <div>
                    <h4>NOS ENGAGEMENTS</h4>
                </div>
                <div>
                    <li>Traitement personnalisÃ© des commandes</li>
                    <li>Profils correspondant Ã  vos besoins</li>
                    <li>Une excellente qualitÃ© de travail</li>
                    <li>Satisfaction client au cÅ“ur de nos mÃ©tiers</li>
                    <li>Ecoute active et actions</li>
                </div>
                
            </div>
            <div class="col-3 col-s-6 footer-item footer-item-2" data-aos="fade-up" data-aos-duration="1500">
                <div>
                    <img class="image-logoFoot src="images/Home-logo-footer.png" alt="">
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
        <span>Copyright Â© 2022 - Tous droits rÃ©servÃ©s â€¢ Politique de ConfidentialitÃ© â€¢ Mentions lÃ©gales</span>
    </div>


    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/contact-modal.js"></script>
    <script type="text/javascript" src="js/contact-form-validation.js"></script>
    <script type="text/javascript" src="js/stiky-header.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script>AOS.init();</script>
</footer>
</body>
</html>