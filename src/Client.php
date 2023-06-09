<?php

namespace Janyksteenbeek\Salesrobot;

use CurlHandle;
use Janyksteenbeek\Salesrobot\Resources\Prospect;

class Client
{
    private CurlHandle $curl;

    public function __construct(string $webhookUrl)
    {
        $this->curl = curl_init($webhookUrl);
    }

    public function addProspect(Prospect $campaignInfo): ?object
    {
        $json = json_encode($campaignInfo);

        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $json);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($this->curl);
        curl_close($this->curl);

        return json_decode($response);
    }
}
