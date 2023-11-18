<!doctype html>
<html lang="ru">

<?php
$time=time();
if (session_id()=='') session_start();

$db=mysqli_connect("localhost","sssedsc8_comms","adminUSPTU123","sssedsc8_comms") or die();
$res=mysqli_query($db,"set names utf8");

$mess_url=mysqli_real_escape_string($db,basename($_SERVER['SCRIPT_FILENAME']));

//получаем id текущей темы УНИКАЛЬНЫЙ
$theme_id="7";

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
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                        Плагины
                     </button>
                     <div class="collapse" id="home-collapse">
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
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true">
                        Доп инструменты
                     </button>
                     <div class="collapse show" id="orders-collapse">
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
               <section id="controls">
                  <h2>Использование Controls</h2><br>
                  <p class="article">
                     Существует три элемента управления, обеспечивающие оболочки для различных аспектов Navisworks:
                  </p>
                  <p class="article">
                     ApplicationControl – синглтон, необходимый для инициализации и прекращения использования API.
                  </p>
                  <p class="article">
                     DocumentControl — компонент System.ComponentModel, в котором размещается документ Navisworks.
                  </p>
                  <p class="article">
                     ViewControl — элемент управления Windows Forms, в котором размещается представление и который 
                     используется для отображения документа внутри DocumentControl.
                  </p>
                  <p class="article">
                     Все элементы управления представлены в пространстве имен Autodesk.Navisworks.Api.Controls могут 
                     использоваться в конструкторе форм Visual Studio.
                  </p>
                  <p class="article">
                     Используя элементы управления API, мы создадим приложение, способное открывать файлы Navisworks и 
                     просматривать их вне основного приложения.
                  </p>
               </section>
               
               <section id="create">
                  <h2>Создание программы используя Controls API</h2><br>
                  <p class="article">
                     Сначала выберите шаблон приложения WPF.
                  </p>
                  <p class="imgcenter">
                     <img src="imgs/a_6/ccreate_1.jpg" style="width: 800px">
                  </p><br>
                  <p class="article">
                     Добавьте необходимые ссылки на сборки API.
                  </p>
                  <p class="imgcenter">
                     <img src="imgs/a_5/acreate_2.jpg" style="width: 800px">
                  </p><br>
                  <p class="article">
                     WPF позволяет гибко проектировать интерфейс. Они настраиваются с помощью файла XAML. 
                     Если вы откроете файл MainWindow.xaml, вы увидите некоторые строки по умолчанию, добавленные шаблоном VS. 
                     На основе строк нам потребуется импортировать сборки Navisworks и WindowsFormsIntegration. Например:
                  </p>
                  <!--CODE BOX-->
                  <div class="code-box" style="max-width: 860px">
                     <div class="cb-header">
                        <small class="cb-h-title">xaml</small>
                        <img src="imgs/copy_img.png" style="max-height: 20px;" class="cb-img">
                        <button type="button" class="btn cb-copy" id="copy-btn" aria-describedby="tooltip">
                           Копировать
                        </button>
                     </div>
                     <div>
                        <pre class="cb-zone" id="myInput"><code class="language-csharp" data-lang="csharp" id="code-text">
xmlns:NwControls="clr-namespace:Autodesk.Navisworks.Api.Controls;assembly=Autodesk.Navisworks.Controls"
                              </code></pre>
                     </div>
                  </div>
                  <!--END CODE BOX-->
                  <p class="article">
                     Затем добавьте одну кнопку, которая откроет файл Navisworks. И элемент управления представлением .NET Navisworks:
                  </p>
                  <!--CODE BOX-->
                  <div class="code-box" style="max-width: 860px">
                     <div class="cb-header">
                        <small class="cb-h-title">xaml</small>
                        <img src="imgs/copy_img.png" style="max-height: 20px;" class="cb-img">
                        <button type="button" class="btn cb-copy" id="copy-btn" aria-describedby="tooltip">
                           Копировать
                        </button>
                     </div>
                     <div>
                        <pre class="cb-zone" id="myInput"><code class="language-csharp" data-lang="csharp" id="code-text">
&#60;WindowsFormsHost&#62;

            &#60;NwControls:ViewControl x:Uid="viewControl"  

                                    x:Name="viewControl"

                                  Dock="Fill" /&#62;

&#60;/WindowsFormsHost&#62;
                              </code></pre>
                     </div>
                  </div>
                  <!--END CODE BOX-->
                  <p class="article">
                     Где x:Name — это имя, которое мы могли бы использовать в интерфейсе. Окончательный XAML показан ниже. 
                  </p>
                  <!--CODE BOX-->
                  <div class="code-box" style="max-width: 860px">
                     <div class="cb-header">
                        <small class="cb-h-title">xaml</small>
                        <img src="imgs/copy_img.png" style="max-height: 20px;" class="cb-img">
                        <button type="button" class="btn cb-copy" id="copy-btn" aria-describedby="tooltip">
                           Копировать
                        </button>
                     </div>
                     <div>
                        <pre class="cb-zone" id="myInput"><code class="language-csharp" data-lang="csharp" id="code-text">
&#60;Window x:Class="WpfApplication1.MainWindow"

        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"

        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"       

        Title="MainWindow" Height="350" Width="525"

        xmlns:NwApi="clr-namespace:Autodesk.Navisworks.Api;assembly=Autodesk.Navisworks.Api"

        xmlns:NwControls="clr-namespace:Autodesk.Navisworks.Api.Controls;assembly=Autodesk.Navisworks.Controls"

        xmlns:my="clr-namespace:System.Windows.Forms.Integration;assembly=WindowsFormsIntegration" 
        Closed="Window_Closed"&#62;


 

    &#60;DockPanel&#62;

        &#60;Button Content="Open File" Height="23" Name="button1" Width="75" Click="button1_Click" /&#62;

        &#60;WindowsFormsHost&#62;

            &#60;NwControls:ViewControl x:Uid="viewControl"  

                                    x:Name="viewControl"

                                  Dock="Fill" /&#62;

        &#60;/WindowsFormsHost&#62;

         

    &#60;/DockPanel&#62;

&#60;/Window&#62;
                              </code></pre>
                     </div>
                  </div>
                  <!--END CODE BOX-->
                  <p class="article">
                     Соберите программу и запустите ее. Родилось наше первое WPF-приложение!
                  </p>
                  <p class="imgcenter">
                     <img src="imgs/a_6/ccreate_3.jpg" style="width: 450px">
                  </p><br>
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
                        <li><a href="#controls" class="active">Controls</a></li>
                        <li><a href="#create">Создание программы</a>
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