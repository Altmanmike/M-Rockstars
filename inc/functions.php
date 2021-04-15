<?php

function log_in()
{
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
}

function diffdatetime($date, $now)
{
    if(strlen($now) == strlen($date))
    {
        $annee = (substr($now, 0, 4) - substr($date, 0, 4));
        $mois  = (substr($now, 5, 2) - substr($date, 5, 2));
        $jour  = (substr($now, 8, 2) - substr($date, 8, 2));  
        $heure = (substr($now, 11, 2) - substr($date, 11, 2));   

        if($annee == 1)
        {
            echo ' 1 an.';
        } 
        elseif($annee > 0)
        {
            echo ' '.$annee.' ans.';
        } 
        else 
        {
            if($mois == 1)
            {
                echo ' 1 mois.'; 
            }
            elseif($mois > 0)
            {
                echo ' '.$mois.' mois.';
            }
            else
            {                
            
                if($jour == 1)
                {
                    echo ' 1 jour.'; 
                }
                elseif($jour > 0)
                {
                    echo ' '.$jour.' jours.';
                }
                else
                {
                    if($heure == 1)
                    {
                        echo ' 1 heure.'; 
                    }
                    elseif($heure > 0)
                    {
                        echo ' '.$heure.' heures.';
                    }
                    else echo ' quelques minutes.';
                }
            }
        }            
    }
    else die('Mauvaise date');
}