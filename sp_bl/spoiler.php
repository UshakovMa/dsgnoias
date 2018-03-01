<p>
  <a class="btn btn-dark text-center w-100 hover-color-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Показать подробную информацию
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body bg-dark text-white border-0 w-100" style="display: inline-block;">
        Основная информация:<br>
    <span class="text-muted">Родной город:</span><span class="text-white fr"><?php if($seting[city] != ""){ echo $seting[city];}else{ echo "Не указанно"; }?></span><br>
    <span class="text-muted">Род занятий:</span><span class="text-white fr"><?php if($seting[prof] != ""){ echo $seting[prof];}else{ echo "Не указанно"; }?></span><br>
    <span class="text-muted">Настоящие имя:</span><span class="text-white fr"><?php if($seting[name] != ""){ echo $seting[name];}else{ echo "Не указанно"; }?></span><br>
        Контактная информация: <br>
    <span class="text-muted">Родной город:</span><span class="text-white fr">Луганск</span><br>
    <span class="text-muted">Род занятий:</span><span class="text-white fr">...</span><br>
    <span class="text-muted">Настоящие имя:</span><span class="text-white fr">...</span><br>
  </div>
</div>