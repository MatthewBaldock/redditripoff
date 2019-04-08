INSERT INTO Post VALUES(commentText, author, isEdited, isDeleted, numTimesGilded, postKarma, link, postTitle, pageId);

UPDATE Post SET commentText = value_1, isEdited = value_1, isDeleted = value_1, numTimesGilded = value_1,
 postKarma = value_1, link = value_1, postTitle = value_1, pageId = value_1 WHERE postId = postID;

DELETE FROM Post WHERE commentText = value_1;

DELETE FROM Post Where postId = postID;

SELECT * FROM Post;

SELECT * FROM Post ORDER BY dateSubmitted;

SELECT * FROM Post ORDER BY postKarma;