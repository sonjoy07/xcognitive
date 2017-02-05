-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 04:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xcognitive`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `auther_name` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `published_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publication_status` tinyint(1) NOT NULL COMMENT '1=>publish,2=>not publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `category_id`, `blog_title`, `auther_name`, `blog_image`, `author_email`, `short_description`, `long_description`, `published_date`, `publication_status`) VALUES
(7, 2, 'Opinion: The neglected story of road crashes ', 'Amitava Kar', 'khagrachariwb.jpg', 'amirava@gmail.com', '<p>Yet in another bizarre incident on the road, eight people were killed in Khagrachari as a stone-laden truck rammed a crowd that had gathered outside a Buddhist monastery to attend a funeral of a monk.</p>\r\n\r\n<p>Who is the culprit this time? As in many other crashes that take away lives on the country&rsquo;s roads and highways every day, it was the assistant of the driver -- commonly called a &ldquo;helper&rdquo;-- who was driving the heavy vehicle at the time of the incident.</p>\r\n\r\n<p>I wonder if he had a valid driver&rsquo;s licence or adequate training to drive a truck.</p>\r\n', '<p>Now that he has been arrested by the police for interrogation, what happens next? If everything goes as per rules, perhaps a criminal case will be filed against him for reckless driving.&nbsp;</p>\r\n\r\n<p>But is that enough? What about the family members of the victims, two of whom were candidates for the ongoing SSC exam? Who will compensate them for their loss? How much are their lives worth? Can we put a price on human lives?</p>\r\n\r\n<p>And yet it has to be done because it is not only about money. It&rsquo;s about establishing accountability in the public transport system of the country. Most road crashes are a direct consequence of lack of order characterised by unfit vehicles, untrained drivers, carelessness of pedestrians, negligence of Traffic authority and relevant departments. What usually follows a crash reinforces the chaos, the lawlessness that prevails on the roads: the mob beats up the driver if they can catch him.</p>\r\n\r\n<p><u><strong><a href="http://www.thedailystar.net/frontpage/8-killed-truck-rams-crowd-1355824" target="_blank">Read More:&nbsp;8 killed as truck rams crowd</a></strong></u></p>\r\n\r\n<p>In some cases, the police arrest him as in the case of Khagrachari. If someone dies or gets severely injured, they may get some kind of immediate payout from the owner of the vehicle or the driver, but nothing close to their loss.</p>\r\n\r\n<p>No one sues them for damages or loss. Because the idea that victims of a car crash may have the right to claim compensation from the party at fault is mostly unknown in Bangladesh, although the law -- Section 128 of the Motor Vehicle Ordinance 1983 -- has provision for it. I think it is imperative that this long-neglected law was brought to public notice so that people become aware that under this Act, not only the drivers but also owners of the vehicles and insurers are responsible as liable parties. When people know about this law, they will know that they have a means to be legally compensated for their losses.</p>\r\n\r\n<p>That, experts believe, will lead to a greater accountability established for vehicle/transport company owners and insurers, who will in turn, out of their own self interest, be motivated to support and institute measures for improvement of road safety, i.e. proper driver training, more rigorous enforcement of vehicle fitness standards, requiring first party insurance for all public transport vehicles and perhaps, goodwill of political parties.</p>\r\n\r\n<div>\r\n<p>Bangladesh is one of the deadliest places in the world on the roads. Road crashes continue to kill unabated ever day. First, measures should be taken to reduce their number. Then there should be legal framework through which victims and their families can claim compensation.&nbsp;</p>\r\n</div>\r\n', '2017-02-04 19:57:29', 1),
(8, 3, 'New organ discovered inside human belly', 'Star Online Report', 'new-organ-web.jpg', '', '<p>Irish researchers have confirmed that the mesentery &mdash; a fold of membrane that connects the intestine to the abdomen &mdash; is its own continuous organ, and not a series of fragmented parts like experts had previously thought, reports Yahoo News.</p>\r\n\r\n<p>So, this week, as you dream up ways to improve yourself in 2017, give yourself a pat on the back: You&#39;ve already made a significant change this year, from deep within your belly.</p>\r\n\r\n<p>You technically gained an organ.</p>\r\n', '<p>The discovery could create a new field of &quot;mesenteric&quot; science and may help doctors better understand and treat abdominal diseases, said Calvin Coffey, a professor of surgery at University of Limerick&#39;s Graduate Entry Medical School, according to the report in Yahoo News.</p>\r\n\r\n<p>&quot;We are now saying we have an organ in the body which hasn&#39;t been acknowledged as such to date,&quot; he said in a news release.</p>\r\n\r\n<p>Coffey published his peer-reviewed findings in the November issue of The Lancet Gastroenterology &amp; Hepatology, a top medical journal on the digestive system, reports Yahoo News quoting <a href="http://mashable.com/2017/01/03/new-organ-mesentery/#feyh8bvhhmq7">Mashable</a>.</p>\r\n\r\n<p>Mashable was unable to reach Coffey for comment by the time of publication.</p>\r\n\r\n<p>An organ is considered to be a self-contained body part that serves a specific vital function. The heart, for instance, is a muscular organ that pumps blood through our blood vessels.</p>\r\n\r\n<p>Researchers say they still don&#39;t quite understand the mesentery&#39;s key functions, beyond the obvious role as a connective layer, reports Yahoo News.</p>\r\n\r\n<p>One of the world&#39;s earliest depictions of the mesentery was produced by the Italian Renaissance artist Leonardo da Vinci. While his drawing and subsequent medical illustrations showed the mesentery as a continuous structure, in the past century scientists came to believe it was a series of broken-up pieces, and thus less medically significant, according to the report.</p>\r\n\r\n<p>In 2012, Coffey and his colleagues first showed through microscopic analyses that the fold of membrane was, in fact, a single connected structure, says the report.</p>\r\n\r\n<p>Over the last four years, the team continued to collect evidence confirming the mesentery&#39;s classification as an organ, which culminated with the November paper.</p>\r\n\r\n<p>The research prompted the publishers of Gray&#39;s Anatomy, one of the world&#39;s best-known medical textbooks, to update the entry for mesentery, reports Yahoo News.</p>\r\n\r\n<p>Elsevier, which publishes both Gray&#39;s Anatomy and The Lancet journal, included the reclassification of mesentery in its 41st edition of Gray&#39;s, which came out September 2015, Mashable confirmed.</p>\r\n\r\n<p>Coffey said that better understanding and further scientific study of the mesentery could result in less invasive abdominal surgeries, fewer complications and faster patient recovery, according to the report in Yahoo News.</p>\r\n\r\n<p>&quot;When we approach it like every other organ...we can categorize abdominal disease in terms of this organ,&quot; he said in the news release.</p>\r\n\r\n<p>&quot;This is relevant universally as it affects all of us,&quot; he added. &quot;Up to now there was no such field as mesenteric science.&quot;</p>\r\n', '2017-02-04 21:33:44', 1),
(9, 4, 'UK first country to legally offer ''three-parent'' gene therapy', 'AFP, London', 'three-parent_gene_therapy.jpg', '', '<p>Britain&#39;s fertility regulator on Thursday gave the green light for the country to become the first in the world to legally offer &quot;three-parent baby&quot; fertility treatments.</p>\r\n', '<p>The technique would allow women who carry disease-causing mutations in their mitochondrial genes to give birth to genetically-related children free of mitochondrial disease.<br />\r\n<br />\r\nBritish lawmakers had voted in February to allow the creation of in-vitro fertilisation (IVF) babies with DNA from three people, but clinics needed to obtain licences from the Human Fertilisation and Embryology Authority (HFEA) before introducing the mitochondrial gene therapy.<br />\r\n<br />\r\nHFEA chair Sally Cheshire called the decision to license the treatment &quot;historic and important&quot; and &quot;a world first&quot;.<br />\r\n<br />\r\n&quot;I&#39;m sure patients who might be in line for this treatment will be really pleased by what we&#39;ve decided today,&quot; she said, but added: &quot;We will proceed with caution.&quot;<br />\r\n<br />\r\nAn independent panel of experts last month said the practice should be &quot;cautiously adopted&quot; to prevent certain genetic diseases from being passed on to future generations.<br />\r\n<br />\r\nMitochondria are structures in cells which generate vital energy and contain their own set of genes called mDNA which is passed through the mother.<br />\r\n<br />\r\nMitochondrial diseases cause symptoms ranging from poor vision to diabetes and muscle wasting, and health officials estimate around 125 babies are born with the mutations in Britain every year.<br />\r\n<br />\r\nBut opponents have warned that it paves the way for &quot;designer babies&quot;.<br />\r\n<br />\r\nThe treatment involves the embryo receiving the usual &quot;nuclear&quot; DNA from the mother and father, as well as a small amount of healthy mitochondrial DNA (mDNA) from a female donor.<br />\r\n<br />\r\nThe review panel recommended its clinical use &quot;in specific circumstances... where inheritance of the disease is likely to cause death or serious disease and where there are no acceptable alternatives.&quot;<br />\r\n<br />\r\nThe first women could receive the treatment as early as March or April, with a pioneering research centre in Newcastle, northeast England, expected to kickstart the programme.<br />\r\n<br />\r\n&quot;We are delighted by today&#39;s decision,&quot; said Doug Turnbull, director of the Wellcome Centre for Mitochondrial Research at Newcastle University.<br />\r\n<br />\r\n&quot;In Newcastle, we will be aiming to treat up to 25 carefully selected patients a year with the mitochondrial donation technique.&quot;<br />\r\n<br />\r\nRobert Meadowcroft, CEO of charity Muscular Dystrophy, said the decision gave affected parents &quot;new hope and choice for the first</p>\r\n', '2017-02-04 21:35:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Cricket', ''),
(2, 'International', ''),
(3, 'Exclusive', 'a'),
(4, 'science', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comments_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comments`, `user_id`, `blog_id`, `comments_date`) VALUES
(1, 'sadfasf', 1, 0, '2017-02-03 18:29:44'),
(2, 'sdfsdf', 1, 6, '2017-02-03 19:37:20'),
(3, 'sdfsdf', 1, 6, '2017-02-03 19:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `expert_details`
--

CREATE TABLE `expert_details` (
  `expert_id` int(11) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `expert_name` varchar(255) NOT NULL,
  `expert_designation` varchar(255) NOT NULL,
  `experts_image` varchar(255) NOT NULL,
  `expert_about` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `Education` text NOT NULL,
  `award` text NOT NULL,
  `Experience` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT '1=>published,2=>unpublished'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(1) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `welcome_message` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `bg_video` varchar(255) NOT NULL,
  `works_details` text NOT NULL,
  `youtube_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `logo`, `welcome_message`, `introduction`, `bg_video`, `works_details`, `youtube_video`) VALUES
(1, '91887-logo.png', 'Xcognetive', 'consult with expert Phychologists', 'd18c0-bd-video.mp4', 'Primum in nostrane potestate est, quid meminerimus? Nemo igitur esse beatus potest. An est aliquid per se ipsum flagitiosum, etiamsi nulla comitetur infamia? Vestri haec verecundius, illi fortasse constantius. Haec et tu ita posuisti, et verba vestra sunt. Eaedem enim utilitates poterunt eas labefactare atque pervertere. Quid censes in Latino fore? Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia. Sed haec in pueris; Nunc omni virtuti vitium contrario nomine opponitur. ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Io0fBr1XBUA" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_icon`) VALUES
(1, 'Theropy for Sexual Wellness', 'aabc0-feat_icon_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'sonjoy', '$2a$08$EGvL3.TmKYctiA/OvaI1/OCjc19i4tsknvVAxTOCi2r8q2nOFhdRG', 'sonjoy@gmail.com', 1, 0, NULL, NULL, NULL, NULL, 'd8bbaa9dfda9ba7091131f1cc217c2b5', '::1', '2017-02-04 21:31:08', '2017-02-04 18:31:59', '2017-02-04 20:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id_user_type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1=>admin,2=>user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id_user_type`, `user_id`, `type`) VALUES
(1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `expert_details`
--
ALTER TABLE `expert_details`
  ADD PRIMARY KEY (`expert_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expert_details`
--
ALTER TABLE `expert_details`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
