<?php
namespace Argentino\Libraries;
use Argentino\Libraries\DateHelper;

class DateHelper 
{
    public static function formatToDB($value) 
    {
        if($value)
            return \Carbon\Carbon::createFromFormat('d/m/Y', $value)->toDateString();
        else
            return null;
    }

    public static function formatToShow($value)
    {
        if($value)
            return \Carbon\Carbon::parse($value)->format('d/m/Y');
        else
            return null;
    }    
}