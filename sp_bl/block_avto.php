<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Вход</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="login/index.php" id="avtorization-form">
          <div class="form-group">
            <input type="text" class="form-control bg-dark text-white" placeholder="Логин или email" name="el" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control bg-dark text-white" placeholder="Пароль" name="pass" required>
          </div>
        <a href="#">Забыли пароль?</a>
          <div id="res" class="text-dark bg-warning rounded text-center"></div>
          <br/>
           <div class="modal-footer">
       <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#Modal1" data-dismiss="modal">Регистрация</button>
        <input type="submit" value="Войти" class="btn btn-outline-warning">
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
   
   <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Регистрация</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="reg" action="reg/index.php" id="avtorization-form">
         <div class="form-group">
            <input type="text" name="login" class="form-control bg-dark text-white" required placeholder="Логин" id="login">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control bg-dark text-white" required placeholder="Почта">
          </div>
          <div class="form-group">
            <input type="password" name="pass" class="form-control bg-dark text-white" required placeholder="Пароль">
          </div>
          <div class="form-group">
              <input id="rules" type="checkbox" name="check" value="rules">
              <label for="rules"><span class="text-white">Я согласен с <a href="#" class="text-warning">правилами</a> форума</span></label>
          </div>
          <div class="modal-footer">
       <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal"  data-target="#exampleModal" data-dismiss="modal">Войти</button>
              <button id="btn_send" class="btn btn-outline-success" disabled>Создать аккаунт</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
    