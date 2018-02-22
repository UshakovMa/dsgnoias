$(document).ready(function() {
        
    function not (text, tip){
       new Noty({
           theme: 'metroui',
           timeout: 5000,
           type: tip,
           progressBar: false,
            text: "<i class='fas fa-exclamation-triangle text-white'></i>&nbsp;"+ text,
            animation: {
                open: 'animated bounceInRight', // Animate.css class names
                close: 'animated bounceOutRight' // Animate.css class names
            }
           
}).show();
};
    
    
 	    $('#avtorization-form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize(),
            success: function(response) { //Данные отправлены успешно
                 var arr = response.split('@');
                not (arr[1], arr[0]);
                if(arr[0] == "Авторизированы"){
                    location.reload();
                }
    	}
        })
            setTimeout(function(){$('#res').fadeOut('slow')},5000);
            setTimeout(function(){$('#res').empty()},5000);
            setTimeout(function(){$('#res').fadeIn('slow')},5000);
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    
      $('#continue').prop('disabled', true);
  $('#rules').change(function() {
      $('#btn_send').prop('disabled', function(i, val) {
        return !val;
      })
  });

    
    $('.collapse').collapse('hide');
    
    var contentold={};   //объявляем переменную для хранения неизменного текста
      function savedata(elementidsave,contentsave) {   //функция для сохранения отредактированного текста с помощью ajax
        $.ajax({
                    url: 'file/status.php',
                    type: 'POST',
                    data: {
                              content: contentsave,     //наш пост запрос
                              id:elementidsave
                    },				
                    success:function (data) {      //получили ответ от сервера - обрабатываем
                        if (data == contentsave)   //сервер прислал нам отредактированный текст, значит всё ok
                        {                                                                      
                          $('#'+elementidsave).html(data);      //записываем присланные данные от сервера в элемент, который редактировался
                          $('<div id="status">Данные успешно сохранены</div>')   //выводим сообщение об успешном ответе сервера
                            .insertAfter('#'+elementidsave)
                            .addClass("success")
                            .fadeIn('fast')
                            .delay(1000)
                            .fadeOut('slow', function() {this.remove();}); //уничтожаем элемент

                        }
                        else
                        {
                            $('<div id="status">Запрос завершился ошибкой</div>') // выводим данные про ошибку
                            .insertAfter('#'+elementidsave)
                            .addClass("error")
                            .fadeIn('fast')
                            .delay(3000)
                            .fadeOut('slow', function() {this.remove();});  //уничтожаем элемент
                        }
                    }
                   });
       }       
       	$('[contenteditable="true"]')                 //редактируемый элемент
                           .mousedown(function (e)                       //обрабатываем событие нажатие мышки 
                                    {
                                       e.stopPropagation();                                
                                       elementid=this.id;
                                       contentold[elementid]=$(this).html();        //текст до редактирования
                                       $(this).bind('keydown', function(e) {         //обработчик нажатия Escape
                                                if(e.keyCode==27){
                                                    e.preventDefault();
                                                    $(this).html(contentold[elementid]);	//возвращаем текст до редактирования	
                                                    }
                                                });
                                       $("#save").css("display","block");                              //показываем кнопку "сохранить"
                                      })
                           .blur(function (event)                   //обрабатываем событие потери фокуса
                            {
                                var elementidsave=this.id;                       //id элемента потерявшего фокус         
                                 var  contentsave = $(this).html();           //текст для сохранения
                                 event.stopImmediatePropagation();
                                 if (elementid===elementidsave)    // если id не совпадает с id элемента, потерявшего фокус,
                                   {$("#save").hide(); }      // значит фокус  в редактируемом элементе, кнопку не прячем
                                 if (contentsave!=contentold[elementidsave])  //если текст изменился           
                                     {    
                                       savedata(elementidsave,contentsave);   //отправляем на сервер
                                     }
                            });      
    
});