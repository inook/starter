<?php 


// Définition des variables de la page d'option
// ———————————————————————————————————————————

add_action( 'admin_init', 'setOptionsSettings' );

function setOptionsSettings( )
{
	register_setting( 'options_general', 'background_color' ); // exemple couleur de fond
	register_setting( 'options_general', 'text_color' );       // exemple couleur du texte
	register_setting( 'options_general', 'text_slogan' ); 	  // exemple slogan

	register_setting( 'options_advanced', 'affichage_header' ); 	  // exemple affichage header
	register_setting( 'options_advanced', 'affichage_footer' ); 	  // exemple affichage footer
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
    $tabs = array( 'general' => 'General', 'advanced' => 'Advanced' );
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
    endswitch;
	endif;

}


// Mise en forme de la page General
// ———————————————————————————————————————————

function setLayoutGeneral( )
{
?>
	<div class="wrap">
		<h2>General</h2>

		<form method="post" action="options.php">
			<?php
				// Ajouts des champs supplémentaires dans le formulaire
				settings_fields( 'options_general' );
			?>
			
			<!-- Formulaire input text -->
			<br>
			<table class="widefat">
		        <thead>
		            <tr>
		                <th>Options du site</th>
		                <th>Value</th>
		            </tr>
		        </thead>
	            <tbody>
					<tr>
						<td>
							<p><label for="background_color">Couleur de fond</label></p>
						</td>
						<td>
							<p><input type="text" id="background_color" name="background_color" class="regular-text" value="<?php echo get_option( 'background_color' ); ?>" /></p>
						</td>
					</tr>

					<tr>
						<td>
							<p><label for="text_color">Couleur du texte</label></p>
						</td>
						<td>
							<p><input type="text" id="text_color" name="text_color" class="regular-text" value="<?php echo get_option( 'text_color' ); ?>" /></p>
						</td>
					</tr>
				</tbody>
			</table>
			
			<!-- Formulaire textarea -->
			<br>
			<table class="widefat">
		        <thead>
		            <tr>
		                <th>Slogan</th>
		                <th>texte</th>
		            </tr>
		        </thead>
	            <tbody>
					
					<tr>
						<td>
							<p><label for="text_slogan">Slogan texte</label></p>
						</td>
						<td>
							<textarea id="text_slogan" name="text_slogan" cols="80" rows="10" class="regular-text"/><?php echo get_option( 'text_slogan' ); ?></textarea> 
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

?>