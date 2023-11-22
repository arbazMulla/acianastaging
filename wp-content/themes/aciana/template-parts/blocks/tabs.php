<?php

/**
 * Block Name: Tabs
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}


?>
<div class="<?= $uid; ?> <?= esc_attr($className); ?>">

    <div class="d-flex align-items-start">
        <?php
        if (have_rows('tabs')) : ?>
            <div class="nav nav-pills flex-column col-12 col-md-4 col-lg-3 pe-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php
                $counter = 1;
                while (have_rows('tabs')) :
                    the_row();
                    $title = get_sub_field('title');
                    $slugtitle = sanitize_title($title);
                ?>
                    <a class="nav-link tabs pe-0 text-start mb-2 <?= $counter === 1 ? 'active' : '' ?>" href="#<?= $slugtitle ?>" id="v-pills-<?= $counter ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $slugtitle ?>" type="button" role="tab" aria-controls="v-pills-<?= $slugtitle ?>" aria-selected="true">
                        <?= $title ?>
                    </a>
                <?php $counter++;
                endwhile; ?>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <?php
                $counter = 1;
                while (have_rows('tabs')) :
                    the_row();
                    $content = get_sub_field('content');
                    $slugtitle1 = sanitize_title(get_sub_field('title'));
                ?>
                    <div class="tab-pane ps-md-3 fade <?= $counter === 1 ? 'show active' : '' ?>" id="v-pills-<?= $slugtitle1 ?>" role="tabpanel" aria-labelledby="v-pills-<?= $slugtitle1 ?>-tab" tabindex="0">
                        <?= $content ?>
                    </div>
                <?php $counter++;
                endwhile; ?>
            </div>
        <?php
        elseif (show_block_error()) : ?>
            <div class="bg-danger my-3 p-3 rounded shadow text-white font-demi">
                No data available
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        // Function to activate the tab based on the hash in the URL
        function activateTabFromHash() {
            var activeTabHash = window.location.hash;

            // Activate the specified tab
            if (activeTabHash) {
                // Remove 'active' class from all tabs and tab content

                jQuery('.tabs').removeClass('active');
                jQuery('.tab-pane').removeClass('show active');

                // Activate the specified tab link
                jQuery('[href="' + activeTabHash + '"]').addClass('active');

                // Extract the tab ID from the hash and activate the corresponding content
                // var tabId = activeTabHash.replace('#v-pills-', '').replace('-tab', '');
                var tabId = activeTabHash.replace('#', '');
                // console.log(tabId);
                jQuery('#v-pills-' + tabId).addClass('show active');
            }
        }

        // Call the function on page load
        activateTabFromHash();

        // Smooth scroll to tabs when clicking on links
        jQuery('.tabs').on('click', function(event) {
            var targetTabId = jQuery(this).attr('href');

            // Check if the link is opened in a new tab
            if (event.ctrlKey || event.metaKey || event.which === 2) {
                // Open link in a new tab (don't prevent default)
                return;
            }

            event.preventDefault();

            // Update the active tab link and content
            jQuery('.tabs').removeClass('active');
            jQuery(this).addClass('active');
            jQuery(targetTabId + '-tab').addClass('show active');

            // Update the URL hash to reflect the selected tab
            history.pushState({}, '', targetTabId);
        });

        // Listen for the 'hashchange' event to handle changes to the URL hash
        jQuery(window).on('hashchange', function() {
            activateTabFromHash();
        });
    });
</script>