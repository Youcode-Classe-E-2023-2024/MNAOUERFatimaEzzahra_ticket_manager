<!doctype html>
<html lang="en">
<head>
    <?php include_once 'views/includes/header.php' ?>
</head>
<body class="bg-light">

<?php include_once 'views/includes/navbar.php' ?>

<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">All tickets</h6>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Priority</th>
                <th scope="col">Created By</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>

            <?php
            global $db;

            $result = $db->query("SELECT * FROM tickets;");
            $posts = $result->fetch_all(1);
            ?>

            <?php foreach ($result as $ticket) : ?>
            <tbody>
            <tr>
                <th scope="row"><?= $ticket['tickets_id']?></th>
                <td><a href="index.php?page=ticket_detail"><?= $ticket['tickets_title']?>'</a></td>
                <td><?= $ticket['tickets_desc']?></td>
                <td><?= $ticket['tickets_status']?></td>
                <td><?= $ticket['tickets_priority']?></td>
                <td><?= $ticket['tickets_created_by']?></td>
                <td><?= $ticket['tickets_created_at']?></td>

            </tr>
           
            </tbody>
            <?php endforeach; ?>

        </table>
    </div>

</main>

<?php include_once 'views/includes/footer.php' ?>
</body>
</html>
