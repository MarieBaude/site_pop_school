<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <title>POP School - Accueil</title>
</head>

<body>
    <?php include "header.php"; ?>
    <div id="particles">
        <div id="intro">
            <img id="logo_popschool" src="img/logo/popschool.png" alt="logo pop school">
            <div class="mouse">
                <span></span>
            </div>
        </div>
    </div>

    <section class="green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="color_white"><strong>
                        POP School est un entreprise à impact social qui propose des formations aux métiers du numérique, 100 % gratuites pour les jeunes, les demandeurs d’emploi et les personnes en reconversion. Véritable secteur en pleine expansion, le secteur du numérique offre un véritable vivier d’emplois. POP School propose de nombreuses formations innovantes aux métiers émergents du numérique pour permettre aux personnes avec ou sans diplôme d’intégrer rapidement le monde du travail.
                        </strong></p>
                    <h2 class="text-center text-uppercase color_blue">
                        <strong>Les formations POP School sont faites pour toi</strong>
                    </h2>
                    <br>
                    <p class="color_blue">
                        POP School propose une méthode d’apprentissage innovante, immersive, agile et horizontale, privilégiant le pair à pair, le mode projet et le développement de la capacité de collaboration. Il s'agit d'une démarche expérimentale, complémentaire à l'offre de formation secondaire et professionnelle, qui permet de répondre de manière agile à des besoins non couverts aujourd'hui, dans un double objectif d'adaptation et de développement de connaissances.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container formation">
            <div class="row">
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="formation_devweb.php"><img src="img/logo/web_dev.svg" alt="développeur web"></a>
                    <h3>Formation de Développeur Web/Mobile</h3>
                    <p class="text-left color_blue">
                        La formation de Développeur d’application Web/Mobile t’apprends différents langages de programmation. En 6 mois obtient un titre professionnel de niveau BAC + 2 qui te permettra d’intégrer le monde professionnel ou de poursuivre tes études...
                    </p>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="formation_iot.php"><img src="img/logo/IoT.svg" alt="iot maker"></a>
                    <h3>Formation IoT Maker</h3>
                    <p class="text-left color_blue">
                        La formation IoT Maker t’ apprend à prototyper et tester des objets connectés tout en contribuant à la démarche d’open-innovation. Ce programme de formation atypique répond aux besoins des entreprises spécialisées dans le domaine des objets connectés.
                    </p>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="formation_dsh.php"><img src="img/logo/data_security.svg" alt="data security"></a>
                    <h3>Formation Data Security Helper</h3>
                    <p class="text-left color_blue">
                        La formation DSH t’aide à acquérir des compétences dans le domaine de la cybersécurité. Sécurisation des données, analyse des échanges, tentatives d’intrusions sur internet... Intègre une formation unique qui te permettra d’obtenir en 6 mois un niveau BAC + 2.
                    </p>
                </div>
            </div>
    </section>

    <div class="col-lg-12 green2">
        <br>
        <p class="text-center color_white"><strong>
            Nos formations gratuites sont accessibles à toutes et à tous. Devenez Développeur Web, Community Manager, spécialiste des Objects Connectés ou de la Cybersécurité, et bien plus encore...</strong>
        </p><br>
    </div>

    <section class="container factory">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-uppercase color_blue"><strong>nos fabriques</strong></h2><br>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="fabst-omer.php"><img src="img/factory/Saint-Omer.png" alt="saint-omer"></a>
                        <div class="caption">
                            <h3 class="text-left">La formation de Saint-Omer</h3>
                            <p class="text-left color_blue">
                                La POP School de Saint-Omer propose la formation de Développeur d’application Web/Mobile. Des modules supplémentaires dans le domaine de l’IoT et la cybersécurité seront enseignés pour répondre aux besoins des entreprises du territoire. C’est quoi un Développeur d’application web? Le Développeur d’application Web/Mobile <a href="fabst-omer.php">[…]</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="fabmaubeuge.php"><img src="img/factory/Maubeuge.jpg" alt="maubeuge"></a>
                        <div class="caption">
                            <h3 class="text-left">La formation de Maubeuge</h3>
                            <p class="text-left color_blue">
                                La POP School de Maubeuge propose la formation de Data Security Helper (DSH). Il s’agit d’une offre de formation qui permet de répondre aux besoins des entreprises en matière de cybersécurité. C’est quoi un Data Security Helper? Le DSH s’occupe de la sécurisation des données et des flux, dans le cadre, entre autres, du respect du nouveau Règlement <a href="fabmaubeuge.php">[…]</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="fabst-quentin.php"><img src="img/factory/Saint-Quentin.png" alt="saint-quentin"></a>
                        <div class="caption">
                            <h3 class="text-left">La formation de Saint-Quentin</h3>
                            <p class="text-left color_blue">
                                La POP School de Saint-Quentin propose une formation unique : IoT Maker. Il s’agit d’une offre de formation qui permet de répondre de manière agile aux besoins des entreprises comme celles du Faubourg Numérique de Saint-Quentin. C’est quoi un IoT Maker? Un IoT Maker réalise le prototypage rapide hadware et <a href="fabst-quentin.php">[…]</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="fablens.php"><img src="img/factory/Lens.png" alt="lens"></a>
                        <div class="caption">
                            <h3 class="text-left">La formation de Lens</h3>
                            <p class="text-left color_blue">
                                La POP School de Lens propose la formation de Développeur d’application Web/Mobile. Il s’agit d’une offre de formation qui permet de répondre de manière agile aux besoins des entreprises du bassin minier. C’est quoi un Développeur d’application web? Le Développeur d’application web mobile effectue <a href="fablens.php">[…]</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="fabvals.php"><img src="img/factory/Valenciennes.png" alt="valenciennes"></a>
                        <div class="caption">
                            <h3 class="text-left">La formation de Valenciennes</h3>
                            <p class="text-left color_blue">
                                Adressée aux 18-25 ans « NEET » : Not in Education, Employement or Training, Nous proposons la formation de Développeur d'application Web/Mobile. Une formation sur mesure qui permet de répondre de manière agile à des besoins non couverts sur le territoire du Valenciennois. La POP School de Valenciennes propose la formation de Développeur d’application Web/Mobile <a href="fabvals.php">[…]</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="green">
        <div class="container team">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-uppercase color_blue"><strong>l'équipe</strong></h2><br>
                </div>
                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/florette_eymenier.jpeg" alt="florette eymenier">
                    <a href="https://www.linkedin.com/in/florette-eymenier-16634954/">
                      <h3 class="staff_name">Florette Eymenier .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                      Créatrice de POP School, je développe le projet dans un esprit innovation sociale et numérique. Réalisatrice de documentaires et artiste plasticienne dans les nouveaux médias, j’ai été enseignante à l’École Supérieure d’Art et Design et Communication Digitale.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/domitille_gobbo.jpeg" alt="domitille gobbo">
                    <a href="https://www.linkedin.com/in/domitillegobbo/">
                        <h3 class="staff_name">Domitille Gobbo .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                        Passionnée par la transmission de savoir et l’apprentissage, mordue de numérique et toujours en quête de sens j’ai rejoins POP School pour vivre le mélange de ces trois éléments au quotidien !
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/baptiste_dufour.jpg" alt="baptiste dufour">
                    <a href="https://www.linkedin.com/in/baptiste-dufour-8b883692/">
                        <h3 class="staff_name">Baptiste Dufour .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">

                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/Brahim_Sellam.jpg" alt="brahim sellam">
                    <a href="https://www.linkedin.com/in/brahim-sellam-337a8928/">
                        <h3 class="staff_name">Brahim Sellam .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                        Passionné par les nouvelles technologies, je suis le Responsable Administratif de POP School Valenciennes. Ingénierie, accompagnement et de pilotage de projets sont des compétences que j’aime exercer au quotidien.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/benoit_ponthieu.jpg" alt="benoit ponthieu">
                    <a href="https://www.linkedin.com/in/benoit-ponthieu-1b250434/">
                        <h3 class="staff_name">Benoît Ponthieu .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                      Autodidacte depuis plus de 10 ans en développement web et administration réseau, j’ai fondé il y a 5 ans la société Fabrik4Web qui m’a permis de découvrir POPSchool en tant que recruteur puis que j’ai rejoints en tant que Formateur afin de transmettre ma passion pour le dev et les nouvelles technologies.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/david_demonchy.jpg" alt="david demonchy">
                    <a href="https://www.linkedin.com/in/daviddemonchy/">
                        <h3 class="staff_name">David Demonchy .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                      Autodidacte dans la vie et dans l’âme, j’ai créé et porté pendant 5 ans une société de développement web et d’hébergement. J’ai rejoins POP School il y a 2 ans comme formateur afin de partager mes acquis et mon expérience. j’occupe aussi un poste de CTO pour une société commerciale en B2B.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/clementine_havrez.jpg" alt="clementine havrez">
                    <a href="https://www.linkedin.com/in/clemhavrez/">
                        <h3 class="staff_name">Clémentine Havrez .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                      De formation ingénieure informatique avec quelques années d'expérience, j'ai toujours aimé apprendre et partager. C'est donc en toute logique que je suis passée, depuis mars 2018, du côté enseignement de la Force !
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/myriam_pennequin.jpeg" alt="myriam pennequin">
                    <a href="https://www.linkedin.com/in/myriam-pennequin/">
                        <h3 class="staff_name">Myriam Pennequin .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                        Diplômée du Master APIESS à Lille 1, je cultive chez POP School ma passion pour le développement de projets sociaux, éducatifs et coopératifs !
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/philippe_pary.jpeg" alt="philippe pary">
                    <a href="https://www.linkedin.com/in/philippe-pary-25094231">
                        <h3 class="staff_name">Philippe Pary .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">
                        Grand militant du logiciel libre, j’y ai un CV long comme le bras, j’ai co-fondé en 2011 la société Scil qui est éditrice d’un logiciel de caisse enregistreuse en mode web et Android qui s’appelle Pastèque.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-4 text-center">
                    <img class="rounded-circle" src="img/team/daishi_kaszer.jpeg" alt="daishi kaszer">
                    <a href="https://www.linkedin.com/in/daishi-daishi-292b873/">
                        <h3 class="staff_name">Daishi Kaszer .<strong>in</strong></h3>
                    </a>
                    <p class="text-left color_blue">

                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <!-- Latest compiled and minified JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified FontAwesome -->
    <script src="https://use.fontawesome.com/7458b576e7.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type='text/javascript' src='js/jquery.particleground.js'></script>
    <script type='text/javascript' src='js/demo.js'></script>
    <script src="js/script.js"></script>

</body>

</html>
