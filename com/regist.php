<?php
include '../reg_post.php';
?>

        <h1 class="form_auth_block_head_text">Регистрация</h1>
        <form class="form_auth_style" action="#" method="Post">
            <label>Введите Имя</label>
            <input type="text" name="name" placeholder="Введите Имя"><br>

            <label>Введите Фамилию</label>
            <input type="text" name="surname" placeholder="Введите Фамилию"><br>

            <label>Введите Отчество</label>
            <input type="text" name="patronymic" placeholder="Введите Отчество"><br>

            <label>Введите логин</label>
            <input type="text" name="login" placeholder="Введите логин"><br>

            <label>Введите почту</label>
            <input type="email" name="email" placeholder="Введите почту"><br>

            <label>Введите пароль</label>
            <input type="password" name="pass" placeholder="Введите пароль" ><br>

            <label>Повторите пароль</label>
            <input type="password" name="pass" placeholder="Повторите пароль" ><br>

            <label>Вы соглашаетесь с правилами регистрации</label>
            <input type="checkbox"><br>

            <button class="form_auth_button" type="submit" name="form_auth_submit">За регистрироватся</button>
        </form>
<form action="../index.php" target="_blank"><button>Назад</button></form>
