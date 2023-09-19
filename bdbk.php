<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>百度百科乞丐版</title>
</head>

<body>
    <div class="register">
        <form>
            <p>搜索内容：</p>
            <input type="msg" name="msg" placeholder="msg"><br /> 
            <input type="submit" value="提交">
        </form><br />
        <?php
        if ($_REQUEST['msg'] == "") {
            $result[1][0] = "提交内容不能为空";
        }
        else {
            $url = file_get_contents('http://wapbaike.baidu.com/item/'.$_REQUEST['msg']);
            preg_match_all('/<meta name="description" content="(.*?)"/', $url, $result);
        }
        ?>
        <!-- <textarea name="result" style="height: 400px; width: 600px;" readonly> -->
            <?php echo $result[1][0]; ?>
        <!-- </textarea><br /> -->
    </div>
</body>

</html>