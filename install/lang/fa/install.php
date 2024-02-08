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

$string['admindirname'] = 'دایرکتوری مدیر';
$string['availablelangs'] = 'بسته‌های زبانی موجود';
$string['chooselanguagehead'] = 'انتخاب زبان';
$string['chooselanguagesub'] = 'لطفاً زبانی را به جهت استفاده در حین نصب انتخاب نمایید. زبانی که در این صفحه انتخاب می‌کنید به عنوان زبان پیش‌فرض سایت نیز مورد استفاده قرار خواهد گرفت. البته می‌توانید بعداً آن را تغییر دهید.<br />ترجمهٔ فارسی این نسخه با همکاری <a href="https://foodle.org" target="_blank">گروه فودل</a> آماده شده است.';
$string['clialreadyconfigured'] = '.ﺩﺭﺍﺩ ﺩﻮﺟﻭ config.php ﯼﺪﻨﺑﺮﮑﯿﭘ ﻞﯾﺎﻓ
ﺯﺍ ﺖﯾﺎﺳ ﻦﯾﺍ ﺭﺩ ﻝﺩﻮﻣ ﺐﺼﻧ ﯼﺍﺮﺑ ﺎﻔﻄﻟ
.ﺪﯿﻨﮐ ﻩﺩﺎﻔﺘﺳﺍ admin/cli/database_install.php';
$string['clialreadyinstalled'] = '.ﺩﺭﺍﺩ ﺩﻮﺟﻭ config.php ﯼﺪﻨﺑﺮﮑﯿﭘ ﻞﯾﺎﻓ
ﺯﺍ ﺖﯾﺎﺳ ﻦﯾﺍ ﺭﺩ ﻝﺩﻮﻣ ﯼﺎﻘﺗﺭﺍ ﯼﺍﺮﺑ ﺎﻔﻄﻟ
.ﺪﯿﻨﮐ ﻩﺩﺎﻔﺘﺳﺍ admin/cli/database_install.php';
$string['cliinstallheader'] = 'ﻥﺎﻣﺮﻓ ﻂﺧ ﻖﯾﺮﻃ ﺯﺍ {$a} ﻝﺩﻮﻣ ﺐﺼﻧ ﻪﻣﺎﻧﺮﺑ';
$string['clitablesexist'] = '.ﺪﻨﺘﺷﺍﺩ ﺩﻮﺟﻭ ﻞﺒﻗ ﺯﺍ ﻩﺩﺍﺩ ﻩﺎﮕﯾﺎﭘ ﯼﺎﻫ‌ﻝﻭﺪﺟ
.ﺪﺑﺎﯾ ﻪﻣﺍﺩﺍ ﺪﻧﺍﻮﺗ‌ﯽﻤﻧ cli ﺐﺼﻧ';
$string['databasehost'] = 'میزبان پایگاه داده';
$string['databasename'] = 'نام پایگاه داده';
$string['databasetypehead'] = 'راه‌انداز پایگاه داده را انتخاب کنید';
$string['dataroot'] = 'دایرکتوری داده';
$string['datarootpermission'] = 'ﺎﻫ‌ﻩﺩﺍﺩ ِﯼﺭﻮﺘﮐﺮﯾﺍﺩ ﺯﻮﺠﻣ';
$string['dbprefix'] = 'پیشوند جدول‌ها';
$string['dirroot'] = 'دایرکتوری مودل';
$string['environmenthead'] = 'بررسی محیط شما ...';
$string['environmentsub2'] = 'هر کدام از انتشارهای مودل حداقل نیازمندی مخصوص به خود را در مورد نسخهٔ PHP‌ و وجود داشتن برخی از افزونه‌های PHP دارد.
پیش از هر نصب و ارتقا، بررسی کامل محیط انجام می‌شود. اگر نمی‌دانید چطور نسخهٔ جدید PHP را نصب کنید یا افزونه‌های PHP را فعال کنید، لطفا با مسئول کارگزار خود تماس بگیرید.';
$string['errorsinenvironment'] = 'بررسی محیط ناموفق بود!';
$string['installation'] = 'در حال نصب';
$string['langdownloaderror'] = 'متأسفانه زبان «{$a}» نصب نشد. فرآیند نصب به زبان انگلیسی ادامه خواهد یافت.';
$string['memorylimithelp'] = '<p>حد حافظهٔ PHP کارگزار شما هم‌اکنون {$a}  است.</p>

