CREATE TABLE IF NOT EXISTS `POST`.`Follower` (
  `userId` INT NOT NULL,
  `pageId` INT NOT NULL,
  `pageLink` VARCHAR(45) NOT NULL,
  `followTime` DATETIME NOT NULL,
  PRIMARY KEY (`userId`),
  INDEX `pageId_idx` (`pageId` ASC) VISIBLE,
  UNIQUE INDEX `followTime_UNIQUE` (`followTime` ASC) VISIBLE,
  CONSTRAINT `userID1`
    FOREIGN KEY (`userId`)
    REFERENCES `POST`.`User table` (`userId`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `pageId1`
    FOREIGN KEY (`pageId`)
    REFERENCES `POST`.`Page table` (`page ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION) ENGINE = InnoDB;