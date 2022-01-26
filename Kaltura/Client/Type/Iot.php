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
class Kaltura_Client_Type_Iot extends Kaltura_Client_Type_CrudObject
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
			$this->udid = (string)$xml->udid;
		if(count($xml->accessKey))
			$this->accessKey = (string)$xml->accessKey;
		if(count($xml->accessSecretKey))
			$this->accessSecretKey = (string)$xml->accessSecretKey;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->userPassword))
			$this->userPassword = (string)$xml->userPassword;
		if(count($xml->identityId))
			$this->identityId = (string)$xml->identityId;
		if(count($xml->thingArn))
			$this->thingArn = (string)$xml->thingArn;
		if(count($xml->thingId))
			$this->thingId = (string)$xml->thingId;
		if(count($xml->principal))
			$this->principal = (string)$xml->principal;
		if(count($xml->endPoint))
			$this->endPoint = (string)$xml->endPoint;
		if(count($xml->extendedEndPoint))
			$this->extendedEndPoint = (string)$xml->extendedEndPoint;
		if(count($xml->identityPoolId))
			$this->identityPoolId = (string)$xml->identityPoolId;
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

