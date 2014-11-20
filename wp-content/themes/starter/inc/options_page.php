<?php


// Définition des variables de la page d'option
// ———————————————————————————————————————————

add_action( 'admin_init', 'setOptionsSettings' );

function setOptionsSettings( )
{

	// Général

		// Analytics
		register_setting( 'options_general', 'analytics_id' );



	// Advanced
	register_setting( 'options_advanced', 'affichage_header' ); 	  // exemple affichage header
	register_setting( 'options_advanced', 'affichage_footer' ); 	  // exemple affichage footer



	// Partage Réseaux sociaux Meta

		// Facebook
		register_setting( 'options_social', 'fb_title' );
		register_setting( 'options_social', 'fb_site_name' );
		register_setting( 'options_social', 'fb_description' );
		register_setting( 'options_social', 'fb_image' );

		// Google +
		register_setting( 'options_social', 'g_title' );
		register_setting( 'options_social', 'g_description' );
		register_setting( 'options_social', 'g_image' );

		// Twitter
		register_setting( 'options_social', 'tw_title' );
		register_setting( 'options_social', 'tw_description' );
		register_setting( 'options_social', 'tw_compte' );
		register_setting( 'options_social', 'tw_image' );


}

// Ajout la page d'option dans l'admin
// ———————————————————————————————————————————

add_action( 'admin_menu', 'setOptionsPage' );

function setOptionsPage( )
{
	// Icone dans le menu d'admin
	$options_icon = get_bloginfo('template_url') . '/img/admin/icon-options-page.jpg';

	// Paramètres de la page
	add_menu_page(
		'Options', 				// Titre de la page
		'Options',          	// Le nom de la page dans le menu d'admin
		'administrator',        // Le rôle d'utilisateur requis pour voir cette page
		'options-page',			// Un identifiant unique de la page
		'setLayoutOptions',		// Appel de la fonction de mise en forme de la page d'options
		$options_icon,			// Icone dans le menu d'admin
		'21'					// Position dans le menu
	);
}


// Tabs sur la page d'option
// ———————————————————————————————————————————

function setPageTabs( $current = 'general' ) {
    $tabs = array( 'general' => 'General', 'advanced' => 'Advanced', 'social' => 'Réseaux sociaux' );
    $links = array();
    foreach( $tabs as $tab => $name ) :
        if ( $tab == $current ) :
            $links[] = "<a class='nav-tab nav-tab-active' href='?page=options-page&tab=$tab'>$name</a>";
        else :
            $links[] = "<a class='nav-tab' href='?page=options-page&tab=$tab'>$name</a>";
        endif;
    endforeach;
    echo '<h2 class="nav-tab-wrapper">';
    foreach ( $links as $link )
        echo $link;
    echo '</h2>';
}


// Ajout des page d'option en fonction des tabs
// ———————————————————————————————————————————

function setLayoutOptions( )
{

	if ( $_GET['page'] == 'options-page' ) :
    if ( isset ( $_GET['tab'] ) ) :
        $tab = $_GET['tab'];
    else:
        $tab = 'general';
    endif;
    switch ( $tab ) :
        case 'general' :
   			setPageTabs('general');
        	setLayoutGeneral();
            break;
        case 'advanced' :
       		setPageTabs('advanced');
        	setLayoutAdvanced();
            break;
				case 'social' :
					setPageTabs('social');
					setLayoutSocial();
						break;
    endswitch;
	endif;

}


// Mise en forme de la page General
// ———————————————————————————————————————————

function setLayoutGeneral( )
{
?>
	<div class="wrap">
		<br>
		<h1>Google analytics</h1>

		<form method="post" action="options.php">
			<?php
				// Ajouts des champs supplémentaires dans le formulaire
				settings_fields( 'options_general' );
			?>

			<table class="widefat">
	         	<tbody>

						<!-- GENERAL Analytics -->
						<tr>
							<td>
								<p><label for="analytics_id">Google Analytics</label></p>
							</td>
							<td>
								<p><input type="text" id="analytics_id" name="analytics_id" class="regular-text" value="<?php echo get_option( 'analytics_id' ); ?>" /></p>
								<p class="description">ID du tracker ( UA-XXXXXX-X )</p>
							</td>
						</tr>


				</tbody>
			</table>


			<!-- Bouton Mettre à jour -->
			<p class="submit">
				<input type="submit" class="button-primary" value="Mettre à jour" />
			</p>
		</form>
	</div>
<?php
}

// Mise en forme de la page Advanced
// ———————————————————————————————————————————

function setLayoutAdvanced( )
{
?>
	<div class="wrap">
		<h2>Advanced</h2>

		<form method="post" action="options.php">
			<?php
				// Ajouts des champs supplémentaires dans le formulaire
				settings_fields( 'options_advanced' );
			?>

			<!-- Formulaire checkbox -->
			<br>
			<table class="form-table">
	            <tbody>

					<tr>
						<td>
							Affichage du header
							<input name="affichage_header" type="checkbox" value="1" <?php checked( '1', get_option( 'affichage_header' ) ); ?> />
						</td>
					</tr>
					<tr>
						<td>
							Affichage du footer
							<input name="affichage_footer" type="checkbox" value="1" <?php checked( '1', get_option( 'affichage_footer' ) ); ?> />
						</td>
					</tr>

				</tbody>
			</table>

			<!-- Bouton Mettre à jour -->
			<p class="submit">
				<input type="submit" class="button-primary" value="Mettre à jour" />
			</p>
		</form>
	</div>
<?php
}



