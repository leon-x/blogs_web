
<script src="../themes/js/jquery-1.11.1.js"></script>

请输入你的邮箱：
<input id="email" type="text" maxlength="50" autocomplete="off">
<input id="email_button" type="button" value="确定">
<h3 id="nrts"></h3>
<script>
    $("#email_button").click(function(){
        var email = $('#email').val();
        $.ajax({
            type:'post',
            url:'isemail/verification',
            data:{email:email},
            dataType:'json',
            success:function(data){
                var email = data.nr;

                var email_trun = "你填写的邮箱"+email+"格式是正确的";
                var email_false = "你填写的邮箱"+email+"格式是不正确的";

                if(data.is){
                    $("#nrts").text(email_trun);
                }else{
                    $("#nrts").text(email_false);
                }
            }
        })
    })
</script>









