 <?php
    include "../db/conn.php";
    include "../check_acc/check.php";
?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="css/style.css">
      <script src="https://www.google.com/jsapi"></script>
      <script type="text/javascript">
     google.load("visualization", "1", {packages:["corechart"]});
     google.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['CMS', 'Сайты на базе систем управления контентом'],
         ['WordPress',     60.7],
         ['Joomla',     7.4],
         ['Drupal',     5.1],
         ['Blogger',     2.9],
         ['Magento',     2.8],
         ['TYPO3',     1.6],
         ['PrestaShop',     1.3],
         ['Bitrix',     1.2],
         ['vBulletin',     1.0],
         ['OpenCart',     0.9],
       ]);
       var options = {
       title: 'Название диограммы',
            pieHole: 0.5,
         pieSliceTextStyle: {
           color: 'white',
         },
         legend: 'none'
       };
       var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
       chart.draw(data, options);
     }
   </script>
    </head>
    <body>
      <ul id="slide-out" class="side-nav" style="background-color: #343A40">
       <div class="user-view">
          <div class="background">
            <img src="img/parallax1.jpg" width="300" height="160">
          </div>
          <a href="#!user"><img class="circle" src="img/parallax1.jpg"></a>
          <a href="#!name"><span class="white-text name"><b>John Doe</b></span></a><br>
          <a href="#"><span class="white-text">
          </span></a>
        </div>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">stars</i>Привелегии</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">block</i>Блокировка пользователей</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">account_circle</i>Пользователи</a></li>
        <li><a href="lk.html" class="waves-effect"><i class="material-icons" role="presentation">report</i>Жалобы</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">monetization_on</i>Баланс</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">flag</i>Категории</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">extension</i>Статус</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">done</i>Подтверждение</a></li>
      </ul>
      <ul class="left-menu">
        <div class="user-view">
          <div class="background">
            <img src="img/parallax1.jpg" width="300" height="160">
          </div>
          <a href="#!user"><img class="circle" src="img/parallax1.jpg"></a>
          <a href="#!name"><span class="white-text name"><b>John Doe</b></span></a><br>
          <a href="#"><span class="white-text">
          	<a class="exit btn-floating waves-effect" href="../index.php"><i class="material-icons">exit_to_app</i></a>
          </span></a>
        </div>
        <li><a href="index.html" class="waves-effect"><i class="material-icons" role="presentation">stars</i>Привелегии</a></li>
        <li><a href="news.html" class="waves-effect"><i class="material-icons" role="presentation">block</i>Бан пользователей</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">account_circle</i>Пользователи</a></li>
        <li><a href="lk.html" class="waves-effect"><i class="material-icons" role="presentation">report</i>Жалобы</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">monetization_on</i>Баланс</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">flag</i>Категории</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">extension</i>Статус</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons" role="presentation">done</i>Подтверждение</a></li>
        <footer>
            <marquee behavior="alternate" diraction="right">Copyright&copy; by Lendry</marquee>
        </footer>
      </ul>


<div class="right">
     <div class="navbar-fixed">
     	<nav style="background-color: #343A40">
     		<div class="nav-wrapper">
     			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
     				<div class="brand-logo"><span class="white-text">LightPanel</span></div>
     		</div>
     	</nav>
     </div>
     <br>
     <div id="donut_single" style="width: 900px; height: 500px;"></div>
</div>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function() {
           $(".button-collapse").sideNav();
           $('.parallax').parallax();
           $('.carousel.carousel-slider').carousel({fullWidth: true});
        });
      </script>
    </body>
  </html>
