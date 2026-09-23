<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>Users</h1>
    <section class="mb-4">
        <h2>Create user</h2>
        <form method="post" action="/users">
            <div class="row g-2">
                <div class="col-auto">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-auto">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </section>
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-info" href="/users/view?id=<?=$user->id?>">View</a>
                            <a class="btn btn-warning" href="/users/edit?id=<?=$user->id?>">Edit</a>
                            <a class="btn btn-danger" href="/users/delete?id=<?=$user->id?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
