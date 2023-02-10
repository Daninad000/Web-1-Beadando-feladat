<?php
    session_start();

    //$_SESSION["isCheck"] = true;
    //$_SESSION["utvonal"] = strpos($_SERVER["REQUEST_URI"], "kepek.php");
    //header("Location: ./index.php");
    
    //include_once "Felhasznalo.php";
    //include_once "CallApi_2.php";

    $conn = mysqli_connect("localhost","root","","beadando");

    /*
    class Users{
        private $allUser = [];
        private $allUser = array();

        public function __construct(){
            $conn1 = mysqli_connect("localhost","root","","beadando");
            $allUserDb = "SELECT * FROM felhasznalok";
            $allUserRequest = mysqli_query($conn1,$allUserDb);
            while($rowAll = mysqli_fetch_object($allUserRequest)){
                array_push($this->allUser, $rowAll->id, $rowAll->username, $rowAll->csaladi_nev, $rowAll->uto_nev, $rowAll->email, $rowAll->jelszo, $rowAll->bejelentkezes);
            }
        }

        public function getUserEmail($emailcim){
            return $this->allUser["email"];
        }

        public function getAllUser(){
            return $this->allUser;
        }
        
    }
    */

    
    //$belepve = null;
    $_SESSION["belepve"] = null;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["email"]) && !empty($_POST["email"]) &&
            isset($_POST["pw1"]) && !empty($_POST["pw1"]))
            {
                $email = $_POST["email"];
                $pw1 = $_POST["pw1"];
                $hashpw = md5($pw1);

                

                // email cím lekérdezése
                $emailDb = "SELECT email FROM felhasznalok";
                $emailRequest = mysqli_query($conn,$emailDb);

                // jelszó lekérdezése
                $passwordDb = "SELECT jelszo FROM felhasznalok";
                $passwordRequest = mysqli_query($conn,$passwordDb);

                // email címek eltárolása tömbben
                if($resEm = $emailRequest){
                    $userEm = [];
                    while($rowEm = mysqli_fetch_object($resEm)){
                        array_push($userEm, $rowEm->email);
                    }
                }

                // jelszavak eltárolása tömbben
                if($resPassw = $passwordRequest){
                    $userPassw = [];
                    while($rowPassw = mysqli_fetch_object($resPassw)){
                        array_push($userPassw, $rowPassw->jelszo);
                    }
                }

                // megnézzük, hogy a beírt email cím egyezik-e a tömbben lévők valamelyikével
                for($i = 0; $i < count($userEm); $i++){
                    if($userEm[$i] == $_POST["email"]){
                        $e = $userEm[$i];
                    }
                }

                // megnézzük, hogy a beírt jelszó egyezik-e a tömbben lévők valamelyikével
                for($i = 0; $i < count($userPassw); $i++){
                    if($userPassw[$i] == $hashpw){
                        $p = $userPassw[$i];
                    }
                }

                // ha megegyeznek a tárolt email címek és jelszavak a beírt email címekkel és jelszavakkal, akkor beléptetjük a felhasználót
                if($e == $_POST["email"] && $p == $hashpw){
                    
                    $_SESSION["belepve"] = true;
                    $_SESSION["email"] = $email;
                    $_SESSION["pw1"] = $hashpw;

                    /*
                    $veznev = "SELECT csaladi_nev FROM felhasznalok";
                    $veznevRequest = mysqli_query($conn,$veznev);

                    if($resVnev = $veznevRequest){
                        $userVeznev = [];
                        while($rowVez = mysqli_fetch_object($resVnev)){
                            array_push($userVeznev, $rowVez->csaladi_nev);
                        }
                    }

                    for($i = 0; $i < count($userVeznev); $i++){
                        if($userVeznev[$i] == $_SESSION["vnev"]){
                            $v = $userVeznev[$i];
                        }
                    }
                    */

                    $sql = "UPDATE felhasznalok SET bejelentkezes = 1 WHERE email = '" . $email . "'";
    
                    $request = mysqli_query($conn,$sql);


                    // minden felhasználó lekérdezése
                    
                    /*
                    $allUserDb = "SELECT * FROM felhasznalok WHERE bejelentkezes = " . true . " AND email = " . $email;
                    $allUserRequest = mysqli_query($conn,$allUserDb);
                    */

                    /*
                    $row = mysqli_fetch_assoc($allUserRequest);
                    if($row) {
                        $_SESSION['vnev'] = $row['csaladi_nev']; $_SESSION['knev'] = $row['uto_nev']; $_SESSION['email'] = $_POST['email'];
                    }
                    */

                    /*
                    if (mysqli_num_rows($allUserRequest) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($allUserRequest)) {
                            $_SESSION['id'] = $row["id"];
                            $_SESSION["fnev"] = $row["username"];
                            $_SESSION["vnev"] = $row["csaladi_nev"];
                            $_SESSION['knev'] = $row["uto_nev"];
                            $_SESSION['email'] = $row["email"];
                            $_SESSION['pw1'] = $row["jelszo"];
                            $_SESSION['pw1'] = $row["jelszo"];
                            $_SESSION["belepve"] = $row["bejelentkezes"];
                        }
                      } else {
                        echo "0 results";
                      }
                    */
                      
                    //mysqli_close($conn);


                    /*
                    // Kapcsolódás
                    $dbh = new PDO('mysql:host=localhost;dbname=beadando','root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

                    // Felhasználó keresése
                    $sqlSelect = "SELECT id, csaladi_nev, uto_nev FROM felhasznalok WHERE bejelentkezes = true AND jelszo = sha1(:jelszo)";
                    $sth = $dbh->prepare($sqlSelect);
                    $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
                    $row = $sth->fetch(PDO::FETCH_ASSOC);
                    if($row) {
                    $_SESSION['csn'] = $row['csaladi_nev']; $_SESSION['un'] = $row['uto_nev']; $_SESSION['login'] = $_POST['felhasznalo'];
                    }
                    */


                    /*
                    // felhasználók eltárolása SESSION-ökben
                    if($resAll = $allUserRequest){
                        //$allUser = [];
                        while($rowAll = mysqli_fetch_assoc($resAll)){
                            //ide kell majd egy if elágazás, amiben összehasonlítjuk az email címet a beírt email címmel
                            //array_push($allUser, $rowAll->id, $rowAll->username, $rowAll->csaladi_nev, $rowAll->uto_nev, $rowAll->email);

                        }
                    }
                    */

                    echo "<script>alert('Köszöntjük weboldalunkon!')</script><br />";
                    //echo "<script>location.href = 'index.php'</script>";

                    //$users = new Users();
                    //print_r($users->getUserEmail($e));
                    //print_r($users->getAllUser());
                    //var_dump($users);
                }
                else{
                    echo "<script>alert('Hibás email cím, vagy jelszó!')</script>";
                }

                /*
                if($e == $_POST["email"]) {
                    echo "<script>alert('Ezzel az email címmel már regisztráltak, adj meg egy másikat!')</script>";
                    $_SESSION["email"] = null;
                }
                elseif($u == $_POST["fnev"]){
                    echo "<script>alert('A felhasználónév már létezik, adj meg egy másikat!')</script>";
                    $_SESSION["fnev"] = null;
                }
                else{
                    if($u != $_POST["fnev"] && $e != $_POST["email"]){
                        $sql = "INSERT INTO felhasznalok (id,username,csaladi_nev,uto_nev,email,jelszo,bejelentkezes) 
                            VALUES (null,'".$fnev."','".$vnev."','".$knev."','".$email."','".$hashpw."','')";
    
                        $request = mysqli_query($conn,$sql);
    
                        if($request){
                            session_unset();
                            echo "<script>alert('Köszönjük a regisztrációt!')</script>";
                            header("Refresh:0");
                        }
                        else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                }
                */

                /*
                $f = new Felhasznalo();
                $f->Email = $email;
                $f->Pw = $hashpw;

                $jsonfelh = json_encode($f);
                var_dump($jsonfelh);
                echo "<br><br>";
                $result = CallAPI("POST", "https://localhost:5001/Felhasznalok", $jsonfelh);
                
                $token = $result[0];
                $felh = json_decode($result[1]);
                */

                /*
                if ( $felh != NULL){
                    $_SESSION['Azonosito'] = $felh->{"Azon"};
                    $_SESSION['Felhasznalonev'] = $felh->{"Nev"};
                    $_SESSION['Token'] = $token;
                    echo "<script>alert('Köszöntjük weboldalunkon!')</script><br />";
                    echo "<script>location.href = 'index.php'</script>";
                }
                else{
                    echo "<script>alert('Hibás email cím, vagy jelszó!')</script>";
                }
                */


            }
            else {
                echo "<script>alert('Hiányzó email cím, vagy jelszó!')</script>";
            }
            mysqli_close($conn);
    }  
