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

$string['cannotcreatedboninstall'] = '<p> No se puede creyar la base de datos. </p><p> La base de datos especificada no existe y l\'usuario indicau no tiene permiso pa creyar la base de datos. </p><p> L\'administrador d\'o puesto ha de comprebar la configuración de base de datos. </p>';
$string['cannotcreatelangdir'] = 'No se puede creyar lo directorio d\'idioma.';
$string['cannotcreatetempdir'] = 'No se puede creyar lo directorio temp.';
$string['cannotdownloadcomponents'] = 'No se puede descargar components';
$string['cannotdownloadzipfile'] = 'No se puede descargar lo fichero ZIP';
$string['cannotfindcomponent'] = 'No se puede trobar lo component.';
$string['cannotsavemd5file'] = 'No se puede alzar lo fichero md5';
$string['cannotsavezipfile'] = 'No se puede alzar lo fichero ZIP';
$string['cannotunzipfile'] = 'No se puede descomprimir lo fichero';
$string['componentisuptodate'] = 'Lo component ye actualizau';
$string['dmlexceptiononinstall'] = '<p>S\'ha produciu una error de base de datos [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Ha fallau la comprebación d\'o fichero descargau';
$string['invalidmd5'] = 'La variable de verificación MD5 ye incorrecta no ye valida - tracte nuevament';
$string['missingrequiredfield'] = 'Falta bell campo necesario';
$string['remotedownloaderror'] = '<p>Falló la descarga d\'o component a lo suyo servidor. Se recomienda verificar los achustes d\'o proxy, extensión PHP cURL.</p>
<p>Ha de descargar lo <a href="{$a->url}">{$a->url}</a> fichero manualment, copiar-lo en "{$a->dest}" en o suyo servidor y descomprimir-lo allí.</p>';
$string['wrongdestpath'] = 'Rota de destín erronia.';
$string['wrongsourcebase'] = 'Base de fuent d\'URL erronia.';
$string['wrongzipfilename'] = 'Nombre de fichero ZIP erronio.';
