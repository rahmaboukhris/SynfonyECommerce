<?php

namespace sil14\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecommande
 */
class Lignecommande
{
    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \sil14\VitrineBundle\Entity\Commande
     */
    private $commande;

    /**
     * @var \sil14\VitrineBundle\Entity\Article
     */
    private $article;


    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignecommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Lignecommande
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set commande
     *
     * @param \sil14\VitrineBundle\Entity\Commande $commande
     * @return Lignecommande
     */
    public function setCommande(\sil14\VitrineBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \sil14\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set article
     *
     * @param \sil14\VitrineBundle\Entity\Article $article
     * @return Lignecommande
     */
    public function setArticle(\sil14\VitrineBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \sil14\VitrineBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
