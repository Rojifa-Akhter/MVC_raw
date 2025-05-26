<?php
class profileModel extends database
{

    public function addFruit($fruit)
    {
        if ($this->Query("INSERT INTO fruits (name, price, quality, userId)
        VALUES (?,?,?,?)", $fruit)) {
            return true;
        }
    }
    public function getData($userId)
    {
        if ($this->Query("SELECT * FROM fruits WHERE userId = ?", [$userId])) {
            $data = $this->fetchAll();

            return $data;
        }
    }
    public function edit_data($id, $userId)
    {
        if ($this->Query("SELECT * FROM fruits WHERE id = ? && userId = ?", [$id, $userId])) {
            $row = $this->fetch();
            return $row;
        }
    }
    public function updateFruit($updateData)
    {
        if ($this->Query("UPDATE fruits SET name = ? , price = ? , quality = ? WHERE id = ?
        AND userId = ? ", $updateData)) {

            return true;
        }
    }
    public function deleteFruit($id, $userId)
    {
        if ($this->Query("DELETE FROM fruits WHERE id = ? && userId = ?", [$id, $userId])) {
            return true;
        }
    }

}
