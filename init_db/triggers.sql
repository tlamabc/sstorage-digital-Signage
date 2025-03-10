DELIMITER $$

-- Trigger cho GLOBAL_THEME_NAME: ép giá trị luôn là 'default'
CREATE TRIGGER enforce_global_theme_default_before_insert
BEFORE INSERT ON setting
FOR EACH ROW
BEGIN
  IF NEW.setting = 'GLOBAL_THEME_NAME' THEN
    SET NEW.value = 'default';
  END IF;
END$$

DELIMITER $$

CREATE TRIGGER enforce_global_theme_default_before_update
BEFORE UPDATE ON setting
FOR EACH ROW
BEGIN
  IF NEW.setting = 'GLOBAL_THEME_NAME' THEN
    SET NEW.value = 'default';
  END IF;
END$$

DELIMITER $$

-- Trigger cho NAVIGATION_MENU_POSITION: ép giá trị luôn là 'horizontal'
CREATE TRIGGER enforce_navbar_horizontal_before_insert
BEFORE INSERT ON setting
FOR EACH ROW
BEGIN
  IF NEW.setting = 'NAVIGATION_MENU_POSITION' THEN
    SET NEW.value = 'horizontal';
  END IF;
END$$

DELIMITER $$

CREATE TRIGGER enforce_navbar_horizontal_before_update
BEFORE UPDATE ON setting
FOR EACH ROW
BEGIN
  IF NEW.setting = 'NAVIGATION_MENU_POSITION' THEN
    SET NEW.value = 'horizontal';
  END IF;
END$$

DELIMITER ;
