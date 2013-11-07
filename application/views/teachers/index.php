<?php foreach ($teachers as $teachers_item): ?>

    <h2><?php echo $teachers_item['user_ID'] ?></h2>
    <div id="main">
        <?php echo $teachers_item['email'] ?>
    </div>
    <p><a href="teachers/<?php echo $teachers_item['user_ID'] ?>">View more</a></p>

<?php endforeach ?>