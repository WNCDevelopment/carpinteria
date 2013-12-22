<?php
class WebUser extends CWebUser {

	// Store model to not repeat query.
	private $_model;


	function getUsername(){
            $user = $this->loadUser($this->id);
            return $user->email;
	}

	// Load user model.
	protected function loadUser($id=null)
	{
            if($this->_model===null && $id!==null)
            {                    
                $this->_model=User::model()->findByPk($id);                                            
            }
            return $this->_model;
	}
	
}