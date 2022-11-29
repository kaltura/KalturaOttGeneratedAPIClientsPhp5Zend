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
class Kaltura_Client_Type_Iot extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaIot';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->udid))
		{
			if(isset($xml->udid->item) && count($xml->udid->item))
				$this->multiLingual_udid = Kaltura_Client_ParseUtils::unmarshalArray($xml->udid, '');
			else
				$this->udid = (string)$xml->udid;
		}
		if(count($xml->accessKey))
		{
			if(isset($xml->accessKey->item) && count($xml->accessKey->item))
				$this->multiLingual_accessKey = Kaltura_Client_ParseUtils::unmarshalArray($xml->accessKey, '');
			else
				$this->accessKey = (string)$xml->accessKey;
		}
		if(count($xml->accessSecretKey))
		{
			if(isset($xml->accessSecretKey->item) && count($xml->accessSecretKey->item))
				$this->multiLingual_accessSecretKey = Kaltura_Client_ParseUtils::unmarshalArray($xml->accessSecretKey, '');
			else
				$this->accessSecretKey = (string)$xml->accessSecretKey;
		}
		if(count($xml->username))
		{
			if(isset($xml->username->item) && count($xml->username->item))
				$this->multiLingual_username = Kaltura_Client_ParseUtils::unmarshalArray($xml->username, '');
			else
				$this->username = (string)$xml->username;
		}
		if(count($xml->userPassword))
		{
			if(isset($xml->userPassword->item) && count($xml->userPassword->item))
				$this->multiLingual_userPassword = Kaltura_Client_ParseUtils::unmarshalArray($xml->userPassword, '');
			else
				$this->userPassword = (string)$xml->userPassword;
		}
		if(count($xml->identityId))
		{
			if(isset($xml->identityId->item) && count($xml->identityId->item))
				$this->multiLingual_identityId = Kaltura_Client_ParseUtils::unmarshalArray($xml->identityId, '');
			else
				$this->identityId = (string)$xml->identityId;
		}
		if(count($xml->thingArn))
		{
			if(isset($xml->thingArn->item) && count($xml->thingArn->item))
				$this->multiLingual_thingArn = Kaltura_Client_ParseUtils::unmarshalArray($xml->thingArn, '');
			else
				$this->thingArn = (string)$xml->thingArn;
		}
		if(count($xml->thingId))
		{
			if(isset($xml->thingId->item) && count($xml->thingId->item))
				$this->multiLingual_thingId = Kaltura_Client_ParseUtils::unmarshalArray($xml->thingId, '');
			else
				$this->thingId = (string)$xml->thingId;
		}
		if(count($xml->principal))
		{
			if(isset($xml->principal->item) && count($xml->principal->item))
				$this->multiLingual_principal = Kaltura_Client_ParseUtils::unmarshalArray($xml->principal, '');
			else
				$this->principal = (string)$xml->principal;
		}
		if(count($xml->endPoint))
		{
			if(isset($xml->endPoint->item) && count($xml->endPoint->item))
				$this->multiLingual_endPoint = Kaltura_Client_ParseUtils::unmarshalArray($xml->endPoint, '');
			else
				$this->endPoint = (string)$xml->endPoint;
		}
		if(count($xml->extendedEndPoint))
		{
			if(isset($xml->extendedEndPoint->item) && count($xml->extendedEndPoint->item))
				$this->multiLingual_extendedEndPoint = Kaltura_Client_ParseUtils::unmarshalArray($xml->extendedEndPoint, '');
			else
				$this->extendedEndPoint = (string)$xml->extendedEndPoint;
		}
		if(count($xml->identityPoolId))
		{
			if(isset($xml->identityPoolId->item) && count($xml->identityPoolId->item))
				$this->multiLingual_identityPoolId = Kaltura_Client_ParseUtils::unmarshalArray($xml->identityPoolId, '');
			else
				$this->identityPoolId = (string)$xml->identityPoolId;
		}
	}
	/**
	 * id
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * accessKey
	 *
	 * @var string
	 */
	public $accessKey = null;

	/**
	 * accessSecretKey
	 *
	 * @var string
	 */
	public $accessSecretKey = null;

	/**
	 * Username
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * UserPassword
	 *
	 * @var string
	 */
	public $userPassword = null;

	/**
	 * IdentityId
	 *
	 * @var string
	 */
	public $identityId = null;

	/**
	 * ThingArn
	 *
	 * @var string
	 */
	public $thingArn = null;

	/**
	 * ThingId
	 *
	 * @var string
	 */
	public $thingId = null;

	/**
	 * Principal
	 *
	 * @var string
	 */
	public $principal = null;

	/**
	 * EndPoint
	 *
	 * @var string
	 */
	public $endPoint = null;

	/**
	 * ExtendedEndPoint
	 *
	 * @var string
	 */
	public $extendedEndPoint = null;

	/**
	 * IdentityPoolId
	 *
	 * @var string
	 */
	public $identityPoolId = null;


}

