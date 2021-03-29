DELIMITER  $$

DROP PROCEDURE IF EXISTS INDelivered $$


CREATE PROCEDURE INDelivered(IN ID INT(4))
BEGIN
    DECLARE Del  VARCHAR(25);
    DECLARE Del1 VARCHAR(25);

    SELECT Delivered INTO Del 
    FROM OrderDetail WHERE OrderNumber=ID;

    IF (Del = "Y") THEN
        SET Del1 = "Delivered";
        UPDATE OrderDetail SET Delivered=Del1 WHERE OrderNumber=ID;
    END IF;

    IF (Del = "N") THEN
        SET Del1 = "Not-Delivered";
        UPDATE OrderDetail SET Delivered=Del1 WHERE OrderNumber=ID;
    END IF;


END $$

DELIMITER  ;