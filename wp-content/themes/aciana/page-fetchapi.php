<?php

/**
 * Template Name: API
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aciana
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">

    </link>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php get_header(); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="intro-text text-center">
                <h2>Subscription For Independent Practitioner</h2>
                <p>Select one of our options below exclusively for you. Only pay based on what you end up remitting.</p>
            </div>
            <div class="toggle-buttons">
                <button class="toggle-button active" data-target="pro">DOCISN PRO</button>
                <button class="toggle-button" data-target="premium">DOCISN PREMIUM</button>
            </div>
            <div class="pricing-container">
                <div class="plan pro pricingColumns">

                    <div class="planCol2 planCols">
                        <div class="pricingplanheadercontent">

                            <div class="basicPlancontent column1">
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <h4>Basic Plan</h4>
                                <p>3 Months</p>
                                <p>&#8377; 2000 /-</p>
                            </div>
                        </div>
                        <div class="pricingplancontent ">
                            <ul class="columnTitle">
                                <li>
                                    <h5 class="tooltips">SMS &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="caretsigns"><i class="fa-solid fa-caret-up"></i></span>
                                        <span class="tooltiptext">I am SMS</span>
                                    </h5>
                                </li>

                            </ul>

                        </div>


                    </div>
                    <div class="planCol2 planCols">
                        <div class="pricingplanheadercontent">

                            <div class="basicPlancontent">
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <h4>Basic Plan</h4>
                                <p>3 Months</p>
                                <p>&#8377; 2000 /-</p>
                            </div>
                        </div>
                        <div class="pricingplancontent">
                            <ul>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>50 min</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>02</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class="x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class=" x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                            </ul>
                            <button class="gettingStarted">Get Started</button>
                        </div>


                    </div>
                    <div class="planCol3 planCols">
                        <div class="pricingplanheadercontent">
                            <div class="basicPlancontent">
                                <div class="bgColor mostPopular">Most Popular </div>
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <p>6 Months</p>
                                <p>&#8377; 8000 /-</p>
                            </div>
                        </div>
                        <div class="pricingplancontent">
                            <ul>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>100 mins</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>05</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class=" x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>

                            </ul>
                            <button class="gettingStarted">Get Started</button>
                        </div>


                    </div>
                    <div class="planCol4 planCols">
                        <div class="pricingplanheadercontent">
                            <div class="basicPlancontent">
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <h4>Standard</h4>
                                <p>1 Year(Annual)</p>
                                <p>&#8377; 12000 /-</p>
                            </div>

                        </div>
                        <div class="pricingplancontent">
                            <ul>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>200 mins</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>10</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class=" x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>

                            </ul>

                            <button class="gettingStarted">Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- PREMIUM PLANS -->
                <div class="plan premium pricingColumns">
                    <div class="planCol2 planCols">
                        <div class="pricingplanheadercontent">

                            <div class="basicPlancontent column1">
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <h4>Basic Plan</h4>
                                <p>3 Months</p>
                                <p>&#8377; 2000 /-</p>
                            </div>
                        </div>
                        <div class="pricingplancontent ">
                            <ul class="columnTitle">
                                <li>
                                    <h5 class="tooltips">SMS &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="caretsigns"><i class="fa-solid fa-caret-up"></i></span>
                                        <span class="tooltiptext">I am SMS</span>
                                    </h5>
                                </li>
                                <li>
                                    <h5 class="tooltips">Whatsapp &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="caretsigns"><i class="fa-solid fa-caret-up"></i></span>
                                        <span class="tooltiptext">I am Whatsapp</span>
                                    </h5>
                                </li>
                                <li>
                                    <h5 class="tooltips">Tele Consultation &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="caretsigns"><i class="fa-solid fa-caret-up"></i></span>
                                        <span class="tooltiptext">I am Tele Consultation</span>
                                    </h5>

                                </li>
                                <li>

                                    <h5 class="tooltips">Clinical Notes &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="caretsigns"><i class="fa-solid fa-caret-up"></i></span>
                                        <span class="tooltiptext">I am Clinical Notes</span>
                                    </h5>

                                </li>
                                <li>

                                    <h5 class="tooltips">Doctor Packages &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="caretsigns"><i class="fa-solid fa-caret-up"></i></span>
                                        <span class="tooltiptext">I am Doctor Packages</span>
                                    </h5>
                                </li>
                                <li>
                                    <h5 class="tooltips">Number of Doctors &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="tooltiptext">I am Number of Doctors</span>
                                    </h5>


                                </li>
                                <li>
                                    <h5 class="tooltips">NDHM &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="tooltiptext">I am NDHM</span>
                                    </h5>

                                </li>
                                <li>
                                    <h5 class="tooltips">Front Desk &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="tooltiptext">I am Front Desk</span>
                                    </h5>

                                </li>
                                <li>
                                    <h5 class="tooltips">Users &nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="tooltiptext">I am Users</span>
                                    </h5>

                                </li>
                            </ul>

                        </div>


                    </div>
                    <div class="planCol2 planCols">
                        <div class="pricingplanheadercontent">

                            <div class="basicPlancontent">
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <h4>Basic Plan</h4>
                                <p>3 Months</p>
                                <p>&#8377; 5000 /-</p>
                            </div>
                        </div>
                        <div class="pricingplancontent">
                            <ul>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>100 min</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>02</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class="x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class="x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                            </ul>
                            <button class="gettingStarted premiumButton">Get Started</button>
                        </div>


                    </div>
                    <div class="planCol3 planCols">
                        <div class="pricingplanheadercontent">
                            <div class="basicPlancontent">
                                <div class="bgColor mostPopular">Most Popular </div>
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <p>6 Months</p>
                                <p>&#8377; 10000 /-</p>
                            </div>
                        </div>
                        <div class="pricingplancontent">
                            <ul>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>200 mins</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>05</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class="x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                            </ul>
                            <button class="gettingStarted premiumButton">Get Started</button>
                        </div>


                    </div>
                    <div class="planCol4 planCols">
                        <div class="pricingplanheadercontent">
                            <div class="basicPlancontent">
                                <img class="chargeIcon" src="<?php echo get_template_directory_uri() . '/images/images/black-Flash_red.png' ?>" alt="">
                                <h4>Standard</h4>
                                <p>1 Year(Annual)</p>
                                <p>&#8377; 15000 /-</p>
                            </div>

                        </div>
                        <div class="pricingplancontent">
                            <ul>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>400 mins</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li>
                                    <h5>10</h5>
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                                <li class="closeX">
                                    <img class="x" src="<?php echo get_template_directory_uri() . '/images/images/close.png' ?>" alt="">
                                </li>
                                <li>
                                    <img class="tick" src="<?php echo get_template_directory_uri() . '/images/images/tick.png' ?>" alt="">
                                </li>
                            </ul>
                            <button class="gettingStarted premiumButton">Get Started</button>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>

</html>