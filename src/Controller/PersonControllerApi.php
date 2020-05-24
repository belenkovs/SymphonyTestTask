<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use App\Repository\PersonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/personapi")
 */
class PersonControllerApi
// extends AbstractController
{
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    /**
     * @Route("/get-all", name="personapi_getall", methods={"GET"})
     */
    public function getAllPerson(PersonRepository $personRepository): Response
    {

        $persons = $this->personRepository->findAll();
        $data = [];

        foreach ($persons as $person) {
            $data[] = [
                'id' => $person->getId(),
                'fio' => $person->getFio(),
                'email' => $person->getEmail(),
                'phone' => $person->getPhone(),
                'remark' => $person->getRemark(),
            ];
        }
        return new JsonResponse(['persons' => $data], Response::HTTP_OK);
    }

    /**
     * @Route("/add", name="personapi_add", methods={"POST"})
     */
    public function addPerson(Request $request): JsonResponse
    {

        $data = json_decode($request->getContent(), true);

        $fio = $data['fio'];
        $phone = $data['phone'];
        $email = $data['email'];
        $remark = $data['remark'];

        if (empty($fio) || empty($phone) || empty($email) || empty($remark)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->personRepository->savePerson($fio,  $email, $phone,$remark);

        return new JsonResponse(['status' => 'Person added!'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/get/{id}", name="personapi_get", methods={"GET"})
     */
    public function getPersonOne($id): JsonResponse
    {
        $person = $this->personRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $person->getId(),
            'fio' => $person->getFio(),
            'email' => $person->getEmail(),
            'phone' => $person->getPhone(),
            'remark' => $person->getRemark(),
        ];

        return new JsonResponse(['person' => $data], Response::HTTP_OK);
    }
    /**
     * @Route("/update/{id}", name="personapi_update", methods={"PUT"})
     */
    public function updatePerson(Request $request, Person $person): JsonResponse
    {
        $person = $this->personRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        $this->personRepository->updatePerson($person, $data);
        return new JsonResponse(['status' => 'customer updated!']);
    }
    /**
     * @Route("/delete/{id}", name="personapi_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Person $person): JsonResponse
    {
        $customer = $this->personRepository->findOneBy(['id' => $id]);
        $this->personRepository->removePerson($person);
        return new JsonResponse(['status' => 'customer deleted']);
    }
}
