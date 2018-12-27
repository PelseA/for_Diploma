<?php
namespace Aleksandra\Igra\Base;


class Cookies 
{
    public function setCookie($name, $value, $time){
    // добавить возможность установки значений по умолчанию
        setcookie($name, $value, $time); //отправили данные в браузер
    }

    public function delCookie(){
        setcookie($name)//реализовать удаление куки:
        //можно ли пересоздать куку с пустым значением, тем самым ее удалить?
        $_COOKIE //надо получить данные из браузера
    }

    public function setField($f){
        $this->field = $f;
    }
    // реализовать методы получения данных
    
}