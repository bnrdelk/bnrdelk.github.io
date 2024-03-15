<!DOCTYPE html>

<html lang="en">
<head>
    <title>Currency Calculator</title>
    <meta name="description" content="CENG 311 Inclass Activity 4" />
</head>
<body>
<?php
// when the requested method is get, get the values from form & calculate the amount
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $from_currency = $_GET["from_currency"];
    $to_currency = $_GET["to_currency"];
    $from_value = $_GET["from_value"];
    // define currency rates in array
    $rates = [
        'FUSD' => ['TUSD' => 1.0, 'TCAD' => 1.35, 'TEUR' => 0.92],
        'FCAD' => ['TUSD' => 0.74, 'TCAD' => 1.0, 'TEUR' => 0.68],
        'FEUR' => ['TUSD' => 1.09, 'TCAD' => 1.47, 'TEUR' => 1.0]
    ];
    // get the rate for desired pair
    $rate = $rates[$from_currency][$to_currency];
    // calculate the amount
    $converted_value = $from_value * $rate;
}
?>
<form action="activity4.php" method="GET">
    <table>
        <tr>
            <td>From:</td>
            <td><input type="text" name="from_value" value="<?php echo $from_value; ?>" /></td>
            <td>Currency:</td>
            <td>
                <select name="from_currency">
                    <option value="FUSD">USD</option>
                    <option value="FCAD">CAD</option>
                    <option value="FEUR">EUR</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>To:</td>
            <td>
                <input type="text" name="to_value" value="<?php echo $converted_value; ?>" readonly />
            </td>
            <td>Currency:</td>
            <td>
                <select name="to_currency">
                    <option value="TUSD">USD</option>
                    <option value="TCAD">CAD</option>
                    <option value="TEUR">EUR</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="submit" value="Convert" /></td>
        </tr>
    </table>
</form>
</body>