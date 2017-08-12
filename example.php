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
		$("#info").html("Работа оценивается. Подождите немножко.<br><img src='./images/ocenka.gif'>");  
		}
		else
		{
		$("#info").html("Работа оценена. Цена: " + s + "руб.");  
		clearInterval(intervalID);
		}
            });  
        }  
        var intervalID = setInterval(json_example, 5000);  
    </script>  
</body>  
</html>  