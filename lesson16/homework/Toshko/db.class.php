<?php
	class database
	{
		private $config = array(
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'database'=>'shop',
			'encoding'=> 'utf8'
		);
		
		private $dbHandle = null;
		
		function __construct($config=array())
		{
			if(!empty($config))
			{
				$this->config = $config;
			}
			
			$this->dbHandle = mysqli_connect($this->config['host'],$this->config['user'],$this->config['pass']);
			mysqli_select_db( $this->dbHandle, $this->config['database']);
			
			mysqli_query($this->dbHandle, "SET NAMES '".$this->config['encoding']."'");
			
		}
		
		
		function fetchArray($query)
		{
			
			$result = mysqli_query($this->dbHandle, $query);
			
			$info = array();
			while($row = mysqli_fetch_assoc($result))
			{
				$info[] = $row;
			}
			
			return $info;
			
		}
		
		
		function saveArray($table,$info)
		{
			//$table = 'products';
			
			foreach($info as $key=>$row)
			{
				if(isset($row['id']) && $row['id']>0)
				{
					// update
					$this->updateRow($table, $row);
				}
				else
				{
					// insert
					$this->insertRow($table, $row);
				}
			}
		}
		
		function updateRow($table, $row)
		{
			$query = "UPDATE `".$table."` SET ";
			
			$conditions = array();
			foreach($row as $dbField=>$dbValue)
			{
				$conditions[] = " `".$table."`.`".$dbField."` = '".$dbValue."'";
			}
			
			$query .= implode(',', $conditions);
			
			$query .= " WHERE `".$table."`.`id` = '".$row['id']."'";
			
			mysqli_query($this->dbHandle, $query);
			
		}
		
		function insertRow($table, $row)
		{	
			$query = "INSERT INTO `".$table."` (";

			$conditions = array();
			$values = array();

			foreach($row as $dbField=>$dbValue)
			{
				$conditions[] = " `".$dbField."`";
				$values[] = " '".$dbValue."'";
			}

			$query .= implode(',', $conditions);
			$query .= ") VALUES (";
			$query .= implode(',', $values);
			$query .= ")";

			mysqli_query($this->dbHandle, $query);
		}
		
		function deleteRow($table, $where, $searchBy)
		{
			$query = "DELETE FROM `".$table."` WHERE `".$searchBy."` = '".$where."'";
			mysqli_query($this->dbHandle, $query);
		}
	}

	$db = new database();
	
	/*
	$info[0]['ID'] = '0';
	$info[0]['name'] = 'tomatoes';
	$info[0]['price'] = '1.5';
	$info[0]['quantity'] = '10';

	$info[1]['id'] = 0;
	$info[1]['name'] = 'cucumbers';
	$info[1]['price'] = 1;
	$info[1]['quantity'] = 20;

	$info[2]['id'] = 13;
	$info[2]['name'] = 'potatoes';
	$info[2]['price'] = 0.8;
	$info[2]['quantity'] = 15;

	$deleteName = 'bager';
	$searchName = 'name';

	$db->deleteRow('products', $info);
	$db->deleteRow('products', $deleteName, $searchName);
	*/
?>