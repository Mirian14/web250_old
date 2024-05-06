<header>
    <div id="logo"></div>
    <div class="nav">
        <nav class="navheader">
            <?php
            $link = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
            echo ($link == 'index' ? '<a href="?p=home.php" class="link active" >Home</a>' : '<a href="?p=home.php" class="link">Home</a>');
            echo ($link == 'introduction' ? '<a href="?p=introduction.php" class="link active" >Introduction</a>' : '<a href="?p=introduction.php" class="link">Introduction</a>');
            echo ($link == 'contract' ? '<a href="?p=contract.php" class="link active" >Contract</a>' : '<a href="?p=contract.php" class="link">Contract</a>');
            echo ($link == 'brand' ? '<a href="?p=brand.php" class="link active" >Brand</a>' : '<a href="?p=brand.php" class="link">Brand</a>');
            echo ($link == 'Fizz' ? '<a href="?p=fizz.php" class="link active" >Fizz</a>' : '<a href="?p=fizz.php" class="link">Fizz</a>');
            echo ($link == 'Form' ? '<a href="?p=form.php" class="link active" >Form</a>' : '<a href="?p=form.php" class="link">Form</a>');
            echo ($link == 'Login' ? '<a href="?p=login.php" class="link active" >Login</a>' : '<a href="?p=login.php" class="link">Login</a>');
            ?>
        </nav>
        <div class="title-main">
            <h1>Mirian Carvalho's Makeup Carmelia | WEB 250</h1>
        </div>
    </div>
</header>
