<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/21/2019
 * Time: 11:36 AM
 *
 *
 */
include "CsvFunctions.php";
include "ArrayFunctions.php";
class File
{

    public static function readCSVtoArray(String $filename, String $class): array
    {
        $albums = Array();
        $count = 0;
        $fieldNames = '';
        if (($handle = CsvFunctions::openCSVFile($filename)) !== FALSE) {
            while (($row = CsvFunctions::retrieveRowsFromCSVFile($handle)) !== FALSE) {
                if ($count == 0) {
                    $fieldNames = $row;
                } else {
                    $albums[] = (object)array_combine($fieldNames, $row);
                }
                $count++;
            }
            CsvFunctions::closeCSV($handle);
        }

        return $albums;
    }

    public static function printArrayKeys(Array $albums): array
    {
        $fieldNames = array_keys(get_object_vars($albums[0]));
        return $fieldNames;
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

    public static function printArrayAsTable(Array $albums): string
    {
        $row ="<table class=\"table\"><thead class=\"thead-dark\" style=\"font-family: \'Poppins\', sans-serif;\"><tr>";
        $fieldnames = ArrayFunctions::printArrayKeys($albums);
        $values = ArrayFunctions::printArrayValues($albums);
        foreach ($fieldnames as $fieldname)
        {
            $row .= "<th>" . $fieldname . "</th>";
        }
        $row .= "</tr></thead><tbody style=\"font-family: 'Poppins', sans-serif;\">";
        foreach ($values as $value)
        {
            $row .= "<tr>";
            foreach ($fieldnames as $fieldname) {

                $row .= "<td>" . $value[$fieldname] . "</td>";
            }
            $row .= "</tr>";
        }
        $row .= "</tbody></table>";
        return $row;
    }

}