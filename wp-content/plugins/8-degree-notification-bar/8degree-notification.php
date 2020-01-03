<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
Plugin Name: 8Degree Notification Bar
Plugin URI:  http://8degreethemes.com/wordpress-plugins/8-degree-notification-bar/
Description: A plugin which is used to display notification on the site:
Version:     1.1.8
Author:      8 Degree Themes
Author URI:  http://8degreethemes.com
License:     GPL2
Domain Path: /languages/
Text Domain: edn-plugin
*/
/**
 * Declartion of necessary constants for plugin
 * */
if (!defined('EDN_IMAGE_DIR')) {
    define('EDN_IMAGE_DIR', plugin_dir_url(__FILE__) . 'images');
}
if (!defined('EDN_JS_DIR')) {
    define('EDN_JS_DIR', plugin_dir_url(__FILE__) . 'js');
}
if (!defined('EDN_CSS_DIR')) {
    define('EDN_CSS_DIR', plugin_dir_url(__FILE__) . 'css');
}
if (!defined('EDN_VERSION')) {
    define('EDN_VERSION', '1.1.8');
}
if (!defined('EDN_BXSLIDER_VERSION')) {
    define('EDN_BXSLIDER_VERSION', '4.1.2');
}
if (!defined('EDN_TICKER_MARQUE_VERSION')) {
    define('EDN_TICKER_MARQUE_VERSION', '1.0.0');
}
if (!defined('EDN_LANG_DIR')) {
    define('EDN_LANG_DIR', basename( dirname( __FILE__ ) ) . '/languages');
}

