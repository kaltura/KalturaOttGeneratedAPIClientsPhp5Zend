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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
		{
			if(isset($xml->id->item) && count($xml->id->item))
				$this->multiLingual_id = Kaltura_Client_ParseUtils::unmarshalArray($xml->id, '');
			else
				$this->id = (string)$xml->id;
		}
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->firstName))
		{
			if(isset($xml->firstName->item) && count($xml->firstName->item))
				$this->multiLingual_firstName = Kaltura_Client_ParseUtils::unmarshalArray($xml->firstName, '');
			else
				$this->firstName = (string)$xml->firstName;
		}
		if(count($xml->lastName))
		{
			if(isset($xml->lastName->item) && count($xml->lastName->item))
				$this->multiLingual_lastName = Kaltura_Client_ParseUtils::unmarshalArray($xml->lastName, '');
			else
				$this->lastName = (string)$xml->lastName;
		}
		if(count($xml->email))
		{
			if(isset($xml->email->item) && count($xml->email->item))
				$this->multiLingual_email = Kaltura_Client_ParseUtils::unmarshalArray($xml->email, '');
			else
				$this->email = (string)$xml->email;
		}
		if(count($xml->gender))
		{
			if(isset($xml->gender->item) && count($xml->gender->item))
				$this->multiLingual_gender = Kaltura_Client_ParseUtils::unmarshalArray($xml->gender, '');
			else
				$this->gender = (string)$xml->gender;
		}
		if(count($xml->userId))
		{
			if(isset($xml->userId->item) && count($xml->userId->item))
				$this->multiLingual_userId = Kaltura_Client_ParseUtils::unmarshalArray($xml->userId, '');
			else
				$this->userId = (string)$xml->userId;
		}
		if(count($xml->birthday))
		{
			if(isset($xml->birthday->item) && count($xml->birthday->item))
				$this->multiLingual_birthday = Kaltura_Client_ParseUtils::unmarshalArray($xml->birthday, '');
			else
				$this->birthday = (string)$xml->birthday;
		}
		if(count($xml->status))
		{
			if(isset($xml->status->item) && count($xml->status->item))
				$this->multiLingual_status = Kaltura_Client_ParseUtils::unmarshalArray($xml->status, '');
			else
				$this->status = (string)$xml->status;
		}
		if(count($xml->pictureUrl))
		{
			if(isset($xml->pictureUrl->item) && count($xml->pictureUrl->item))
				$this->multiLingual_pictureUrl = Kaltura_Client_ParseUtils::unmarshalArray($xml->pictureUrl, '');
			else
				$this->pictureUrl = (string)$xml->pictureUrl;
		}
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

