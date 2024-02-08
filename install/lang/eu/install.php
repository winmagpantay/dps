<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link https://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Admin direktorioa';
$string['availablelangs'] = 'Hizkuntza-pakete eskuragarriak';
$string['chooselanguagehead'] = 'Aukeratu hizkuntza bat';
$string['chooselanguagesub'] = 'Mesedez, aukeratu instalaziorako hizkuntza bat. Hizkuntza hori erabiliko da gunearen hizkuntza lehenetsi gisa, baina aurrerago alda daiteke.';
$string['clialreadyconfigured'] = 'Dagoeneko badago config.php konfigurazio-fitxategia. Mesedez erabili admin/cli/install_database.php Moodle gune honetan instalatu nahi baduzu.';
$string['clialreadyinstalled'] = 'Dagoeneko badago config.php konfigurazio-fitxategia. Mesedez erabili admin/cli/upgrade.php zure Moodle gunea eguneratu nahi baduzu.';
$string['cliinstallheader'] = 'Moodle {$a} komando-lerro bidezko instalaziorako programa';
$string['clitablesexist'] = 'Datu-base taulak dagoeneko existitzen dira. CLI instalazioak ezin du jarraitu.';
$string['databasehost'] = 'Datu-basearen ostalaria';
$string['databasename'] = 'Datu-basearen izena';
$string['databasetypehead'] = 'Aukeratu datu-base kontrolatzailea';
$string['dataroot'] = 'Datuen karpeta';
$string['datarootpermission'] = 'Datu-direktorioen baimena';
$string['dbprefix'] = 'Taulen aurrizkia';
$string['dirroot'] = 'Moodle direktorioa';
$string['environmenthead'] = 'Zure ingurunea egiaztatzen...';
$string['environmentsub2'] = 'Moodleko bertsio bakoitzak PHPko gutxieneko bertsioa eta derrigorrez instalatu beharreko PHP hedapen batzuk ditu. Ingurunearen azterketa oso bat egiten da instalazioa eta eguneratze bakoitza egin aurretik. Mesedez, jarri harremanetan zerbitzariaren kudeatzailearekin ez badakizu bertsio berria edo PHP hedapenak nola instalatu.';
$string['errorsinenvironment'] = 'Huts egin du ingurunearen egiaztatzeak!';
$string['installation'] = 'Instalazioa';
$string['langdownloaderror'] = 'Zoritxarrez "{$a}" hizkuntza ezin izan da jaitsi. Instalazio-prozesuak ingelesez jarraituko du.';
$string['memorylimithelp'] = '<p>Zure zerbitzarian PHP memoria-muga {$a} da une honetan.</p>

<p>Aurrerago honek Moodleri arazoak sor diezaizkioke,
bereziki modulu edo/eta erabiltzaile asko badituzu.</p>

