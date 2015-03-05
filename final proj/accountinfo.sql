DELIMITER //

DROP PROCEDURE IF EXISTS accountinfo//

#CREATE DEFINER=`root`@`localhost`;

CREATE PROCEDURE `accountinfo` (IN jhed VARCHAR(8))
BEGIN
	IF EXISTS (SELECT * FROM Student WHERE jhed = JCardNo) THEN
			SELECT JCashBalance AS 'J-Cash:', DiningDollarBalance AS 'Dining Dollars:', NumberOfMealSwipes AS 'Meal Swipes Left:'
			FROM Student
			WHERE jhed = JCardNo;
    END IF;
END;

//

DELIMITER ;