<?php

namespace src\handlers;

use \src\models\Clients;

class ClientsHandler
{

    public static function insertClients($name, $phone, $document, $birthDate)
    {
        Clients::insert([
            'client_name' => $name,
            'phone' => $phone,
            'document' => $document,
            'birth_date' => $birthDate
        ])->execute();

        return true;
    }

    public static function listClients($clientId = '')
    {
        if (!empty($clientId)) {
            $client = Clients::select()->where('id_clients', $clientId)->get();
        } else {
            $client = Clients::select()->execute();
        }

        if ($client) {
            return $client;
        } else {
            return false;
        }
    }

    public static function updateClients($clientInfo, $clientId)
    {
        Clients::update()
            ->set([
                'client_name' => $clientInfo['client_name'],
                'phone' => $clientInfo['phone_client'],
                'document' => $clientInfo['client_document'],
                'birth_date' => $clientInfo['client_birthDate']
            ])
            ->where('id_clients',$clientId)
            ->execute();

        return true;
    }

    public static function deleteClient($clientId)
    {
        Clients::delete()->where('id_clients', $clientId)->execute();
        return true;
    }

}

