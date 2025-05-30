CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

-- Contact Messages Table
CREATE TABLE contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Guestbook Table
CREATE TABLE guestbook_entries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  comment TEXT NOT NULL,
  posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
