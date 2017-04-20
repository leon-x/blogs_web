
<script src="../themes/js/jquery-1.11.1.js"></script>
<link rel="stylesheet"  type="text/css" href="../themes/css/send_email.css">


<!--<script src="--><?php //echo base_url(); ?><!--themes/js/jquery-1.11.1.js"></script>-->
<!--<script src="--><?php //echo $base_url; ?><!--static/js/web.js"></script>-->
<!--<link rel="stylesheet"  type="text/css" href="--><?php //echo $base_url; ?><!--static/css/style.css">-->

<div class="div" >
        <ul>
            收 件 人   ：<input id="receiver" name="receiver" type="text">
        </ul>
        <ul>
            邮 件 名   ：<input id="title_id" name="title_id" type="text">
        </ul>
        <ul>
            邮件内容：<textarea id="content_id" name="content_id"></textarea>
        </ul>
        <ul>
            <input id="send" type="button" value="发送">
        </ul>
</div>

<script>
    $('#send').click(function(){
        var email_name = $('#receiver').val();
        var title_name = $('#title_id').val();
        var content = $('#content_id').val();
        $.ajax({
            type:'post',
            url:'send_email/send',
            data:{
                email_name:email_name,
                title_name:title_name,
                content:content
            },
            dataType:'json',
            success:function(data){

            }
        })
    })
</script>


