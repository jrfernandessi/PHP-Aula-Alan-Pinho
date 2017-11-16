<?php
$conn = pg_connect("host=localhost port=5432 dbname=login user=postgres password=junior");
$sql = "select * from usuario";
$result = pg_query($conn, $sql);
if($result){
    echo "<table border=1>";
    echo "<tr>";
            echo "<td><strong>email</strong></td>";
            echo "<td><strong>senha</strong></td>";
        echo "</tr>";
    while($row = pg_fetch_assoc($result)){
        echo "<tr>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['senha']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
