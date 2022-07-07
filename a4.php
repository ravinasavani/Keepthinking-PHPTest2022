<?php

//1
$obj->delete('_conf_node_type_xrefs', array('node_id' => 1));
$query = "DELETE FROM _conf_node_type_xrefs WHERE node_id = '1'";

// //2
$cluster = array(
    'name' => 'Default',
    'reference' => 'default'
);
$this->db->update('_conf_cluster', $cluster, "id = 2");

$query = "Update _conf_cluster1 SET name = '" . $cluster['name'] . "',reference = '" . $cluster['reference'] . "' WHERE id = 2";

//3
$query = $this->db->select("tx.id, tx.type_id, t.name, tx.source_node_ids, tx.grouping")
    ->from('_conf_type_xrefs tx')
    ->join('_conf_type t', 't.id = tx.source_type_id', 'left')
    ->where('tx.type_id', $type_id)
    ->order_by('cast(tx.grouping as unsigned), tx.rank');

$query = "SELECT tx.id, tx.type_id, t.name, tx.source_node_ids, tx.grouping FROM _conf_type_xrefs tx LEFT JOIN _conf_type t ON t.id = tx.source_type_id WHERE tx.type_id = $type_id ORDER BY cast(tx.grouping AS unsigned), tx.rank";

// 4
$type = array(
    'name' => 'Test',
    'table' => 'test'
);
$this->db->insert('_conf_type', $type);

$query = "INSERT INTO _conf_type(name, table) VALUES('" . $type['name'] . "', '" . $type['table'] . "')";
