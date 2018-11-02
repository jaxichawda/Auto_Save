<?php

class Licence_Pack_model extends CI_Model
{
	public function add_Licence_Pack($post_Licence_Pack)
	{
		try{
		if($post_Licence_Pack)
		{
			if($post_Licence_Pack['tempid']>0){
				$this->db->where('Id',$post_Licence_Pack['tempid']);
				$res = $this->db->delete('tbltemp');
			}
			$Licence_Pack_data=array(
				"FirstName"=>trim($post_Licence_Pack['FirstName']),
				"LastName"=>trim($post_Licence_Pack['LastName']),
				"Email"=>trim($post_Licence_Pack['Email']),
				"ContactNo"=>trim($post_Licence_Pack['ContactNo']),
				"Designation"=>trim($post_Licence_Pack['Designation']),
				"Country"=>trim($post_Licence_Pack['Country']),
				"State"=>trim($post_Licence_Pack['State']),
				"City"=>trim($post_Licence_Pack['City']),
				"Address"=>trim($post_Licence_Pack['Address']),	
			);					
			$res=$this->db->insert('tbluser',$Licence_Pack_data);
			$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	}
	
	public function addTempData($post_Licence_Pack)
	{
		try{
		if($post_Licence_Pack)
		{
			if(isset($post_Licence_Pack['FirstName'])&&(!empty($post_Licence_Pack['FirstName'])))
			{
				$fnm=$post_Licence_Pack['FirstName'];
			}
			else{
				$fnm = '';
			}
			if(isset($post_Licence_Pack['LastName'])&&(!empty($post_Licence_Pack['LastName'])))
			{
				$lnm=$post_Licence_Pack['LastName'];
			}
			else{
				$lnm = '';
			}
			if(isset($post_Licence_Pack['Email'])&&(!empty($post_Licence_Pack['Email'])))
			{
				$email=$post_Licence_Pack['Email'];
			}
			else{
				$email = '';
			}
			if(isset($post_Licence_Pack['ContactNo'])&&(!empty($post_Licence_Pack['ContactNo'])))
			{
				$cno=$post_Licence_Pack['ContactNo'];
			}
			else{
				$cno = '';
			}
			if(isset($post_Licence_Pack['Designation'])&&(!empty($post_Licence_Pack['Designation'])))
			{
				$desi=$post_Licence_Pack['Designation'];
			}
			else{
				$desi = '';
			}
			if(isset($post_Licence_Pack['Country'])&&(!empty($post_Licence_Pack['Country'])))
			{
				$country=$post_Licence_Pack['Country'];
			}
			else{
				$country = '';
			}
			if(isset($post_Licence_Pack['State'])&&(!empty($post_Licence_Pack['State'])))
			{
				$state=$post_Licence_Pack['State'];
			}
			else{
				$state = '';
			}
			if(isset($post_Licence_Pack['City'])&&(!empty($post_Licence_Pack['City'])))
			{
				$city=$post_Licence_Pack['City'];
			}
			else{
				$city = '';
			}
			if(isset($post_Licence_Pack['Address'])&&(!empty($post_Licence_Pack['Address'])))
			{
				$add=$post_Licence_Pack['Address'];
			}
			else{
				$add = '';
			}
			$Licence_Pack_data=array(
				"FirstName"=>$fnm,
				"LastName"=>$lnm,
				"Email"=>$email,
				"ContactNo"=>$cno,
				"Designation"=>$desi,
				"Country"=>$country,
				"State"=>$state,
				"City"=>$city,
				"Address"=>$add,	
			);					
			$res=$this->db->insert('tbltemp',$Licence_Pack_data);
			$tempid = $this->db->insert_id();
			$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
			if($res)
			{
				return $tempid;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	}
	public function editTempData($post_Licence_Pack) {
		try{
	   if($post_Licence_Pack) {
		if(isset($post_Licence_Pack['FirstName'])&&(!empty($post_Licence_Pack['FirstName'])))
		{
			$fnm=$post_Licence_Pack['FirstName'];
		}
		else{
			$fnm = '';
		}
		if(isset($post_Licence_Pack['LastName'])&&(!empty($post_Licence_Pack['LastName'])))
		{
			$lnm=$post_Licence_Pack['LastName'];
		}
		else{
			$lnm = '';
		}
		if(isset($post_Licence_Pack['Email'])&&(!empty($post_Licence_Pack['Email'])))
		{
			$email=$post_Licence_Pack['Email'];
		}
		else{
			$email = '';
		}
		if(isset($post_Licence_Pack['ContactNo'])&&(!empty($post_Licence_Pack['ContactNo'])))
		{
			$cno=$post_Licence_Pack['ContactNo'];
		}
		else{
			$cno = '';
		}
		if(isset($post_Licence_Pack['Designation'])&&(!empty($post_Licence_Pack['Designation'])))
		{
			$desi=$post_Licence_Pack['Designation'];
		}
		else{
			$desi = '';
		}
		if(isset($post_Licence_Pack['Country'])&&(!empty($post_Licence_Pack['Country'])))
		{
			$country=$post_Licence_Pack['Country'];
		}
		else{
			$country = '';
		}
		if(isset($post_Licence_Pack['State'])&&(!empty($post_Licence_Pack['State'])))
		{
			$state=$post_Licence_Pack['State'];
		}
		else{
			$state = '';
		}
		if(isset($post_Licence_Pack['City'])&&(!empty($post_Licence_Pack['City'])))
		{
			$city=$post_Licence_Pack['City'];
		}
		else{
			$city = '';
		}
		if(isset($post_Licence_Pack['Address'])&&(!empty($post_Licence_Pack['Address'])))
		{
			$add=$post_Licence_Pack['Address'];
		}
		else{
			$add = '';
		}
		$Licence_Pack_data=array(
			"FirstName"=>$fnm,
			"LastName"=>$lnm,
			"Email"=>$email,
			"ContactNo"=>$cno,
			"Designation"=>$desi,
			"Country"=>$country,
			"State"=>$state,
			"City"=>$city,
			"Address"=>$add,	
		);		
		   
		   $this->db->where('Id',$post_Licence_Pack['tempid']);
		   $res = $this->db->update('tbltemp',$Licence_Pack_data);
		   $db_error = $this->db->error();
			   if (!empty($db_error) && !empty($db_error['code'])) { 
				   throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
				   return false; // unreachable return statement !!!
			   }
		   if($res) 
		   {
			   return true;
		   } 
		   else
		   {
			   return false;
		   }
	   }
	   else 
	   {
		   return false;
	   }	
   }
   catch(Exception $e){
	   trigger_error($e->getMessage(), E_USER_ERROR);
	   return false;
   }
   
   }
	public function get_Licence_Packdata($Licence_Pack_id=Null)
	{
	  try{
	  if($Licence_Pack_id)
	  {
		$this->db->select('u.UserId,u.FirstName,u.LastName,u.Email,u.ContactNo,u.Designation,u.Country,u.State,u.City,u.Address');
		 $this->db->where('u.UserId',$Licence_Pack_id);
		 $result=$this->db->get('tbluser u');
		 $db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
		 $company_data= array();
		 foreach($result->result() as $row)
		 {
			$company_data=$row;			
		 }
		 return $company_data;		 
	  }
	  else
	  {
		return false;
	  }
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	}
	public function getTempById($Licence_Pack_id=Null)
	{
	  try{
	  if($Licence_Pack_id)
	  {
		$this->db->select('u.Id,u.FirstName,u.LastName,u.Email,u.ContactNo,u.Designation,u.Country,u.State,u.City,u.Address');
		 $this->db->where('u.Id',$Licence_Pack_id);
		 $result=$this->db->get('tbltemp u');
		 $db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
		 $company_data= array();
		 foreach($result->result() as $row)
		 {
			$company_data=$row;			
		 }
		 return $company_data;		 
	  }
	  else
	  {
		return false;
	  }
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	}
	 public function edit_Licence_Pack($post_Licence_Pack) {
		 try{
		if($post_Licence_Pack) {
			$Licence_Pack_data=array(
				"FirstName"=>trim($post_Licence_Pack['FirstName']),
				"LastName"=>trim($post_Licence_Pack['LastName']),
				"Email"=>trim($post_Licence_Pack['Email']),
				"ContactNo"=>trim($post_Licence_Pack['ContactNo']),
				"Designation"=>trim($post_Licence_Pack['Designation']),
				"Country"=>trim($post_Licence_Pack['Country']),
				"State"=>trim($post_Licence_Pack['State']),
				"City"=>trim($post_Licence_Pack['City']),
				"Address"=>trim($post_Licence_Pack['Address']),	
			);	
			
			$this->db->where('UserId',trim($post_Licence_Pack['UserId']));
			$res = $this->db->update('tbluser',$Licence_Pack_data);
			$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
			if($res) 
			{
				$log_data = array(
					'UserId' => trim($post_Licence_Pack['UpdatedBy']),
					'Module' => 'Licence Pack',
					'Activity' =>'Update'
				);
				$log = $this->db->insert('tblactivitylog',$log_data);
				return true;
			} 
			else
			{
				return false;
			}
		}
		else 
		{
			return false;
		}	
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	
	}
	
	public function getlist_Licence_Pack()
	{
		try{
		$this->db->select('u.UserId,u.FirstName,u.LastName,u.Email,u.ContactNo,u.Designation,u.Country,u.State,u.City,u.Address');
		$result=$this->db->get('tbluser u');
		$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
		$res=array();
		if($result->result())
		{
			$res=$result->result();
		}
		return $res;
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	}
	public function getTempData()
	{
		try{
		$this->db->select('u.Id,u.FirstName,u.LastName,u.Email,u.ContactNo,u.Designation,u.Country,u.State,u.City,u.Address');
		$result=$this->db->get('tbltemp u');
		$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
		$res=array();
		if($result->result())
		{
			$res=$result->result();
		}
		return $res;
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
	}
	
	public function delete_Licence_Pack($post_Licence_Pack) 
	{	
		try{
		if($post_Licence_Pack) 
		{			
			$this->db->where('LicensePackId',$post_Licence_Pack['id']);
			$res = $this->db->delete('tblmstlicensepack');
			$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
			if($res) {
				$log_data = array(
					'UserId' => trim($post_Licence_Pack['Userid']),
					'Module' => 'Licence Pack',
					'Activity' =>'Delete'
				);
				$log = $this->db->insert('tblactivitylog',$log_data);
				return true;
			} else {
				return false;
			}
		} 
		else 
		{
			return false;
		}
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}
		
	}
	
	public function getlist_discount() {
		try{
		$this->db->select('DiscountId,Name,Value,IsActive');
		$result = $this->db->get('tblmstdiscount');
		$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
		$res = array();
		if($result->result()) {
			$res = $result->result();
		}
		return $res;
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}		
	}

	public function getlist_licencetype() {
		try{
		$this->db->select('ConfigurationId,Key,Value,DisplayOrder,IsActive');
		$this->db->where('Key','LicenceType');
		$this->db->order_by('DisplayOrder','asc');
		$result = $this->db->get('tblmstconfiguration');
		$db_error = $this->db->error();
			if (!empty($db_error) && !empty($db_error['code'])) { 
				throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
				return false; // unreachable return statement !!!
			}
		$res = array();
		if($result->result()) {
			$res = $result->result();
		}
		return $res;
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}		
	}	
	public function isActiveChange($post_data) {
		try{
		if($post_data) {
			if(trim($post_data['IsActive'])==1){
				$IsActive = true;
			} else {
				$IsActive = false;
			}
			$data = array(
				'IsActive' => $IsActive,
				'UpdatedBy' => trim($post_data['UpdatedBy']),
				'UpdatedOn' => date('y-m-d H:i:s'),
			);			
			$this->db->where('LicensePackId',trim($post_data['LicensePackId']));
			$res = $this->db->update('tblmstlicensepack',$data);
			$db_error = $this->db->error();
			if (!empty($db_error) && !empty($db_error['code'])) { 
				throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
				return false; // unreachable return statement !!!
			}
			if($res) {
				$log_data = array(
					'UserId' => trim($post_data['UpdatedBy']),
					'Module' => 'Category',
					'Activity' =>'Update'
				);
				$log = $this->db->insert('tblactivitylog',$log_data);
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}	
	
	}
}