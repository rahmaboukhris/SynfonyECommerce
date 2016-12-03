<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 02/12/2016
 * Time: 09:38
 */

namespace sil14\VitrineBundle\Entity;


class Panier
{

    private $contenu=[];

    //Tableau - contenu[i] = quantite d'article d’id=i dans le panier)
    public function __construct() {
        $this->contenu=[];
        // initialise le contenu
    }
    public function getContenu() {
        return $this->contenu;
        // getter
    }
    public function ajoutArticle ($articleId, $qte = 1) {

        if(!isset($this->contenu[$articleId])){
            $this->contenu[$articleId]=$qte;
        }
        // ajoute l'article $articleId au contenu, en quantité $qte
        // (vérifier si l'article n'y est pas déjà)
    }
    public function supprimeArticle($articleId) {

        foreach ($this->contenu as $article){

            if($article==$articleId){
                unset($this->contenu[$articleId]);
            }

        }
        // supprimer l'article $articleId du contenu
    }
    public function viderPanier() {

        $this->contenu=[];

        // vide le contenu
    }

}