// SOCIAL
// ———————————————————————————————————————————

function setLayoutSocial( )
{
?>
	<div class="wrap">

		<form method="post" action="options.php">
			<?php
				// Ajouts des champs supplémentaires dans le formulaire
				settings_fields( 'options_social' );
			?>

			<!-- FACEBOOK -->
			<br>
			<h1>Facebook</h1>

			<table class="widefat">
				<tbody>

					<!-- FB Title -->
					<tr>
						<td>
							<p><label for="fb_title">Titre</label></p>
						</td>
						<td>
							<p><input type="text" id="fb_title" name="fb_title" class="regular-text" value="<?php echo get_option( 'fb_title' ); ?>" /></p>
						</td>
					</tr>

					<!-- FB Site name -->
					<tr>
						<td>
							<p><label for="fb_site_name">Nom du site</label></p>
						</td>
						<td>
							<p><input type="text" id="fb_site_name" name="fb_site_name" class="regular-text" value="<?php echo get_option( 'fb_site_name' ); ?>" /></p>
						</td>
					</tr>

					<!-- FB Description -->
					<tr>
						<td>
							<p><label for="fb_description">Description</label></p>
						</td>
						<td>
							<p><textarea id="fb_description" name="fb_description" cols="80" rows="4" class="regular-text"/><?php echo get_option( 'fb_description' ); ?></textarea></p>
						</td>
					</tr>


					<!-- FB Site image -->
					<tr>
						<td>
							<p><label for="fb_image">Image (url)</label></p>
						</td>
						<td>
							<p><input type="text" id="fb_image" name="fb_image" class="regular-text" value="<?php echo get_option( 'fb_image' ); ?>" /></p>
							<p class="description">Taille recommandée : 1200*630px</p>
						</td>
					</tr>

				</tbody>
			</table>


			<!-- GOOGLE + -->
			<br>
			<h1>Google +</h1>

			<table class="widefat">
				<tbody>

					<!-- G Name -->
					<tr>
						<td>
							<p><label for="g_title">Titre</label></p>
						</td>
						<td>
							<p><input type="text" id="g_title" name="g_title" class="regular-text" value="<?php echo get_option( 'g_title' ); ?>" /></p>
						</td>
					</tr>

					<!-- G Description -->
					<tr>
						<td>
							<p><label for="g_description">Site name</label></p>
						</td>
						<td>
							<p><textarea id="g_description" name="g_description" cols="80" rows="4" class="regular-text"/><?php echo get_option( 'g_description' ); ?></textarea></p>
						</td>
					</tr>

					<!-- G image -->
					<tr>
						<td>
							<p><label for="g_image">Image</label></p>
						</td>
						<td>
							<p><input type="text" id="g_image" name="g_image" class="regular-text" value="<?php echo get_option( 'g_image' ); ?>" /></textarea></p>
							<p class="description">Taille recommandée : 1200*480px</p>
						</td>
					</tr>

				</tbody>
			</table>


			<!-- TWITTER -->
			<br>
			<h1>Twitter</h1>

			<table class="widefat">
				<tbody>

					<!-- TW Name -->
					<tr>
						<td>
							<p><label for="tw_title">Titre</label></p>
						</td>
						<td>
							<p><input type="text" id="tw_title" name="tw_title" class="regular-text" value="<?php echo get_option( 'tw_title' ); ?>" /></p>
						</td>
					</tr>

					<!-- TW Description -->
					<tr>
						<td>
							<p><label for="tw_description">Description</label></p>
						</td>
						<td>
							<p><textarea id="tw_description" name="tw_description" cols="80" rows="4" class="regular-text"/><?php echo get_option( 'tw_description' ); ?></textarea></p>
						</td>
					</tr>

					<!-- TW Name -->
					<tr>
						<td>
							<p><label for="tw_compte">Nom du Compte</label></p>
						</td>
						<td>
							<p><input type="text" id="tw_compte" name="tw_compte" class="regular-text" value="<?php echo get_option( 'tw_compte' ); ?>" /></p>
							<p class="description">Ne pas oublier le @ devant le nom du compte</p>
						</td>
					</tr>

					<!-- TW image -->
					<tr>
						<td>
							<p><label for="tw_image">Image</label></p>
						</td>
						<td>
							<p><input type="text" id="tw_image" name="tw_image" class="regular-text" value="<?php echo get_option( 'tw_image' ); ?>" /></textarea></p>
							<p class="description">Taille recommandée : 560*300px</p>
						</td>
					</tr>

				</tbody>
			</table>

			<!-- Bouton Mettre à jour -->
			<p class="submit">
				<input type="submit" class="button-primary" value="Mettre à jour" />
			</p>
		</form>
	</div>
<?php
}

?>
