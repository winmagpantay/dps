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

$string['cannotcreatedboninstall'] = '<p> No se puede crear la base de datos. </p><p> La base de datos especificada no existe y el usuario indicado no tiene permiso para crear la base de datos. </p><p> El administrador del sitio debe comprobar la configuración de base de datos. </p>';
$string['cannotcreatelangdir'] = 'No se ha podido crear el directorio de las traducciones';
$string['cannotcreatetempdir'] = 'No se he podido crear el directorio temporal';
$string['cannotdownloadcomponents'] = 'No se ha podido descargar los componentes';
$string['cannotdownloadzipfile'] = 'No se ha podido descargar el fichero ZIP';
$string['cannotfindcomponent'] = 'No se ha podido encontrar el componente';
$string['cannotsavemd5file'] = 'No se ha podido guardar el fichero md5';
$string['cannotsavezipfile'] = 'No se ha podido guardar el fichero ZIP';
$string['cannotunzipfile'] = 'No se puede descomprimir el archivo';
$string['componentisuptodate'] = 'El componente está actualizado';
$string['dmlexceptiononinstall'] = '<p>Se ha producido un error de base de datos [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Ha fallado la comprobación del archivo descargado';
$string['invalidmd5'] = 'La variable de comprobación era incorrecta - inténtelo de nuevo';
$string['missingrequiredfield'] = 'Falta algún campo necesario';
$string['remotedownloaderror'] = '<p>Falló la descarga del componente a su servidor. Se recomienda verificar los ajustes del proxy, extensión PHP cURL.</p>
<p>Debe descargar el <a href="{$a->url}">{$a->url}</a> archivo manualmente, copiarlo en "{$a->dest}" en su servidor y descomprimirlo allí.</p>';
$string['wrongdestpath'] = 'Ruta de destino errónea';
$string['wrongsourcebase'] = 'Base de URL de origen errónea';
$string['wrongzipfilename'] = 'Nombre de fichero ZIP incorrecto';
