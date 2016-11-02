<?php
/* Template Name: Blog Post Template */
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
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/blog_single.css" type="text/css">
        <script type="text/javascript">
        $(function(){
        $("#searchsubmit").click(function(event){
        event.preventDefault();
        $("body").css("cursor", "progress");
        search = $("#s").val();
        url = "http://agilelaw.staging.wpengine.com/search/?";
        window.location.href = url + search;
        });
        });
        </script>
    </head>
    <?php
    /** Themify Default Variables
    *  @var object */
    global $themify; ?>
    <?php if( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php
        $link = get_permalink();
        $date = get_the_date();
        $author = get_the_author();
        $title = trim(get_the_title());
        $comments = get_comments_number();
        $img = get_the_post_thumbnail_url();
        if ($img == "") {
            $img = "https://www.christophestogo.com/wp-content/uploads/2016/07/christophes_2016.jpg";
        }
        $content = get_the_content();
        $categories = get_the_category();
        $category = $categories[0]->name;
    $categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
    ) );
    ?>
    <body>
        <div class="menu-container" style="border-bottom: 1px solid rgb(229, 229, 229);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3">
                    <a href="http://agilelaw.com"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo"></a>
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
                    <a href="http://agilelaw.com"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="mobile-logo"></a>
            <i class="fa fa-2x fa-bars"></i>
            <div class="mobile-slide-menu">
                <a href="<?php echo get_site_url(); ?>/#agilelaw" class="mobile-menu-item">FEATURES</a>
                <a href="<?php echo get_site_url(); ?>/#pricing" class="mobile-menu-item mobile-menu-item-alt">PRICING</a>
                <a href="<?php echo get_site_url(); ?>/#blog" class="mobile-menu-item">BLOG</a>
                <a href="<?php echo get_site_url(); ?>/#contact" class="mobile-menu-item mobile-menu-item-alt">CONTACT</a>
            </div>
        </div>
        <div class="container blog-post-page">
            <div class="row">
                <div class="col-xs-9">
                    <div class="blog-bar">
                        <p class="blog-post-title">
                            <?php echo $title; ?>
                        </p>
                        <div class="blog-meta-bar">
                            <p class="blog-meta"><i class="fa fa-user" aria-hidden="true"></i> by <span><?php echo $author; ?></span></p>
                            <p class="blog-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php echo $date; ?></span></p>
                            <p class="blog-meta"><i class="fa fa-comments" aria-hidden="true"></i> <span><?php echo $comments; ?> comments</span></p>
                            <p class="blog-meta"><i class="fa fa-tag" aria-hidden="true"></i> <span><?php echo $category; ?></p>
                        </div>
                    </div>
                    <!-- <div class="blog-post-img" style="background-image: url(<?php echo $img; ?>);"></div> -->
                    <div class="blog-content">
                        <?php echo $content; ?>
                    </div>
                    <div class="blog-comments">
                        <!-- <p class="blog-comments-title"><i class="fa fa-comments" aria-hidden="true"></i> Comments</p> -->
                        <p class="blog-comments-title">Comments</p>
                        <?php
                        if ($comments == 0) {
                        echo('<div class="blog-comment"><p class="blog-comment-content">There are no comments.</p></div>');
                        }
                        else {
                        $comments = get_comments( array( 'number' => 2, 'post_id' => get_the_ID() ) );
                        foreach($comments as $comment) :
                        echo('<div class="blog-comment"><p class="blog-comment-author"><i class="fa fa-comment" aria-hidden="true"></i> ' . $comment->comment_author . '</p><p class="blog-comment-date">Posted on '. $comment->comment_date  .'</p><p class="blog-comment-content">' . $comment->comment_content . '</p></div>');
                        endforeach;
                        }
                        ?>
                    </div>
                    <div class="blog-comment-form">
                        <?php comment_form(); ?>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="blog-search">
                        <p class="blog-side-title"><span class="fa-stack"><i class="fa fa-search fa-stack-lg fa-inverse"></i></span> Search</p>
                        <div class="blog-side-line"></div>
                        <?php get_search_form(); ?>
                    </div>
                    <div class="blog-categories">
                        <div>
                            <span class="fa-stack" style="float: left;"><i style="padding-top: 8px !important;" class="fa fa-folder fa-st  ack-lg fa-inverse"></i></span><p style="float: left;" class="blog-side-title">Categories</p>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="blog-side-line"></div>
                        <?php
                        $count = 0;
                        foreach ( $categories as $category ) {
                        if ($category->term_id != "34" && $category->term_id != 32 && $category->term_id != 83 && $category->term_id != 1){
                        if ($count == 0) {
                        echo "<a href=\"http://agilelaw.staging.wpengine.com/category/?". $category->term_id . "\">";
                            echo "<div class=\"row\"><div class=\"col-xs-10\">";
                                } else {
                                echo "<a href=\"http://agilelaw.staging.wpengine.com/category/?". $category->term_id . "\">";
                                    echo "<div class=\"blog-sep\"></div><div class=\"row\"><div class=\"col-xs-10\">";
                                    }
                                    echo "<p class=\"blog-category\">". $category->name;
                                        echo "</p></div><div class=\"col-xs-2 text-right\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></div></div></a>";
                                        $count++;
                                        }
                                        
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-8">
                                <div class="footer-container">
                                            <p class="footer-title">Overview</p>
                                            <a href="<?php echo get_site_url(); ?>/#solution" class="footer-agile-link" data-name="agile-solution-section">Solution</a>
                                            <a href="<?php echo get_site_url(); ?>/#features" class="footer-agile-link" data-name="agile-features-section">Features</a>
                                            <a href="<?php echo get_site_url(); ?>/#security" class="footer-agile-link" data-name="agile-security-section">Security</a>
                                            <a href="<?php echo get_site_url(); ?>/#success" class="footer-agile-link" data-name="agile-success-section">Success Stories</a>
                                            <a href="<?php echo get_site_url(); ?>/#faq" class="footer-agile-link" data-name="agile-faq-section">FAQ</a>
                                        </div>
                                        <div class="footer-container">
                                            <p class="footer-title">Other</p>
                                            <a href="<?php echo get_site_url(); ?>/#pricing" class="footer-link footer-pricing">Pricing</a>
                                            <a class="footer-link" href="<?php echo get_site_url(); ?>/blog">Blog</a>
                                            <a href="<?php echo get_site_url(); ?>/#contact" class="footer-link footer-contact">Contact</a>
                                        </div>
                                    <div class="footer-container footer-social">
                                        <p class="footer-title">Social</p>
                                        <a href="https://twitter.com/#!/agilelaw"><i class="fa fa-lg fa-twitter"></i></a>
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