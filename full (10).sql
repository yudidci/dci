-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 02:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odalfgsm3b`
--

-- --------------------------------------------------------

--
-- Table structure for table `full`
--

CREATE TABLE `full` (
  `reg_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob_place` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `road_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rw` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `followers_count` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tingkat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referral` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level_user` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trn_date` datetime DEFAULT NULL,
  `phone` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `full`
--

INSERT INTO `full` (`reg_no`, `name`, `nik`, `dob_place`, `dob`, `gender`, `road_name`, `rt`, `rw`, `desa`, `kec`, `agama`, `marital`, `job`, `nationality`, `followers_count`, `password`, `tingkat`, `referral`, `level_user`, `email`, `trn_date`, `phone`) VALUES
('20200506382552', 'Andi', '1234567890123456', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 1, '$2b$10$cbC6EILPekm.uHr7UBw7WecKkCl08.626srd4Jjb/.ActO0B/6yRS', NULL, '', NULL, NULL, NULL, NULL),
('20200506908427', 'Belle Dian', '4030620209876675', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 9, '22kucing', NULL, '20200506382552', 'admin', 'belle@mail.com', '2020-06-15 11:25:46', NULL),
('2020050661834', 'Cindy', '1234567890123456', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$cbC6EILPekm.uHr7UBw7WepUpYa0l8DQxlwYkTxxL8XNEXeWAIQQC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200506872657', 'Dian', '1234567890123456', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$cbC6EILPekm.uHr7UBw7WepUpYa0l8DQxlwYkTxxL8XNEXeWAIQQC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200506467229', 'Erik', '1234567890123456', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$cbC6EILPekm.uHr7UBw7Weuo0RTofkY/MCIdXtz6tBgumIOHUFH7C', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200506282765', 'Fira', '1234567890123456', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$cbC6EILPekm.uHr7UBw7WepUpYa0l8DQxlwYkTxxL8XNEXeWAIQQC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200506974718', 'Gian', '1234567890123456', 'Tangerang', '2020-05-06', 'pria', 'Depok', '002', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 32, '$2b$10$cbC6EILPekm.uHr7UBw7WepUpYa0l8DQxlwYkTxxL8XNEXeWAIQQC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200508993471', 'Hella', '1234567890123455', 'Tangerang', '2020-05-08', 'pria', 'Jl Depok', '004', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$b4fPx8FkKJ29keHKzxHUseinyXeRE4V0Ha15DOzC4LC6st.tyhzfi', NULL, '', NULL, NULL, NULL, NULL),
('20200508349020', 'Heri', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.Qe9l8LytedN6Bi1TANJ2yYBv08hM40.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508462933', 'Ian', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508528033', 'Jerry', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508591417', 'Kingkin', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 16, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508777785', 'Lina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508300654', 'Mia', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508704272', 'Nila', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508649092', 'Omar', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508170618', 'Puan', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('2020050815326', 'Qintri', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508878966', 'Rini', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508535269', 'Sinta', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508676253', 'Tini', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508463835', 'Urip', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508828246', 'Venna', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508552688', 'Wahyu', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508583228', 'Xanders', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508797418', 'Yudi', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.Qe9l8LytedN6Bi1TANJ2yYBv08hM40.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508198068', 'Zahra', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.Qe9l8LytedN6Bi1TANJ2yYBv08hM40.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508397325', 'Zikri', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.Qe9l8LytedN6Bi1TANJ2yYBv08hM40.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508306441', 'Xinta', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508252761', 'Wina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508537019', 'Vina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508770348', 'Usman', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508911585', 'Tono', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508919801', 'Surip', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.Qe9l8LytedN6Bi1TANJ2yYBv08hM40.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508403903', 'Risma', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.Qe9l8LytedN6Bi1TANJ2yYBv08hM40.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508107482', 'Qory', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508380098', 'Pina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508530673', 'Orin', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508792244', 'Naomi', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508146859', 'Mulan', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$yrcj2qYF2bJPZvpZd8qSs.AsdjNsTfbuIhz.fhJy8bpa8nOH2y4fa', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200508139778', 'Layla', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$5ynHktEdnFxztWRkgqsZweVLZIuJ0KXtSCEfrILjTZUQSUxeBnWEC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200508930439', 'Keysa', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$5ynHktEdnFxztWRkgqsZweVLZIuJ0KXtSCEfrILjTZUQSUxeBnWEC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200508713084', 'Jina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$5ynHktEdnFxztWRkgqsZweVLZIuJ0KXtSCEfrILjTZUQSUxeBnWEC', NULL, '20200506908427', NULL, NULL, NULL, NULL),
('20200508751317', 'Timothy', '1234567890123445', 'Depok', '1995-08-04', 'pria', 'Jl. Kaliurang KM 10', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Wiraswasta', 'WNA', 5, '22timdrake', NULL, '20200506908427', 'admin', 'timdrake@mail.com', NULL, '082298655387'),
('20200508701900', 'Gundala', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508751317', NULL, NULL, NULL, NULL),
('20200508166260', 'Flores', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eDTpNxxj80fuZ23US2DpQYIusIMQKu6u', NULL, '20200508751317', NULL, NULL, NULL, NULL),
('20200508864933', 'Ernes', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508751317', NULL, NULL, NULL, NULL),
('20200508568478', 'Dono', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508751317', NULL, NULL, NULL, NULL),
('20200508635552', 'Charlie', '2206202012318899', 'Tangerang', '2020-05-08', 'Pria', 'Bogor', '002', '001', 'Sukatani', 'Cisoka', 'Kristen', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 13, '22charlie', NULL, '20200508751317', 'admin', 'charlie@mail.com', NULL, '082298655388'),
('20200508601701', 'Beni', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508164827', 'Arfian', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eDTpNxxj80fuZ23US2DpQYIusIMQKu6u', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508372814', 'Bentri', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508559535', 'Cinta', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508113667', 'Diana', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eDTpNxxj80fuZ23US2DpQYIusIMQKu6u', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508529091', 'Erina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508908442', 'Febrian', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508610574', 'Gempi', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508670804', 'Herni', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('2020050882672', 'Ikang', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508955240', 'Juned', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508224546', 'Irfan', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508681087', 'Junaedi', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508635552', NULL, NULL, NULL, NULL),
('20200508394842', 'Kris', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508264394', 'Lena', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508996072', 'Muhammad', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eiN7fuSG4IYTXdeCzEXEktD2.DviSNYW', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508791385', 'Nirmala', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508885227', 'Opick', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508287093', 'Pesto', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508766879', 'Qiony', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eiN7fuSG4IYTXdeCzEXEktD2.DviSNYW', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508298545', 'Rama', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('2020050830976', 'Srikandi', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508504965', 'Tina', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508497596', 'Ursula', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471elKYNSQDy04fD9SG/v.aL1r3532gAhj2', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508793330', 'Vian', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471elKYNSQDy04fD9SG/v.aL1r3532gAhj2', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508494946', 'Wushu', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471elKYNSQDy04fD9SG/v.aL1r3532gAhj2', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508920627', 'Xian', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471elKYNSQDy04fD9SG/v.aL1r3532gAhj2', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508107527', 'Yahya', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eDTpNxxj80fuZ23US2DpQYIusIMQKu6u', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200508702245', 'Zikra', '1234567890123456', 'Tangerang', '2020-05-08', 'pria', 'Depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '$2b$10$ifS5LU4pZHI4AmpOqO471eWPSpkr3nalTZfmVuLbj9Z0M.PhY4/2C', NULL, '20200508591417', NULL, NULL, NULL, NULL),
('20200512927191', 'Putra', '1234567890123456', 'Tangerang', '2020-05-12', 'pria', 'Depok', '002', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$oOkp7bA9jHCSqLlpLeN0PuMrBfvjIde1zfGST/R0blvQh2yDlUN/.', NULL, '', NULL, NULL, NULL, NULL),
('20200512467227', 'Hendri', '1234567890123456', 'Tangerang', '2020-05-12', 'pria', 'Depok', '002', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 13, '$2b$10$oOkp7bA9jHCSqLlpLeN0PuMrBfvjIde1zfGST/R0blvQh2yDlUN/.', NULL, '20200506974718', NULL, NULL, NULL, NULL),
('20200518470047', 'Hendra', '1234567890123456', 'Tangerang', '2020-05-18', 'pria', 'depok', '003', '002', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$yD0dMX.DHoJoOKAygSK68.OfyCSB6ofNfZ.7caGatE9NQr9Hu9pVu', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519775305', 'Hendro', '1234567890123455', 'Tangerang', '2020-05-19', 'pria', 'Depok', '001', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$acHOC92kRfm5iiDiP/P6r.YynUwJayDqDyAlzO5ChC74/Zc902ro2', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519195995', 'Hendrik', '1234567890123455', 'Tangerang', '2020-05-19', 'pria', 'Depok', '001', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$acHOC92kRfm5iiDiP/P6r.YynUwJayDqDyAlzO5ChC74/Zc902ro2', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519945702', 'Hendru', '1234567890123455', 'Tangerang', '2020-05-19', 'pria', 'Depok', '001', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$acHOC92kRfm5iiDiP/P6r.YynUwJayDqDyAlzO5ChC74/Zc902ro2', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519876869', 'Hendrum', '1234567890123455', 'Tangerang', '2020-05-19', 'pria', 'Depok', '001', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$6TlwtTqDc29L2lFVfO.5KuSTWR2lS80bZVwHA/n7eoiKQZmIwHhMa', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519411637', 'Hendram', '1234567890123455', 'Tangerang', '2020-05-19', 'pria', 'Depok', '001', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$6TlwtTqDc29L2lFVfO.5KuSTWR2lS80bZVwHA/n7eoiKQZmIwHhMa', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519514872', 'Amber', '1234567890123455', 'Tangerang', '2020-05-19', 'pria', 'Depok', '001', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$PY9CWkzN16k7EjvOL3aqk.AY40dsVOnTSg0yoVQW1q9Rg4XUx4Nu.', NULL, '20200512467227', NULL, NULL, NULL, NULL),
('20200519461095', 'testing', '2020062914091123', 'Tangerang', '2020-05-19', 'pria', 'Depok', '004', '002', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 4, '$2b$10$wNiszwuzOxpyZ06a7Q2o1eWKlbr069dzo/HrVkEv2vr0yUrWoLdtW', NULL, '', NULL, NULL, NULL, NULL),
('20200519965595', 'testingtwo', '1234567890123456', 'Tangerang', '2020-05-19', 'pria', 'Depok', '004', '002', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 3, '$2b$10$wNiszwuzOxpyZ06a7Q2o1eWKlbr069dzo/HrVkEv2vr0yUrWoLdtW', NULL, '', NULL, NULL, NULL, NULL),
('20200520578538', 'selina', '0408199508080808', 'Tangerang', '2020-05-20', 'pria', 'depok', '002', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '22timdrake', NULL, '', 'admin', NULL, NULL, NULL),
('2020052625176', 'Jason', '2020050604081995', 'Tangerang', '2020-05-26', 'pria', 'Depok', '003', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$GKQNx2UThrI14aoxrMM2o.14VqLjd78iGoQmwg4HfiPmm6.nKnF.e', NULL, '', NULL, NULL, NULL, NULL),
('202006021453', 'Tim Drake', '2020060298123476', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '22timdrake', NULL, NULL, NULL, NULL, NULL, NULL),
('20200602649109', 'Tim Drake', '2020060298181919', 'Tangerang', '2020-05-08', 'pria', 'Depok', '004', '002', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '22timdrake', NULL, '', 'admin', NULL, NULL, NULL),
('2020060485917', 'Mulan', '2020060499887728', 'Tangerang', '2020-06-04', 'pria', 'Jl. Sawo No 27', '004', '001', 'Pondok Cina', 'Beji', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '$2b$10$8Ct8V2xBjXW3O9QSbC3WRepOTN99qgVv3OVEZ15b/0QeHYNFy0G6O', NULL, '', NULL, NULL, NULL, NULL),
('20200609402695', 'Ben Platt', '2020060917030804', 'Tangerang', '2020-06-09', 'pria', 'Jl Sawo', '004', '001', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNI', 0, '22timdrake', NULL, '', 'admin', NULL, NULL, NULL),
('20200615197145', 'Kenzo', '1506202019950833', 'wolter', '1995-08-04', 'Pria', 'Wolter', '04', '03', 'Wolter', 'wolter', 'islam', 'lajang', 'karyawan swasta', 'indonesia', 0, '22hello', NULL, '20200512467227', 'admin', 'kenzo@mail.com', '2020-06-15 12:00:28', '082298655387'),
('20200617167382', 'jasmine', '2020061710518889', 'Depok', '2020-06-17', 'wanita', 'Depok', '001', '004', 'Sukatani', 'Cisoka', 'Islam', 'Belum Menikah', 'Karyawan Swasta', 'WNA', 0, '22jasmine', NULL, '', 'member', 'jasmine@mail.com', '2020-06-17 09:10:06', '082381166777'),
('20200617801976', 'Alin Putri', '2020061717071245', 'Tangerang', '2020-06-17', 'pria', 'Depok', '004', '004', 'Cisoka', 'Sukatani', 'Islam', 'Belum Menikah', 'Wiraswasta', 'WNI', 0, '22alin', NULL, '', 'admin', 'alin@gmail.com', NULL, '08229787690');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
