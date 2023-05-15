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
abstract class Kaltura_Client_Type_Social extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSocial';
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
		if(!is_null($xml) && count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(!is_null($jsonObject) && isset($jsonObject->firstName))
			$this->firstName = (string)$jsonObject->firstName;
		if(!is_null($xml) && count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(!is_null($jsonObject) && isset($jsonObject->lastName))
			$this->lastName = (string)$jsonObject->lastName;
		if(!is_null($xml) && count($xml->email))
			$this->email = (string)$xml->email;
		if(!is_null($jsonObject) && isset($jsonObject->email))
			$this->email = (string)$jsonObject->email;
		if(!is_null($xml) && count($xml->gender))
			$this->gender = (string)$xml->gender;
		if(!is_null($jsonObject) && isset($jsonObject->gender))
			$this->gender = (string)$jsonObject->gender;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->birthday))
			$this->birthday = (string)$xml->birthday;
		if(!is_null($jsonObject) && isset($jsonObject->birthday))
			$this->birthday = (string)$jsonObject->birthday;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->pictureUrl))
			$this->pictureUrl = (string)$xml->pictureUrl;
		if(!is_null($jsonObject) && isset($jsonObject->pictureUrl))
			$this->pictureUrl = (string)$jsonObject->pictureUrl;
	}
	/**
	 * Facebook identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Full name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * First name
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * Last name
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * User email
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * Gender
	 *
	 * @var string
	 */
	public $gender = null;

	/**
	 * User identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * User birthday
	 *
	 * @var string
	 */
	public $birthday = null;

	/**
	 * User model status
	 *             Possible values: UNKNOWN, OK, ERROR, NOACTION, NOTEXIST, CONFLICT, MERGE, MERGEOK, NEWUSER, MINFRIENDS, INVITEOK, INVITEERROR, ACCESSDENIED, WRONGPASSWORDORUSERNAME, UNMERGEOK, USEREMAILISMISSING
	 *
	 * @var string
	 * @readonly
	 */
	public $status = null;

	/**
	 * Profile picture URL
	 *
	 * @var string
	 */
	public $pictureUrl = null;


}

