<!doctype html>
<html lang="ru" style="height: 100%">

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

<body style="height: 100%">

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

      <div class="main" style="flex: 1 1 auto; display: flex; align-items: center;">
         <div class="px-4 text-center" style="">
            <h1 class="display-5 fw-bold text-body-emphasis">О нас</h1>

            <div class="col-lg-6 mx-auto">
               <p class="lead mb-4" style="text-align: justify;">
                  С годами в области 3D-моделирования был разработан широкий спектр плагинов, 
                  который может улучшить производительность, упростить рабочий процесс и расширить функциональность Navisworks.
               </p>
               <p class="lead mb-4" style="text-align: justify;">
                  Цель нашего сайта - упростить и улучшить ваш опыт работы с Navisworks, предоставляя различную информацию о плагинах и как они устроены.
               </p>
            </div>
         </div>
      </div>

      <div class="footer">
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
   </div>
   

   
   
   
   <script src="js/search.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>