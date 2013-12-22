<?php
class Utils{
    
    

	/**
	 * This function returns a json ready model, with the model relations included
	 * @param Yii model $model
	 * @return array:multitype:NULL
	 */
	public static function jsonReadyModel($model, $properties = null) {
		if ($model != null) {
			$relations = array();

			if (is_array($model)) {
				$merges = array();
				foreach ($model as $aModel) {
					$relations = array();

					$merges[] = Utils::jsonReadyModel($aModel, $properties);
				}
				return $merges;
			} else {
				foreach ($model->relations() as $key=> $related) {
					if ($model->hasRelated($key)) {
						$relations[$key] = Utils::jsonReadyModel($model->$key);
					}
				}
					$modelProperties = array();
				if ($properties != null) {
					foreach ($properties as $key=> $value) {
						if(property_exists($model, $key)){
							$model->$key = $model->{$key};
							$modelProperties[$key] = $model->{$key};
						}
					}
				}
				$return = array_merge($model->getAttributes(), $relations);
				$return = array_merge($return, $modelProperties);
				return $return;
			}
		} else {
			return array();
		}
	}
        
	public static function sendMail($view, $subject, $to = array(), $params = array(), $from = array()) {
		$message = New YiiMailMessage();
		$message->view = $view;
		//$message->viewExtension = '.html';
		$message->setBody($params, 'text/html', 'UTF-8');
		$message->setSubject($subject);
		if (count($from)) {
			$message->setFrom($from);
		} else {
			$message->setFrom(array(Yii::app()->params['noreplyEmail']=> Yii::app()->params['noreplyName']));
		}
		$message->setTo($to);
		return Yii::app()->mail->send($message);
	}
}