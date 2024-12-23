CREATE DATABASE audit_hotel;

USE audit_hotel;

-- Tabel Users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('auditor', 'staff', 'manajer') NOT NULL,
    name VARCHAR(100) NOT NULL,
    avatar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Modules
CREATE TABLE modules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

-- Tabel Audits
CREATE TABLE audits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    module_id INT NOT NULL,
    auditor_id INT NOT NULL,
    status ENUM('pending', 'completed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (module_id) REFERENCES modules(id),
    FOREIGN KEY (auditor_id) REFERENCES users(id)
);

-- Tabel Audit Files
CREATE TABLE audit_files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    audit_id INT NOT NULL,
    staff_id INT NOT NULL,
    file_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (audit_id) REFERENCES audits(id),
    FOREIGN KEY (staff_id) REFERENCES users(id)
);

-- Tabel Audit Results
CREATE TABLE audit_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    audit_id INT NOT NULL,
    auditor_id INT NOT NULL,
    note TEXT,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    completed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (audit_id) REFERENCES audits(id),
    FOREIGN KEY (auditor_id) REFERENCES users(id)
);

-- Tabel Dashboard Logs
CREATE TABLE dashboard_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    manager_id INT NOT NULL,
    action VARCHAR(255),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (manager_id) REFERENCES users(id)
);
