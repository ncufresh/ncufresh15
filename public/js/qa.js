$(function() {
    $('.modal-trigger').leanModal();
    $('.modal-trigger').click(function() {
        $.ajax({
            url: '/qa/view?id=' + $(this).attr('data-id'),
            type: 'GET',
            dataType: 'text',

            success: function(msg) {
                msg = JSON.parse(msg);
                $("#view"+msg.id).html(msg.views);
            }
        });
    });
});
