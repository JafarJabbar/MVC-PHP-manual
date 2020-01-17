-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 15 Okt, 2019 saat 11:20
-- Server versiyası: 10.1.28-MariaDB
-- PHP Versiyası: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `cms`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_url` varchar(255) NOT NULL,
  `category_seo` varchar(1500) NOT NULL,
  `category_template` varchar(255) DEFAULT '',
  `category_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_url`, `category_seo`, `category_template`, `category_date`) VALUES
(2, 'Php', 'php-blog-video', '{\"title\":\"blog php video proqramlasdirma\",\"description\":\"blog php video proqramlasdirma\"}', '', '2019-09-29 18:46:32'),
(3, 'Python', 'python-dersleri', '{\"title\":\"python blog web development web site\",\"description\":\"python blog web development web site\"}', '', '2019-09-29 20:38:00'),
(4, 'CSS', 'css', '{\"title\":\"blog css video proqramlasdirma\",\"description\":\"blog css video proqramlasdirma\"}', '', '2019-10-04 20:26:35'),
(6, 'HTML', 'html5-html', '{\"title\":\"front_end html css\",\"description\":\"\\u015eu yaz\\u0131mda php ile nas\\u0131l excel dosyas\\u0131 olu\\u015fturulaca\\u011f\\u0131n\\u0131 g\\u00f6stermi\\u015ftim. Bu yaz\\u0131mda ise, daha elzem bir konuya de\\u011finece\\u011fiz. Ge\\u00e7enlerde bir excel dosyas\\u0131n\\u0131n i\\u00e7inden verileri almam gerekti, ara\\u015ft\\u0131r\\u0131rken bakt\\u0131m ki \\u00e7ok kalabal\\u0131k kodlar var, benim amac\\u0131m alt taraf\\u0131 sat\\u0131r sat\\u0131r okuyup verileri almak o kadar. S\"}', '', '2019-10-09 17:28:49'),
(7, 'React', 'react', '{\"title\":\"\",\"description\":\"\"}', '', '2019-10-09 17:29:28');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_user_id` varchar(255) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` int(11) NOT NULL DEFAULT '1',
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_user_id`, `comment_post_id`, `comment_name`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(35, '24', 21, 'JafarJabbarli', 'djeffcbb2rl@gmail.com', 'mencede', 0, '2019-10-09 17:34:10'),
(36, '24', 20, 'JafarJabbarli', 'djeffcbb2rl@gmail.com', 'Mohteshem!!!', 1, '2019-10-09 17:34:33'),
(37, '', 20, 'Memo369', 'memocbbrl2368@gmail.com', 'ela. superdi.bombadi', 1, '2019-10-09 17:35:03');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact_read_mark` int(11) NOT NULL DEFAULT '0',
  `contact_read_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `contact_read_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_subject`, `contact_message`, `contact_date`, `contact_read_mark`, `contact_read_date`, `contact_read_user`) VALUES
(1, 'Jafar Jabbarli', 'djeffcbbrl@gmail.com', '0506826775', 'Salam', 'Salam', '2019-09-28 20:53:43', 1, '2019-09-29 01:49:15', 'JaffarJabbar'),
(9, 'Jafar Jabbarli', 'djeffcbbrl@gmail.com', '', 'Aleykum salam', 'Aleykum salam', '2019-09-28 21:37:23', 1, '2019-09-28 23:09:08', 'JaffarJabbar'),
(12, 'memocbbrl368', 'memocbbrl368@gmail.com', '', 'As', 'Sa', '2019-09-28 22:44:35', 1, '2019-09-29 11:37:12', 'JaffarJabbar'),
(13, 'Jafar Jabbarli', 'djeffcbbrl@gmail.com', '0506826775', 'scdcd', 'vrrrrrrrrrrr', '2019-09-29 01:53:11', 1, '2019-09-29 13:21:04', 'JaffarJabbar'),
(14, 'Jafar Jabbarli', 'jabbarlijafar@gmail.com', '0506826775', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-09-29 11:40:16', 1, '2019-09-29 18:01:02', 'JaffarJabbar'),
(15, 'Jafar Jabbarli', 'djeffcbbrl@gmail.com', '0506826775', 'Aleykum salam', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-09-29 11:44:55', 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_content` text NOT NULL,
  `menu_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_title`, `menu_content`, `menu_date`) VALUES
(53, 'Header', '[{\"title\":\"Ana s\\u0259hif\\u0259\",\"url\":\"\"},{\"title\":\"Blog\",\"url\":\"blog\"},{\"title\":\"Referanslar\",\"url\":\"references\",\"submenu\":[{\"title\":\"Web development\",\"url\":\"web_development\"},{\"title\":\"Web design\",\"url\":\"web_design\"},{\"title\":\"Mobile application\",\"url\":\"mobile_application\"}]},{\"title\":\"Haqq\\u0131mda\",\"url\":\"page\"},{\"title\":\"Biziml\\u0259 \\u0259laq\\u0259\",\"url\":\"contact\"}]', '2019-09-26 15:30:23');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `page_seo` varchar(1000) NOT NULL,
  `page_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_url`, `page_content`, `page_seo`, `page_date`) VALUES
