<?php

namespace sil14\VitrineBundle\Controller;

use sil14\VitrineBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends Controller
{


    public  function  contenuPanierAction(Request $request){

        $session = $request->getSession();
        $panier = $session->get('panier');

        return $this->render('sil14VitrineBundle:Default:contenuPanier.html.twig', array('panier' => $panier));
    }

    public function ajoutArticleAction(Request $request,$id,$qte){

        $panier = $this->getPanier($request);

        //$article=$this->getArticle($id);

        $panier->ajoutArticle($id,$qte);

        $request->getSession()->set('panier',$panier);


        $response = $this->forward('sil14VitrineBundle:Panier:contenuPanier');

        return $response;

    }

    public function viderPanierAction(Request $request){

        $panier = $this->getPanier($request);

        $panier->viderPanier();

        $request->getSession()->set('panier',$panier);

        $response = $this->forward('sil14VitrineBundle:Panier:contenuPanier');

        return $response;
    }

    public function panierLayoutAction(Request $request){

        $panier=$this->getPanier($request);

        return $this->render('@sil14Vitrine/Default/panierLayout.html.twig',array('panier' => $panier));

    }

    public function plusVendusAction($max=3){

        $em=$this->getDoctrine()->getManager();

        $query = $em->createQuery('SELECT IDENTITY(art.article) AS id FROM sil14VitrineBundle:LigneCommande art GROUP BY art.article ')->setMaxResults($max);
        $result=$query->getResult();

        $tabArticle=[];
        $i=0;
        foreach ($result as $value){
            $tabArticle[$i]=$this->getArticle($value['id']);
            $i+=1;

        }

        return $this->render('@sil14Vitrine/Default/plusVendusLayout.html.twig',array('tabArticle' => $tabArticle));

    }

    /**
     * Get Panier
     *
     * @return Panier
     */
    private function getPanier(Request $request){

        $session = $request->getSession();
        $panier = $session->get('panier',new Panier());

        return $panier;
    }

    /***
     * @param $id
     * @return object|\sil14\VitrineBundle\Entity\Article
     */

    private function getArticle($id){

        $article = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Article')->find($id);

        return $article;

    }


}
