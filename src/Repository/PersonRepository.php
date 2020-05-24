<?php

namespace App\Repository;

use App\Entity\Person;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Person|null find($id, $lockMode = null, $lockVersion = null)
 * @method Person|null findOneBy(array $criteria, array $orderBy = null)
 * @method Person[]    findAll()
 * @method Person[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonRepository extends ServiceEntityRepository
{

private $manager;
/*    


    public function __construct
    (
        ManagerRegistry $registry,
        EntityManagerInterface $manager
    )
    {
        parent::__construct($registry, Person::class);
        $this->manager = $manager;
    }



    public function __construct(
				 ManagerRegistry $registry,
			         EntityManagerInterface $manager
				)
    {
        parent::__construct($registry, Peroson::class);
        $this->manager = $manager;
    }
*/

    public function __construct(ManagerRegistry $registry,EntityManagerInterface $manager)
    {
        parent::__construct($registry, Person::class);
        $this->manager = $manager;
    }


    public function savePerson($fio, $email, $phone, $remark)
    {
        $newPerson = new Person();

        $newPerson
            ->setFio($fio)
            ->setEmail($email)
            ->setPhone($phone)
            ->setRemark($remark);

        $this->manager->persist($newPerson);
        $this->manager->flush();
    }

    public function updatePerson(Person $person, $data)
    {
        empty($data['fio']) ? true : $customer->setFirstName($data['fio']);
        empty($data['email']) ? true : $customer->setEmail($data['email']);
        empty($data['phone']) ? true : $customer->setPhoneNumber($data['phone']);
        empty($data['remark']) ? true : $customer->setLastName($data['remark']);

        $this->manager->flush();
    }

    public function removePerson(Person $person)
    {
        $this->manager->remove($person);
        $this->manager->flush();
    }


    // /**
    //  * @return Person[] Returns an array of Person objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Person
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
