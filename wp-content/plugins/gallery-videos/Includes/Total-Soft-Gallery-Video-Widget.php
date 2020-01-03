<?php
class Total_Soft_Gallery_Video extends WP_Widget
	{
		function __construct()
		{
			$params=array('name'=>'Total Soft Gallery Video','description'=>'This is the widget of Total Soft Gallery Video plugin');
			parent::__construct('Total_Soft_Gallery_Video','',$params);
		}
		function form($instance)
		{
			$defaults = array('Total_Soft_Gallery_Video'=>'');
			$instance = wp_parse_args((array)$instance, $defaults);

			$Gallery_Video = $instance['Gallery_Video'];
			$instance['TS_GV_Theme_Name'] = '';
			?>
			<div>
				<p>
					Gallery Video Title:
					<select name="<?php echo $this->get_field_name('Gallery_Video'); ?>" class="widefat">
						<?php
							global $wpdb;

							$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
							$Total_Soft_Gallery_Video = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d", 0));

							foreach ($Total_Soft_Gallery_Video as $Total_Soft_Gallery_Video1)
							{
								?> <option value="<?php echo $Total_Soft_Gallery_Video1->id; ?>"> <?php echo $Total_Soft_Gallery_Video1->TotalSoftGallery_Video_Gallery_Title; ?> </option> <?php
							}
						?>
					</select>
				</p>
			</div>
			<?php
		}
		function widget($args,$instance)
		{
			extract($args);
			$Total_Soft_Gallery_Video = empty($instance['Gallery_Video']) ? '' : $instance['Gallery_Video'];
			$Total_Soft_Gallery_VideoT = empty($instance['TS_GV_Theme_Name']) ? '' : $instance['TS_GV_Theme_Name'];
			require_once('Total-Soft-Gallery-Video-Install.php');

			global $wpdb;
			$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
			$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";
			$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
			$table_name4_1 = $wpdb->prefix . "totalsoft_galleryv_dbt_1";
			$table_name4_2 = $wpdb->prefix . "totalsoft_galleryv_dbt_2";
			$table_name4_3 = $wpdb->prefix . "totalsoft_galleryv_dbt_3";
			$table_name4_4 = $wpdb->prefix . "totalsoft_galleryv_dbt_4";

			$Total_Soft_GalleryV_Man = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $Total_Soft_Gallery_Video));
			if($Total_Soft_Gallery_VideoT == '')
			{
				$Total_Soft_Gallery_VideoTh = $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_Option;

				$Total_Soft_GalleryV_Videos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));
				$Total_Soft_GalleryV_Type = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName = %s", $Total_Soft_Gallery_VideoTh));

				$TotalSoftGallery_Video_Opt1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
				$TotalSoftGallery_Video_Opt2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}

			else if($Total_Soft_Gallery_VideoT == 'true')
			{
				$Total_Soft_GalleryV_Videos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));
				$Total_Soft_GalleryV_Type = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_3 WHERE id > %d", 0));

				$TotalSoftGallery_Video_Opt1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_3 WHERE id > %d", 0));
				$TotalSoftGallery_Video_Opt2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_4 WHERE id > %d", 0));
			}
			else
			{
				$Total_Soft_Gallery_VideoTh = $Total_Soft_Gallery_VideoT;

				$Total_Soft_GalleryV_Videos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));
				$Total_Soft_GalleryV_Type = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName = %s", $Total_Soft_Gallery_VideoTh));

				$TotalSoftGallery_Video_Opt1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
				$TotalSoftGallery_Video_Opt2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}
			echo $before_widget;
			?>
				<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/totalsoft.css',__FILE__);?>">
				<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Abhaya+Libre|Abril+Fatface|Aclonica|Acme|Actor|Adamina|Advent+Pro|Aguafina+Script|Akronim|Aladin|Aldrich|Alef|Alegreya|Alegreya+SC|Alegreya+Sans|Alegreya+Sans+SC|Alex+Brush|Alfa+Slab+One|Alice|Alike|Alike+Angular|Allan|Allerta|Allerta+Stencil|Allura|Almendra|Almendra+Display|Almendra+SC|Amarante|Amaranth|Amatic+SC|Amethysta|Amiko|Amiri|Amita|Anaheim|Andada|Andika|Angkor|Annie+Use+Your+Telescope|Anonymous+Pro|Antic|Antic+Didone|Antic+Slab|Anton|Arapey|Arbutus|Arbutus+Slab|Architects+Daughter|Archivo|Archivo+Black|Archivo+Narrow|Aref+Ruqaa|Arima+Madurai|Arimo|Arizonia|Armata|Arsenal|Artifika|Arvo|Arya|Asap|Asap+Condensed|Asar|Asset|Assistant|Astloch|Asul|Athiti|Atma|Atomic+Age|Aubrey|Audiowide|Autour+One|Average|Average+Sans|Averia+Gruesa+Libre|Averia+Libre|Averia+Sans+Libre|Averia+Serif+Libre|Bad+Script|Bahiana|Baloo|Baloo+Bhai|Baloo+Bhaijaan|Baloo+Bhaina|Baloo+Chettan|Baloo+Da|Baloo+Paaji|Baloo+Tamma|Baloo+Tammudu|Baloo+Thambi|Balthazar|Bangers|Barlow|Barlow+Condensed|Barlow+Semi+Condensed|Barrio|Basic|Battambang|Baumans|Bayon|Belgrano|Bellefair|Belleza|BenchNine|Bentham|Berkshire+Swash|Bevan|Bigelow+Rules|Bigshot+One|Bilbo|Bilbo+Swash+Caps|BioRhyme|BioRhyme+Expanded|Biryani|Bitter|Black+And+White+Picture|Black+Han+Sans|Black+Ops+One|Bokor|Bonbon|Boogaloo|Bowlby+One|Bowlby+One+SC|Brawler|Bree+Serif|Bubblegum+Sans|Bubbler+One|Buda:300|Buenard|Bungee|Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade|Butcherman|Butterfly+Kids|Cabin|Cabin+Condensed|Cabin+Sketch|Caesar+Dressing|Cagliostro|Cairo|Calligraffitti|Cambay|Cambo|Candal|Cantarell|Cantata+One|Cantora+One|Capriola|Cardo|Carme|Carrois+Gothic|Carrois+Gothic+SC|Carter+One|Catamaran|Caudex|Caveat|Caveat+Brush|Cedarville+Cursive|Ceviche+One|Changa|Changa+One|Chango|Chathura|Chau+Philomene+One|Chela+One|Chelsea+Market|Chenla|Cherry+Cream+Soda|Cherry+Swash|Chewy|Chicle|Chivo|Chonburi|Cinzel|Cinzel+Decorative|Clicker+Script|Coda|Coda+Caption:800|Codystar|Coiny|Combo|Comfortaa|Coming+Soon|Concert+One|Condiment|Content|Contrail+One|Convergence|Cookie|Copse|Corben|Cormorant|Cormorant+Garamond|Cormorant+Infant|Cormorant+SC|Cormorant+Unicase|Cormorant+Upright|Courgette|Cousine|Coustard|Covered+By+Your+Grace|Crafty+Girls|Creepster|Crete+Round|Crimson+Text|Croissant+One|Crushed|Cuprum|Cute+Font|Cutive|Cutive+Mono|Damion|Dancing+Script|Dangrek|David+Libre|Dawning+of+a+New+Day|Days+One|Delius|Delius+Swash+Caps|Delius+Unicase|Della+Respira|Denk+One|Devonshire|Dhurjati|Didact+Gothic|Diplomata|Diplomata+SC|Do+Hyeon|Dokdo|Domine|Donegal+One|Doppio+One|Dorsa|Dosis|Dr+Sugiyama|Duru+Sans|Dynalight|EB+Garamond|Eagle+Lake|East+Sea+Dokdo|Eater|Economica|Eczar|El+Messiri|Electrolize|Elsie|Elsie+Swash+Caps|Emblema+One|Emilys+Candy|Encode+Sans|Encode+Sans+Condensed|Encode+Sans+Expanded|Encode+Sans+Semi+Condensed|Encode+Sans+Semi+Expanded|Engagement|Englebert|Enriqueta|Erica+One|Esteban|Euphoria+Script|Ewert|Exo|Expletus+Sans|Fanwood+Text|Farsan|Fascinate|Fascinate+Inline|Faster+One|Fasthand|Fauna+One|Faustina|Federant|Federo|Felipa|Fenix|Finger+Paint|Fira+Mono|Fira+Sans|Fira+Sans+Condensed|Fira+Sans+Extra+Condensed|Fjalla+One|Fjord+One|Flamenco|Flavors|Fondamento|Fontdiner+Swanky|Forum|Francois+One|Frank+Ruhl+Libre|Freckle+Face|Fredericka+the+Great|Fredoka+One|Freehand|Fresca|Frijole|Fruktur|Fugaz+One|GFS+Didot|GFS+Neohellenic|Gabriela|Gaegu|Gafata|Galada|Galdeano|Galindo|Gamja+Flower|Gentium+Basic|Gentium+Book+Basic|Geo|Geostar|Geostar+Fill|Germania+One|Gidugu|Gilda+Display|Give+You+Glory|Glass+Antiqua|Glegoo|Gloria+Hallelujah|Goblin+One|Gochi+Hand|Gorditas|Gothic+A1|Graduate|Grand+Hotel|Gravitas+One|Great+Vibes|Griffy|Gruppo|Gudea|Gugi|Gurajada|Habibi|Halant|Hammersmith+One|Hanalei|Hanalei+Fill|Handlee|Hanuman|Happy+Monkey|Harmattan|Headland+One|Heebo|Henny+Penny|Herr+Von+Muellerhoff|Hi+Melody|Hind|Holtwood+One+SC|Homemade+Apple|Homenaje|IBM+Plex+Mono|IBM+Plex+Sans|IBM+Plex+Sans+Condensed|IBM+Plex+Serif|IM+Fell+DW+Pica|IM+Fell+DW+Pica+SC|IM+Fell+Double+Pica|IM+Fell+Double+Pica+SC|IM+Fell+English|IM+Fell+English+SC|IM+Fell+French+Canon|IM+Fell+French+Canon+SC|IM+Fell+Great+Primer|IM+Fell+Great+Primer+SC|Iceberg|Iceland|Imprima|Inconsolata|Inder|Indie+Flower|Inika|Irish+Grover|Istok+Web|Italiana|Italianno|Itim|Jacques+Francois|Jacques+Francois+Shadow|Jaldi|Jim+Nightshade|Jockey+One|Jolly+Lodger|Jomhuria|Josefin+Sans|Josefin+Slab|Joti+One|Jua|Judson|Julee|Julius+Sans+One|Junge|Jura|Just+Another+Hand|Just+Me+Again+Down+Here|Kadwa|Kalam|Kameron|Kanit|Kantumruy|Karla|Karma|Katibeh|Kaushan+Script|Kavivanar|Kavoon|Kdam+Thmor|Keania+One|Kelly+Slab|Kenia|Khand|Khmer|Khula|Kirang+Haerang|Kite+One|Knewave|Kotta+One|Koulen|Kranky|Kreon|Kristi|Krona+One|Kumar+One|Kumar+One+Outline|Kurale|La+Belle+Aurore|Laila|Lakki+Reddy|Lalezar|Lancelot|Lateef|Lato|League+Script|Leckerli+One|Ledger|Lekton|Lemon|Lemonada|Libre+Baskerville|Libre+Franklin|Life+Savers|Lilita+One|Lily+Script+One|Limelight|Linden+Hill|Lobster|Lobster+Two|Londrina+Outline|Londrina+Shadow|Londrina+Sketch|Londrina+Solid|Lora|Love+Ya+Like+A+Sister|Loved+by+the+King|Lovers+Quarrel|Luckiest+Guy|Lusitana|Lustria|Macondo|Macondo+Swash+Caps|Mada|Magra|Maiden+Orange|Maitree|Mako|Mallanna|Mandali|Manuale|Marcellus|Marcellus+SC|Marck+Script|Margarine|Marko+One|Marmelad|Martel|Martel+Sans|Marvel|Mate|Mate+SC|Maven+Pro|McLaren|Meddon|MedievalSharp|Medula+One|Meera+Inimai|Megrim|Meie+Script|Merienda|Merienda+One|Merriweather|Merriweather+Sans|Metal|Metal+Mania|Metamorphous|Metrophobic|Michroma|Milonga|Miltonian|Miltonian+Tattoo|Mina|Miniver|Miriam+Libre|Mirza|Miss+Fajardose|Mitr|Modak|Modern+Antiqua|Mogra|Molengo|Molle:400i|Monda|Monofett|Monoton|Monsieur+La+Doulaise|Montaga|Montez|Montserrat|Montserrat+Alternates|Montserrat+Subrayada|Moul|Moulpali|Mountains+of+Christmas|Mouse+Memoirs|Mr+Bedfort|Mr+Dafoe|Mr+De+Haviland|Mrs+Saint+Delafield|Mrs+Sheppards|Mukta|Muli|Mystery+Quest|NTR|Nanum+Brush+Script|Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Nanum+Pen+Script|Neucha|Neuton|New+Rocker|News+Cycle|Niconne|Nixie+One|Nobile|Nokora|Norican|Nosifer|Nothing+You+Could+Do|Noticia+Text|Noto+Sans|Noto+Serif|Nova+Cut|Nova+Flat|Nova+Mono|Nova+Oval|Nova+Round|Nova+Script|Nova+Slim|Nova+Square|Numans|Nunito|Nunito+Sans|Odor+Mean+Chey|Offside|Old+Standard+TT|Oldenburg|Oleo+Script|Oleo+Script+Swash+Caps|Open+Sans|Open+Sans+Condensed:300|Oranienbaum|Orbitron|Oregano|Orienta|Original+Surfer|Oswald|Over+the+Rainbow|Overlock|Overlock+SC|Overpass|Overpass+Mono|Ovo|Oxygen|Oxygen+Mono|PT+Mono|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|PT+Serif+Caption|Pacifico|Padauk|Palanquin|Palanquin+Dark|Pangolin|Paprika|Parisienne|Passero+One|Passion+One|Pathway+Gothic+One|Patrick+Hand|Patrick+Hand+SC|Pattaya|Patua+One|Pavanam|Paytone+One|Peddana|Peralta|Permanent+Marker|Petit+Formal+Script|Petrona|Philosopher|Piedra|Pinyon+Script|Pirata+One|Plaster|Play|Playball|Playfair+Display|Playfair+Display+SC|Podkova|Poiret+One|Poller+One|Poly|Pompiere|Pontano+Sans|Poor+Story|Poppins|Port+Lligat+Sans|Port+Lligat+Slab|Pragati+Narrow|Prata|Preahvihear|Pridi|Princess+Sofia|Prociono|Prompt|Prosto+One|Proza+Libre|Puritan|Purple+Purse|Quando|Quantico|Quattrocento|Quattrocento+Sans|Questrial|Quicksand|Quintessential|Qwigley|Racing+Sans+One|Radley|Rajdhani|Rakkas|Raleway|Raleway+Dots|Ramabhadra|Ramaraja|Rambla|Rammetto+One|Ranchers|Rancho|Ranga|Rasa|Rationale|Ravi+Prakash|Redressed|Reem+Kufi|Reenie+Beanie|Revalia|Rhodium+Libre|Ribeye|Ribeye+Marrow|Righteous|Risque|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Rochester|Rock+Salt|Rokkitt|Romanesco|Ropa+Sans|Rosario|Rosarivo|Rouge+Script|Rozha+One|Rubik|Rubik+Mono+One|Ruda|Rufina|Ruge+Boogie|Ruluko|Rum+Raisin|Ruslan+Display|Russo+One|Ruthie|Rye|Sacramento|Sahitya|Sail|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Salsa|Sanchez|Sancreek|Sansita|Sarala|Sarina|Sarpanch|Satisfy|Scada|Scheherazade|Schoolbell|Scope+One|Seaweed+Script|Secular+One|Sedgwick+Ave|Sedgwick+Ave+Display|Sevillana|Seymour+One|Shadows+Into+Light|Shadows+Into+Light+Two|Shanti|Share|Share+Tech|Share+Tech+Mono|Shojumaru|Short+Stack|Shrikhand|Siemreap|Sigmar+One|Signika|Signika+Negative|Simonetta|Sintony|Sirin+Stencil|Six+Caps|Skranji|Slackey|Smokum|Smythe|Sniglet|Snippet|Snowburst+One|Sofadi+One|Sofia|Song+Myung|Sonsie+One|Sorts+Mill+Goudy|Source+Code+Pro|Source+Sans+Pro|Source+Serif+Pro|Space+Mono|Special+Elite|Spectral|Spectral+SC|Spicy+Rice|Spinnaker|Spirax|Squada+One|Sree+Krushnadevaraya|Sriracha|Stalemate|Stalinist+One|Stardos+Stencil|Stint+Ultra+Condensed|Stint+Ultra+Expanded|Stoke|Strait|Stylish|Sue+Ellen+Francisco|Suez+One|Sumana|Sunflower:300|Sunshiney|Supermercado+One|Sura|Suranna|Suravaram|Suwannaphum|Swanky+and+Moo+Moo|Syncopate|Tajawal|Tangerine|Taprom|Tauri|Taviraj|Teko|Telex|Tenali+Ramakrishna|Tenor+Sans|Text+Me+One|The+Girl+Next+Door|Tienne|Tillana|Timmana|Tinos|Titan+One|Titillium+Web|Trade+Winds|Trirong|Trocchi|Trochut|Trykker|Tulpen+One|Ubuntu|Ubuntu+Condensed|Ubuntu+Mono|Ultra|Uncial+Antiqua|Underdog|Unica+One|UnifrakturCook:700|UnifrakturMaguntia|Unkempt|Unlock|Unna|VT323|Vampiro+One|Varela|Varela+Round|Vast+Shadow|Vesper+Libre|Vibur|Vidaloka|Viga|Voces|Volkhov|Vollkorn|Vollkorn+SC|Voltaire|Waiting+for+the+Sunrise|Wallpoet|Walter+Turncoat|Warnes|Wellfleet|Wendy+One|Wire+One|Work+Sans|Yanone+Kaffeesatz|Yantramanav|Yatra+One|Yellowtail|Yeon+Sung|Yeseva+One|Yesteryear|Yrsa|Zeyada|Zilla+Slab|Zilla+Slab+Highlight" rel="stylesheet">
			<?php
			if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16 == 'true'){ $TotalSoft_GV_1_16 = 'inline'; }else{ $TotalSoft_GV_1_16 = 'none'; }
			if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '1'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-angle-double-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '2'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-angle-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '3'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-arrow-circle-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '4'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '5'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-arrow-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '6'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-caret-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '7'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-caret-square-o-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '8'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-chevron-circle-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '9'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-chevron-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '10'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-hand-o-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '11'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-long-arrow-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-long-arrow-right'; }
			if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '1'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-angle-double-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '2'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-angle-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '3'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-arrow-circle-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '4'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '5'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-arrow-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '6'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-caret-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '7'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-caret-square-o-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '8'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-chevron-circle-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '9'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-chevron-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '10'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-hand-o-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '11'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-long-arrow-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-long-arrow-right'; }
			if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == '1'){ $TotalSoft_GV_2_06_Del = 'totalsoft totalsoft-times';}
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == '2'){ $TotalSoft_GV_2_06_Del = 'totalsoft totalsoft-times-circle';}
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == '3'){ $TotalSoft_GV_2_06_Del = 'totalsoft totalsoft-times-circle-o';}
			if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 1){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-angle-double-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 2){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-angle-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 3){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-arrow-circle-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 4){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 5){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-arrow-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 6){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-caret-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 7){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-caret-square-o-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 8){ $TotalSoft_PS_Left_Icon = 'totalsoft-chevron-circle-left'; $TotalSoft_PS_Right_Icon = 'totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 9){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-chevron-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 10){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-hand-o-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 11){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-long-arrow-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-long-arrow-right';}
			if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_CS_Video_ArrShow == 'true'){ $TotalSoft_CS_Video_ArrShow = 'inline-block'; }else{ $TotalSoft_CS_Video_ArrShow = 'none'; }
			for($i = 0; $i < count($Total_Soft_GalleryV_Videos); $i++)
			{
				if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL,"youtube"))
				{
					$rest = substr($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL, 0, -13);
					$link = $rest.'maxresdefault.jpg';
					if(@fopen("$link",'r')) { $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL = $link; }
				}
			}
		  
		 $arr = [$Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType];
	
		  for($i=0;$i<count($arr);$i++){
		  	if($arr[$i]=='Grid Video Gallery' || $arr[$i] == 'LightBox Video Gallery'){
				require(dirname(__FILE__) . '/TS-VG-WGL.php');
		  	}
			else if($arr[$i] == 'Thumbnails Video' || $arr[$i] == 'Content Popup'){
		  		require(dirname(__FILE__) . '/TS-VG-WTC.php');
		  	}
		  	else if($arr[$i] == 'Elastic Gallery' || $arr[$i] == 'Fancy Gallery'){
		  		require(dirname(__FILE__) . '/TS-VG-WEF.php');
		  	}
            else if($arr[$i] == 'Parallax Engine' || $arr[$i] == 'Classic Gallery' || $arr[$i] == 'Space Gallery'){
                require(dirname(__FILE__) . '/TS-VG-WPC.php');
            }
		  }
			?><?php
		}
	}
