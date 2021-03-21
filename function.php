<?php
    include 'koneksi.php';
    
    function query($query) {
        global $koneksi;
        $result =mysqli_query($koneksi, $query);
        $data =[];
        while($array = mysqli_fetch_assoc($result)){
            $data[] = $array;
        }
        return $data;
    }
?>