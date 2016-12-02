<?php

namespace sil14\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sil14VitrineBundle:Default:index.html.twig', array('name' => $name));
    }

    public function mentionsAction(){
        return $this->render('sil14VitrineBundle:Default:mentionlegales.html.twig');
    }

    public function catalogueAction(){
        $categorie = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Categorie')->findAll();

        return $this->render('sil14VitrineBundle:Default:catalogue.html.twig', array('categorie' => $categorie));
    }

    public function articlesParCategorieAction($id){
        $em=$this->getDoctrine()->getManager();

        $query = $em->createQuery('SELECT art FROM sil14VitrineBundle:Article art WHERE art.categorie = :identifiant')->setParameter('identifiant',$id);

        $articles = $query->getResult();

        $categorie = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Categorie')->findOneBy(array('id' => $id))->getIntitule();

        return $this->render('sil14VitrineBundle:Default:articlesParCategorie.html.twig', array('articles' => $articles,'categorie' => $categorie));
    }

    public function getCategorieAction(){
        $categorie = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Categorie')->findAll();

        return $this->render('sil14VitrineBundle:Default:categorieList.html.twig',array('listCate' => $categorie));


    }
}
