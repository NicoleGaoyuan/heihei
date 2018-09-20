$(function () {
    $('#user_name').on('keyup',function () {
        if ($('#user_name').val()==''){
            $('.error span').eq(0).addClass('shower').removeClass('hideer');
        }else{
            $('.error span').eq(0).addClass('hideer').removeClass('shower');
        }
    })
    $('#pass_word').on('keyup',function () {
        if ($('#pass_word').val()==''){
            $('.error span').eq(1).addClass('shower').removeClass('hideer');
        }else{
            $('.error span').eq(1).addClass('hideer').removeClass('shower');
        }
    })
    $('.btn').on('click',function () {
        $.post('php/login.php',{
            "userName":$('#user_name').val(),
            "psws":$('#pass_word').val()
        },function(data){
            if ($('#user_name').val()==''){
                $('.error span').eq(0).addClass('shower');
            }else if ($('#pass_word').val()=='') {
                $('.error span').eq(1).addClass('shower');
            }else if (parseInt(data)) {
                console.log(parseInt(data))
                alert('登录成功')
                localStorage.name=$('#user_name').val();
                localStorage.login_mark = 1;
                window.open('index.html','_self');
            }else{
                alert('账号或密码错误，请重新输入');
                localStorage.login_mark = 0;
            }
        })
    })
})
