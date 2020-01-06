<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM events;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $status_colors = array()
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
                    <th style="width: 10%"class="table-header">Profile</th>
                    <th class="table-header">Status</th>
                    <th class="table-header">Type</th>
                    <th class="table-header">Duration</th>
                    <th class="table-header">Actions</th>
                </tr>


                    <?php


                    if ($resultCheck > 0) {
                        while ($rows = mysqli_fetch_assoc($result)) {

                            ?>
                            <tr class="events-container">
                                <td id="events-item"><input type="checkbox"><?php echo $rows ['Event_id']; ?></td>
                                <td id="source-row"><?php echo $rows ['Source']; ?></td>
                                <td id="zone-row"><?php echo $rows ['Zone']; ?></td>
                                <td id="peak-row"><?php echo $rows ['Peak']; ?></td>
                                <td id="profile-row"><?php echo $rows ['Profile']; ?></td>
                                <td id="status-row"><?php echo $rows ['Status']; ?></td>
                                <td id="type-row"><?php echo $rows ['Type']; ?></td>
                                <td id="duration-row"><?php echo $rows ['Duration']; ?></td>
                                <td id="actions-row"><?php echo $rows ['Actions']; ?></td>
                            </tr>

                            <?php

                        }}
                ?>


            </table>
        </div>
        <div class="comments-section">
            <input class="comments" type="text" placeholder="(Optional Add a Description...)">

        </div>
        <div class="footer">
            <div id="pin-container">
                PIN Code:
                <input type="number">
                <input type="submit">
            </div>
        </div>
    </div>

   <!-- <script>
        $(document).ready(function()
            {
            $("td:odd").css({
                "background-color":"#000",
                "color": "#fff"});
        });
    </script>-->

    <script>
        $(document).ready(function()
        {
            $("td:contains('test6')").css({
                "background-color":"#ff0000"});

            $("td:contains('SYSTEM')").css({
                "background-color":"green"});
        });
    </script>

</body>
</html>