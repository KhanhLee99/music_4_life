<?php

//show_array($list_users);
?>
<html>
    <head>
        <title>Danh sách thành viên</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <h1>Danh sách thành viên</h1>
        <table>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Email</td>
                    <td>Username</td>
                    <td>Ngày đăng kí</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($list_users)) {
                    $t = 0;
                    foreach ($list_users as $user) {
                        $t ++;
                        ?>
                        <tr>
                            <td><?php echo $t; ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php $user['created_at']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </body>
</html>
