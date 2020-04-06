<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Entity\Article;

class ArticleRepositoryController extends AbstractController
{
    /**
     * @Route("/article/repository", name="article_repository")
     */
    public function article($slug){
      // On récupère l'article correspondant au slug
      $article = $this->getDoctrine()->getRepository(Article::class)->findOneBy(['slug' => $slug]);
      if(!$article){
          // Si aucun article n'est trouvé, nous créons une exception
          throw $this->createNotFoundException('L\'article n\'existe pas');
         }
      }
}
