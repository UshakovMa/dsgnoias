    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.gif" class="img-navbar-logo" alt=""></a>
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
                  <button class='btn bg-warning dropdown-toggle' style='box-shadow: none' id='dropdowMSG' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='far fa-envelope'></i><span class='badge badge-success notyfy text-white'>4</span></button>&nbsp;
                  <div class='dropdown-menu' aria-labelledby='dropdownUW'>
                    <h6 class='dropdown-header'>Сообщения:</h6>
                    <div class='dropdown-item align-items-left' href='#'>
                       <div class='list-group'>
                          <div href='#' class='list-group-item bg-dark list-group-item-action flex-column align-items-start'>
                            <div class='d-flex w-100 justify-content-between'>
                             <img src='img/avatar.png' width='50' height='50' class='img-circle pull-left' alt=''>
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
                   <button class='btn bg-warning dropdown-toggle' style='box-shadow: none' id='dropdowUW' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='far fa-comment'></i></button>
                   <div class='dropdown-menu' aria-labelledby='dropdownUW'>
                    <h6 class='dropdown-header'>Уведомления:</h6>
                    <div class='dropdown-item align-items-left' href='#'>
                       <div class='list-group'>
                          <div href='#' class='list-group-item bg-dark list-group-item-action flex-column align-items-start'>
                            <div class='d-flex w-100 justify-content-between'>
                             <img src='img/avatar.png' width='50' height='50' class='img-circle pull-left' alt=''>
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
                  <a class='btn dropdown-toggle' style='box-shadow: none' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    $name
                    <img src='img/avatar.png' class='img-circle' width='40' height='40' alt=''>
                  </a>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                    <a class='dropdown-item bg-dark' href='user.php'>Мой профиль</a>
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