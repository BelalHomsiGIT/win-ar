<?PHP
 $allUsersQry = mysqli_query($conn, 'SELECT * FROM users');
 $allUsers = mysqli_fetch_all($allUsersQry, MYSQLI_ASSOC);