<?php
//пробный текст, вариант проверки всех маршрутов сайта, скорее всего можно придумать как сгенерировать автоматически по url
declare(strict_types=1);

namespace Test\App\Api;

use App\Tests\Http\RequestBuilder;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ApiTest extends WebTestCase{
    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function urlProvider()
    {
        return array(
             '/page person'  =>array('/person/'),
             '/person/new person'  =>array('/person/new'),
             '/person/get person'  =>array('/person/2'),
             '/person/edit person'  =>array('/person/2/edit'),
             '/personapi/get-all person'  =>array('/personapi/get-all'),
        );
    }
}

