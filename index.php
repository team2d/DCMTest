<?php
/*
db: mysql(Search by the fields above)(limit n,25)
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
objName
cost

(card profile page) queries/selects:
last card usage date
total purchases amount
card purchase history

(card list page) queries/selects:
activation
deactivation
deletion
list

scripts:
mock data adder


html\js:
cardList:listtable:AJAX:onstartExpiredCheckMarkerFunc
CardsGenerator: series, expiration period("1 month", "6 months", "one year"), number of cards to generate

All code is covered with PHP and JS unit tests.???
Pages are styled with CSS :)
maximum simple, one hour?*/
?>