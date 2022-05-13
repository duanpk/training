/**
 * 1: Create table and insert data
 */

CREATE TABLE IF NOT EXISTS `new_agents` (
    `AGENT_CODE` varchar(6) NOT NULL DEFAULT '',
    `AGENT_NAME` varchar(40) DEFAULT NULL,
    `WORKING_AREA` varchar(35) DEFAULT NULL,
    `COMMISSION` decimal(10, 2) DEFAULT NULL,
    `PHONE_NO` varchar(15) DEFAULT NULL,
    `COUNTRY` varchar(25) DEFAULT NULL,
    PRIMARY KEY (`AGENT_CODE`)
);

INSERT INTO new_agents VALUES ('A007', 'Ramasundar', 'London', '0.15', '077-25814763', 'UK');
INSERT INTO new_agents VALUES ('A003', 'Alex ', 'London', '0.13', '075-12458969', 'UK');
INSERT INTO new_agents VALUES ('A008', 'Alford', 'London', '0.12', '044-25874365', 'UK');
INSERT INTO new_agents VALUES ('A011', 'Ravi Kumar', 'London', '0.15', '077-45625874', 'UK');
INSERT INTO new_agents VALUES ('A010', 'Santakumar', 'London', '0.14', '007-22388644', 'UK');
INSERT INTO new_agents VALUES ('A012', 'Lucida', 'London', '0.12', '044-52981425', 'UK');
INSERT INTO new_agents VALUES ('A005', 'Anderson', 'London', '0.13', '045-21447739', 'UK');
INSERT INTO new_agents VALUES ('A001', 'Subbarao', 'London', '0.14', '077-12346674', 'UK');
INSERT INTO new_agents VALUES ('A002', 'Mukesh', 'London', '0.11', '029-12358964', 'UK');
INSERT INTO new_agents VALUES ('A006', 'McDen', 'London', '0.15', '078-22255588', 'UK');
INSERT INTO new_agents VALUES ('A004', 'Ivan', 'London', '0.15', '008-22544166', 'UK');
INSERT INTO new_agents VALUES ('A009', 'Benjamin', 'London', '0.11', '008-22536178', 'UK');

/**
 * 2: update query to modified value for 'commission' is 'commission'-.02 for agents who have minimum payment amount of 'customer' table
 */

CREATE VIEW agent_payment AS 
	(
	    SELECT
	        customer.AGENT_CODE,
	        SUM(customer.PAYMENT_AMT) as `Total_payment`
	    FROM
	        customer
	    GROUP BY
	        customer.AGENT_CODE
	    ORDER BY
	        Total_payment
	)
; 

UPDATE
    agents
SET
    agents.COMMISSION = agents.COMMISSION -0.02
WHERE
    agents.AGENT_CODE IN(
        SELECT
            agent_payment.AGENT_CODE
        FROM
            agent_payment
        WHERE
            agent_payment.Total_payment =(
                SELECT
                    MIN(agent_payment.Total_payment)
                FROM
                    agent_payment
            )
    );

/**
 * 3: Write a query to extract the data from the 'customer' table who are in grade 3 and not belongs to the country India and there deposited opening amount is less than 7000 and their agents should have earned a commission is less than .12%.
 */

SELECT
    *
FROM
    customer
    JOIN agents
WHERE
    customer.GRADE = 3
    AND customer.CUST_COUNTRY != 'India'
    AND customer.OPENING_AMT < 7000
    AND agents.COMMISSION < 0.12;