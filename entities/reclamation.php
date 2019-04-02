<?php


class reclamation
{
    private $id_reclamation;
    private $type_reclamation;
    private $contenu_reclamation;
    private $auteur_reclamation;

    public  function __construct($id_reclamation,$type_reclamation,$contenu_reclamation,$auteur_reclamation) {
        $this->id_reclamation=$id_reclamation;
        $this->type_reclamation=$type_reclamation;
        $this->contenu_reclamation=$contenu_reclamation;
        $this->auteur_reclamation=$auteur_reclamation;

    }



    public function getIdReclamation()
    {
        return $this->id_reclamation;
    }


    public function setIdReclamation($id_reclamation)
    {
        $this->id_reclamation = $id_reclamation;
    }


    public function getTypeReclamation()
    {
        return $this->type_reclamation;
    }


    public function setTypeReclamation($type_reclamation)
    {
        $this->type_reclamation = $type_reclamation;
    }


    public function getContenuReclamation()
    {
        return $this->contenu_reclamation;
    }


    public function setContenuReclamation($contenu_reclamation)
    {
        $this->contenu_reclamation = $contenu_reclamation;
    }


    public function getAuteurReclamation()
    {
        return $this->auteur_reclamation;
    }


    public function setAuteurReclamation($auteur_reclamation)
    {
        $this->auteur_reclamation = $auteur_reclamation;
    }



  /*  public function __construct()
    {
    } */

}




?>