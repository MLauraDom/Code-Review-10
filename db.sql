/* Create Database */

CREATE DATABASE fswd14_CR10_LauraMoldovan_BigLibrary DEFAULT CHARACTER SET utf8;


/* Create Table */

CREATE TABLE book(
   id INT AUTO_INCREMENT PRIMARY KEY,
   picture VARCHAR(50),
   title VARCHAR(50),
   ISBN VARCHAR(50),
   descript VARCHAR(250),
   pType VARCHAR(10),
   author_first_name VARCHAR(50),
   author_last_name VARCHAR(50),
   publisher_name VARCHAR(50),
   publisher_adress VARCHAR(100),
   publish_date DATE,
   avail BOOLEAN
)

/* Insert values */

INSERT INTO book
VALUES
(1, "alchemist.jpeg", "The Alchemist", "978-0-06-235530-0", "A Fable About Following Your Dream.", "Book", "Paulo", "Coelho", "Harper Torch", "195 Broadway,
New York City, New York, U.S.", "1988-01-01", true),
(2, "lostime.jpg", "In Search of Lost Time", "9782291082538", "In Search of Lost Time: volumes 1 to 7", "Book", "Marcel", "Proust", "Slash Books", "","2019-12-30", true),
(3, "secret.jpg", "The Secret", "978-3442337903", "This book is based on the earlier film of the same name.", "Book", "Rhonda", "Byrne", "Arkana", "Hainbundstr. 17, 37085 Göttingen, Germany", "2007-04-10", false),
(4, "kyba.jpg", "The Kybalion", "978-1721791361", 'The essence of the teachings of Hermes Trismegistus.', "CD", "Konrad", "Halver", "Aurinia", "Bramfelder Str. 102A,
22305 Hamburg, Germany", "2018-06-23", false);








