<?php
$users = [
    116 => [
        "name" => "Blanche",
        "age" => 99,
        "description" =>"date earth five musical according graph nearby title child work proper station like must crowd race minute draw chamber sudden test fastened audience also",
    ],
    119 => [
        "name" => "Troy",
        "age" => 33,
        "description" =>"solar belt indeed moving driver heart special dream floor nature one carry element basket becoming health purple fear accident strange list last hope its",
    ],
    11 => [
        "name" => "Lula",
        "age" => 43,
        "description" =>"chosen chain loud individual dish industrial merely after sheet managed tonight threw quarter blew several somehow public lonely may given classroom with row arrangement",
    ]
];

// Foreach avec key/value : je nomme à la fois la valeur, mais également la clé
foreach ($users as $userId => $userInfos) {
    var_dump($userId);
    var_dump($userInfos);
}

