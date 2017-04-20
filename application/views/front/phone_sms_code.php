<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>短信验证码的发送状态</title>
        <!-- <script src="<?php //echo base_url(THEME.'/js/jquery.min.js')?>"></script> -->
        <script src="../themes/js/jquery.min.js"></script>
        <script src="../themes/js/jquery-1.11.1.js"></script>
    </head>
    <body>
        <hr>
        <div>
            <dl>
                <dd>手机号：<input id="phone" type="text"> 查询时间：<input id="datatime" type="text">（时间格式：20170118） <input id="anniu" type="button" value="确认查询"></dd>
            </dl>
        </div>
        <hr>
        <div id="ddd"></div>
    </body>
    <script>
    $('#anniu').click(function(){
        var phone = $('#phone').val();
        var data = $('#datatime').val();
        var data_new = data.replace(/^(\d{4})(\d{2})(\d{2})$/, "$1-$2-$3");//格式化 20170415 时间格式为  2017-04-15
        $.ajax({
            type:'post',
            url:'/phone_sms_code/phone_sms_status',
            data:{phone:phone,data:data},
            dataType:'json',
            success:function(json){
                //console.log(json);
                //console.log(JSON.stringify(json));
            	var str = "<table  cellpadding='15' rules='cols' frame='vsides'>";
            	str += "<tr><td align='center'>"+data_new+"</td><td align='center'>手机号</td><td align='center'>接收状态</td><td align='center'>接收时间</td><td align='center'>发送时间</td><td align='center'>短信内容</td></tr>";
                for(var key in json){
                    var status_s = json[key].sms_status;
                    var status_n = "";
                    if(status_s == 1){
                    	status_n = "等待回执";
                    }else if(status_s == 2){
                    	status_n = "发送失败";
                    }else if(status_s == 3){
                    	status_n = "发送成功";
                    }
                    str += "<tr><td></td><td>"+json[key].sms_phone+"</td><td>"+status_n+"</td><td>"+json[key].sms_receiver_time+"</td><td>"+json[key].sms_send_time+"</td><td>"+json[key].sms_content+"</td></tr>";
                }
                str += "</table>";
                $('#ddd').append(str);
            }
        })
    })
    </script>
</html>

