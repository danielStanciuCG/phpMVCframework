<?php require APP_ROOT . "/views/inc/header.php" ?>

    <h1><?php echo $data["title"]; ?></h1>
    <ul>
        <?php

        foreach ($data["posts"] as $post) {
            echo "<li>" . $post->title;
        }

        ?>
    </ul>

<?php require APP_ROOT . "/views/inc/footer.php" ?>