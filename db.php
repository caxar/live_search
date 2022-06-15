<?PHP 

    $username = 'root';
    $password = '';
    $host = 'localhost';
    $db = 'live_search';

    $dsn = new PDO('mysql:host='.$host.';dbname='.$db, $username, $password);
    











// class Db {
//     private $username = 'root';
//     private $password = '';
//     private $host = 'localhost';
//     private $db = 'dbname';
//     private $con;

//     public function __construct() {
//         $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;

//         try {
//             $this->con = new PDO($dsn, $this->username, $this->password);
//             $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo 'Successfull connect';
//         } catch(PDOException $e) {
//             echo 'Connection failed:' . $e->getMessage();
//         }
//     }

// }