<?php
// include('./function.php');
$task = $_GET['task'] ?? 'error';
// echo $task;
define('DBNAME', 'C:/xampp/htdocs/group_task/public/db.txt');
$users = json_decode(file_get_contents(DBNAME), true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Task</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-[#F7F8F9]">
    <section class="flex items-center justify-center w-screen h-screen">
        <div class="w-[500px] relative flex items-center justify-center bg-white shadow-md p-10 rounded-lg">
            <?php if ($task === 'success'): ?>
                <div style="width: 100%;">
                    <h2 style="text-align: center; font-size: 25px; margin-bottom: 10px;">User List</h2>
                <table class="w-full">
                    <tr>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">UserName</th>
                        <th class="border p-2">Password</th>
                    </tr>
                    <?php 
                        foreach ($users as $user):
                    ?>
                    <tr>
                        <td class="text-center border p-2"><?php echo $user['name']; ?></td>
                        <td class="text-center border p-2"><?php echo $user['user']; ?></td>
                        <td class="text-center border p-2"><?php echo $user['password']; ?></td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </table>
                </div>
            <?php else: ?>
                <p>User/Password Not Match! Please Try agein.</p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>