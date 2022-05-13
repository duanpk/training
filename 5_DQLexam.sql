/**
 * 1: Get all employees are over 25 years old
 */

SELECT * FROM `Employee` WHERE `Age` > 25;

/**
 * 2: Get all the `project title` has employee from London
 */

SELECT
    Projects.Title,
    Employee.City
FROM
    `Projects`
    JOIN `Employee` ON Projects.EmployeeId = Employee.Id
WHERE
    Employee.City = 'London';

/**
 * 3: Count the total salary given to each project with a total salary greater than 45000
 */

select
    Projects.Title,
    sum(Employee.Salary) as `Total Salary`
FROM
    `Projects`
    JOIN `Employee` on Projects.EmployeeId = Employee.Id
GROUP BY
    Projects.ProjectId
HAVING
    `Total Salary` > 45000;