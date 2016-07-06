CREATE TABLE Payroll_Table
(
ID int NOT NULL AUTO_INCREMENT,
Employee_ID int NOT NULL,
Month varchar(100),
Period varchar(100),
SSN varchar(150) NOT NULL,
Hours varchar(150) NOT NULL,
PRIMARY KEY (ID),
FOREIGN KEY (Employee_ID) REFERENCES Employee_Table(ID)
); 