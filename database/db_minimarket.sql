-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 05:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_minimarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` bigint(20) UNSIGNED NOT NULL,
  `stok` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `produk_id`, `nama`, `satuan`, `harga_jual`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'K59075352', 5, 'Sabun Lifeboy', 'item', 82224, '15', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(2, 'K34564136', 6, 'Mie Sedap Ayam Bawang', 'pcs', 76953, '77', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(3, 'K41323948', 9, 'Mie Sedap Ayam Bawang', 'pack', 27305, '100', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(4, 'K25679781', 5, 'Mie Sedap Ayam Bawang', 'pack', 88440, '19', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(5, 'K11204311', 8, 'Sabun Lifeboy', 'pcs', 72467, '62', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(6, 'K17504505', 7, 'Mie Sedap Ayam Bawang', 'pcs', 42531, '52', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(7, 'K06905257', 8, 'Sabun Lifeboy', 'pcs', 46129, '64', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(8, 'K48304688', 5, 'Mie Sedap Ayam Bawang', 'pack', 99149, '8', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(9, 'K04949558', 5, 'Mie Sedap Ayam Bawang', 'pcs', 99836, '11', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(10, 'K40473734', 3, 'Sabun Lifeboy', 'pack', 50221, '43', '2021-03-16 21:18:39', '2021-03-16 21:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembelian_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `harga_beli` bigint(20) UNSIGNED NOT NULL,
  `jumlah` smallint(5) UNSIGNED NOT NULL,
  `sub_total` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualan_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `harga_jual` bigint(20) UNSIGNED NOT NULL,
  `jumlah` smallint(5) UNSIGNED NOT NULL,
  `sub_total` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_02_25_025132_create_supplier_table', 1),
(3, '2021_02_25_025522_create_produk_table', 1),
(4, '2021_02_25_025528_create_barang_table', 1),
(5, '2021_02_25_025554_create_customer_table', 1),
(6, '2021_02_25_025819_create_penjualan_table', 1),
(7, '2021_02_25_025825_create_pembelian_table', 1),
(8, '2021_02_25_030020_create_detail_penjualan_table', 1),
(9, '2021_02_25_030056_create_detail_pembelian_table', 1),
(10, '2021_02_25_030150_create_tampung_bayar_table', 1),
(11, '2021_02_25_060848_add_foreign', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `total` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_faktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_faktur` date NOT NULL,
  `total_bayar` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'est', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(2, 'perspiciatis', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(3, 'qui', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(4, 'fugiat', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(5, 'quaerat', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(6, 'illo', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(7, 'quidem', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(8, 'quod', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(9, 'officiis', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(10, 'adipisci', '2021-03-16 21:18:39', '2021-03-16 21:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode_supplier`, `nama_supplier`, `alamat`, `kota`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '18149', 'PD Suryatmi', 'Ki. B.Agam Dlm No. 573, Medan 53026, Sumut', 'Singkawang', '0334 6197 3404', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(2, '95807', 'PD Habibi', 'Jln. Gardujati No. 335, Bitung 72995, Jabar', 'Sabang', '0746 7642 2050', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(3, '55520', 'Perum Nainggolan', 'Ki. Dahlia No. 123, Bekasi 56244, Maluku', 'Administrasi Jakarta Utara', '(+62) 233 0923 6164', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(4, '50377', 'PD Nugroho Sihotang', 'Jln. K.H. Wahid Hasyim (Kopo) No. 558, Padang 22746, Kaltara', 'Tegal', '0394 5949 949', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(5, '54141', 'PD Utami Mahendra Tbk', 'Jln. Yosodipuro No. 579, Batu 90203, Kaltim', 'Batam', '0269 6216 303', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(6, '93393', 'UD Narpati Padmasari Tbk', 'Jr. Muwardi No. 29, Medan 74059, Sulut', 'Cilegon', '0476 2928 021', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(7, '5510', 'UD Lestari Wahyuni Tbk', 'Ds. Pasteur No. 647, Pasuruan 42377, Jateng', 'Tanjungbalai', '0589 3775 627', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(8, '5593', 'PT Haryanti (Persero) Tbk', 'Jr. Wahidin Sudirohusodo No. 518, Tomohon 84528, NTB', 'Sukabumi', '(+62) 978 7749 443', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(9, '43401', 'PT Rahayu Tbk', 'Jr. Ujung No. 153, Tidore Kepulauan 93432, NTT', 'Sabang', '(+62) 618 5381 5587', '2021-03-16 21:18:39', '2021-03-16 21:18:39'),
(10, '97187', 'UD Hidayat Tbk', 'Dk. Otto No. 677, Palangka Raya 61047, Babel', 'Blitar', '0821 8707 793', '2021-03-16 21:18:39', '2021-03-16 21:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `tampung_bayar`
--

CREATE TABLE `tampung_bayar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualan_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) UNSIGNED NOT NULL,
  `terima` bigint(20) UNSIGNED NOT NULL,
  `kembali` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_produk_id_foreign` (`produk_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pembelian_pembelian_id_foreign` (`pembelian_id`),
  ADD KEY `detail_pembelian_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_penjualan_penjualan_id_foreign` (`penjualan_id`),
  ADD KEY `detail_penjualan_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelian_supplier_id_foreign` (`supplier_id`),
  ADD KEY `pembelian_user_id_foreign` (`user_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_customer_id_foreign` (`customer_id`),
  ADD KEY `penjualan_user_id_foreign` (`user_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tampung_bayar`
--
ALTER TABLE `tampung_bayar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tampung_bayar_penjualan_id_foreign` (`penjualan_id`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tampung_bayar`
--
ALTER TABLE `tampung_bayar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembelian_pembelian_id_foreign` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_penjualan_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tampung_bayar`
--
ALTER TABLE `tampung_bayar`
  ADD CONSTRAINT `tampung_bayar_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
