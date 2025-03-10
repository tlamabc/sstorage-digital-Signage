-- Trigger cho NAVIGATION_MENU_POSITION (trước khi INSERT)
DELIMITER $$
CREATE TRIGGER enforce_navbar_horizontal_before_insert 
BEFORE INSERT ON cms
FOR EACH ROW
BEGIN
  IF NEW.cms = 'NAVIGATION_MENU_POSITION' THEN
    SET NEW.value = 'horizontal';
  END IF;
END$$
DELIMITER ;

-- Trigger cho NAVIGATION_MENU_POSITION (trước khi UPDATE)
DELIMITER $$
CREATE TRIGGER enforce_navbar_horizontal_before_update 
BEFORE UPDATE ON cms
FOR EACH ROW
BEGIN
  IF NEW.cms = 'NAVIGATION_MENU_POSITION' THEN
    SET NEW.value = 'horizontal';
  END IF;
END$$
DELIMITER ;

-- Trigger cho GLOBAL_THEME_NAME (trước khi INSERT)
DELIMITER $$
CREATE TRIGGER enforce_global_theme_default_before_insert 
BEFORE INSERT ON cms
FOR EACH ROW
BEGIN
  IF NEW.cms = 'GLOBAL_THEME_NAME' THEN
    SET NEW.value = 'default';
  END IF;
END$$
DELIMITER ;

-- Trigger cho GLOBAL_THEME_NAME (trước khi UPDATE)
DELIMITER $$
CREATE TRIGGER enforce_global_theme_default_before_update 
BEFORE UPDATE ON cms
FOR EACH ROW
BEGIN
  IF NEW.cms = 'GLOBAL_THEME_NAME' THEN
    SET NEW.value = 'default';
  END IF;
END$$
DELIMITER ;
