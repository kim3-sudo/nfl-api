<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
class UserModel extends Database {
    public function getGamePlays($game) {
        if ($game == '') {
            return 'No game data';
        }
        $query = "SELECT stadium, home, away, possession, playtype, kickdistance, passingyards, returnyards, airyards, yards FROM nfl WHERE gameid = '{$game}'";
        return $this->select($query);
    }
    public function getTeamGames($teamcode) {
        if ($teamcode == '') {
            return 'No team code';
        }
        $query = "SELECT DISTINCT gameid FROM nfl WHERE gameid LIKE '%{$teamcode}%'";
        return $this->select($query);
    }
}