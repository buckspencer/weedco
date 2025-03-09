<?php
/**
 * WeedCo Block Patterns
 *
 * @package WeedCo
 */

/**
 * Register Block Patterns
 */
function weedco_register_block_patterns() {
    // Register pattern categories
    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category(
            'weedco',
            array('label' => __('WeedCo', 'weedco'))
        );
    }

    // Register patterns
    if (function_exists('register_block_pattern')) {
        // Hero Section with Text on Right
        register_block_pattern(
            'weedco/hero-section-text-right',
            array(
                'title'       => __('Hero Section with Text on Right', 'weedco'),
                'description' => __('A hero section with image on the left and text content on the right', 'weedco'),
                'categories'  => array('weedco', 'header'),
                'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"white","className":"weedco-hero-section"} -->
<div class="wp-block-group alignfull weedco-hero-section has-white-background-color has-background" style="padding-top:4rem;padding-bottom:4rem">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
            <figure class="wp-block-image size-large is-style-default">
                <img src="data:image/svg+xml,%3Csvg width=\'800\' height=\'600\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'800\' height=\'600\' fill=\'%230e2949\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'24px\' fill=\'%23ffffff\'%3EHero Image%3C/text%3E%3C/svg%3E" alt="WeedCo Services"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"2rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-left:2rem;flex-basis:50%">
            <!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0e2949"}}} -->
            <h1 class="has-text-color" style="color:#0e2949;font-weight:700">Professional Weed & Pest Control Services</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"color":{"text":"#333333"}}} -->
            <p class="has-text-color" style="color:#333333">Protect your home and property with our comprehensive weed and pest control solutions. Our expert team uses safe, effective methods to eliminate unwanted pests and weeds.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"#0fb5b6","textColor":"white","style":{"border":{"radius":"4px"}}} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-white-color has-text-color has-background" style="border-radius:4px;background-color:#0fb5b6">Request a Quote</a>
                </div>
                <!-- /wp:button -->
                
                <!-- wp:button {"backgroundColor":"white","textColor":"#0e2949","className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline">
                    <a class="wp-block-button__link has-text-color has-white-background-color has-background" style="color:#0e2949">Learn More</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->'
            )
        );

        // Main Hero Section (Full Width with Text on Right)
        register_block_pattern(
            'weedco/main-hero-section',
            array(
                'title'       => __('Main Hero Section', 'weedco'),
                'description' => __('A full-width hero section with text on the right side', 'weedco'),
                'categories'  => array('weedco', 'header'),
                'content'     => '<!-- wp:cover {"dimRatio":70,"overlayColor":"dark-blue","minHeight":80,"minHeightUnit":"vh","contentPosition":"center right","align":"full","className":"weedco-main-hero"} -->
<div class="wp-block-cover alignfull weedco-main-hero has-custom-content-position is-position-center-right" style="min-height:80vh">
    <span aria-hidden="true" class="wp-block-cover__background has-dark-blue-background-color has-background-dim-70 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"className":"hero-content","layout":{"type":"constrained","contentSize":"500px"}} -->
        <div class="wp-block-group hero-content">
            <!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"color":{"text":"#ffffff"}},"fontSize":"xx-large"} -->
            <h1 class="has-text-color has-xx-large-font-size" style="color:#ffffff;font-weight:700;line-height:1.2">Your Shield for Pests, Termites, and Weeds</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}}} -->
            <p class="has-text-color" style="color:#ffffff">At WeedCo, we know your time is valuable and your to-do list is ever growing. We can help make life a little simpler by taking care of your home or business for weeds, pests, even termites and so much more, giving you more time for the more important things.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->'
            )
        );

        // Complete Solutions Section
        register_block_pattern(
            'weedco/complete-solutions-section',
            array(
                'title'       => __('Complete Solutions Section', 'weedco'),
                'description' => __('A section with text content on the left and an image on the right', 'weedco'),
                'categories'  => array('weedco', 'content'),
                'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"weedco-solutions-section"} -->
<div class="wp-block-group alignfull weedco-solutions-section" style="padding-top:0;padding-bottom:0">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"className":"solutions-columns"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center solutions-columns">
        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem;flex-basis:50%">
            <!-- wp:group {"className":"solutions-content"} -->
            <div class="wp-block-group solutions-content">
                <!-- wp:heading {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0e2949"}}} -->
                <h2 class="has-text-color" style="color:#0e2949;font-weight:700">Complete Solutions</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"color":{"text":"#333333"}}} -->
                <p class="has-text-color" style="color:#333333">At WeedCo, we pride ourselves on providing a complete solution for your weed or pest concern. Whether you live in a residential home or have a commercial property we have the tools and training to take on any challenges. Our team of licensed and professionally trained technicians along with our inspectors offer a transparent, honest and thorough plan for any concerns. We are your Shield for weed and pest services</p>
                <!-- /wp:paragraph -->

                <!-- wp:shortcode -->
                [weedco_button text="Learn More" url="/learn-more"]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"solutions-image-column"} -->
        <div class="wp-block-column is-vertically-aligned-center solutions-image-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:30%">
            <!-- wp:cover {"url":"data:image/svg+xml,%3Csvg width=\'800\' height=\'800\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'800\' height=\'800\' fill=\'%230e2949\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'36px\' fill=\'%23ffffff\'%3ESolutions Image%3C/text%3E%3C/svg%3E","dimRatio":0,"minHeight":600,"minHeightUnit":"px","className":"solutions-image"} -->
            <div class="wp-block-cover solutions-image" style="min-height:600px">
                <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="" src="data:image/svg+xml,%3Csvg width=\'800\' height=\'800\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'800\' height=\'800\' fill=\'%230e2949\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'36px\' fill=\'%23ffffff\'%3ESolutions Image%3C/text%3E%3C/svg%3E" data-object-fit="cover"/>
                <div class="wp-block-cover__inner-container">
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","width":"20%","backgroundColor":"#0fb5b6","className":"teal-background-column"} -->
        <div class="wp-block-column is-vertically-aligned-center teal-background-column has-background" style="background-color:#0fb5b6;flex-basis:20%">
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->'
            )
        );

        // Services Section
        register_block_pattern(
            'weedco/services-section',
            array(
                'title'       => __('Services Section', 'weedco'),
                'description' => __('A grid of service items with icons and titles', 'weedco'),
                'categories'  => array('weedco', 'content'),
                'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"backgroundColor":"white","className":"weedco-services-section"} -->
<div class="wp-block-group alignfull weedco-services-section has-white-background-color has-background" style="padding-top:5rem;padding-bottom:5rem">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"700"},"color":{"text":"#0e2949"}},"className":"services-heading"} -->
    <h2 class="has-text-align-center services-heading has-text-color" style="color:#0e2949;font-weight:700">Pest Control Services</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","className":"services-grid"} -->
    <div class="wp-block-columns alignwide services-grid">
        <!-- wp:column {"className":"service-item"} -->
        <div class="wp-block-column service-item">
            <!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"service-icon"} -->
            <figure class="wp-block-image aligncenter size-full is-resized service-icon">
                <img src="data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'100\' height=\'100\' fill=\'%230fb5b6\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'14px\' fill=\'%23ffffff\'%3ETermites%3C/text%3E%3C/svg%3E" alt="Termites" width="100" height="100"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#0e2949"}}} -->
            <h3 class="has-text-align-center has-text-color" style="color:#0e2949">Termites</h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"service-item"} -->
        <div class="wp-block-column service-item">
            <!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"service-icon"} -->
            <figure class="wp-block-image aligncenter size-full is-resized service-icon">
                <img src="data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'100\' height=\'100\' fill=\'%230fb5b6\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'14px\' fill=\'%23ffffff\'%3EPest%3C/text%3E%3C/svg%3E" alt="Pest Control" width="100" height="100"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#0e2949"}}} -->
            <h3 class="has-text-align-center has-text-color" style="color:#0e2949">Pest Control</h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"service-item"} -->
        <div class="wp-block-column service-item">
            <!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"service-icon"} -->
            <figure class="wp-block-image aligncenter size-full is-resized service-icon">
                <img src="data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'100\' height=\'100\' fill=\'%230fb5b6\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'14px\' fill=\'%23ffffff\'%3EWeed%3C/text%3E%3C/svg%3E" alt="Weed Control" width="100" height="100"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#0e2949"}}} -->
            <h3 class="has-text-align-center has-text-color" style="color:#0e2949">Weed Control</h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->'
            )
        );

        // Programs Section
        register_block_pattern(
            'weedco/programs-section',
            array(
                'title'       => __('Programs Section', 'weedco'),
                'description' => __('A section with an image on the left and text content on the right', 'weedco'),
                'categories'  => array('weedco', 'content'),
                'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"backgroundColor":"#f5f5f5","className":"weedco-programs-section"} -->
<div class="wp-block-group alignfull weedco-programs-section has-background" style="background-color:#f5f5f5;padding-top:5rem;padding-bottom:5rem">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"programs-image"} -->
            <figure class="wp-block-image size-large programs-image">
                <img src="data:image/svg+xml,%3Csvg width=\'800\' height=\'600\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'800\' height=\'600\' fill=\'%230e2949\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'sans-serif\' font-size=\'24px\' fill=\'%23ffffff\'%3EPrograms Image%3C/text%3E%3C/svg%3E" alt="Programs"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"left":"2rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-left:2rem;flex-basis:60%">
            <!-- wp:group {"className":"programs-content"} -->
            <div class="wp-block-group programs-content">
                <!-- wp:heading {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0e2949"}}} -->
                <h2 class="has-text-color" style="color:#0e2949;font-weight:700">Service Programs</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"color":{"text":"#333333"}}} -->
                <p class="has-text-color" style="color:#333333">Our services are custom built for you. We at WeedCo understand that pest and weed pressures vary home to home and business to business. We design our treatment plans to address your concerns. We don\'t have a one size fits all service when it comes to solving concerns. We have treatment programs ranging from one time services to our Guardian and Shield packages that offer complete protection for your home or business.</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0e2949"}}} -->
                <h3 class="has-text-color" style="color:#0e2949;font-weight:700">State Certified</h3>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0fb5b6"}}} -->
                <h4 class="has-text-color" style="color:#0fb5b6;font-weight:700">Your Shield for Pests, Termites, and Weeds</h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"color":{"text":"#333333"}}} -->
                <p class="has-text-color" style="color:#333333">WeedCo is licensed with the Arizona Department of Agriculture and Office of Pest Management. License number 9705</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->'
            )
        );
    }
}
add_action('init', 'weedco_register_block_patterns'); 