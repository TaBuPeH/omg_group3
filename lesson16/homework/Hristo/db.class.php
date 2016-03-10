<?php

class database
{
	private $host = 'localhost';
	private $user = 'root';
	private $password = '';
	private $db_name = 'group1';
	
	function __construct()
	{
		mysql_connect($this->host,$this->user,$this->password);
		mysql_select_db($this->db_name);
		
		mysql_query("SET NAMES 'utf8'");
	}
	
	function saveArray($table,$info)
	{
		
		foreach($info as $k=>$row)
		{
			if(isset($row['id']) && !empty($row['id']))
			{
				// we need to update a result with a given ID	
				$this->updateRow($table,$row);
			}
			else {
				
				$this->insertRow($table,$row);
				// we need to insert a new record in the database
			}
		}
	}
	
	function updateRow($table,$row)
	{
		$row['id'] = 4;
		$row['username'] = 'pesho';	
		$row['email'] = 'pesho@isdabest.com';	
		
		"UPDATE `table_name_goes_here` SET `col_0_from_row` = 'col_0_from_row_data', 
										   `col_1_from_row` = 'col_1_from_row_data'
										   ... repeat until last column
									   WHERE id = $row[id]
			";
		$query	= "UPDATE `".$table."` SET ";						   
		foreach($row as $key=>$value)
		{
			$query = $query." ".$key." = '".$value."' , ";
		}	
		
		$query = substr($query,0,strlen($query)-2);
		$query = $query . " WHERE id=".$row['id'];
		
		echo $query;
		exit;
	}
	
	function insertRow($table,$row)
	{
		
	}
	
	function fetchArray($query)
	{
		
		$result = mysql_query($query);
		
		$info = array();
		while(   $row = mysql_fetch_assoc($result)    )
		{
			$info[] = $row;
		}
		
		return $info;
	}
}

