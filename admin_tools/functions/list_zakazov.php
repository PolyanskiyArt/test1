<html>  
<head>  
    <script src="./libs/jquery.js"></script>  
</head>  
<body>  
    <div id="info">Загрузка...</div>  
    <script>  

        function json_example()  
        {  
            $.getJSON('json.php', function(data) {  
                s  = "";  
                $.each(data, function(key, val) {   
                    s = s +val   
                });
		if (s==0)
		{
		$("#info").html("<center>Новых заказов пока нет</center>");  
		}
		else
		{
		$("#info").html("<center>Появился новый заказ <a href='index.php?link=adm_ocenka&nzakaz="+s+"'></a></center><audio src='./admin_tools/sound.mp3' autoplay loop></audio>");  
		clearInterval(intervalID);
		}
            });  
        }  
        var intervalID = setInterval(json_example, 5000);  
    </script>  
<audio src='./admin_tools/sound.mp3' autoplay loop></audio>
</body>  
</html>  