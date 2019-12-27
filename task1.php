<?php
// a) Получить имена и средний балл всех студентов, которые были "лайкнуты" более чем одним студентом.
$query = 'SELECT
    s . name as name,
    s . grade as grade 
FROM `students` s
INNER JOIN Likes l ON s . id = l . like_ID
WHERE l . liked_ID > 2
GROUP BY s . id';

//б) Получить имена и средний балл студентов А, которые лайкнули студентов В, но при этом студенты В не поставили лайк ни на одной из страниц других студентов.
$query = 'SELECT 
    s.name as name,
    s.grade as grade
FROM `students` s
INNER JOIN Likes l ON s.id = l.like_ID
WHERE
    l.like_ID NOT IN(SELECT l.liked_ID FROM Likes )
GROUP BY l.liked_ID';

// в) Вернуть имена и средний балл всех студентов, которые не лайкали чужие страницы и не были лайкнуты другими пользователями.

$query = 'SELECT 
    s.name,s.grade
FROM `students` s
WHERE 
    s.id NOT IN(SELECT liked_ID FROM Likes GROUP BY liked_ID)
    AND s.id NOT IN(SELECT like_ID FROM Likes GROUP BY like_ID)';
