<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/26/2019
 * Time: 7:28 PM
 */
declare(strict_types=1);

abstract class Album
{
    public $artist;
    public $title;
    public $year;
    public $totalsongs;
    public $genre;

    public function goodRating(): int
    {

    }

    public function badRating(): int
    {

    }

}