<p>این مسئله ممکن است در آینده سبب بروز مشکلات مربوط به حافظه برای مودل شود،
به‌خصوص اگر شما ماژول‌های فعال و/یا کاربران زیادی داشته باشید.</p>

<p>توصیه می‌کنیم که در صورت امکان PHP را با مقدار بیشتری مثل 40M پیکربندی نمائید.
روش‌های متعددی برای انجام این کار وحود دارد که می‌توانید آن‌ها را امتحان نمائید:</p>
<ol>
<li>اگر می‌توانید، PHP را با <span dir="ltr"><i>--enable-memory-limit</i></span> مجدداً compile نمائید.
این کار به مودل اجازه خواهد داد که حد حافظه را خودش تعیین کند.</li>
<li>اگر به فایل php.ini خود دسترسی دارید، می‌توانید مقدار <b>memory_limit</b>
را به چیزی مثل 40M تغییر دهید. اگر دسترسی ندارید، می‌توانید
از مدیر کارگزار خود بخواهید که این کار را برای شما انجام دهد.</li>
<li>در بعضی از کارگزارهای PHP شما می‌توانید یک فایل <span dir="ltr">.htaccess</span> محتوی خط زیر
در دایرکتوری مودل ایجاد کنید:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>اگرچه، در برخی از کارگزارها انجام این کار موجب جلوگیری از کارکردن <b>همهٔ</b> صفحه‌های PHP خواهد شد
(هنگام مشاهدهٔ صفحه‌ها خطاهایی خواهید دید) و مجبور خواهید بود که فایل <span dir="ltr">.htaccess</span> را پاک کنید.</p></li>
</ol>';
$string['paths'] = 'مسیرها';
$string['pathserrcreatedataroot'] = 'دایرکتوری داده (<string dir="ltr" style="direction:ltr;display:inline-block;">{$a->dataroot}</span>) نمی‌تواند توسط برنامهٔ نصب ایجاد شود.';
$string['pathshead'] = 'تایید مسیرها';
$string['pathsrodataroot'] = 'دایرکتوری داده قابل نوشتن نیست.';
$string['pathsroparentdataroot'] = 'دایرکتوری مادر (<string dir="ltr" style="direction:ltr;display:inline-block;">{$a->parent}</span>) قابل نوشتن نیست. دایرکتوری داده (<string dir="ltr" style="direction:ltr;display:inline-block;">{$a->dataroot}</span>) نمی‌تواند توسط برنامهٔ نصب ایجاد شود.';
$string['pathssubadmindir'] = 'وب‌سایت‌های خیلی کمی از <span dir="ltr" style="display:inline-block;direction:ltr">/admin</span> به‌عنوان پیوند ویژه‌ای برای دستیابی به یک
control panel یا چیز دیگری استفاده می‌کنند. متأسفانه این مسئله با
محل استاندارد صفحه‌های مدیر در مودل تداخل دارد. این مشکل را می‌توانید
با تغییر نام دایرکتوری admin در فایل‌های نصب و قرار دادن
نام جدید در این قسمت برطرف نمائید. به‌عنوان مثال: <em>moodleadmin</em>. این کار پیوندهای مدیر در مودل را اصلاح خواهد کرد.';
$string['pathssubdataroot'] = '<p>دایرکتوری‌ای مودل تمام فایل‌هایی که توسط کاربران ارسال می‌شود را نگهداری می‌کند.</p>
<p>این دایرکتوری باید توسط کاربر کارگزار وب (معمولا www-data یا nobody یا apache) هم قابل خواندن و هم قابل نوشتن باشد.</p>
<p>این دایرکتوری نباید مستقیما بر روی وب قابل دسترسی باشد.</p>
<p>اگر دایرکتوری در حال حاضر وجود نداشته باشد، فرایند نصب سعی می‌کند که آن را بسازد.</p>';
$string['pathssubdirroot'] = '<p>مسیر کامل دایرکتوری‌ای که محتوی کد مودل است.</p>';
$string['pathssubwwwroot'] = '<p>آدرس کامل دسترسی به مودل؛ یعنی آدرسی که کاربران برای دسترسی به مودل در نوار آدرس مرورگرشان وارد می‌کنند.</p>
<p>دسترسی به مودل از طریق چند آدرس امکان‌پذیر نیست. اگر سایت شما توسط آدرس‌های مختلفی قابل دسترسی است آنگاه ساده‌ترین آنها را انتخاب کنید و تمام آدرس‌های دیگر را روی آن ریدایرکت کنید (permanent redirect).</p>
<p>اگر سایت شما هم از طریق اینترنت و هم از طریق شبکهٔ محلی (که گاهی به آن اینترانت هم می‌گویند) قابل دسترسی است، آنگاه آدرس عمومی را در این قسمت استفاده کنید.</p>
<p>اگر آدرس فعلی درست نیست، لطفا آدرس را در نوار آدرس مرورگر خود تغییر دهید و فرایند نصب را از اول شروع کنید.</p>';
$string['pathsunsecuredataroot'] = 'محل دایرکتوری داده امن نیست';
$string['pathswrongadmindir'] = 'دایرکتوری مدیر وجود ندارد';
$string['phpextension'] = 'افزونهٔ {$a} در PHP';
$string['phpversion'] = 'نسخهٔ PHP';
$string['phpversionhelp'] = '<p>مودل نیاز به PHP نسخهٔ حداقل 5.6.5 یا 7.1 دارد (<span dir="ltr" style="direction: ltr; display: inline-block">7.0.x</span> محدودیت‌هایی در engine اش دارد).</p>
<p>شما در حال حاضر از نسخهٔ {$a} استفاده می‌کنید</p>
<p>باید PHP را ارتقاء دهید یا از کارگزاری دارای نسخهٔ جدیدتر PHP استفاده نمائید.</p>';
$string['welcomep10'] = '{$a->installername} (<span dir="ltr">{$a->installerversion}</span>)';
$string['welcomep20'] = 'دیدن این صفحه به معنی نصب و راه‌اندازی موفق بستهٔ
    <strong>{$a->packname} <span dir="ltr">{$a->packversion}</span></b></strong> است. تبریک!';
