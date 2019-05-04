<?php require('partials/head.php') ?>
    <h1>My tasks</h1>

    <form action="/day1/addTodo" method="POST">

        <input name="todo">
        <button type="submit">Submit</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task) :?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php require('partials/footer.php') ?>