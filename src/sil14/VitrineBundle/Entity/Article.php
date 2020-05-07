<?php

namespace sil14\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var string
     */
    private $img;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ligneArticles;

    /**
     * @var \sil14\VitrineBundle\Entity\Categorie
     */
    private $categorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligneArticles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Article
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
     * Set description
     *
     * @param string $description
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Article
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Add ligneArticles
     *
     * @param \sil14\VitrineBundle\Entity\Lignecommande $ligneArticles
     * @return Article
     */
    public function addLigneArticle(\sil14\VitrineBundle\Entity\Lignecommande $ligneArticles)
    {
        $this->ligneArticles[] = $ligneArticles;

        return $this;
    }

    /**
     * Remove ligneArticles
     *
     * @param \sil14\VitrineBundle\Entity\Lignecommande $ligneArticles
     */
    public function removeLigneArticle(\sil14\VitrineBundle\Entity\Lignecommande $ligneArticles)
    {
        $this->ligneArticles->removeElement($ligneArticles);
    }

    /**
     * Get ligneArticles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneArticles()
    {
        return $this->ligneArticles;
    }

    /**
     * Set categorie
     *
     * @param \sil14\VitrineBundle\Entity\Categorie $categorie
     * @return Article
     */
    public function setCategorie(\sil14\VitrineBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \sil14\VitrineBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Article
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }
}
