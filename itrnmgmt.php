<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCIS Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
.ongoingLabel{
    color: orangered;
}
.completedLabel{
    color: green;
}
.glass-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    text-align: left;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    color: #fff;
}

.glass-table thead {
    background-color: rgba(108, 99, 255, 0.5);
    font-weight: bold;
}

.glass-table th, .glass-table td {
    padding: 12px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

/* Hover effects */
.glass-table tbody tr:hover {
    background-color: rgba(173, 168, 254, 0.2);
    transform: scale(1.02);
    transition: all 0.3s ease-in-out;
}

/* Button styling */
.glass-btn {
    background-color: rgba(173, 168, 254, 0.7);
    color: white;
    border: none;
    padding: 7px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 1rem;
    border-radius: 8px;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.glass-btn:hover {
    background-color: rgba(173, 168, 254, 1);
    transform: scale(1.05);
}

/* Responsive table adjustments */
@media (max-width: 768px) {
    .glass-table, .glass-table thead, .glass-table tbody, .glass-table th, .glass-table td, .glass-table tr {
        display: block;
    }

    .glass-table tr {
        margin-bottom: 15px;
    }

    .glass-table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .glass-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        padding-left: 15px;
        font-weight: bold;
        text-transform: uppercase;
    }
}

</style>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <img src="Assets/Images/Logo SCIS.png" alt="SCIS Logo" class="logo">
                <!-- <h2>SCIS</h2> -->
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="itrnmgmt.php">Internship Management</a></li>
                <li><a href="#">Student Reports Repository</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="process/logout.php">Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
            <h1 class="main-title">Internship Management</h1>
            <div class="container-fluid">
  <div class="row">
  <?php

require "process/dbconfig.php";

session_start();
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='glass-table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Student ID</th>";
    echo "<th>Student Name</th>";
    echo "<th>Email</th>";
    echo "<th>Programme</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['StudentID'] . "</td>";
        echo "<td>" . $row['StudentName'] . "</td>";
        echo "<td>" . $row['StudentEmail'] . "</td>";
        echo "<td>" . $row['StudentProgramme'] . "</td>";
        if ($row['Status'] == "Completed"){
            echo "<td class='completedLabel'>" . $row['Status'] . "</td>";
        }
        else {
            echo "<td class='ongoingLabel'>" . $row['Status'] . "</td>";
        }
        
        // echo "<td><a href='nboard.php?class=" . $row['StudentID'] . "' class='btn glass-btn'>Notice board</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No results found";
}
?>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>
</html>
