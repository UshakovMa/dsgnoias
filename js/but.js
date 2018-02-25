$(document).ready(function() {
    $('#bold').click(function(){
    var txt = $.trim("[b][/b]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();    
  });
    $('#italic').click(function(){
    var txt = $.trim("[i][/i]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();    
  });
    $('#underline').click(function(){
    var txt = $.trim("[u][/u]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();    
  });
    $('#strikethrough').click(function(){
    var txt = $.trim("[s][/s]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();    
  });
    $('#code').click(function(){
    var txt = $.trim("[code][/code]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();    
  });
    $('#link').click(function(){
    var txt = $.trim("[url][/url]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();     
  });
    $('#quote').click(function(){
    var txt = $.trim("[quote][/quote]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();
  });
    $('#image_b').click(function(){
    var txt = $.trim("[img][/img]");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();
  });
    
    $('#ans').click(function(){
    var txt = $.trim($('#ans').data('name')+", ");
    var box = $("#edit_text");
    box.val(box.val() + txt);
    $("#edit_text").focus();
    var divLoc = $('#edit_text').offset();
    $('html, body').animate({scrollTop: divLoc.top}, "slow");
  });
});