<?php
    include("connection.php");

$query = "SELECT * FROM STUDENTS";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

//echo $total;


if ($total != 0)
{
    ?>

        <table>
            <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <th>".$result[sid]."</th>
                <th>".$result[sname]."</th>
                <th>". $result[email]."</th>
                <th>". $result[password]."</th>
            </tr>";
    }
}
else{
    echo "0 result";
}

?>
</table>

</body>
</html>
