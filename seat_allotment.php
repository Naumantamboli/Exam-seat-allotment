<?php
// Include the file containing your database connection
include 'a.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve PRN from the form submission
    $prn = $_POST['PRN'];

    // Perform a SELECT query to fetch the row corresponding to the provided PRN
    $sql = "SELECT * FROM seat_allotment WHERE prn = $prn";
    $result = mysqli_query($conn, $sql);

    // Check if any row was found
    if (mysqli_num_rows($result) > 0) {
        // Print the retrieved row
        $row = mysqli_fetch_assoc($result);
        echo "PRN: " . $row['prn'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Subject Name: " . $row['subjectname'] . "<br>";
        echo "Exam Day: " . $row['examday'] . "<br>";
        echo "Exam Date: " . $row['examdate'] . "<br>";
        echo "Room: " . $row['room'] . "<br>";
        echo "Bench No: " . $row['benchno'] . "<br>";
        echo "Bench Side: " . $row['benchside'] . "<br>";
        // Add other fields as needed
    } else {
        echo "No student found with PRN: $prn";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
