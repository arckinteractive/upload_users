<?php

/**
 * Upload users language strings
 * Finnish
 *
 * @package upload_users
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @author Ismayil Khayredinov / Arck Interactive
 * @copyright Mediamaisteri Group 2009
 * @copyright ArckInteractive 2013
 * @link http://www.mediamaisteri.com/
 * @link http://arckinteractive.com/
 *
 * @author Juho Jaakkola
 */

$finnish = array(
	'admin:users:upload' => 'Tuo käyttäjiä',
	'upload_users:upload_users' => 'Lähetä käyttäjät',
	'upload_users:choose_file' => 'Valitse tiedosto',
	'upload_users:encoding' => 'Valitse merkistö',
	'upload_users:delimiter' => 'Valitse erotin',
	'upload_users:send_email' => 'Lähetä sähköposti uusille käyttäjille',
	'upload_users:yes' => 'Kyllä',
	'upload_users:no' => 'Ei',

	'upload_users:create_users' => 'Luo käyttäjätunnukset',
	'upload_users:success' => 'Käyttäjän luominen onnistui',
	'upload_users:statusok' => 'Käyttäjä voidaan luoda',
	'upload_users:creation_report' => 'Raportti luoduista käyttäjistä',
	'upload_users:process_report' => 'Luotavien käyttäjien esikatselu',
	'upload_users:no_created_users' => 'Ei luotuja käyttäjiä.',
	'upload_users:number_of_accounts' => 'Käyttäjien kokonaismäärä',
	'upload_users:number_of_errors' => 'Virheiden määrä',
	'upload_users:submit' => 'Lähetä',

	'upload_users:upload_help' => '<p>Valitse CSV-tiedosto ja lähetä se luodaksesi uusia käyttäjiä.</p>
	<p>Ensimmäisellä rivillä pitää olla tiedot sarakkeiden sisällöstä. Vaadittuja kenttiä ovat username (käyttäjätunnus), name (koko nimi) ja email (sähköpostiosoite). Jos salasanakenttää (password) ei ole tiedostossa, luo järjestelmä satunnaisen salasanan käyttäjälle. Halutessasi käyttäjätunnukset lähetetään käyttäjille sähköpostilla.</p>
	<p>Voit määrittää tiedostossa niin monta kenttää kuin haluat. Ylimääräisten kenttien tiedot lisätään käyttäjän metadataan. Jos kenttien erottimena on jokin muu kuin pilkku (,), voi kentän arvo olla pilkulla erotettu tagi-lista.</p>
	<p>Tässä on esimerkki CSV-tiedostosta:</p>',

	/**
	 * Error messages
	 */
	'upload_users:error:cannot_open_file' => 'Virhe avattaessa tiedostoa',
	'upload_users:error:wrong_csv_format' => 'CSV-tiedosto on väärässä formaatissa',

	/**
	 * emails
	 */
	'upload_users:email:message' => 'Hei %s!

Sinulle on luotu käyttäjätunnus sivustolle %s. Käytä oheista tunnusta ja salasanaa kirjautuaksesi sisään.

Tunnus: %s
Salasana: %s

Menee osoitteeseen %s kirjautuaksesi sisään.

',
	'upload_users:email:subject' => 'Tunnuksesi sivustolle %s',

	/**
	 * MISC
	 */
	'upload_users:mapping:custom' => 'muut...',
);

add_translation('fi', $finnish);