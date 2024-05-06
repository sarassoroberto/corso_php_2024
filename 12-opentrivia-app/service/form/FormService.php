<?php
namespace service\form;
class FormService {
    public static function getValue($field, $values)
    {
        // print_r($values);
        if (isset($values[$field])) {
            return $values[$field];
        } else {
            return "";
        }
    }
    public static function getError($field, $errors)
    {
 
        if (isset($errors[$field])) {
            return $errors[$field];
        } else {
            return "";
        }
    }
}