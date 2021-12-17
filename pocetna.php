<?php 
    include 'konekcija.php';
    
    if(isset($_POST['ime']) && $_POST['ime']!=''){
        $ime = $_POST['ime'];
        $upit = "SELECT korisnicko_ime, email, plata FROM korisnici WHERE '1=1' AND korisnicko_ime LIKE '%$ime%'";
    }
    else{
        $upit = "SELECT korisnicko_ime, email, plata FROM korisnici";
    }

    $rez = mysqli_query($kon,$upit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pocetna</title>
</head>
<body class="bg-secondary">
    <div class="container">
        <h1 class="text-center mt-4">Dobrodosli</h1>
        <form action="" method = "post">
            <input class="form-control mt-4" autocomplete="off" placeholder="Unesite ime korisnika" name="ime" id = "ime" type="text">
            <button class="btn btn-success mt-2" name="submit" id="submit">Potvrdi</button>
        </form>
        <table class="table table-dark table-hover table-bordered mt-5 text-center">
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Mail</th>
                    <th>Plata</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($red = mysqli_fetch_assoc($rez))
                    {
                        echo "<tr>";
                            echo "<td>".$red['korisnicko_ime']."</td>";
                            echo "<td>".$red['email']."</td>";
                            echo "<td>".$red['plata']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>