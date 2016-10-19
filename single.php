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
        <style>
            body {
                font-family: 'Open Sans', sans-serif;!important;
                background: #efefef;
            }

            html {
                margin: 0 !important;
            }

            .fa-angle-double-right {
    color: black !important;
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

          .blog-search .fa-search {
              padding-top: 6px !important;
            }

            .blog-profile-img {
                width: 100px;
                -webkit-filter: grayscale(100%);
                height: 100px;
                border-radius: 75px;
                background-image: url("http://i.imgur.com/GqLf3jD.jpg");
                background-size: cover;
                background-position: center top;
                background-position-x: -2px;
                margin: 0 auto;
                margin-bottom: 15px;
            }

            .blog-profile-name {
                color: white;
                text-transform: uppercase;
                padding: 0;
                margin: 0 0 5px 0;
                font-size: 14px;
                font-weight: bold;
                text-align: center;
            }

            .blog-profile-desc {
                color: #fbfbfb;
                padding: 0;
                margin: 0;
                line-height: 1.5em;
                text-align: center;
                font-size: 12px;
            }

            .blog-post-img {
                height: 350px;
                background-size: cover;
                margin: 0;
                padding: 0;
                background-position: center;
                background-position-y: -150px;
            }

            .blog-content {
                background: white;
                padding: 25px;
                margin-bottom: 35px;
            }

            .blog-search {
                padding: 25px;
                margin-bottom: 25px;
                background: white;
            }

            .blog-categories {
                padding: 25px;
                background: white;
            }


            .blog-search .fa-stack,
            .blog-categories .fa-stack {
                background: #333;
                text-align: center;
                margin-right: 5px;
            }

            .blog-category {
                color: black;
                padding: 10px 0;
                margin: 0;
                font-size: 12px;
                cursor: pointer;
                display: inline-block;
            }

            .blog-side-title {
                font-weight: bold;
                padding: 0;
                margin: 0 0 5px 0;
                cursor: pointer;
            }

            .blog-categories i {
                padding: 12px 0 0 0;
            }
/*
            #searchsubmit, .blog-search-btn {
                width: 100%;
                color: white;
                background: #2bbb66;
                padding: 0;
                margin: 10px 0 0 0;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-align: center;
                padding: 7px;
                cursor: pointer;
            }

            #searchsubmit:hover, .blog-search-btn:hover {
                background: #26a65b;
            }*/

            .blog-search input {
                width: 100% !important;
                max-width: 100% !important;
                box-shadow: none;
                background: #fbfbfb;
                border-radius: 0;
                border: 1px solid #ddd;
                padding: 5px 10px !important;
            }

            .blog-search .search-option {
                display: none !important;
            }

            .blog-side-line {
                border-left: 28px solid #333;
                height: 2px;
                margin: 5px 0 10px 0;
                background: #eee;
            }

            .blog-sep {
                height: 1px;
                width: 100%;
                margin: 3px 0;
                background: #eee;
            }

            .blog-content h3,
            .blog-content h2,
            .blog-content h4 {
                line-height: 1.3em !important;
                margin-top: 0 !important;
            }

            .blog-content h4 {
                margin-bottom: 3px !important;
            }

            .blog-content a {
                color: #2bbb66 !important;
            }

            .blog-btn {
                background: #F2734D !important;
                color: white !important;
                border-radius: 3px;
                padding: 10px 20px;
                margin: 20px 0;
                display: inline-block;
            }

            .blog-btn:hover {
                text-decoration: none !important;
                background: #F1653B !important;
                color: white !important;
            }

            .blog-content h3,
            .blog-content a,
            .blog-content p {
                //font-family: "Source Sans Pro", sans-serif !important;
            }

            .blog-bar {
                background: white;
                padding: 25px;
                margin:  0px 0 15px 0;
            }

            .blog-meta span {
                color: rgb(0, 115, 195);
            }

            .blog-content p {
              //font-weight: 300 !important;
              line-height: 1.6em;
            }

            .blog-post-page {
              padding-top: 125px;
            }

            .blog-post-title {
                font-size: 26px;
                font-weight: bold;
                padding: 0;
                margin: 0 0 10px 0;
                color: black;
            }

            .blog-meta {
                display: inline-block;
                text-transform: uppercase;
                font-size: 10px;
                letter-spacing: 1px;
                color: #333;
                background: #eee;
                padding: 10px;
                margin: 0 10px 0 0;
                border-radius: 3px;
            }

            .block-meta i {
                color: #666;
            }

            .blog-btn {
                color: white !important;
            }

            .single-post .entry-content a {
                color: #037641 !important;
            }

            .single-post .post-title a {
                color: black !important;
            }

            .single-post .post-title a {
                color: black !important;
            }

            .single-post .post-image {
                display: none !important;
            }
              @media (max-width: 991px) {
                .blog-post-page .col-xs-9, .blog-post-page .col-xs-3 {
                  width: 100% !important;
                }

                .blog-categories {
                  margin-bottom: 50px;
                }

                .blog-post-page {
                  padding-top: 75px;
                }
                .blog-meta {
                  margin-bottom: 10px;
                }

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

            .blog-comment-author {
                color: #333;
                padding: 0;
                margin: 0;
                font-size: 16px;
                font-weight: bold;
                display: block;
                text-transform: capitalize;
                ;
            }

            .blog-comment-content {
                display: block;
                color: #666;
                padding: 0;
                margin: 0;
                font-size: 14px;
            }

            .blog-comment-date {
                display: block;
                color: #F2734D;
                padding: 0;
                margin: 0 0 3px 0;
                font-size: 14px;
            }

            .blog-comments-title,
            .blog-comment-form #reply-title {
                display: block;
                color: #333;
                padding: 0;
                margin: 0 0 15px 0;
                font-weight: bold;
                font-size: 26px;
            }

            .blog-comment-form #author,
            .blog-comment-form #email,
            .blog-comment-form #url {
                border: 0;
                background: #ddd;
                box-shadow: none;
                border-radius: 3px;
            }

            .blog-comment-form textarea {
                display: block;
                width: 100%;
                border: 0;
                background: #ddd;
                box-shadow: none;
                border-radius: 3px;
            }

            .blog-content,
            .blog-comments,
            .blog-comment-form {
                background: white;
                padding: 25px;
                margin-bottom: 35px;
            }

            .blog-comment {
                padding: 20px 0;
            }

            .blog-comments a,
            .logged-in-as a {
                color: rgb(0, 115, 195) !important;
            }

            #searchsubmit, #respond .submit {
                cursor: pointer;
                border: 0 !important;
                width: auto !important;
                margin: 0 !important;
                padding: 10px !important;
                display: inline-block !important;
                width: 100px;
                border-radius: 3px;
                margin: 0 0 0 5px;
                background: #2bbb66; !important;
                color: white;
                text-align: center;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
            }


            #searchsubmit {
              margin-top: 10px !important;
              width: 100% !important;
            }


            #searchform label {
              display: none;
            }

            #searchsubmit:hover, #respond .submit:hover {
                background: #26a65b !important;
            }



        </style>
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
                                        <a class="footer-agile-link" data-name="agile-solution-section">Solution</a>
                                        <a class="footer-agile-link" data-name="agile-features-section">Features</a>
                                        <a class="footer-agile-link" data-name="agile-security-section">Security</a>
                                        <a class="footer-agile-link" data-name="agile-success-section">Success Stories</a>
                                        <a class="footer-agile-link" data-name="agile-faq-section">FAQ</a>
                                    </div>
                                    <div class="footer-container">
                                        <p class="footer-title">Other</p>
                                        <a class="footer-link footer-pricing">Pricing</a>
                                        <a class="footer-link" href="http://www.agilelaw.com/blog">Blog</a>
                                        <a class="footer-link footer-contact">Contact</a>
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
