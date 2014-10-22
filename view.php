<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1257">
        <title>Banknotes counter</title>       
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <label>Insert price:</label>
                <input type="number" value="<?=$price?>" name="price" />
                <input type="submit" value="Submit" />
            </form>
                <?php if (isset($result)) { ?>
                    <div class="result">Result: <?= $result ?> banknotes</div>
                <?php } ?>
        </div>

    </body>
</html>