<?php

namespace App\Query;

use App\Query\GetUserNameById;
use App\Model\Secrets;

class GetSecrets implements \Areal\Query\QueryInterface
{
    public function get(array $params = [])
    {
        $secretsModel = new Secrets();
        $secrets = $secretsModel->getList($params);
        return $secrets;
    }
}
