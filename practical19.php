<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial;
        }
        td, th {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        h2 {
            text-align: center;
            font-family: Arial;
        }
    </style>
</head>
<body>

<?php
// Student Name
$name = "Sonakshi Tiwari";

// Subjects Array: [Subject => Obtained Marks]
$subjects = [
    "Math" => 90,
    "Science" => 85,
    "English" => 88,
    "History" => 76,
    "Computer" => 95
];

$max_marks_per_subject = 100;
$total_subjects = count($subjects);
$total_max_marks = $max_marks_per_subject * $total_subjects;

$total_obtained = array_sum($subjects);
$percentage = ($total_obtained / $total_max_marks) * 100;

// Result logic
$result = "Fail";
$distinction = "";

if ($percentage >= 33) {
    $result = "Pass";
    if ($percentage >= 75) {
        $distinction = "with Distinction";
    }
}
?>

<h2>Student Name: <?php echo $name; ?></h2>

<table>
    <tr>
        <th>Subject Name</th>
        <th>Max Marks</th>
        <th>Obtained Marks</th>
    </tr>

    <?php foreach ($subjects as $subject => $marks) { ?>
        <tr>
            <td><?php echo $subject; ?></td>
            <td><?php echo $max_marks_per_subject; ?></td>
            <td><?php echo $marks; ?></td>
        </tr>
    <?php } ?>

    <tr>
        <td><strong>Total</strong></td>
        <td><strong><?php echo $total_max_marks; ?></strong></td>
        <td><strong><?php echo $total_obtained; ?></strong></td>
    </tr>

    <tr>
        <td colspan="3"><strong>Percentage: <?php echo round($percentage, 2); ?>%</strong></td>
    </tr>

    <tr>
        <td colspan="3"><strong>Result: <?php echo $result . " " . $distinction; ?></strong></td>
    </tr>
</table>

</body>
</html>
