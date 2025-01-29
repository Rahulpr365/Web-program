<!DOCTYPE html>
<html>
<head>
    <title>Student Fee Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 20px; }
        .receipt { width: 50%; margin: auto; border: 1px solid black; padding: 20px; text-align: left; }
        button { margin-top: 10px; padding: 10px; font-size: 16px; }
    </style>
</head>
<body>

    <h2>Student Fee Receipt</h2>
    
    <form method="post">
        <label>Department Name:</label>
        <select name="department" required>
            <option value="">--Select Department--</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Electronics Engineering">Electronics Engineering</option>
        </select><br><br>

        <label>Student Name:</label>
        <input type="text" name="student_name" required><br><br>

        <label>Semester:</label>
        <input type="number" name="semester" required><br><br>

        <label>Semester Fee:</label>
        <input type="number" name="sem_fee" required><br><br>

        <label>Extra Fee:</label>
        <input type="number" name="extra_fee"><br><br>

        <label>Fine:</label>
        <input type="number" name="fine"><br><br>

        <button type="submit" name="generate">Generate Receipt</button>
    </form>

    <?php
    if (isset($_POST['generate'])) {
        $college_name = "Holy Grace Polytechnic College, Mala";
        $department = $_POST['department'];
        $student_name = $_POST['student_name'];
        $semester = $_POST['semester'];
        $sem_fee = $_POST['sem_fee'];
        $extra_fee = isset($_POST['extra_fee']) ? $_POST['extra_fee'] : 0;
        $fine = isset($_POST['fine']) ? $_POST['fine'] : 0;
        $total_amount = $sem_fee + $extra_fee + $fine;
        
        echo "<div class='receipt'>";
        echo "<h3>$college_name</h3>";
        echo "<p><b>Department:</b> $department</p>";
        echo "<p><b>Student Name:</b> $student_name</p>";
        echo "<p><b>Semester:</b> $semester</p>";
        echo "<p><b>Semester Fee:</b> ₹$sem_fee</p>";
        echo "<p><b>Extra Fee:</b> ₹$extra_fee</p>";
        echo "<p><b>Fine:</b> ₹$fine</p>";
        echo "<h3>Total Amount: ₹$total_amount</h3>";
        echo "<button onclick='window.print()'>Print Receipt</button>";
        echo "</div>";
    }
    ?>

</body>
</html>
