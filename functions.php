<?php

// include_once('redirects.php');

//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts()
{
    if (!function_exists('is_login_page')) {
        function is_login_page()
        {
            return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
        }
    }

    if (!is_admin() && !is_login_page()) {
        /*removed wp-embed.min.js*/
        wp_deregister_script('wp-embed');
        wp_dequeue_style('wp-block-library');

        /*jquery*/
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, '3.5.1', true);

      
        //общие для всего сайта стили и скрипты

        /*custom js*/
        wp_enqueue_script('main', get_template_directory_uri() . '/js/min/main.min.js', array('jquery'), time(), true);

        /*custom css*/
        wp_enqueue_style('main', get_template_directory_uri() . '/css/style.min.css', array(), time());



        add_action('wp_head', function () {
            if (is_front_page()) {
                if (wp_is_mobile()) {
                    echo '<link rel="preload" as="image" href="/wp-content/themes/goodface/images/first-screen/top-screen-img.png"/>';
                } else {
                    echo '<link rel="preload" as="image" href="/wp-content/themes/goodface/images/first-screen/top-screen-img.png"/>';
                }
            }
        }, 1000);



        //добавляем css и js для кастомных страниц
        $pageTemplate = get_page_template_slug();

        if (strrpos($pageTemplate, 'pages/') === 0) {
            $pageTemplateName = str_replace(['pages/', '.php'], '', $pageTemplate);

            $isCssFile = file_exists(get_theme_file_path('css/' . $pageTemplateName . '.min.css'));
            $isJsFile = file_exists(get_theme_file_path('js/min/' . $pageTemplateName . '.min.js'));

            if ($isCssFile) {
                $cssFilePath = get_theme_file_uri('css/' . $pageTemplateName . '.min.css');
                wp_enqueue_style($pageTemplateName, $cssFilePath, array(), time());
            }

            if ($isJsFile) {
                $jsFilePath = get_theme_file_uri('js/min/' . $pageTemplateName . '.min.js');
                wp_enqueue_script($pageTemplateName, $jsFilePath, array('jquery'), time(), true);
            }
        }
       
        //добавляем стили для блога и постов
        if (is_home() || is_single()) {
            wp_enqueue_style('post', get_template_directory_uri() . '/css/page-post.min.css', array(), time());
            wp_enqueue_script('post', get_template_directory_uri() . '/js/min/page-post.min.js', null, time(), true);
        }

        if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single-plain-content.php' ) {
            wp_deregister_style('post');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('innerplain', get_template_directory_uri() . '/css/page-inner-plain-content.min.css', array(), time(), 'all');
        }

        if (is_front_page()) {
            wp_enqueue_style('front', get_template_directory_uri() . '/css/page-front.min.css', array(), time());
            wp_enqueue_script('front-js', get_template_directory_uri() . '/js/min/page-front.min.js', null, time(), true);
        }

        //для лендингов(темплейт page.php)
        $isLanding = !is_page_template() && !is_home() && !is_single() && !is_404() && !is_front_page() && !is_category();
        if ($isLanding) {
            wp_enqueue_style('landing', get_template_directory_uri() . '/css/page-seo.min.css', array(), time());
        }

        // для категорий
        if (is_category('catalog')) {
            wp_enqueue_style('blog', get_template_directory_uri() . '/css/page-catalog.min.css', array(), time());
            wp_enqueue_script('blog', get_template_directory_uri() . '/js/min/page-catalog.min.js', null, time(), true);
        }


        if (get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single-works.php') {
            wp_dequeue_style('blog');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('single-works', get_template_directory_uri() . '/css/page-single-works.min.css', array(), time());
        }

        //для 404 страницы
        if (is_404()) {
            wp_enqueue_style('error', get_template_directory_uri() . '/css/page-error.min.css', array(), time());
        }
    }
}

add_action('wp_enqueue_scripts', 'ox_adding_scripts');

//ADDING CRITICAL CSS (only for front-page)
//--------------------------------------------------
//render-blocking styles
$css_files = array(
    'front',
    'main',
);

add_action('wp_enqueue_scripts', 'ox_adding_critical_css');

