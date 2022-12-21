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
class Kaltura_Client_Type_AppToken extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAppToken';
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
		if(count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->sessionDuration))
			$this->sessionDuration = (int)$xml->sessionDuration;
		if(count($xml->hashType))
		{
			if(isset($xml->hashType->item) && count($xml->hashType->item))
				$this->multiLingual_hashType = Kaltura_Client_ParseUtils::unmarshalArray($xml->hashType, '');
			else
				$this->hashType = (string)$xml->hashType;
		}
		if(count($xml->sessionPrivileges))
		{
			if(isset($xml->sessionPrivileges->item) && count($xml->sessionPrivileges->item))
				$this->multiLingual_sessionPrivileges = Kaltura_Client_ParseUtils::unmarshalArray($xml->sessionPrivileges, '');
			else
				$this->sessionPrivileges = (string)$xml->sessionPrivileges;
		}
		if(count($xml->token))
		{
			if(isset($xml->token->item) && count($xml->token->item))
				$this->multiLingual_token = Kaltura_Client_ParseUtils::unmarshalArray($xml->token, '');
			else
				$this->token = (string)$xml->token;
		}
		if(count($xml->sessionUserId))
		{
			if(isset($xml->sessionUserId->item) && count($xml->sessionUserId->item))
				$this->multiLingual_sessionUserId = Kaltura_Client_ParseUtils::unmarshalArray($xml->sessionUserId, '');
			else
				$this->sessionUserId = (string)$xml->sessionUserId;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * The id of the application token
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Expiry time of current token (unix timestamp in seconds)
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Partner identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Expiry duration of KS (Kaltura Session) that created using the current token (in seconds)
	 *
	 * @var int
	 */
	public $sessionDuration = null;

	/**
	 * The hash type of the token
	 *
	 * @var Kaltura_Client_Enum_AppTokenHashType
	 */
	public $hashType = null;

	/**
	 * Comma separated privileges to be applied on KS (Kaltura Session) that created using the current token
	 *
	 * @var string
	 */
	public $sessionPrivileges = null;

	/**
	 * The application token
	 *
	 * @var string
	 * @readonly
	 */
	public $token = null;

	/**
	 * User id of KS (Kaltura Session) that created using the current token
	 *
	 * @var string
	 */
	public $sessionUserId = null;

	/**
	 * Create date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Update date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

