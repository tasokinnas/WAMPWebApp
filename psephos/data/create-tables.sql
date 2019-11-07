-- To run this script, use the following command on webdev
-- mysql -u csstudent -p < create-table.sql
--     (enter csstudent password when prompted)

-- Use your webdev database.
USE psephos;

-- Drop table first.
DROP TABLE IF EXISTS users;

-- Create a table in database.
CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	lname VARCHAR (50) NOT NULL,
	fname VARCHAR (50) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	userid VARCHAR (50) NOT NULL,
	psword VARCHAR (256) NOT NULL
);

CREATE TABLE voterdata (
	Voter_ID INT NOT NULL PRIMARY KEY,	
	Last_Name VARCHAR (50),	
	First_Name VARCHAR (50),
	Middle_Name VARCHAR (50),
	Suffix VARCHAR (50),
	Street_Number VARCHAR (50),
	Street_Name VARCHAR (50),
	Unit VARCHAR (50),
	Street_Number_2 VARCHAR (50),
	Street_Number_3 VARCHAR (50),
	City VARCHAR (50),
	State VARCHAR (50),
	Zip VARCHAR (50),
	Zip4Code VARCHAR (50),
	Mailing_Street_Number VARCHAR (50),
	Mailing_Street_Name VARCHAR (50),
	Mailing_Unit VARCHAR (50),
	Mailing_Street_Number_2 VARCHAR (50),
	Mailing_Street_Number_3 VARCHAR (50),
	Mailing_City VARCHAR (50),
	Mailing_State VARCHAR (50),
	Mailing_Zip VARCHAR (50),
	Mailing_Zip4Code VARCHAR (50),
	Mailing_Country VARCHAR (50),
	Gender VARCHAR (50),
	Age VARCHAR (50),
	Registration_Date VARCHAR (50),
	Phone_Number VARCHAR (50),
	County VARCHAR (50),
	County_Precinct VARCHAR (50),
	Legislative_District VARCHAR (50),
	Congressional_District VARCHAR (50),
	Party VARCHAR (50),
	2016_PRIMARY_DATE VARCHAR (50),
	2016_PRIMARY_VOTE VARCHAR (50),	
	2016_PARTY1 VARCHAR (50),
	2016_PARTY2 VARCHAR (50),
	2014_GENERAL_DATE VARCHAR (50),
	2014_GENERAL_VOTE VARCHAR (50),	
	2014_PRIMARY_DATE VARCHAR (50),
	2014_PRIMARY_VOTE VARCHAR (50),	
	2014_PARTY1 VARCHAR (50),
	2014_PARTY2 VARCHAR (50),
	2012_GENERAL_DATE VARCHAR (50),
	2012_GENERAL_VOTE VARCHAR (50),	
	2012_PRIMARY_DATE VARCHAR (50),
	2012_PRIMARY_VOTE VARCHAR (50),	
	2012_PARTY1 VARCHAR (50),
	2012_PARTY2 VARCHAR (50),
	2010_GENERAL_DATE VARCHAR (50),
	2010_GENERAL_VOTE VARCHAR (50),	
	2010_PRIMARY_DATE VARCHAR (50),
	2010_PRIMARY_VOTE VARCHAR (50),	
	2010_PARTY1 VARCHAR (50),
	2008_GENERAL_DATE VARCHAR (50),
	2008_GENERAL_VOTE VARCHAR (50)
);

CREATE TABLE candcont (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	CandLast VARCHAR (50),
	CandSuf VARCHAR (50),
	CandFirst VARCHAR (50),
	CandMid VARCHAR (50),
	Party VARCHAR (50),
	District VARCHAR (50),
	Office VARCHAR (50),
	ContrDate VARCHAR (50),
	ContrAmount VARCHAR (50),
	ContrType VARCHAR (50),
	ContrCP VARCHAR (50),
	ContributorName VARCHAR (50),
	ContrFirst VARCHAR (50),
	ContrMid VARCHAR (50),
	ContrSuf VARCHAR (50),
	ContrMailing VARCHAR (50),
	ContributorLine2 VARCHAR (50),
	ContrCity VARCHAR (50),
	ContrSt VARCHAR (50),
	ContrZip VARCHAR (50),
	ContributorCountry VARCHAR (50),
	Election VARCHAR (50),
	ElectionYear VARCHAR (50)
);

