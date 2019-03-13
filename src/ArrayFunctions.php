<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/12/2019
 * Time: 10:28 PM
 */

class ArrayFunctions
{
    public static function combineArray(array $key,array $val)
    {
        return array_combine($key, $val);
    }
    public static function printArrayKeys(Array $albums): array
    {
        return array_keys(get_object_vars($albums[0]));

    }
    public static function printArrayValues(Array $albums): array
    {
        $values = array();
        for($i=0; $i <= (sizeof($albums)-1); $i++ )
        {
            $values[] = get_object_vars($albums[$i]);
        }
        return $values;
    }
}