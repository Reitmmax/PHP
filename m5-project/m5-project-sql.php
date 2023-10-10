// select from the categories table to show what is the id, in order
SELECT *
FROM categories3 
ORDER BY categoryID ASC

// select from Book table to show the books in alphabet order
SELECT *
FROM books3
ORDER BY bookTitle ASC

// adds a record into the book table 
INSERT INTO books3 
   (bookID, categoryID, bookTitle, author, ISBN, bookPrice)
VALUES 
   (NULL, 3, 'random book name', 'author, random', '1234567890', '12.35');

// Change the catergoryID to 4 in the books table

UPDATE books3
SET categoryID = 4
WHERE bookID = 22

// deletes anything from the book table that has 'random book name' under the bookTitle column

DELETE FROM books3
WHERE bookTitle = 'random book name'