(6, 'Haqqımda', 'about-me', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff; text-align: left;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;img src=&quot;../upload/files/download.png&quot; alt=&quot;&quot; width=&quot;328&quot; height=&quot;154&quot; /&gt;Eskişehir&lt;/span&gt;&amp;lsquo;de doğdum ve hala &lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;em&gt;&lt;strong&gt;eskişehir&amp;rsquo;de&lt;/strong&gt; &lt;/em&gt;&lt;/span&gt;yaşamaktayım. Zaman zaman projeler dolayısıyla başka&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;şehir&lt;/span&gt;&amp;nbsp;ve&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&amp;uuml;lke&lt;/span&gt;lere seyahatlerim oldu. Gezmeyi ve &amp;ccedil;alışmayı &amp;ccedil;ok seviyorum.&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Yeni fikirler&lt;/span&gt;&amp;nbsp;her zaman beni heyecanlandırıyor. &amp;Uuml;zerinde &amp;ccedil;alıştığım bir fikrim var ise, bitirene kadar rahat bir uyku &amp;ccedil;ekemem.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Sekt&amp;ouml;rde neredeyse 10 senelik bir ge&amp;ccedil;mişim var. &amp;Ouml;ğrenmeyi ve &amp;ouml;ğretmeyi seven birisiyim. Hayatım boyunca her zaman&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;freelance&lt;/span&gt;&amp;nbsp;&amp;ccedil;alıştım,&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;open source&lt;/span&gt;&amp;nbsp;k&amp;uuml;lt&amp;uuml;r&amp;uuml;ne bağlı bağımsız bir hayat s&amp;uuml;r&amp;uuml;yorum.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Yazılım dili olarak&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;PHP&lt;/span&gt;, onun yanında&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Front-end&lt;/span&gt;&amp;nbsp;ve&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Mobil Uygulama&lt;/span&gt;lar i&amp;ccedil;in Hybrid olarak geliştirmeler yapıyorum. &amp;Ccedil;alışırken m&amp;uuml;zik dinlemeye bayılırım, belli bir şeye odaklanmama yardımcı oluyor. Klavyeyi iyi kullanmaktan ve pratik d&amp;uuml;ş&amp;uuml;nmemden dolayı yaptığım işleri &amp;ccedil;ok hızlı bitiriyorum.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Zaman zaman gerek&amp;nbsp;&lt;em style=&quot;box-sizing: border-box;&quot;&gt;front-end&lt;/em&gt;&amp;nbsp;gerekse&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;back-end&lt;/span&gt;&amp;nbsp;i&amp;ccedil;in k&amp;uuml;&amp;ccedil;&amp;uuml;k &amp;ccedil;aplı uygulamalar ve eklentiler yazarak bloğum ve&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: transparent;&quot; href=&quot;https://github.com/tayfunerbilen&quot;&gt;github&lt;/a&gt;&lt;/span&gt;&amp;nbsp;adresim &amp;uuml;zerinden paylaşıyorum.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Bunun dışında 2009&amp;rsquo;dan beri&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: transparent;&quot; href=&quot;https://youtube.com/uzmanvideo&quot;&gt;youtube kanalım&lt;/a&gt;&lt;/span&gt;da videolu eğitimler hazırlıyorum. Bildiklerimi paylaşmaktan keyif alıyorum ve bunu herkese tavsiye ediyorum.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Kod yazarken&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;PHPStorm&lt;/span&gt;&amp;nbsp;IDE&amp;rsquo;sini kullanıyorum, bilgisayar olarak&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Macbook Pro&lt;/span&gt;, monit&amp;ouml;r olarak&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;BenQ&lt;/span&gt;&amp;lsquo;nun 35&amp;rsquo; monit&amp;ouml;r&amp;uuml;n&amp;uuml; kullanıyorum. M&amp;uuml;ziği &amp;ccedil;ok sevdiğim i&amp;ccedil;in&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;JBL Xtreme&lt;/span&gt;&amp;nbsp;cihazına da sahibim. Videolu eğitimlerim i&amp;ccedil;inse&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Komplete Audio 6&lt;/span&gt;&amp;nbsp;ses kartı ve&amp;nbsp;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Rode NT1-A&lt;/span&gt;&amp;nbsp;marka bir mikrofona sahibim. Yukarıdaki g&amp;ouml;rsel benim evimdeki &amp;ccedil;alışma alanımdır.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Benimle front-end, back-end ve mobil uygulamalarınız i&amp;ccedil;in &amp;ccedil;alışmak isterseniz&amp;nbsp;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: transparent;&quot; href=&quot;mailto:tayfunerbilen@gmail.com&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;tayfunerbilen@gmail.com&lt;/span&gt;&lt;/a&gt;&amp;nbsp;adresine mail atmanız yeterli.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-weight: bolder;&quot;&gt;Yurtdışı deneyimlerim:&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box;&quot; /&gt;2013 &amp;ndash; Bosna-Hersek (Saraybosna)&lt;br style=&quot;box-sizing: border-box;&quot; /&gt;2014 &amp;ndash; Azerbaycan (Bak&amp;uuml;)&lt;br style=&quot;box-sizing: border-box;&quot; /&gt;2015 &amp;ndash; Kıbrıs (Girne)&lt;br style=&quot;box-sizing: border-box;&quot; /&gt;2016 &amp;ndash; Malta&lt;br style=&quot;box-sizing: border-box;&quot; /&gt;2016 &amp;ndash; Hollanda (Amsterdam)&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '{\"title\":\"Haqq\\u0131mda\",\"description\":\"\"}', '2019-10-01 11:18:15'),
(8, 'Bizimlə əlaqə', 'contact', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;pre style=&quot;background-color: #ffffff; font-family: \'Courier New\'; font-size: 9pt;&quot;&gt;&lt;br /&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;section &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;jumbotron text-center&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;container&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;        &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;h1&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;Bizimlə əlaqə&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;h1&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;        &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;breadcrumb-custom&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;a &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;href=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #f7faff; font-weight: bold;&quot;&gt;&amp;lt;?= &lt;/span&gt;&lt;span style=&quot;background-color: #f7faff;&quot;&gt;site_url() &lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #f7faff; font-weight: bold;&quot;&gt;?&amp;gt;&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;Anasayfa&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;a&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt; /&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;a &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;href=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&quot; &lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;İletişim&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;a&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;        &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;section&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;container&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;form &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;action=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;id=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;contact-form&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;onsubmit=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&lt;/span&gt;&lt;span style=&quot;color: #000080; font-weight: bold;&quot;&gt;return false&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot; &lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;        &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;alert alert-danger&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;style=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&lt;/span&gt;&lt;span style=&quot;color: #0000ff; font-weight: bold;&quot;&gt;display&lt;/span&gt;: &lt;span style=&quot;color: #008000; font-weight: bold;&quot;&gt;none&lt;/span&gt;;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;id=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;contact-error-msg&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;role=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;alert&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;        &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;alert alert-success&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;style=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&lt;/span&gt;&lt;span style=&quot;color: #0000ff; font-weight: bold;&quot;&gt;display&lt;/span&gt;: &lt;span style=&quot;color: #008000; font-weight: bold;&quot;&gt;none&lt;/span&gt;;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;id=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;contact-success-msg&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;role=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;alert&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;        &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;row&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;col-md-6&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-group&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;for=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;name&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;Ad-Soyad&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;input &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;type=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;text&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-control&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;name=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;name&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;col-md-6&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-group&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;for=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;email&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;E-mail&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;input &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;type=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;email&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-control&quot;  &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;name=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;email&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;col-md-6&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-group&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;for=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;phone&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;Telefon&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;input &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;type=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;text&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-control&quot;  &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;name=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;phone&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;col-md-6&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-group&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;for=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;subject&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;Mesajın m&amp;ouml;vzusu&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;input &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;type=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;text&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-control&quot;  &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;name=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;subject&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;col-md-12&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-group&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;for=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;message&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;Mesaj&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;label&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;textarea  &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;name=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;message&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;cols=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;30&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;rows=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;5&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;form-control&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;textarea&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;                &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;button &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;type=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;submit&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;onclick=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;&lt;/span&gt;&lt;span style=&quot;color: #000080; font-weight: bold;&quot;&gt;return &lt;/span&gt;&lt;span style=&quot;font-style: italic;&quot;&gt;contact&lt;/span&gt;(&lt;span style=&quot;color: #008000; font-weight: bold;&quot;&gt;\'#contact-form\'&lt;/span&gt;)&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot; &lt;/span&gt;&lt;span style=&quot;color: #0000ff; background-color: #efefef; font-weight: bold;&quot;&gt;class=&lt;/span&gt;&lt;span style=&quot;color: #008000; background-color: #efefef; font-weight: bold;&quot;&gt;&quot;btn btn-primary&quot;&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;G&amp;ouml;nder&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;button&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;            &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;    &lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;form&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;lt;/&lt;/span&gt;&lt;span style=&quot;color: #000080; background-color: #efefef; font-weight: bold;&quot;&gt;div&lt;/span&gt;&lt;span style=&quot;background-color: #efefef;&quot;&gt;&amp;gt;&lt;/span&gt;&lt;/pre&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '{\"title\":\"Biziml\\u0259 \\u0259laq\\u0259\",\"description\":\"contact_us\"}', '2019-10-01 12:25:50');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_url` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_short_content` text NOT NULL,
  `post_seo` text NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_categories` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_url`, `post_content`, `post_short_content`, `post_seo`, `post_status`, `post_categories`, `post_date`) VALUES
(20, 'PHP ile Excel Dosyalarını Okumak', 'php-ile-excel-dosyalarini-okumak', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: transparent;&quot; href=&quot;https://www.erbilen.net/php-excel/&quot;&gt;Şu yazımda&lt;/a&gt;&amp;nbsp;php ile nasıl excel dosyası oluşturulacağını g&amp;ouml;stermiştim. Bu yazımda ise, daha elzem bir konuya değineceğiz. Ge&amp;ccedil;enlerde bir excel dosyasının i&amp;ccedil;inden verileri almam gerekti, araştırırken baktım ki &amp;ccedil;ok kalabalık kodlar var, benim amacım alt tarafı satır satır okuyup verileri almak o kadar. Sonra bir repo&amp;rsquo;ya denk geldim, Sergey Shuchkin abimiz bir sınıf yazmış bu işlemler i&amp;ccedil;in. Basit, kullanışlı, amaca hitap ediyor.&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;&amp;Ouml;ncelikle dosyaları şuradan temin edin;&lt;br style=&quot;box-sizing: border-box;&quot; /&gt;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: transparent;&quot; href=&quot;https://github.com/shuchkin/simplexlsx&quot;&gt;https://github.com/shuchkin/simplexlsx&lt;/a&gt;&amp;nbsp;(not: adama star atmayı unutmayın :D)&lt;/p&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;Kullanımı ise &amp;ccedil;ok basit;&lt;/p&gt;\r\n&lt;pre style=&quot;box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; margin-top: 0px; margin-bottom: 1rem; overflow: auto; color: #212529; background: #f5f5f5; padding: 10px; border-radius: 3px;&quot;&gt;if ( $xlsx = SimpleXLSX::parse(\'test.xlsx\') ) {\r\n    print_r( $xlsx-&amp;gt;rows() );\r\n} else {\r\n    echo SimpleXLSX::parse_error();\r\n}&lt;/pre&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;excel&amp;rsquo;deki satırları dizi halinde size verecek, se&amp;ccedil;ip istediğinizi kullanabilirsiniz.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: #ffffff; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px;&quot; href=&quot;https://www.erbilen.net/php-excel/&quot;&gt;Şu yazımda&lt;/a&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;&amp;nbsp;php ile nasıl excel dosyası oluşturulacağını g&amp;ouml;stermiştim. Bu yazımda ise, daha elzem bir konuya değineceğiz. Ge&amp;ccedil;enlerde bir excel dosyasının i&amp;ccedil;inden verileri almam gerekti, araştırırken baktım ki &amp;ccedil;ok kalabalık kodlar var, benim amacım alt tarafı satır satır okuyup verileri almak o kadar. Sonra bir repo&amp;rsquo;ya denk geldim, Sergey Shuchkin abimiz bir sınıf yazmış bu işlemler i&amp;ccedil;in. Basit, kullanışlı, amaca hitap ediyor.&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '{\"title\":\"php-ile-excel-dosyalarini-okumak\",\"description\":\"\\u015eu yaz\\u0131mda php ile nas\\u0131l excel dosyas\\u0131 olu\\u015fturulaca\\u011f\\u0131n\\u0131 g\\u00f6stermi\\u015ftim. Bu yaz\\u0131mda ise, daha elzem bir konuya de\\u011finece\\u011fiz. Ge\\u00e7enlerde bir excel dosyas\\u0131n\\u0131n i\\u00e7inden verileri almam gerekti, ara\\u015ft\\u0131r\\u0131rken bakt\\u0131m ki \\u00e7ok kalabal\\u0131k kodlar var, benim amac\\u0131m alt taraf\\u0131 sat\\u0131r sat\\u0131r okuyup verileri almak o kadar.\"}', '1', '2', '2019-10-09 17:26:14'),
(21, 'Mac’de MAMP Mysql Başlamıyor Hatası ve Çözümü', 'mac-de-mamp-mysql-baslamiyor-hatasi-ve-cozumu', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;&amp;Ouml;zellikle aniden bilgisayar kapandığında vs. mamp&amp;rsquo;ı tekrar &amp;ccedil;alıştırdığınızda sadece apache&amp;rsquo;nin &amp;ccedil;alıştığını fark ediyorsunuz. mysql server bir t&amp;uuml;rl&amp;uuml; aktif olmuyor. B&amp;ouml;yle bir durumla karşıla&lt;/span&gt;&lt;a style=&quot;box-sizing: border-box; color: #007bff; text-decoration-line: none; background-color: #ffffff; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px;&quot; href=&quot;https://www.erbilen.net/php-excel/&quot;&gt;Şu yazımda&lt;/a&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt; php ile nasıl excel dosyası oluşturulacağını g&amp;ouml;stermiştim. Bu yazımda ise, daha elzem bir konuya değineceğiz. Ge&amp;ccedil;enlerde bir excel dosyasının i&amp;ccedil;inden verileri almam gerekti, araştırırken baktım ki &amp;ccedil;ok kalabalık kodlar var, benim amacım alt tarafı satır satır okuyup verileri almak o kadar. Sonra bir repo&amp;rsquo;ya denk geldim, Sergey Shuchkin abimiz bir sınıf yazmış bu işlemler i&amp;ccedil;in. Basit, kullanışlı, amaca hitap ediyor.&lt;/span&gt;&lt;span style=&quot;background-color: #ffffff; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px;&quot;&gt;şırsanız terminal&amp;rsquo;i a&amp;ccedil;ıp şu komutu &amp;ccedil;alıştırın;&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; background-color: #ffffff;&quot;&gt;&amp;Ouml;zellikle aniden bilgisayar kapandığında vs. mamp&amp;rsquo;ı tekrar &amp;ccedil;alıştırdığınızda sadece apache&amp;rsquo;nin &amp;ccedil;alıştığını fark ediyorsunuz. mysql server bir t&amp;uuml;rl&amp;uuml; aktif olmuyor. B&amp;ouml;yle bir durumla karşılaşırsanız terminal&amp;rsquo;i a&amp;ccedil;ıp şu komutu &amp;ccedil;alıştırın;&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '{\"title\":\"Mac\\u2019de MAMP Mysql Ba\\u015flam\\u0131yor Hatas\\u0131 ve \\u00c7\\u00f6z\\u00fcm\\u00fc\",\"description\":\"Ge\\u00e7enlerde bir excel dosyas\\u0131n\\u0131n i\\u00e7inden verileri almam gerekti, ara\\u015ft\\u0131r\\u0131rken bakt\\u0131m ki \\u00e7ok kalabal\\u0131k kodlar var, benim amac\\u0131m alt taraf\\u0131 sat\\u0131r sat\\u0131r okuyup verileri almak o kadar. Sonra bir repo\\u2019ya denk geldim, Sergey Shuchkin abimiz bir s\\u0131n\\u0131f yazm\\u0131\\u015f bu i\\u015flemler i\\u00e7in. Basit, kullan\\u0131\\u015fl\\u0131, amaca hitap ediyor.\"}', '1', '2', '2019-10-09 17:27:59'),
(22, 'Mac’de MAMP Mysql Başlamıyor Hatası ve Çözümü  2', 'mac-de-mamp-mysql-baslamiyor-hatasi-ve-cozumu-2', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;test&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '{\"title\":\"\",\"description\":\"\"}', '1', '2', '2019-10-12 20:47:16'),
(23, 'HTML5 dersleri', 'html5-dersleri', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;test&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;test&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '{\"title\":\"\",\"description\":\"\"}', '1', '6', '2019-10-13 16:35:58');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(11) NOT NULL,
  `post_tag_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_tag_id`, `tag_id`) VALUES
(52, 14, 16),
(53, 14, 14),
(54, 14, 3),
(58, 16, 19),
(59, 16, 20),
(60, 16, 21),
(70, 20, 3),
(71, 20, 9),
(72, 20, 8),
(73, 20, 28),
(74, 21, 3),
(75, 21, 11),
(76, 21, 12),
(77, 23, 29),
(78, 23, 30),
(79, 23, 24);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `reference`
--

CREATE TABLE `reference` (
  `reference_id` int(11) NOT NULL,
  `reference_title` varchar(255) NOT NULL,
  `reference_url` varchar(255) NOT NULL,
  `reference_content` text NOT NULL,
  `reference_categories` varchar(255) NOT NULL,
  `reference_tags` varchar(255) NOT NULL,
  `reference_seo` text NOT NULL,
  `reference_demo` varchar(255) NOT NULL,
  `reference_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reference_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `reference`
--

INSERT INTO `reference` (`reference_id`, `reference_title`, `reference_url`, `reference_content`, `reference_categories`, `reference_tags`, `reference_seo`, `reference_demo`, `reference_date`, `reference_image`) VALUES
(4, 'zenit.az', 'zenit-az', 'zenit.az-shopping website', '8', 'html5,css3,jquery,javascript,php,pdo', '{\"title\":\"zenit.az\",\"description\":\"zenit.az shopping website\"}', 'https://zenit.az/', '2019-10-14 11:47:16', 'zenit-az_4793.png'),
(6, 'ecofil.az', 'ecofil-az', 'ecofil.az', '9', 'html5,css3', '{\"title\":\"ecofil.az\",\"description\":\"ecofil.az store information website\"}', 'https://www.ecofil.az', '2019-10-14 12:47:34', 'ecofil-az_706.png'),
(7, 'pltazaazaa', 'xxxxx', 'pltazaazaa', '9', 'php,tag,aasas', '{\"title\":\"plt.az\",\"description\":\"plt.az-information site\"}', 'https://plt.az/', '2019-10-14 12:49:02', 'ecofil-az_706.png');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `reference_categories`
--

CREATE TABLE `reference_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_url` varchar(255) NOT NULL,
  `category_seo` varchar(1500) NOT NULL,
  `category_template` varchar(255) DEFAULT '',
  `category_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `reference_categories`
--

INSERT INTO `reference_categories` (`category_id`, `category_name`, `category_url`, `category_seo`, `category_template`, `category_date`) VALUES
(8, 'Web development', 'web-development', '{\"title\":\"Web development\",\"description\":\"Web development\"}', '', '2019-10-13 23:39:14'),
(9, 'Web design', 'web-design', '{\"title\":\"Web design\",\"description\":\"Web design\"}', '', '2019-10-13 23:39:35'),
(10, 'Mobile application', 'mobile-application', '{\"title\":\"Mobile application\",\"description\":\"Mobile application\"}', '', '2019-10-13 23:39:49');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `tag_url` varchar(255) NOT NULL,
  `tag_seo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`, `tag_url`, `tag_seo`) VALUES
(3, 'php', 'php', ''),
(4, 'blog', 'blog', ''),
(5, 'video', 'video', ''),
(6, 'mvc', 'mvc', ''),
(7, 'laravel', 'laravel', ''),
(8, 'xls', 'xls', ''),
(9, 'excel', 'excel', ''),
(10, 'parse', 'parse', ''),
(11, 'mamp', 'mamp', ''),
(12, 'server', 'server', ''),
(13, 'Array', 'array', ''),
(14, 'php parse', 'php-parse', ''),
(15, 'frontend', 'frontend', ''),
(16, 'python', 'python', ''),
(17, 'php blog', 'php-blog', ''),
(18, 'php video', 'php-video', ''),
(19, 'css', 'css', ''),
(20, 'fron-end', 'fron-end', ''),
(21, 'html', 'html', ''),
(22, 'php html', 'php-html', ''),
(23, 'hypertext3434', 'hypertext12345', '{\"title\":\"\",\"description\":\"\"}'),
(24, 'front-end', 'front-end', ''),
(25, 'tag', 'tag', ''),
(26, 'django', 'django', ''),
(27, 'backend', 'backend', ''),
(28, 'simplexls', 'simplexls', ''),
(29, 'html5', 'html5', ''),
(30, 'css3', 'css3', ''),
(31, 'hyper', 'hyper', '{\"title\":\"hyper\",\"description\":\"test\"}');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_url` varchar(255) NOT NULL,
  `user_rank` int(11) NOT NULL DEFAULT '3',
  `user_permissions` varchar(2000) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_url`, `user_rank`, `user_permissions`, `user_email`, `password`, `user_time`) VALUES
(22, 'JaffarJabbar', 'jaffarjabbar', 1, '{\"index\":{\"show\":\"1\"},\"users\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"contact\":{\"show\":\"1\",\"send\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"menu\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"pages\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"posts\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"tags\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"comments\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"categories\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"reference\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"reference_categories\":{\"show\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"add\":\"1\"},\"settings\":{\"show\":\"1\",\"edit\":\"1\"}}', 'djeffcbbrl@gmail.com', '$2y$10$m6MSqorB07DUeDj0nPy7QOlIoyRgRWKLVHxGVTPwHZLh.WiqnX1vi', '2019-09-25 13:44:44'),
(23, 'memo_cabbarli', 'memo-cabbarli', 3, '{\"index\":{\"show\":\"1\"},\"users\":{\"show\":\"1\"},\"menu\":{\"show\":\"1\"},\"settings\":{\"show\":\"1\"}}', 'jabbarlijafar@gmail.com', '$2y$10$LdDwxbrRQL3aBT1ynZuToeTJTiVC5yrAhTEvhG8gCWdWZbd.LVw3m', '2019-09-25 13:45:03'),
(24, 'JafarJabbarli', 'jafarjabbarli', 2, '{\"index\":{\"show\":\"1\"},\"users\":{\"show\":\"1\"},\"settings\":{\"show\":\"1\"}}', 'djeffcbb2rl@gmail.com', '$2y$10$iwGzVu1s8L7BHnGrOs1hieYaVhFQYP51mKwRw1StoVewyFho4ZV6q', '2019-09-25 13:45:40');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Cədvəl üçün indekslər `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Cədvəl üçün indekslər `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Cədvəl üçün indekslər `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Cədvəl üçün indekslər `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Cədvəl üçün indekslər `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Cədvəl üçün indekslər `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`reference_id`);

--
-- Cədvəl üçün indekslər `reference_categories`
--
ALTER TABLE `reference_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Cədvəl üçün indekslər `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Cədvəl üçün indekslər `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Cədvəl üçün AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Cədvəl üçün AUTO_INCREMENT `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Cədvəl üçün AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Cədvəl üçün AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Cədvəl üçün AUTO_INCREMENT `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Cədvəl üçün AUTO_INCREMENT `reference`
--
ALTER TABLE `reference`
  MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `reference_categories`
--
ALTER TABLE `reference_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Cədvəl üçün AUTO_INCREMENT `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Cədvəl üçün AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
