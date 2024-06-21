--Creating database quary
CREATE DATABASE practice;

--Creating a table quary
CREATE TABLE `practice`.`students` 
(`ID` VARCHAR(255) NOT NULL AUTO_INCREMENT , 
`Name` CHAR(255) NOT NULL , 
`Age` INT NOT NULL , 
`Country` CHAR NOT NULL , 
PRIMARY KEY (`ID`))
 ENGINE = InnoDB;


--Alter/making table changes
ALTER TABLE `students` CHANGE `ID` `ID` VARCHAR(245) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;
