<?php
    include 'konekcija.php';

    if(isset($_POST['submit'])){
        if(isset($_POST['ime']))
        {
            $ime = $_POST['ime'];
        }

        if(isset($_POST['email']))
        {
            $email = $_POST['email'];
        }

        if(isset($_POST['sifra']))
        {
            $sifra = $_POST['sifra'];
        }

        $upit = "SELECT * FROM korisnici WHERE korisnicko_ime LIKE '".$ime."' AND email LIKE '".$email."' AND sifra LIKE '".$sifra."'";
        $rez = mysqli_query($kon, $upit);
        $red = mysqli_num_rows($rez);
        if($red > 0)
        {
            header("location: ./pocetna.php");
        }
        else{
            header("location: ./index.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body class="bg-primary">
    <div class="container mt-5 text-white">
        <h3 class="text-center">Login</h3>
        <form action="" method="post" class="mt-5">                
                <input type="text" autocomplete="off" name="ime" id="ime" class="form-control mt-2" placeholder="Unesite ime...">
                <input type="text" autocomplete="off" name="email" id="email" class="form-control mt-2" placeholder="Unesite email...">
                <input type="text" autocomplete="off" name="sifra" id="sifra" class="form-control mt-2" placeholder="Unesite sifru...">
                <button name="submit" id="submit" class="btn btn-success mt-2">Potvrdi</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>