<?php
$socials = [
    ['name' => 'Github', 'link' => 'https://github.com/swshadows', 'icon' => "fa-brands fa-github-square"],
    ['name' => 'Twitter', 'link' => 'https://twitter.com/swshadows', 'icon' => "fa-brands fa-twitter-square"]
];
?>


<footer>
    <span>Feito por @swshadows - Todos os direitos reservados &copy;</span>
    <ul class="social-links">
        <?php foreach ($socials as $item) : ?>
            <li><a target="_blank" href="<?= $item['link'] ?>"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</footer>
</body>

</html>