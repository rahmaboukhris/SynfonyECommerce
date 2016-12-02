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

        $p = $this->getPanier($request);

        $p->ajoutArticle($id,$qte);

        $request->getSession()->set('panier',$p);


        $response = $this->forward('sil14VitrineBundle:Panier:contenuPanier');

        return $response;

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


}
