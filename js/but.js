$(document).ready(function() {
    $('#bold').click(function(){
    var txt = $.trim("[b][/b]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#italic').click(function(){
    var txt = $.trim("[i][/i]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#underline').click(function(){
    var txt = $.trim("[u][/u]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#strikethrough').click(function(){
    var txt = $.trim("[s][/s]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#code').click(function(){
    var txt = $.trim("[code][/code]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#link').click(function(){
    var txt = $.trim("[url][/url]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#quote').click(function(){
    var txt = $.trim("[quote][/quote]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    $('#image_b').click(function(){
    var txt = $.trim("[img][/img]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
  });
    
});