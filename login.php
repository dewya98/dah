<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>부산전시| museum DAH</title>
<style>
    body{background-color: #00DBDE;
    background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
    }
    form{width: 400px;height: 300px;border-radius:20px;padding:30px;margin: 30px;
        backdrop-filter: blur(5px);background-color:rgba(255,255,255,0.5) ;
     box-shadow:1px 1px 0 rgba(255,255,255,0.5)}
    h2{text-align:center; color:royalblue}
    p{font-weight:bold;color:dodgerblue}
    input[type=text], input[type=password]
    {outline:none;border:none;background-color:rgba(255,255,255,0.6);font-size:1.4em;}
    input[type=reset], input[type=submit]
    {padding:5px 12px;border:none;background-color:royalblue;color:#fff;border-radius:10px;font-weight:bold;
        cursor: pointer;}
    .btn{margin:50px 130px;}
</style>
    <body>
        <form name="login" method="post" action="login_ok.php">
            <h2>Login</h2><br>
            <p>아이디 &emsp; <input type="text" name="id" id="" required autofocus></p>
            <p>비밀번호&ensp; <input type="password" name="pw" id="" required></p>
            <div class="btn">
            <input type="reset" value="취소"> <input type="submit" value="로그인"> 
           </div>
        </form>
    </body>
</html>