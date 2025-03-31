<style>
.fw-bold {
    font-weight: bolder;
}
</style>
<?php
function nav($activeNav) {
    $arr = [
        'home' => '<li class="nav-item"><a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a></li>',
        'about' => '<li class="nav-item"><a class="nav-link" href="about.php"> About</a></li>',
        'services' => '<li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>',
        'contact-us' => '<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>'
    ];

    echo ' 
    <!-- header section starts -->
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid">
                <div class="contact_nav">
                    <a href="tel:+918818848558">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Call : +91 8818848558</span>
                    </a>
                    <a href="mailto:websecurtiysachiva@gmail.com">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Email : websecurtiysachiva@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="./">
                        <img src="images/logo_blue.png" alt="Logo" class="main-logo">
                        <span>sachiva</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">';
    
                    foreach ($arr as $key => $value) {
                        if ($key == $activeNav) {
                            $pattern = '/(class="[^"]*nav-item)([^"]*")/';
                            $replacement = '$1 active fw-bold$2';
                            $value = preg_replace($pattern, $replacement, $value);
                        }
                        echo $value;
                    }

    echo '          </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->';
}
?>