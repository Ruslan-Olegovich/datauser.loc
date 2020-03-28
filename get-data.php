 Здравствуйте,
<?php require __DIR__ . "/classes/UserModel.php"; ?>
<?php require __DIR__ . "/classes/oop.php"; ?>

<ul>
<li><?php echo htmlspecialchars($_POST["surname"]);?></li>
<li><?php echo htmlspecialchars($_POST["name"]);?></li>
<li><?php echo htmlspecialchars($_POST["patronymic"]);?></li>
<li><?php echo $_POST["age"];?></li>
<li><?php echo $_POST["phone"]; ?></li>
<li><?php echo htmlspecialchars($_POST["e-mail"]);?></li>
