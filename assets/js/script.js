jQuery(document).ready(function(){
"use strict";


/* =============== Sticky Header ===================== */
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 70) {
        $("header.stick").addClass("sticky");
    }
    else{
        $("header.stick").removeClass("sticky");
    }
}); 



/* =============== Event Schedula Tabs ===================== */
var active = $(".schedule-tabs .tab-content .nav li");
$(".schedule-tabs .tab-content .nav li").click(function(){
    $(active).removeClass("active");
})


/*=================== Dropdown Anmiation ===================*/ 
var drop = $('nav > ul > li > ul > li') 
$('nav > ul > li').each(function(){
    var delay = 0;
    $(this).find(drop).each(function(){
    $(this).css({transitionDelay: delay+'ms'});
    delay += 50;
    });
});  
var drop2 = $('nav  > ul > li > ul > li >  ul > li')
$('nav > ul > li > ul > li').each(function(){      
    var delay2 = 0;
    $(this).find(drop2).each(function(){
    $(this).css({transitionDelay: delay2+'ms'});
    delay2 += 50;
    });
});  


/*=================== Responsive Header ===================*/  
$(".responsive-header > span").click(function(){
    $(this).next('ul').slideToggle();
    $(".responsive-header > ul > li > ul").slideUp();
    $(".responsive-header > ul > li > ul > li > ul").slideUp();
    $(".responsive-header > ul > li").removeClass('opened');
    $(".responsive-header > ul > li > ul > li").removeClass('opened');
}); 

$('.responsive-header ul li a').next('ul').parent().addClass('no-link')
$('.no-link > a').click(function(){
    return false;
}); 


$(".responsive-header > ul > li > a").click(function(){
    $(".responsive-header > ul > li > ul").slideUp();
    $(".responsive-header > ul > li").removeClass('opened');
    $(this).next('ul').slideDown();
    $(this).next('ul').parent().toggleClass('opened');
}); 
$(".responsive-header > ul > li > ul > li a").click(function(){
    $(".responsive-header > ul > li > ul > li > ul").slideUp();
    $(".responsive-header > ul > li > ul > li").removeClass('opened');
    $(this).next('ul').slideDown();
    $(this).next('ul').parent().toggleClass('opened');
}); 
    



/* =============== Ajax Contact Form ===================== */
$('#contactform').submit(function(){ alert('yss');
    var base_url="http://localhost/vcreateevent/";
    var path="assets/images/ajax-loader.gif";
    var action = $(this).attr('action');
    $("#message").slideUp(750,function() {
    $('#message').hide();
        $('#submit')
         .after('<img src="'+base_url+path+'" class="loader" />')
       /* .after('<img src="<?php echo base_url().assets/images/ajax-loader.gif" class="loader" />')*/
        .attr('disabled','disabled');
    $.post(action, {
        name: $('#name').val(),
        email: $('#email').val(),
        comments: $('#comments').val(),
        mobile:$('#Mobile').val(),
        verify: $('#verify').val()
    },
        function(data){
            document.getElementById('message').innerHTML = data;
            $('#message').slideDown('slow');
            $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
            $('#submit').removeAttr('disabled');
            if(data.match('success') != null) $('#contactform').slideUp('slow');

        }
    );
    });
    return false;
});
});


/**********************insert modalbox query**************************/

$('#contactform1').submit(function(){ 
    var base_url="http://localhost/vcreateevent/";
    var path="assets/images/ajax-loader.gif";
    var action = $(this).attr('action');
    $("#form-message-success").slideUp(750,function() {
    $('#form-message-success').hide();
        $('#submit')
         .after('<img src="'+base_url+path+'" class="loader" />')
       /* .after('<img src="<?php echo base_url().assets/images/ajax-loader.gif" class="loader" />')*/
        .attr('disabled','disabled');
    $.post(action, {
        name: $('#namee').val(),
        email: $('#emaill').val(),
        cnt: $('#cnt').val(),
        verify: $('#verify').val()
    },
        function(data){ 
          //  document.getElementById('form-message-success').innerHTML = data;
            //$('#form-message-success').slideDown('slow');
            //$('#contactform1 img.loader').fadeOut('slow',function(){$(this).remove()});
           // $('#submit').removeAttr('disabled');
            //if(data.match('success') != null) $('#contactform1').slideUp('slow');
           
            $('#myModal').modal('hide');
            $('#myModall').modal('show');
             $("#formmessagesuccess").html(data);

        }
    );
    });
    return false;
});

$(window).load(function(){
/* =============== Page Loader ===================== */
  $(".page-loader").fadeOut(3000);
    
/* =============== Pretty Photo ===================== */
  jQuery("body a[data-rel^='prettyPhoto']").prettyPhoto({
      theme: "facebook",
  });


var kenburn = $(".kenburns-wrapper").height();
var kenburnhalf = kenburn/2;
$(".kenburns-wrapper").css({
    "margin-top":-kenburnhalf
})




});

$('#formmessagesuccess').click(function(){

$("#formmessagesuccess").hide();
 });








