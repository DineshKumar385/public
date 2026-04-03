<?php
/* ============================================================
   SPORTS THEME - functions.php
   Theme setup, enqueue styles, custom post types, and
   auto-generated content for all pages and posts
   ============================================================ */


/* ===========================================
   1. ENQUEUE STYLES
   Loads the main theme stylesheet
   =========================================== */
function sports_theme_enqueue_styles() {
    wp_enqueue_style(
        'sports-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'sports_theme_enqueue_styles');


/* ===========================================
   2. REGISTER CUSTOM POST TYPE: TRAINING TIPS
   Creates a Training Tips post type for
   sports training content on the site
   =========================================== */
function sports_register_training_tips_cpt() {

    /* Labels shown in the WordPress admin dashboard */
    $labels = array(
        'name'               => 'Training Tips',
        'singular_name'      => 'Training Tip',
        'menu_name'          => 'Training Tips',
        'add_new'            => 'Add New Tip',
        'add_new_item'       => 'Add New Training Tip',
        'edit_item'          => 'Edit Training Tip',
        'new_item'           => 'New Training Tip',
        'view_item'          => 'View Training Tip',
        'search_items'       => 'Search Training Tips',
        'not_found'          => 'No training tips found',
        'not_found_in_trash' => 'No training tips found in trash',
        'all_items'          => 'All Training Tips',
    );

    /* Settings for the custom post type */
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'training-tips'),
        'menu_icon'     => 'dashicons-universal-access-alt',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'  => true,
    );

    register_post_type('training_tip', $args);
}
add_action('init', 'sports_register_training_tips_cpt');


/* ===========================================
   3. FLUSH REWRITE RULES ON THEME ACTIVATION
   Ensures custom post type URLs work
   =========================================== */
function sports_theme_activation() {
    sports_register_training_tips_cpt();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'sports_theme_activation');


/* ===========================================
   4. AUTO-CREATE ALL SITE CONTENT
   Creates Training Tips, Blog Posts, Pages,
   WooCommerce Products, and site settings
   automatically on first admin visit
   =========================================== */
