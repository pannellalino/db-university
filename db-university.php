db_university

1.

SELECT *
FROM `students`
WHERE `date_of_birth` > '1990-1-1' && `date_of_birth` < '1990-12-31';

2.

SELECT *
FROM `courses`
WHERE `cfu` > 10;

3.

SELECT *
FROM `students`
WHERE `date_of_birth` < '1992-12-16';

4.

SELECT *
FROM `courses`
WHERE `period` = 'I semestre' && `year` = 1;

5.

SELECT *
FROM `exams`
WHERE `hour` > '14:00' && `date` = '2020-6-20';

6.

SELECT * 
FROM `degrees`
WHERE `level` = 'magistrale';

7.

SELECT * 
FROM `departments`;

8.

SELECT * 
FROM `teachers`
WHERE `phone` IS NULL;