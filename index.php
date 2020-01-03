<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM events;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="index.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>



    <div class="cc-container">
        <div class="title-section">
            <h1 class="title">Current Events</h1>
        </div>
        <div class="table-data">
            <table class="table">
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


                    if ($resultCheck > 0) {
                        while ($rows = mysqli_fetch_assoc($result)) {

                            ?>
                            <tr class="event-items">
                                <td><input type="checkbox"><?php echo $rows ['Event_id']; ?></td>
                                <td><?php echo $rows ['Source']; ?></td>
                                <td><?php echo $rows ['Zone']; ?></td>
                                <td><?php echo $rows ['Peak']; ?></td>
                                <td><?php echo $rows ['Profile']; ?></td>
                                <td><?php echo $rows ['Status']; ?></td>
                                <td><?php echo $rows ['Type']; ?></td>
                                <td><?php echo $rows ['Duration']; ?></td>
                                <td><?php echo $rows ['Actions']; ?></td>
                            </tr>

                            <?php
                        }}
                ?>


            </table>
        </div>
        <div class="comments-section">
            Comments section
        </div>
    </div>

    <script>
        $(document).ready(function()
            {
            $("td:odd").css({
                "background-color":"#000",
                "color": "#fff"});
        });
    </script>


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