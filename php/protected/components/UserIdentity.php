<?php
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            $user = User::model()->findByAttributes(array('email'=>$this->username, 'password'=>  md5($this->password)));
            if(!isset($user)){
                $this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
            }else{
                $this->_id = $user->id;
                $this->errorCode=self::ERROR_NONE;
            }
            return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
}
