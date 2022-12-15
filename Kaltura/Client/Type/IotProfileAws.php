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
class Kaltura_Client_Type_IotProfileAws extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaIotProfileAws';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->iotEndPoint))
		{
			if(isset($xml->iotEndPoint->item) && count($xml->iotEndPoint->item))
				$this->multiLingual_iotEndPoint = Kaltura_Client_ParseUtils::unmarshalArray($xml->iotEndPoint, '');
			else
				$this->iotEndPoint = (string)$xml->iotEndPoint;
		}
		if(count($xml->accessKeyId))
		{
			if(isset($xml->accessKeyId->item) && count($xml->accessKeyId->item))
				$this->multiLingual_accessKeyId = Kaltura_Client_ParseUtils::unmarshalArray($xml->accessKeyId, '');
			else
				$this->accessKeyId = (string)$xml->accessKeyId;
		}
		if(count($xml->secretAccessKey))
		{
			if(isset($xml->secretAccessKey->item) && count($xml->secretAccessKey->item))
				$this->multiLingual_secretAccessKey = Kaltura_Client_ParseUtils::unmarshalArray($xml->secretAccessKey, '');
			else
				$this->secretAccessKey = (string)$xml->secretAccessKey;
		}
		if(count($xml->userPoolId))
		{
			if(isset($xml->userPoolId->item) && count($xml->userPoolId->item))
				$this->multiLingual_userPoolId = Kaltura_Client_ParseUtils::unmarshalArray($xml->userPoolId, '');
			else
				$this->userPoolId = (string)$xml->userPoolId;
		}
		if(count($xml->clientId))
		{
			if(isset($xml->clientId->item) && count($xml->clientId->item))
				$this->multiLingual_clientId = Kaltura_Client_ParseUtils::unmarshalArray($xml->clientId, '');
			else
				$this->clientId = (string)$xml->clientId;
		}
		if(count($xml->identityPoolId))
		{
			if(isset($xml->identityPoolId->item) && count($xml->identityPoolId->item))
				$this->multiLingual_identityPoolId = Kaltura_Client_ParseUtils::unmarshalArray($xml->identityPoolId, '');
			else
				$this->identityPoolId = (string)$xml->identityPoolId;
		}
		if(count($xml->region))
		{
			if(isset($xml->region->item) && count($xml->region->item))
				$this->multiLingual_region = Kaltura_Client_ParseUtils::unmarshalArray($xml->region, '');
			else
				$this->region = (string)$xml->region;
		}
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * iotEndPoint
	 *
	 * @var string
	 */
	public $iotEndPoint = null;

	/**
	 * accessKeyId
	 *
	 * @var string
	 */
	public $accessKeyId = null;

	/**
	 * secretAccessKey
	 *
	 * @var string
	 */
	public $secretAccessKey = null;

	/**
	 * userPoolId
	 *
	 * @var string
	 */
	public $userPoolId = null;

	/**
	 * clientId
	 *
	 * @var string
	 */
	public $clientId = null;

	/**
	 * identityPoolId
	 *
	 * @var string
	 */
	public $identityPoolId = null;

	/**
	 * region
	 *
	 * @var string
	 */
	public $region = null;

	/**
	 * updateDate
	 *
	 * @var bigint
	 */
	public $updateDate = null;


}

