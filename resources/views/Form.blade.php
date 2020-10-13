<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Buat Account Baru!</h1>
<h2>Sign up Forum</h2>
<form method="POST" action="/selamat" >
@csrf
<p for="firstname">First Name : </br>
<input type="text" name="firstname" id="nama1" 
placeholder="" value=""></p>

<p for="lastname"> Last Name : </br>
<input type="text" name="lastname" id="nama2"
placeholder="" value=""></p>

<p for="jk">Gender : </br>
<input type="radio" name="jk"> Male</br>
<input type="radio" name="jk"> Female</br>
<input type="radio" name="jk"> Other </p>

<p>Nationality : </br>
<select>
<option value="0">Indonesian</option>
<option value="1">Korean</option>
<option value="2">Japan</option>
</select></p>

</br>

<p> Language Spoken : </br>
<input type="checkbox" value="0">Bahasa Indonesia</br>
<input type="checkbox" value="1">English</br>
<input type="checkbox" value="2">Other </p>

<p>Bio : </br>
<textarea cols="30" rows="10"> </textarea>
</p>

</br>

<a href="welcome">
<input type="submit" value="Sign up"></a>

</form>
</body>
</html>