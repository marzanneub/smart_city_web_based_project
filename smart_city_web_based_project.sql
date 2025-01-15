-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 09:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_city_web_based_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `login`) VALUES
('admin1', 'neub2025', 0);

-- --------------------------------------------------------

--
-- Table structure for table `initiative`
--

CREATE TABLE `initiative` (
  `init_id` int(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `initiative`
--

INSERT INTO `initiative` (`init_id`, `image`, `title`, `description`) VALUES
(1, 'Tree-planting.jpg', 'Green Sylhet', 'Tree plantation in Sylhet city promotes greenery, improves air quality, and combats climate change. Community initiatives and environmental drives focus on planting trees in parks, schools, and urban areas.'),
(2, 'feature-cleanup-campaign-1-copy.jpeg', 'Clean Horizons', 'We transformed our city into a cleaner, greener, and healthier place. Our collective efforts have shown the power of unity in making a lasting impact on our community.'),
(4, 'centr-whocc-healthycity-300x300.jpg', 'Healthy Sylhet', ' Sylhet	Promotes public health by focusing on cleanliness, hygiene, and access to healthcare. The initiative includes awareness campaigns, waste management, and clean water projects to improve community well-being.'),
(5, 'voluntary-bangladesh-20.jpg', 'Art on Walls', 'Transforms Sylhet into a vibrant and colorful city by adorning public spaces with murals and street art. It fosters community pride and makes the city more inviting and inspiring for residents and visitors alike.'),
(6, 'istockphoto-1448256740-612x612.jpg', 'Future Forward', 'A sustainability-driven initiative focused on modernizing Sylhet while preserving its natural and cultural heritage. It emphasizes green infrastructure, renewable energy, and smart urban planning to build a resilient and eco-friendly city.'),
(7, 'LED-lights-300x200.jpg', 'Bright Streets', 'Focuses on illuminating Sylhet by installing and maintaining energy-efficient streetlights across the city. It aims to create well-lit, secure, and vibrant streets for all residents.'),
(8, 'ITS_connected_car_smart_cities_Adobe_rt.jpg', 'Smart Move', 'An initiative designed to improve public transportation in Sylhet by introducing efficient, eco-friendly, and accessible solutions. It focuses on optimizing routes, reducing traffic congestion, and promoting the use of sustainable transport options.'),
(9, '1.webp', 'Hope Haven', 'It focuses on creating safe spaces where children can access education, healthcare, and emotional support. The goal is to empower these children to overcome challenges and build a brighter, more secure future.'),
(10, 'solar-panel-1532364311021.webp', 'Solar Synergy', ' Is a collaborative initiative aimed at advancing the adoption of solar energy through partnerships between communities, businesses, and local governments. It focuses on developing solar farms, rooftop installations, and energy-sharing networks to maximize the use of renewable energy.');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `name`) VALUES
(4, 'Zindabazar'),
(5, 'Chowhatta'),
(6, 'Bandarbazar'),
(8, 'Amberkhana'),
(9, 'Shibganj'),
(10, 'Uposhohor'),
(11, 'Kumarpara'),
(12, 'Tilagor'),
(13, 'Kazir Bazar'),
(14, 'Dorgah Gate'),
(15, 'Pathantula'),
(16, 'Jalalabad'),
(17, 'Electric Supply Road'),
(18, 'Shahjalal Upashahar'),
(19, 'Sylhet Sadar'),
(20, 'Balaganj'),
(21, 'Beanibazar'),
(22, 'Bishwanath'),
(23, 'Companiganj'),
(24, 'Jaintiapur'),
(25, 'Kanaighat'),
(26, 'Osmani Nagar'),
(27, 'South Surma'),
(28, 'Golapganj'),
(29, 'Gowainghat'),
(30, 'Fenchuganj'),
(31, 'Akhalia'),
(32, 'Kajal Shah'),
(33, 'Sheikh Ghat'),
(34, 'Lamabazar'),
(35, 'Taltola'),
(37, 'Cantonment'),
(38, 'Mojumdari'),
(39, 'Shubid Bazar'),
(40, 'Islampur'),
(41, 'Shahi Eidgah'),
(42, 'Malnicherra');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `p_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_t_id` int(100) DEFAULT NULL,
  `location_id` int(100) NOT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `web_address` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`p_id`, `p_name`, `p_t_id`, `location_id`, `phone_number`, `web_address`, `image`, `description`) VALUES
