<?php
class EntryModel extends Model{
    public function addEntryToDatabase($entry){
        $query = 'INSERT INTO entries (password, username, date, locale, browser, platform, submitMethod)
                VALUES (?,?,FROM_UNIXTIME(?),?,?,?,?)';
        $password = $entry['password'];
        $username = htmlspecialchars($entry['username']);
        $date = intdiv($entry['date'], 1000);
        $locale = $entry['locale'];
        $browser = $entry['browser'];
        $platform = $entry['platform'];
        $submitMethod = $entry['submitMethod'];
        $params = array(
            &$password,
            &$username,
            &$date,
            &$locale,
            &$browser,
            &$platform,
            &$submitMethod
        );
        $params_type = "ssissss";
        var_dump($this->executeRequest($query, $params, $params_type));
        return $this->getEntryId($username, $password);
    }
    public function addKeyEventsToEntry(int $entryId, array $downEvents, array $upEvents){
        $query ="INSERT INTO keyEvents (keyId,entryId,keyValue,location,ctrlKey,
                    altKey,shiftKey,timeDown,timeUp) VALUES (?,?,?,?,?,?,?,?,?);";
        $params_type = "iissiiidd";
        for ($i = 0; $i<sizeof($downEvents);$i++) {
            $keyId = $downEvents[$i]["keyId"];
            $keyValue = $downEvents[$i]["key"];
            $location = $downEvents[$i]["location"];
            $ctrlKey = $downEvents[$i]["ctrlKey"];
            $altKey = $downEvents[$i]["altKey"];
            $shiftKey = $downEvents[$i]["shiftKey"];
            $timeDown = $downEvents[$i]["time"];
            $timeUp = $upEvents[$i]["time"];
            $params = array(
                &$keyId,
                &$entryId,
                &$keyValue,
                &$location,
                &$ctrlKey,
                &$altKey,
                &$shiftKey,
                &$timeDown,
                &$timeUp
            );
            $this->executeRequest($query, $params, $params_type);
        }
    }
    public function getEntryId(string $username, string $password){
        $query = 'SELECT MAX(entryId) FROM entries WHERE username = ? AND password= ?';
        $params = array(&$username, &$password);
        $params_type = "ss";
        $result = $this->executeRequest($query, $params, $params_type);
        $result->data_seek(0);
        $values = $result->fetch_assoc();
        return $values["MAX(entryId)"];
    }
    
    public function getDisplayedPassword(){
        $query = 'SELECT password FROM passwords';
        $values = $this->executeRequest($query);
        $numRows = $values->num_rows;
        $id = rand(0, $numRows-1);
        $values->data_seek($id);
        return $values->fetch_assoc()["password"];
    }
}
