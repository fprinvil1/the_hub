-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 01:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 12, 'Great Job', 1, '2020-04-01 04:54:51', NULL),
(2, 12, 'I agree with writter', 1, '2020-04-02 04:55:01', NULL),
(3, 18, '<p>3210</p>', 4, '2020-04-04 20:44:21', '2020-04-04 20:44:21'),
(4, 18, '<p>I love this post. Great Job.</p>', 4, '2020-04-04 20:45:34', '2020-04-04 20:45:34'),
(5, 18, '<p>This sia nother comment</p>', 4, '2020-04-04 20:47:01', '2020-04-04 20:47:01'),
(6, 18, '<p>This is another</p>', 4, '2020-04-04 20:47:31', '2020-04-04 20:47:31'),
(7, 18, '<p>This is another</p>', 4, '2020-04-04 20:47:57', '2020-04-04 20:47:57'),
(8, 18, '<p>jkjhkh</p>', 4, '2020-04-04 20:57:09', '2020-04-04 20:57:09'),
(9, 18, '<p>uluil</p>', 4, '2020-04-04 20:59:53', '2020-04-04 20:59:53'),
(10, 18, '<p>ulilil7,ioio</p>', 4, '2020-04-04 20:59:59', '2020-04-04 20:59:59'),
(11, 18, '<p>ulilil7,ioio</p>', 4, '2020-04-04 21:01:03', '2020-04-04 21:01:03'),
(12, 18, '<p>ulilil7,ioio</p>', 4, '2020-04-04 21:01:12', '2020-04-04 21:01:12'),
(13, 18, '<p>hhh</p>', 4, '2020-04-04 21:01:15', '2020-04-04 21:01:15'),
(14, 18, '<p>hhh</p>', 4, '2020-04-04 21:01:24', '2020-04-04 21:01:24'),
(15, 17, '<p>Adding a new comment</p>\r\n<p>Adding a new comment</p>\r\n<p>Adding a new comment</p>', 4, '2020-04-04 21:09:59', '2020-04-04 21:09:59'),
(16, 15, '<p>Adding a new commentAdding a new comment</p>', 4, '2020-04-04 21:10:42', '2020-04-04 21:10:42'),
(17, 17, '<p>Adding a new comment</p>', 4, '2020-04-04 21:11:01', '2020-04-04 21:11:01'),
(18, 16, '<p>12313130</p>', 4, '2020-04-04 21:11:45', '2020-04-04 21:11:45'),
(19, 18, '<p>0</p>', 4, '2020-04-04 21:14:20', '2020-04-04 21:14:20'),
(20, 18, '<p>0</p>', 4, '2020-04-04 21:15:55', '2020-04-04 21:15:55'),
(21, 18, '<p>0</p>', 4, '2020-04-04 21:16:19', '2020-04-04 21:16:19'),
(22, 18, '<p>Comment here</p>', 5, '2020-04-04 21:20:55', '2020-04-04 21:20:55'),
(23, 18, '<p>Comment here</p>', 5, '2020-04-04 21:22:20', '2020-04-04 21:22:20'),
(24, 17, '<p>643054654+0687061.10</p>', 7, '2020-04-06 02:42:20', '2020-04-06 02:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_02_182856_create_posts_table', 1),
(4, '2017_06_03_144733_add_user_id_to_posts', 2),
(5, '2017_06_03_211549_add_cover_image_to_posts', 3),
(6, '2019_08_19_000000_create_failed_jobs_table', 4),
(7, '2020_04_04_042545_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(12, 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>&nbsp;</p>\r\n<p>Why do we use it?</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Where does it come from?</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>&nbsp;</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2020-04-04 07:06:45', '2020-04-04 08:51:21', 3, 'noimage.jpg'),
(13, '1914 translation by H. Rackham', '<h3 style=\"margin: 15px 0px; padding: 0px; font-size: 14px; font-family: \'Open Sans\', Arial, sans-serif; background-color: #ffffff;\">&nbsp;</h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', '2020-04-04 07:07:35', '2020-04-04 07:07:35', 3, 'Golden Girls_1585969655.png'),
(14, 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>\r\n<h3 style=\"margin: 15px 0px; padding: 0px; font-size: 14px; font-family: \'Open Sans\', Arial, sans-serif; background-color: #ffffff;\">1914 translation by H. Rackham</h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2020-04-04 07:08:06', '2020-04-04 07:08:06', 3, 'Unable To View Video_1585969686.png'),
(15, 'The Golden Girls', '<p><span style=\"color: #666666; font-family: Verdana, Geneva, sans-serif; font-size: 10px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</span></p>', '2020-04-04 07:09:07', '2020-04-04 07:09:07', 3, 'Unable To View Video_1585969747.png'),
(16, 'MAIL_MAILER=smtp', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<p>&nbsp;</p>\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n<p>&nbsp;</p>\r\n<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n<p>&nbsp;</p>\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n<p>&nbsp;</p>\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed</p>', '2020-04-04 07:10:35', '2020-04-04 07:10:35', 3, 'Temp 1_1585969835.png'),
(17, 'DB_USERNAME - DB_PASSWORD - DB_HOST', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n<p>&nbsp;</p>\r\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n<p>&nbsp;</p>\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>\r\n<p>&nbsp;</p>\r\n<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>\r\n<p>&nbsp;</p>\r\n<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should</p>', '2020-04-04 07:11:47', '2020-04-04 07:11:47', 3, 'noimage.jpg'),
(18, 'Posts', '<p>Post</p>', '2020-04-04 07:59:01', '2020-04-04 07:59:01', 3, 'noimage.jpg'),
(19, 'The Title', '<p>The Body</p>', '2020-04-05 00:13:19', '2020-04-05 00:13:19', 6, 'noimage.jpg'),
(20, 'Post about this virus', '<p class=\"Text-sc-1amvtpj-0-p render-stellar-contentstyles__Paragraph-sc-9v7nwy-2 fAchMW\" style=\"box-sizing: border-box; font-family: CNN, \'Helvetica Neue\', Helvetica, Arial, Utkal, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.625; margin: 16px 0px; color: #262626; font-size: 16px; background-color: #ffffff;\">An employee at a Prescott, Arizona, hospital was arrested after being accused of stealing $1,700 worth of protective equipment and cleaning supplies, Prescott Police said in a statement on Saturday.</p>\r\n<p class=\"Text-sc-1amvtpj-0-p render-stellar-contentstyles__Paragraph-sc-9v7nwy-2 fAchMW\" style=\"box-sizing: border-box; font-family: CNN, \'Helvetica Neue\', Helvetica, Arial, Utkal, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.625; margin: 16px 0px; color: #262626; font-size: 16px; background-color: #ffffff;\">Keith Brown, 49, was arrested and booked into the Yavapai County Jail on one count of felony theft and one count of fraud, police said.</p>\r\n<p class=\"Text-sc-1amvtpj-0-p render-stellar-contentstyles__Paragraph-sc-9v7nwy-2 fAchMW\" style=\"box-sizing: border-box; font-family: CNN, \'Helvetica Neue\', Helvetica, Arial, Utkal, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.625; margin: 16px 0px; color: #262626; font-size: 16px; background-color: #ffffff;\">Brown worked in the housekeeping department of the Yavapai Regional Medical Center West Campus, who contacted police on Friday regarding suspicions that Brown had been stealing supplies.</p>\r\n<p class=\"Text-sc-1amvtpj-0-p render-stellar-contentstyles__Paragraph-sc-9v7nwy-2 fAchMW\" style=\"box-sizing: border-box; font-family: CNN, \'Helvetica Neue\', Helvetica, Arial, Utkal, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.625; margin: 16px 0px; color: #262626; font-size: 16px; background-color: #ffffff;\">While being interviewed by police, Brown admitted to stealing gloves, hand sanitizer, surgical scrubs, wash cloths, paper towels, masks, bleach cleaner, toilet paper, and an automatic hand sanitizer over the last three weeks, Prescott Police said.</p>\r\n<p class=\"Text-sc-1amvtpj-0-p render-stellar-contentstyles__Paragraph-sc-9v7nwy-2 fAchMW\" style=\"box-sizing: border-box; font-family: CNN, \'Helvetica Neue\', Helvetica, Arial, Utkal, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.625; margin: 16px 0px; color: #262626; font-size: 16px; background-color: #ffffff;\">According to Prescott Police, Brown has also been terminated from his job at the Yavapai Regional Medical Center West Campus.</p>\r\n<p class=\"Text-sc-1amvtpj-0-p render-stellar-contentstyles__Paragraph-sc-9v7nwy-2 fAchMW\" style=\"box-sizing: border-box; font-family: CNN, \'Helvetica Neue\', Helvetica, Arial, Utkal, sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.625; margin: 16px 0px; color: #262626; font-size: 16px; background-color: #ffffff;\">Police say they are working with the hospital to return the items as soon as they are deemed safe to use.</p>', '2020-04-05 23:01:19', '2020-04-05 23:01:19', 7, 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Frantz Prinvil', 'fprinvil1@gmail.xom', '$2y$10$6Lrzqvp4b8TRKAM.Awt5rOQww.i2nS5PF074hPdb44RAm/ch0OWvG', NULL, '2020-04-04 07:05:57', '2020-04-04 07:05:57'),
(4, 'Jafane Prinvil', 'littlefane@gmail.com', '$2y$10$.Bip1TL2py5mL/EDs8W4QuHBvGb8s1FOo1kZC3FdrZevsEz0UKAAi', NULL, '2020-04-04 10:20:38', '2020-04-04 10:20:38'),
(5, 'Christina Prinvil', 'cprinvil@gmail.com', '$2y$10$5X0ToXQSMb51JncMKGOj8.4rijLKPlHUZdELF4cEi8dPxvq45UYd2', NULL, '2020-04-04 21:20:44', '2020-04-04 21:20:44'),
(6, 'Anne-Marie', 'anne@gmail.com', '$2y$10$SfAe4Lbths8Q70hqKgIQ6ulARSKyNsxuhYV5pclF1xgL8cOCz7jKu', NULL, '2020-04-05 00:08:50', '2020-04-05 00:08:50'),
(7, 'Christina', 'prinvil@gmail.com', '$2y$10$dQ4TifsP.IQsh2G/jf0Pl.lSMbn4Cvg5CPG.iWj8CUwyWkMXan1rq', NULL, '2020-04-05 21:57:37', '2020-04-05 21:57:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
