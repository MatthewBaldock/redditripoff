CREATE TABLE IF NOT EXISTS `POST`.`Page table` (
  `page ID` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(45) NOT NULL,
  `dateTime` VARCHAR(45) NOT NULL,
  `pageDescrip` VARCHAR(45) NULL,
  `subreddit` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`page ID`)) ENGINE = InnoDB;