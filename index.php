<?php
$lang = $_POST['lang'];
if ($lang == null) {
    $lang = $_GET['lang'] ?? 'en';
}
// sanitize input
$lang = preg_replace('/[^\w\n]/', '', $lang);

?>
<html lang="<?php echo $lang; ?>">
    <head>
        <title>Xerox II</title>
        <style>
            .btn {
                background-color: blue;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
            }
            .btn:hover {
                background-color: darkblue;
            }
        </style>
        <link rel ="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Welcome to Xerox II</h1>
        <p><?php
            echo "Hello, World!";
        ?></p>
        <a href="./cards" class="btn">Click here</a>
        <a href="./test" class="btn">Don't click</a>

        <form method="POST" action="" id="langForm>
            <label for="lang">Select Language:</label>
            <select name="lang" id="lang">
                <option value="en" <?php if ($lang == 'en') echo 'selected'; ?>>English</option>
                <option value="fr" <?php if ($lang == 'fr') echo 'selected'; ?>>Francais</option>
                <option value="de" <?php if ($lang == 'de') echo 'selected'; ?>>German</option>
            </select>
            <input type="submit" value="Change Language">
        </form>
    </body>
    <script>
        console.log("Page loaded successfully.");

        function reloadPage() {
            location.reload();
        }   

        //setTimeout(reloadPage, 5000);
    </script>
</html>