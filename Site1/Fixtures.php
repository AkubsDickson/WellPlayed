
<?php
include "db_config.php";
// write query for all pizzas
$sql = 'SELECT * FROM fixtures';

// make query for all fixtures
$result = mysqli_query($conn, $sql);

//fetch the results row as an array
$fixtures = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
mysqli_free_result($result);

?>



<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="PREMIER LEAGUE MATHCHES">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Fixture</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Fixtures.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/AFALogo1.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Fixtures">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
    <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-6b06">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1600" data-image-height="900">
                <img src="images/AFALogo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3017"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="svg-3017" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Statistics.php" style="padding: 10px 38px;">Statistics</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Fixtures.php" style="padding: 10px 38px;">Fixtures</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Statistics.php">Statistics</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Fixtures.php">Fixtures</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-2">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-3">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 38px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Statistics.php" style="padding: 10px 38px;">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Fixture.php">Fixture</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Statistics.php">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-align-left u-clearfix u-section-1" id="sec-7c49">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="margin-bottom u-text u-text-default u-text-grey-80 u-text-1">PREMIER LEAGUE MATHCHES</h1> 
            <h2 class="u-subtitle u-text u-text-default u-text-2"> 
                <?php foreach($fixtures as $fixtures){ ?>
                <?php echo ($fixtures['week']); ?><span style="font-size: 1.875rem;">TH</span> Week
            </h2>
        </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-8763">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-palette-2-light-1 u-radius-20 u-shape u-shape-round u-shape-1"></div>
            <div class="u-align-left u-container-style u-group u-group-1">
                <div class="u-container-layout">
                    <h5 class="u-text u-text-1">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="Statistics.php" data-page-id="149885684">Live</a>
                    </h5>
                    <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"></div>
                </div>
            </div>
            <div class="u-align-left u-container-style u-group u-group-2">
                <div class="u-container-layout">
                    <div class="u-image u-image-circle u-image-1" alt="" data-image-width="400" data-image-height="400"></div>
                    <h6 class="u-text u-text-white u-text-2"><?php echo ($fixtures['T1name']); ?></h6>
                </div>
            </div>
            <div class="u-align-left u-container-style u-group u-group-3">
                <div class="u-container-layout">
                    <div class="u-image u-image-circle u-image-2" alt="" data-image-width="400" data-image-height="400"></div>
                    <h6 class="u-text u-text-body-alt-color u-text-default u-text-3"><?php echo ($fixtures['T2name']); ?></h6>
                </div>
            </div>
            <h6 class="u-text u-text-body-alt-color u-text-default u-text-4">VS</h6>
            <a href="Statistics.php" data-page-id="149885684" class="u-btn u-btn-round u-button-style u-hover-palette-2-dark-1 u-palette-2-light-1 u-radius-20 u-text-palette-3-light-3 u-btn-2">Match Report<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg><img></span>
        </a>
            <h3 class="u-align-center u-text u-text-5">Upcoming Games</h3>
            <div class="u-expanded-width u-palette-2-light-1 u-radius-20 u-shape u-shape-round u-shape-2"></div>
            <div class="u-align-left u-container-style u-group u-group-4">
                <div class="u-container-layout">
                    <h6 class="u-text u-text-body-alt-color u-text-6"><?php echo ($fixtures['T3name']); ?></h6>
                </div>
            </div>
            <div class="u-align-left u-container-style u-group u-group-5">
                <div class="u-container-layout u-container-layout-5">
                    <div class="u-image u-image-circle u-image-3" alt="" data-image-width="400" data-image-height="400"></div>
                    <h6 class="u-text u-text-body-alt-color u-text-7">Elite FC</h6>
                </div>
            </div>
            <h6 class="u-text u-text-body-alt-color u-text-default u-text-8">VS</h6>
            <h5 class="u-text u-text-body-alt-color u-text-default u-text-9">8:25 AM</h5>
            <div class="u-image u-image-circle u-image-4" alt="" data-image-width="1600" data-image-height="1067"></div>
            <div class="u-container-style u-expanded-width u-group u-palette-2-light-1 u-radius-20 u-shape-round u-group-6">
                <div class="u-container-layout u-container-layout-6">
                    <div class="u-align-left u-container-style u-group u-group-7">
                        <div class="u-container-layout u-container-layout-7">
                            <div class="u-image u-image-circle u-image-5" alt="" data-image-width="225" data-image-height="224"></div>
                            <h6 class="u-text u-text-body-alt-color u-text-10">Red Army FC</h6>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-group u-group-8">
                        <div class="u-container-layout u-container-layout-8">
                            <div class="u-image u-image-circle u-image-6" alt="" data-image-width="1600" data-image-height="1067"></div>
                            <h6 class="u-text u-text-body-alt-color u-text-11">Kasanoma FC</h6>
                        </div>
                    </div>
                    <h6 class="u-text u-text-default u-text-12">VS</h6>
                    <h5 class="u-text u-text-body-alt-color u-text-default u-text-13">9:20 AM</h5>
                </div>
            </div>
            <div class="u-container-style u-expanded-width u-group u-palette-2-light-1 u-radius-20 u-shape-round u-group-9">
                <div class="u-container-layout u-container-layout-9">
                    <div class="u-align-left u-container-style u-group u-group-10">
                        <div class="u-container-layout u-container-layout-10">
                            <div class="u-image u-image-circle u-image-7" alt="" data-image-width="400" data-image-height="400"></div>
                            <h6 class="u-text u-text-body-alt-color u-text-14">Elite FC</h6>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-group u-group-11">
                        <div class="u-container-layout u-container-layout-11">
                            <div class="u-image u-image-circle u-image-8" alt="" data-image-width="1600" data-image-height="1067"></div>
                            <h6 class="u-text u-text-body-alt-color u-text-15">Kasanoma FC</h6>
                        </div>
                    </div>
                    <h5 class="u-text u-text-body-alt-color u-text-default u-text-16">10:35 AM</h5>
                    <h6 class="u-text u-text-default u-text-grey-5 u-text-17">VS</h6>
                </div>
            </div>
        </div>
        <?php }?>
    </section>

    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-custom-color-1 u-footer" id="sec-8325">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-image-1" src="images/AFALogo.png" alt="" data-image-width="1600" data-image-height="900">
            <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">For More Information Contact the Ashesi Football Association&nbsp;<br>at afa@ashesi.edu.gh
            </p>
            <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-092d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-092d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
                <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ee19"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ee19"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
                <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-43ca"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-43ca"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
                <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bf1c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-bf1c"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
            </div>
        </div>
    </footer>

</body>

</html>