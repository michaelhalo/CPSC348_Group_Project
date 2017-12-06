CREATE DATABASE cpsc348groupproject

--DROP TABLE IF EXISTS 'user';

CREATE TABLE 'user' (
    'username' varchar(30) NOT NULL,
    'password' varchar(30) NOT NULL,
    'firstname' varchar(30) NOT NULL,
    'lastname' varchar(30) NOT NULL,
    'profilepic' varchar(50) DEFAULT NULL,
    --default pic
    PRIMARY KEY ('username')
)

--DROP TABLE IF EXISTS 'schedule';

CREATE TABLE 'schedule' (
    'username' varchar(30) NOT NULL,
    'title' varchar(30) NOT NULL,
    'start' varchar(30) NOT NULL,
    'end' varchar(30) NOT NULL,
)

--DROP TABLE IF EXISTS 'followers';

CREATE TABLE 'followers' (
    'username' varchar(30) NOT NULL,
    'follower' varchar(30) NOT NULL,
)

