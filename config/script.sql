-- Active: 1776248452112@@127.0.0.1@3306@peersync
CREATE DATABASE peersync;

USE peersync;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    password VARCHAR(255),
    role VARCHAR(50)
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE user_skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    skill_id INT,
    niveau ENUM('maitrisee', 'a_travailler'),
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (skill_id) REFERENCES skills (id)
);

CREATE TABLE help_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    description TEXT,
    technologie VARCHAR(100),
    statut VARCHAR(50),
    id_student INT,
    id_tutor INT NULL,
    FOREIGN KEY (id_student) REFERENCES users (id),
    FOREIGN KEY (id_tutor) REFERENCES users (id)
);

CREATE TABLE evaluations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    commentaire TEXT,
    help_request_id INT,
    FOREIGN KEY (help_request_id) REFERENCES help_requests (id)
);