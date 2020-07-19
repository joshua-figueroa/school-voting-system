--
-- Database: `voting_system`
--

CREATE DATABASE voting_system;

--
-- Table: `users`
--

CREATE TABLE users (
    id INT UNIQUE AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    username VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    gradeLevel int NOT NULL,
    section int NOT NULL,
    voted TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
);

--
-- Table: `votes`
--

CREATE TABLE votes (
    id INT UNIQUE AUTO_INCREMENT,
    username VARCHAR(10) NOT NULL,
    gradeLevel INT NOT NULL,
    anime VARCHAR(10) NOT NULL,
    cc VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);