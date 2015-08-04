$(function() {
    // get new bottle
    var token = null;
    var loading_question = false;
    var modal_opened = false;
    init();
    function init() {
        $.ajax({
            url: '/bottle/new',
            type: 'GET',
            success: function(data) {
                if (data.result) {
                    $('#bottle').show();
                    token = data.token;
                }
            }
        });
    }

    function loadNewQuestion() {
        if (token && !loading_question) {
            $('#choose-btn').removeClass('disabled');
            $('#question-options').fadeOut();
            loading_question = true;
            $.ajax({
                url: '/bottle/open/' + token,
                type: 'GET',
                success: function(data) {
                    if (data.result) {
                        // opened;
                        loading_question = false;
                        $('#question-options').html('');
                        $('#question-head').html('恭喜');
                        $('#question-body').html('你已經打開了瓶子!');
                        if (modal_opened == false) {
                            $('#write-modal').openModal();
                        }
                        modal_opened = false;
                    } else if (data.msg == 'need answer') {
                        if (modal_opened == false) {
                            modal_opened = true;
                            $('#question-modal').openModal();
                        }
                        $('#question-body').html(data.knowledge.question);
                        $('#question-options').html('');
                        $('#question-options')
                            .append('<p><input name="answer" type="radio" id="op1" value="1" checked/><label for="op1">'
                                + data.knowledge.option1 + '</label></p>');
                        $('#question-options')
                            .append('<p><input name="answer" type="radio" id="op2" value="2"/><label for="op2">'
                                + data.knowledge.option2 + '</label></p>');
                        $('#question-options')
                            .append('<p><input name="answer" type="radio" id="op3" value="3"/><label for="op3">'
                                + data.knowledge.option3 + '</label></p>');
                        $('#question-options')
                            .append('<p><input name="answer" type="radio" id="op4" value="4"/><label for="op4">'
                                + data.knowledge.option4 + '</label></p>');
                        $('#question-options').fadeIn();
                        $('#choose-btn').show();
                    }
                }
            });
        }
    }

    $('#bottle').click(function() {
        loadNewQuestion();
    });
    
    $('#next-btn').click(function() {
        $(this).hide();
        loadNewQuestion();
    });

    $('#write-btn').click(function() {
        $('#bottle').hide();
        $('#write-modal').closeModal();
        $.ajax({
            url: '/bottle/write/' + token,
            type: 'POST',
            data: {'content': $('#textarea-content').val()},
            success: function(data) {
                console.log(data);
            }
        });
    });


    $('#choose-btn').click(function() {
        var ans = $('input[name=answer]:checked', '#question-options').val();
        $(this).addClass('disabled');
        $('#question-options')
            .fadeOut(1000)
            .html('<div class="progress"><div class="indeterminate"></div></div>')
            .fadeIn(1000);
            setTimeout(function() {
                $.ajax({
                    url: '/bottle/verify/' + token,
                    type: 'POST',
                    data: {'answer': ans},
                    success: function(data) {
                        loading_question = false;
                        if (data.result) {
                            $('#question-options')
                                .html('<i class="large material-icons">done</i><h4>Good job</h4>')
                        } else {
                            $('#question-options')
                                .html('<i class="large material-icons">thumb_down</i><h4>答錯囉!</h4>')
                            console.log(data);
                        }
                        $('#choose-btn').hide();
                        $('#question-options')
                            .hide()
                            .fadeIn(1000, function() {
                                $('#next-btn').fadeIn();
                            });
                    }
                });
            }, 1000);
    });
});
