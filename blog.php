<?php
/* Template Name: Blog layout */
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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/blog_style.css" type="text/css">
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
                            <a href="<?php echo get_site_url(); ?>/#agilelaw" class="menu-link menu-agilelaw jump-link">Product</a>
                            <a href="<?php echo get_site_url(); ?>/#pricing" class="menu-link menu-pricing jump-link">Pricing</a>
                            <a href="<?php echo get_site_url(); ?>/#blog" class="menu-link menu-blog jump-link">Blog</a>
                            <a href="<?php echo get_site_url(); ?>/#contact" class="menu-link menu-contact jump-link">Contact</a>
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
                <a href="<?php echo get_site_url(); ?>/#agilelaw" class="mobile-menu-item">FEATURES</a>
                <a href="<?php echo get_site_url(); ?>/#pricing" class="mobile-menu-item mobile-menu-item-alt">PRICING</a>
                <a href="<?php echo get_site_url(); ?>/#blog" class="mobile-menu-item">BLOG</a>
                <a href="<?php echo get_site_url(); ?>/#contact" class="mobile-menu-item mobile-menu-item-alt">CONTACT</a>
            </div>
        </div>
        <div class="container blog-page">
            <!-- <p class="blog-section">Blog</p> -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <?php
                        $query = 'posts_per_page=10';
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
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
                                        ?>
                                        <div class="post-nav">
                                            <?php wp_reset_postdata(); ?>
                                            <div class="post-nav-links">
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
                                            <a href="<?php echo get_site_url(); ?>/#features" class="footer-agile-link" data-name="agile-solution-section">Solution</a>
                                            <a href="<?php echo get_site_url(); ?>/#features" class="footer-agile-link" data-name="agile-features-section">Features</a>
                                            <a href="<?php echo get_site_url(); ?>/#features" class="footer-agile-link" data-name="agile-security-section">Security</a>
                                            <a href="<?php echo get_site_url(); ?>/#features" class="footer-agile-link" data-name="agile-success-section">Success Stories</a>
                                            <a href="<?php echo get_site_url(); ?>/#features" class="footer-agile-link" data-name="agile-faq-section">FAQ</a>
                                        </div>
                                        <div class="footer-container">
                                            <p class="footer-title">Other</p>
                                            <a class="footer-link footer-pricing">Pricing</a>
                                            <a class="footer-link" href="<?php echo get_site_url(); ?>/blog">Blog</a>
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