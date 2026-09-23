<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>Edit User</h1>
    <form method="post" action="/users/edit?id=<?= $user->id ?>">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($user->email) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-secondary" href="/users">Cancel</a>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
