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
            <div class="category">Ціна</div>
            <div class="category">Бренд</div>
            <div class="category">Країна виробник</div>
            <div class="category">Служба доставки</div>
            <div class="category">Тип</div>
            <div class="category">Намордники</div>
            <div class="category">Одяг</div>
            <div class="category">Харчування</div>
            <div class="category">Повідки</div>
            <div class="category">Медикаменти</div>
            <div class="category">Іграшки</div>
        </div>
        <ul class="category_menu">
            <li><a class="item" href="">Ціна</a></li>
            <li><a class="item" href="">Бренд</a></li>
            <li><a class="item" href="">Країна виробник</a></li>
            <li><a class="item" href="">Служба доставки</a></li>
            <li><a class="item" href="">Тип</a></li>
            <li><a class="item" href="">Намордники</a></li>
            <li><a class="item" href="">Одяг</a></li>
            <li><a class="item" href="">Харчування</a></li>
            <li><a class="item" href="">Повідки</a></li>
            <li><a class="item" href="">Медикаменти</a></li>
            <li><a class="item" href="">Іграшки</a></li>
            <li><i class="fa-solid fa-xmark close_category"></i></li>
        </ul>
        <div class="col-12 col-lg-9">
            <div class="generalContainer">
                <div class="col-8 offset-2">
                    <div class="popularGoods">
                        <p class="header">ПОПУЛЯРНІ ТОВАРИ</p>
                        <section class="popularGoodsCards">
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/1.jpg"></div>
                                <p class="nameOfProduct">Намордник<br/>"Сітківка"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/2.jpg"></div>
                                <p class="nameOfProduct">Намордник<br/>"К9"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/3.jpg"></div>
                                <p class="nameOfProduct">Намордник<br/>"Малюк"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/clothes3.jpg"></div>
                                <p class="nameOfProduct">Комбінезон<br/>"Карапуз"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/meal1.jpg"></div>
                                <p class="nameOfProduct">Корм<br/>"Гав!"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/clothes2.jpg"></div>
                                <p class="nameOfProduct">Кофта<br/>"Сірий мачо"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/meal3.jpg"></div>
                                <p class="nameOfProduct">Корм<br/>“Pedigree”</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/clothes4.jpg"></div>
                                <p class="nameOfProduct">Жакет<br/>"Голубенький"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/leash4.jpg"></div>
                                <p class="nameOfProduct">Рулетка<br/>голуба</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/leash1.jpg"></div>
                                <p class="nameOfProduct">Повідець<br/>"Надія"</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/leash2.jpg"></div>
                                <p class="nameOfProduct">Повідець<br/>Динамічний</p>
                            </div>
                            <div class="product">
                                <div class="photoOfProduct"><img src="../assets/goodsPhoto/leash3.jpg"></div>
                                <p class="nameOfProduct">Повідець<br/>"WAU DOG"</p>
                            </div>
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
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/1.jpg"></div>
                                            <p class="name">Намордник<br/>"Сітківка"</p>
                                            <p class="shortDesc">Якісна нейлонова сітка, для великих собак.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">250₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/2.jpg"></div>
                                            <p class="name">Намордник<br/>“Малюк”</p>
                                            <p class="shortDesc">Нейлоновий намордник, для маленьких песиків.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">255₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/3.jpg"></div>
                                            <p class="name">Намордник<br/>“К9”</p>
                                            <p class="shortDesc">Професійний намордник для дресерувальників.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">750₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/4.jpg"></div>
                                            <p class="name">Пластиковий<br/>намордник</p>
                                            <p class="shortDesc">Чудова тимчасова заміна постійному наморднику.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">50₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/clothes1.jpg"></div>
                                            <p class="name">Кофта<br/>“Різдвяна”</p>
                                            <p class="shortDesc">Святковий наряд для Вашого улюбленця.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">1250₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/clothes2.jpg"></div>
                                            <p class="name">Кофта<br/>“Сірий мачо”</p>
                                            <p class="shortDesc">Кофта для маленьких песиків для комфортної
                                                прогулянки.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">920₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/clothes3.jpg"></div>
                                            <p class="name">Комбінезон<br/>“Карапуз”</p>
                                            <p class="shortDesc">Комбінезон для маленьких собак породи такса.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">750₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/clothes4.jpg"></div>
                                            <p class="name">Жакет<br/>“Голубенький”</p>
                                            <p class="shortDesc">Якісний жакет для невеликих собак.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">650₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/leash4.jpg"></div>
                                            <p class="name">Рулетка<br/>голуба</p>
                                            <p class="shortDesc">Повідець - рулетка. Для вільних прогулянок.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">550₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/leash1.jpg"></div>
                                            <p class="name">Повідець<br/>“Надія”</p>
                                            <p class="shortDesc">Повідець із карабіном, виконаний із міцної тканини.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">450₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/leash2.jpg"></div>
                                            <p class="name">Повідець<br/>динамічний</p>
                                            <p class="shortDesc">Надійний і довгослуживий повідець.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">350₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/leash3.jpg"></div>
                                            <p class="name">Повідець<br/>“WAU DOG”</p>
                                            <p class="shortDesc">Повідець американського виробника.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">250₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/med1.jpg"></div>
                                            <p class="name">Сімпаріка,<br/>20-40 кг</p>
                                            <p class="shortDesc">Сімпаріка, 3 таблетки.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">1225₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/med2.jpg"></div>
                                            <p class="name">Мілпразон,<br/>2 таблетки</p>
                                            <p class="shortDesc">Мілпразон, 2 таблетки, собаки понад 5 кг.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">350₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/med3.jpg"></div>
                                            <p class="name">Дехінел<br/>Плюс XL</p>
                                            <p class="shortDesc">Дехінел для застосування у ветеринарній медклініці.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">50₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/med4.jpg"></div>
                                            <p class="name">Каніверм,<br/>6 таблеток</p>
                                            <p class="shortDesc">Каніверм, видається за рецептом ветеренара.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">520₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/meal1.jpg"></div>
                                            <p class="name">Корм<br/>“Гав!”</p>
                                            <p class="shortDesc">Корм від українського виробника.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">110₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/meal2.jpg"></div>
                                            <p class="name">Корм<br/>“Club 4 paws”</p>
                                            <p class="shortDesc">Американський виробник, для великих та середніх
                                                собак.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">799₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/meal3.jpg"></div>
                                            <p class="name">Корм<br/>“Pedigree”</p>
                                            <p class="shortDesc">Корм для молодих песиків. Курятина в желе.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">87₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/meal4.jpeg"></div>
                                            <p class="name">Корм<br/>“Home Food”</p>
                                            <p class="shortDesc">Німецький виробник. Корм зі смаком яловичини.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">150₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lineOfGoods">
                            <div class="row g-1 cards">
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/6.jpg"></div>
                                            <p class="name">Намордник<br/>“Лабрадор”</p>
                                            <p class="shortDesc">Намордник по формі собаки породи лабрадор.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">230₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/leash5.jpg"></div>
                                            <p class="name">Повідець<br/>“Лапка”</p>
                                            <p class="shortDesc">Повідець - рулетка. Японський виробник.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">180₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/meal5.jpg"></div>
                                            <p class="name">Корм<br/>“Royal Canin”</p>
                                            <p class="shortDesc">Корм для маленьких песиків дорослого віку.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">600₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="photo"><img src="../assets/goodsPhoto/meal6.jpg"></div>
                                            <p class="name">Корм<br/>“Purina One”</p>
                                            <p class="shortDesc">Корм для собак масою до 10 кг.</p>
                                            <div class="row lastLine">
                                                <p class="price col-6">175₴</p>
                                                <div class="buy col-6"><i class="fa-solid fa-cart-shopping"></i></div>
                                            </div>
                                        </div>
                                    </div>
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
