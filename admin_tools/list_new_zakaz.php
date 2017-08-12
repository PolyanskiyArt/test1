<html>  
<head>  
    <script src="./libs/jquery.js"></script>  
</head>  
<body>  
    <div id="info">Загрузка...</div>  
<audio id='player' controls='controls' autoplay loop>  <source src='http://best-muzon.cc/dl/D9jdO3hcdJIoO-6NUP9ymw/1502180549/songs12/2017/07/dj-dimixer-feat.-max-vertigo-sambala-wallmers-(best-muzon.cc).mp3' /> </audio>
    <script>  

        function json_example()  
        {  
            $.getJSON("json1.php", function(data) {  
                s  = "";  
                $.each(data, function(key, val) {   
                    s = s +val   
                });
		if (s=='null')
		{
		$("#info").html("<center>Новых заказов пока нет</center>");  
		}
		else
		{
		$("#info").html("<center>Появился новый заказ <a href='index.php?link=adm_ocenka&nzakaz="+s+"'>Номер "+s+"</a></center>");  
		document.getElementById('player').play();
		clearInterval(intervalID);
		}
            });  
        }  

        document.getElementById('player').play();
        document.getElementById('player').pause();
        var intervalID = setInterval(json_example, 5000);  
    </script> 
</body>  
</body>
</html>  