<?php
include "../db/getGoods.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-grid.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../globalStyle.css">
    <script src="https://kit.fontawesome.com/62aeaedac6.js" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.0.slim.js"></script>
    <script src="./script.js"></script>
    <script src="../globalScript.js"></script>
    <title>Woof</title>
</head>
<body>

<div class="navbar">
    <div class="row nav">
        <div class="offset-1 col-6 col-sm-8 offset-md-1 col-md-2">
            <a href="../"><img src="../assets/logo.png" alt="logo" class="logo"></a>
        </div>
        <div class="col-md-5 offset-md-3 col-lg-4 offset-lg-3 row menu">
            <div class="col-3 aDiv"><a href="../">Головна</a></div>
            <div class="col-3 aDiv"><a href="../aboutPage">Про нас</a></div>
            <div class="col-3 aDiv"><a href="" class="underline">Наші товари</a></div>
            <div class="col-3 aDiv"><a href="../contactPage">Контакти</a></div>
        </div>
        <div class="col-4 col-sm-3 col-md-1 col-lg-1 offset-lg-1 iconsHeader">
            <div class="row">
                <div class="col-4 col-md-6 phoneI">
                    <i class="fa-solid fa-mobile"></i>
                </div>
                <div class="col-4 col-md-6 cartI">
                    <i class="fa-solid fa-cart-shopping cart"></i>
                </div>
                <div class="col-4 barI">
                    <i class="fa-solid fa-bars"></i>
                    <ul class="hamburger_menu">
                        <li><a class="item" href="../">Головна</a></li>
                        <li><a class="item" href="../aboutPage">Про нас</a></li>
                        <li><a class="item" href="">Наші товари</a></li>
                        <li><a class="item" href="../contactPage">Контакти</a></li>
                        <li><i class="fa-solid fa-xmark close_menu"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container search">
    <div class="row">
        <div class="offset-1 col-10 offset-lg-0 col-lg-3 ">
            <form>
                <input type="text" class="searcher">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row g-0">
        <div class="col-3 categories">
            <?php
            foreach ($_COOKIE["categories"] as $category) {
                echo "<div class='category'>" . $category["name"] . "</div>";
            }
            ?>
        </div>
        <ul class="category_menu">
            <?php
            foreach ($_COOKIE["categories"] as $category) {
                echo "<li><a class='item' href=''>" . $category["name"] . "</a></li>";
            }
            ?>
            <li><i class="fa-solid fa-xmark close_category"></i></li>
        </ul>
        <div class="col-12 col-lg-9">
            <div class="generalContainer">
                <div class="col-8 offset-2">
                    <div class="popularGoods">
                        <p class="header">ПОПУЛЯРНІ ТОВАРИ</p>
                        <section class="popularGoodsCards">
                            <?php
                            foreach ($_COOKIE["goods"] as $product) {
                                if ($product["popular"]) {
                                    echo '<div class="product">
                                        <div class="photoOfProduct"><img src="../assets/goodsPhoto/' . $product["mainPhoto"] . '"></div>
                                            <p class="nameOfProduct">' . $product["name"] . '<br/>' . $_COOKIE["brands"][$product["brand"]]["name"] . '</p>
                                        </div>';
                                }
                            }
                            ?>
                        </section>
                    </div>
                </div>
                <div class="col-10 offset-1">
                    <div class="col-12 col-lg-6 offset-lg-6 sortBlock">
                        <div class="row">
                            <div class="col-8 col-sm-6 col-lg-12">
                                <div class="sorting">
                                    <select size="1">
                                        <option>Сортувати</option>
                                        <option>Ціна: за зростанням</option>
                                        <option>Ціна: за спаданням</option>
                                        <option>За відгуками клієнтів</option>
                                        <option>Новинки</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="filter">
                                    <i class="fa-solid fa-filter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="goods">
                        <?php
                        $counter = 0;
                        echo '
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                        ';
                        foreach ($_COOKIE["goods"] as $product) {
                            if ($counter % 4 == 0 && $counter) {
                                echo '</div></div>
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/' . $product["mainPhoto"] . '"></div>
                                            <p class="name">' . $product["name"] . '<br/>' . $_COOKIE["brands"][$product["brand"]]["name"] . '</p>
                                            <p class="shortDesc">' . $product["shortDescription"] . '</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">' . $product["price"] . '₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
';
                            } else {
                                echo '
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/' . $product["mainPhoto"] . '"></div>
                                            <p class="name">' . $product["name"] . '<br/>' . $_COOKIE["brands"][$product["brand"]]["name"] . '</p>
                                            <p class="shortDesc">' . $product["shortDescription"] . '</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">' . $product["price"] . '₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                            $counter++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination">
            <div class="col-6 offset-3">
                <div class="row">
                    <div class="col-6 start">
                        <div class="circle">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                    </div>
                    <div class="col-6 end">
                        <div class="circle">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="footer">
    <div class="container-md">
        <div class="row">
            <div class="offset-1 col-10 offset-sm-1 col-sm-10 offset-md-0">
                <p class="headerOfFooter">Почнемо ваші покупки!</p>
                <p class="schedule">Кожен день з 10 ранку до 6 вечора</p>
                <p class="detail">Контактні дані:<br>
                    Телефон: +1 234 567 89 01<br>
                    E-mail: dogshop@dog.com<br>
                    Янгеля 1<br>
                    Київ, Україна</p>
            </div>
            <div class="col-12 col-sm-1 offset-sm-1">
                <div class="footerPaw">
                    <div class="row ">
                        <div class="socials">
                            <div class="col-3"><i class="fa-brands fa-instagram child socialNet inst"></i></div>
                            <div class="col-3"><i class="fa-brands fa-facebook child socialNet face"></i></div>
                            <div class="col-3"><i class="fa-brands fa-telegram child socialNet tel"></i></div>
                            <div class="col-3"><i class="fa-brands fa-whatsapp child socialNet whats"></i></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mainPaw">
                            <i class="fa-solid fa-paw paw"></i>
                        </div>
                    </div>
                    <p class="madeBy child">Розроблено<br>Ткаченко Романом</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
