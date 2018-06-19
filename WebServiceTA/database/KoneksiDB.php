<?php

class KoneksiDB {
    public static $host = "localhost";
    public static $username = "root";
    public static $password = "";
    public static $namadb = "dbAlarm";

    public static $koneksi = false;
    
    public static function sambungkan() {
        if(!self::$koneksi) {
            self::$koneksi = mysqli_connect(self::$host, self::$username,
            self::$password, self::$namadb);
        }
        else {
            echo "Koneksi Gagal";
        }
        return self::$koneksi;
    }
    
    public static function dapatkanKoneksi(){
        return self::$koneks;
    }
}
?>


