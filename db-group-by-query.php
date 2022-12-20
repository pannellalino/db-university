db-group-by-query

1.

SELECT COUNT(*), YEAR(`enrolment_date`) AS `anno`
FROM `students`
GROUP BY `anno`;

2.

SELECT COUNT(*), `office_address`
FROM `teachers`
GROUP BY `office_address`;