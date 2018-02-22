?php
    include "../db/conn.php";
    include "../check_acc/check.php";
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/noty.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/metroui.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>LightPanel</title>
  </head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="../img/LightPanel.png" width="30" height="30" alt=""></a>
          <b class="text-white">LightPanel</b>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Статьи</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Маркет</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Гарант</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Прочее</a>
              </li>
            </ul><?php if($_COOKIE[hash] == "" && $_COOKIE[id] == ""){ echo '
             <form class="form-inline">
                <button class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal" type="button">Войти <i class="fas fa-sign-in-alt"></i></button>&nbsp;
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#Modal1" type="button">Регистрация <i class="fa fa-user-circle" aria-hidden="true"></i></button>
              </form>';}else{
    $name = get_name($_COOKIE[id], $db);
    echo "<form class='form-inline'>
               <div class='dropdown show'>
                  <button class='btn btn-outline-warning dropdown-toggle' id='dropdowMSG' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='far fa-envelope'></i></button>&nbsp;
                  <div class='dropdown-menu' aria-labelledby='dropdownUW'>
                    <h6 class='dropdown-header'>Сообщения:</h6>
                    <div class='dropdown-item align-items-left' href='#'>
                       <div class='list-group'>
                          <div href='#' class='list-group-item bg-dark list-group-item-action flex-column align-items-start'>
                            <div class='d-flex w-100 justify-content-between'>
                             <img src='../img/avatar.png' width='50' height='50' class='img-circle pull-left' alt=''>
                              <h6 class='mb-1 text-white'><a href='#'>UserName</a>&nbsp;прислал(а) вам сообщения</h6>
                            </div>
                            <p class='d-inline-block text-truncate md-1 text-white' style='max-width: 300px;'>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class='text-secondary'>27.01.2018</small>
                           </div>
                        </div>
                       </div>
                       <div class='drop-down-divider'></div>
                       <a class='dropdown-item' href='#'>Все сообщения</a>
                  </div>
               </div>
               <div class='dropdown show'>
                   <button class='btn btn-outline-warning dropdown-toggle' id='dropdowUW' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='far fa-comment'></i></button>
                   <div class='dropdown-menu' aria-labelledby='dropdownUW'>
                    <h6 class='dropdown-header'>Уведомления:</h6>
                    <div class='dropdown-item align-items-left' href='#'>
                       <div class='list-group'>
                          <div href='#' class='list-group-item bg-dark list-group-item-action flex-column align-items-start'>
                            <div class='d-flex w-100 justify-content-between'>
                             <img src='../img/avatar.png' width='50' height='50' class='img-circle pull-left' alt=''>
                              <h6 class='mb-1 text-white'><a href='#'>UserName</a>&nbsp;прислал(а) вам уведомление</h6>
                            </div>
                            <p class='d-inline-block text-truncate md-1 text-white' style='max-width: 300px;'>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class='text-secondary'>27.01.2018</small>
                           </div>
                        </div>
                       </div>
                       <div class='drop-down-divider'></div>
                       <a class='dropdown-item' href='#'>Все уведомления</a>
                  </div>
               </div>
              </form>&nbsp;
            <form class='form-inline my-2 my-lg-0'>
              <input class='form-control mr-sm-2 bg-dark text-white' type='search' placeholder='Search' aria-label='Search'>
              <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i class='fa fa-search' aria-hidden='true'></i></button>
            </form>&nbsp;
              <div class='dropdown show'>
                  <a class='btn dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    $name
                    <img src='../img/avatar.png' class='img-circle' width='40' height='40' alt=''>
                  </a>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                    <a class='dropdown-item bg-dark' href='lc.php'>Мой профиль</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item bg-dark' href='#'>Мои темы</a>
                    <a class='dropdown-item bg-dark' href='#'>Мои сообщения</a>
                    <a class='dropdown-item bg-dark' href='#'>Закладки</a>
                    <a class='dropdown-item bg-dark' href='info-me.php'>Информация обо мне</a>
                    <a class='dropdown-item bg-dark' href='#'>Пароль</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item bg-dark' href='exit'>Выход</a>
                  </div>
                </div>";
    
}?>
          </div>
      </div>
  </nav><br>
    
    
    <div class="container">
         <div class="row">
           <div class="col-12 col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Персональная информация</a>
              <a class="nav-link" id="v-pills-contact-info-tab" data-toggle="pill" href="#v-pills-contact-info" role="tab" aria-controls="v-pills-contact-info" aria-selected="false">Контактная информация</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Настройки</a>
              <a class="nav-link" id="v-pills-alert-tab" data-toggle="pill" href="#v-pills-alert" role="tab" aria-controls="v-pills-alert" aria-selected="false">Настройки оповещений</a>
                  <a class="nav-link" id="v-pills-ignor-info-tab" data-toggle="pill" href="#v-pills-ignor-info" role="tab" aria-controls="v-pills-ignor-info" aria-selected="false">Черный список</a>
                  <a class="nav-link" id="v-pills-status-tab" data-toggle="pill" href="#v-pills-status" role="tab" aria-controls="v-pills-status" aria-selected="false">Повышение статуса</a>
                  <a class="nav-link" id="v-pills-security-tab" data-toggle="pill" href="#v-pills-security" role="tab" aria-controls="v-pills-security" aria-selected="false">Безопастность</a>
            </div>
          </div>
          <div class="col-12 col-sm-10 col-md-9 bg-dark" style="padding: 50px;">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade text-white show active" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
                      <span>Аватар:</span>
                <img src="img/avatar.png" width="100px" alt="">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#chenge-ava"><i class="far fa-edit"></i> Изменить аватар</button><hr>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">Статус:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Статус"><hr>
                </div><span class="text-secondary">Отображается под вашим ником в сообщениях</span><hr>
                <span style="margin-right: 10%">Пол:</span><br>
                    <input id="male" type="radio" name="gender" value="male">
                    <label for="male">Мужской</label>
                    <input id="female" type="radio" name="gender" value="female">
                    <label for="female">Женский</label>
                    <input id="not-gender" checked type="radio"  name="gender">
                    <label for="not-gender">Не указано</label><hr>
                <span>Дата рождения:</span>
                  <select class="bg-dark text-white" id="inputGroupSelect01">
                    <option selected></option>
                    <option value="1">Январь</option>
                    <option value="2">Февраль</option>
                    <option value="3">Март</option>
                    <option value="4">Апрель</option>
                    <option value="5">Май</option>
                    <option value="6">Июнь</option>
                    <option value="7">Июль</option>
                    <option value="8">Август</option>
                    <option value="9">Сентябрь</option>
                    <option value="10">Октябрь</option>
                    <option value="11">Ноябрь</option>
                    <option value="12">Декабрь</option>
                  </select>
                  <input type="text" class="bg-dark text-white border-0" style="width: 70px;" placeholder="День">
                  <input type="text" class="bg-dark text-white border-0" style="width: 70px;" placeholder="Год">
                  <hr>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn text-mobile-none">Адрес:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Адрес"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn text-mobile-none">Род занятий:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Род занятий"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn text-mobile-none">Сайт:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Сайт"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn text-mobile-none">Город:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Город"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn text-mobile-none">Интересы:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Интересы"><hr>
                </div>
                <button class="btn btn-outline-success">Сохранить изменения</button>

                  </div>
                  <div class="tab-pane fade text-white" id="v-pills-contact-info" role="tabpanel" aria-labelledby="v-pills-contact-info-tab">
                      <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">Jabber:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Jabber">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">ВКонтакте:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="ВКонтакте"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">Steam:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Steam"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">Telegram:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Telegram"><hr>
                </div><h6 class="text-secondary">Логин в телеграме</h6><hr>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">Skype:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Skype"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">WMID:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="WMID"><hr>
                </div><h6 class="text-secondary">Введите WMID, состоящий из 12 цифр</h6><hr>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">ICQ:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="ICQ"><hr>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="btn">Twitter:</span>
                  </div>
                  <input type="text" class="form-control bg-dark text-white" placeholder="Twitter"><hr>
                </div>
                <button class="btn btn-outline-success">Сохранить изменения</button>
                  </div>
                  <div class="tab-pane fade text-white" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                      <span>Язык:</span>
                  <select class="bg-dark text-white col-sm-12" id="inputGroupSelect01">
                    <option selected>Russian(RU)</option>
                    <option>English(US)</option>
                  </select><h6 class="text-secondary">Выберите язык, на котором Вы бы хотели видеть интерфейс форума.</h6><hr>
                  <span>Часовой пояс:</span>
                  <select class="bg-dark text-white col-sm-12" id="inputGroupSelect01">
                    <option selected>Тут должен быть часовой пояс :D</option><hr>
                  </select><hr>
                  <input id="check1" type="checkbox" checked name="check" value="check1">
	                <label for="check1">Просматривать детальную информацию обо мне на странице профиля:</label>
                    <select class="bg-dark text-white col-sm-12" id="inputGroupSelect01">
                    <option selected>Все посетители</option>
                    <option>Только зарегестрированые пользователи</option>
                    <option>Только зарегестрированые пользователи, чьим подписчиком я являюсь</option>
                  </select>
                   <input id="check2" type="checkbox" checked name="check" value="check1">
	                <label for="check2"> Оставлять сообщения на странице моего профиля:</label><br>
                    <select class="bg-dark text-white col-sm-12" id="inputGroupSelect01">
                    <option selected>Только зарегестрированые пользователи</option>
                    <option>Только зарегестрированые пользователи, чьим подписчиком я являюсь</option>
                    <option>Никто</option>
                  </select><br><hr>
                  <span>Вступать со мной в переписку:</span>
                  <select class="bg-dark text-white col-sm-12" id="inputGroupSelect01">
                    <option selected>Только зарегестрированые пользователи</option>
                    <option>Только зарегестрированые пользователи, чьим подписчиком я являюсь</option>
                  </select><br><br>
                  <button class="btn btn-outline-success">Сохранить изменения</button>
                  </div>
          <div class="tab-pane fade text-white" id="v-pills-alert" role="tabpanel" aria-labelledby="v-pills-alert-tab">
            <span>Оповещять если:</span><br>
            <input id="check3" type="checkbox" checked name="check" value="check1">
            <label for="check3">Ответил в отслеживаемой мною теме</label><br>
            <input id="check4" type="checkbox" checked name="check" value="check1">
            <label for="check4">Вложил файл в отслеживаемой мною теме</label><br>
            <input id="check5" type="checkbox" checked name="check" value="check1">
            <label for="check5">Процитировал моё сообщение</label><br>
            <input id="check6" type="checkbox" checked name="check" value="check1">
            <label for="check6">Упомянул меня в сообщении</label><br>
            <input id="check7" type="checkbox" checked name="check" value="check1">
            <label for="check7">Лайкнул моё сообщение</label><br><hr>
          </div>
                      <div class="tab-pane fade text-white" id="v-pills-ignor-info" role="tabpanel" aria-labelledby="v-pills-ignor-tab">
                          <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="btn">Игнорировать пользователя:</span>
                      </div>
                      <input type="text" class="form-control bg-dark text-white w-100" placeholder="Имя...">
                    </div><h6 class="text-secondary">Имена участников (разделяйте запятой).</h6>
                     <button class="btn btn-outline-success">Сохранить изменения</button>
                      </div>
                      <div class="tab-pane fade text-white" id="v-pills-status" role="tabpanel" aria-labelledby="v-pills-status-tab">status</div>
                      <div class="tab-pane fade text-white" id="v-pills-security" role="tabpanel" aria-labelledby="v-pills-security-tab">
                          <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="btn">Текущий пароль:</span>
                      </div>
                      <input type="password" class="form-control bg-dark text-white w-100">
                      <h6 class="text-secondary">Для Вашей безопасности, Вы должны указать текущий пароль для изменения пароля или e-mail</h6>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="btn">Email:</span>
                      </div>
                      <input type="text" class="form-control bg-dark text-white w-100" value="xxxlendryxxx@gmail.com">
                      <h6 class="text-secondary">Если Вы измените адрес электронной почты, то придётся ещё раз подтвердить свою учётную запись.</h6>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="btn">Новый пароль:</span>
                      </div>
                      <input type="password" class="form-control bg-dark text-white w-100">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="btn">Подтвердить пароль:</span>
                      </div>
                      <input type="password" class="form-control bg-dark text-white w-100">
                    </div>
                     <button class="btn btn-outline-success">Сохранить изменения</button>
                      </div>
                </div>
          </div>
          </div>
    
    <div class="modal fade" id="chenge-ava" tabindex="-1" role="dialog" aria-labelledby="chenge-avaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="chenge-avaLabel">Редактировать аватар</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/avatar.png" width="100" alt="">
            <input type="file" name="avatar" class="textCtrl avatarUpload" id="ctrl_avatar" title="Поддерживаемые форматы: JPEG, PNG, GIF" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
            <label for="ctrl_avatar" class="btn btn-success"><span class="buttonText"><i class="far fa-user-circle"></i> Загрузить новый аватар</span></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-outline-success">Сохранить</button>
      </div>
    </div>
  </div>
</div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/noty.js"></script>
</body>
</html>