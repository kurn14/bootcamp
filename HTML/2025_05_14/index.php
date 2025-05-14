<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan PHP HTML</title>
    </head>

    <body>
        <div class="container">
            <header>
                <?php

                $menu = [
                    'Beranda' => '#',
                    'About' => '#',
                    'Services' => '#',
                    'Contact' => '#'
                ];

                ?>
                <h1>My Website</h1>
                <nav>
                    <ul>
                        <?php foreach ($menu as $item => $link) : ?>
                            <li><a href="<?= $link ?>"><?= $item ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </header>

            <main>
                <?php
                $sapaan = [1 => 'bapak', 2 =>'ibu', 3=>'kakak', 4=>'adik'];

                foreach ($sapaan as $key => $value) {
                    echo '<h'.$key.'>Selamat datang, '.$value.'</h'.$key.'>';
                }
                ?>

                <?php
                $data = [
                    'nama' => 'John Doe',
                    'usia' => 30,
                    'email' => 'john@gmail.com'
                ];
                ?>

                <h2>Data Pengguna</h2>
                <ul>
                    <?php foreach ($data as $key => $value) : ?>
                        <li><?= ucfirst($key) ?>: <?= $value ?></li>
                    <?php endforeach ?>
                </ul>
                
            

            </main>

            <footer>
                <p>&copy; 2025 My Website</p>
            </footer>
        </div>
    </body>

</html>