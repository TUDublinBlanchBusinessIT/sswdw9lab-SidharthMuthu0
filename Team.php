<?php
class Team {
    
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    
    public function __construct($name) {
        $this->teamName = $name;
    }

    
    public function finalScore($homeScore, $opponentScore) {
        
        $this->totalGoals += $homeScore;

        
        $this->totalGames += 1;

        
        if ($homeScore > $opponentScore) {
            $this->totalPoints += 3; 
        } elseif ($homeScore == $opponentScore) {
            $this->totalPoints += 1; 
        }
        
    }

   
    public function getStats() {
        return [
            "Team Name" => $this->teamName,
            "Total Points" => $this->totalPoints,
            "Total Goals" => $this->totalGoals,
            "Total Games" => $this->totalGames,
        ];
    }
}
?>