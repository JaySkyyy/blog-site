<!doctype html>
<html lang="ru">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <link rel="stylesheet" href="css/styles.css">

   <title>NP Learning</title>
   <link rel="shortcut icon" href="/imgs/Logo1.png">
</head>

<body>
   <div class="wrapper" style="min-height: 100%; display: flex; flex-direction: column;">
      <header>
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
               <a class="navbar-brand" href="index.html">
                  <img src="/imgs/Logo1.png" alt="Logo" width="60" height="20" class="d-inline-block align-text-top">
                  NP Learning</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Переключатель навигации">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link" href="search.php">Статьи</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">О нас</a>
                     </li>
                  </ul>
                  <form class="d-flex" name="forma" action="search.php" method="get">
                     <input class="form-control me-2" name="formtext" type="text" placeholder="Поиск" aria-label="Поиск">
                     <button class="btn btn-outline-success" style="margin-left: 10px;" type="submit">Поиск</button>
                  </form>
               </div>
            </div>
         </nav>
      </header>

      <div class="main" style="flex: 1 1 auto; display: flex; justify-content: center">
         <div style="margin-top: 2em; width: 800px;">
            <form class="search-field">
                  <input class="form-control" type="text" placeholder="Поиск..." id="elastic" value="<?php echo $_GET['formtext']; ?>">
            </form>
               
            <ul class="search-ul">
                  <li>
                     <div class="card mb-3">
                        <div class="row g-0" onclick="location.href='pa_start.php';">
                           <div class="card-body">
                           <h5 class="card-title">Введение</h5>
                           <p class="card-text">
                              Поговорим о Navisworks, рассмотрим для чего оно нужно и пройдёмся по сборкам, что будем рассматривать.
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="card mb-3" onclick="location.href='a_2.php';">
                        <div class="row g-0">
                           <div class="card-body">
                           <h5 class="card-title">Начало работы</h5>
                           <p class="card-text">
                              В данной статье рассмотрим нюансы при создании нашего первого приложения.
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="card mb-3">
                        <div class="row g-0" onclick="location.href='a_3.php';">
                           <div class="card-body">
                           <h5 class="card-title">Структура API .NET</h5>
                           <p class="card-text">
                              В данной статье подробно описаны некоторые классы, с которыми разработчики будут сталкиваться довольно часто.
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="card mb-3">
                        <div class="row g-0" onclick="location.href='a_4.php';">
                           <div class="card-body">
                           <h5 class="card-title">Написание плагинов</h5>
                           <p class="card-text">
                              В данной статье разберёмся как создать плагин для Navisworks, который отображает пользователю сообщение «Hello World».
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="card mb-3">
                        <div class="row g-0" onclick="location.href='a_5.php';">
                           <div class="card-body">
                           <h5 class="card-title">Автоматизация</h5>
                           <p class="card-text">
                              Здесь мы создадим простое приложение, чтобы продемонстрировать основы создания приложения с использованием функций автоматизации.
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="card mb-3">
                        <div class="row g-0" onclick="location.href='a_6.php';">
                           <div class="card-body">
                           <h5 class="card-title">Использование Controls</h5>
                           <p class="card-text">
                              Используя элементы управления API создадим приложение, способное открывать файлы Navisworks и просматривать их вне основного приложения.
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="card mb-3">
                        <div class="row g-0" onclick="location.href='a_7.php';">
                           <div class="card-body">
                           <h5 class="card-title">Древовидные структуры</h5>
                           <p class="card-text">
                              Рассмотрим части API, имеющие структуры родительского/дочернего или иерархического характера.
                           </p>
                           </div>
                        </div>
                     </div>
                  </li>
            </ul>
         </div>
      </div>

      <hr class="d-none d-md-block my-2">
      <div class="footer-text">
         <div>
            NP Learning
         </div>
         <div>
            Россия, Салават
         </div>
         <div>
            Телефон: 7-917-999-99-99
         </div>
         <div>
            Email: info@example.com
         </div>
      </div>
   </div>
   
   <script src="js/search.js"></script>
   <script>elastic.oninput();</script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></scrip>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>