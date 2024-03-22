<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Activity5-preview.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><select name="countries" id="">
                        <option value="nevsehir">Nevşehir</option>
                        <option value="ankara">Ankara</option>
                        <option value="bursa">Bursa</option>
                        <option value="aydın">Aydın</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ZIP Code: </td>
                <td><input type="text" name="zip-code"><br></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email"><br>
                </td>
            </tr>
            <tr>
                <td>Sex: </td>
                <td><input type="radio" name="sex" value="female"> Female
                <input type="radio" name="sex" value="male"> Male <br></td>
            </tr>
            <tr>
                <td>Language: </td>
                <td> <input type="checkbox" name="languages[]" value="English">English
                    <input type="checkbox" name="languages[]" value="French"> French
                    <input type="checkbox" name="languages[]" value="Germany"> Germany <br>
                </td>
            </tr>
            <tr>
                <td>About: </td>
                <td><textarea name="about" id="about" cols="30" rows="10"></textarea><br></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>