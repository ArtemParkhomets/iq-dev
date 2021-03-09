<?php
    $percent = 10;
    $amount  = $_POST['depositamount'];
    $date1   = $_POST['date'];
    $months  = $_POST['term']*12;
    if ($_POST['repl'] === 'true') {
        $repl = $_POST['depositrepl'];
    } else {
        $repl = 0;
    }

$date   = new DateTime($date1);
$result = [];
    for ($i = 1; $i <= $months; $i++) {

        $endMonth = clone $date;
        $endMonth->modify('last day of this month');
        $firstPartMonth      = $date->diff($endMonth);
        $firstPartMonthValue = $firstPartMonth->format('%a');
        $year                = $endMonth->format('Y');

                if ($year % 4 == 0) {
                    $baseRate = $percent/366;
                }else{
                    $baseRate = $percent/365;
                }

        $result[] = $firstPartMonthValue*$baseRate;

        $startMonth = clone $date;
        $startMonth->modify('+ 1 month');
        $secondPartOfMonth = $startMonth->diff($endMonth);
        $secondPartOfMonthValue = $secondPartOfMonth->format('%a');
        $date                   = $startMonth;
        $year                   = $startMonth->format('Y');

                if ($year % 4 == 0) {
                    $baseRate = $percent/366;
                }else{
                    $baseRate = $percent/365;
                }

            $result[] =  $secondPartOfMonthValue*$baseRate;
    }
        $start = ($amount + $amount*($result[0]/100) + $amount*($result[1]/100));

    for ($i = count($result)/2; $i>1; $i--) {
        $array          = array_splice($result, 2);
        $nextMonthTotal = ($start + ($start + $repl)*($array[0]/100) + ($start + $repl)*($array[1]/100) + $repl);
        $result         = $array;
        $start          = round($nextMonthTotal, 2, PHP_ROUND_HALF_DOWN);
    }
echo number_format(round($start), 0, ',', ' ').' руб';
