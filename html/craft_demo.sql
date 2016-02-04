CREATE SCHEMA craft_demo;
USE craft_demo;
CREATE TABLE app (`id` INTEGER(11) AUTO_INCREMENT PRIMARY KEY, `appID` VARCHAR(12) NOT NULL, `averageUserRating` DOUBLE(3,2) NOT NULL DEFAULT 0.00, `currency` VARCHAR(3) NOT NULL DEFAULT 'USD', `price` DOUBLE(5,2) NOT NULL DEFAULT 0.00, `releaseDate` DATE NOT NULL, `sellerName` VARCHAR(60) NOT NULL, `sellerURL` VARCHAR(256) NULL DEFAULT NULL, `userRatingCount` INTEGER(11) NOT NULL DEFAULT 0, `version` VARCHAR(8) NULL DEFAULT NULL); 
mysql> describe app;
+-------------------+--------------+------+-----+---------+----------------+
| Field             | Type         | Null | Key | Default | Extra          |
+-------------------+--------------+------+-----+---------+----------------+
| id                | int(11)      | NO   | PRI | NULL    | auto_increment |
| appID             | varchar(12)  | NO   |     | NULL    |                |
| averageUserRating | double(3,2)  | NO   |     | 0.00    |                |
| currency          | varchar(3)   | NO   |     | USD     |                |
| price             | double(5,2)  | NO   |     | 0.00    |                |
| releaseDate       | date         | NO   |     | NULL    |                |
| sellerName        | varchar(60)  | NO   |     | NULL    |                |
| sellerURL         | varchar(256) | YES  |     | NULL    |                |
| userRatingCount   | int(11)      | NO   |     | 0       |                |
| version           | varchar(8)   | YES  |     | NULL    |                |
+-------------------+--------------+------+-----+---------+----------------+
10 rows in set (0.00 sec)


CREATE TABLE screenshots (`id` INTEGER(11) AUTO_INCREMENT PRIMARY KEY, `app_id` INTEGER(11) NOT NULL, FOREIGN KEY(`app_id`) REFERENCES app(`id`), `link` VARCHAR(256) NOT NULL, `description` VARCHAR(128) NULL DEFAULT NULL); 