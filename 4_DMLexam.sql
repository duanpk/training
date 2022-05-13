/**
 * 1: Write INSERT statement for data of agents table
 */

INSERT INTO
    `AGENTS`
VALUES
    (
        'A001',
        'Subbarao',
        'Bangalore',
        '0.14',
        '077-12346674',
        'UK'
    ),
    (
        'A002',
        'Mukesh',
        'Mumbai',
        '0.11',
        '077-12358964',
        'UK'
    ),
    (
        'A003',
        'Alex',
        'London',
        '0.13',
        '075-12458969',
        'Canada'
    ),
    (
        'A004',
        'Ivan',
        'Torento',
        '0.15',
        '008-22544166',
        'India'
    ),
    (
        'A005',
        'Anderson',
        'Brisban',
        '0.13',
        '045-21447739',
        'UK'
    ),
    (
        'A006',
        'McDen',
        'London',
        '0.15',
        '078-22255588',
        'India'
    ),
    (
        'A007',
        'Ramasundar',
        'Bangalore',
        '0.15',
        '077-25814763',
        'Canada'
    ),
    (
        'A008',
        'Alford',
        'New York',
        '0.12',
        '044-25874365',
        'India'
    ),
    (
        'A009',
        'Beniamin',
        'Hampshair',
        '0.11',
        '008-22536178',
        'Canada'
    ),
    (
        'A010',
        'Santakumar',
        'Chennai',
        '0.14',
        '007-222388644',
        'USA'
    );

/**
 * 2: Write UPDATE statement to update COMMISSION is 0.2 where agents is from UK
 */

UPDATE `AGENTS` SET COMMISSION=0.2 WHERE COUNTRY ='UK';

/**
 * 3: Write DELETE statement to delete agents from Canada and COMMISSION is less than 0.14
 */

DELETE FROM `AGENTS` WHERE COUNTRY ='Canada' AND COMMISSION<0.14;