function sports_auto_create_all_content() {

    /* Only run once - skip if already done */
    if (get_option('sports_all_content_created_v2')) {
        return;
    }

    /* ---- 4a. TRAINING TIPS (3 posts) ---- */
    $tips = array(
        array(
            'title'   => '5 Warm-Up Exercises Before Any Game',
            'excerpt' => 'Essential warm-up exercises every athlete should do before stepping on the field or court.',
            'content' => '<!-- wp:paragraph -->
<p>Warming up before any sport is crucial to prevent injuries and boost your performance. A proper warm-up increases blood flow to your muscles, improves flexibility, and gets your mind focused for the game ahead. Skipping this step is one of the most common mistakes athletes make.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Start with 2 minutes of light jogging to raise your heart rate. Follow that with dynamic leg swings, holding a wall for balance and swinging each leg forward and back 15 times. Next, do 10 walking lunges on each side to activate your quads, hamstrings, and glutes. Then perform arm circles, 20 small circles followed by 20 large circles in both directions to loosen your shoulders. Finish with 10 high knees and 10 butt kicks to fire up your lower body.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This routine takes less than 10 minutes but makes a massive difference in how your body responds during competition. Make it a habit before every practice and game, and you will notice fewer muscle strains and better overall movement on the field.</p>
<!-- /wp:paragraph -->',
        ),
        array(
            'title'   => 'How to Choose the Right Running Shoes',
            'excerpt' => 'A simple guide to picking the perfect running shoes based on your foot type and running style.',
            'content' => '<!-- wp:paragraph -->
<p>Choosing the right running shoes can be the difference between enjoying your run and dealing with blisters, shin splints, or knee pain. With so many brands and models available, it helps to understand what actually matters when picking a pair.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>First, know your foot arch type. Step on a wet surface and look at your footprint. A flat footprint means you have low arches and need stability shoes. A footprint with a narrow middle means high arches, and you should look for cushioned shoes with more flexibility. A moderate curve means neutral arches, and most neutral running shoes will work well for you.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Second, consider the surface you run on most often. Road running shoes have flat soles for pavement, while trail shoes have deeper treads for grip on dirt and rocks. Finally, always try shoes on at the end of the day when your feet are slightly swollen, and leave about a thumb width of space between your longest toe and the front of the shoe. Replace your running shoes every 400 to 500 miles to maintain proper support.</p>
<!-- /wp:paragraph -->',
        ),
        array(
            'title'   => 'Strength Training Basics for Beginners',
            'excerpt' => 'New to the gym? Here are the fundamentals of strength training to build muscle safely and effectively.',
            'content' => '<!-- wp:paragraph -->
<p>Strength training is one of the best things you can do for your body, whether you play sports or just want to stay fit. It builds muscle, strengthens bones, improves posture, and boosts your metabolism. If you are a beginner, starting with the right approach will save you from injuries and keep you consistent.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Focus on compound movements first. These are exercises that work multiple muscle groups at the same time. The five essential movements are squats, deadlifts, bench press, overhead press, and rows. Start with light weights or even just your body weight to learn proper form. Doing 3 sets of 8 to 12 repetitions for each exercise is a solid starting point. Rest for 60 to 90 seconds between sets.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Train 3 days per week with at least one rest day between sessions so your muscles can recover and grow. Track your workouts in a notebook or phone app so you can gradually increase the weight each week. This concept is called progressive overload and it is the key to getting stronger over time. Stay patient, stay consistent, and the results will follow.</p>
<!-- /wp:paragraph -->',
        ),
    );

    foreach ($tips as $tip) {
        wp_insert_post(array(
            'post_title'   => $tip['title'],
            'post_content' => $tip['content'],
            'post_excerpt' => $tip['excerpt'],
            'post_status'  => 'publish',
            'post_type'    => 'training_tip',
        ));
    }


    /* ---- 4b. BLOG POSTS (3 posts) ---- */
    $blogs = array(
        array(
            'title'   => 'Top 10 Sports Equipment Trends in 2026',
            'excerpt' => 'Discover the latest innovations in sports gear that are changing the way athletes train and compete.',
            'content' => '<!-- wp:paragraph -->
<p>The sports equipment industry is evolving rapidly, with new materials, technology, and designs transforming how athletes perform. Whether you are a weekend warrior or a professional competitor, staying informed about the latest gear trends can give you a competitive edge.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Smart wearable technology continues to lead the charge. Fitness trackers and smartwatches now offer real-time feedback on heart rate, recovery time, and even muscle oxygen levels. Carbon fiber has become the material of choice for everything from tennis rackets to cycling frames, offering incredible strength at a fraction of the weight. Sustainable and eco-friendly gear is also gaining popularity, with major brands releasing products made from recycled ocean plastics and organic cotton.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Customization is another major trend. Companies now offer 3D-printed insoles, custom-fit helmets, and shoes designed specifically for your foot shape using scanning technology. As we move through 2026, expect to see even more integration of artificial intelligence in training equipment, helping athletes analyze their technique and prevent injuries before they happen.</p>
<!-- /wp:paragraph -->',
        ),
        array(
            'title'   => 'How to Build a Home Gym on a Budget',
            'excerpt' => 'You do not need a fancy gym membership to stay fit. Here is how to set up an effective home gym without breaking the bank.',
            'content' => '<!-- wp:paragraph -->
<p>Building a home gym does not have to cost thousands of dollars. With some smart planning and the right equipment choices, you can create an effective workout space for under $300. The key is focusing on versatile equipment that allows you to perform a wide range of exercises.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Start with a set of adjustable dumbbells. These replace an entire rack of fixed weights and typically cost between $80 and $150. Add a pull-up bar that fits in a doorframe for about $25. A basic yoga mat is essential for floor exercises, stretching, and core work. Resistance bands are incredibly versatile and affordable, usually around $15 for a complete set. If your budget allows, a flat or adjustable bench opens up dozens of additional exercises.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>For cardio, consider a jump rope, which costs under $10 and provides one of the most effective cardiovascular workouts available. Look for used equipment on online marketplaces where you can often find quality gear at half the retail price. Remember, consistency matters more than equipment. A simple setup used regularly will always beat an elaborate gym that collects dust.</p>
<!-- /wp:paragraph -->',
        ),
        array(
            'title'   => 'The Importance of Recovery Days in Training',
            'excerpt' => 'Rest days are not lazy days. Learn why recovery is just as important as the workout itself.',
            'content' => '<!-- wp:paragraph -->
<p>Many athletes make the mistake of thinking that more training always leads to better results. In reality, overtraining without adequate recovery can lead to decreased performance, chronic fatigue, and serious injuries. Your muscles do not grow during workouts. They grow during rest, when your body repairs the microscopic tears caused by exercise.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Active recovery is one of the most effective ways to help your body heal while still staying in motion. Light activities like walking, swimming, or gentle yoga increase blood flow to sore muscles without adding stress. Foam rolling and stretching on recovery days can significantly reduce muscle tightness and improve range of motion for your next training session.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sleep is the most underrated recovery tool available. During deep sleep, your body releases growth hormone, repairs damaged tissue, and consolidates the movement patterns you practiced during training. Aim for 7 to 9 hours of quality sleep each night. Proper nutrition on rest days is equally important. Keep your protein intake consistent and stay hydrated even when you are not sweating through a workout.</p>
<!-- /wp:paragraph -->',
        ),
    );

    foreach ($blogs as $blog) {
        wp_insert_post(array(
            'post_title'   => $blog['title'],
            'post_content' => $blog['content'],
            'post_excerpt' => $blog['excerpt'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
        ));
    }


    /* ---- 4c. PRIVACY POLICY PAGE ---- */
    $privacy_id = wp_insert_post(array(
        'post_title'   => 'Privacy Policy',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '<!-- wp:heading -->
<h2 class="wp-block-heading">Introduction</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>At Sports Equipment Store, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and make purchases through our online store.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Information We Collect</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We collect information that you provide directly to us, including your name, email address, shipping address, phone number, and payment information when you create an account or place an order. We also automatically collect certain information about your device, including your IP address, browser type, operating system, and browsing behavior on our site.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">How We Use Your Information</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We use the information we collect to process and fulfill your orders, communicate with you about products and promotions, improve our website and customer experience, prevent fraudulent transactions, and comply with legal obligations. We do not sell your personal information to third parties.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cookies</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our website uses cookies to enhance your browsing experience. Cookies are small text files stored on your device that help us remember your preferences, keep items in your shopping cart, and analyze site traffic. You can control cookie settings through your browser preferences.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Data Security</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. All payment transactions are encrypted using SSL technology.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Your Rights</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>You have the right to access, correct, or delete your personal information at any time. You may also opt out of marketing communications by following the unsubscribe link in any email we send. To exercise any of these rights, please contact us at privacy@sportsstore.com.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Changes to This Policy</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date. We encourage you to review this policy periodically.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Last updated:</strong> April 2026</p>
<!-- /wp:paragraph -->',
    ));

    /* Connect Privacy Policy to WordPress Privacy Settings */
    if ($privacy_id && !is_wp_error($privacy_id)) {
        update_option('wp_page_for_privacy_policy', $privacy_id);
    }


    /* ---- 4d. TERMS AND CONDITIONS PAGE ---- */
    $terms_id = wp_insert_post(array(
        'post_title'   => 'Terms and Conditions',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '<!-- wp:heading -->
<h2 class="wp-block-heading">Agreement to Terms</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>By accessing and using the Sports Equipment Store website, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please do not use our website or services.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Products and Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>All products listed on our website are subject to availability. We reserve the right to modify prices at any time without prior notice. Prices displayed are in Canadian dollars and do not include applicable taxes or shipping fees, which will be calculated at checkout.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders and Payments</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>When you place an order through our website, you are making an offer to purchase. We reserve the right to accept or decline your order for any reason. Payment must be made in full at the time of purchase. We accept major credit cards and other payment methods as displayed at checkout.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Shipping and Delivery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We aim to process and ship orders within 2 to 5 business days. Delivery times vary based on your location and the shipping method selected. We are not responsible for delays caused by shipping carriers or customs processing. Risk of loss transfers to you upon delivery to the carrier.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Returns and Refunds</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We accept returns within 30 days of delivery for unused items in their original packaging. To initiate a return, please contact our customer service team. Refunds will be processed to the original payment method within 5 to 10 business days after we receive the returned item. Shipping costs are non-refundable.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Limitation of Liability</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sports Equipment Store shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our website or products. Our total liability shall not exceed the amount paid for the specific product in question.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Contact Information</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>If you have questions about these Terms and Conditions, please contact us at legal@sportsstore.com or call (555) 123-4567.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Last updated:</strong> April 2026</p>
<!-- /wp:paragraph -->',
    ));

    /* Connect Terms page to WooCommerce settings */
    if ($terms_id && !is_wp_error($terms_id)) {
        update_option('woocommerce_terms_page_id', $terms_id);
    }


    /* ---- 4e. CONTACT PAGE ---- */
    wp_insert_post(array(
        'post_title'   => 'Contact',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Get In Touch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Have a question about our products or need help with an order? Fill out the form below and our team will get back to you within 24 hours.</p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[contact-form-7 title="Contact Form"]
<!-- /wp:shortcode -->',
    ));


    /* ---- 4f. HOMEPAGE ---- */
    $home_id = wp_insert_post(array(
        'post_title'   => 'Home',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '<!-- wp:cover {"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"30px","right":"30px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"52px","fontWeight":"800"},"color":{"text":"#ffffff"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:52px;font-weight:800">Gear Up for Greatness</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"20px"}}} -->
<p class="has-text-align-center" style="color:#cbd5e1;font-size:20px">Premium sports equipment for athletes who demand the best. From training to game day.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/" style="border-radius:8px">Shop Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:32px">Featured Products</h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-new {"columns":3,"rows":2} /-->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"training-tips-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group training-tips-section">

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:32px">Training Tips</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"postType":"training_tip","perPage":3,"order":"desc","orderBy":"date"},"className":"training-tips-grid"} -->
<div class="wp-block-query training-tips-grid">

<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-excerpt {"excerptLength":20} /-->

<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#9ca3af"}}} -->
<p class="has-text-align-center" style="color:#9ca3af">No training tips available yet. Check back soon!</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":300,"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"30px","right":"30px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:60px;padding-right:30px;padding-bottom:60px;padding-left:30px;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"36px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:36px">Ready to Train Like a Pro?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#dbeafe"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:#dbeafe;font-size:18px">Browse our full collection of sports equipment and take your game to the next level.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"primary","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button" href="/shop/" style="border-radius:8px">Browse All Products</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div></div>
<!-- /wp:cover -->',
    ));

    /* ---- 4g. BLOG PAGE ---- */
    $blog_id = wp_insert_post(array(
        'post_title'  => 'Blog',
        'post_status' => 'publish',
        'post_type'   => 'page',
        'post_content' => '',
    ));

    /* Set homepage and blog page in WordPress settings */
    if ($home_id && !is_wp_error($home_id)) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_id);
    }
    if ($blog_id && !is_wp_error($blog_id)) {
        update_option('page_for_posts', $blog_id);
    }


    /* ---- 4h. WooCommerce PRODUCTS (6 products) ---- */
    if (class_exists('WooCommerce')) {

        $products = array(
            array(
                'name'  => 'Pro Basketball',
                'price' => '49.99',
                'sale'  => '39.99',
                'desc'  => 'Official size and weight indoor/outdoor basketball made with premium composite leather. Features deep channel design for superior grip and control. Perfect for competitive play and everyday practice sessions.',
                'short' => 'Premium composite leather basketball for indoor and outdoor play.',
                'sku'   => 'SPORT-BB-001',
            ),
            array(
                'name'  => 'Carbon Fiber Tennis Racket',
                'price' => '189.99',
                'sale'  => '',
                'desc'  => 'Lightweight carbon fiber tennis racket designed for intermediate to advanced players. The extended sweet spot technology reduces vibration and increases power on every swing. Comes pre-strung with premium synthetic gut strings at 55 pounds tension.',
                'short' => 'Lightweight carbon fiber racket with extended sweet spot technology.',
                'sku'   => 'SPORT-TN-002',
            ),
            array(
                'name'  => 'Adjustable Dumbbell Set',
                'price' => '299.99',
                'sale'  => '249.99',
                'desc'  => 'Space-saving adjustable dumbbell set that replaces 15 sets of weights. Quickly switch from 5 to 52.5 pounds with the turn of a dial. Features durable steel construction with a comfortable ergonomic grip. Ideal for full-body strength training at home.',
                'short' => 'Adjustable 5-52.5 lb dumbbells with quick-change dial system.',
                'sku'   => 'SPORT-WT-003',
            ),
            array(
                'name'  => 'Performance Running Shoes',
                'price' => '159.99',
                'sale'  => '129.99',
                'desc'  => 'Engineered for speed and comfort, these running shoes feature responsive foam cushioning and a breathable mesh upper. The carbon plate in the midsole provides explosive energy return with every stride. Suitable for road running, tempo runs, and race day performance.',
                'short' => 'Responsive foam running shoes with carbon plate for maximum energy return.',
                'sku'   => 'SPORT-RN-004',
            ),
            array(
                'name'  => 'Premium Yoga Mat',
                'price' => '59.99',
                'sale'  => '',
                'desc'  => 'Extra thick 6mm non-slip yoga mat made from eco-friendly TPE material. The dual-layer design provides superior cushioning for joints while maintaining a stable surface for balance poses. Includes a carrying strap for easy transport to the studio or park.',
                'short' => 'Eco-friendly non-slip yoga mat with extra thick cushioning.',
                'sku'   => 'SPORT-YG-005',
            ),
            array(
                'name'  => 'Elite Football',
                'price' => '44.99',
                'sale'  => '34.99',
                'desc'  => 'Match-quality football built with thermally bonded panels for a consistent flight path and true touch. The textured surface coating provides excellent grip in all weather conditions. FIFA-approved size and weight for official match play and tournament use.',
                'short' => 'Match-quality thermally bonded football with all-weather grip.',
                'sku'   => 'SPORT-FB-006',
            ),
        );

        foreach ($products as $prod) {
            /* Check if product already exists by SKU */
            $existing = wc_get_product_id_by_sku($prod['sku']);
            if ($existing) {
                continue;
            }

            $product = new WC_Product_Simple();
            $product->set_name($prod['name']);
            $product->set_regular_price($prod['price']);
            if (!empty($prod['sale'])) {
                $product->set_sale_price($prod['sale']);
            }
            $product->set_description($prod['desc']);
            $product->set_short_description($prod['short']);
            $product->set_sku($prod['sku']);
            $product->set_status('publish');
            $product->set_catalog_visibility('visible');
            $product->set_stock_status('instock');
            $product->save();
        }
    }


    /* ---- 4i. CONFIGURE WooCommerce PAGES ---- */
    /* Set permalink structure for clean URLs */
    update_option('permalink_structure', '/%postname%/');

    /* Mark content creation as complete */
    update_option('sports_all_content_created_v2', true);

    /* Flush rewrite rules so all new URLs work */
    flush_rewrite_rules();
}
add_action('admin_init', 'sports_auto_create_all_content');
