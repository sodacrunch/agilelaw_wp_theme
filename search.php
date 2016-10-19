<?php
    /* Template Name: Search Template */

    ?>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,100italic,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Lato', sans-serif !important;
                background: #fafafa;
            }

            html {
                margin: 0 !important;
            }

            .menu-container {
                background: #FCFEFC;
                position: fixed;
                z-index: 2;
                width: 100%;
                top: 0;
                border-bottom-color: rgb(229, 229, 229);
            }

            .login-container {
                background: #FCFEFC;
                width: 290px;
                position: absolute;
                right: 75px;
                display: none;
                top: 75px;
                padding: 25px;
                text-align: center !important;
                z-index: 2;
            }

            .login-title {
                color: rgb(0, 85, 144);
                font-size: 18px;
                font-weight: 900;
            }

            .login-btns {
                width: 100%;
                text-align: center;
            }

            .menu-btns {
                display: inline-block;
                margin: 20px 75px 0px 0px;
            }

            #wpadminbar {
                display: none !important;
            }

            .login-btn {
                padding: 8px 15px;
                font-size: 16px;
                color: white;
                letter-spacing: 1px;
                border-radius: 3px;
                background: #000;
                display: inline-block;
                margin-left: 10px;
                cursor: pointer;
            }

            .login-join {
                background: #666 !important;
            }

            .login-btns a {
                display: inline-block;
                width: 100px;
            }

            .login-btns a {
                display: inline-block;
                width: 100px;
            }

            .login-block-btn {
                background: rgba(38, 166, 91, 1);
                color: white !important;
                text-decoration: none !important;
                padding: 10px;
                border-radius: 3px;
                margin-top: 10px;
                display: block;
                letter-spacing: 1px;
            }

            .logo {
                margin: 20px 50px;
                height: 35px;
            }

            .menu-items-container {
                display: inline-block;
                margin-right: 20px;
            }

            .menu-link {
                text-decoration: none !important;
                text-transform: uppercase;
                font-size: 14px;
                color: rgba(0, 95, 160, 1) !important;
                display: inline-block;
                padding: 5px;
                margin: 0 10px;
            }

            .blog-post {
                margin: 0 0 30px 0;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                transition: all 0.2s ease-in-out;
                background: white;
            }

            .blog-post:hover {
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            }

            .blog-img {
                width: 100%;
                height: 250px;
                background-size: cover !important;
                background-position: center;
            }

            .blog-title {
                font-size: 26px;
                font-weight: bold !important;
                margin: 5px 0 0 0;
                color: white;
                position: absolute;
                letter-spacing: 1px;
                bottom: 60px;
                left: 10px;
                padding: 0 25px;
                line-height: 1.2em;
            }

            .blog-date {
                font-size: 14px;
                font-weight: 300 !important;
                margin: 5px 0 0 0;
                color: #ddd;
                position: absolute;
                letter-spacing: 1px;
                bottom: 35px;
                padding: 0 25px;
                left: 10px;
            }

            .blog-tag {
                font-size: 10px;
                font-weight: 300 !important;
                margin: 5px 0 0 0;
                color: #0073c3 !important;
                background: white !important;
                border-radius: 3px;
                position: absolute;
                letter-spacing: 1px;
                text-transform: uppercase;
                top: 30px;
                padding: 5px 10px;
                right: 35px;
            }

            .blog-date i {
                margin-right: 5px;
            }

            .blog-excerpt {
                font-size: 14px;
                margin: 0;
                font-weight: 300;
                color: #666;
                padding: 0;
                font-weight: 1.5em;
            }

            .blog-dark {
                //background: rgba(0,0,0,0.6);
                background: rgba(0, 115, 195, 0.8);
                width: 100%;
                height: 100%;
                position: relative;
                transition: all 0.2s ease-in-out;
            }

            .blog-dark:hover {
                background: rgba(0, 115, 195, 0.7);
                //background: rgba(0,0,0,0.3);
            }

            #site-logo img {
                height: 40px !important;
                width: 193px;
            }

            #header {
                margin-bottom: 50px;
            }

            .blog-tag-div {
                margin: 0 5px;
            }

            .blog-section {
                color: black;
                font-size: 36px;
                font-weight: bold;
                margin: 0 0 25px 0;
                padding: 0;
                text-transform: uppercase;
            }

            .post-nav {
                text-align: right;
                padding: 0 15px 0 0 !important;
            }

            .blog-page {
                padding-top: 125px;
                padding-bottom: 75px;
            }

            .footer {
                background: #333;
                color: white;
                font-size: 14px;
                padding: 75px 0 50px 0;
            }

            .footer-title {
                color: white;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 1px;
                padding: 0;
                margin: 0 0 3px 0;
                display: block;
                font-weight: bold;
            }

            .footer-link,
            .footer-agile-link,
            .footer-agile-link:hover,
            .footer-disco-link,
            .footer-disco-link:hover {
                color: #ccc !important;
                text-decoration: none !important;
                font-size: 14px;
                padding: 0;
                display: block;
                margin: 0;
                cursor: pointer;
            }

            .footer-container {
                width: 130px;
                display: inline-block;
                vertical-align: top;
            }

            .footer-container .fa {
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .footer-container i {
                cursor: pointer;
            }

            .footer i {
                color: #ccc;
            }

            .footer i:hover {
                color: white;
            }

            .footer-contact-title {
                color: white;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 1px;
                padding: 0;
                margin: 0;
                display: block;
                font-weight: bold;
            }

            .footer-contact-entry {
                color: white;
                font-size: 14px;
                padding: 0;
                margin: 0 0 15px 0;
                display: block;
            }

            .footer {
                padding: 50px 0;
            }

            .form-header {
                font-size: 30px;
            }

            .form-subheader {
                padding: 0;
            }

            .form-interest {
                margin-left: 20px;
            }

            .footer .col-xs-8,
            .footer .col-xs-4 {
                width: 50% !important;
            }

            .footer-social {
                margin: 0;
            }

            .footer-container {
                margin-bottom: 15px;
            }

            .prev-post,
            .next-post {
                display: inline-block;
            }

            .post-nav-links a {
                cursor: pointer;
                padding: 10px;
                display: inline-block !important;
                width: 100px;
                border-radius: 3px;
                margin: 0 0 0 5px;
                background: #2bbb66 !important;
                color: white;
                text-align: center;
                font-size: 12px;
                text-transform: uppercase;
                font-weight: bold;
                letter-spacing: 1px;
            }

            .post-nav-links a:hover,
            .post-nav-links a:active {
                background: #26a65b !important;
                text-decoration: none !important;
            }

            .mobile-menu-container {
                display: none;
            }

            @media (max-width: 920px) {
                .blog-page {
                    padding-top: 75px;
                }
                .mobile-menu-container i {
                    position: absolute;
                    right: 20px;
                    top: 10px;
                }
                .mobile-slide-menu {
                    background: rgba(38, 166, 91, 1);
                    display: none;
                }
                .menu-container {
                    display: none;
                }
                .mobile-menu-container {
                    display: block;
                    background: #FCFEFC;
                    position: fixed;
                    z-index: 2;
                    width: 100%;
                    top: 0;
                    border-bottom: 1px solid #e5e5e5;
                }
                .mobile-logo {
                    text-align: center;
                    height: 25px;
                    margin: 10px;
                }
            }

            @media (max-width: 768px) {
                .blog-page .col-xs-6 {
                    width: 100% !important;
                }
                .blog-img {
                    height: 200px;
                }
                .blog-title {
                    font-size: 18px;
                    //font-weight: bold !important;
                }
                .blog-tag {
                    right: 25px;
                }
                .blog-date,
                .blog-title {
                    left: 0px;
                }
                .blog-title {
                    bottom: 50px;
                }
                .blog-date {
                    bottom: 25px;
                }
            }
        </style>

        <script>
            $(function() {
                $(".prev-post a").html("<i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i> Newer");
                $(".next-post a").html("Older <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>");
            });
        </script>
    </head>

    <body>

        <div class="menu-container" style="border-bottom: 1px solid rgb(229, 229, 229);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="http://www.agilelaw.com/img/logo.png" class="logo">
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="menu-items-container">
                            <a href="#agilelaw" class="menu-link menu-agilelaw jump-link">Product</a>
                            <a href="#pricing" class="menu-link menu-pricing jump-link">Pricing</a>
                            <a href="#blog" class="menu-link menu-blog jump-link">Blog</a>
                            <a href="#contact" class="menu-link menu-contact jump-link">Contact</a>
                        </div>
                        <div class="menu-btns">
                            <p class="login-btn"><i class="fa fa-lock"></i> Login
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="login-1">
                                <p class="login-title">AgileLaw E-Exhibits</p>
                                <i class="fa fa-3x fa-users"></i>
                                <div class="login-btns">
                                    <a href="https://login.agilelaw.com/site/login" target="_blank" class="login-block-btn">Login</a>
                                    <a href="https://login.agilelaw.com/site/login#join" target="_blank" class="login-block-btn login-join">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu-container">
            <img src="http://www.agilelaw.com/img/logo.png" class="mobile-logo">
            <i class="fa fa-2x fa-bars"></i>
            <div class="mobile-slide-menu">
                <a href="#agilelaw" class="mobile-menu-item">FEATURES</a>
                <a href="#pricing" class="mobile-menu-item mobile-menu-item-alt">PRICING</a>
                <a href="#blog" class="mobile-menu-item">BLOG</a>
                <a href="#contact" class="mobile-menu-item mobile-menu-item-alt">CONTACT</a>
            </div>
        </div>


        <div class="container blog-page">

          <p class="blog-section">Search <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>


          <?php
$url    = $_SERVER["REQUEST_URI"];
$search = substr($url, strpos($url, "?") + 1);    
echo $search;
?>


 </span></p>



            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <?php



                        //$query = 'posts_per_page=10';
                        $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 1000,
                                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                                );
                        $queryObject = new WP_Query($args);
                            // The Loop...
                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) {
                                the_posts_pagination();
                                    $queryObject->the_post();
                                $link = get_permalink();
                                $date = get_the_date();
                                $author = get_the_author();
                                $title = trim(get_the_title());
                                $excerpt = trim(get_the_excerpt());
                                $comments = get_comments_number();
                                $categories = get_the_category();
                                $category = $categories[0]->name;
                                $img = get_the_post_thumbnail_url();
                                // if ($img == "") {
                                //   $img = "";
                                // }

                                if (strpos($title, $search) !== false){

                                                                    echo "<div class=\"col-xs-6\">";
                                echo "<a href=\"". $link ."\">";
                                echo "<div class=\"blog-post\">";
                                echo "<div class=\"blog-img\" style=\"background-image: url( ";
                                echo $img;
                                echo ")\">";
                                echo "<div class=\"blog-dark\"><p class=\"blog-title\">";
                                echo $title;
                                echo "</p>";
                                echo "<p class=\"blog-date\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
                                echo $date;
                                echo "<span class=\"blog-tag-div\">|</span><span class=\"\"><i class=\"fa fa-comments\" aria-hidden=\"true\"></i>";
                                echo $comments;
                                echo "</span></p>";
                                echo "<p class=\"blog-tag\">";
                                echo $category;
                                echo "</p></div></a></div></div></div>";
                                }


                                }
                            }

                            ?>


                            <div class="post-nav">

                                <?php wp_reset_postdata(); ?>
                    <div class="post-nav-links" style="display:none;">
                                    <div class="prev-post">
                                        <?php previous_posts_link('Newer', $queryObject->max_num_pages ); ?>
                                    </div>
                                    <div class="next-post">
                                        <?php next_posts_link('Older', $queryObject->max_num_pages ); ?>

                                    </div>
                                </div>

                            </div>



                    </div>

                </div>

            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="footer-container">
                            <p class="footer-title">Overview</p>
                            <a href="http://www.agilelaw.com/#features" class="footer-agile-link" data-name="agile-solution-section">Solution</a>
                            <a href="http://www.agilelaw.com/#features" class="footer-agile-link" data-name="agile-features-section">Features</a>
                            <a href="http://www.agilelaw.com/#features" class="footer-agile-link" data-name="agile-security-section">Security</a>
                            <a href="http://www.agilelaw.com/#features" class="footer-agile-link" data-name="agile-success-section">Success Stories</a>
                            <a href="http://www.agilelaw.com/#features" class="footer-agile-link" data-name="agile-faq-section">FAQ</a>
                        </div>
                        <div class="footer-container">
                            <p class="footer-title">Other</p>
                            <a class="footer-link footer-pricing">Pricing</a>
                            <a class="footer-link" href="http://www.agilelaw.com/blog">Blog</a>
                            <a class="footer-link footer-contact">Contact</a>
                        </div>
                        <div class="footer-container footer-social">
                            <p class="footer-title">Social</p>
                            <a href="http://www.agilelaw.com/#pricing" href="https://twitter.com/#!/agilelaw"><i class="fa fa-lg fa-twitter"></i></a>
                            <a href="http://www.facebook.com/agilelaw"><i class="fa fa-lg fa-facebook-official"></i></a>
                            <a href="http://www.linkedin.com/company/agilelaw"><i class="fa fa-lg fa-linkedin"></i></a>
                            <a href="http://www.agilelaw.com/feed/rss/"><i class="fa fa-lg fa-rss"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <p class="footer-contact-title">Write Us</p>
                        <p class="footer-contact-entry">10900 Research Blvd #160C-4<br>Austin, TX 78759</p>
                        <p class="footer-contact-title">Email Us</p>
                        <p class="footer-contact-entry">info@agilelaw.com </p>
                        <p class="footer-contact-title">Call Us</p>
                        <p class="footer-contact-entry">512.348.6525 </p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
