<?php

namespace Mbsp\Sisken;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;

class Api{
    private $client;

    public function GetLoriRosakList() {
        $config = app()->make('config')->get('siskenconfig');
        $this->uri = $config['uri'];
        $this->username = $config['username'];
        $this->password = $config['password'];

        $client = new Client();
        $response = $client->request('GET', $this->uri.'/iSweepAPI/LoriRosak', [
            'auth' => [$this->username, $this->password]
        ]);

        echo $response->getBody();
    }

    public function GetLoriServisList() {
        $config = app()->make('config')->get('siskenconfig');
        $this->uri = $config['uri'];
        $this->username = $config['username'];
        $this->password = $config['password'];

        $client = new Client();
        $response = $client->request('GET', $this->uri.'/iSweepAPI/LoriServis', [
            'auth' => [$this->username, $this->password]
        ]);

        echo $response->getBody();
    }

}
