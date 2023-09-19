<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>企业新闻</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <div class="register">
        <form>
            用户名：
            <input type="text" name="username" placeholder="用户名"><br /> 密码：
            <input type="password" name="password" placeholder="密码"><br /> 性别：
            <input type="radio" name="sex" value="male" checked>男
            <input type="radio" name="sex" value="female">女<br /> 爱好：
            <input type="checkbox" name="hobbies" value="唱歌">唱歌
            <input type="checkbox" name="hobbies" value="跳舞">跳舞
            <input type="checkbox" name="hobbies" value="敲代码">敲代码<br />头像：
            <input type="file" name="avatar" placeholder=""><br /> 城市：
            <select name="province" id="province" οnchange="getCity()">
                <option value="">城市</option>
                   <script type="text/javascript"> 
                    for(var i=0;i<provinceArr.length;i++)    
                    {
                        document.write("<option value='"+i+"'>"+provinceArr[i]+"</option>");
                        
                    }
                </script>
            </select><br /> 自我介绍：
            <textarea name="description"></textarea><br />
            <input type="submit" value="提交">
            <input type="reset" value="重填">
            <input type="button" value="普通按钮">

        </form>
        <p>当前时间：
            <?php
            echo(date('d-m-y h:i:s'));
            ?>
        </p>
    </div>
    <script src="./js/info.js"></script>
</body>

</html>