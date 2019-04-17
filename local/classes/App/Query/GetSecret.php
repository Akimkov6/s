<?php

namespace App\Query;

use App\Query\GetSecrets;
use App\Query\GetCurrentUserId;

class GetSecret implements \Areal\Query\QueryInterface
{
    public function get(array $params = [])
    {
        $secretsModel = new Secrets();
        $secrets = $secretsModel->getRow($params);
        return $secrets;
    }
}
