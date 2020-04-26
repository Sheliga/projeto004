<?php


class Utils {

    public static function criptografar($string){
        $options = [
            'cost' => 12,
        ];
        $string = password_hash($string, PASSWORD_BCRYPT, $options);
        return $string;
    }
}