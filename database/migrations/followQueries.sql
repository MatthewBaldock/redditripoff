INSERT INTO follower VALUES(userId, pageId, pageLink);

SELECT pageId FROM follower WHERE userId = value_1;

SELECT userId FROM follower WHERE pageId = value2;

DELETE FROM follower WHERE userId = userId AND pageId = pageId;
