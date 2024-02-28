<?php 

class InvoicesController {
    function getAll() {
        // Données depuis le model, depusi la DB.
        $data = [
            [
                'ref' => '0123'
            ],
            [
                'ref' => '4567'
            ]
        ];

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
}
