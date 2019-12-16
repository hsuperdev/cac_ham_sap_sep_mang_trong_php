<?php
    //sap sep theo thu tu tang dan
    $names = array('Cike', 'Anne', 'Boel', 'Day', "Eren");
    sort($names);
    //var_dump($names);

    //sap sep theo thu tu giam dan
    $names1 = array('Cike', 'Anne', 'Boel', 'Day', "Eren");
    rsort($names1);
    //var_dump($names1);

    //sap sep so theo thu tu tang dan
    $numbers = array(520, '33', 9, '199');
    sort($numbers, SORT_NUMERIC);
    var_dump($numbers);

    //sap sep mang lien ket
    $tax_rates = array(
        'B' => 7.75,
        'C' => 8.25,
        'A' => 8.875
    );

    asort($tax_rates); //Sắp xếp theo giá trị tăng dần
    ksort($tax_rates); //Sắp xếp theo khoá tăng dần
    arsort($tax_rates); //Sắp xếp theo giá trị giảm dần
    krsort($tax_rates); //Sắp xếp theo khoá giảm dần
    var_dump($tax_rates);





