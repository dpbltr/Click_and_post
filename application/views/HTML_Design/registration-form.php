<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" href="../assets/images/fav_tax.png" />
    <title>Registration Form</title>
    <meta name="keywords" content="Indolaser: Leading Manufacturer of Marking and Welding Machines in Noida" />
    <meta name="description" content="description" />
    <link rel="stylesheet" href="../assets/css/responsee.css" />
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/intlTelInput.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.css" />
    <link rel='stylesheet' href='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css'>
    <style>
        .error {
            color: red;
            font-family: sans-serif;
            font-style: italic;
        }
    </style>
</head>

<body class="size-1280">

    <!---- Header ----->
    <div class="bgrrr" id="other_pagess">
        <header id="fixedds">
            <div class="container">
                <nav>
                    <div class="line">
                        <div class="lgo_mg">
                            <a href="index.html"><img src="../assets/images/logo.png" alt="" class="lgo_parts" /></a>
                        </div>
                        <a href="javascript:void(0);" class="desk_top_none bk_noewws"> Schedule Call </a>
                        <div class="top-nav s-12 l-12">
                            <ul>
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li><a href="javascript:void(0);">About Us</a></li>
                                <li><a href="javascript:void(0);">Projects </a></li>
                                <li><a href="javascript:void(0);">Events</a></li>
                                <li><a href="javascript:void(0);">Contact Us</a></li>
                            </ul>

                            <div class="bk_now_flds mb_view_hide">
                                <a href="javascript:void(0);">Schedule Call</a>
                                <a href="javascript:void(0);" id="aroowss_btns"><img src="../assets/images/click_arrow.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <!---- End Header ----->

    <section class="ser_v_araeea othrsss">
        <div class="container">
            <div class="al_support_pgss">
                <div class="over_tx">
                    <h4>Register Now</h4>
                    <p>so that you don’t miss it</p>
                </div>
                <img src="../assets/images/otherss.png" alt="" />
            </div>
        </div>
    </section>

    <!---- Enquire Now ----->

    <section class="ser_v_araeea pt_top_20 enquire formrg" id="enquirenow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form_boxx frm_cnt_bx">
                        <form class="frm_fildss" method="POST" action="<?php base_url('Welcome/registrationform'); ?>">
                            <h2>Alpha Kids Fashion Show</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Child’s Full Name*</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your child’s full name" value="<?php echo set_value('name'); ?>" />
                                        <?php echo form_error('name'); ?>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Child's Date Of Birth*</label>
                                        <input type="text" class="form-control datePickerDefault" name="date" placeholder="DD-MM-YYYY" value="<?php echo set_value('date'); ?>"/>
                                        <?php echo form_error('date'); ?>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Child's Age* </label>
                                        <input type="text" class="form-control" name="age" placeholder="Enter your child’s age" value="<?php echo set_value('age'); ?>" />
                                        <?php echo form_error('age'); ?>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Parent's Full Name* </label>
                                        <input type="text" class="form-control" name="parents_fullname" placeholder="Enter parent’s full name" value="<?php echo set_value('parents_fullname'); ?>" />
                                        <?php echo form_error('parents_fullname'); ?>

                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Contact Number </label>
                                        <input type="text" id="mobile_code" class="form-control space_pd" name="mobile_code" placeholder="Enter your contact no." value="<?php echo set_value('mobile_code'); ?>" />
                                        <?php echo form_error('mobile_code'); ?>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Alternate Contact Number  </label>
                                        <input type="text" id="mobile_code1" class="form-control space_pd" name="mobile_code1" placeholder="Enter your contact no." value="<?php echo set_value('mobile_code1'); ?>" />
                                        <?php echo form_error('mobile_code1'); ?>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email id" value="<?php echo set_value('email'); ?>" />
                                        <?php echo form_error('email'); ?>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="rdy_cont_area al_user">
                                        <div class="links">
                                            <button type="submit" value="" class="vw_details">Pay Now </button>
                                            <a href="javascript:void(0);" class="lnk_btnss"> <img src="../assets/images/click_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!---- End Enquire Now ----->

    <!-- Footer -->
    <footer id="Footer_arae">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mb_view_hide">
                    <div class="ftr_partss">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">About Us</a></li>
                            <li><a href="javascript:void(0);">Services </a></li>
                            <li><a href="javascript:void(0);">Enquire Now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 mb_view_hide">
                    <div class="ftr_partss">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Terms & Condition</a></li>
                            <li><a href="javascript:void(0);">Blogs</a></li>
                            <li><a href="javascript:void(0);">Help & Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 mb_view_hide">
                    <div class="ftr_partss">
                        <h4>Socials</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Instagram <img src="../assets/images/arrow_ftr.png" class="ar_ftrss" alt="" /></a></li>
                            <li><a href="javascript:void(0);">Facebook <img src="../assets/images/arrow_ftr.png" class="ar_ftrss" alt="" /></a></li>
                            <li><a href="javascript:void(0);">Youtube <img src="../assets/images/arrow_ftr.png" class="ar_ftrss" alt="" /></a></li>
                            <li><a href="javascript:void(0);">Pinterest <img src="../assets/images/arrow_ftr.png" class="ar_ftrss" alt="" /></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="ftr_partss adss_flss">
                        <h4>Let’s Unbox a dream together!</h4>
                        <p>Get all the latest information on Events, Sales and Offers. Sign up for the newsletter today.</p>
                        <div class="form_susscr">
                            <form action="">
                                <div class="form-group">
                                    <label>Enter Your Email Address </label>
                                    <input type="text" class="form-control" placeholder="" required="" />
                                    <button type="submit" value="" class="submmit"><img src="../assets/images/cur_arrow_bnt.png" alt="" /></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile View Show -->
            <div class="accordion_container mb_view_show">
                <div class="accordion_head">Menu <span class="plusminus">+</span></div>
                <div class="accordion_body" style="display: none;">
                    <div class="ftr_partss">
                        <ul>
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">About Us</a></li>
                            <li><a href="javascript:void(0);">Services </a></li>
                            <li><a href="javascript:void(0);">Book Appointment</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion_head">Useful links <span class="plusminus">+</span></div>
                <div class="accordion_body" style="display: none;">
                    <div class="ftr_partss pl_40">
                        <ul>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Terms & Condition</a></li>
                            <li><a href="javascript:void(0);">Blogs</a></li>
                            <li><a href="javascript:void(0);">Help & Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion_head">Useful links <span class="plusminus">+</span></div>
                <div class="accordion_body" style="display: none;">
                    <div class="ftr_partss pl_40">
                        <ul>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Terms & Condition</a></li>
                            <li><a href="javascript:void(0);">Blogs</a></li>
                            <li><a href="javascript:void(0);">Help & Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- End Mobile View Show -->

            <div class="eml_socilal">
                <div class="em_ico">Copyright@2024.clicks&pose.All rights reserves</div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Top scroll -->
    <div class="contentDiv" id="content">
        <button class="back-to-top" type="button"></button>
    </div>
    <!-- End Top scroll -->

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/responsee.js"></script>
    <script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="../assets/js/intlTelInput-jquery.min.js"></script>
    <script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js'></script>

    <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;


            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "09/30/",
                birthday = dayMonth + yyyy;

            today = mm + "/" + dd + "/" + yyyy;
            if (today > birthday) {
                birthday = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(birthday).getTime(),
                x = setInterval(function() {

                    const now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        document.getElementById("headline").innerText = "It's my birthday!";
                        document.getElementById("countdown").style.display = "none";
                        document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>


    <script>
        $("#mobile_code").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
        });

        $("#mobile_code1").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
        });
    </script>

    <script>
        $(function() {
            $(".datePickerDefault").datepicker();
            $(".datePickerAnimate").datepicker();
            $(".datePickerButton").datepicker({
                showButtonPanel: true
            });
            $(".datePickerMonthYear").datepicker({
                changeMonth: true,
                changeYear: true
            });

            $(".datePickerMM").datepicker({
                numberOfMonths: 3
            });


            $(".animate").change(function() {
                $(".datePickerAnimate").datepicker("option", "showAnim", $(this).val());
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            //toggle the component with class accordion_body
            $(".accordion_head").click(function() {
                if ($(".accordion_body").is(":visible")) {
                    $(".accordion_body").slideUp(300);
                    $(".plusminus").text("+");
                    $(".accordion_head").removeClass("clr_tx");
                }
                if ($(this).next(".accordion_body").is(":visible")) {
                    $(this).next(".accordion_body").slideUp(300);
                    $(this).children(".plusminus").text("+");
                } else {
                    $(this).next(".accordion_body").slideDown(300);
                    $(this).addClass("clr_tx").siblings().removeClass("clr_tx");
                    $(this).children(".plusminus").text("-");
                }
            });
        });
    </script>

    <script>
        $(document).on("click", 'a[href^="#"]', function(event) {
            event.preventDefault();

            $("html, body").animate({
                    scrollTop: $($.attr(this, "href")).offset().top,
                },
                1000
            );
        });
    </script>



    <script>
        $(function() {
            $(".accordion-content:not(:first-of-type)").css("display", "none");
            $(".js-accordion-title:first-of-type").addClass("open");

            $(".js-accordion-title").click(function() {
                $(".open").not(this).removeClass("open").next().slideUp(500);
                $(this).toggleClass("open").next().slideToggle(500);
            });
        });
    </script>

    <script>
        $(".showBtn").click(function() {
            //$('.hideme').hide();
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(".hideme").slideUp();
            } else {
                $(".hideme").slideUp();
                $(".showBtn").removeClass("active");
                $(this).addClass("active");
                $(this).next().filter(".hideme").slideDown();
            }
        });
    </script>

    <script>
        // Back to top
        var amountScrolled = 200;
        var amountScrolledNav = 25;

        $(window).scroll(function() {
            if ($(window).scrollTop() > amountScrolled) {
                $("button.back-to-top").addClass("show");
            } else {
                $("button.back-to-top").removeClass("show");
            }
        });

        $("button.back-to-top").click(function() {
            $("html, body").animate({
                    scrollTop: 0,
                },
                800
            );
            return false;
        });
    </script>

    <script type="text/javascript">
        var owl = $("#one_slisder");
        owl.owlCarousel({
            margin: 0,
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
            },
        });
    </script>

    <script type="text/javascript">
        var owl = $("#eventspges");
        owl.owlCarousel({
            margin: 30,
            loop: true,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
            },
        });
    </script>

    <script type="text/javascript">
        var owl = $("#testiml");
        owl.owlCarousel({
            margin: 30,
            loop: false,
            dots: true,
            nav: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
            },
        });
    </script>

    <script type="text/javascript">
        var owl = $("#kidss");
        owl.owlCarousel({
            margin: 30,
            loop: true,
            dots: false,
            nav: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 3.5,
                },
                1200: {
                    items: 3.5,
                },
            },
        });
    </script>

    <script>
        $(".tab-link").click(function() {
            var tabID = $(this).attr("data-tab");
            $(this).addClass("active").siblings().removeClass("active");
            $("#tab-" + tabID)
                .addClass("active")
                .siblings()
                .removeClass("active");
        });
    </script>

    <script>
        window.onscroll = function() {
            myFunction();
        };

        var header = document.getElementById("fixedds");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>