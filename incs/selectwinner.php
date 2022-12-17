<?PHP
 $winnerQry = mysqli_query($conn, 'SELECT * FROM users ORDER BY RAND() LIMIT 1');
 $winnerUser = mysqli_fetch_assoc($winnerQry);