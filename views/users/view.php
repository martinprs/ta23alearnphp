<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>User #<?= $user->id ?></h1>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> <?= $user->id ?></p>
            <p><strong>Email:</strong> <?= $user->email ?></p>
            <div class="btn-group" role="group">
                <a class="btn btn-warning" href="/users/edit?id=<?= $user->id ?>">Edit</a>
                <a class="btn btn-danger" href="/users/delete?id=<?= $user->id ?>">Delete</a>
                <a class="btn btn-secondary" href="/users">Back</a>
            </div>
        </div>
    </div>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
