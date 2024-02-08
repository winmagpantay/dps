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

$string['admindirname'] = 'Админ лавлах';
$string['availablelangs'] = 'Боломжит хэлний багц';
$string['chooselanguagehead'] = 'Хэл сонгох';
$string['chooselanguagesub'] = 'Суулгах хэлээ сонгоно уу. Энэ хэлийг сайтын өгөгдмөл хэл болгон ашиглах боловч дараа нь өөрчилж болно.';
$string['clialreadyconfigured'] = 'config.php тохиргооны файл байна. Энэ сайтад Moodle системийг суулгахын тулд admin/cli/install_database.php ашиглана уу.';
$string['clialreadyinstalled'] = 'config.php тохиргооны файл байна. Энэ сайтад Moodle системийг шинэчлэхийн тулд admin/cli/install_database.php ашиглана уу.';
$string['cliinstallheader'] = 'Moodle {$a} командын мөр суулгах програм';
$string['clitablesexist'] = 'Өгөгдлийн сангийн хүснэгтүүд байна; CLI суурилуултыг үргэлжлүүлэх боломжгүй.';
$string['databasehost'] = 'Өгөгдлийн сангийн хост';
$string['databasename'] = 'Өгөгдлийн сангийн нэр';
$string['databasetypehead'] = 'Өгөгдлийн сангийн драйвер сонгох';
$string['dataroot'] = 'Өгөгдлийн лавлах';
$string['datarootpermission'] = 'Өгөгдлийн лавлахын зөвшөөрөл';
$string['dbprefix'] = 'Хүснэгтийн угтвар';
$string['dirroot'] = 'Moodle лавлах';
$string['environmenthead'] = 'Таны орчныг шалгаж байна ...';
$string['environmentsub2'] = 'Moodle системийн хувилбар бүр нь PHP хувилбарын хамгийн наад захын шаардлагыг хангаж, PHP гол гол өргөтгөлтэй байдаг.
Суурилуулах, шинэчлэхээс өмнө орчны бүрэн шалгалтыг хийдэг. Шинэ хувилбар суулгах эсвэл PHP өргөтгөлийг хэрхэн идэвхжүүлэхийг мэдэхгүй байгаа бол серверийн админтай холбогдоно уу.';
$string['errorsinenvironment'] = 'Орчны шалгалт амжилтгүй боллоо!';
$string['installation'] = 'Суурилуулалт';
$string['langdownloaderror'] = 'Харамсалтай нь "{$a}" хэлийг татаж авч чадсангүй. Суулгах үйл явц англи хэл дээр үргэлжилнэ.';
$string['memorylimithelp'] = '<p>Таны серверийн PHP санах ойн хязгаарлалтыг {$a} гэж тохируулсан байна.</p>

<p>Энэ нь Moodle системд хожим санах ойн асуудал, ялангуяа олон модулийг идэвхжүүлсэн ба/буюу олон хэрэглэгчтэй үед үүсгэж болзошгүй.</p>

<p>Бид танд PHP-г боломжтой бол 40M гэх мэт өндөр хязгаартайгаар тохируулахыг зөвлөж байна.
    Үүнд хэд хэдэн арга байдаг ба тэдгээрийг ашиглаж болно:</p>
<ol>
<li>Хэрэв боломжтой бол PHP-г <i>--enable-memory-limit</i> ашиглан дахин хөрвүүлээрэй.
     Энэ нь Moodle системд санах ойн хязгаарыг өөрөө тохируулах боломжийг олгоно.</li>
<li>Хэрэв та өөрийн php.ini файлд хандах эрхтэй бол <b>memory_limit</b> тохиргоог 40M гэх зэргээр өөрчлөх боломжтой. Хандах эрхгүй бол администратортоо хандаж болно.</li>
<li>Зарим PHP серверт дараах мөрийг агуулсан Moodle санд .htaccess файлыг үүсгэж болно: <blockquote><div>php_value memory_limit 40M</div></blockquote>
   <p>Гэвч зарим серверт энэ нь <b>бүх</b> PHP хуудас ажиллахаас сэргийлдэг (хуудсыг харахад алдаа гарах болно) тул та .htaccess файлыг устгах шаардлагатай.</p> </li>
