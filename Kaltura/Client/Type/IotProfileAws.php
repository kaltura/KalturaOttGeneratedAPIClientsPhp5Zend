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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_IotProfileAws extends Kaltura_Client_Type_CrudObject
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
			$this->iotEndPoint = (string)$xml->iotEndPoint;
		if(count($xml->accessKeyId))
			$this->accessKeyId = (string)$xml->accessKeyId;
		if(count($xml->secretAccessKey))
			$this->secretAccessKey = (string)$xml->secretAccessKey;
		if(count($xml->userPoolId))
			$this->userPoolId = (string)$xml->userPoolId;
		if(count($xml->clientId))
			$this->clientId = (string)$xml->clientId;
		if(count($xml->identityPoolId))
			$this->identityPoolId = (string)$xml->identityPoolId;
		if(count($xml->region))
			$this->region = (string)$xml->region;
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

