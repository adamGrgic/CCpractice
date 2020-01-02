<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="index.css" rel="stylesheet"/>
</head>
<body>



    <div class="cc-container">
        <div class="title-section">
            <h1 class="title">Current Events</h1>
        </div>
        <div class="table-data">
            <table style="width: 100%">
                <tr>
                    <th class="table-header">Event ID</th>
                    <th class="table-header">Sources</th>
                    <th class="table-header">Zone</th>
                    <th class="table-header">Peak</th>
                    <th class="table-header">Profile</th>
                    <th class="table-header">Status</th>
                    <th class="table-header">Type</th>
                    <th class="table-header">Duration</th>
                    <th class="table-header">Actions</th>
                </tr>
                <?php
                $sql = "SELECT * FROM events;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['event_id'] . "<td></td>";

                    }
                }
                ?>
                <tr>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>


            </table>
        </div>
        <div class="comments-section">
            Comments section
        </div>
    </div>


<?php
//$sql = "SELECT * FROM users;";
//$result = mysqli_query($conn, $sql);
//$resultCheck = mysqli_num_rows($result);
//
//if ($resultCheck > 0) {
//    while ($row = mysqli_fetch_assoc($result)) {
//        echo $row['user_first'] . "<td></td>";
//
//    }
//}
//?>


</body>
</html>