</ol>';
$string['paths'] = 'Замууд';
$string['pathserrcreatedataroot'] = 'Суурилуулагч нь өгөгдлийн лавлахыг ({$a->dataroot}) үүсгэх боломжгүй';
$string['pathshead'] = 'Замыг баталгаажуулах';
$string['pathsrodataroot'] = 'Dataroot лавлах нь бичилт хийх боломжгүй.';
$string['pathsroparentdataroot'] = 'Үндсэн лавлах ({$a->parent}) нь бичилт хийх боломжгүй. Суурилуулагч нь өгөгдлийн санг ({$a->dataroot}) үүсгэх боломжгүй.';
$string['pathssubadmindir'] = 'Маш цөөн веб хост /админыг хянах самбар эсвэл өөр зүйлд нэвтрэхийн тулд тусгай URL болгон ашигладаг. Харамсалтай нь энэ нь Moodle админ хуудасны стандарт байршилтай зөрчилддөг. Та үүнийг засах боломжтой
Суурилуулалтад админ лавлахын нэрийг өөрчилж, энд шинэ нэрийг оруулах замаар засаж болно. Жишээ нь: <em>moodleadmin</em>. Энэ нь Moodle дээрх админ холбоосыг засах болно.';
$string['pathssubdataroot'] = '<p>Moodle нь хэрэглэгчийн байршуулсан бүх файлын агуулгыг хадгалах лавлах.</p>
<p>Энэ лавлах нь веб серверийн хэрэглэгч (ихэвчлэн \'www-data\', \'nobody\' эсвэл \'apache\') унших, бичих боломжтой байх ёстой.</p>
<p>Энэ нь вебээр шууд хандах боломжгүй байх ёстой.</p>
<p>Одоогоор лавлах байхгүй бол үүнийг суурилуулах процесс үүсгэх болно.</p>';
$string['pathssubdirroot'] = '<p>Moodle код агуулсан лавлахад хандах бүрэн зам.</p>';
$string['pathssubwwwroot'] = '<p>Moodle системд хандах бүрэн хаяг, өөрөөр хэлбэл хэрэглэгч Moodle системд хандахын тулд хөтчийн хаягийн мөрөнд оруулах хаяг.</p>
<p>Олон хаяг ашиглан Moodle системд хандах боломжгүй. Таны сайтад олон хаягаар хандах боломжтой бол хамгийн хялбарыг сонгож, бусад хаяг руугаа байнгын дахин чиглүүлэлт хийхээр тохируулна уу.</p>
<p>Таны сайтад интернэт, дотоод сүлжээнээс (заримдаа интранэт гэж нэрлэдэг) нэвтрэх боломжтой бол энд нийтийн хаягийг ашиглана уу.</p>
<p>Одоогийн хаяг буруу байвал хөтчийн хаягийн мөрөнд байгаа URL хаягийг өөрчлөөд суурилуулалтыг дахин эхлүүлнэ үү.</p>';
$string['pathsunsecuredataroot'] = 'Dataroot байршил аюулгүй биш байна';
$string['pathswrongadmindir'] = 'Админ лавлах байхгүй байна';
$string['phpextension'] = '{$a} PHP өргөтгөл';
$string['phpversion'] = 'РНР хувилбар';
$string['phpversionhelp'] = '<p>Moodle системд хамгийн багадаа 5.6.5 эсвэл 7.1 PHP хувилбар шаардлагатай (7.0.x нь системийн зарим хязгаарлалттай).</p>
<p>Та одоогоор {$a} хувилбарыг ажиллуулж байна.</p>
<p>Та PHP-г шинэчлэх эсвэл шинэ PHP хувилбартай хостод шилжих шаардлагатай.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Та <strong>{$a->packname} {$a->packversion}</strong> багцыг компьютертоо амжилттай суулгаж, эхлүүлсэн тул та энэ хуудсыг харж байна. Баяр хүргэе!';
$string['welcomep30'] = '<strong>{$a->installername}</strong> энэхүү хувилбарт <strong>Moodle</strong> ажиллах орчныг бүрдүүлэх аппликейшнүүд багтсан болно, тухайлбал:';
$string['welcomep40'] = 'Түүнчлэн энэ багц нь <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>-г агуулдаг.';
$string['welcomep50'] = 'Энэ багцад буй бүх аппликейшны хэрэглээг тэдгээрийн лицензээр зохицуулдаг. Бүрэн <strong>{$a->installername}</strong> багц нь <a href="https://www.opensource.org/docs/definition_plain.html">нээлттэй эх сурвалж</a> бөгөөд <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a> лиценз дор түгээгддэг.';
$string['welcomep60'] = 'Дараах хуудсууд нь таны компьютерт <strong>Moodle</strong> системийг тохируулах, тохируулахад хялбар алхмыг хийх болно. Та өгөгдмөл тохиргоог хүлээн зөвшөөрөх эсвэл өөрийн хэрэгцээнд тохируулан өөрчилж болно.';
$string['welcomep70'] = 'Доорх "Дараах" товчийг дарж <strong>Moodle</strong> системийн тохиргоог үргэлжлүүлнэ үү.';
$string['wwwroot'] = 'Веб хаяг';
