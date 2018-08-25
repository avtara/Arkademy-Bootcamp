SELECT title, username FROM posts LEFT JOIN users ON createdBy = id_user WHERE id_posts = 1;
SELECT comment FROM comments WHERE comments.postID=1