$string['welcomep30'] = 'این نسخهٔ <strong>{$a->installername}</strong> شامل برنامه‌هایی
برای ایجاد محیطی برای کار کردن <strong>مودل</strong> است، برای مثال:';
$string['welcomep40'] = 'بستهٔ مورد نظر همچنین شامل <strong>مودل <span dir="ltr>{$a->moodlerelease}</span> )<span dir="ltr>{$a->moodleversion}</span>(</strong> است.';
$string['welcomep50'] = 'استفاده از هر کدام از برنامه‌های این بسته توسط اجازه‌نامه‌های مربوطهٔ آن‌ها معین
شده است. بستهٔ کامل <strong>{$a->installername}</strong>
<a href="https://www.opensource.org/docs/definition_plain.html">متن‌باز</a> است و تحت
اجازه‌نامهٔ <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a> توزیع شده است.';
$string['welcomep60'] = 'صفحه‌های بعدی با مراحل ساده‌ای شما را هدایت می‌کنند تا
<strong>مودل</strong> را روی رایانهٔ خود پیکربندی و برپا کنید. می‌توانید تنظیمات
پیش‌فرض را بپذیرید یا (در صورت تمایل) آن‌ها را مطابق با نیاز خود تغییر دهید.';
$string['welcomep70'] = 'برای برپاسازی <strong>مودل</strong> بر روی دکمهٔ «بعدی» در پائین کلیک نمائید.';
$string['wwwroot'] = 'آدرس وب';
