<?php

session_start();

include "./php_connect/connect.php";

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if ($IDuser === '') {
        unset($IDuser);
    }
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <title>Информация для студентов первого курса | Технологический университет программирования</title>
    <meta name="description" content="Здесь вы найдете полезную информацию для студентов первого курса, включая расписание занятий, актуальные объявления и контактные данные преподавателей.">
    <meta name="keywords" content="информация для студентов, первый курс, расписание, объявления, контакты, преподаватели">
    <link rel="shortcut icon" href="./images/svg/shortcut_icon.svg" type="image/svg">

</head>

<body>
    <header>
        <div class="container_header">
            <nav>
                <ul class="main-menu">
                    <li><a class="main-menu_item logo52px" href="./index.php"><img src="./images/svg/logo52px.svg"
                                alt="логотип">туп</a>
                        <a class="main-menu_item logo48px" href="./index.php"><img src="./images/svg/logo48px.svg"
                                alt="логотип">туп</a>
                        <a class="main-menu_item logo36px" href="./index.php"><img src="./images/svg/logo36px.svg"
                                alt="логотип">туп</a>
                    </li>
                    <li><a class="main-menu_item" href="./students.php">студентам</a></li>
                    <li><a class="main-menu_item_inactive">помощь и поддержка</a></li>
                    <li><a class="main-menu_item_inactive">документы</a></li>
                    <li><a class="main-menu_item" href="./profile.php"><img src="./images/svg/profile25px.svg"
                                alt="профиль"></a></li>
                    <li>
                        <div class="off-screen-menu">
                            <hr class="hr_osm">
                            <div class="div_ham_menu">
                                <a href="#">документы</a>
                                <a href="#">помощь и поддержка</a>
                                <a href="./students.php">студентам</a>
                            </div>
                        </div>
                        <div class="ham-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="classroom_overlay"></section>

    <section class="Schedule_of_classes">
        <div class="container_students">
            <h1 class="SOC_title">Расписание занятий/сессии</h1>
            <div class="SOC_cards">
                <div class="SOC_cards_left">
                    <p class="SOC_cards_left_item">Расписание университета</p>
                    <p class="SOC_cards_left_item">Расписание</p>
                    <p class="SOC_cards_left_item">Экзаменционная сессия</p>
                    <p class="SOC_cards_left_item">Расписание пересдач</p>
                    <p class="SOC_cards_left_item">Система оценивания</p>
                </div>
                <div class="SOC_cards_right">
                    <p class="SOC_cards_right_item">Магистратура</p>
                    <p class="SOC_cards_right_item">Расписание</p>
                    <p class="SOC_cards_right_item">Экзаменционная сессия</p>
                    <p class="SOC_cards_right_item">Расписание пересдач для магистратуры</p>
                </div>
            </div>
            <div class="SOC_buttons SOCB_top">
                <div class="SOC_buttons_div_item">
                    <p>Личный кабинет обучаящегося</p>
                </div>
                <div class="SOC_buttons_div_item SOCBDI_escpeccialy">
                    <p>Форма обратной связи для вопросов</p>
                </div>
            </div>
            <div class="SOC_buttons">
                <div class="SOC_buttons_div_item">
                    <p>Заказать справку об обучении</p>
                </div>
                <div class="SOC_buttons_div_item">
                    <p>Инструкции</p>
                </div>
            </div>
        </div>
    </section>

    <section class="answers_to_questions">
        <div class="container_students">
            <div class="div_answers_to_questions div_answers_to_questions_students">
                <h2>Ответы на самые частые вопросы студентов</h2>
                <div class="ATQ_block">
                    <p>Как узнать номер своей академической группы?</p>
                    <p>Узнать номер вашей учебной группы вы можете в специальной таблице.</p>
                </div>
                <div class="ATQ_block">
                    <p>Как заказать справки об обучении?</p>
                    <p>Заказ справки возможен через личный кабинет студента или на сайте ИОН в специальной форме.</p>
                    <p>Срок подготовки документа – 3-5 рабочих дней, уведомлений о готовности нет. Если вам необходимо,
                        чтобы справку переслали на вашу почту, сделайте соответствующую пометку при формировании заказа.
                    </p>
                </div>
                <div class="ATQ_block">
                    <p>Как проходят занятия физкультурой и что нужно сделать для получения допуска к занятиям?</p>
                    <p>Для участия в занятиях по предмету "Физическая культура" студент должен предоставить заключение
                        (справку) от врача, подтверждающую его принадлежность к медицинской группе здоровья, разрешающую
                        заниматься физической культурой. Это заключение (справку) необходимо обновлять ежегодно и
                        предоставлять на первом учебном занятии на кафедру Физического Воспитания и Здоровья.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="events_and_news">
        <div class="container_students">
            <div class="events_and_news_text">
                <p>МЕРОПРИЯТИЯ</p>
                <p>НОВОСТИ</p>
            </div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <div class="div_events_block">
                <div class="events_block">
                    <p class="events_block_text">Международный экспертный семинар с приглашением зарубежных и российских
                        ученых «Анализ влияния человеческого капитала на технологическое развитие и экономический рост
                        РФ»
                    </p>
                    <p class="events_block_text">07.11.2023</p>
                </div>
                <div class="events_block">
                    <p class="events_block_text">Международный экспертный семинар с приглашением зарубежных и российских
                        ученых «Анализ влияния человеческого капитала на технологическое развитие и экономический рост
                        РФ»
                    </p>
                    <p class="events_block_text">07.11.2023</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container_footer">
            <div class="div_footer">
                <div class="footer_left">
                    <h4>Остались вопросы? Задавайте</h4>
                    <button>задать вопрос</button>
                    <p>ТУП - Технологический Университет Программирования</p>
                </div>
                <div class="footer_right">
                    <p>+7 485 917 95 27, +7 977 428 63 33 - <span>Деканат</span></p>
                    <p>+7 977 488 63 70 - <span>Приёмная комиссия</span></p>
                    <div class="socials">
                        <a href="#"><img src="./images/svg/vk70px.svg" alt="вк" class="social_img"></a>
                        <a href="#"><img src="./images/svg/tg70px.svg" alt="телеграмм" class="social_img"></a>
                        <a href="#"><img src="./images/svg/whatsapp70px.svg" alt="вассап" class="social_img"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/ham_menu.js"></script>

</body>

</html>