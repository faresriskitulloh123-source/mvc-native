CREATE DATABASE IF NOT EXISTS kampus
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
USE kampus;
CREATE TABLE IF NOT EXISTS mahasiswa (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nim VARCHAR(20) NOT NULL UNIQUE,
 nama VARCHAR(100) NOT NULL,
 prodi VARCHAR(100) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO mahasiswa (nim, nama, prodi) VALUES
('23101001', 'Andi Pratama', 'Sistem Informasi'),
('23101002', 'Budi Santoso', 'Sistem Informasi'),