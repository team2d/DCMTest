<?php
/*
db: mysql
-=cards=-
id
series - TINYTEXT (3 uppercase letters)
number - int (6 digits)
issueDate - int (timestamp)
expirationDate - int (timestamp)
status (active / inactive / expired) (1/2/3) TINYINT

-=purchases=-
id
cardId
articleId
operTime

-=articles=-
id
name
cost

CREATE TABLE `cards` ( `id` INT AUTO_INCREMENT, `series` TEXT, `number` INT, `issueDate` INT, `expirationDate` INT, `status` INT, PRIMARY KEY( `id` ));
CREATE TABLE `purchases` ( `id` INT AUTO_INCREMENT, `cardId` INT, `articleId` INT, `operTime` INT, PRIMARY KEY( `id` ))
CREATE TABLE `articles` ( `id` INT AUTO_INCREMENT, `name` TEXT, `cost` REAL, PRIMARY KEY( `id` ))
INSERT INTO `cards` (`series` ,`number` ,`issueDate` ,`expirationDate` ,`status`)VALUES ('asc',  '123456',  '363453456',  '456345634',  '1');
INSERT INTO `purchases` (`cardId` ,`articleId`, `operTime`)VALUES ('1', '1', '567457637');

(card profile page) queries/selects:
last card usage date
total purchases amount
card purchase history

(card list page) queries/selects:
activation
deactivation
deletion
list(Search by the fields above)(limit n,25)

scripts:
mock data adder

html\js:
cardList:listtable:AJAX:onstartExpiredCheckMarkerFunc
CardsGenerator: series, expiration period("1 month", "6 months", "one year"), number of cards to generate

All code is covered with PHP and JS unit tests.???
Pages are styled with CSS :)
maximum simple, one hour?*/
?>