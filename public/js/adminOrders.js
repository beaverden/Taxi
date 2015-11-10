$(document).ready(function () {
    $('.status').click(function() {
        var id = $(this).attr('id');
        var status = $(this).attr('data-status');
        //Change status
        $.ajax({
            url : '/admin/orderStatus',
            type : 'post',
            data : {'id' : id, 'status' : status},
            success : function(data) {
                location.reload();
            }
        });
    });
    
    $('.block').click(function() {
        var ip = $(this).attr('data-ip');
        var r = confirm("Вы уверены? Заказы и отзывы этого пользователя не будут отображаться");
        if (r == true) {
            $.ajax({
                url : '/admin/blockUser',
                type : 'post',
                data : { 'ip' : ip },
                success : function(data) {
                    location.reload();
                }
            });
        }
    });
});