<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function check_form()
        {
            console.log("Привет! " + document.forms[0].elements.yourName.value);
            console.log("Проверьте контактные данные: ")
            console.log("Ваша почта " + document.forms[0].elements.email.value);
            console.log("Номер телефона " + document.forms[0].elements.tel.value);

            console.log("Ответ вы получите: ")
            for(i=0; i<document.forms[0].elements.point.length; i++) 
            {
                if(document.forms[0].elements.point[i].checked) 
                {
                    console.log(document.forms[0].elements.point[i].value)
                }
            }

            console.log("Тема вопроса: ")
            index = document.forms[0].elements.theme.selectedIndex;
            console.log(document.forms[0].elements.theme[index].text);
            console.log("или");
            console.log(document.forms[0].elements.theme[index].value);
            
            
            console.log("еще один вопрос: ")
            if(document.forms[0].elements.chb1.checked)
            { console.log( document.forms[0].elements.chb1.value) } 
            if(document.forms[0].elements.chb2.checked) 
            { console.log( document.forms[0].elements.chb2.value) }
            if (document.forms[0].elements.chb3.checked)
            { console.log( document.forms[0].elements.chb3.value) }
        }
    
    let area = document.getElementById('area')
    area.value = localStorage.getItem('area');
    area.oninput = () => 
    {
        localStorage.setItem('area', area.value)
    };
    </script>
</head>
<body>
    <div class="form"> 
        <form method="get" name="myForm" >
            <div class="textQuestion"> Как Вам удобно получить ответ? </div>   
                <div class="radiobuttons">
                    <label for="mail">
                        <input type="radio" name="point" id="mail" value="по почте">по почте
                    </label><br>
                    <label for="phone">
                        <input type="radio" name="point" id="phone" value="по телефону">по телефону
                    </label><br>
                    <label for="none">
                        <input type="radio" name="point" id="none" value="не нужно">не нужно
                    </label><br>
                </div>
            <br>
            <div>
                <label for="theme">Укажите тему вопроса</label><br>
                <select name="theme" id="theme">
                    <option value="work">работа</option>
                    <option value="cooperation">сотрудничество</option>
                    <option value="personal">личное</option>
                </select>
            </div>
            <br>
            <div class="textQuestion"> И еще один вопрос? </div>
                <div class="checkbox">
                    <label for="chb1">
                        <input type="checkbox" name="chb1" id="chb1" value="может так">может так
                    </label><br>
                    <label for="chb2">
                        <input type="checkbox" name="chb2" id="chb2" value="или не так">или не так
                    </label><br>
                    <label for="chb3">
                        <input type="checkbox" name="chb3" id="chb3" value="иначе">иначе
                    </label><br>
                </div>
            <br>
            <div class="name_email_tel_yourQuestion">
                <label for="yourName">Введите ваше имя
                <input type="text" name="yourName" id="yourName" size="30" pattern="[a-z]+"required>
                </label>
                <label for="email">Адрес почты
                <input type="email" name="email" id="email">
                </label>
            
                <label for="tel">Номер телефона
                <input type="tel" name="tel" id="tel">
                </label>
                <br>
                <label>Ваш вопрос:
                <textarea id="area" cols="20" placeholder="Напишите сообщение здесь"></textarea>
                <br>
                <button class="ButtonForm" onclick="localStorage.removeItem('area');area.value=''">Очистить</button>
                <script>
                
                    area.value = localStorage.getItem('area');
                    area.oninput = () => 
                    {
                        localStorage.setItem('area', area.value)
                    };
                </script> 
            </label>
            <br>
        </div>
    </form>
    <div class="ButtonForm">
        <button onclick="check_form()"> Проверить </button><br>
    </div>
    </div>
</body>
</html>