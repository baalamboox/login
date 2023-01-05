CREATE DATABASE IF NOT EXISTS login_db;
USE login_db;
CREATE TABLE IF NOT EXISTS user(
    u_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    u_names VARCHAR(45) NOT NULL,
    u_first_surname VARCHAR(45) NOT NULL,
    u_second_surname VARCHAR(45) NOT NULL,
    u_birthday DATE NOT NULL,
    u_phone_number VARCHAR(10) NOT NULL,
    u_carrer VARCHAR(45) NOT NULL,
    u_email VARCHAR(64) NOT NULL,
    u_password VARCHAR(16) NOT NULL,
    upload_files INT DEFAULT 0,
    dda_athorized INT DEFAULT 0,
    rf_authorized INT DEFAULT 0,
    enable_test INT DEFAULT,
    user_score INT DEFAULT 0,
    rol INT NOT NULL DEFAULT 0
) ENGINE = InnoDB;