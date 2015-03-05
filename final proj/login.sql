DELIMITER //

DROP PROCEDURE IF EXISTS login//

#CREATE DEFINER=`root`@`localhost`;

CREATE PROCEDURE `login` (IN Jhid VARCHAR(8), IN inPassword VARCHAR(15))
BEGIN
	IF EXISTS (SELECT * FROM Student WHERE Jhid = JCardNo AND BINARY inPassword = nPassword) THEN
			SELECT *
			FROM Student
			WHERE Jhid = JCardNo;
	ELSE 
		SELECT * FROM Student WHERE Jhid = JCardNo AND BINARY inPassword = nPassword;
    END IF;
END;

//

DELIMITER ;

