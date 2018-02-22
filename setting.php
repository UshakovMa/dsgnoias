<?php
    include "db/conn.php";
    include "check_acc/check.php";
?>
<!doctype html>
<html lang="en">
    <?php include "sp_bl/head.php";?>
  <body>
    <?php include "sp_bl/header.php";?>
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
                <img src="<?php echo $ava;?>" width="100px" alt="">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#chenge-ava"><i class="far fa-edit"></i> Изменить аватар</button><hr>
                <form action="file/user_inf.php" method="post" id="avtorization-form">
                <div class="input-group mb-3">
                  <input type="text" name="status" class="form-control bg-dark text-white w-100" placeholder="Статус"><hr>
                </div><span class="text-secondary">Отображается под вашим ником в сообщениях</span><hr>
                <span style="margin-right: 10%">Пол:</span><br>
                    <input id="male" type="radio" name="gender" value="1">
                    <label for="male">Мужской</label>
                    <input id="female" type="radio" name="gender" value="2">
                    <label for="female">Женский</label>
                    <input id="not-gender" type="radio"  name="gender" value="0">
                    <label for="not-gender">Не указано</label><hr>
                  <div class="input-group mb-3">
                  <input type="text" class="form-control bg-dark text-white w-100" placeholder="Настоящие имя"><hr>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control bg-dark text-white w-100" placeholder="Род занятий"><hr>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control bg-dark text-white w-100" placeholder="Город"><hr>
                </div>
                <button type="submit" class="btn btn-outline-success fr">Сохранить изменения</button><br>
                      </form>
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
        <img src="<?php echo $ava;?>" width="100" alt="">
           <form class="box" method="post" action="file/ph.php" enctype="multipart/form-data">
            <input type="file" name="avatar" class="textCtrl avatarUpload" id="ctrl_avatar" title="Поддерживаемые форматы: JPEG, PNG, GIF" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
            <label for="ctrl_avatar" class="btn btn-success clear"><span class="buttonText"><i class="far fa-user-circle"></i> Загрузить новый аватар</span></label>
                  <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
      </div>
            </form>
      </div>

    </div>
  </div>
</div>
      </div>
   <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>