<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Intelligent Security IT | Contact</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>

<body id="wrapper">

    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i>+216 70 734 580</li>
                        <li><i class="fa fa-envelope"></i><a href="#"></a>contact@intelligentsecurityit.com</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">
                    <ul class="social_links">
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/intelligentsecurityit/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </section>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                        <a class="navbar-brand" href="https://www.intelligentsecurityit.com/">
                            <img src="img/logo.png" alt=""  height="60%"></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Accueil</a></li>
                            <li><a href="about.html">A Propos</a></li>
                            <li ><a style="cursor: pointer;border-bottom: none;">Services <i class="fas fa-angle-right"></i> <i class="fas fa-angle-down" ></i></a>
                                <ul>
                                    <li><a href="services/audit.html">AUDIT DE LA SECURITE</a></li>
                                    <li><a href="services/expertise.html">Conseil et expertise</a></li>
                                    <li><a href="">Management de la sécurité</a></li>
                                    <li><a href="services/gouvernance.html">Gouvernance de la sécurité</a></li>
                                    <li><a href="services/continuity.html">Continuité d'activité</a></li>
                                    <li><a href="">Sensibilisation à la sécurité</a></li>
                                </ul>
                            </li>
                            <li><a href="formation.html">Formation</a></li>
                            <li class="active" ><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 style="font-size: 36px;">Contacter <span>Nous</span></h2>
                <!--<br>
                <h2 style="font-size: 24px;font-weight: lighter;">Donc vous souhaitez connaître notre entreprise ?</h2>-->
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Contact</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Accueil<span class="sep"> / </span><span class="current">Contact</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Déposez Votre <span>Message</span></h2>
                <p class="subheading">Notre principale préoccupation est de faire face à nos clients et de s'assurer qu'ils sont satisfaits. Toute question, commentaire ou préoccupation que vous pourriez avoir est très important pour nous.</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nom *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nom d'Entreprise</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Sujet *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-default submit-button">Envoyer <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-5">
                            <div >
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199.55688287553792!2d10.28256911257428!3d36.8446284296809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDUwJzQwLjkiTiAxMMKwMTYnNTcuMyJF!5e0!3m2!1sen!2stn!4v1625769996116!5m2!1sen!2stn" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <ul class="row">
                                <li >
                                    <address>
									<h5>Office</h5>
									<p>
                                        <i class="fa fa-map-marker"></i>
                                        APP B1-7, RESIDENCE FARAH LAKE, RUE DE LA FEUILLE D'ERABLE, CITE LES PINS LES BERGES DU LAC 2, TUNIS
                                    </p>
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        TELEPHONE:  +216 70 734 580
                                    </p>
                                    <p>
                                        <i class="fa fa-fax"></i>
                                        FAX:  +216 70 734 580
                                    </p>
                                    <p>
                                        <i class="fa fa-mobile"></i>
                                        GSM:  +216 95 805 633
                                    </p>
                                    <p>
                                        <i class="fa fa-mobile"></i>
                                        GSM:  +216 95 805 538
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope"></i>
                                        contact@intelligentsecurityit.com
                                    </p>
								</address>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 block"><img src="img/logo.png" alt="" width="100%">
                <p>N'hésitez pas à contacter nos experts pour toute information supplémentaire, étude et calcul gratuit d'un service d'audit.
                    La sécurité de l'information est essentielle pour toute entreprise qui doit protéger et améliorer ses actifs d'information.</p></div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>PAGES A VISITER</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="about.html">A Propos</a></li>
                            <li><a href="formation.html">Formation</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
<div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Addresse</h4>
                        <hr/>
                        <p>APP B1-7, RESIDENCE FARAH LAKE, RUE DE LA FEUILLE D'ERABLE, CITE LES PINS LES BERGES DU LAC 2, TUNIS
                        </p>
                        
                    </div>
                </div>
                
            </div>
        </div>


    </section>

    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 copyright">
                    &copy;2021  <a href="https://www.intelligentsecurityit.com/">Intelligent Security IT</a> | Tous droits réservés
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 copyright">
                    Template by <a href="https://aspiresoftware.in">Aspire Software Solutions</a>
                </div>
            </div>
        </div>
    </section>


    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>
</body>

</html>