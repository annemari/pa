<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <style>
        thead {
            background: orange;
            color: #fff;
        }
        table, th, td {
            border: 1px solid #333;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>Aritmeetilised operaatorid</title>
</head>
<body>
<?php

// muutujate defineerimine
$x = 8;
$y = 2;
// aritmeetilised operaatorid
$liitmine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;
// tabeli väljastamine
echo
    '<table>
    <!-- tabeli päis -->
    <thead>
        <tr>
            <th>Operaator</th>
            <th>Nimetus</th>
            <th>Näide</th>
            <th>Tulemus</th>
        </tr>
    </thead>
    <!-- tabeli keha -->
    <tbody>
        <!-- liitmine -->
        <tr>
            <td>x + y</td>
            <td>Liitmine</td>
            <td>'.$x.' + '.$y.'</td>
            <td>'.$liitmine.'</td>
        </tr>
        <!-- lahutamine -->
        <tr>
            <td>x - y</td>
            <td>Lahutamine</td>
            <td>'.$x.' - '.$y.'</td>
            <td>'.$lahutamine.'</td>
        </tr>
        <!-- Korrutamine -->
        <tr>
            <td>x * y</td>
            <td>Korrutamine</td>
            <td>'.$x.' * '.$y.'</td>
            <td>'.$korrutamine.'</td>
        </tr>
        <!-- Jagamine -->
        <tr>
            <td>x / y</td>
            <td>Jagamine</td>
            <td>'.$x.' / '.$y.'</td>
            <td>'.$jagamine.'</td>
        </tr>
        <!-- jääk -->
        <tr>
            <td rowspan="2">x % y</td>
            <td rowspan="2">Jääk</td>
            <td>'.$x.' % '.$y.'</td>
            <td>'.$jaak.'</td>
        </tr>
        <tr>
            <td>5 % 2</td>
            <td>'.(5 % 2).'</td>
        </tr>
</tbody>
</table>';