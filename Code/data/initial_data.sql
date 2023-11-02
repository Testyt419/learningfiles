CREATE TABLE `sample` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL
);
INSERT INTO `sample` (`name`) VALUES ('John');

ALTER TABLE `sample`
ADD `dick_size_in_cm` FLOAT(5,2);

UPDATE `sample`
SET `dick_size_in_cm`=200.1
WHERE `name`='John';

Insert into `sample` (`name`,`dick_size_in_cm`) VALUES 
("Mentas", 20),
("Mentos", 20.1);