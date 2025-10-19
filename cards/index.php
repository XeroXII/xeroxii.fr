<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card Learning App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <nav class="tab-bar">
        <button class="tab-button active" data-tab="documents">Documents</button>
        <button class="tab-button" data-tab="create-list">Create List</button>
        <button class="tab-button" data-tab="learn">Learn</button>
        <button class="tab-button" data-tab="settings">Settings</button>
    </nav>
    <section id="documents" class="tab-content active">
        <h2>Documents</h2>
        <p>View and manage your documents here.</p>
    </section>
    <section id="create-list" class="tab-content">
        <h2>Create List</h2>
        <p>Create a new list of cards.</p>
        <input type="text" id="new-card" placeholder="recto">
    </section>
    <section id="learn" class="tab-content">
        <h2>Learn</h2>
        <p>Start learning with your card lists.</p>
    </section>
    <section id="settings" class="tab-content">
        <h2>Settings</h2>
        <p>Adjust your application settings.</p>
    </section>
</body>
</html>