CREATE TABLE candexp (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	CandLast VARCHAR (50),
	CandSuf VARCHAR (50),
	CandFirst VARCHAR (50),
	CandMid VARCHAR (50),
	Party VARCHAR (50),
	District VARCHAR (50),
	Office VARCHAR (50),
	ExpDate VARCHAR (50),
	ExpAmount VARCHAR (50),
	ExpType VARCHAR (50),
	ExpenCP VARCHAR (50),
	RecipientName VARCHAR (50),
	RecipSuf VARCHAR (50),
	RecipFirst VARCHAR (50),
	RecipMid VARCHAR (50),
	RecipMailing VARCHAR (50),
	RecipientLine2 VARCHAR (50),
	RecipCity VARCHAR (50),
	RecipSt VARCHAR (50),
	RecipZip VARCHAR (50),
	RecipientCountry VARCHAR (50),
	PurposeCodeOne VARCHAR (50),
	PurposeCodeTwo VARCHAR (50),
	PurposeCodeThree VARCHAR (50)
);

CREATE TABLE commcont (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Committee VARCHAR (50),
	Party VARCHAR (50),
	ContrDate VARCHAR (50),
	ContrAmount VARCHAR (50),
	ContrType VARCHAR (50),
	ContrCP VARCHAR (50),
	ContributorName VARCHAR (50),
	ContribSuf VARCHAR (50),
	ContrFirst VARCHAR (50),
	ContrMid VARCHAR (50),
	ContrMailing1 VARCHAR (50),
	ContrMailing2 VARCHAR (50),
	ContrCity VARCHAR (50),
	ContrSt VARCHAR (50),
	ContrZip VARCHAR (50),
	ContributorCountry VARCHAR (50)
);

CREATE TABLE commexp (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Committee VARCHAR (50),
	Party VARCHAR (50),
	ExpDate VARCHAR (50),
	ExpAmount VARCHAR (50),
	ExpType VARCHAR (50),
	ExpenCP VARCHAR (50),
	RecipientName VARCHAR (50),
	RecipSuf VARCHAR (50),
	RecipFirst VARCHAR (50),
	RecipMid VARCHAR (50),
	RecipMailing1 VARCHAR (50),
	RecipMailing2 VARCHAR (50),
	RecipCity VARCHAR (50),
	RecipSt VARCHAR (50),
	RecipZip VARCHAR (50),
	RecipientCountry VARCHAR (50),
	PurposeCodeOne VARCHAR (50),
	PurposeCodeTwo VARCHAR (50),
	PurposeCodeThree VARCHAR (50)
);

CREATE TABLE comments (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	lname VARCHAR (50) NOT NULL,
	fname VARCHAR (50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	comments VARCHAR (500) NOT NULL
);

-- Use insert to populate the test table
INSERT INTO users (lname, fname, email, userid, psword) VALUES('McGrane', 'Phil', 'phil@psephos.com', 'pmcgrane', 'password');
INSERT INTO users (lname, fname, email, userid, psword) VALUES('Lehosit', 'Jason', 'jason@psephos.com', 'jlehosit', 'password');
INSERT INTO users (lname, fname, email, userid, psword) VALUES('Brocksome', 'Benn', 'benn@psephos.com', 'brocksome', 'password');
INSERT INTO users (lname, fname, email, userid, psword) VALUES('Little', 'Brad', 'brad@psephos.com', 'blittle', 'password');

-- Show the tables in the webdev db.
SHOW TABLES;

-- Show contents in the test table in the webdev db.
SELECT * FROM test;