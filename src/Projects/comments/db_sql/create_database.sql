/*
@author Elkeno Jones_ejones109029
Date: 2016/10/08
Purpose:
This sql script is to be used to create the comments database used in Elkeno Jones's CIS2288 Assignment 2
 */

-- CREATE DATABASE `cis2288_comments`;
--
-- USE `cis2288_comments`;
CREATE DATABASE `jenny_comments`;

USE `jenny_comments`;

/*create a user in database*/
grant select, insert, update, delete on cis2288_comments.*
to 'cis2288_admin'@'localhost'
identified by 'phpisfun';
flush privileges;

-- CREATE USERS TABLE
CREATE TABLE IF NOT EXISTS `users`(
    `username` varchar(30) NOT NULL,
    `password` longtext NOT NULL,
    `name` varchar(30) NOT NULL,
    PRIMARY KEY(`username`)
);

-- CREATE COMMENTS TABLE
CREATE TABLE IF NOT EXISTS `comments`(
    `commentId` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `title` varchar(20) NOT NULL,
    `message` varchar(200) NOT NULL,
    `date_time` varchar(20) NOT NULL,
    PRIMARY KEY(`commentId`),
    FOREIGN KEY(`username`) REFERENCES `users`(`username`)
);

-- ALTER USERS TO MAKE USERNAME COLUMN UNIQUE
ALTER TABLE `users`
ADD UNIQUE (username)