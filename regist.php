<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>Insert title here</title>
<link href="../release/style.css" rel="stylesheet" type="text/css" />
<link href="../release/link.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#contain {
	margin: auto;
	padding: 10px;
	clear: both;
	width: 960px;
}
#welcome {
	height: 28px;
	width: 200px;
}
#welcome {
	height: 28px;
	width: 200px;
}
#lg {
	float: left;
	height: 345px;
	width: 295px;
}
#non1 {
	height: 50px;
	width: 295px;
}
#lg1 {
	height: 295px;
	width: 295px;
}
#main {
	height: 445px;
	width: 960px;
	border: thick solid #0F0;
}
#login {
	float: right;
	height: 345px;
	width: 665px;
}
</style>
</head>
 <script language="javascript">
     function chkinput(form){
             if(form.username.value==""){
                    alert("用户名或密码不能为空!");
                    form.username.focus();
                    return false;
                 }
             if(form.pass.value==""){
                 alert("用户名或密码不能为空!");
                 form.pass.focus();
                 return false;
              }
             
              
             //此外，还可以验证表单各项填写的格式是否正确：邮箱格式，电话格式等
             
         }
</script>
<body>
<div id="contain">
  <div id="welcome"><img name="" src="./release/images/welcome.jpg" width="200" height="28" alt="" style="background-color: #00FFFF" />
    
  </div>
  <div id="main">
  <div id="lg">
    <div id="non1"></div>
    <div id="lg1"><img name="" src="./release/images/ad2.jpg" width="295" height="295" alt="" style="background-color: #FF00FF" /></div>
  </div>
  <div id="login">
    <p>&nbsp;</p>
    <form id="form" name="form" onsubmit="return chkinput(form)" method="post" action="savereg.php">
      <table width="250" border="0" align="center">
    <tr>
      <td height="26">用户名：</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td height="27">密码：</td>
      <td><label for="userpassword"></label>
      <input type="password" name="userpassword" id="userpassword" /></td>
    </tr>
    <tr>
      <td height="25">重复密码：</td>
      <td><label for="userpassword1"></label>
      <input type="password" name="userpassword1" id="userpassword1" /></td>
    </tr>
    <tr>
      <td height="22">专业：</td>
      <td><label for="major"></label>
      <input type="text" name="major" id="major" /></td>
    </tr>
    <tr>
      <td height="21">性别：</td>
      <td><label for="sex"></label>
      <input type="text" name="sex" id="sex" /></td>
    </tr>
    <tr>
      <td>E-mail地址：</td>
      <td><label for="eaddress"></label>
      <input type="text" name="eaddress" id="eaddress" /></td>
    </tr>
    <tr>
      <td height="25">联系电话：</td>
      <td><label for="tel"></label>
      <input type="text" name="tel" id="tel" /></td>
    </tr>
    <tr>
      <td height="29">密保问题：</td>
      <td><label for="question"></label>
      <input type="text" name="question" id="question" /></td>
    </tr>
    <tr>
      <td height="25">密保答案：</td>
      <td><label for="answer"></label>
      <input type="text" name="answer" id="answer" /></td>
    </tr>
    <tr>
      <td height="23">联系地址：</td>
      <td><label for="address"></label>
      <input type="text" name="address" id="address" /></td>
    </tr>
   
    <tr>
      <td height="23" colspan="2" align="center"><input type="submit" name="reg" id="reg" value="注册" />
        &nbsp; &nbsp;
        <input type="reset" name="reset" id="reset" value="重置" /></td>
    </tr>
  </table>

  </form>
 </div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>






