<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use EventSubscriber;

class CreatedController extends AbstractController
{
    /**
     * @Route("/created", name="created")
     */
    public function getSubscribedEvents()
    {
        return [
            Events::preUpdate
        ];
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof Article) {
            $object->setCreated(new DateTime());
            $object->setStatus(ArticleStatus::REDACTING); // le brouillon
        }
    }
