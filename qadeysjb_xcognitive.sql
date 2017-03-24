-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2017 at 11:54 AM
-- Server version: 10.1.21-MariaDB-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qadeysjb_xcognitive`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(1) NOT NULL COMMENT '1=admin,2=user,3=expert',
  `blog_title` varchar(255) NOT NULL,
  `auther_name` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `published_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publication_status` tinyint(1) NOT NULL COMMENT '1=>publish,2=>not publish',
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `category_id`, `user_id`, `blog_title`, `auther_name`, `blog_image`, `author_email`, `short_description`, `long_description`, `published_date`, `publication_status`) VALUES
(7, 2, 1, 'Opinion: The neglected story of road crashes ', 'Amitava Kar', 'khagrachariwb.jpg', 'amirava@gmail.com', '<p>Yet in another bizarre incident on the road, eight people were killed in Khagrachari as a stone-laden truck rammed a crowd that had gathered outside a Buddhist monastery to attend a funeral of a monk.</p>\r\n\r\n<p>Who is the culprit this time? As in many other crashes that take away lives on the country&rsquo;s roads and highways every day, it was the assistant of the driver -- commonly called a &ldquo;helper&rdquo;-- who was driving the heavy vehicle at the time of the incident.</p>\r\n\r\n<p>I wonder if he had a valid driver&rsquo;s licence or adequate training to drive a truck.</p>\r\n', '<p>Now that he has been arrested by the police for interrogation, what happens next? If everything goes as per rules, perhaps a criminal case will be filed against him for reckless driving.&nbsp;</p>\r\n\r\n<p>But is that enough? What about the family members of the victims, two of whom were candidates for the ongoing SSC exam? Who will compensate them for their loss? How much are their lives worth? Can we put a price on human lives?</p>\r\n\r\n<p>And yet it has to be done because it is not only about money. It&rsquo;s about establishing accountability in the public transport system of the country. Most road crashes are a direct consequence of lack of order characterised by unfit vehicles, untrained drivers, carelessness of pedestrians, negligence of Traffic authority and relevant departments. What usually follows a crash reinforces the chaos, the lawlessness that prevails on the roads: the mob beats up the driver if they can catch him.</p>\r\n\r\n<p><u><strong><a href="http://www.thedailystar.net/frontpage/8-killed-truck-rams-crowd-1355824" target="_blank">Read More:&nbsp;8 killed as truck rams crowd</a></strong></u></p>\r\n\r\n<p>In some cases, the police arrest him as in the case of Khagrachari. If someone dies or gets severely injured, they may get some kind of immediate payout from the owner of the vehicle or the driver, but nothing close to their loss.</p>\r\n\r\n<p>No one sues them for damages or loss. Because the idea that victims of a car crash may have the right to claim compensation from the party at fault is mostly unknown in Bangladesh, although the law -- Section 128 of the Motor Vehicle Ordinance 1983 -- has provision for it. I think it is imperative that this long-neglected law was brought to public notice so that people become aware that under this Act, not only the drivers but also owners of the vehicles and insurers are responsible as liable parties. When people know about this law, they will know that they have a means to be legally compensated for their losses.</p>\r\n\r\n<p>That, experts believe, will lead to a greater accountability established for vehicle/transport company owners and insurers, who will in turn, out of their own self interest, be motivated to support and institute measures for improvement of road safety, i.e. proper driver training, more rigorous enforcement of vehicle fitness standards, requiring first party insurance for all public transport vehicles and perhaps, goodwill of political parties.</p>\r\n\r\n<div>\r\n<p>Bangladesh is one of the deadliest places in the world on the roads. Road crashes continue to kill unabated ever day. First, measures should be taken to reduce their number. Then there should be legal framework through which victims and their families can claim compensation.&nbsp;</p>\r\n</div>\r\n', '2017-02-04 19:57:29', 1),
(8, 3, 1, 'New organ discovered inside human belly', 'Star Online Report', 'new-organ-web.jpg', '', '<p>Irish researchers have confirmed that the mesentery &mdash; a fold of membrane that connects the intestine to the abdomen &mdash; is its own continuous organ, and not a series of fragmented parts like experts had previously thought, reports Yahoo News.</p>\r\n\r\n<p>So, this week, as you dream up ways to improve yourself in 2017, give yourself a pat on the back: You&#39;ve already made a significant change this year, from deep within your belly.</p>\r\n\r\n<p>You technically gained an organ.</p>\r\n', '<p>The discovery could create a new field of &quot;mesenteric&quot; science and may help doctors better understand and treat abdominal diseases, said Calvin Coffey, a professor of surgery at University of Limerick&#39;s Graduate Entry Medical School, according to the report in Yahoo News.</p>\r\n\r\n<p>&quot;We are now saying we have an organ in the body which hasn&#39;t been acknowledged as such to date,&quot; he said in a news release.</p>\r\n\r\n<p>Coffey published his peer-reviewed findings in the November issue of The Lancet Gastroenterology &amp; Hepatology, a top medical journal on the digestive system, reports Yahoo News quoting <a href="http://mashable.com/2017/01/03/new-organ-mesentery/#feyh8bvhhmq7">Mashable</a>.</p>\r\n\r\n<p>Mashable was unable to reach Coffey for comment by the time of publication.</p>\r\n\r\n<p>An organ is considered to be a self-contained body part that serves a specific vital function. The heart, for instance, is a muscular organ that pumps blood through our blood vessels.</p>\r\n\r\n<p>Researchers say they still don&#39;t quite understand the mesentery&#39;s key functions, beyond the obvious role as a connective layer, reports Yahoo News.</p>\r\n\r\n<p>One of the world&#39;s earliest depictions of the mesentery was produced by the Italian Renaissance artist Leonardo da Vinci. While his drawing and subsequent medical illustrations showed the mesentery as a continuous structure, in the past century scientists came to believe it was a series of broken-up pieces, and thus less medically significant, according to the report.</p>\r\n\r\n<p>In 2012, Coffey and his colleagues first showed through microscopic analyses that the fold of membrane was, in fact, a single connected structure, says the report.</p>\r\n\r\n<p>Over the last four years, the team continued to collect evidence confirming the mesentery&#39;s classification as an organ, which culminated with the November paper.</p>\r\n\r\n<p>The research prompted the publishers of Gray&#39;s Anatomy, one of the world&#39;s best-known medical textbooks, to update the entry for mesentery, reports Yahoo News.</p>\r\n\r\n<p>Elsevier, which publishes both Gray&#39;s Anatomy and The Lancet journal, included the reclassification of mesentery in its 41st edition of Gray&#39;s, which came out September 2015, Mashable confirmed.</p>\r\n\r\n<p>Coffey said that better understanding and further scientific study of the mesentery could result in less invasive abdominal surgeries, fewer complications and faster patient recovery, according to the report in Yahoo News.</p>\r\n\r\n<p>&quot;When we approach it like every other organ...we can categorize abdominal disease in terms of this organ,&quot; he said in the news release.</p>\r\n\r\n<p>&quot;This is relevant universally as it affects all of us,&quot; he added. &quot;Up to now there was no such field as mesenteric science.&quot;</p>\r\n', '2017-02-04 21:33:44', 1),
(9, 4, 1, 'UK first country to legally offer ''three-parent'' gene therapy', 'AFP, London', 'three-parent_gene_therapy.jpg', '', '<p>Britain&#39;s fertility regulator on Thursday gave the green light for the country to become the first in the world to legally offer &quot;three-parent baby&quot; fertility treatments.</p>\r\n', '<p>The technique would allow women who carry disease-causing mutations in their mitochondrial genes to give birth to genetically-related children free of mitochondrial disease.<br />\r\n<br />\r\nBritish lawmakers had voted in February to allow the creation of in-vitro fertilisation (IVF) babies with DNA from three people, but clinics needed to obtain licences from the Human Fertilisation and Embryology Authority (HFEA) before introducing the mitochondrial gene therapy.<br />\r\n<br />\r\nHFEA chair Sally Cheshire called the decision to license the treatment &quot;historic and important&quot; and &quot;a world first&quot;.<br />\r\n<br />\r\n&quot;I&#39;m sure patients who might be in line for this treatment will be really pleased by what we&#39;ve decided today,&quot; she said, but added: &quot;We will proceed with caution.&quot;<br />\r\n<br />\r\nAn independent panel of experts last month said the practice should be &quot;cautiously adopted&quot; to prevent certain genetic diseases from being passed on to future generations.<br />\r\n<br />\r\nMitochondria are structures in cells which generate vital energy and contain their own set of genes called mDNA which is passed through the mother.<br />\r\n<br />\r\nMitochondrial diseases cause symptoms ranging from poor vision to diabetes and muscle wasting, and health officials estimate around 125 babies are born with the mutations in Britain every year.<br />\r\n<br />\r\nBut opponents have warned that it paves the way for &quot;designer babies&quot;.<br />\r\n<br />\r\nThe treatment involves the embryo receiving the usual &quot;nuclear&quot; DNA from the mother and father, as well as a small amount of healthy mitochondrial DNA (mDNA) from a female donor.<br />\r\n<br />\r\nThe review panel recommended its clinical use &quot;in specific circumstances... where inheritance of the disease is likely to cause death or serious disease and where there are no acceptable alternatives.&quot;<br />\r\n<br />\r\nThe first women could receive the treatment as early as March or April, with a pioneering research centre in Newcastle, northeast England, expected to kickstart the programme.<br />\r\n<br />\r\n&quot;We are delighted by today&#39;s decision,&quot; said Doug Turnbull, director of the Wellcome Centre for Mitochondrial Research at Newcastle University.<br />\r\n<br />\r\n&quot;In Newcastle, we will be aiming to treat up to 25 carefully selected patients a year with the mitochondrial donation technique.&quot;<br />\r\n<br />\r\nRobert Meadowcroft, CEO of charity Muscular Dystrophy, said the decision gave affected parents &quot;new hope and choice for the first</p>\r\n', '2017-02-04 21:35:57', 1),
(10, 4, 2, 'New organ discovered inside human belly', '', 'IMG-20160417-WA00061.jpeg', '', '<p>asdfasdf</p>\r\n', '<p>asfdasdf</p>\r\n', '2017-03-07 21:27:24', 2),
(11, 4, 2, 'New organ discovered inside human belly', '', 'IMG-20160417-WA00062.jpeg', '', '<p>asdfasdf</p>\r\n', '<p>asfdasdf</p>\r\n', '2017-03-07 21:28:15', 2),
(12, 4, 3, 'Google gives up on ''Hands Free'' wireless mobile payments', '', 'IMG-20160512-WA0003.jpg', '', '<p>sdfgadfgas</p>\r\n', '<p>asdfsadf</p>\r\n', '2017-03-07 21:47:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` int(1) NOT NULL COMMENT '1=>published,2=>unpublished',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Cricket', '', 1),
(2, 'International', '', 1),
(3, 'Exclusive', 'a', 1),
(4, 'science', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_download`
--

CREATE TABLE IF NOT EXISTS `book_download` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(255) NOT NULL,
  `book_front_image` varchar(255) NOT NULL,
  `book_download_file` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT '1=>published,2=>unpublished',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comments_date` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `expert_details` (
  `expert_id` int(11) NOT NULL AUTO_INCREMENT,
  `skills` varchar(255) DEFAULT NULL,
  `expert_name` varchar(255) DEFAULT NULL,
  `expert_designation` varchar(255) DEFAULT NULL,
  `experts_image` varchar(255) DEFAULT NULL,
  `expert_about` text,
  `language` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `summary` text,
  `education` text,
  `award` text,
  `experience` text NOT NULL,
  `expert_cv` varchar(255) NOT NULL,
  `publication_status` tinyint(1) DEFAULT NULL COMMENT '1=>published,2=>unpublished',
  PRIMARY KEY (`expert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `expert_details`
--

INSERT INTO `expert_details` (`expert_id`, `skills`, `expert_name`, `expert_designation`, `experts_image`, `expert_about`, `language`, `facebook_link`, `twitter_link`, `linkedin_link`, `summary`, `education`, `award`, `experience`, `expert_cv`, `publication_status`) VALUES
(1, '1', 'sonjoy', 'sergent', 'a5bdd-enough.jpg', '<p>sonjoy</p>\r\n', 'english,hindi', 'https://www.facebook.com', '', '', '<p>sonjoy</p>\r\n', '<p>sonjoy</p>\r\n', '<p>sonjoy</p>\r\n', '<p>sonjoy</p>\r\n', '', 2),
(2, '1', 'salim rahman', 'Dentist', 'd6dd3-img_0879.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vide, quantum, inquam, fallare, Torquate. Quae hic rei publicae vulnera inponebat, eadem ille sanabat. Duo Reges: constructio interrete. Primum in nostrane potestate est, quid meminerimus? Quid censes in Latino fore? Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est? Duae sunt enim res quoque, ne tu verba solum putes.</p>\r\n', 'english,bangla', '', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vide, quantum, inquam, fallare, Torquate. Quae hic rei publicae vulnera inponebat, eadem ille sanabat. Duo Reges: constructio interrete. Primum in nostrane potestate est, quid meminerimus? Quid censes in Latino fore? Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est? Duae sunt enim res quoque, ne tu verba solum putes.</p>\r\n', '', '', '', '', 2),
(3, '1', 'jhorna Akter', 'Cardiologist', 'ccf0c-183873_153399274736948_5430378_n.jpg', '<p>jhorna Akter</p>\r\n', 'english', '', '', '', '<p>jhorna Akter</p>\r\n', '<p>jhorna Akter</p>\r\n', '<p>jhorna Akter</p>\r\n', '<p>jhorna Akter</p>\r\n', '', 2),
(4, '1,2', 'Dr Azad', 'chairman', '4326f-183873_153399274736948_5430378_n.jpg', '<p>Dr Azad</p>\r\n', 'bangla', '', '', '', '<p>Dr Azad</p>\r\n', '<p>Dr Azad</p>\r\n', '<p>Dr Azad</p>\r\n', '<p>Dr Azad</p>\r\n', '', 2),
(5, '4,3', 'sonjoy', 'Consultant', '14568122_1130656720344527_6916688072930586451_n.jpg', '<p>sonjoy</p>\r\n', 'english,hindi', 'fsdf', '', '', '<p>sonjoy</p>\r\n', '<p>sonjoy</p>\r\n', '<p>sonjoy</p>\r\n', '<p>sonjoy</p>\r\n', '', 2),
(6, '4', 'joy', 'Surgent', '183873_153399274736948_5430378_n1.jpg', '<p>joy</p>\r\n', 'english', '', '', '', '<p>joy</p>\r\n', '<p>joy</p>\r\n', '<p>joy</p>\r\n', '<p>joy</p>\r\n', '', 2),
(7, '4', 'joy', 'Surgent', '183873_153399274736948_5430378_n2.jpg', '<p>joy</p>\r\n', 'english', '', '', '', '<p>joy</p>\r\n', '<p>joy</p>\r\n', '<p>joy</p>\r\n', '<p>joy</p>\r\n', '', 2),
(8, '4,3', 'joy roy', 'Surgent', '15094349_10155298937413492_815649279734841544_n.jpg', '<p>joy roy</p>\r\n', 'english', '', '', '', '<p>joy roy</p>\r\n', '<p>joy roy</p>\r\n', '<p>joy roy</p>\r\n', '<p>joy roy</p>\r\n', '', 2),
(9, NULL, 'Sumaiya', 'Consultant', 'IMG-20160417-WA0006.jpeg', '<p>asdf</p>\r\n', NULL, 'asdfa', 'asdf', 'asdf', '<p>asdf</p>\r\n', '<p>asdf</p>\r\n', '<p>adsf</p>\r\n', '<p>asdfadf</p>\r\n', '', 2),
(10, NULL, 'test', 'test designation', '1b884-d6dd3-img_0879.jpg', '<p>rtydrt</p>\r\n', NULL, 'fsdf', 'asdf', 'asdf', NULL, '<p>ertert</p>\r\n', NULL, '', '', 2),
(11, NULL, 'tert', 'My jan', '', '<p>sdfasf</p>\r\n', NULL, 'facebook', 'asdf', 'sdf', NULL, '<p>afdsa</p>\r\n', NULL, '', '', 2),
(12, '6,5,4', 'Janani B', 'Entrepreneur', '', '<p>Janani B</p>\r\n', NULL, '', '', '', '<p>Janani B</p>\r\n', '<p>Janani B</p>\r\n', '<p>Janani B</p>\r\n', '<p>Janani B</p>\r\n', 'Agreement-Paper-for-Debenhams111.pdf', 2),
(13, NULL, 'Janani B', 'Entrepreneur', 'Janani_Balasubramanian_b87coc.jpg', '<p>I want to help people and make them understand the importance of Mental wellness and help them break the associated stigmas to it.</p>\r\n', NULL, '', '', '', '<p>She is a perfect friend for you to share and discuss any questions on work, education, exam support, career, motivation, self esteem, peer pressure, startup support, family issues or anything that might be pulling you down. Janani is an active member of a lot of entrepreneurial communities around the country and has several likeminded friends who are striving to make it big career wise.She is a person who understands the pressure of education, exam, career, family and the difficulty in trying to achieve big dreams all alone. She can help you face your fears, lend an ear to your problems and make you understand what an amazing person you are!</p>\r\n', '<ul>\r\n	<li>Masters in Business Administration</li>\r\n	<li>Bachelors in Engineering</li>\r\n</ul>\r\n', '', '<ul>\r\n	<li>Human Resource professional</li>\r\n	<li>Entrepreneur</li>\r\n</ul>\r\n', '', 1),
(14, NULL, 'Shruti Naik', 'Consultant', 'Shruti_Naik_txm7zv.jpg', '<p>I am dedicated to empower anybody who comes to me to effectively deal with their emotional, behavioural and psychological problems.</p>\r\n', NULL, '', '', '', '<p>She started her career as an Engineer (BE (hons) Mechanical from BITS Pilani), and worked for companies like Oracle,Capgemini and Infosys for 8 years. She then studied MS in Counselling and Psychotherapy to become a Counselling Psychologist. She is currently a Psychological Counsellor with Apollo Hopsitals, Hyderabad. She has an overall experience of 4&nbsp;years as a Psychological Counselor. She mainly specialises in&nbsp;Stress, Anxiety, Depression, Problems related to Confidence, Concentration, Self-Esteem&nbsp;and Relationship related issues.</p>\r\n', '<ul>\r\n	<li>MS in Counselling and Psychotherapy</li>\r\n	<li>BE (hons) Mechanical from BITS Pilani)</li>\r\n</ul>\r\n', '', '<ul>\r\n	<li>Counselling Psychologist at Apollo Hospitals, Hyderabad</li>\r\n</ul>\r\n', '', 1),
(15, NULL, ' Sumeet Singh', 'Life Coach', 'Sumeet_Singh_Sahni_m1rmot.png', '<p>I wish to connect to individuals in need and help them in achieving peace of mind and success in life. I bring a practical approach to the table with the right mix of management, psychology and spirituality.</p>\r\n', NULL, '', '', '', '<p>Sumeet is a corporate trainer by profession, who takes various kinds of Behavioral training related to Stress management, Interpersonal Relationships, People Handling, Motivation, Entrepreneurship etc for Government, NGO&#39;s and Private organisations. He is an MBA and Certified Trainer from Indian Society of Training and Development (ISTD). In addition he also provides his services as a Life Coach and has done a course in &ldquo;Positive Psychology&rdquo; from University of North Carolina and course in &ldquo;A Life of Happiness and Fulfillment&rdquo; from ISB. Sumeet is an avid traveller, a loving husband and a fitness freak. He has a positive outlook towards life and a firm belief&nbsp; that you make your own destiny.</p>\r\n', '<ul>\r\n	<li>PGDBM, Business Administration and Management, HR and Marketing from Goa Institute of Management</li>\r\n	<li>B.A. Management, Management, Barkatullah Vishwavidyalaya</li>\r\n</ul>\r\n', '', '<ul>\r\n	<li>Certified Trainer, Indian Society of Training and Development (ISTD)</li>\r\n	<li>Course in &ldquo;Positive Psychology&rdquo; , University of North Carolina</li>\r\n</ul>\r\n', '', 1),
(16, NULL, 'Stuti Pardhe', 'Counselor/Psychotherapist', 'facebook_1488572834247_v5bnjw.jpg', '<p>I want to be a an impact of change in life of many individuals who are struggling and dragging through their life. I believe that this is an opportunity to &#39;Pass the Torch of Light&#39; which can lighten up hope and determination for those who feel failed in their lives.</p>\r\n', NULL, '', '', '', '<div class="col counselor-cp-info s12">\r\n<p>Hello!&nbsp;</p>\r\n\r\n<p>I am thrilled and excited to have joined &#39;Your Dost&#39;. The journey of a Counselor and Psychotherapist has been amazing to me. Ever since I started understanding the concept of how thoughts, emotions, and feelings affect life,&nbsp;and additionally,&nbsp;the lessons&nbsp;of my own life experiences;&nbsp;I was then inspired and&nbsp;led to be an instrument to impact the life of people by lending my ear, empathizing, and providing the needed assistance to guide people&nbsp;along the way by using Cognitive Behavioral Therapy, Neuro-Linguistic Programming and Brain Entrainment programs which help in correcting the thought processes, emotions and feelings. The different experiences in my life made me strong enough to understand the pain and emotional turmoil that people go through in every day life. Lastly, I am glad to be part of &#39;Your Dost&#39;, and this journey that I have started here surely is going to be fruitful and productive in every way.&nbsp;</p>\r\n</div>\r\n', '<ul>\r\n	<li>M.S.W from the Northwest Nazarene University, Idaho,U.S.A</li>\r\n	<li>Pursuing Doctor of Naturopathic Medicine, U.S.A</li>\r\n	<li>Certificate in Clinical Psychopharmacology</li>\r\n	<li>Certificate in Program Notation and Treatment Planning</li>\r\n	<li>Certificate in Neuro-Linguistic Programming</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Best Community Service Award, U.S.A</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Founder at Stuti Pardhe&#39;s Mental Health and Well-Being Counseling Clinic</li>\r\n	<li>Cognitive Behavioral Therapy Specialist at Dr.Anil.Tambi&#39;s Clinic, India</li>\r\n	<li>Freelance Psychotherapist on Proventherapy.com</li>\r\n	<li>Rehabilitation Case Worker, U.S.A</li>\r\n	<li>Case Manager, International Justice Mission, U.S.A</li>\r\n</ul>\r\n', '', 1),
(17, NULL, ' Vikas Khanna', 'Counselor', 'vikas_a15d30.jpg', '<p>I want to help people and make them understand the importance of Mental wellness and help them break the associated stigmas to it</p>\r\n', NULL, '', '', '', '<p>Formally trained to be a dental surgeon, gradually diverted field of interests to Professional hypnosis and counseling for the last nine years.Presently, apart from regular consultations, the focus is centered on online counselling,spiritual workshops, corporate training for stress management and free lance writing.</p>\r\n', '', '', '', '', 1),
(18, NULL, 'Namrata ', 'Counselor', 'IMG_20161221_223837_cmmuav.jpg', '<p>I aim to be there for all those who feel lost, unheard and are lonely, hoping to help them have a better outlook on their lives!</p>\r\n', NULL, '', '', '', '<p>She can help with family related issues, relationship issues and depression.</p>\r\n', '<ul>\r\n	<li>Post Graduation in Human Development ,University of Calcutta.</li>\r\n	<li>Graduation in Psychology</li>\r\n	<li>University of Calcutta</li>\r\n	<li>Pursuing Post Graduation Diploma in Counselling and Family Therapy.</li>\r\n</ul>\r\n', '', '<ul>\r\n	<li>Career Counselor, 2 Coms Consultancy Pvt Ltd</li>\r\n</ul>\r\n', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expert_schedule`
--

CREATE TABLE IF NOT EXISTS `expert_schedule` (
  `schedule_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `expert_id` int(11) NOT NULL,
  `day_name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `expert_schedule`
--

INSERT INTO `expert_schedule` (`schedule_id`, `expert_id`, `day_name`, `time`) VALUES
(3, 9, 'sun', '8.00pm - 10.00pm'),
(4, 9, 'mon', '5.00pm -  8.00pm'),
(5, 9, 'tue', '10.00pm-1.00am');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `forum_category_id` int(11) NOT NULL,
  `forum_description` text NOT NULL,
  `publication_status` int(1) NOT NULL COMMENT '1=>published,2=>unpublished',
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_category`
--

CREATE TABLE IF NOT EXISTS `forum_category` (
  `forum_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `publication_status` int(1) NOT NULL COMMENT '1=published,2=unpublished',
  PRIMARY KEY (`forum_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `forum_category`
--

INSERT INTO `forum_category` (`forum_category_id`, `category_name`, `publication_status`) VALUES
(1, 'Knowledge', 1),
(2, 'Philosophy of mind', 1),
(3, 'Commercial media', 1),
(4, 'Mathmetics', 1),
(5, 'Psychology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `service_heading` varchar(255) NOT NULL,
  `service_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT '1=>published,2=>unpublished',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `icon`, `service_heading`, `service_description`, `publication_status`) VALUES
(1, 'd62c4-feat_icon_6.png', '24* 7 Support', 'Quae duo sunt, unum facit. Duo Reges: constructio interrete. Eadem nunc mea adversum te oratio est. ', 1),
(2, 'b43c2-feat_icon_4.png', 'Confidential', 'Quae duo sunt, unum facit. Duo Reges: constructio interrete. Eadem nunc mea adversum te oratio est. ', 1),
(3, '5d161-feat_icon_7.png', 'Anonymous', '', 1),
(4, 'ae285-feat_icon_8.png', '100+ Experts', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `setting_id` int(1) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `welcome_message` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `bg_video` varchar(255) NOT NULL,
  `works_details` text NOT NULL,
  `youtube_video` text NOT NULL,
  `about_section` text,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `logo`, `welcome_message`, `introduction`, `bg_video`, `works_details`, `youtube_video`, `about_section`) VALUES
(1, '91887-logo.png', 'Xcognitive', 'consult with expert Phychologists', 'd18c0-bd-video.mp4', 'Primum in nostrane potestate est, quid meminerimus? Nemo igitur esse beatus potest. An est aliquid per se ipsum flagitiosum, etiamsi nulla comitetur infamia? Vestri haec verecundius, illi fortasse constantius. Haec et tu ita posuisti, et verba vestra sunt. Eaedem enim utilitates poterunt eas labefactare atque pervertere. Quid censes in Latino fore? Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia. Sed haec in pueris; Nunc omni virtuti vitium contrario nomine opponitur. ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Io0fBr1XBUA" frameborder="0" allowfullscreen></iframe>', 'At Xcognitive, we provide an online counseling and emotional support platform designed to foster mental wellness. It anonymously connects you with the right expert consisting of psychologists, psychotherapists, counselors, life coaches, career guides and people with rich and deep life experience, who understand you and guide you through completely confidential individual sessions (through free online chats).');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `subject_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_icon`) VALUES
(1, 'Theropy for Sexual Wellness', 'aabc0-feat_icon_2.png'),
(2, 'Couple & Relationship Therapy', 'f3465-feat_icon_2.png'),
(3, 'Psychological Issues', '8721c-feat_icon_3.png'),
(4, 'Children & Adolescents', '13dea-feat_icon_4.png'),
(5, 'Career', ''),
(6, 'family Issues', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT '1=>published,2=>unpublished',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `user_id`, `name`, `email`, `message`, `publication_status`) VALUES
(1, 1, 'ggggg', 'rahim@yahoo.com', 'hdfghdfg', 0),
(2, 1, 'JULIEN MCDONALD', 'sujon.roy420@yahoo.com', 'sdfsf', 0),
(3, 1, 'etddfg', 'sujon.roy420@yahoo.com', 'sdfsdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `oauth_provider` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `user_image`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `oauth_provider`, `oauth_uid`, `profile_url`, `locale`) VALUES
(1, 'admin', '$2a$08$EGvL3.TmKYctiA/OvaI1/OCjc19i4tsknvVAxTOCi2r8q2nOFhdRG', 'sonjoy@gmail.com', NULL, 1, 0, NULL, NULL, NULL, NULL, 'd8bbaa9dfda9ba7091131f1cc217c2b5', '103.204.85.1', '2017-03-21 12:24:29', '2017-02-04 18:31:59', '2017-03-21 16:24:29', '', '', NULL, ''),
(4, 'user', '$2a$08$EGvL3.TmKYctiA/OvaI1/OCjc19i4tsknvVAxTOCi2r8q2nOFhdRG', 'sujon.roy420@yahoo.com', '14568122_1130656720344527_6916688072930586451_n.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, '103.204.85.1', '2017-03-24 11:15:25', '2017-02-09 18:52:53', '2017-03-24 15:15:25', '', '', NULL, ''),
(5, 'Mrittika', '', 'mrittikadebnath007@gmail.com', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2017-02-12 17:19:02', '2017-03-15 13:31:46', 'google', '107380324770308866669', NULL, 'en'),
(7, 'expert', '$2a$08$EGvL3.TmKYctiA/OvaI1/OCjc19i4tsknvVAxTOCi2r8q2nOFhdRG', 'biswassonjoy@yahoo.com', 'IMG-20160728-WA0000.jpeg', 1, 0, NULL, NULL, NULL, NULL, NULL, '144.48.108.211', '2017-03-24 11:50:05', '2017-02-23 20:38:17', '2017-03-24 15:50:05', NULL, NULL, NULL, ''),
(9, '', '$2a$08$sfukEHagJV5gAjInnYCqGuq1HOM2NEkMV8pISS39yIW0wOLB9om3W', 'sumaiya@yahoo.com', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2017-03-07 17:30:13', '2017-03-07 16:30:13', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1=>male,2=>female',
  `occupation` varchar(255) NOT NULL,
  PRIMARY KEY (`user_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_info_id`, `user_id`, `dob`, `gender`, `occupation`) VALUES
(1, 4, '1990-03-03', 2, 'business');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id_user_type` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1=>admin,2=>user,3=>expert',
  PRIMARY KEY (`id_user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id_user_type`, `user_id`, `type`) VALUES
(1, 1, 1),
(2, 4, 2),
(3, 5, 2),
(4, 6, 2),
(5, 7, 3),
(6, 8, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
