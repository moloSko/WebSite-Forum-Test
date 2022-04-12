<?php

require "../db.php";

require "../script/functions.php";

?>

<?php

if(isset($_SESSION['logged_user'])){
    ?>
    <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/faviconka.ico" type="img/x-icon">
    <title>Форум - Pig Role Play</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../script/functions.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <a href="../logout/logout">Выйти</a>
    <div class="container">
      <header>

      </header>
        <div class="row">
            <main class="main">
              <!---/////////////////////////////////////////////---------->

              <div id="overlay">
                <div class="popup">
                  <button class="close" title="Закрыть окно" onclick="swa2()"></button>
                  <p class="zag">Создать раздел</p>
                  <form id="form_cdrl">
                    <div class="relev_poz add_razd">
                        <label class="neobh_razd" data-tooltip="Обязательно для заполнения">*</label>
                        <label for="use_reazd_name">Введите название раздела:</label>
                        <input class="form_decorate" type="text" id="nrazd_name" name="razdel_name" />
                    </div>
                    <div class="relev_poz">
                        <label class="neobh_razd" data-tooltip="Обязательно для заполнения">*</label>
                        <label for="use_reazd_name">Загрузите изображение в формате png размером не более 33px на 33px:</label>
                        <input class="img_form_decor" type="file" name="file" multiple accept="image/gif, image/png"/>
                    </div>
                    <div class="relev_poz">
                        <label class="neobh_razd" data-tooltip="Обязательно для заполнения">*</label>
                        <label for="use_reazd_name">Введите название подраздела:</label>
                        <input class="form_decorate" type="text" id="podrazd_name" name="podrazdel_name" />
                    </div>
                    <div id="parentId"></div>
                    <div class="pozic_but_podraz">
                      <button class="but_podraz_add" name="" onclick="creadQuestion()">Создать</button>
                      <a href="#form_cdrl" class="but_podraz_add" onclick="addQuestion()">Добавить подраздел</a>
                    </div>
                  </form>
                </div>
              </div>

              <!---/////////////////////////////////////////////---------->
                <div class="sidebar_razdel_administr">
                    <h1 class="sidebar_admipssection_one side_ob_h">ОБЪЯВЛЕНИЯ</h1>
                    <div class="razdeles">
                        <div class="side_zaloba">
                            <a href="#" class="side_ob_zg">*Заголовок обьявления*</a>
                        </div>
                    </div>
                </div>
                <div id="cread_form_razd" class="poz_cread_razd">
                  <div class="creat_razd">
                    <button class="but_raz_add" onclick="swa()" type="button">Создать раздел</button>
                </div>
              </div>

                <div class="razdel_administr">
                    <a href="#" class="admipssection">Администрация</a>
                    <div class="razdeles">
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\jaloba.png" alt="Жалобы"></a>
                            </div>
                            <a href="#" id="zb" class="pod_admipssection">Жалобы на игроков</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\razban.png" alt="Разбан"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Заявки на разбан</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\name.png" alt="Смена"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Смена документов</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\kompens.png" alt="Компенсация"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Компенсация</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\mododel.png" alt="Мододел"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Раздел мододела</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\vopadm.png" alt="Вопросы"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Вопросы к Администрации</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\donat.png" alt="Донат"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Вопросы по донату</a>
                        </div>
                    </div>
                </div>
                <!--
                <div class="razdel_administr">
                    <a href="#" class="admipssection">Серверная часть</a>
                    <div class="razdeles">
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\debug.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Баги и Ошибки</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\upnews.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Прудложения по улучшению</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\newsserv.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Новости сервера</a>
                        </div>
                    </div>
                </div>

                <div class="razdel_administr">
                    <a href="#" class="admipssection_one">Государственные структуры</a>
                    <div class="razdeles">
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\pravit.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Правительство</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\minust.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Минестерство Юстиций</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\specagent.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">F.B.I</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\pd.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Полицейский депортамент</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\medheal.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Министерство Чрезвучайных Ситуаций</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\vopadm.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Taxi</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\donat.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">7 News</a>
                        </div>

                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\donat.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Центер занятости населения</a>
                        </div>
                    </div>
                </div>

                <div class="razdel_administr">
                    <a href="#" class="admipssection_one">Гражданские Группировки</a>
                    <div class="razdeles">
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\ping.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">PIG RP</a>
                        </div>
                    </div>
                </div>

                <div class="razdel_administr">
                    <a href="#" class="admipssection_one">Повстанческие Группировки</a>
                    <div class="razdeles">
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\ping.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">PIG RP</a>
                        </div>
                    </div>
                </div>

                <div class="razdel_administr">
                    <a href="#" class="admipssection_one">Жизнь на острове</a>
                    <div class="razdeles">
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\ivent.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Ивенты</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\flud.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Флудильня</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\auk.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Аукционы</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\kam.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">Видео YouTube</a>
                        </div>
                        <div class="zaloba">
                            <div class="razd_img">
                                <a href="#"><img class="razdel_img" src="..\img\rpproj.png"></a>
                            </div>
                            <a href="#" class="pod_admipssection">РП Проекты жителей острова</a>
                        </div>
                    </div>
                </div>

                <div class="chat_administr">
                    <div>
                        <p class="admipssection_chat">Общение: </p>
                    </div>
                    <div class="chat_block_text">

                    </div>
                    <div class="chat_inp">
                        <form id="chatInputArea" class="chat_input">
                            <input class="chatInput bimcb_chatInput" id="chatFUM" placeholder="Введите сообщение здесь..." autocomplete="off">
                        </form>
                    </div>
                </div>
-->
            </main>

            <aside id="sidebar_vse" class="sidebar">

                <div class="sidebar_obyav">
                    <h1 class="side_ob_h">ОБЪЯВЛЕНИЯ</h1>
                    <a href="#" class="side_ob_zg">*Заголовок обьявления*</a>
                </div>

                <div class="sidebar_tem">
                    <p class="side_tem">ТЕМЫ</p>
                    <div>
                        <div class="polzovatel">
                            <a href="#"><img class="side_tem_img" src="..\img\fotoprof.png" alt="обсуждаемая тема"></a>
                            <div class="component_polzov">
                                <a href="#" class="name_razdel"> Chapter and name<!--<?php echo $_SESSION['logged_user']->login; ?>--></a>
                                <p class="sozd_news">Cоздано x минут назад</p>
                            </div>
                        </div>

                        <div class="polzovatel">
                            <a href="#"><img class="side_tem_img" src="..\img\fotoprof.png" alt="обсуждаемая тема"></a>
                            <div class="component_polzov">
                                <a href="#" class="name_razdel"> Chapter and name</a>
                                <p class="sozd_news">Cоздано x минут назад</p>
                            </div>
                        </div>

                        <div class="polzovatel">
                            <a href="#"><img class="side_tem_img" src="..\img\fotoprof.png" alt="обсуждаемая тема"></a>
                            <div class="component_polzov">
                                <a href="#" class="name_razdel"> Chapter and name</a>
                                <p class="sozd_news">Cоздано x минут назад</p>
                            </div>
                        </div>

                        <div class="polzovatel">
                            <a href="#"><img class="side_tem_img" src="..\img\fotoprof.png" alt="обсуждаемая тема"></a>
                            <div class="component_polzov">
                                <a href="#" class="name_razdel"> Chapter and name</a>
                                <p class="sozd_news">Cоздано x минут назад</p>
                            </div>
                        </div>

                        <div class="polzovatel">
                            <a href="#"><img class="side_tem_img" src="..\img\fotoprof.png" alt="обсуждаемая тема"></a>
                            <div class="component_polzov">
                                <a href="#" class="name_razdel"> Chapter and name</a>
                                <p class="sozd_news">Cоздано x минут назад</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <footer class="raw">
            <button onclick="location ='../razdel/polsog'" class="footer_raw" >Пользовательское соглашение</button>
        </footer>
    </div>
</body>

<script>
var b = document.getElementById('overlay');
function swa(){
	b.style.visibility = 'visible';
	b.style.opacity = '1';
	b.style.transition = 'all 0.7s ease-out 0s';
}
function swa2(){
	b.style.visibility = 'hidden';
	b.style.opacity = '0';
  window.location.reload();
}
</script>

</html>
    <?php
}
else{
    header("Location:".$site_url."/auth/auth");
}
?>
