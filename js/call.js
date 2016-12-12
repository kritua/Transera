$('button[type="submit"]').click(function(){
    var $form = $(this).closest('form');
    $.post('http://form.gosttrans.ru/index.php', $form.serialize(), function(data){
        //if(data.res == 'success') yaCounter39711875.reachGoal('zayavka');
        $form.find('.message').html('<div class="alert alert-' + data.res + '">' + data.msg + '</div>');
    }, 'json');
    $form.trigger('reset');
    return false;
});