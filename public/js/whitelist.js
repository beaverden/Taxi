$(document).ready(function() {
    $('.whitelist').click(function(){
        var ip = $(this).attr('data-ip');
        $.ajax({
            type : 'post',
            url : '/admin/general/blocked',
            data : {
                'ip' : ip
            },
            success : function() {
                location.reload();
            }
        });
    });
});