<p>PHP memoria-muga ahal bezain altu konfiguratzea aholkatzen dizugu, ad. 40M.
Hori egiteko modu asko daude:</p>
<ol>
<li>Ahal baduzu, PHP <i>--enable-memory-limit</i>-ekin berriz konpilatu.
Horrek Moodle-k berak memoria-muga ezartzea ahalbidetzen du.</li>
<li>php.ini fitxategirako sarbidea baduzu,<b>memory_limit</b> ezarpena alda dezakezu
40Mra, adibidez. Sarbiderik ez baduzu, zure administratzaileari egin dezala eska diezaiokezu.</li>
<li>PHP zerbitzari batzuetan Moodle-ren direktorioan beheko lerro hau daukan .htaccess fitxategia sor dezakezu:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Hala ere, zerbitzari batzuetan horrek PHP orri <b>guztiek</b> ez funtzionatzea ekar dezake
(orriak ikustean erroreak ere ikusiko dituzu). Kasu horretan, .htaccess fitxategia ezabatu beharko duzu.</p></li>
</ol>';
$string['paths'] = 'Bideak';
$string['pathserrcreatedataroot'] = 'Instalatzaileak ezin du datu-direktorioa ({$a->dataroot}) sortu.';
$string['pathshead'] = 'Egiaztatu bideak';
$string['pathsrodataroot'] = 'Dataroot direktorioa ez da idazteko modukoa.';
$string['pathsroparentdataroot'] = 'Goragoko direktorioa ({$a->parent}) ez da idazteko modukoa. Instalatzaileak ezin du datu-direktorioa ({$a->dataroot}) sortu.';
$string['pathssubadmindir'] = 'Web ostalari gutxi batzuk /admin URL berezi gisa erabiltzen dute kontrol-panel edo antzekora sarbidea emateko. Zoritxarrez, honek Moodleren kudeatze-orrien lehenetsitako kokapenarekin gatazka sortzen du. Hau konpondu dezakezu zure instalazioko admin direktorioa berrizendatuz, eta izen berria hemen sartuta. Adibidez <em>moodleadmin</em>. Honek Moodleko admin estekak konponduko du.';
$string['pathssubdataroot'] = '<p>Moodlek erabiltzaileek igotako fitxategien edukiak bilduko dituen direktorio bat.</p>
<p>Direktorio honetan web-zerbitzariaren erabiltzaileak irakurtzeko eta idazteko baimena izan beharko ditu (normalean \'www-data\', \'nobody\', edo \'apache\').</p>
<p>Ez litzateke web bidez eskuragarri egon beharko.</p>
<p>Direktorioa existitzen ez bada, instalazioan sortzeko saiakera egingo da.</p>';
$string['pathssubdirroot'] = '<p>Moodleko kodea daukan direktorioaren bide osoa.</p>';
$string['pathssubwwwroot'] = '<p>Moodle eskuragarri egongo den helbide osoa, hau da, erabiltzaileek Moodlen sartzeko nabigatzailearen helbide barran idatziko duten helbidea</p>
<p>Moodle ezin da hainbat helbidetatik eskuragarri egon. Zure gunea hainbat helbidetatik eskuragarri badago errazena aukeratu eta bertara beste helbideetatik behin-betiko berbideraketak konfiguratu itzazu.</p>
<p>Zure gunea Internetetik eta barne-sare batetik eskuragarri badago (batzuetan Intranet deitutakoa), hemen helbide publikoa erabili ezazu.</p>
<p>Oraingo helbidea egokia ez bada, mesedez aldatu ezazu URLa zure nabigatzailean eta instalazioa berriz abiatu ezazu.</p>';
$string['pathsunsecuredataroot'] = 'Dataroot-en kokapena ez da segurua';
$string['pathswrongadmindir'] = 'Admin direktorioa ez da existitzen';
$string['phpextension'] = '{$a} PHP hedapena';
$string['phpversion'] = 'PHP bertsioa';
$string['phpversionhelp'] = '<p>Moodlek PHP 5.6.5 edo 7.1 bertsioetako bat behar du (7.0.x bertsioek muga batzuk dituzte). </p>
<p>Zure une honetako bertsioa {$a} da.</p>
<p>PHP eguneratu edo PHP bertsio berriagoa duen zerbitzari batera jo.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Orri hau ikusten baduzu <strong>{$a->packname} {$a->packversion}</strong> paketea zure ordenagailuan instalatu ahal izan duzu. Zorionak!';
$string['welcomep30'] = '<strong>{$a->installername}</strong>ren bertsio honek <strong>Moodle</strong>-k
zure ordenagailuan funtzionatzeko behar diren aplikazioak dauzka, zehazki hurrengoak:';
$string['welcomep40'] = 'Paketeak ere zera dauka: <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Paketeko aplikazio guztien erabilpena dagozkien lizentziek arautzen dute. <strong>{$a->installername}</strong> aplikazioak <a href="https://www.opensource.org/docs/definition_plain.html">kode irekia</a> dauka eta <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a> lizentziapean banatzen da.';
$string['welcomep60'] = 'Datozen orriek urrats erraz batzuen bidez gidatuko zaituzte <strong>Moodle</strong> zure ordenagailuan instalatu eta konfiguratzeko. Aholkatzen diren lehenetsitako balioak mantendu edo, nahi izanez gero, alda ditzakezu zure beharrei erantzun diezaieten.';
$string['welcomep70'] = 'Egin klik "Hurrengoa" botoian <strong>Moodle</strong>ren konfigurazioarekin jarraitzeko.';
$string['wwwroot'] = 'Web helbidea';
