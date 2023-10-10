// creating a table with auto increment and primary key //
CREATE TABLE var (
    column1 int NOT NULL AUTO_INCREMENT,
    column2 varchar(255) NOT NULL,
    PRIMARY KEY (column1)
);

// inserting into tables
INSERT INTO table 
   (column1, column2, column3, ...,)
VALUES 
   (var1, var2, var3, ...,);