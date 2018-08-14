<?php

class Settings{
    public $id;
    public $siteName;
    public $siteDescription;
    public $siteKeywords;
    public $homeContent;
    public $email;
    public $bank;
    public $name;
    public $welcomeMsg;
    public $welcomeMsg2;
    public static $sqlStruct='(siteName,siteDescription,siteKeywords,homeContent,email,bank,name,welcomeMsg,welcomeMsg2) values(?,?,?,?,?,?,?,?,?)';
    public static $updateStruct='set siteName=?,siteDescription=?,siteKeywords=?,homeContent=?,email=?,bank=?,name=?,welcomeMsg=?,welcomeMsg2=? where id=?';
    function __construct($values)
    {
        $this->siteName=$values['siteName'];
        $this->siteDescription=$values['siteDescription'];
        $this->siteKeywords=$values['siteKeywords'];
        $this->homeContent=$values['homeContent'];
        $this->email=$values['email'];
        $this->bank=$values['bank'];
        $this->name=$values['name'];
        $this->welcomeMsg=$values['welcomeMsg'];
        $this->welcomeMsg2=$values['welcomeMsg2'];
    }


}