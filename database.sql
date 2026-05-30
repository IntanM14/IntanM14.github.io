CREATE DATABASE moodmusic;

USE moodmusic;

CREATE TABLE lagu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    artist VARCHAR(100),
    mood VARCHAR(50),
    link VARCHAR(255)
);