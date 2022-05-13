/**
 * Write a query to extract the data from the orders table for those agents who earned the maximum commission
 */

SELECT
    orders.ORD_NUM,
    orders.ORD_AMOUNT,
    orders.ADVANCE_AMOUNT,
    orders.AGENT_CODE,
    agents.COMMISSION
FROM
    orders
    JOIN agents ON orders.AGENT_CODE = agents.AGENT_CODE
WHERE
    agents.COMMISSION =(
        SELECT
            MAX(COMMISSION)
        FROM
            agents
    );

/**
 * Write a update query to modified value for 'commission' is 'commission'+.02 for agents who have greater than or equal to two 'customer'.
 */
UPDATE
    agents
SET
    COMMISSION = COMMISSION + 0.02
WHERE
    agents.AGENT_CODE IN (
        SELECT
            customer.AGENT_CODE
        FROM
            customer
        GROUP BY
            customer.AGENT_CODE
        HAVING
            COUNT(customer.AGENT_CODE) >= 2
    )