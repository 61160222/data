DELIMITER  $$
   
DROP PROCEDURE IF EXISTS CalculatePrice $$

CREATE PROCEDURE CalculatePrice(IN ID INT)
BEGIN   

    SELECT * From Orders WHERE BookCodeO=ID
    SELECT BookCode,BookPrice From Book WHERE BookCode=BookCodeO

    SET Total=OrderNumber;
    UPDATE Orders SET Total
    WHERE OrderNumber=ID;

END $$ 
DELIMITER  ;