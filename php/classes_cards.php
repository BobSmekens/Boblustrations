<?php
class card_artistcard {
    private $artist_name;
    private $artist_style;
    private $artist_type;
    private $artist_url;
    private $artist_id;

    public function __construct($name, $style, $type, $url, $id){
    $this->artist_name = $name;
    $this->artist_style = $style;
    $this->artist_type = $type;
    $this->artist_url = $url;
    $this->artist_id = $id;
    }

    public function echoCard() {
        echo 
        '<div class="artistpage-container">      
            <div class="artistpage-txt">
                <div class="artistpage-name">' . $this->artist_name . '</div>
                <div class="artistpage-description">' . $this->artist_style . ' / '.
            $this->artist_type . '</div>
            </div>
            <div class="artistpage-img artistpage-txt">
                <img src="' . $this->artist_url . '" alt="">
            </div>
            <div class="artistpage-link"><a href="php/singleartist.php?artist_id='. $this->artist_id . '">VIEW ARTIST</a></div>

        </div>';
    }
}

class Db_connect {
    private $servername = "localhost"; 
    private $username = "root";
    private $password = "";
    private $database = "boblustrations";
    protected $database_connection; 
    
    public function Connect_innit() {
        try{
        $conn = new PDO("mysql:host=" . $this->servername.";dbname=".$this->database,$this->username,$this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->database_connection = $conn;
        echo "connect succesfully";
        }
        catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
}

?>