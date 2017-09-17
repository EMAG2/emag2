<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 10/09/2017
 * Time: 21:56
 */

class Chamados extends model
{

    public function getChamados()
    {
        $array = array();
        $sql = "SELECT * FROM chamados WHERE status IN (0,1)";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getChamado($id)
    {
        $array = array();
        if (!empty($id)) {
            $sql = "SELECT nome FROM chamados WHERE id = '$id'";
            $sql = $this->db->query($sql);
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
        }
        return $array;
    }

    public function updateStatus($id, $status)
    {
        if (!empty($id) && !empty($status)) {
            $sql = "UPDATE chamados SET status = '$status' WHERE id = '$id'";
            $this->db->query($sql);
        }
    }

    public function addChamado($ip, $nome, $data_inicio)
    {
        $id = 0;
        $sql = "ISERT INTO chamados SET ip = '$ip', nome = '$nome', data_inicio = '$data_inicio', status = '0'";
        $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
        return $id;
    }

}