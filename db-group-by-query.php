db-group-by-query

1.

SELECT COUNT(*), YEAR(`enrolment_date`) AS `anno`
FROM `students`
GROUP BY `anno`;

2.

SELECT COUNT(*), `office_address`
FROM `teachers`
GROUP BY `office_address`;

3.

SELECT AVG(`vote`), `exam_id`
FROM `exam_student`
GROUP BY `exam_id`;

4.

SELECT COUNT(*), `degrees`.`department_id`
FROM `degrees`
GROUP BY `degrees`.`department_id`;