$(document).ready(function () {
    
    $('.save').click(function() {
        var id = $(this).attr('data-id');
        var number = $('#tel' + id).val();
        var info = $('#info' + id).val();
        
        var r = confirm("Вы уверены?");
        if (r == true) {
            $.ajax({
                url : '/admin/general/saveContact',
                type : 'post',
                data : { 
                    'id' : id, 
                    'number' : number,
                    'info' : info
                },
                success : function(data) {  
                    location.reload();
                }
            });
        }
    });
    
    $('.delete').click(function() {
        var id = $(this).attr('data-id');
        
        var r = confirm("Вы уверены? Контакт будет удален");
        if (r == true) {
            $.ajax({
                url : '/admin/general/deleteContact',
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
    });
    
    $('.savenew').click(function() {
        var newTel = $('#addTel').val();
        var newInfo = $('#addInfo').val();
        
        $.ajax({
            url : '/admin/general/addContact',
            type : 'post',
            data : { 
                'number' : newTel,
                'info' : newInfo
            },
            success : function(data) {  
                location.reload();
            }
        });
        
    });
    
    
});