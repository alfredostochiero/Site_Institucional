<?php
class Portfolio extends model {
    
    public function getTrabalhos($n='') {
        $array = array();
        
        $sql = "SELECT * FROM portifolio ";
        
        if(!empty($n)) {
            $sql .= "LIMIT ".$n;
        }
        
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            
            $array = $sql->fetchAll();
            
        }
        
        return $array;
    }
    
}