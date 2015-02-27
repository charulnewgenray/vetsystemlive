$(function() {
    $('.faq-categorys li').each(function(){
        $(this).on('click',function(){
            $('.faq-categorys,.faq-questions ul,faq-replys').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var catid = $(this).prop('id');
            $('.faq-questions ul,.faq-reply').hide();
            $(".faq-questions").find('.'+catid).show();
            $(".faq-replys").find('.'+catid+'-1').show().addClass('selected');
        });
    });
    $('.faq-questions li').each(function(){
        $(this).on('click',function(){
            $('.faq-questions ul li.selected').removeClass('selected');
            $(this).addClass('selected');
            $('.faq-reply').hide();
            $('.faq-replys').find('.selected').removeClass('selected');
            var faqquestionid = $(this).prop('id');
            $(".faq-replys").find('.'+faqquestionid).show().addClass('selected');
        });
    });
});
