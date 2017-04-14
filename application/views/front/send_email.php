
<script src="../themes/js/jquery-1.11.1.js"></script>

收件人账号：<input type="text">
邮件名称：<input type="text">
邮件内容：<input type="text">

<input id="send" type="button" value="发送">

<script>
    $('#send').click(function(){

        $.ajax({
            type:'post',
            url:'send_email/send',
            data:{},
            dataType:'json',
            success:function(data){

            }
        })
    })
</script>


