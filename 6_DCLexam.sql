/**
 * Create transaction to update price to 111 of product id is 1001.
 */

START TRANSACTION;
UPDATE `Product` SET Product.Price=111 WHERE Product.ProductId=1001;
COMMIT;
