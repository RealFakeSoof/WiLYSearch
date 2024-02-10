<div class="footer-container">
    <a href="./">WiLYSearch</a>
    <a href="https://github.com/RealFakeSoof/WiLYSearch" target="_blank"><?php printtext("source_code_link");?></a>
    <a href="./instances.php" target="_blank"><?php printtext("instances_link");?></a>
    <a href="./settings.php"><?php printtext("settings_link");?></a>
    <a href="./api.php" target="_blank"><?php printtext("api_link");?></a>
    <a href="./donate.php"><?php printtext("donate_link");?></a>
</div>
<div class="git-container">
    <?php
        if (file_exists(".git/refs/heads/main")) {
          $hash = file_get_contents(".git/refs/heads/main");
        }

        echo "<a href='https://github.com/RealFakeSoof/WiLYSearch/commit/$hash' target='_blank'>" . printftext("", $hash) . "</a>";
    ?>
</div>
</body>
</html>