function ox_adding_critical_css()
{

    global $wp_styles, $css_files;

    if (empty($css_files)) return;

    $registered_styles = $css_files;
    $css_files = array();
    $ver_variable = '?ver=';
    $ver_variable_length = strlen($ver_variable);

    foreach ($registered_styles as $item) {
        $s = $wp_styles->registered[$item]->src . $ver_variable . $wp_styles->registered[$item]->ver;
        $current_style_length = strlen($s);
        if ($current_style_length > $ver_variable_length) {
            $css_files[$item] = $s;
        }
    }

    /* $critical_css = load_template_part('css/critical.css');
    echo '<style>' . $critical_css . '</style>'; */

    $pageTemplates = array(
        "front-page" => "front",
    );
    $currentPageTemplate = get_page_template_slug();
    $currentPageTemplateName = str_replace(['pages/', '.php'], '', $currentPageTemplate);
    $pageTemplateKeys = array_keys($pageTemplates);
    $counter = 0;
    foreach ($pageTemplates as $currentTemplate) {
        if ($currentPageTemplateName == $pageTemplateKeys[$counter]) {
            $currentCritical = load_template_part("css/critical-$pageTemplates[$currentPageTemplateName].css");
            echo '<style>' . $currentCritical . '</style>';
        }
        $counter = $counter + 1;
    }

    global $css_files;

    foreach ($css_files as $key => $item) {
        wp_deregister_style($key);
        echo "<noscript><link rel='stylesheet' href='$item'/></noscript>";
    }

    function hook_non_critical_css()
    {
        global $css_files;

        foreach ($css_files as $key => $item) {
            echo '<script>function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}loadCSS("' . $item . '");</script>';
        }
    }

    add_action('wp_footer', 'hook_non_critical_css');
}


function load_template_part($template_name, $part_name = null)
{
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


//REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wpemoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//remove wp-json
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);


//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus(array(
    'header_menu' => 'Header Menu',
    'header_menu_ru' => 'Header Menu RU',
));

