<!-- 错误引用 -->
<!--<script src="--><?php //echo base_url(THEME.'jquery-1.11.1.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo base_url(THEME.'jquery-1.11.2.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo base_url(THEME.'jquery.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo base_url('isphone/themes/js/aaa.js'); ?><!--"></script>-->

<!-- 正确引用 -->
<!--<script src="../themes/js/aaa.js"></script>-->
<script src="../themes/js/jquery-1.11.1.js"></script>

请输入手机号：
<input id="phone" name="phone" type="text" maxlength="11" autocomplete="off">
<input id="qd" type="button" value="验证">

<h3 id="nr"></h3><!-- 显示错误信息 -->

<script>
    $("#qd").click(function(){
        var phone = $('#phone').val();
        if(phone.length != 11){
            $("#nr").text('请输入正确位数的手机号');
        }else{
            $.ajax({
                type:'post',
                url:'isphone/verification',
                data:{phone:phone},
                dataType:'json',
                success:function(data){

                    var phone_nr = data.nr;

                    var phone_true  = '手机号'+phone_nr+'格式正确。';
                    var phone_fales = '手机号'+phone_nr+'格式不正确';

                    if(data.is){
                        $("#nr").text(phone_true);
                    }else{
                        $("#nr").text(phone_fales);
                    }
                }
            })
        }
    })
</script>