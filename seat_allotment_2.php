<!DOCTYPE html>
<html>
<head>
    <title>Records of Others</title>
</head>
<body>
    <table border="3px">
        <tr>
            <th>PRN</th>
            <th>Name</th>
            <th>Subject Name</th>
            <th>Exam Day</th>
            <th>Exam Date</th>
            <th>Room </th>
            <th>BenchNo</th>
            <th>Bench Side</th>
            <th>Session Code</th>
        </tr>
        <?php
        error_reporting(0);
        include('a.php');

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $prn = $_POST['prn'];

            $query = "SELECT * FROM seat_allotment WHERE prn = $prn";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                    <tr>
                        <td>".$result['prn']."</td>
                        <td>".$result['name']."</td>
                        <td>".$result['subjectname']."</td>
                        <td>".$result['examday']."</td>
                        <td>".$result['examdate']."</td>
                        <td>".$result['room']."</td>
                        <td>".$result['benchno']."</td>
                        <td>".$result['benchside']."</td>
                        <td>".$result['sessioncode']."</td> 
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found for PRN: $prn</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Please submit the form to search</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>


</body>
</html>
