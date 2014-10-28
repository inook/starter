<?php get_header() ?>

<!-- Content -->
<table id="icl_languages_selection_table" class="widefat">
            <thead>
                <tr>
                    <th>Langues du site</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table id="icl_setup_table" class="form-table">
                            <tbody><tr valign="top">            
                                <td>
                                                                            Les langues suivantes  sont activées sur ce site :<br>
                                        <ul id="icl_enabled_languages">
                                                                                                                                            <li><label><input name="default_language" type="radio" value="en" disabled="disabled"> Anglais </label></li>
                                                                                                                                        <li class="default_language"><label><input name="default_language" type="radio" value="fr" checked="checked" disabled="disabled"> Français (par défaut)</label></li>
                                                                                                                                        <li><label><input name="default_language" type="radio" value="de" disabled="disabled"> Allemand </label></li>
                                                                                    </ul>
                                        <br clear="all">
                                                                        <input type="hidden" id="set_default_language_nonce" name="set_default_language_nonce" value="bcf8364583"><input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=sitepress-multilingual-cms/menu/languages.php">                                    <input id="icl_save_default_button" type="button" class="button-secondary action" value="Appliquer">
                                    <input id="icl_cancel_default_button" type="button" class="button-secondary action" value="Annuler">                                    
                                                                        <input id="icl_change_default_button" type="button" class="button-secondary action" value="Modifier la langue par défaut">
                                                                        
                                                                        <input id="icl_add_remove_button" type="button" class="button-secondary action" value="Ajouter / Supprimer des langues">
                                    <span class="icl_ajx_response" id="icl_ajx_response"></span>
                                    <br clear="all">
                                                                        <div id="icl_avail_languages_picker">                
                                        <ul>
                                                                                    <li><label><input type="checkbox" value="zh-hans">
                                                <strong>Chinois simplifié</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="zh-hant">
                                                <strong>Chinois traditionnel</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="da">
                                                <strong>Danois</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="nl">
                                                <strong>Néerlandais</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="en" checked="checked">
                                                <strong>Anglais</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="fr" checked="checked" disabled="disabled">
                                                <strong>Français</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="de" checked="checked">
                                                <strong>Allemand</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="it">
                                                <strong>Italien</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="ja">
                                                <strong>Japonais</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="ru">
                                                <strong>Russe</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="es">
                                                <strong>Espagnol</strong></label></li>
                                                                                    <li><label><input type="checkbox" value="sq">
                                                Albanais</label></li>
                                                                                    <li><label><input type="checkbox" value="ar">
                                                Arabe</label></li>
                                                                                    <li><label><input type="checkbox" value="hy">
                                                Arménien</label></li>
                                                                                    <li><label><input type="checkbox" value="eu">
                                                Basque</label></li>
                                                                                    <li><label><input type="checkbox" value="bs">
                                                Bosnien</label></li>
                                                                                    <li><label><input type="checkbox" value="bg">
                                                Bulgare</label></li>
                                                                                    <li><label><input type="checkbox" value="ca">
                                                Catalan</label></li>
                                                                                    <li><label><input type="checkbox" value="hr">
                                                Croate</label></li>
                                                                                    <li><label><input type="checkbox" value="cs">
                                                Tchèque</label></li>
                                                                                    <li><label><input type="checkbox" value="eo">
                                                Espéranto</label></li>
                                                                                    <li><label><input type="checkbox" value="et">
                                                Estonien</label></li>
                                                                                    <li><label><input type="checkbox" value="fi">
                                                Finnois</label></li>
                                                                                    <li><label><input type="checkbox" value="el">
                                                Grec moderne</label></li>
                                                                                    <li><label><input type="checkbox" value="he">
                                                Hébreu</label></li>
                                                                                    <li><label><input type="checkbox" value="hi">
                                                Hindi</label></li>
                                                                                    <li><label><input type="checkbox" value="hu">
                                                Hongrois</label></li>
                                                                                    <li><label><input type="checkbox" value="is">
                                                Islandais</label></li>
                                                                                    <li><label><input type="checkbox" value="id">
                                                Indonésien</label></li>
                                                                                    <li><label><input type="checkbox" value="ga">
                                                Irlandais</label></li>
                                                                                    <li><label><input type="checkbox" value="ko">
                                                Coréen</label></li>
                                                                                    <li><label><input type="checkbox" value="ku">
                                                Kurde</label></li>
                                                                                    <li><label><input type="checkbox" value="la">
                                                Latin</label></li>
                                                                                    <li><label><input type="checkbox" value="lv">
                                                Letton</label></li>
                                                                                    <li><label><input type="checkbox" value="lt">
                                                Lituanien</label></li>
                                                                                    <li><label><input type="checkbox" value="mk">
                                                Macédonien</label></li>
                                                                                    <li><label><input type="checkbox" value="mt">
                                                Maltais</label></li>
                                                                                    <li><label><input type="checkbox" value="mo">
                                                Moldave</label></li>
                                                                                    <li><label><input type="checkbox" value="mn">
                                                Mongol</label></li>
                                                                                    <li><label><input type="checkbox" value="ne">
                                                Népalais</label></li>
                                                                                    <li><label><input type="checkbox" value="nb">
                                                Norvégien Bokmål</label></li>
                                                                                    <li><label><input type="checkbox" value="fa">
                                                Perse</label></li>
                                                                                    <li><label><input type="checkbox" value="pl">
                                                Polonais</label></li>
                                                                                    <li><label><input type="checkbox" value="pt-br">
                                                Portugais - du Brésil</label></li>
                                                                                    <li><label><input type="checkbox" value="pt-pt">
                                                Portugais - du Portugal</label></li>
                                                                                    <li><label><input type="checkbox" value="pa">
                                                Panjabi</label></li>
                                                                                    <li><label><input type="checkbox" value="qu">
                                                Quechua</label></li>
                                                                                    <li><label><input type="checkbox" value="ro">
                                                Roumain</label></li>
                                                                                    <li><label><input type="checkbox" value="sr">
                                                Serbe</label></li>
                                                                                    <li><label><input type="checkbox" value="sk">
                                                Slave</label></li>
                                                                                    <li><label><input type="checkbox" value="sl">
                                                Slovène</label></li>
                                                                                    <li><label><input type="checkbox" value="so">
                                                Somali</label></li>
                                                                                    <li><label><input type="checkbox" value="sv">
                                                Suédois</label></li>
                                                                                    <li><label><input type="checkbox" value="ta">
                                                Tamoul</label></li>
                                                                                    <li><label><input type="checkbox" value="th">
                                                Thaï</label></li>
                                                                                    <li><label><input type="checkbox" value="tr">
                                                Turc</label></li>
                                                                                    <li><label><input type="checkbox" value="uk">
                                                Ukrainien</label></li>
                                                                                    <li><label><input type="checkbox" value="ur">
                                                Ourdu</label></li>
                                                                                    <li><label><input type="checkbox" value="uz">
                                                Ouzbek</label></li>
                                                                                    <li><label><input type="checkbox" value="vi">
                                                Vietnamien</label></li>
                                                                                    <li><label><input type="checkbox" value="cy">
                                                Gallois</label></li>
                                                                                    <li><label><input type="checkbox" value="yi">
                                                Yiddish</label></li>
                                                                                    <li><label><input type="checkbox" value="zu">
                                                Zoulou</label></li>
                                                                                </ul>
                                                                                <br clear="all">
                                        <div>                                            
                                            <input id="icl_save_language_selection" type="button" class="button-secondary action" value="Appliquer">
                                            <input id="icl_cancel_language_selection" type="button" class="button-secondary action" value="Annuler">                                
                                        </div>
                                                                                <input type="hidden" id="set_active_languages_nonce" name="set_active_languages_nonce" value="ab81e2f957"><input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=sitepress-multilingual-cms/menu/languages.php">                                    </div>
                                </td>
                            </tr>
                            <tr><td><a href="admin.php?page=sitepress-multilingual-cms/menu/languages.php&amp;trop=1">Modifier les langues</a></td></tr>                        </tbody></table>              
                        
                                              
                    </td>
                </tr>
            </tbody>
        </table>
        
<?php get_footer() ?>