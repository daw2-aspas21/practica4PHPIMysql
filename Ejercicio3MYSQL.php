<?php
$query = 'SELECT
        m.movie_name AS nombre, mt.movietype_label AS tipo, p1.people_fullname AS nombre_actor, p2.people_fullname AS nombre_director
    FROM
        movie m, movietype mt, people p1, people p2
    WHERE
        m.movie_leadactor=p1.people_id AND m.movie_director=p2.people_id AND m.movie_type=mt.movietype_id
    ORDER BY
        movie_type';
$result = mysqli_query($db,$query) or die(mysqli_error($db)); 
?>