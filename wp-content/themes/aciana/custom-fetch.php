<?php

/**
 * Template Name: Custom Fetch API
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
            <?php echo  do_shortcode('[display_pricing_plans]');

            ?>
        </div>