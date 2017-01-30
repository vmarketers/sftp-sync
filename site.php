<?php
namespace VMSync;

/**
 * A single site to be synced to
 */
class Site
{
    #Hostname (www.example.com)
    public $hostname;
    #username
    public $username;
    #password
    public $password;
    #Should SFTP be used to connect to site (if false FTP used)
    public $useSFTP;

    public function __construct($host, $user, $pwd, $sftp = true)
    {
        $this->hostname = $host;
        $this->username = $user;
        $this->password = $pwd;
        $this->useSFTP = $sftp;
    }
}
