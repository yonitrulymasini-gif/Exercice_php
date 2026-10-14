<?php
declare(strict_types=1);
function accessMessage(int $age, bool $hasTicket, bool $banned): string {
     if ($age < 16) {
        return "Tu n'as pas l'age requis";
    }

    if ($hasTicket === false) {
        return "tu n'as  pas de ticket";
    } 
    
    if ($banned === true) {
       return "Tu n'as pas l'autorisation";
    } 
    return "Vous êtes autoriser";
    
}
echo accessMessage(17, true, false), "\n";
echo accessMessage(17, true, true), "\n";
echo accessMessage(15, true, false), "\n";
echo accessMessage(17, false, true), "\n";
