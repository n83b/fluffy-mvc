<?php

class Poop extends Model{

    public function showPoop($id)
    {
        $db = db::getBdd()->query('select * from poop where id = ' . $id);
        return $db->fetch(PDO::FETCH_ASSOC);
    }
}