<?php
class Team 
{
    
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    
    public function __construct($parm1) 
    {
        $this->teamName = $parm1;
    }

    
    public function finalScore($parm1, $parm2)
     {
        
        $this->totalGoals += $parm1;

        
        $this->totalGames += 1;

        
        if ($parm1 > $parm2) {
            $this->totalPoints += 3; 
        } elseif ($parm1 == $parm2) {
            $this->totalPoints += 1; 
        }
        
    }

    
    public function getGoalAverage() 
    {
        if ($this->totalGames == 0) {
            return 0; 
        }
        return $this->totalGoals / $this->totalGames;
    }
    
}
?>