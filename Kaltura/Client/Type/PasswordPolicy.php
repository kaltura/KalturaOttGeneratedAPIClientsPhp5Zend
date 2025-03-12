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
class Kaltura_Client_Type_PasswordPolicy extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaPasswordPolicy';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->userRoleIds))
			$this->userRoleIds = (string)$xml->userRoleIds;
		if(!is_null($jsonObject) && isset($jsonObject->userRoleIds))
			$this->userRoleIds = (string)$jsonObject->userRoleIds;
		if(!is_null($xml) && count($xml->historyCount))
			$this->historyCount = (int)$xml->historyCount;
		if(!is_null($jsonObject) && isset($jsonObject->historyCount))
			$this->historyCount = (int)$jsonObject->historyCount;
		if(!is_null($xml) && count($xml->expiration))
			$this->expiration = (int)$xml->expiration;
		if(!is_null($jsonObject) && isset($jsonObject->expiration))
			$this->expiration = (int)$jsonObject->expiration;
		if(!is_null($xml) && count($xml->complexities))
		{
			if(empty($xml->complexities))
				$this->complexities = array();
			else
				$this->complexities = Kaltura_Client_ParseUtils::unmarshalArray($xml->complexities, "KalturaRegexExpression");
		}
		if(!is_null($jsonObject) && isset($jsonObject->complexities))
		{
			if(empty($jsonObject->complexities))
				$this->complexities = array();
			else
				$this->complexities = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->complexities, "KalturaRegexExpression");
		}
		if(!is_null($xml) && count($xml->lockoutFailuresCount))
			$this->lockoutFailuresCount = (int)$xml->lockoutFailuresCount;
		if(!is_null($jsonObject) && isset($jsonObject->lockoutFailuresCount))
			$this->lockoutFailuresCount = (int)$jsonObject->lockoutFailuresCount;
	}
	/**
	 * id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Comma separated UserRole Ids list which the policy is applied on
	 *
	 * @var string
	 */
	public $userRoleIds = null;

	/**
	 * The number of passwords that should be remembered for each user so that they cannot be reused.
	 *
	 * @var int
	 */
	public $historyCount = null;

	/**
	 * When should the password expire (will represent time as days).
	 *
	 * @var int
	 */
	public $expiration = null;

	/**
	 * array of  KalturaRegex
	 *
	 * @var Kaltura_Client_Type_RegexExpression[]
	 */
	public $complexities;

	/**
	 * the number of passwords failures before the account is locked.
	 *
	 * @var int
	 */
	public $lockoutFailuresCount = null;


}

