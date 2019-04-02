<?php


class publication
{
    private $id_pub;
    private $contenu_pub;
    private $titre_pub;
    private $auteur_pub;


    public  function __construct($id_pub,$contenu_pub,$titre_pub,$auteur_pub) {
        $this->id_pub=$id_pub;
        $this->contenu_pub=$contenu_pub;
        $this->titre_pub=$titre_pub;
        $this->auteur_pub=$auteur_pub;

    }

    public function getIdPub()
    {
        return $this->id_pub;
    }


    public function setIdPub($id_pub)
    {
        $this->id_pub = $id_pub;
    }


    public function getTitrePub()
    {
        return $this->titre_pub;
    }


    public function setTitrePub($titre_pub)
    {
        $this->titre_pub = $titre_pub;
    }


    public function getContenuPub()
    {
        return $this->contenu_pub;
    }


    public function setContenuPub($contenu_pub)
    {
        $this->contenu_pub = $contenu_pub;
    }


    public function getAuteurPub()
    {
        return $this->auteur_pub;
    }


    public function setAuteurPub($auteur_pub)
    {
        $this->auteur_pub = $auteur_pub;
    }

    /*public function __construct()
     {
     }*/



}




?>