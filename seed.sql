-- Seed Users
INSERT INTO users (email, password, role, name, avatar) VALUES
('auditor@example.com', '$2y$10$7WDrUr6xZBz.Dz1GGvrm1uC5PWH.T.so/eGkz47n7Vodr1Tx9QCN.', 'auditor', 'Auditor One', 'https://images.unsplash.com/photo-1543610892-0b1f7e6d8ac1?q=80&w=100&h=100&fit=crop&crop=entropy&auto=format'),
('staff@example.com', '$2y$10$7WDrUr6xZBz.Dz1GGvrm1uC5PWH.T.so/eGkz47n7Vodr1Tx9QCN.', 'staff', 'Staff One', 'https://images.unsplash.com/photo-1641700548878-adb8c33fc5ed?q=80&w=100&h=100&fit=crop&crop=entropy&auto=format'),
('manager@example.com', '$2y$10$7WDrUr6xZBz.Dz1GGvrm1uC5PWH.T.so/eGkz47n7Vodr1Tx9QCN.', 'manajer', 'Manager One', 'https://images.unsplash.com/photo-1631848252998-6d4dc0bebaf6?q=80&w=100&h=100&fit=crop&crop=entropy&auto=format');

-- Seed Modules
INSERT INTO modules (name, description) VALUES
('Reservasi', 'Modul untuk audit proses reservasi'),
('Front Office', 'Modul untuk audit operasional front office'),
('Keuangan', 'Modul untuk audit laporan keuangan'),
('Housekeeping', 'Modul untuk audit layanan housekeeping'),
('Keamanan Sistem', 'Modul untuk audit keamanan sistem IT');

-- Seed Audits
INSERT INTO audits (module_id, auditor_id, status) VALUES
(1, 1, 'completed'),
(2, 1, 'pending'),
(3, 1, 'completed'),
(4, 1, 'pending'),
(5, 1, 'completed');
