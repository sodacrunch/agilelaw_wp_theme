   $(function() {

          $('body').on('keypress', function(event) {
            if (event.keyCode == 49) {
                $("body").attr("style", "font-family: \'Open Sans\', sans-serif !important");
            }
            if (event.keyCode == 50) {
                $("body").attr("style", "font-family: \'Roboto\', sans-serif !important");
            }
            if (event.keyCode == 51) {
                $("body").attr("style", "font-family: \'Droid Serif\', serif !important");
            }
            if (event.keyCode == 52) {
                $("body").attr("style", "font-family: \'Oxygen\', sans-serif !important");
            }
            if (event.keyCode == 53) {
                $("body").attr("style", "font-family: \'Hind\', sans-serif !important");
            }
            if (event.keyCode == 54) {
                $("body").attr("style", "font-family: \'Lato\', sans-serif !important");
            }
          });


            $(".mobile-menu-container .fa-bars").click(function() {
                $(".mobile-slide-menu").slideToggle();
            });

            if ($('.menu-container').is(':visible')) {
                menu_margin = $(".menu-container").outerHeight();

                $("body").css('margin-top', menu_margin);
            } else {
                menu_margin = $(".mobile-menu-container").outerHeight();
                $("body").css('margin-top', menu_margin);
            }

            win_height = $(window).height();
            pillar_height = win_height / 2;

            $(window).scroll(function() {

                space = menu_margin + 100;
                pos = $(window).scrollTop();

                exhibits_sec = $('#agilelaw').position().top - space;
                pricing_sec = $('#pricing').position().top - space;
                blog_sec = $('#blog').position().top - space;
                contact_sec = $('#contact').position().top - space;

                if (pos > 1) {
                    $(".menu-container").css('border-bottom', '1px solid #e5e5e5');
                    //$(".menu-items-container").fadeIn("fast");
                } else {
                    //$(".menu-container").css('box-shadow', 'none');
                    //$(".menu-items-container").fadeOut("fast");
                }

                if (pos >= exhibits_sec && pos < pricing_sec) {
                    $(".menu-link.jump-link").removeClass("menu-active");
                    $(".menu-agilelaw").addClass("menu-active");
                } else if (pos >= pricing_sec && pos < blog_sec) {
                    $(".menu-link.jump-link").removeClass("menu-active");
                    $(".menu-pricing").addClass("menu-active");
                } else if (pos >= blog_sec && pos < contact_sec) {
                    $(".menu-link.jump-link").removeClass("menu-active");
                    $(".menu-blog").addClass("menu-active");
                } else if (pos >= contact_sec) {
                    $(".menu-link.jump-link").removeClass("menu-active");
                    $(".menu-contact").addClass("menu-active");
                } else {
                    $(".menu-link.jump-link").removeClass("menu-active");
                }

                agile_pos = $(".agilelaw-section-container").position();

            });

            $(".agilelaw-menu .menu-item").click(function() {
                $(".agilelaw-menu .menu-item").removeClass("active");
                $(this).addClass("active");
                var section = $(this).data("name");
                $(".agile-section").hide();
                $(".agile-section").removeClass("agile-section-active");
                $("." + section).addClass("agile-section-active").show();
            });

            $(".cs-disco-container .menu-item").click(function() {
                $(".cs-disco-container .menu-item").removeClass("active");
                $(this).addClass("active");
                var section = $(this).data("name");
                $(".cs-section").hide();
                $(".cs-section").removeClass("cs-section-active");
                $("." + section).addClass("cs-section-active").show();
            });


            $('.jump-link, .mobile-menu-item').click(function() {
                $(".mobile-slide-menu").hide();

                $('html, body').stop().animate({
                    scrollTop: $($.attr(this, 'href')).offset().top - menu_margin
                }, 1000);
                return false;
            });

            $(".test").click(function() {
                $(".test").toggleClass("test-open");
                $(".login-container").toggleClass("login-open");
            });
            $(".menu-container").click(function() {
                if ($('.login-container').is(':visible')) {
                    $(".test").toggleClass("test-open");

                    $(".login-container").toggleClass("login-open");
                }
            });
            $(".login-btn, .mobile-menu-login").click(function(e) {
                console.log("ya");
                e.stopPropagation();
                $(".test").toggleClass("test-open");
                $(".login-container").toggleClass("login-open");
            });

            $(".login-container").click(function(e) {
                e.stopPropagation();

            });

            $('.selectpicker').selectpicker();


            $(".agilelaw-section-container .menu-item").click(function() {
                $(".agile-iframe").html('');
                $(".agile-video").show();
            });

            $(".agile-faq-q").click(function() {
                $(this).next().slideToggle();
                $(this).find("i").toggleClass("fa-chevron-right fa-chevron-down");
            });

            $(".contact-form-submit").click(function() {
                $(".form-firm, .form-phone, .form-name").removeClass("form-error");
                form_name = $(".form-name").val().trim();
                form_firm = $(".form-firm").val().trim();
                form_email = $(".form-email").val().trim();
                form_phone = $(".form-phone").val().trim();
                form_comments = $(".form-comments").val().trim();
                form_interests = [];


                if ($(".form-checkbox-agilelaw").is(":checked")) {
                    form_interests.push("AgileLaw e-exhibits");
                }

                if ($(".form-checkbox-disco").is(":checked")) {
                    form_interests.push("CS Disco e-discovery");
                }

                if ($(".form-checkbox-consulting").is(":checked")) {
                    form_interests.push("Consulting Services");
                }

                if (form_name == "" || form_phone == "" || form_firm == "") {
                    console.log("error");
                    if (form_name == "") {
                        $(".form-name").addClass("form-error");
                    }
                    if (form_phone == "") {
                        $(".form-phone").addClass("form-error");
                    }
                    if (form_firm == "") {
                        $(".form-firm").addClass("form-error");
                    }
                } else {

                    php_link = "jotform.php?name=" + form_name + "&firm=" + form_firm + "&email=" + form_email + "&phone=" + form_phone + "&comments=" + form_comments + "&interests=" + form_interests.toString();
                    $.get(php_link, function(data) {
                        $(".form-firm, .form-phone, .form-name, .form-comments, .form-email").val('');
                        $('.form-checkbox-agilelaw').prop('checked', false);
                        $(".form-sent").fadeIn("slow").delay(2000).fadeOut("slow");
                    });
                }

            });


            $(".footer-agile-link").click(function() {
                $(".agilelaw-section-container .menu-item").removeClass("active");
                var section = $(this).data("name");
                $("p[data-name='" + section + "']").addClass("active");
                $(".agile-section").hide();
                $(".agile-section").removeClass("agile-section-active");
                $("." + section).addClass("agile-section-active").show();
                $('html, body').animate({
                    scrollTop: $('#agilelaw').position().top - menu_margin
                }, 1000);
            });
            $(".footer-disco-link").click(function() {
                $(".cs-disco-container .menu-item").removeClass("active");
                var section = $(this).data("name");

                $("p[data-name='" + section + "']").addClass("active");

                $("." + section).addClass("cs-section-active").show();


                $(".cs-section").hide();
                $(".cs-section").removeClass("cs-section-active");
                $("." + section).addClass("cs-section-active").show();
                $('html, body').animate({
                    scrollTop: $('#cs').position().top
                }, 1000);
            });

            $(".footer-pricing").click(function() {
                $('html, body').animate({
                    scrollTop: $('#pricing').position().top - menu_margin
                }, 1000);
            });

            $(".footer-contact, .contact-link").click(function() {
                $('html, body').animate({
                    scrollTop: $('#contact').position().top - menu_margin
                }, 1000);
            });

            $(".footer-consulting").click(function() {
                $('html, body').animate({
                    scrollTop: $('#consulting').position().top - menu_margin
                }, 1000);
            });

            menu_container_h = $(".menu-container").outerHeight();
            press_container_h = $(".press-container").outerHeight();
            window_h = $(window).height();
            window_w = $(window).width();
            console.log("initial width: " + window_w);
            intro_h = (window_h - (menu_container_h + press_container_h));
            if (intro_h < 510) {
                intro_h = 510;
            }
            if (window_w < 769) {
                intro_h = 210;
            }

            $(window).resize(function() {

                menu_container_h = $(".menu-container").outerHeight();
                press_container_h = $(".press-container").outerHeight();
                window_h = $(window).height();
                window_w = $(window).width();
                intro_h = (window_h - (menu_container_h + press_container_h));

                if (intro_h < 510) {
                    intro_h = 510;
                }
                if (window_w < 769) {
                    intro_h = 210;
                }

                if ($('.menu-container').is(':visible')) {
                    menu_margin = $(".menu-container").outerHeight();

                    $("body").css('margin-top', menu_margin);
                } else {
                    menu_margin = $(".mobile-menu-container").outerHeight();
                    $("body").css('margin-top', menu_margin);
                }

            });


            if (window.location.href.indexOf("#features") > -1) {
                $(".menu-agilelaw").trigger("click");
            }

            if (window.location.href.indexOf("#pricing") > -1) {
                $(".menu-pricing").trigger("click");
            }

            if (window.location.href.indexOf("#blog") > -1) {
                $(".menu-blog").trigger("click");
            }

            if (window.location.href.indexOf("#contact") > -1) {
                $(".menu-contact").trigger("click");
            }

            $(".trial-btn-start").click(function(){
              $("body").css("overflow","hidden");
              $(".trial").fadeIn();
            });

            $(".close-icon").click(function(){
              $(".trial").fadeOut();
              $("body").css("overflow","auto");
            });

            $(".test-trial-btn-start").click(function(){
              var errors = false;
              var tt_email = $("#tt-email").css("background","white").val().trim();
              var tt_firm_name = $("#tt-firm-name").css("background","white").val().trim();
              $(".trial-email-error, .trial-firm-error").hide();

              if (tt_email.indexOf("@") < 0) {
                $(".trial-email-error").show();
                errors = true;
              }
              if (tt_firm_name.length < 1) {
                $(".trial-firm-error").show();
                errors = true;
              }

              if (errors == false) {
                $(".trial-start-container").fadeOut(function(){
                  $(".trial-wizard-container").fadeIn(function(){
                    $(".trial-1-container").fadeIn();
                  });
                });
              }

            });

            $(".trial-btn-1-back").click(function(){
              $(".trial-wizard-container").fadeOut();
              $(".trial-1-container").fadeOut(function(){
                $(".trial-start-container").fadeIn();
              });
            });

            $(".trial-btn-1-next").click(function(){
              $(".trial-wizard-num-2").addClass("trial-wizard-num-done");
              $(".trial-1-container").fadeOut(function(){
                $(".trial-2-container").fadeIn();
              });
            });

            $(".trial-btn-2-back").click(function(){
              $(".trial-wizard-num-2").removeClass("trial-wizard-num-done");
              $(".trial-2-container").fadeOut(function(){
                $(".trial-1-container").fadeIn();
              });
            });

            $(".trial-btn-2-next").click(function(){
              $(".trial-wizard-num-3").addClass("trial-wizard-num-done");
              $(".trial-2-container").fadeOut(function(){
                $(".trial-3-container").fadeIn();
              });
            });

            $(".trial-btn-3-back").click(function(){
              $(".trial-wizard-num-3").removeClass("trial-wizard-num-done");
              $(".trial-3-container").fadeOut(function(){
                $(".trial-2-container").fadeIn();
              });
            });

            $(".trial-btn-3-next").click(function(){
              $(".trial-wizard-num-4").addClass("trial-wizard-num-done");
              $(".trial-3-container").fadeOut(function(){
                $(".trial-4-container").fadeIn();
              });
            });

            $(".trial-btn-4-back").click(function(){
              $(".trial-wizard-num-4").removeClass("trial-wizard-num-done");
              $(".trial-4-container").fadeOut(function(){
                $(".trial-3-container").fadeIn();
              });
            });

            $(".trial-btn-4-next").click(function(){
              $(".trial-4-container, .trial-header, .trial-wizard-container").fadeOut(function(){
                $(".throbber").fadeIn(function(){
                  $(".throbber").delay(3000).fadeOut(function(){
                    $(".trial-end-container").fadeIn();
                  });
                });
              });
            });

            $("#tt-password").click(function(){
                $(".trial-password-msgs").slideDown("slow");
            });

        })