function nav_class_filter($classes, $item, $args, $depth)
{
    //добавлять классы только для меню в хедере
    if ($args->theme_location === 'header_menu' || $args->theme_location === 'header_ppc' || $args->theme_location === 'header_menu-tiktok' || $args->theme_location === 'header_menu-remarketmob' || $args->theme_location === 'header_menu-admission' || $args->theme_location === 'header_menu-mob' || $args->theme_location === 'header_menu-arabic' ) {
        $classes = ['navigation__link']; //такая запись переписывает все классы для элемента меню
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'nav_class_filter', 10, 4);


function prefix_nav_description( $item_output, $item, $depth, $args ) {
  if ( !empty( $item->description ) ) {
      $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
  }

  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


add_filter( 'nav_menu_submenu_css_class', 'rename_sub_menus', 10, 3 );
function rename_sub_menus( $classes, $args, $depth ){
    foreach ( $classes as $key => $class ) {
    if ( $class == 'sub-menu'  && $depth == 0) {
        $classes[ $key ] = 'sub-menu';
    } else if ( $class == 'sub-menu'  && $depth == 1) {
      $classes[ $key ] = 'second-level-sub-menu';
    } else if ( $class == 'sub-menu'  && $depth == 2) {
      $classes[ $key ] = 'third-level-sub-menu';
    }
}

return $classes;
}

/***
 * new pagination template for blog
 * @param $template
 * @param $class
 * @return string
 */
function my_navigation_template($template, $class)
{
    return '
            <nav class="%1$s blog__pagination" role="navigation">
                %3$s
            </nav>    
            ';
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);

/**
 * Limit excerpt to a number of characters
 * added read more btn
 *
 * @param string $excerpt
 * @return string
 */
function custom_short_excerpt($excerpt)
{
    global $post;
    return substr($excerpt, 0, 166) . '...';
}

add_filter('the_excerpt', 'custom_short_excerpt');

/**
 * added thumbnails for blog
 */
add_theme_support('post-thumbnails', array('post'));

/**
 * Custom excerpt for recent posts
 */
function the_recent_post_excerpt($post)
{
    $excerpt = $post['post_excerpt'] ? $post['post_excerpt'] : $post['post_content'];
    return substr(wp_strip_all_tags($excerpt), 0, 200) . '... <a class="article-preview__more" href="' . get_permalink($post['ID']) . '">Read More>></a>';
}

/**
 * get template part with custom data
 * @param $template
 * @param array $data
 */
function get_template_part_params($template, $data = array())
{
    extract($data);
    require locate_template($template . '.php');
}


/**
 * Следующие две функции позволяют отделять заголовок от основного контента
 */

/**
 * get title
 * @param $text
 * @return string|string[]|null
 */
function getPageTitle($text)
{
    $pattern = '/<h1[^>]*>\s*(.*?)\s*<\/h1>/i';
    preg_match($pattern, $text, $matches);
    $h1 = preg_replace('/<h1[^>]*?>([\\s\\S]*?)<\/h1>/',
        '\\1', $matches[0]);
    return $h1;
}

/**
 * get content without page title
 * @param $text
 * @return string|string[]|null
 */
function removeTitleFromContent($text)
{
    if (is_page() && !is_front_page()) {
        $pattern = '/<h1[^>]*>\s*(.*?)\s*<\/h1>/i';
        $result = preg_replace($pattern, "", $text);
        return $result;
    } else {
        return $text;
    }
}

add_theme_support('post-thumbnails');

//add_filter('the_content', 'removeTitleFromContent');

add_filter('the_content', 'replace_shortcode');
function replace_shortcode($content)
{
    return preg_replace('[\[ad-(.*)]', '', $content);
}

//include('postViews.php');

//Просчет приблизительного время прочтения поста
function estimated_reading_time()
{
    $post = get_post();
    $postcnt = strip_tags($post->post_content);
    $words = count(preg_split('/\s+/', $postcnt));
    $minutes = floor($words / 120);
    $seconds = floor($words % 120 / (120 / 60));
    if (1 <= $minutes) {
        $estimated_time = $minutes . ' min read';   // . ($minutes == 1 ? '' : 's')
    } else {
        $estimated_time = $seconds . ' s read';     // . ($seconds == 1 ? '' : 's')
    }
    return $estimated_time;
}



add_shortcode('random-posts', 'rand_posts');

add_filter('widget_text', 'do_shortcode');


// Do not include the above opening tag.
// WPOrbit code for lazy loading youtube videos. Visit: https://wporbit.net

function iframelazy($content) {
        if(is_single()) {
                
        $content = str_replace('src="https://www.youtube.com/embed/','class="klazyiframe" data-src="https://www.youtube.com/embed/',$content);

	ob_start();
?>
	<script>
	var ytflag = 0;
		
	var myListener = function () {
    	document.removeEventListener('mousemove', myListener, false);
    	lazyloadmyframes();
	};

	document.addEventListener('mousemove', myListener, false);

	window.addEventListener('scroll', function() {
	if(ytflag == 0){
		lazyloadmyframes();
		ytflag = 1;
	}
	});
		
function lazyloadmyframes(){	
	var ytv = document.getElementsByClassName("klazyiframe");
	for (var i = 0; i < ytv.length; i++) {
		ytv[i].src = ytv[i].getAttribute('data-src');
	}
};

</script>
<?php

	$jqueryappend = ob_get_contents();
	ob_end_clean();

}

    return $content.$jqueryappend;
};

add_filter('the_content', 'iframelazy');


function add_webp_upload_mime( $mimes ) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

add_filter( 'mime_types', 'add_webp_upload_mime' );

function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayabe_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
  return $result;
}

add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

function display_webp_in_media_library( $result, $path ) {
    if ( $result === false ) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if ( empty( $info ) ) {
            $result = false;
        } elseif ( ! in_array( $info[2], $displayable_image_types ) ) {
            $result = false;
        } else {
            $result = true;
        }
    }
    return $result;
}

add_filter( 'file_is_displayable_image', 'display_webp_in_media_library', 10, 2 );


function disable_wp_auto_p( $content ) {
    if (is_page_template(['pages/page-works.php']) || is_category('works') || is_page_template(['single-works.php'])) {
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
    }
    return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );


  function get_subcategory_name() {
    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
        foreach ( $categories as $category ) {
            if ( $category->parent > 0 ) {
                // Post belongs to a subcategory
                return $category->name;
            }
        }
    }

    return ''; // No subcategory found
}


function remove_wp_version() {
    remove_action('wp_head', 'wp_generator');
}
add_action('init', 'remove_wp_version');

add_filter('wpcf7_autop_or_not', '__return_false');