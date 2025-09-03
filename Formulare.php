<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulare</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
input[type=text], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  border-width: 5px;
  box-sizing: border-box;
}
form select[name="algoritm"] {
    width: 450px;
}
button {
 width: 100px;
 height: 50px;
 background-color: #202020;
 border: none;
 color: #fff;
 font-family: arial;
 font-weight: 600;
 cursor: pointer;
 margin-bottom: 7px;
}
body {
  background-color: black;
}

textarea{
 width: 300px;
 height: 150px;
 background-color: #fff;
 resize: none;
}
</style>
</head>
<body>
<div style="background-color:#E5E4E2;color:white;width: 450px;margin: auto;padding:20px;">
<form action="Functions1.php" method="get">

<select name="algoritm">
<label>Alege algoritmul!</label>
<option value="cea mai mare cifră a unui număr întreg">cea mai mare cifră a unui număr întreg</option>
<option value="eliminarea primei cifre a unui număr întreg">eliminarea primei cifre a unui număr întreg</option>
<option value="eliminarea cifrelor pare ale unui număr întreg">eliminarea cifrelor pare a unui număr întreg</option>
<option value="înlocuirea primei cifre cu ultima și viceversa">înlocuirea primei cifre cu ultima și viceversa</option>
<option value="inversul unui număr întreg">inversul unui număr întreg</option>
<option value="media aritmetică a cifrelor unui număr întreg">media aritmetică a cifrelor unui număr întreg</option>
<option value="numărul de cifre ale unui număr întreg">numărul de cifre ale unui număr întreg</option>
<option value="testul de număr palindrom">testul de număr palindrom</option>
<option value="prima cifră a unui număr întreg">prima cifră a unui număr întreg</option>
<option value="produsul cifrelor unui număr întreg">produsul cifrelor unui număr întreg</option>
<option value="produsul cifrelor pare ale unui număr întreg">produsul cifrelor pare ale unui număr întreg</option>
<option value="suma cifrelor unui număr întreg">suma cifrelor unui număr întreg</option>
<option value="suma cifrelor pare ale unui număr întreg">suma cifrelor pare ale unui număr întreg</option>
<option value="testul de număr prim">testul de număr prim</option>
<option value="ultima cifră a unui număr întreg">ultima cifră a unui număr întreg</option>
</select>
<input type="text" name="nr" placeholder="Nr">
<button type="submit">Rezultat!</button>
</form>
</div>
<br>
<br>
<div style="background-color:#E5E4E2;color:white;width: 450px;margin: auto;padding:20px;">
<form action="Functions2.php" method="get">

<select name="algoritm">
<label>Alege algoritmul!</label>
<option value="cel mai mare divizor comun">cel mai mare divizor comun</option>
<option value="cel mai mic multiplu comun">cel mai mic multiplu comun</option>
<option value="interschimbarea valorilor a două variabile">interschimbarea valorilor a două variabile</option>
</select>
<input type="text" name="nr1" placeholder="Nr 1">
<input type="text" name="nr2" placeholder="Nr 2">
<button type="submit">Rezultat!</button>
</form>
</div>
</body>
</html>