<?php

namespace App\Controller;

use App\Entity\Entitydimanche;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class DimancheController
 * @package App\Controller
 * @Route ("/api")
 */
class DimancheController extends AbstractController
{
    /**
     * @Route("/dimanche", name="creation",methods={"POST"})
     */
    public function creationdimanche(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EntityManagerInterface $entityManager
    )
    {
        $data = $request->getContent();
          // creation d'obet de type Entitydimanche
        $objet =$serializer->deserialize(
            $data,
            Entitydimanche::class,
            "json",
            [
                ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT =>  true
            ]
        );

        // je verifie les contraintes s'ils sont respectés

        $errors = $validator->validate($objet);


        if($errors->count() > 0) {

            return  $this->json("il y'a des erreurs", 404);
        }

        $entityManager->persist($objet);
        $entityManager->flush();

        return $this->json($objet, 201);

    }
}
