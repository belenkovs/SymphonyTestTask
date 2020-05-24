<?php

namespace App\DataFixtures;

use App\Entity\Person;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $person = new Person();
            $person->setFio('fio1');
            $person->setEmail('email@test.ru');
            $person->setPhone('717132342342');
            $person->setRemark('Remark1');
            $manager->persist($person);


            $person = new Person();
            $person->setFio('fio2');
            $person->setEmail('email1@test.ru');
            $person->setPhone('81713234342');
            $person->setRemark('Remark2');
            $manager->persist($person);

            $person = new Person();
            $person->setFio('fio3');
            $person->setEmail('email2@test.ru');
            $person->setPhone('917132342342');
            $person->setRemark('Remark3');
            $manager->persist($person);


            $manager->flush();
    }
}
