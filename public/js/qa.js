$(function() {
    $('.modal-trigger').leanModal();
    $('.modal-trigger.answer').click(function() {
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
    $('.chk-mark label').click(function() {
        var self = $(this);
        console.log(self.attr('data-solved'));
        $.ajax({
            url: '/qa/solved?id=' + self.attr('data-id') + '&solved=' + self.attr('data-solved'),
            type: 'GET',
            dataType: 'text'
        });
        if (self.attr('data-solved') == "1") {
            self.attr('data-solved', "0");
            self.parent().find('label').html("已解決");
            $('#row'+self.attr('data-id')).addClass('solved');
        } else {
            self.attr('data-solved', "1");
            self.parent().find('label').html("還沒解決");
            $('#row'+self.attr('data-id')).removeClass('solved');
        }
    });
});
