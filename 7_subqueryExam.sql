/**
 * 1:Find the second-highest Salary from the Employee table
 */

SELECT
    *
FROM
    `Employee`
WHERE
    Salary =(
        SELECT
            Salary
        FROM
            `Employee`
        GROUP BY
            Salary
        ORDER BY
            Salary DESC
        LIMIT
            1 offset 1
    );

/**
 * 2: Find employees the oldest each department from the Employee table
 */

SELECT
    *
FROM
    `Employee`
WHERE
    (Age, Department) IN (
        SELECT
            MAX(Age),
            Department
        FROM
            `Employee`
        GROUP BY
            Department
    )
ORDER BY
    Department;