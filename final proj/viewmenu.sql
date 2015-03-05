DELIMITER //

DROP PROCEDURE IF EXISTS viewmenu//

#CREATE DEFINER=`root`@`localhost`;

CREATE PROCEDURE `viewmenu` (IN location VARCHAR(15), IN today VARCHAR(15))
BEGIN
	IF EXISTS (SELECT Food FROM DiningHallHours, Menus WHERE today = nDate AND location = DiningHall AND DiningHallHours.MenuID = Menus.MenuID) THEN
			SELECT Food
            FROM DiningHallHours, Menus
            WHERE today = nDate AND location = DiningHall AND DiningHallHours.MenuID = Menus.MenuID;
    END IF;
END;

//

DELIMITER ;