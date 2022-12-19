CREATE TABLE customersatisfaction (
 survey_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 inter_id VARCHAR(10) NOT NULL,
 tech_name VARCHAR(50) NOT NULL,
 answer1 TINYINT(6) UNSIGNED NOT NULL,
 comment1 TEXT,
 answer2 TINYINT(6) UNSIGNED NOT NULL,
 comment2 TEXT,
 survey_date VARCHAR(10) NOT NULL,
 inter_date VARCHAR(10) NOT NULL
);