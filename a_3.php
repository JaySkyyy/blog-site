<!doctype html>
<html lang="ru">

<?php
$time=time();
if (session_id()=='') session_start();

$db=mysqli_connect("localhost","sssedsc8_comms","adminUSPTU123","sssedsc8_comms") or die();
$res=mysqli_query($db,"set names utf8");

$mess_url=mysqli_real_escape_string($db,basename($_SERVER['SCRIPT_FILENAME']));

//получаем id текущей темы УНИКАЛЬНЫЙ
$theme_id="4";

if (isset($_POST["user_email"])){    //отправлен комментарий
   $mess_login=htmlspecialchars($_POST["mess_login"]);
   $user_email=htmlspecialchars($_POST["user_email"]);
   $user_text=htmlspecialchars($_POST["user_text"]);
   if ($mess_login!='' and $user_text!='' and $user_email!=''){
   if (is_numeric($_POST["parent_id"]) and is_numeric($_POST["f_parent"]))
      $res=mysqli_query($db,"insert into comment
      (parent_id, first_parent, date, theme_id, login, email, message)
      values ('".$_POST["parent_id"]."','".$_POST["f_parent"]."',
      '".$time."','".$theme_id."','".$mess_login."','".$user_email."','".$user_text."')");
   else $res=mysqli_query($db,"insert into comment (date, theme_id, login, email, message)
   values ('".$time."','".$theme_id."','".$mess_login."','".$user_email."','".$user_text."')");
      $_SESSION["send"]="Комментарий опубликован!";
   }
   else {
   $_SESSION["send"]="Не все поля заполнены!";
   }
}

if (isset($_SESSION["send"]) and $_SESSION["send"]!="") {    //вывод сообщения
   echo '<script type="text/javascript">alert("'.$_SESSION["send"].'");</script>';
   $_SESSION["send"]="";
}
?>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="libs/highlight/styles/atom-one-light.css">
   <title>NP Learning</title>
   <link rel="shortcut icon" href="/imgs/Logo1.png">
</head>

<body>
   <!--HEADER NAVBAR-->
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

   <div class="main">
      <div class="main-content container-xxl justify-content-center p-2">

         <aside>
            <div class="collapsible-sidebar flex-shrink-0 p-3" style="position: sticky; top: 5rem; ">
               <a href="/"
                  class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                  <span class="fs-5 fw-semibold">NP Learning</span>
               </a>
               <ul class="list-unstyled ps-0">
                  <li class="mb-1">
                     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Плагины
                     </button>
                     <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                           <li><a href="pa_start.php"
                                 class="link-body-emphasis d-inline-flex text-decoration-none rounded">Введение</a></li>
                           <li><a href="a_2.php"
                                 class="link-body-emphasis d-inline-flex text-decoration-none rounded">Начало работы</a></li>
                           <li><a href="a_3.php"
                                 class="link-body-emphasis d-inline-flex text-decoration-none rounded">Структура API .NET</a></li>
                           <li><a href="a_4.php"
                                 class="link-body-emphasis d-inline-flex text-decoration-none rounded">Написание плагинов</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class="mb-1">
                     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Автоматизация
                     </button>
                     <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                           <li><a href="a_5.php"
                                 class="link-body-emphasis d-inline-flex text-decoration-none rounded">Автоматизация</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class="mb-1">
                     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        Доп инструменты
                     </button>
                     <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                           <li><a href="a_6.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Controls</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="mb-1">
                     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#others-collapse" aria-expanded="false">
                        Другое
                     </button>
                     <div class="collapse" id="others-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                           <li><a href="a_7.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Деревья</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="border-top my-3"></li>
               </ul>
            </div>
         </aside>

         <div class="mid-content">
            <div class="mc-block">
               <section id="structure">
                  <h2>Структура API .NET</h2><br>
                  <p class="article">В данной статье подробно описаны некоторые классы, с которыми разработчики будут сталкиваться довольно часто. 
                     Все они находятся в корневом пространстве имен Autodesk.Navisworks.Api.
                  </p>
               </section>
               
               <section id="application">
                  <h2>Приложение</h2><br>
                  <p class="article">
                     Приложение имеет только статические свойства и не может быть создан напрямую. Ключевые свойства:
                  </p>
                  <p class="article">
                     Documents — экземпляры класса Document для каждого документа, открытого в приложении.
                  </p>
                  <p class="article">
                     ActiveDocument – ​​документ, активный в данный момент в приложении. Экземпляр класса Document.
                  </p>
                  <p class="article">
                     MainDocument — основной документ Navisworks. Экземпляр класса Document может быть той же ссылкой, 
                     что и ActiveDocument. Это один и тот же объект на протяжении всего времени работы приложения Navisworks.
                  </p>
                  <p class="article">
                     Gui — предоставляет информацию о графическом интерфейсе приложения, 
                     в котором размещен API. Реализует интерфейс IApplicationGui.
                  </p>
               </section>

               <section id="document">
                  <h2>Document</h2><br>
                  <p class="article">
                     Класс Document соответствует содержимому файла .NWC/.NWD/.NWF с методами, 
                     свойствами и событиями, которые применяются к документу в целом. 
                     Остальная часть документа разделена на отдельные части Autodesk.Navisworks.Api.DocumentParts. 
                     Это упрощает отслеживание структуры документа благодаря общей структуре, которой следуют все части.
                  </p>
               </section>

               <section id="documentparts">
                  <h2>DocumentParts</h2><br>
                  <p class="article">
                     Все Autodesk.Navisworks.Api.DocumentParts определены в отдельном пространстве имен 
                     Autodesk.Navisworks.Api.DocumentParts и отображаются в API только как свойства документа.
                  </p>
                  <p class="article">
                     Экземпляры класса Autodesk.Navisworks.Api.DocumentParts предназначены для непосредственного использования 
                     (например, для класса DocumentCurrentSelection) 
                     и имеют общую структуру с прямым доступом к значениям только для чтения. 
                     Пользователи могут вызывать методы копирования для произвольного редактирования, 
                     а также удобные методы для обычного редактирования. 
                     События возникают до и после внесения изменений в Autodesk.Navisworks.Api.DocumentParts.
                  </p>
               </section>

               <section id="documentmodels">
                  <h2>DocumentModels</h2><br>
                  <p class="article">
                     Класс DocumentModels представляет коллекцию экземпляров модели, 
                     содержащихся в документе. Доступ к нему осуществляется через свойство Models класса Document.
                  </p>
               </section>

               <section id="model">
                  <h2>Model</h2><br>
                  <p class="article">
                     Класс Model представляет загруженную модель в иерархии моделей. 
                     Модели имеют составные части, которые являются экземплярами ModelItem.
                  </p>
               </section>

               <section id="modelitem">
                  <h2>ModelItem</h2><br>
                  <p class="article">
                     Класс ModelItem представляет экземпляр в иерархии модели. 
                     Экземпляры ModelItem могут состоять из других экземпляров ModelItem или содержать Geometry. 
                     Экземпляры класса также могут соответствовать другой модели, 
                     которая указывается свойством HasModel и определяется свойством Model.
                  </p>
               </section>

               <section id="nativehandle">
                  <h2>NativeHandle</h2><br>
                  <p class="article">
                     NativeHandle — это общий базовый класс для классов, которые действуют как управляемый 
                     дескриптор реализации в собственном неуправляемом коде. Классы, производные от этого базового класса, 
                     доступны как клиенту API, так и Navisworks (например, если конечный пользователь закрывает документ).
                     С этой целью предоставляется свойство IsDispose, позволяющее проверить, действителен ли объект.
                  </p>
                  <p class="article">
                     Экземпляры классов, производных от NativeHandle, доступны для записи, 
                     когда они созданы разработчиком, но доступны только для чтения, когда они 
                     предоставляются частью документа как свойство. В этом классе имеется свойство IsReadOnly. 
                     Доступ к данным, хранящимся в документах, всегда возможен только для чтения; 
                     пользователи должны использовать классы Autodesk.Navisworks.Api.DocumentParts для редактирования документа.
                  </p>
               </section>

               <section id="comments" style="margin-bottom: 0px;">
                  <h2>Комментарии</h2>

                  <div>
                  <?php
                     echo '<form method="POST" action="'.$mess_url.'#last" style="max-width: 800px; margin-left: auto; margin-right: auto;">';
                     echo '<div class="mb-3">';
                     echo '<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>';
                     echo '<input name="mess_login" class="form-control" id="exampleFormControlInput1" placeholder="Пётр Петров">';
                     echo '</div>';

                     echo '<div class="mb-3">';
                     echo '<label for="exampleFormControlInput1" class="form-label">Email</label>';
                     echo '<input type="email" name="user_email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">';
                     echo '</div>';

                     echo '<div class="mb-3">';
                     echo '<label for="exampleFormControlTextarea1" class="form-label">Поле для текста</label>';
                     echo '<textarea name="user_text" class="form-control" id="exampleFormControlTextarea1" rows="3" style="position: static;"></textarea>';
                     echo '</div>';
                     echo '<div style="display: flex; justify-content: center;">';
                     echo '<button type="submit" class="btn btn-dark" style="margin-bottom: 10px;">Отправить</button>';
                     echo '</div>';
                     echo '</form>';
                  ?>

                  <?php
                     function parents($up=0, $left=0) {    //Строим иерархическое дерево комментариев
                        global $tag,$mess_url;

                        for ($i=0; $i<=count($tag[$up])-1; $i++) {
                           //Можно выделять цветом указанные логины
                           if ($tag[$up][$i][2]=='Admin') $tag[$up][$i][2]='<font color="#C00">Admin</font>';

                           echo '<div class="comm_head" id="m'.$tag[$up][$i][0].'">';
                           echo '<div style="float:left;"><b>'.$tag[$up][$i][2].'</b></div>';
                           echo '<div style="float:right; width:170px;">';
                           echo '('.date("H:i:s d.m.Y", $tag[$up][$i][3]).' г.)</div>';
                           echo '<div style="clear:both;"></div></div>';
                           echo '<div class="comm_body">';
                           echo '<div style="word-wrap:break-word;">';
                           echo str_replace("<br />","<br>",nl2br($tag[$up][$i][1])).'</div>';
                           echo '<div style="clear:both;"></div></div>';
                           echo '<br>';
                        }
                     }

                     $res=mysqli_query($db,"SELECT * FROM comment
                        WHERE theme_id='".$theme_id."' ORDER BY id");
                     $number=mysqli_num_rows($res);

                     if ($number>0) {
                        echo '<div style="border:1px solid #c0c0c1; border-radius: 10px; padding:5px; text-align:center;">';
                        echo '<b>Последние комментарии:</b><br>';
                        while ($com=mysqli_fetch_assoc($res))
                           $tag[(int)$com["parent_id"]][] = array((int)$com["id"], $com["message"],
                           $com["login"], $com["date"]);
                        echo parents().'</div><br>';
                     }
                  ?>
                  </div>
               </section>
               
            </div>

            <div class="mc-toc mt-3 mb-5 my-lg-0 mb-lg-5 px-sm-1 text-body-secondary">
               <strong class="d-none d-md-block h6 my-2 ms-3">На этой странице</strong>
               <hr class="d-none d-md-block my-2 ms-3">
               <div class="collapse d-block">
                  <nav id="TableOfContents">
                     <ul>
                        <li><a href="#structure" class="active">Структура API .NET</a></li>
                        <li><a href="#application">Приложение</a>
                        <ul>
                           <li><a href="#document">Document</a>
                           <li><a href="#documentparts">DocumentParts</a>
                           <li><a href="#documentmodels">DocumentModels</a>
                           <li><a href="#model">Model</a>
                           <li><a href="#modelitem">ModelItem</a>
                           <li><a href="#nativehandle">NativeHandle</a>
                        </ul>
                        <li><a href="#comments">Комментарии</a>
                  </nav>
               </div>
            </div>
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

<!--HIGHLIGHTER-->
   <script src="libs/highlight/highlight.js"></script>
   <script src="libs/highlight/languages/csharp.min.js"></script>
   <script>hljs.highlightAll();</script>


<!--BOOTSTRAP-->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

<!--MY SCRIPTS-->
<script type="module" src="/js/scripts.js"></script>

</html>