<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-tab1-tab" data-toggle="pill" href="#pills-tab1" role="tab" aria-controls="pills-tab1" aria-selected="true">Сообщения</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-tab2-tab" data-toggle="pill" href="#pills-tab2" role="tab" aria-controls="pills-tab2" aria-selected="false">Темы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-tab3-tab" data-toggle="pill" href="#pills-tab3" role="tab" aria-controls="pills-tab3" aria-selected="false">Аккаунты и ключи</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-tab4-tab" data-toggle="pill" href="#pills-tab4" role="tab" aria-controls="pills-tab4" aria-selected="false">Базы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-tab5-tab" data-toggle="pill" href="#pills-tab5" role="tab" aria-controls="pills-tab5" aria-selected="false">Торговля</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-tab6-tab" data-toggle="pill" href="#pills-tab6" role="tab" aria-controls="pills-tab6" aria-selected="false">Софт</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-tab7-tab" data-toggle="pill" href="#pills-tab7" role="tab" aria-controls="pills-tab7" aria-selected="false">Актуальные читы</a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item bg-dark" href="#">Мои темы</a>
                      <a class="dropdown-item bg-dark" href="#">Розыгрыши</a>
                    </div>
                  </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item bg-dark" href="#">25 записей</a>
                      <a class="dropdown-item bg-dark" href="#">100 записей</a>
                      <a class="dropdown-item bg-dark" href="#">200 записей</a>
                    </div>
                  </li>
                <a class="btn" href="#"><i class="fas fa-sync-alt"></i></a>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel" aria-labelledby="pills-tab1-tab">
                <ul class="list-group">
                 
                 <?php 
                    $ss = get_last_answ_h($db);
                    while($rex = mysqli_fetch_assoc($ss)){
                        $aut = get_name($rex[author],$db);
                        $tim = date('d.m.o',$rex['last_update']);
                        echo "<li class='list-group-item list-group-item-dark'><a href='post.php?id=$rex[post_id]'>$rex[title]</a><a href='user.php?id=$rex[author]' class='post-name'>@$aut</a><span>$tim</span></li>";
                    }
                    
                    ?>
                </ul>
                </div>
              <div class="tab-pane fade" id="pills-tab2" role="tabpanel" aria-labelledby="pills-tab2-tab">
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                </ul>
                </div>
              <div class="tab-pane fade" id="pills-tab3" role="tabpanel" aria-labelledby="pills-tab3-tab">
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                </ul>
                </div>
              <div class="tab-pane fade" id="pills-tab4" role="tabpanel" aria-labelledby="pills-tab4-tab">
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                </ul>
                </div>
              <div class="tab-pane fade" id="pills-tab5" role="tabpanel" aria-labelledby="pills-tab5-tab">
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                </ul>
                </div>
              <div class="tab-pane fade" id="pills-tab6" role="tabpanel" aria-labelledby="pills-tab6-tab">
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                </ul>
                </div>
              <div class="tab-pane fade" id="pills-tab7" role="tabpanel" aria-labelledby="pills-tab7-tab">
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                  <li class="list-group-item list-group-item-dark"><a href="#">Название текста</a><a href="#" class="post-name">@Lendry</a><span>10 мин. назад</span></li>
                </ul>
                </div>
            </div><br>