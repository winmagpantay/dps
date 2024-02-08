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

$string['cannotcreatedboninstall'] = '<p> Não é possível criar o banco de dados. </p>
<p> O banco de dados especificado não existe e o determinado usuário não tem permissão para criar o banco de dados. </p>
<p> O administrador do site deve verificar a configuração do banco de dados. </p>';
$string['cannotcreatelangdir'] = 'Impossível criar diretório lang';
$string['cannotcreatetempdir'] = 'Impossível criar diretório temp';
$string['cannotdownloadcomponents'] = 'Impossível fazer download dos componentes';
$string['cannotdownloadzipfile'] = 'Impossível fazer download do arquivo ZIP';
$string['cannotfindcomponent'] = 'Impossível achar componente';
$string['cannotsavemd5file'] = 'Impossível salvar arquivo md5';
$string['cannotsavezipfile'] = 'Impossível salvar arquivo ZIP';
$string['cannotunzipfile'] = 'Impossível descompactar arquivo ZIP';
$string['componentisuptodate'] = 'Componente está atualizado';
$string['dmlexceptiononinstall'] = '<p> Ocorreu um erro no banco de dados [{$a->errorcode}].<br />{$a->debuginfo} </p>';
$string['downloadedfilecheckfailed'] = 'A verificação do arquivo baixado falhou';
$string['invalidmd5'] = 'A variável de verificação estava errada - tente novamente';
$string['missingrequiredfield'] = 'Faltam informações obrigatórias';
$string['remotedownloaderror'] = '<p>O download do componente falhou, por favor verifique as configurações do proxy. A extensão cURL do PHP é altamente recomendada.</p><p>Você precisar baixar o <a href="{$a->url}">arquivo</a> manualmente, copiar para "{$a->dest}" e descompactar lá.</p>';
$string['wrongdestpath'] = 'Caminho do destino errado';
$string['wrongsourcebase'] = 'URL do recurso errada';
$string['wrongzipfilename'] = 'Nome do arquivo ZIP errado';