(3, 'North East Medical College Hospital', 1, 27, '01715944733', 'https://www.nemc.edu.bd/', '', ''),
(5, 'Parkview Hospital Ltd', 1, 13, '02334455071', 'https://parkview.com.bd/', '', ''),
(11, 'Mount Adora Hospital', 1, 31, '01707079716', 'https://mountadora.com/', '', ''),
(12, 'Sylhet Fire station', 2, 35, '01901023616', 'https://www.fireservice.sylhet.gov.bd/', '', ''),
(13, 'Sylhet Cantonment Fire Station', 2, 37, '01901023618', 'https://www.fireservice.sylhet.gov.bd/', '', ''),
(14, 'Kanaighat Fire Station', 2, 25, '01901023646', 'https://www.fireservice.sylhet.gov.bd/', '', ''),
(16, 'South Surma Police Station', 3, 27, '01713374518', '', '', ''),
(17, 'Sylhet Railway Police Station', 3, 27, '01711506150', '', '', ''),
(18, 'Sylhet Metropolitan Police Office', 3, 11, '0821716968', '', '', ''),
(19, 'Lamabazar Police Fari', 3, 34, '0821718025', '', '', ''),
(21, 'Amberkhana Police Fari', 3, 8, '0821716968', '', '', ''),
(22, 'Pubali Bank', 4, 8, '0821714029', 'https://www.pubalibangla.com/', 'vshu6WJyejqiih104MlvH3KIR2ZXJut0eovgvNbh.png', 'Ritz Tower, Holding No. 0472-01, Darga Gate'),
(23, 'Dutch Bangla Bank', 4, 15, '0247110465', 'https://www.dutchbanglabank.com/', 'images.jpg', 'Nibas-13, Anwara Monjil'),
(24, 'Dutch Bangla Bank', 4, 38, '0247110465', 'https://www.dutchbanglabank.com/', 'images.jpg', 'Rita Kutir, Holding No: 1215, Airport Road'),
(25, 'Sonali Bank', 4, 40, '0821716849', 'https://www.sonalibank.com.bd/', 'download.jpg', 'Kayum Complex'),
(27, 'Jaflong', 11, 29, '', '', 'licensed-image.jpg', 'a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests.'),
(28, 'Ratargul Swamp Forest', 11, 24, '', '', 'licensed-image (1).jpg', 'Ratargul is the only freshwater swamp forest in our country. The location of this water forest is Khadimnagar union of Sadar Upazila of Sylhet district and Fatehpur union of bordering Upazila Gowainghat.'),
(29, 'Hazrat Shahjalal Mazar', 11, 14, '', '', '2022-12-14.jpg', 'The Hazrat Shahjalal Mazar Sharif is a revered Sufi shrine located in Sylhet, Bangladesh. It is the resting place of Hazrat Shah Jalal (R.A.), a prominent 14th-century Sufi saint and spiritual leader credited with spreading Islam in the region. This site is also a major historical and cultural landmark in Sylhet.'),
(30, 'Sylhet Shahi Eidgah', 11, 41, '', '', '2022-11-20.jpg', 'Sylhet Shahi Eidgah, or simply Shahi Eidgah, is an open prayer hall situated in Sylhet, north-east Bangladesh, three kilometers to the north-east of the guru nanak international circuit house, meant for the Eid prayers. It was built during the rule of Mughal Sultan Sarfaraz Khan.'),
(31, 'Shada Pathor', 11, 23, '', '', 'IMG_20201014_230912.jpg', 'Sada Pathor (White Stone) Tourist Center is located at Bholaganj in Companiganj Upazila of Sylhet. Kompaniganj is a border Upazila located at a distance of 35 km from Sylhet city. And there is the kingdom of white stone (Sada Pathor). The place called â€˜Sada Patharâ€™ has gained a reputation as a new tourist spot adjacent to Zero Point of Bholaganj Stone Quarry.'),
(32, 'Malnicherra Tea Estate', 11, 42, '', '', 'Malnicherra-Tea-Garden-Estate.jpg', 'Malnichhera Tea Garden is not only the largest and first established tea garden in Bangladesh, but also in the subcontinent. It was established by Lord Hurdson in 1849 on 1500 acres of land. The tea garden is located a short distance from Sylhet International Airport.'),
(33, 'Jitu Miahr Bari', 15, 35, '', '', 'Jitu-Miahr-Bari-Sylhet.jpg', 'The main house was built in 186 by Mawlana Abu Mohammad Abdur Qadir, the father of Jitu Meyer.'),
(34, 'Grand Mostafa Hotel Ababil', 9, 14, '01956999555', 'https://www.hotelgrandmostafa.com/', 'download.png', '61, Dargah Gate, Sylhet - 3100'),
(35, 'Osmani Museum', 15, 19, '', '', 'fdyhrtryrt.jpg', 'Osmani Museum is a museum in Kotwali Thana of Sylhet, Bangladesh. The ancestors home of Bangabir General Muhammad Ataul Gani Osmani, the Commander-in-Chief of Bangladesh Forces (12 April 1971 â€“ 7 April 1972) has been transformed into famous \"Osmani Museum\".'),
(36, 'Bisnakandi', 11, 29, '', '', 'bisnakandi.jpg', 'Bisnakandi is a picturesque village in Sylhet, Bangladesh, known for its stunning natural beauty. It is a popular tourist destination featuring a unique combination of rolling hills, cascading streams, and expansive stone beds. The place is situated near the India-Bangladesh border, where the Dawki River flows down from the Meghalaya hills into Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `place_type`
--

CREATE TABLE `place_type` (
  `p_t_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `place_type`
--

INSERT INTO `place_type` (`p_t_id`, `name`) VALUES
(1, 'Hospital'),
(2, 'Fire station'),
(3, 'Police station'),
(4, 'Atm'),
(5, 'Restaurant'),
(6, 'Beauty salon'),
(7, 'Gas'),
(8, 'Grocery store'),
(9, 'Hotel'),
(10, 'Pharmacy'),
(11, 'Attraction'),
(13, 'Park'),
(15, 'Museum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `initiative`
--
ALTER TABLE `initiative`
  ADD PRIMARY KEY (`init_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk` (`p_t_id`),
  ADD KEY `fk2` (`location_id`);

--
-- Indexes for table `place_type`
--
ALTER TABLE `place_type`
  ADD PRIMARY KEY (`p_t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `initiative`
--
ALTER TABLE `initiative`
  MODIFY `init_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `fk` FOREIGN KEY (`p_t_id`) REFERENCES `place_type` (`p_t_id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`location_id`) REFERENCES `locations` (`location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
