CREATE DATABASE cpsc348groupproject

--DROP TABLE IF EXISTS 'user';

CREATE TABLE user (
    username varchar(30) NOT NULL,
    password varchar(30) NOT NULL,
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    profilepic varchar(50) DEFAULT NULL,
    PRIMARY KEY (username)
);

--CPSC348_Group_Project\images\default.png
--DROP TABLE IF EXISTS 'schedule';

CREATE TABLE schedule (
    classnum int NOT NULL,
    title varchar(30) NOT NULL,
    start varchar(30) NOT NULL,
    FOREIGN KEY (username) REFERENCES user(username)
);

--DROP TABLE IF EXISTS 'followers';

CREATE TABLE followers (
    username varchar(30) NOT NULL,
    follower varchar(30) NOT NULL,
    FOREIGN KEY (username) REFERENCES user(username)
);

