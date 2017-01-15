<?php #books-1604-28.sql

/**
	* books-1605-03
	* SHOWS category and categories ID for book-categories.php
	*   single (list) / plural (view)
	*
	* Examples of ALIASing
	* Uses same example as above
	* Demostrates how it makess SQL more readable
	**/



/* PREFIX 16q2_
 * EXAMPLE of a JOIN
 * Always ONE less JOIN then there are TABLES involved
 * EOL space at end of line always
 **/



/* SQL for List page */
SELECT DISTINCT Category, 16q2_Books.CategoryID
FROM 16q2_Books
INNER JOIN 16q2_Categories
ON 16q2_Books.CategoryID = 16q2_Categories.CategoryID

ORDER BY Category DESC;




/* SQL for view page */

SELECT BookTitle, Category
FROM 16q2_Books
INNER JOIN 16q2_Categories
ON 16q2_Books.CategoryID = 16q2_Categories.CategoryID

WHERE 16q2_Books.CategoryID = 3

ORDER BY Category DESC;


/* Hotlink example - also called a loaded link

<a href="xxx-category.php?id=' . $myID . '">blah</a>
<a href="xxx-category.php?id=3”  >blah</a>

alwyas make it an int so folks can't append naugtiness to it like '; Drop table customers';

*/




/* ALIASing */


/* ALIASED SQL for view page
 *
 * ALIASes are out of flow
 * moment aliase is entered, everything = to aliase becomes aliased
 *
 */

SELECT DISTINCT Category, 16q2_Books.CategoryID
FROM 16q2_Books
INNER JOIN 16q2_Categories
ON 16q2_Books.CategoryID = 16q2_Categories.CategoryID

ORDER BY Category DESC;

/* find the FROM statement */
SELECT DISTINCT Category, B.CategoryID

FROM 16q2_Books AS B
INNER JOIN 16q2_Categories as C
ON B.CategoryID = C.CategoryID

ORDER BY Category DESC;

/* while aliasing is done in from portion, all things must be aliased in statement accordingly or errors happen */


/* select fields */
SELECT DISTINCT BookTitle, Category

FROM 16q2_Books AS B
INNER JOIN 16q2_Categories as C
ON B.CategoryID = C.CategoryID

WHERE B.CategoryID = 3

ORDER BY Category DESC;



/*
shows the descrioptions - note the use of the aliasing

*/
/* select fields */


/* find the FROM statement */
SELECT BookTitle, B.Description AS `MyBookDescription`, Category

FROM 16q2_Books AS B
INNER JOIN 16q2_Categories as C
ON B.CategoryID = C.CategoryID

WHERE B.CategoryID = 3

ORDER BY MyBookDescription DESC;




/*
shows the descrioptions - note the use of the aliasing

*/
/* select fields */


/* find the FROM statement */
SELECT BookTitle, B.Description AS `MyBookDescription`, Category

FROM 16q2_Books AS B
/*
	Better join generally

*/
LEFT JOIN 16q2_Categories as C
ON B.CategoryID = C.CategoryID

ORDER BY MyBookDescription DESC;




/*
GROUP BY and HAVING

*/


/* select fields */
SELECT COUNT(c.CategoryID) as MyNumBooks, BookTitle, B.Description AS `MyBookDescription`, Category

/* select table(s) */
FROM 16q2_Books AS B
/* Generally a BETTER join generally */
LEFT JOIN 16q2_Categories as C
ON B.CategoryID = C.CategoryID

/* use of having and group by to better order data */
HAVING count(`MyNumBooks`) > 3
GROUP BY Category;






