if (!class_exists('Edn_Class')) {

    class Edn_Class {
        var $edn_settings;
        /**
         * Initializes the plugin functions
         */
         function __construct() {
            $this->edn_settings = get_option('edn_settings');
            add_action( 'init', array($this, 'session_init') );
            register_activation_hook( __FILE__, array($this,'edn_activation' ));// Loads activating the EDN plugin
            add_action( 'init', array($this, 'myplugin_load_textdomain') ); //add Load plugin textdomain.
            add_action('admin_menu', array($this, 'my_edn_menu')); //Register The Plugin Menu
            add_action('admin_enqueue_scripts',array($this,'edn_admin_scripts')); //Registration of admin assets
            add_action('admin_post_edn_settings_action',array($this,'edn_settings_action')); //recieves the posted values from settings form
            add_action('admin_post_edn_restore_default', array($this, 'edn_restore_default')); //restores default settings;
            add_action('wp_footer', array($this, 'edn_notify_call_in_frontend')); //Register The redirect function to frontend
            add_action( 'wp_enqueue_scripts', array($this,'edn_front_scripts' )); //Registration of Frontend assets
            add_action( 'wp_ajax_ajax_subscribe', array($this,'my_action_callback' )); // Registration of subscribe ajax
            add_action( 'wp_ajax_nopriv_ajax_subscribe', array($this,'my_action_callback' )); // Registration of subscribe ajax
            add_action('template_redirect',array($this,'notification_subscribe')); // Registration of notification subscribe conform
        }
        
        /**
         * activating the EDN plugin
         **/
        function edn_activation(){
            
            /**
             * Create a new table for Subscriber 
             **/            
            global $wpdb;
        
        	$table_name = $wpdb->prefix . 'edn_subscriber';
        	
        	$charset_collate = $wpdb->get_charset_collate();   
            if ( is_multisite() ) {
                $current_blog = $wpdb->blogid;

            // Get all blogs in the network and activate plugin on each one
                $blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
                foreach ( $blog_ids as $blog_id ) {
                    switch_to_blog( $blog_id );
                                $charset_collate = $wpdb->get_charset_collate();
                               $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                                    email tinytext NOT NULL,
                                    date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
                                    active_code int,
                                    UNIQUE KEY id (id)
                                ) $charset_collate;";

                          
                                require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                                dbDelta( $sql );
                                restore_current_blog();
                }
            }else{
                 $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                                    email tinytext NOT NULL,
                                    date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
                                    active_code int,
                                    UNIQUE KEY id (id)
                                ) $charset_collate;";

                          
                                require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                                dbDelta( $sql );
            }
        	
        
            /**
             * Google font save
             * */
            $family = array('ABeeZee','Abel','Abril Fatface','Aclonica','Acme','Actor','Adamina','Advent Pro','Aguafina Script','Akronim','Aladin','Aldrich','Alef','Alegreya','Alegreya SC','Alegreya Sans','Alegreya Sans SC','Alex Brush','Alfa Slab One','Alice','Alike','Alike Angular','Allan','Allerta','Allerta Stencil','Allura','Almendra','Almendra Display','Almendra SC','Amarante','Amaranth','Amatic SC','Amethysta','Amiri','Amita','Anaheim','Andada','Andika','Angkor','Annie Use Your Telescope','Anonymous Pro','Antic','Antic Didone','Antic Slab','Anton','Arapey','Arbutus','Arbutus Slab','Architects Daughter','Archivo Black','Archivo Narrow','Arimo','Arizonia','Armata','Artifika','Arvo','Arya','Asap','Asar','Asset','Astloch','Asul','Atomic Age','Aubrey','Audiowide','Autour One','Average','Average Sans','Averia Gruesa Libre','Averia Libre','Averia Sans Libre','Averia Serif Libre','Bad Script','Balthazar','Bangers','Basic','Battambang','Baumans','Bayon','Belgrano','Belleza','BenchNine','Bentham','Berkshire Swash','Bevan','Bigelow Rules','Bigshot One','Bilbo','Bilbo Swash Caps','Biryani','Bitter','Black Ops One','Bokor','Bonbon','Boogaloo','Bowlby One','Bowlby One SC','Brawler','Bree Serif','Bubblegum Sans','Bubbler One','Buda','Buenard','Butcherman','Butterfly Kids','Cabin','Cabin Condensed','Cabin Sketch','Caesar Dressing','Cagliostro','Calligraffitti','Cambay','Cambo','Candal','Cantarell','Cantata One','Cantora One','Capriola','Cardo','Carme','Carrois Gothic','Carrois Gothic SC','Carter One','Caudex','Cedarville Cursive','Ceviche One','Changa One','Chango','Chau Philomene One','Chela One','Chelsea Market','Chenla','Cherry Cream Soda','Cherry Swash','Chewy','Chicle','Chivo','Cinzel','Cinzel Decorative','Clicker Script','Coda','Coda Caption','Codystar','Combo','Comfortaa','Coming Soon','Concert One','Condiment','Content','Contrail One','Convergence','Cookie','Copse','Corben','Courgette','Cousine','Coustard','Covered By Your Grace','Crafty Girls','Creepster','Crete Round','Crimson Text','Croissant One','Crushed','Cuprum','Cutive','Cutive Mono','Damion','Dancing Script','Dangrek','Dawning of a New Day','Days One','Dekko','Delius','Delius Swash Caps','Delius Unicase','Della Respira','Denk One','Devonshire','Dhurjati','Didact Gothic','Diplomata','Diplomata SC','Domine','Donegal One','Doppio One','Dorsa','Dosis','Dr Sugiyama','Droid Sans','Droid Sans Mono','Droid Serif','Duru Sans','Dynalight','EB Garamond','Eagle Lake','Eater','Economica','Eczar','Ek Mukta','Electrolize','Elsie','Elsie Swash Caps','Emblema One','Emilys Candy','Engagement','Englebert','Enriqueta','Erica One','Esteban','Euphoria Script','Ewert','Exo','Exo 2','Expletus Sans','Fanwood Text','Fascinate','Fascinate Inline','Faster One','Fasthand','Fauna One','Federant','Federo','Felipa','Fenix','Finger Paint','Fira Mono','Fira Sans','Fjalla One','Fjord One','Flamenco','Flavors','Fondamento','Fontdiner Swanky','Forum','Francois One','Freckle Face','Fredericka the Great','Fredoka One','Freehand','Fresca','Frijole','Fruktur','Fugaz One','GFS Didot','GFS Neohellenic','Gabriela','Gafata','Galdeano','Galindo','Gentium Basic','Gentium Book Basic','Geo','Geostar','Geostar Fill','Germania One','Gidugu','Gilda Display','Give You Glory','Glass Antiqua','Glegoo','Gloria Hallelujah','Goblin One','Gochi Hand','Gorditas','Goudy Bookletter 1911','Graduate','Grand Hotel','Gravitas One','Great Vibes','Griffy','Gruppo','Gudea','Gurajada','Habibi','Halant','Hammersmith One','Hanalei','Hanalei Fill','Handlee','Hanuman','Happy Monkey','Headland One','Henny Penny','Herr Von Muellerhoff','Hind','Holtwood One SC','Homemade Apple','Homenaje','IM Fell DW Pica','IM Fell DW Pica SC','IM Fell Double Pica','IM Fell Double Pica SC','IM Fell English','IM Fell English SC','IM Fell French Canon','IM Fell French Canon SC','IM Fell Great Primer','IM Fell Great Primer SC','Iceberg','Iceland','Imprima','Inconsolata','Inder','Indie Flower','Inika','Inknut Antiqua','Irish Grover','Istok Web','Italiana','Italianno','Jacques Francois','Jacques Francois Shadow','Jaldi','Jim Nightshade','Jockey One','Jolly Lodger','Josefin Sans','Josefin Slab','Joti One','Judson','Julee','Julius Sans One','Junge','Jura','Just Another Hand','Just Me Again Down Here','Kadwa','Kalam','Kameron','Kantumruy','Karla','Karma','Kaushan Script','Kavoon','Kdam Thmor','Keania One','Kelly Slab','Kenia','Khand','Khmer','Khula','Kite One','Knewave','Kotta One','Koulen','Kranky','Kreon','Kristi','Krona One','Kurale','La Belle Aurore','Laila','Lakki Reddy','Lancelot','Lateef','Lato','League Script','Leckerli One','Ledger','Lekton','Lemon','Libre Baskerville','Life Savers','Lilita One','Lily Script One','Limelight','Linden Hill','Lobster','Lobster Two','Londrina Outline','Londrina Shadow','Londrina Sketch','Londrina Solid','Lora','Love Ya Like A Sister','Loved by the King','Lovers Quarrel','Luckiest Guy','Lusitana','Lustria','Macondo','Macondo Swash Caps','Magra','Maiden Orange','Mako','Mallanna','Mandali','Marcellus','Marcellus SC','Marck Script','Margarine','Marko One','Marmelad','Martel','Martel Sans','Marvel','Mate','Mate SC','Maven Pro','McLaren','Meddon','MedievalSharp','Medula One','Megrim','Meie Script','Merienda','Merienda One','Merriweather','Merriweather Sans','Metal','Metal Mania','Metamorphous','Metrophobic','Michroma','Milonga','Miltonian','Miltonian Tattoo','Miniver','Miss Fajardose','Modak','Modern Antiqua','Molengo','Molle','Monda','Monofett','Monoton','Monsieur La Doulaise','Montaga','Montez','Montserrat','Montserrat Alternates','Montserrat Subrayada','Moul','Moulpali','Mountains of Christmas','Mouse Memoirs','Mr Bedfort','Mr Dafoe','Mr De Haviland','Mrs Saint Delafield','Mrs Sheppards','Muli','Mystery Quest','NTR','Neucha','Neuton','New Rocker','News Cycle','Niconne','Nixie One','Nobile','Nokora','Norican','Nosifer','Nothing You Could Do','Noticia Text','Noto Sans','Noto Serif','Nova Cut','Nova Flat','Nova Mono','Nova Oval','Nova Round','Nova Script','Nova Slim','Nova Square','Numans','Nunito','Odor Mean Chey','Offside','Old Standard TT','Oldenburg','Oleo Script','Oleo Script Swash Caps','Open Sans','Open Sans Condensed','Oranienbaum','Orbitron','Oregano','Orienta','Original Surfer','Oswald','Over the Rainbow','Overlock','Overlock SC','Ovo','Oxygen','Oxygen Mono','PT Mono','PT Sans','PT Sans Caption','PT Sans Narrow','PT Serif','PT Serif Caption','Pacifico','Palanquin','Palanquin Dark','Paprika','Parisienne','Passero One','Passion One','Pathway Gothic One','Patrick Hand','Patrick Hand SC','Patua One','Paytone One','Peddana','Peralta','Permanent Marker','Petit Formal Script','Petrona','Philosopher','Piedra','Pinyon Script','Pirata One','Plaster','Play','Playball','Playfair Display','Playfair Display SC','Podkova','Poiret One','Poller One','Poly','Pompiere','Pontano Sans','Poppins','Port Lligat Sans','Port Lligat Slab','Pragati Narrow','Prata','Preahvihear','Press Start 2P','Princess Sofia','Prociono','Prosto One','Puritan','Purple Purse','Quando','Quantico','Quattrocento','Quattrocento Sans','Questrial','Quicksand','Quintessential','Qwigley','Racing Sans One','Radley','Rajdhani','Raleway','Raleway Dots','Ramabhadra','Ramaraja','Rambla','Rammetto One','Ranchers','Rancho','Ranga','Rationale','Ravi Prakash','Redressed','Reenie Beanie','Revalia','Rhodium Libre','Ribeye','Ribeye Marrow','Righteous','Risque','Roboto','Roboto Condensed','Roboto Mono','Roboto Slab','Rochester','Rock Salt','Rokkitt','Romanesco','Ropa Sans','Rosario','Rosarivo','Rouge Script','Rozha One','Rubik','Rubik Mono One','Rubik One','Ruda','Rufina','Ruge Boogie','Ruluko','Rum Raisin','Ruslan Display','Russo One','Ruthie','Rye','Sacramento','Sahitya','Sail','Salsa','Sanchez','Sancreek','Sansita One','Sarala','Sarina','Sarpanch','Satisfy','Scada','Scheherazade','Schoolbell','Seaweed Script','Sevillana','Seymour One','Shadows Into Light','Shadows Into Light Two','Shanti','Share','Share Tech','Share Tech Mono','Shojumaru','Short Stack','Siemreap','Sigmar One','Signika','Signika Negative','Simonetta','Sintony','Sirin Stencil','Six Caps','Skranji','Slabo 13px','Slabo 27px','Slackey','Smokum','Smythe','Sniglet','Snippet','Snowburst One','Sofadi One','Sofia','Sonsie One','Sorts Mill Goudy','Source Code Pro','Source Sans Pro','Source Serif Pro','Special Elite','Spicy Rice','Spinnaker','Spirax','Squada One','Sree Krushnadevaraya','Stalemate','Stalinist One','Stardos Stencil','Stint Ultra Condensed','Stint Ultra Expanded','Stoke','Strait','Sue Ellen Francisco','Sumana','Sunshiney','Supermercado One','Sura','Suranna','Suravaram','Suwannaphum','Swanky and Moo Moo','Syncopate','Tangerine','Taprom','Tauri','Teko','Telex','Tenali Ramakrishna','Tenor Sans','Text Me One','The Girl Next Door','Tienne','Tillana','Timmana','Tinos','Titan One','Titillium Web','Trade Winds','Trocchi','Trochut','Trykker','Tulpen One','Ubuntu','Ubuntu Condensed','Ubuntu Mono','Ultra','Uncial Antiqua','Underdog','Unica One','UnifrakturCook','UnifrakturMaguntia','Unkempt','Unlock','Unna','VT323','Vampiro One','Varela','Varela Round','Vast Shadow','Vesper Libre','Vibur','Vidaloka','Viga','Voces','Volkhov','Vollkorn','Voltaire','Waiting for the Sunrise','Wallpoet','Walter Turncoat','Warnes','Wellfleet','Wendy One','Wire One','Work Sans','Yanone Kaffeesatz','Yantramanav','Yellowtail','Yeseva One','Yesteryear','Zeyada');
            $edn_fonts = get_option('edn_fonts');
            if (empty($edn_fonts)) {
                update_option('edn_fonts', $family);
            }
            
            /**
             * Load Default Settings
             * */
            if (!get_option('edn_settings')) {
                $edn_settings = $this->get_default_settings();
                update_option('edn_settings', $edn_settings);
            }
            
        }
                
        /**
         * Load plugin textdomain.
         *
         * @since 1.0.8
         */
        function myplugin_load_textdomain() {
          load_plugin_textdomain('edn-plugin', FALSE, EDN_LANG_DIR);
        }
        
        /**
         * Registration of admin assets 
         * */
        function edn_admin_scripts(){
            if(isset($_GET['page']) && $_GET['page']=='edn-plugin'){
                wp_enqueue_style( 'wp-color-picker' );// Css rules for Color Picker
                wp_enqueue_style( 'edn-admin-css', EDN_CSS_DIR . '/backend/backend.css', array(), EDN_VERSION );
                 wp_enqueue_script('edn-webfont', '//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js');
                wp_enqueue_script( 'edn-admin-js',EDN_JS_DIR.'/backend/backend.js',array( 'jquery', 'jquery-ui-sortable', 'wp-color-picker' ),EDN_VERSION);    
            }
            wp_enqueue_style( 'fontawesome-css', EDN_CSS_DIR . '/font-awesome/font-awesome.min.css', false, EDN_VERSION );
        }

        /**
         * Registration of Frontend assets
         * */
         function edn_front_scripts() {
            wp_enqueue_style('edn-font-awesome',EDN_CSS_DIR.'/font-awesome/font-awesome.css');
            wp_enqueue_style('edn-frontend-style', EDN_CSS_DIR . '/frontend/frontend.css');
            wp_enqueue_style('edn-frontend-bxslider-style', EDN_CSS_DIR . '/frontend/jquery.bxslider.css');
            wp_enqueue_style('edn-google-fonts-style', add_query_arg($this->font_re_form(), "//fonts.googleapis.com/css"));
            wp_enqueue_script('edn-frontend-bxslider-js',EDN_JS_DIR.'/frontend/jquery.bxslider.min.js',array('jquery'),EDN_BXSLIDER_VERSION);
            wp_enqueue_script('edn-marque-js',EDN_JS_DIR.'/frontend/jquery.marquee.min.js',array('edn-frontend-bxslider-js'),EDN_TICKER_MARQUE_VERSION);
            wp_enqueue_script('edn-frontend-js',EDN_JS_DIR.'/frontend/frontend.js',array('edn-marque-js'),EDN_VERSION);
            $edn_data = $this->edn_settings;
            if(isset($edn_data['enable_show_once'])){
              $check_show_once  = $edn_data['enable_show_once'];
            }else{
             $check_show_once  = 0;
            }
            $nb_controls  = $edn_data['nb_controls'];
            wp_localize_script( 'edn-frontend-js', 'ajaxsubs', array(
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'check_show_once' =>  $check_show_once,
                'control_type'    => $nb_controls 
            ));
         }
         
         /**
          * remove space of google font for enque
          * */
         function font_re_form()
         {
            $fonts = $this->edn_settings['notification_font'];
            $fonts_final = str_replace(' ', '+', $fonts);
            $query_args = array(
                 'family' => $fonts_final,
            );
            return $query_args;
         }
        
        /**
         * Plugin Menu Registration
         * */
         
         function my_edn_menu(){
            add_menu_page( __('Notification Bar','edn-plugin'), __('Notification Bar','edn-plugin'),'manage_options','edn-plugin', array($this, 'dn_setting_page'));//, EDN_IMAGE_DIR.'/edn_notify_icon.png' );
         }
         
         /**
          * Plugin Setting Page
          * */
          
         function dn_setting_page(){
            include_once('inc/backend/settings-page.php');
         }
         
         /**
          *  Saves settings to database
          **/
         function edn_settings_action(){
            if(!empty($_POST) && wp_verify_nonce($_POST['edn_nonce_field'],'edn-nonce')){
                include_once('inc/backend/save-settings.php');
            }
            else{
            die('No script kiddies please!');
            }
         }
         
         /**
          * Prints array in pre format
          * */
         function edn_print_array($array){
            echo "<pre>";
            print_r($array);
            echo "</pre>";
         }
         
        /**
         * Starts the session
         */
         function session_init() {
            if ( !session_id() && !headers_sent() ) {
              session_start();
              }
         }
         
         
        /**
         * Restores the default
         */
        function edn_restore_default() {
            $nonce = $_REQUEST['_wpnonce'];
            if(!empty($_GET) && wp_verify_nonce( $nonce, 'edn-restore-default-nonce' ))
            {
                $edn_settings = $this->get_default_settings();
                update_option('edn_settings', $edn_settings);
                $_SESSION['edn_message'] = __('Default Settings Restored Successfully', 'edn-plugin');
                wp_redirect(admin_url() . 'admin.php?page=edn-plugin');
            }
        }

        /**
         * Returns Default Settings
         */
        function get_default_settings() {
            $edn_settings = array(
                                'edn_optons'=>'',
                                'edn_mobile_optons' => '',
                                'social_network'=>'',
                                'socail_controls'=>array('facebook' =>'',
                                                        'twitter' =>'',
                                                        'googlePlus' =>'',
                                                        'linkedin' => ''),
                                'social_heading_text'=>'Follow Us',
                                'socail_icons' => array('facebook' => array('url'=>''),
                                                        'twitter' => array('url'=>''),
                                                        'googlePlus' => array('url'=>''),
                                                        'linkedin' => array('url'=>'')),
                                'social_order' => array('facebook', 'twitter','linkedin','googlePlus'),
                                'edn_type'=>'1',
                                'display_mode'=>'1',
                                'noti_text'=>'',
                                'slider_text'=>array('[0]'=>''),
                                'slide_duration'=>'4000',
                                'slide_transition'=>'500',
                                'slider_controls'=>'1',
                                'ticker_hover'=>'',
                                'ticker_text'=>'',
                                'ticker_speed'=>'5000',
                                'news_heading_text'=>'',
                                'email_placeholder'=>'',
                                'subs_button_text'=>'Subscribe',
                                'thank_note'=>'Thank you for subscribe',
                                'check_confirm'=>'',
                                'nb_controls'=>'1',
                                'enable_show_once' => '0',
                                'noti_placement'=>'Top',
                                'noti_height'=>'50px',
                                'edn_background_color'=>'',
                                'edn_font_color'=>'',
                                'social_bg_color'=>'',
                                'social_bg_hover_color'=>'',
                                'social_font_color'=>'',
                                'social_font_hover_color'=>'',
                                'notification_font'=>'Roboto',
                                'font_size'=>'16',
            );
            return $edn_settings;
        }
         
        /**
         * Function to redirect to notification bar
         */
         function edn_notify_call_in_frontend(){
             include_once( 'inc/frontend/frontend.php' );
         }
         
         /**
          * Function of subscribe ajax
          * */
        function my_action_callback() {
        	global $wpdb; // this is how you get access to the database
        
        	$email = $_POST['email'];
            $nonce = $_POST['nonce'];
            $date = date("Y-m-d H:i:s");
            $to = $email;
            $subject = "Subscribe Conformation";
            $act_code = rand(0,1000);
            $url = site_url().'?code='.$act_code.'&edn_subs_nonce_field='.$nonce.'&email='.$email;
            $message = "
                    <html>
                    <body>
                        Thanks for Subscribing! Please Click the <a href='".$url."'>Conform</a> link to get confirmed.
                    </body>
                    <html>
                    ";
            
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From:8Degre Notification <8degree@notification.com>' . "\r\n";
            if($this->edn_settings['check_confirm']){
                $table_name = $wpdb->prefix . 'edn_subscriber';
                $search_email = $wpdb->get_results( " SELECT * FROM $table_name WHERE email = '$email'");
                if($search_email)
                {
                    return 0;//aready subscribe.
                    wp_redirect( home_url() ); exit;
                }else{
                    wp_mail( $to, $subject, $message, $headers );
                    $wpdb->insert( $table_name, array( 'active_code' => $act_code, 'date'=>$date) );
                    echo '1'; 
                }
                
            }else{
                $table_name = $wpdb->prefix . 'edn_subscriber';
                $search_email = $wpdb->get_results( " SELECT * FROM $table_name WHERE email = '$email'");
                if($search_email)
                {
                    return 0;//aready subscribe.
                }else{
                    
                    $query= $wpdb->insert( $table_name, array( 'email' => $email , 'date' => $date ) );
                    //return $query;
                }
            }
        	die(); // this is required to terminate immediately and return a proper response
        }
        /**
         * Function to notification subscribe conform
         * */
        function notification_subscribe(){
            if(!empty($_GET) && wp_verify_nonce($_GET['edn_subs_nonce_field'],'edn-subs-nonce')){
                global $wpdb; // this is how you get access to the database
                $code = $_GET['code'];
                $email = $_GET['email'];
                $table_name = $wpdb->prefix . 'edn_subscriber';
                $chcek_code = $wpdb->get_results( " SELECT * FROM $table_name WHERE active_code = '$code'");
                if($chcek_code)
                {
                    $search_email = $wpdb->get_results( " SELECT * FROM $table_name WHERE email = '$email'");
                    if($search_email)
                    {
                        $_SESSION['edn-subs-sms']=__('You have already subscribe.','edn-plugin');
                        wp_redirect( home_url() ); exit;
                    }else{
                        $date = date("Y-m-d H:i:s");
                        $wpdb->delete( $table_name, array( 'active_code' => $code ), array( '%d' ) );
                        $query= $wpdb->insert( $table_name, array( 'email' => $email , 'date' => $date ) );
                        $_SESSION['edn-subs-sms']=__('Successfully Subscribe','edn-plugin');
                        wp_redirect( home_url() ); exit;
                    }
                }else{
                        $_SESSION['edn-subs-sms']=__('subscribe fail.','edn-plugin');
                        die();
                }
            }
        }
        
    }
    $edn_object = new Edn_Class(); //initialization of plugin
}
 
