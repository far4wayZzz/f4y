<?php
$title = "Регистрация";
require "he/heading.php";
?>


    <div class="container">
    <h1> Регистрация </h1>
        <form action="account.php" method="post">
<form action="baza.php" method="post">
    <h3> E-mail </h3>
    <input type="text" name="email" placeholder="Введите e-mail" class="form-control"> <br>
    <h3> Ф.И.О. </h3>
    <input type="text" name="name" placeholder="Введите Ф.И.О." class="form-control"> <br>
    <h3> Пассортные данные </h3>
    <h4>Серия Пасспорта</h4>
    <input type="text" name="seriya" placeholder="Введите Серию Паспорта" class="form-control"> <br>
    <h4>Номер Пасспорта</h4>
    <input type="text" name="nomer" placeholder="Введите  Номер Паспорта" class="form-control"> <br>
    <h3>Пароль</h3>
    <input type="text" name="pass" placeholder="Введите Пароль" class="form-control"> <br>
<input type="submit" VALUE="Продолжить">
</div>
</form>
<?php
require "he/ending.php";
?>