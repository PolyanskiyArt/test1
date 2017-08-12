<html>  
<head>  
    <script src="./libs/jquery.js"></script>  
</head>  
<body>  
    <div id="info"><center>Работа оценивается. Это займет несколько минут(не более 30), пожалуйста не закрывайте эту страничку. Если вы не можете ждать оценки работы - напишите нам об этом ВКонтакте: <a href='vk.com/stav_student'>www.vk.com/stav_student</a> <p> Либо другим способам (все контакты можете просмотреть <a href='index.php?link=contacts'>здесь</a>)<p> Мы Вам лично сообщим цену.<br><img src='./images/ocenka.gif'></center></div>  
<?php $nzakaz=mysql_insert_id(); ?>
    <script>  

        function json_example()  
        {  
            $.getJSON("json.php?nzakaz=<?php echo $nzakaz; ?>", function(data) {  
                s  = "";  
                $.each(data, function(key, val) {   
                    s = s +val;   
                });
        if (s!=0)
		if (s!='null' )
		{
		$("#info").html("<center>Работа оценена. Цена: <b>" + s + "руб.</b><br>Если согласны, выберите любой из вариантов оплаты:<table width='100%'><tr><td><img src='./images/sber.png' height='100px' title='Выбрать способ перевод на счет в сбербанке'><form action='index.php?link=valid_zayavka&nzakaz=<?php echo $nzakaz; ?>&cena="+s+"' method='post'><input name='sp' value='1' type='hidden'><input type='submit' value='Оплачу в сбербанке'></form></td><td><img src='./images/yandex.jpg' height='100px' title='Выбрать способ перевод яндекс-кошелек'><form action='index.php?link=valid_zayavka&nzakaz=<?php echo $nzakaz; ?>&cena="+s+"' method='post'><input name='sp' value='2' type='hidden'><input type='submit' value='Оплачу на яндекс кошелек'></form></td><td><img src='./images/qiwi.jpg' height='100px' title='Выбрать способ перевод на qiwi-кошелек'><form action='index.php?link=valid_zayavka&nzakaz=<?php echo $nzakaz; ?>&cena="+s+"' method='post'><input name='sp' value='3' type='hidden'><input type='submit' value='Оплачу на QIWI-кошелек'></form></td></center>");  
		clearInterval(intervalID);
		}
            });  
        }  
        var intervalID = setInterval(json_example, 5000);  
    </script>
</body>  
</html>  