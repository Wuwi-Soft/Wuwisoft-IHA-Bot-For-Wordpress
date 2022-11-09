<?php


function wuwisoft_getIhaCurl($IHAUrl)
{
	$ch = curl_init();

	curl_setopt( $ch, CURLOPT_COOKIEJAR, null );

	curl_setopt( $ch, CURLOPT_COOKIESESSION, true );

	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );

	curl_setopt( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0' );

	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 10 );

	curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );

	curl_setopt($ch,CURLOPT_URL,$IHAUrl);

	$exec = curl_exec($ch);
	curl_close($ch);

	$xml=simplexml_load_string($exec) or die("Error: Cannot create object");

	if ($xml === false) {
		echo "Failed loading XML: ";
		foreach(libxml_get_errors() as $error) {
			echo "<br>", $error->message;
		}
	} else {
		/*Öğeler*/
		print_r($xml->channel);
//		foreach($xml->channel->item as $row)
//		{
//			?>
<!--				<div class="title">-->
<!--					<h1>--><?php //echo $row->Title; ?><!--</h1>-->
<!--				</div>-->
<!--				<div class="kategori">-->
<!--					<p>-->
<!--						<span>--><?php //echo $row->UstKategori; ?><!-- / --><?php //echo $row->Kategori; ?><!--</span>-->
<!--					</p>-->
<!--				</div>-->
<!---->
<!--				<div class="aciklama">--><?php //echo $row->description; ?><!--</div>-->
<!--				<div class="tarihSaat">--><?php //echo $row->pubDate; ?><!-- / --><?php //echo $row->sonHaberGuncellenmeTarihi; ?><!--</div>-->
<!---->
<!--			--><?php //if(count($row->images) > 0){ ?>
<!--				<div class="images">-->
<!--					--><?php
//						foreach($row->images as $image)
//						{
//							?>
<!--								<img src="--><?php //echo $image; ?><!--" width="150" height="150" />-->
<!--							--><?php
//						}
//					?>
<!--				</div>-->
<!--			--><?php //} ?>
<!--			--><?php
//		}

//
//		/*Haber Kodu*/
//		print_r($xml->channel->item[0]->HaberKodu);
//
//		/*Üst Kategori*/
//		print_r($xml->channel->item[0]->UstKategori);
//
//		/*Kategori*/
//		print_r($xml->channel->item[0]->Kategori);
//
//		/*Son Dakika*/
//		print_r($xml->channel->item[0]->SonDakika);
//
//		/*Title*/
//		print_r($xml->channel->item[0]->title);
	}
};

//
//add_action('admin_menu','wuwisoft_adminMenu');
//function wuwisoft_adminMenu()
//{
//	//Add Menu
//	add_menu_page( 'WuwiSoft IHA Standart RSS Bot', 'IHA RSS Bot', 'manage_options', 'wuwisoft-iha-rss-bot', 'wuwisoft_iha_rss_bot' );
//
//	//Add Sub Menu
//	add_submenu_page( 'wuwisoft-iha-rss-bot', 'Bot Ayarları', 'Bot Ayarları', 'manage_options', 'wuwisoft-iha-bot-ayar', 'wuwisoft_iha_bot_ayar' );
//}
//
//function wuwisoft_iha_rss_bot()
//{
//	if ( ! current_user_can( 'manage_options' ) ) {
//		return;
//	}
//?>
<!--	<div class="wrap">-->
<!--		<h1>--><?php //echo esc_html( get_admin_page_title() ); ?><!--</h1>-->
<!--		<form action="options.php" method="post">-->
<!--			--><?php
//			// output security fields for the registered setting "wporg_options"
//			settings_fields( 'wuwi_userCode' );
//			settings_fields( 'wuwi_userName' );
//			settings_fields( 'wuwi_userPassword' );
//			// output setting sections and their fields
//			// (sections are registered for "wporg", each field is registered to a specific section)
//			do_settings_sections( 'wuwi_iha' );
//			// output save settings button
//			submit_button( __( 'Save Settings', 'textdomain' ) );
//			?>
<!--		</form>-->
<!--	</div>-->
<?php
//}
//
//function wuwisoft_iha_bot_ayar()
//{
//	if ( ! current_user_can( 'manage_options' ) ) {
//		return;
//	}
//	?>
<!--	<div class="wrap">-->
<!--		<h1>--><?php //echo esc_html( get_admin_page_title() ); ?><!--</h1>-->
<!--		<form action="options.php" method="post">-->
<!--			--><?php
//			// output security fields for the registered setting "wporg_options"
//			settings_fields( 'wuwi_userCode' );
//			settings_fields( 'wuwi_userName' );
//			settings_fields( 'wuwi_userPassword' );
//			// output setting sections and their fields
//			// (sections are registered for "wporg", each field is registered to a specific section)
//			do_settings_sections( 'wuwi_iha' );
//			// output save settings button
//			submit_button( __( 'Save Settings', 'textdomain' ) );
//			?>
<!--		</form>-->
<!--	</div>-->
<!--	--><?php
//}
