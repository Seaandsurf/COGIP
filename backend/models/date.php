<?php
function formatDate(string $date): string{
    $datetamp = strtotime($date);
    $formattedDate = date('d/m/Y', $datetamp);

    return $formattedDate;
}

function formatDataDates(array &$data, array $dateColumns) :void {
    foreach($data as &$item){
        foreach ($dateColumns as $column){
            if (isset($item[$column])){
                $item[$column] = formatDate($item[$column]);
            }
        }
    }
}