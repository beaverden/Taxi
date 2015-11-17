$(document).ready(function () {
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
    $('.delete').click(function() {
        var id = $(this).attr('data-id');
        var r = confirm("Вы уверены? Этот отзыв будет удален навсегда");
        if (r == true) {
            $.ajax({
                url : '/admin/deleteComment',
                type : 'post',
                data : { 'id' : id },
                success : function(data) {  
                    location.reload();
                }
            });
        }
    });
});