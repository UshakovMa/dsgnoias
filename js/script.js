$(document).ready(function() {
    
    $(".chat-body").scrollTop($(".chat-body")[0].scrollHeight);
    
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
    
    var $txt = '';
    $('#sel-text').bind("mouseup", function(e){
        if (window.getSelection){
            $txt = window.getSelection();
        }
        else if (document.getSelection){
            $txt = document.getSelection();
        }
        else if (document.selection){
            $txt = document.selection.createRange().text;
        }
        else return;
        if    ($txt!=''){
            $('#popUpBox').css({'display':'block', 'left':e.pageX-60+'px', 'top':e.pageY+5+'px'});
        }
    });
     
    $(document).bind("mousedown", function(){
        $('#popUpBox').css({'display':'none'});
    });
     
    $('#popUpBox').bind("mousedown", function(){
        $('#edit-text').val($txt);
    });
    
    

    
    $( "#edit_text" ).change(function() {
        $.ajax({
          type: 'post',
          url: 'file/upd_text.php',
          data: {'msg' : $('#edit_text').val()},
            success: function(response) {
                $('#upblo').html(response);
    	}
        });
    });
    
    $("#password").pwdMeter();
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
        });
            setTimeout(function(){$('#res').fadeOut('slow')},5000);
            setTimeout(function(){$('#res').empty()},5000);
            setTimeout(function(){$('#res').fadeIn('slow')},5000);
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    
    $('#update_set1').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize(),
            success: function(response) { //Данные отправлены успешно
                 var arr = response.split('@');
                not (arr[1], arr[0]);
                console.log(response);
    	}
        });
            setTimeout(function(){$('#res').fadeOut('slow')},5000);
            setTimeout(function(){$('#res').empty()},5000);
            setTimeout(function(){$('#res').fadeIn('slow')},5000);
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    
    $('#avtorization-form1').submit(function(e) {
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
        });
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
    
    
});

 