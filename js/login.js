define(['jquery',"lib/jquery.validate/jquery.validate.min.js"],function($){
  var $ = jQuery = $;
  $("#imgCode").delegate("#checkImg img,a","click",function(){
    $("#checkImg img").attr("src",'admin/getimg.php?'+new Date().getTime());
  });
  //检测登录
  $.post("admin/checkLogin.php",function(data){
    if(data&& data.result =="success"){
        //alert("登录："+data.message);
        window.location = "index.html";
      }
  },"json");
  //表单校验
  $(".form-signin").validate({
   submitHandler:function(form){
          var email = $.trim($("#inputEmail").val()),
              pwd = $.trim($("#inputPassword").val()),
              code = $.trim($("#checkCode").val()),
              rember = $.trim($("#rember").val())||0;
            //请求注册
           $.post("admin/login.php",{email:email,pwd:pwd,code:code,rember:rember},function(data){
              //todos注册成功
              if(data&& data.result =="success"){
                alert(data.message);
                window.location = "index.html";
              }else{
                alert("登录失败："+data.message);
              }
              $("#checkImg").click();
           },"json");
          return false;
      },
    rules: {
      inputEmail: {
        required: true,
        maxlength:48,
        email: true
      },
      inputPassword: {
        required: true,
        minlength: 6
      },
      code:{
        required:true,
        minlength:4,
        maxlength:4
      }
    },
    messages: {
      inputEmail: {
        required: "请输入Email地址",
        maxlength:"邮箱长度过长",
        email: "请输入正确的email地址"
      },
      inputPassword: {
        required: "请输入密码",
        minlength: jQuery.validator.format("密码不能小于{0}个字 符")
      },
      code: {
        required: "请输入验证码",
        minlength: "验证码输入不正确",
        maxlength: "验证码输入不正确"
      }
    }
  });
});
