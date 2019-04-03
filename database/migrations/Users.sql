CREATE TABLE IF NOT EXISTS `POST`.`User` (
  `userId` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  'password' VARCHAR(200) NOT NULL,
  `email_verified` BINARY(0) NOT NULL DEFAULT 0,
  `link_karma` BIGINT NOT NULL DEFAULT 0,
  `comment_karma` BIGINT NOT NULL DEFAULT 0,
  `pref_lang` VARCHAR(45) NOT NULL DEFAULT 'English',
  `pref_over18` BINARY(0) NOT NULL DEFAULT 0,
  `pref_nsfw` BINARY(0) NOT NULL DEFAULT 0,
  `pref_comments_sort` VARCHAR(45) NOT NULL DEFAULT 'Hot',
  `pref_content_label_nsfw` BINARY(0) NOT NULL DEFAULT 1,
  PRIMARY KEY (`userId`))
ENGINE = InnoDB