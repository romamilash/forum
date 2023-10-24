<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="resources/manifest/site.webmanifest"/>
    <link rel="icon" href="resources/manifest/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="resources/style.css">
    <title>Форум</title>
</head>
<body>
<header>
    <div class="container d-flex justify-content-between h-100">
        <div class="logo">
            <img src="resources/img/logo.png" alt="Форум">
            <span>Forum</span>
        </div>
        <nav class="controls">
            <a href="#" class="active">
                <i class="bi bi-activity"></i>
            </a>
            <a href="#">
                <i class="bi bi-chat"></i>
            </a>
            <a href="#">
                <i class="bi bi-collection"></i>
            </a>
        </nav>
        <div class="profile">
            <div class="profile__actions">
                <a href="#">
                    <i class="bi bi-bell"></i>
                </a>
            </div>
            <a class="profile__name" href="#">
                <span>Гость</span>
                <i class="bi bi-person-bounding-box"></i>
            </a>
        </div>
    </div>
</header>
<main>
    <div class="container d-flex justify-content-between">
        <aside>
            <div class="aside-block">
                <h2>Блог</h2>
                <ul>
                    <li>
                        <img src="https://63.img.avito.st/image/1/1.WtHR17au9jiHcnw_6d4OzzN09A.6DWHF7zOoZjSgd5Wx7v8t_AgW8QVVw5NtoFj_acz8Eg"
                             alt="Выбираем процессор для ПК в 2024">
                        <div>
                            <a href="#">Выбираем процессор для ПК в 2024</a>
                            <span>25.10.2023</span>
                        </div>
                    </li>
                    <li>
                        <img src="resources/img/thinking.png" alt="Куда поступать учиться после школы?">

                        <div>
                            <a href="#">Куда поступать учиться после школы?</a>
                            <span>20.10.2023</span>
                        </div>
                    </li>
                </ul>
                <button>
                    Больше
                </button>
            </div>
        </aside>
        <section>
            <h1>Последнее</h1>
            <form class="add-new" action="" method="post" enctype="multipart/form-data">
                <div class="add-new__text">
                    <img src="resources/img/user.svg" alt="">
                    <textarea placeholder="О чём ты сейчас думаешь?"></textarea>
                </div>
                <div class="add-new__attachment">
                    <div>
                        <label for="photo-attach">
                            <i class="bi bi-camera"></i>
                        </label>
                        <input id="photo-attach" type="file" accept="image/*">
                    </div>
                    <div>
                        <label for="video-attach">
                            <i class="bi bi-camera-video"></i>
                        </label>
                        <input id="video-attach" type="file" accept="video/*">
                    </div>
                    <div>
                        <label for="document-attach">
                            <i class="bi bi-file-earmark-text"></i>
                        </label>
                        <input id="document-attach" type="file" accept="text/plain">
                    </div>
                    <button>Отправить</button>
                </div>
            </form>
            <nav class="post-nav">
                <ul>
                    <li><a href="#" class="active">Все новости</a></li>
                    <li><a href="#">Понравилось</a></li>
                    <li>
                        <form action="">
                            <div class="form-group has-search">
                                <i class="bi bi-search form-control-feedback"></i>
                                <input type="text" class="form-control" placeholder="Найти">
                            </div>
                        </form>
                    </li>
                </ul>
            </nav>
            <article>
                <div class="article-head">
                    <img src="resources/img/roma.jpg" alt="Рома">
                    <div>
                        <div>
                            <a href="#">Рома</a><span>Опубликовал новость</span>
                        </div>
                        <span>1 час назад</span>
                    </div>
                </div>
                <div class="article-content">
                    <p>Наконец-то собрал себе новый компьютер! Теперь меня будет трудно найти, не теряйте...</p>
                    <img src="https://www.mfgfloral.com/wp-content/uploads/2021/11/cyberpower-gaming-pc.jpg" alt="Собрал себе новый компьютер">
                </div>
                <div class="article-info">
                    <div class="article-info__likes">Вика оценила | 1 комментарий</div>
                    <div class="article-info__actions">
                        <div>
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <div>
                            <i class="bi bi-chat-left"></i>
                        </div>
                    </div>
                </div>
                <div class="article-comments">
                    <div class="article-comment">
                        <img src="resources/img/vika.jpg" alt="Вика">
                        <div>
                            <div>
                                <a href="#">Вика</a><span>15 минут назад</span>
                            </div>
                            <p>Теперь можешь мне тоже собрать &#128515;</p>
                        </div>
                    </div>
                    <a href="#" class="reply">Ответить</a>
                </div>
            </article>
        </section>
        <aside>
            <div class="aside-block topics">
                <h2>Темы</h2>
                <ul class="topics-options">
                    <li class="topics-options__option active">Последние</li>
                    <li class="topics-options__option">Активные</li>
                    <li class="topics-options__option">Популярные</li>
                </ul>
                <ul class="topics-items">
                    <li class="topics-items__item">
                        <div>
                            <img src="https://images.onlinetestpad.net/64/6f/f97135b1490aa8149ab1be3bc2dc.jpg" alt="В мире компьютеров">
                        </div>
                        <div>
                            <a href="#">В мире компьютеров</a>
                            <span>2 участника</span>
                        </div>
                    </li>
                    <li class="topics-items__item">
                        <div>
                            <img src="http://dkzar.ru/wp-content/uploads/2020/08/oblako-i-student-300x290.jpg" alt="Профориентация">
                        </div>
                        <div>
                            <a href="#">Профориентация</a>
                            <span>3 участника</span>
                        </div>
                    </li>
                </ul>
                <button>
                    Все
                </button>
            </div>
        </aside>
    </div>
</main>
</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="resources/js/index.js"></script>
</html>