?>


<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Horgászat</title>
    </head>

    <body class="container bg-dark">
        
        <header>
            <img class="row" id="headerimage_carussel" src="./galeria/Tahoe.jpg" alt="">

            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="text-center text-light bg-dark p-5 display-2">Horgászat</div>
            </div>
        </header>

        <?php
            if(isset($_SESSION["belepve"]) && $_SESSION["belepve"] == true)
            {
                echo '<h3>Üdv ' . $v . ' ' . $_SESSION["knev"] . '</h3>';
            }
        ?>
            
        <?php
            include_once("navbar.php");
        ?>

        <br />

        <div class="container">
            <div class="ujfelhasznalo">
                <form method = "POST" action="" >
                    <div>
                        <h2>Belépés</h2> <!--<label class="labella">Regisztráció</label><br />-->
                    </div>
                    
                    <div>
                        <label class="labella">E-mail cím:</label><br />
                        <input type="email" class="bevitel" name="email" id="email" placeholder="Email cím">
                    </div>
                    <div>
                        <label class="labella">Jelszó:</label><br />
                        <input type="password" class="bevitel" name="pw1" id="pw1" placeholder="Jelszó">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-success" value="Belépek!">
                    <br />
                    <br />
                    <a class="btn btn-primary" href="regisztracio.php">Regisztrálok!</a>
                </form>
            <br />
            </div>
        </div>

        <br />




        <footer class="page-footer text-center wow fadeIn">
            <div class="py-5 bg-dark">
                <span class="footer-copyright text-secondary center" id="copyright">© <?= date("Y"); ?> Copyright:</span>
                <span class="text-secondary center">Horgászat</span>
                <span class="text-secondary center"><a href="https://www.xfish.hu/" target="_blank" id="xfish" style="margin-left: 15px; color: grey;">X fish</a></span>
            </div>
        </footer>

        <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    </body>
</html>

