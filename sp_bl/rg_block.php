              <div class="col-12 col-md-3">
                <ul class="list-group">
                 <li class="list-group-item d-flex justify-content-center bg-dark align-items-center" style="background-color: #FFC107 !important">
                    <span class="font-weight-bold">Команда форума:</span>
                  </li>
                <?php $q = get_admin($db);
                    
                    while($res = mysqli_fetch_assoc($q)){
                        if($res[last_online] * 60 * 5 < time()){
                            $b_o = "<div class='online'></div>";
                        }else{
                            $b_o = "";
                        }
                        $admin_ava = get_ava($db, $res[id]);
                        echo "<li class='list-group-item d-flex justify-content-left bg-dark align-items-center col-'>
                        <div class='d-flex''>
                    <img src='$admin_ava' width='40' height='40' class='img-circle pull-left' alt=''>
                    $b_o
                    </div>&nbsp;
                    <div class='user-information'><span class='text-white font-weight-bold'><a href='user.php?id=$res[id]'>$res[login]</a></span>
                        <span class='text-warning'>Админ</span></div>
                  </li>";
                    }
                    ?>
                </ul><br>
                <div class="card text-center">
                  <div class="card-body bg-dark">
                    <h5 class="card-title text-white">Пользвоатели online</h5>
                    <p class="card-text text-white">
                      <a href="#">name</a>,<a href="#">name</a>,<a href="#">name</a>,<a href="#">name</a>,<br>
                      <a href="#">name</a>,<a href="#">name</a>,<a href="#">name</a>,<a href="#">name</a>,<br>
                      <a href="#" class="text-warning">...и ещо 666</a>
                      </p>
                    <small class="text-success">Зарегестрированые - 200</small><br>
                    <small class="text-danger">Незарегестрированые - 200</small>
                  </div>
                </div>
                </div>