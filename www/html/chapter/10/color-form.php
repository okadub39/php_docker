<form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
    <table>
        <?php if ($errors) { ?>
            <tr>
                <td>You need to correct the following errors:</td>
                <td>
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?= $form->encode($error) ?></li>
                        <?php } ?>
                    </ul>
                </td>
         <?php } ?>
            <tr>
                <td>Favorite Color:</td>
                <td>
                    <?= $form->select($colors,['name' => 'color']) ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <?= $form->input('submit', ['name' => 'set','value' => 'Set Color']) ?>
                </td>
            </tr>
    </table>
</form>

<?php
    // 最初にセッションを開始するので、後で$_SESSIONを自由に使える
    session_start();
?>

<html>
    <head>
        <title>Background Color Example</title>
    </head>
    <body style="background-color:<?= $_SESSION['background_color'] ?>">
        <p>What color did you pick?</p>
    </body>
</html>