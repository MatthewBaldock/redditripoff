INSERT INTO User VALUES(userName, email, pass);

SELECT username FROM User WHERE userId = value_1;

SELECT link_karma, comment_karma FROM User WHERE userId = value_1;

SELECT userId FROM User WHERE username = value_1;

SELECT pref_lang, pref_over18, pref_nsfw, pref_comments_sort, pref_content_label_nsfw FROM User WHERE userId = value_1;

DELETE FROM User WHERE userId = value_1;

UPDATE User SET email = value_1 WHERE userId = value_1;

UPDATE User SET password = pass_1 WHERE userId = value_1;

UPDATE User SET link_karma = karmaGain WHERE userId = value_1;

UPDATE User SET comment_karma = karmaGain WHERE userId = value_1;

UPDATE User SET pref_lang = lang, pref_over18 = ofage, pref_nsfw = lewd, pref_comments_sort = sortby, pref_content_label_nsfw = labellewd WHERE userId = id;

UPDATE User SET link_karma = lnk, comment_karma = cmnt WHERE userId = value_1;