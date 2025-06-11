<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_TreeAnswer extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTreeAnswer';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->answerId))
			$this->answerId = (string)$xml->answerId;
		if(!is_null($jsonObject) && isset($jsonObject->answerId))
			$this->answerId = (string)$jsonObject->answerId;
		if(!is_null($xml) && count($xml->text))
			$this->text = (string)$xml->text;
		if(!is_null($jsonObject) && isset($jsonObject->text))
			$this->text = (string)$jsonObject->text;
		if(!is_null($xml) && count($xml->hasNextQuestion))
		{
			if(!empty($xml->hasNextQuestion) && ((int) $xml->hasNextQuestion === 1 || strtolower((string)$xml->hasNextQuestion) === 'true'))
				$this->hasNextQuestion = true;
			else
				$this->hasNextQuestion = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->hasNextQuestion))
		{
			if(!empty($jsonObject->hasNextQuestion) && ((int) $jsonObject->hasNextQuestion === 1 || strtolower((string)$jsonObject->hasNextQuestion) === 'true'))
				$this->hasNextQuestion = true;
			else
				$this->hasNextQuestion = false;
		}
		if(!is_null($xml) && count($xml->isSpecial))
		{
			if(!empty($xml->isSpecial) && ((int) $xml->isSpecial === 1 || strtolower((string)$xml->isSpecial) === 'true'))
				$this->isSpecial = true;
			else
				$this->isSpecial = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSpecial))
		{
			if(!empty($jsonObject->isSpecial) && ((int) $jsonObject->isSpecial === 1 || strtolower((string)$jsonObject->isSpecial) === 'true'))
				$this->isSpecial = true;
			else
				$this->isSpecial = false;
		}
		if(!is_null($xml) && count($xml->specialType))
			$this->specialType = (string)$xml->specialType;
		if(!is_null($jsonObject) && isset($jsonObject->specialType))
			$this->specialType = (string)$jsonObject->specialType;
	}
	/**
	 * Unique identifier for the answer.
	 *
	 * @var string
	 */
	public $answerId = null;

	/**
	 * The answer text to display to the user.
	 *
	 * @var string
	 */
	public $text = null;

	/**
	 * Boolean indicating if selecting this answer leads to another question.
	 *
	 * @var bool
	 */
	public $hasNextQuestion = null;

	/**
	 * Flag for special answers like &quot;I don&#39;t know&quot; (optional).
	 *
	 * @var bool
	 */
	public $isSpecial = null;

	/**
	 * The type of special answer, e.g., &quot;unsure&quot; (optional).
	 *
	 * @var string
	 */
	public $specialType = null;


}

