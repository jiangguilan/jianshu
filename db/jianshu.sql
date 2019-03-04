SET NAMES UTF8;
DROP DATABASE IF EXISTS JIANSHU;
CREATE DATABASE JIANSHU CHARSET = UTF8;

USE JIANSHU;

/*-- 权限*/
CREATE TABLE jurisdiction(
    `id` INT AUTO_INCREMENT NOT NULL,
    `jurisdiction_name` VARCHAR(40) NOT NULL,
    `jurisdiction_level` INT NOT NULL UNIQUE,/*--权利级别：管理员，作者，游客*/
    `create_time` DATE ,/*--创建日期*/
    PRIMARY KEY (`id`)
) ;
INSERT INTO jurisdiction VALUES(NULL, '管理员', 1, now());
INSERT INTO jurisdiction VALUES(NULL, '作者', 2,  now());
INSERT INTO jurisdiction VALUES(NULL, '游客', 3,  now());

/*-- 用户*/
CREATE TABLE user(
    `id` INT AUTO_INCREMENT NOT NULL,
    `user_level` INT NOT NULL,
        FOREIGN KEY(`user_level`) REFERENCES jurisdiction(`jurisdiction_level`),
    `user_name` VARCHAR(40) NOT NULL,
    `user_password` VARCHAR(40) NOT NULL,
    `user_account` VARCHAR(40) NOT NULL,/*--权利级别*/
    `create_time` DATE ,/*--创建日期*/
    `gender` ENUM('0','1','2'),
    `born` VARCHAR(16),
    PRIMARY KEY (`id`)
) ;

INSERT INTO user VALUES(NULL, 2, 'jiang', '123abc', '123456', now(),'2','1994-3-16');
