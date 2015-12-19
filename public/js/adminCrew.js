$(document).ready(function () {
    
    
    $('.delete').click(function() {
        var id = $(this).attr('data-id');
        
        var r = confirm("Вы уверены? Участник будет удален");
        if (r == true) {
            $.ajax({
                url : '/admin/general/deleteMember',
                type : 'post',
                data : { 
                    'id' : id
                },
                success : function(data) {  
                    location.reload();
                }
            });
        }
    });
    
    $('.add').click(function() {
        $('.newTel').toggle(100);
        $('.newInfo').toggle(100);
        $('.newPhoto').toggle(100);
    });
    
    
});