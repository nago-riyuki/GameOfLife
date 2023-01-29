<!DOCTYPE html>
<html>
        <header>
                <a href="extra.php">Extra</a>
                <a href="index.php">Page d'accueil</a>
                <a href="login.php">Page de connexion</a>
        </header>
        <body>
                
                <p>
                        <?php

                        $menu = [
                                ['label' => 'extra', 'href' => '/extra.php',],
                                ['label' => 'login', 'href' => '/login.php',],
                                ['label' => 'home', 'href' => '/index.php',],
                        ];

                        foreach ($menu as $link) {
                                $href = $link['href'];
                                $label = $link['label'];
                                echo "a href='$href'> $label </a>\n";
                        }

                        ?>
                </p>
        </body>
</html>