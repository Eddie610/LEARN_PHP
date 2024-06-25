--Creating database quary
CREATE DATABASE practice;

--Creating a table quary
CREATE TABLE `practice`.`students` 
(`ID` INT NOT NULL AUTO_INCREMENT , 
`Name` CHAR(255) NOT NULL , 
`Age` INT NOT NULL , 
`Country` CHAR(255) NOT NULL ,
 PRIMARY KEY (`ID`)) 
 ENGINE = InnoDB;


--Alter/making table changes
ALTER TABLE `students` CHANGE `ID` `ID` VARCHAR(245) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;
ALTER TABLE `students` CHANGE ;

--Inserting data
INSERT INTO students (Name,Age,Country) VALUES ('Edward',30,'Uganda');
INSERT INTO students (Name,Age,Country) VALUES ('Kato',20,'Kenya');
INSERT INTO students (Name,Age,Country) VALUES ('Emma',33,'Tanzania');
INSERT INTO students (Name,Age,Country) VALUES ('Daiana',24,'Rwanda');
INSERT INTO students (Name,Age,Country) VALUES ('Johnathan',25,'Burundi');
INSERT INTO students (Name,Age,Country) VALUES ('Kamya',26,'South Africa');
INSERT INTO students (Name,Age,Country) VALUES ('Emelie',20,'United Kingdom');
INSERT INTO students (Name,Age,Country) VALUES ('Tendo',45,'Mexico');
INSERT INTO students (Name,Age,Country) VALUES ('Emmamanuel',35,'Tanzania');
INSERT INTO students (Name,Age,Country) VALUES ('Dina',33,'Congo');
INSERT INTO students (Name,Age,Country) VALUES ('Docase',23,'Sudan');
INSERT INTO students (Name,Age,Country) VALUES ('Feva',22,'Tanzania');
INSERT INTO students (Name,Age,Country) VALUES ('Winne',20,'Twinda&Tobago');
INSERT INTO students (Name,Age,Country) VALUES ('Bleizi',25,'Congo');
INSERT INTO students (Name,Age,Country) VALUES ('Namakula',33,'Uganda');
INSERT INTO students (Name,Age,Country) VALUES ('Samuel',45,'Tanzania');
INSERT INTO students (Name,Age,Country) VALUES ('Enule',33,'Tanzania');
INSERT INTO students (Name,Age,Country) VALUES ('Wilifred',37,'Russa');
INSERT INTO students (Name,Age,Country) VALUES ('Ben',27,'Nigeria');
INSERT INTO students (Name,Age,Country) VALUES ('Obine',33,'Ivorycost');
INSERT INTO students (Name,Age,Country) VALUES ('Phiona',22,'America');

--Selecting data from database
SELECT*FROM students;

SELECT Name,Age FROM students;
--Selecting specific data with conditions
SELECT*FROM students WHERE Age<30;
SELECT*FROM students WHERE Age<=30;
SELECT*FROM students WHERE Age>30;
SELECT*FROM students WHERE Age>=33;
SELECT*FROM students WHERE Country='Tanzania';
SELECT*FROM students WHERE Age BETWEEN 20 AND 40;
SELECT*FROM students WHERE Age <> 33;
SELECT*FROM students WHERE Country LIKE 'c%';--search for country that begin with give character
SELECT*FROM students WHERE Country LIKE '%a';--search for country that end with give character
SELECT*FROM students WHERE Country LIKE '%a%';--search for country that is between give character
SELECT*FROM students WHERE Country IN ('Congo','Uganda');
SELECT*FROM students WHERE Country='Tanzania' AND Age<30;
SELECT*FROM students WHERE Country='Tanzania' OR Age>30;

--Arranging data
SELECT*FROM students ORDER BY Country ASC;--Accending order
SELECT*FROM students ORDER BY Name DESC;--Deccending order
 
 --Update data
 UPDATE students SET age=15 WHERE ID=5;

--Delete data
DELETE FROM students WHERE ID=12; 

