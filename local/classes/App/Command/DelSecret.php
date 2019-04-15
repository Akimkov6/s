<?php

namespace App\Command;

class DelSecret implements \Areal\Command\CommandInterface
{
    public function execute(array $params = [])
    {
        $lots = new \App\Model\Secrets();
        print_r($params['id']);
        return $result = $lots->delete($params['id']);
    }
}