<?php
class DB{
    //singelton == 1 instanz bei öfteren aufrufen
    private static $db = null;

    private function __construct()
    {
        //soll nicht ausführbar sein
    }

    public static function getDB(){
    
        if(self::$db == NULL){
            try{
                self::$db = new  PDO('mysql:host=localhost;dbname=person_adresse_auto', 'root');
                self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                    echo $e->getMessage();
            }
        }
        return self::$db;
    }

} 