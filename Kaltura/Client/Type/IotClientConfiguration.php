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
class Kaltura_Client_Type_IotClientConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIotClientConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->identityPoolId))
		{
			if(isset($xml->identityPoolId->item) && count($xml->identityPoolId->item))
				$this->multiLingual_identityPoolId = Kaltura_Client_ParseUtils::unmarshalArray($xml->identityPoolId, '');
			else
				$this->identityPoolId = (string)$xml->identityPoolId;
		}
		if(count($xml->userPoolId))
		{
			if(isset($xml->userPoolId->item) && count($xml->userPoolId->item))
				$this->multiLingual_userPoolId = Kaltura_Client_ParseUtils::unmarshalArray($xml->userPoolId, '');
			else
				$this->userPoolId = (string)$xml->userPoolId;
		}
		if(count($xml->awsRegion))
		{
			if(isset($xml->awsRegion->item) && count($xml->awsRegion->item))
				$this->multiLingual_awsRegion = Kaltura_Client_ParseUtils::unmarshalArray($xml->awsRegion, '');
			else
				$this->awsRegion = (string)$xml->awsRegion;
		}
		if(count($xml->appClientId))
		{
			if(isset($xml->appClientId->item) && count($xml->appClientId->item))
				$this->multiLingual_appClientId = Kaltura_Client_ParseUtils::unmarshalArray($xml->appClientId, '');
			else
				$this->appClientId = (string)$xml->appClientId;
		}
		if(count($xml->legacyEndPoint))
		{
			if(isset($xml->legacyEndPoint->item) && count($xml->legacyEndPoint->item))
				$this->multiLingual_legacyEndPoint = Kaltura_Client_ParseUtils::unmarshalArray($xml->legacyEndPoint, '');
			else
				$this->legacyEndPoint = (string)$xml->legacyEndPoint;
		}
		if(count($xml->endPoint))
		{
			if(isset($xml->endPoint->item) && count($xml->endPoint->item))
				$this->multiLingual_endPoint = Kaltura_Client_ParseUtils::unmarshalArray($xml->endPoint, '');
			else
				$this->endPoint = (string)$xml->endPoint;
		}
		if(count($xml->thingName))
		{
			if(isset($xml->thingName->item) && count($xml->thingName->item))
				$this->multiLingual_thingName = Kaltura_Client_ParseUtils::unmarshalArray($xml->thingName, '');
			else
				$this->thingName = (string)$xml->thingName;
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
		if(count($xml->username))
		{
			if(isset($xml->username->item) && count($xml->username->item))
				$this->multiLingual_username = Kaltura_Client_ParseUtils::unmarshalArray($xml->username, '');
			else
				$this->username = (string)$xml->username;
		}
		if(count($xml->password))
		{
			if(isset($xml->password->item) && count($xml->password->item))
				$this->multiLingual_password = Kaltura_Client_ParseUtils::unmarshalArray($xml->password, '');
			else
				$this->password = (string)$xml->password;
		}
		if(count($xml->topics))
		{
			if(empty($xml->topics))
				$this->topics = array();
			else
				$this->topics = Kaltura_Client_ParseUtils::unmarshalArray($xml->topics, "KalturaKeyValue");
		}
		if(count($xml->status))
		{
			if(isset($xml->status->item) && count($xml->status->item))
				$this->multiLingual_status = Kaltura_Client_ParseUtils::unmarshalArray($xml->status, '');
			else
				$this->status = (string)$xml->status;
		}
		if(count($xml->message))
		{
			if(isset($xml->message->item) && count($xml->message->item))
				$this->multiLingual_message = Kaltura_Client_ParseUtils::unmarshalArray($xml->message, '');
			else
				$this->message = (string)$xml->message;
		}
	}
	/**
	 * IdentityPoolId
	 *
	 * @var string
	 */
	public $identityPoolId = null;

	/**
	 * UserPoolId
	 *
	 * @var string
	 */
	public $userPoolId = null;

	/**
	 * AwsRegion
	 *
	 * @var string
	 */
	public $awsRegion = null;

	/**
	 * appClientId
	 *
	 * @var string
	 */
	public $appClientId = null;

	/**
	 * legacyEndPoint
	 *
	 * @var string
	 */
	public $legacyEndPoint = null;

	/**
	 * endPoint
	 *
	 * @var string
	 */
	public $endPoint = null;

	/**
	 * thingName
	 *
	 * @var string
	 */
	public $thingName = null;

	/**
	 * thingArn
	 *
	 * @var string
	 */
	public $thingArn = null;

	/**
	 * thingId
	 *
	 * @var string
	 */
	public $thingId = null;

	/**
	 * username
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * password
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * topics
	 *
	 * @var array of KalturaKeyValue
	 */
	public $topics;

	/**
	 * status
	 *
	 * @var string
	 */
	public $status = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $message = null;


}

