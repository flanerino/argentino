<?php
namespace Argentino\Libraries;

class SessionHelper 
{
    /*cuando necesiten una variable en session por algun tema le crean aca el set y el get*/
    public static function getEjemplo() 
    {
        return unserialize(session()->get('ejemplo'));
    }

    public static function setEjemplo($value) 
    {
        session()->put('ejemplo', serialize($value));
    }  

    public static function clearSession() 
    {
        session()->flush();
    }
    
}