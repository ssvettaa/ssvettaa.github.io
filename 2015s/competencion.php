<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>2015Document</title>
    <style>
        .for-my-block{
            background-color:darkorange;
        }
    </style>
</head>
<body>
    <?php
    include('header.html');
    ?>
    <main class="wrapper" >
        <div class="wrapper"> 
            <h1 >Программа</h1>
            <div class="program" >
                <article >
                    <div class="information">
                        <h5>9:00-10:30</h5>
                        <h1>1 пара</h1>
                        <p>лекция</p>
                    </div>
                    <div class="author">
                        <a href="https://uni-dubna.ru/">
                            <img src="images/logo_dubna.jpg" alt="эмблема университета Дубна">        
                        </a>
                        <p>Университет Дубна</p>
                    </div>
                </article>
                <article>
                    <div class="information" >
                        <h5>10:40-12:10</h5>
                        <h1>2 пара</h1>
                        <p>семинар</p>
                    </div>
                    <div class="author">
                        <a href="https://uni-dubna.ru/">
                            <img src="images/logo_dubna.jpg" alt="эмблема университета Дубна"> 
                        </a>
                        <p>Университет Дубна</p>
                    </div>
                </article>
                <article>
                    <div class="information">
                        <h5>12:50-14:20</h5>
                        <h1>3 пара</h1>
                        <p>лекция</p>
                    </div>
                    <div class="author">
                        <a href="https://uni-dubna.ru/">
                            <img src="images/logo_dubna.jpg" alt="эмблема университета Дубна"> 
                        </a>
                        <p>Университет Дубна</p>
                    </div>
                </article>
                <article>
                    <div class="information">
                        <h5>14:30-16:00</h5>
                        <h1>4 пара</h1>
                        <p>семинар</p>
                    </div>
                    <div class="author">
                        <a href="https://uni-dubna.ru/">
                            <img src="images/logo_dubna.jpg" alt="эмблема университета Дубна"> 
                        </a>
                        <p>Университет Дубна</p>
                    </div>
                </article>
                <article>
                    <div class="information">
                        <h5>16:10-17:40</h5>
                        <h1>5 пара</h1>
                        <p>дополнительная пара</p>
                    </div>
                    <div class="author">
                        <a href="https://uni-dubna.ru/">
                            <img src="images/logo_dubna.jpg" alt="эмблема университета Дубна"> 
                        </a>
                        <p>Университет Дубна</p>
                    </div>
                </article>
            </div>
            <textarea id="area" cols="20" placeholder="время"></textarea> <br>
            <textarea id="area" cols="20" placeholder="какая пара?"></textarea> <br>
            <textarea id="area" cols="20" placeholder="вид пары"></textarea>
            <br>
            <button class="addButton" onclick="addBlock()" > создать</button>

            <script>
                const addBtn = document.querySelector('.addButton');
                var blockNumber = 2;
                addBtn.onclick = () => {
                     // Создаем блок и добавляем номер
                    let createBlock = document.createElement('article');
                    createBlock.className = '.program article';
                    document.body.append(createBlock);
                    let myh5 = document.createElement('article');
                    createBlock.append(myh5);
                    createBlock.innerText = blockNumber;

                    blockNumber++;
                    addBtn.insertAdjacentElement('beforebegin', createBlock);
                    
                }

                /*function addBlock () {
                    console.log("ghbdtn");
                    let myBlock = document.createElement('article');
                    document.body.append(myBlock);
                    let myH1 = document.createElement("h1");
                    myH1.innerHTML="<i>привет!</i>";
                    myBlock.append(myH1);
                }*/
            </script>
        </div>
    </main>
    <?php include(''); ?>
    <script>
        // function f()
        // {
        //     event.target.classList.add("select");
        // }

        // // document.getElementsByClassName("no_select")[0].addEventListener("click", f);
       
        // let list_no_select = Array.from(document.getElementsByClassName("no_select"));
        // list_no_select.forEach((element) => {
        //     element.addEventListener("click", f);
        // });  
        
        function addSelect() 
        {
            arr.forEach((item) => {
                item.classList.remove("no_select")
            });
            event.target.classList.add("no_select");
        }

        let arr = Array.from(document.getElementsByTagName("*"));
        arr.forEach((item) => {
            item.addEventListener('click', addSelect)
        });
    </script>
</body>
</html>