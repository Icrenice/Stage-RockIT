<?php
//Klasse DB wordt aangemaakt
class DB
{
    //Conn kan alleen aangeroepen worden in de klasse
    protected $conn;

    //connectie funcie
    public function conn()
    {
        try {
            //DB Gebruiker
            $username = 'root';

            //DB Wachtwoord
            $wachtwoord = '';

            //PDO Configuratie
            $options = [
                PDO::ATTR_EMULATE_PREPARES => false, // Zet emulatie uit voor echte prepared statements
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //enables errors for debugging
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Zet fetch automatisch op array
            ];
            //Host configuratie
            $dsn = "mysql:host=localhost;dbname=bbl;charset=utf8mb4";
            //Create PDO
            $this->conn = new PDO($dsn, $username, $wachtwoord, $options);

            return true;

            $this->conn = NULL;
        } catch (PDOException $e) {
            //Database connectie error
            exit('Er ging iets mis...');
            //stuurt variabel terug
            return $e;
        }
    }
}
class Np extends DB
{

    public $NPid;
    public $geslacht;
    public $titel;
    public $geboortedatum;
    public $voornaam;
    public $tussenvoegsel;
    public $achternaam;
    public $straat;
    public $huisnummer;
    public $huisnummertvg;
    public $postcode;
    public $plaats;
    public $land;
    public $email;
    public $telnmr;
    public $mobnmr;





    public function create($geslacht, $titel, $geboortedatum, $voornaam, $tussenvoegsel, $achternaam, $straat, $huisnummer, $huisnummertvg, $postcode, $plaats, $land, $telnmr, $mobnmr, $email, $wachtwoord)
    {
        //Hash wachtwoord
        $hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
        try {
            // maak een connectie met de database
            $this->conn();
            // sql query defineren
            $sql = "INSERT INTO np (geslacht, titel, geboortedatum, voornaam, tussenvoegsel, achternaam, straat, huisnummer, huisnummertvg, postcode, plaats, land, telefoonnmr, mobielnmr, email, wachtwoord) VALUES (:geslacht, :titel, :geboortedatum, :voornaam, :tussenvoegsel, :achternaam, :straat, :huisnummer, :huisnummertvg, :postcode, :plaats, :land, :telefoonnmr, :mobielnmr, :email, :wachtwoord)";
            // sql voorbereiden
            $stmt = $this->conn->prepare($sql);
            // waardes verbinden met de named placeholders
            $stmt->bindParam(":geslacht", $geslacht);
            $stmt->bindParam(":titel", $titel);
            $stmt->bindParam(":geboortedatum", $geboortedatum);
            $stmt->bindParam(":voornaam", $voornaam);
            $stmt->bindParam(":tussenvoegsel", $tussenvoegsel);
            $stmt->bindParam(":achternaam", $achternaam);
            $stmt->bindParam(":straat", $straat);
            $stmt->bindParam(":huisnummer", $huisnummer);
            $stmt->bindParam(":huisnummertvg", $huisnummertvg);
            $stmt->bindParam(":postcode", $postcode);
            $stmt->bindParam(":plaats", $plaats);
            $stmt->bindParam(":land", $land);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telefoonnmr", $telnmr);
            $stmt->bindParam(":mobielnmr", $mobnmr);
            $stmt->bindParam(":wachtwoord", $hash);
            //SQL query daadwerkelijk uitvoeren
            $stmt->execute();
            //Zet verbinding op NULL
            $this->conn = NULL;
        } catch (PDOException $e) {

            return $e;
        }
    }
    public function login($email, $wachtwoord)
    {
        try {
            // maak een connectie met de database
            $this->conn();
            // sql query defineren
            $sql = "SELECT * FROM np WHERE email = :email";
            // sql voorbereiden
            $stmt = $this->conn->prepare($sql);
            // waardes verbinden met de named placeholders
            $stmt->bindParam(":email", $email);
            // sql query daadwerkelijk uitvoeren
            $stmt->execute();
            // data ophalen
            $data = $stmt->fetch();

            $this->conn = NULL;
            // controleren of het ingetypte wachtwoord overeenkomt met die in de database
            if (password_verify($wachtwoord, $data['wachtwoord'])) {
                // class variabelen invullen
                $this->NPid = $data['NPid'];
                $this->geslacht = $data['geslacht'];
                $this->titel = $data['titel'];
                $this->geboortedatum = $data['geboortedatum'];
                $this->voornaam = $data['voornaam'];
                $this->tussenvoegsel = $data['tussenvoegsel'];
                $this->achternaam = $data['achternaam'];
                $this->straat = $data['straat'];
                $this->huisnummer = $data['huisnummer'];
                $this->huisnummertvg = $data['huisnummertvg'];
                $this->postcode = $data['postcode'];
                $this->plaats = $data['plaats'];
                $this->land = $data['land'];
                $this->email = $data['email'];
                $this->telnmr = $data['telefoonnmr'];
                $this->mobnmr = $data['mobielnmr'];


                // status terugsturen
                return true;
            } else {

                return "Email of wachtwoord is fout";
            }
        } catch (PDOException $e) {
            $this->conn = NULL;
            // status terugsturen
            return $e;
        }
    }
}
class coach extends np{

}
class admin extends coach
{
    private $code;

    public function create_code($code)
    {
        //Hash code
        $hash = password_hash($code, PASSWORD_DEFAULT);
        try {
            // maak een connectie met de database
            $this->conn();
            // sql query defineren
            $sql = "INSERT INTO admincode (code) VALUES (:code)";
            // sql voorbereiden
            $stmt = $this->conn->prepare($sql);
            // waardes verbinden met de named placeholders
            $stmt->bindParam(":code", $hash);
            //SQL query daadwerkelijk uitvoeren
            $stmt->execute();
            //Zet verbinding op NULL
            $this->conn = NULL;
        } catch (PDOException $e) {

            return $e;
        }
    }
    public function getNps($code)
    {
        try {
            // maak een connectie met de database
            $this->conn();
            // sql query defineren
            $sql = "SELECT * FROM admincode";
            // sql voorbereiden
            $stmt = $this->conn->prepare($sql);

            // sql query daadwerkelijk uitvoeren
            $stmt->execute();
            // data ophalen
            $code = $stmt->fetch();

            $this->conn = NULL;
            // controleren of het ingetypte wachtwoord overeenkomt met die in de database
            if (password_verify($code, $code['code'])) {
                // maak een connectie met de database
                $this->conn();
                // sql query defineren
                $sql2 = "SELECT * FROM np";/*ORDER BY geboortedatum ASC*/
                // sql voorbereiden
                $stmt2 = $this->conn->prepare($sql);
                //Voer SQL uit
                $stmt2->execute();
                // data ophalen
                $data = $stmt2->fetchAll();
                // database connectie sluiten
                $this->conn = NULL;

                // opgehaalde rijen terugsturen
                return $data;
            } else {

                return "er zijn geen jongeren gevonden";
            }
        } catch (PDOException $e) {
            $this->conn = NULL;
            // status terugsturen
            return $e;
        }
    }
}
