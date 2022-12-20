db-join-query

1.

SELECT DISTINCT `students`.`name`, `students`.`surname`, `degrees`.`name` AS `nome_corso`
FROM `students`
JOIN `degrees` ON `degrees`.`id` = `students`.`degree_id`
WHERE `degrees`.`name` = 'Corso di Laurea in Economia';

2.

SELECT *
FROM `degrees`
JOIN `departments` ON `departments`.`id` = `degrees`.`department_id`
WHERE `departments`.`name` = 'Dipartimento di Neuroscienze' && `degrees`.`level` = 'magistrale';

3.

SELECT `courses`.`name` AS `nome_corso`, `teachers`.`name`, `teachers`.`surname`
FROM `courses`
JOIN `course_teacher` ON `course_teacher`.`course_id` = `courses`.`id`
JOIN `teachers` ON `teachers`.`id` = `course_teacher`.`teacher_id`
WHERE `teachers`.`id` = 44;

4.

SELECT `students`.`surname`, `students`.`name`, `degrees`.`name` AS `corso`, `departments`.`name` AS `dipartimento`
FROM `students`
JOIN `degrees` ON `degrees`.`id` = `students`.`degree_id`
JOIN `departments` ON `departments`.`id` = `degrees`.`department_id`
ORDER BY `students`.`surname` DESC;

5.

SELECT `degrees`.`name` AS `corso_laurea`, `courses`.`name` AS `nome_corso`, `teachers`.`name`, `teachers`.`surname`
FROM `degrees`
JOIN `courses` ON `courses`.`degree_id` = `degrees`.`id`
JOIN `course_teacher` ON `course_teacher`.`course_id` = `courses`.`id`
JOIN `teachers` ON `teachers`.`id` = `course_teacher`.`teacher_id`;

6.

SELECT DISTINCT`teachers`.*, `departments`.`name`
FROM `departments`
JOIN `degrees` ON `degrees`.`department_id` = `departments`.`id`
JOIN `courses` ON `courses`.`degree_id` = `degrees`.`id`
JOIN `course_teacher` ON `course_teacher`.`course_id` = `courses`.`id`
JOIN `teachers` ON `teachers`.`id` = `course_teacher`.`teacher_id`
WHERE `departments`.`name` = 'Dipartimento di Matematica';