require.config({
	baseUrl:"/",
    paths:{
        "jquery":"lib/jquery/jquery.min",
        "zepto":"lib/zepto/zepto.min",
        "jquery.validate":"lib/jquery.validate/jquery.validate.min"
    }
});
require(['jquery',"jquery.validate"],function($){
  var $ = jQuery = $;
  var CurrentId="";//开关
  function loadList(){
    $.post("admin/controller/controller.php?type=list",function(data){
      if(data&& data.result =="success"){
          console.log(data);
        }
    },"json");
  }
  //检测登录
  $.post("admin/checkLogin.php",function(data){
    if(data&& data.result =="success"){
        loadList();
      }else{
        window.location = "login.html";
      }
  },"json");
  //左侧菜单
  $("#nav-top-menu").click(function(){
     if($("#navBoxLeft").hasClass("navBoxLeft-open")){
        $("#navBoxLeft").removeClass("navBoxLeft-open");
        //$("#navBoxLeft").hide();
        $("#navBoxLeft").animate({left:"-100%"},function(){
          $("#navBoxLeft").hide();
          CurrentId = "";
        })
     }else{
        $("#navBoxLeft").addClass("navBoxLeft-open");
        $("#navBoxLeft").show();
        $("#navBoxLeft").animate({left:"0"})
        $(".bg-gay").show();
        CurrentId = "nav-top-menu";
     }
  })
  $(".bg-gay").click(function(){
    $(this).hide();
    if(CurrentId){
      $("#"+ CurrentId).click();
    }    
  })
  
});
