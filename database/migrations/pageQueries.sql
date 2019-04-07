INSERT INTO Page VALUES(username, datet, pagedescrip, sub);

SELECT * FROM page;

SELECT user_name FROM page WHERE pageID = value_1;

SELECT pagedescrip FROM page WHERE pageID = value_1;

SELECT subreddit FROM page WHERE pageID = value_1;

SELECT user_name, dateTime, pagedescrip, subreddit WHERE pageID = value_1;

UPDATE page SET pagedescrip = value_1 WHERE pageID = value_2;

UPDATE page SET subreddit = value_1 WHERE pageID = value_2;

DELETE FROM page WHERE pageID = value_1;

DELETE FROM page WHERE user_name = value_1;