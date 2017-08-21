<?php
class SharedTwitterCache extends TwitterCache
{
    // Responsible ONLY for handling Cached Data
    protected $vars;
    public $cache_timeout = 86400;
    public $cache_dir;
    public function user_store($data)
    { // $data should be an array of the json_decoded api->users_show
        $id = $data["id"];
        file_put_contents($this->cache_dir."/users/ids/".$id.".json", json_encode($data));
        file_put_contents($this->cache_dir."/users/sns/".$data["screen_name"].".json", $id);
    }
    public function user_available($user, $user_type = TWITTER_UID)
    { // Use Types TWITTER_UID and TWITTER_SN
        $idfile = $this->cache_dir."/users/ids/".$user.".json";
        $snfile = $this->cache_dir."/users/sns/".$user.".json";
        if ($user_type == TWITTER_UID)
        {
            if (file_exists($idfile) && filectime($idfile) > (time()-$this->cache_timeout))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            if (file_exists($snfile) && filectime($snfile) > (time()-$this->cache_timeout))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
    }
    public function user_get($user, $user_type = TWITTER_UID)
    {
        $idfile = $this->cache_dir."/users/ids/".$user.".json";
        $snfile = $this->cache_dir."/users/sns/".$user.".json";
        if (!$this->user_available($user, $user_type))
        {
            return FALSE;
        }
        if ($user_type == TWITTER_UID)
        {
            return json_decode(file_get_contents($idfile), TRUE);
        }
        else
        {
            return json_decode(file_get_contents($this->cache_dir."/users/ids/".file_get_contents($snfile).".json"));
        }
    }
}
