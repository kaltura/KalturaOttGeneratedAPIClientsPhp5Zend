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
			$this->identityPoolId = (string)$xml->identityPoolId;
		if(count($xml->userPoolId))
			$this->userPoolId = (string)$xml->userPoolId;
		if(count($xml->awsRegion))
			$this->awsRegion = (string)$xml->awsRegion;
		if(count($xml->appClientId))
			$this->appClientId = (string)$xml->appClientId;
		if(count($xml->endPoint))
			$this->endPoint = (string)$xml->endPoint;
		if(count($xml->thingName))
			$this->thingName = (string)$xml->thingName;
		if(count($xml->thingArn))
			$this->thingArn = (string)$xml->thingArn;
		if(count($xml->thingId))
			$this->thingId = (string)$xml->thingId;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->topics))
		{
			if(empty($xml->topics))
				$this->topics = array();
			else
				$this->topics = Kaltura_Client_ParseUtils::unmarshalArray($xml->topics, "KalturaStringValue");
		}
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->message))
			$this->message = (string)$xml->message;
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
	 * @var array of KalturaStringValue
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

