<?php


namespace src\controllers;


use core\Controller;
use src\handlers\ClientsHandler;
use src\handlers\HandlerFunctions;

class ClientsController extends Controller
{
    public function insertClient()
    {
        $this->render('cadastra_cliente');
    }

    public function insertClientAction()
    {
        $name = filter_input(INPUT_POST,'client_name');
        $inputPhone = filter_input(INPUT_POST,'phone_client');
        $inputDoc = filter_input(INPUT_POST,'client_document');
        $inputbirthDate = filter_input(INPUT_POST,'client_birthDate');

        $phone = HandlerFunctions::limpaString($inputPhone);
        $doc = HandlerFunctions::limpaString($inputDoc);
        $birthDate = date("Y-m-d", strtotime(str_replace('/', '-', $inputbirthDate)));

        $inserted = ClientsHandler::insertClients($name,$phone, $doc, $birthDate);

        if($inserted){
            $this->redirect('/');
        }
    }

    public function updateClient($clientId)
    {
        $clients = ClientsHandler::listClients($clientId);
        $arClient = [
            'id_clients' => $clients[0]['id_clients'],
            'client_name' => $clients[0]['client_name'],
            'phone' => HandlerFunctions::inputFone($clients[0]['phone']),
            'document' => HandlerFunctions::inputCpf($clients[0]['document']),
            'birth_date' => date("d/m/Y", strtotime(str_replace('-', '/', $clients[0]['birth_date'])))
        ];

        if($clients){
            $this->render('atualiza_clientes',[
                'clientes' => $arClient
            ]);
        }else{
            return false;
        }
    }

    public function updateClientAction()
    {
        $id = explode('/',$_GET['request']);
        $clientName = filter_input(INPUT_POST,'client_name');
        $phoneInput = filter_input(INPUT_POST,'phone_client');
        $documentInput = filter_input(INPUT_POST,'client_document');
        $birthDateInput = filter_input(INPUT_POST,'client_birthDate');

        $info = [
            'client_name' => $clientName,
            'phone_client' => $phone = HandlerFunctions::limpaString($phoneInput),
            'client_document' => $documentInput = HandlerFunctions::limpaString($documentInput),
            'client_birthDate' => date("Y-m-d", strtotime(str_replace('/', '-', $birthDateInput)))
        ];

        $updated = ClientsHandler::updateClients($info,$id[1]);

        if($updated){
            $this->redirect('/');
        }else{
            return false;
        }
    }

    public function deleteAction($clientId)
    {
        ClientsHandler::deleteClient($clientId);
        $this->redirect('/');
    }
}