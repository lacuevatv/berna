<?php
    require_once 'assets/lib/mobile-detect/Mobile_Detect.php';

    //DEFINICIONES HEAD Y SCRIPTS
    define ( 'VERSION', '1,0' );
    //META TAGS
    define('SITETITLE', 'Berna Brothers Brewery CO | Ciudad de Buenos Aires ');
    define('METADESCRIPTION', 'Vení a visitarnos y disfrutá de lo verdaderamente bueno. D. Zapiola 1502, Ciudad de Buenos Aires');
    define('METAKEYS', 'Berna Brothers Brewery CO, Ciudad de Buenos Aires, Argentina, Cerveza Artesanal, sabores, comida exotica, diferentes tipos de cerveza.');
    define('BASEURL', 'http://' . $_SERVER['HTTP_HOST']);
    //MI SCRIPT, MI CSS
    define('MICSS', 'assets/css/style.css?'  . VERSION );
    define('MISCRIP', 'assets/js/script.js?' . VERSION );
    define('FACEBOOKURL', 'https://www.facebook.com/bernabrothers');
    define('INSTAGRAMURL', 'https://www.instagram.com/bernabrothers/');
    define('RESERVASURL', '#');

    $instagramScriptColumn = '<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/875ea0a0bec65c4586666181e8067f37.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>';
    $instagramScript1Row = '<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/637df59a4e8552d8a013a861cb21a314.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>';
    $instagramScript2Rows = '<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8eb57261e3325839a7d89fa3ae5c5ae2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>';
    
    //detecta el dispositivo
    function dispositivo () {
        $dispositivo = 'pc';
        $detect = new Mobile_Detect;

        if ( $detect->isMobile() ) {
            $dispositivo = 'movil';
        }

        // Any tablet device.
        if( $detect->isTablet() ){
            $dispositivo = 'tablet';
        }

        return $dispositivo;

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo SITETITLE; ?></title>

<!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

<!-- SEO SECCTION -->
    <meta name="keywords" content="<?php echo METAKEYS; ?>">
    <meta name="description" content="<?php echo METADESCRIPTION; ?>">
    <link rel="canonical" href="<?php echo BASEURL; ?>" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo SITETITLE; ?>" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="<?php echo BASEURL; ?>" />
    <meta property="og:site_name" content="<?php echo SITETITLE; ?>" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo METADESCRIPTION; ?>" />
    <meta name="twitter:title" content="<?php echo SITETITLE; ?>" />
    <meta name="twitter:image" content="" />
<!-- // SEO SECCTION -->

<!-- Custom CSS -->
    <link href="<?php echo MICSS; ?>" rel="stylesheet">

<!------- modernizr -->
    <script src="assets/js/modernizr-custom.js"></script>
</head>
<body>
<div class="wrapper-site">

<!--- header --->
<?php if ( dispositivo() != 'pc' ) : ?>
                        
    <header class="header-site" style="background-image: url(images/fondo-header-movil.jpg);">                                           
                        
<?php else : ?>
                        
    <header class="header-site" style="background-image: url(images/fondo-header.jpg);">                   
                        
<?php endif; ?>
    
        <div class="inner-wrapper-header">
            <nav class="main-nav" role="navigation">

                <div class="nav-logo"></div>

                <button class="toggle">
                    <div class="graph-menu">
                        <span class="graph-menu-1"></span>
                        <span class="graph-menu-2"></span>
                        <span class="graph-menu-3"></span>
                    </div>
                    <div class="text-menu">menu</div>
                </button>

            </nav>

            <div class="header-title">
                <div class="header-logo"><img src="images/logo-1.png" alt="Berna Brothers Brewery CO"></div>

                <h1>
                    <strong><span class="sr-only">Berna</span></strong>
                    <img src="images/logo-blanco.png" alt="Berna Brothers Brewery Co"><br>
                    Brothers<br>
                    Brewery<br>
                    CO</h1>

                <div class="logo-2"></div>

            </div>
            
            <div class="deco-mouse">
                <span></span>
            </div>
            
            <nav class="extra-nav" role="navigation">
                
                <div class="berna-data-header">
                    <p>
                        T. 4804.8752<br>
                        D. Zapiola 1502 | C1426UF | CABA
                    </p>
                </div>

            
                <ul role="menu">
                    <li role="menuitem">
                        <a href="<?php echo FACEBOOKURL; ?>" title="Facebook">
                            Facebook
                        </a>
                    </li>
                    <li role="menuitem">
                        <a href="<?php echo INSTAGRAMURL; ?>" title="Instagram">
                            Instagram
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="header-line-deco">
                <span></span>
            </div>
            
        </div>
        
    </header>

    
<!--- main site --->
    <main id="main" role="main">
        <div class="main-wrapper">
            
            
            
            <div class="inner-wrapper">

<!--- section paragraph --->
                <section class="info-section">
                    <div class="main-info-wrapper">
                        <div class="main-info">
                            <h2>
                                <span class="sr-only">Berna</span>
                                <img src="images/logo-gris.png" alt="Berna Brothers Brewery Co">
                            </h2>

                            <p>
                                Berna surge de la pasión que tenemos por la buena cerveza artesanal, el gusto por los sabores de la comida exótica y el valor de la amistad que nos une como hermanos a un simple grupo de amigos.
                            </p>
                            <p>
                                Los Berna Brothers tuvimos la posibilidad de viajar más de la cuenta, recorrer lugares increíbles de casi todo el mundo y en cada uno descubrir experiencias extraordinarias para el paladar, aprendiendo a mezclar diferentes tipos de cervezas con exquisiteces para picar.
                            </p>
                            <p>
                                Vení a visitarnos y disfrutá de lo verdaderamente bueno.
                            </p>
                            <p>
                                Berna Brothers.
                            </p>

                            <a class="btn-link" href="<?php echo RESERVASURL; ?>" title="reservas">
                                Reservas
                            </a>

                        </div>

                        <div class="bottle-deco">
                            <span></span>
                        </div>
                    
                    </div>
                    
                </section>
     
<!--- section instagram --->
                <section class="instagram-section">
                    
                    <?php if ( dispositivo() == 'pc' ) : ?>
                        
                        <div class="background">
                            <span class="temp-fondo"></span>
                        </div>
                        
                    <?php endif; ?>   
                    
                    <div class="mid-line-deco">
                        <span></span>
                    </div>
                    
                    <div class="instagram-wrapper">
                        
                        <h2>
                            <span class="sr-only">Instagram</span>
                            @bernabrothers
                        </h2>
                        
                    <?php if ( dispositivo() != 'pc' ) : ?>
                        
                        <div class="instagram-feed-movil">
                            
                            <?php echo $instagramScript1Row; ?>

                        </div>
                        
                    <?php else : ?>
                        
                        <div class="instagram-feed">
                            
                            <?php echo $instagramScript2Rows; ?>
                            
                        </div>
                        
                    <?php endif; ?>                    
                    
                    </div>
                    
                    <div class="mid-line-deco-2">
                        <span></span>
                    </div>
                    
                    <div class="logo-3">
                        <span></span>
                    </div>
                    
                    
                </section>
                
                
            </div>
        </div> <!--- //.main-wrapper -->
    </main>

<!--- footer --->
    <footer class="footer-site">
        <div class="inner-wrapper-footer">
            <div class="berna-data-footer">
                <p>
                    E. info@bernabrewery.com.ar
                </p>
                <p>
                    T. 4804.8752
                </p>
                <p>
                    D. Zapiola 1502 | C1426UF | CABA
                </p>
            </div>

            <div class="logo-4"></div>

            <div class="footer-line-deco">
                <span></span>
            </div>
        </div>
    </footer>

</div><!--- //.wrapper-site -->
    
<!------- jquery 3.1.1 ------>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--- scripts -->
    <script src="<?php echo MISCRIP; ?>"></script>
</body>
</html>