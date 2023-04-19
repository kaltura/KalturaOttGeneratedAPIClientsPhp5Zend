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
class Kaltura_Client_Type_IotClientConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIotClientConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->announcementTopic))
			$this->announcementTopic = (string)$xml->announcementTopic;
		if(!is_null($jsonObject) && isset($jsonObject->announcementTopic))
			$this->announcementTopic = (string)$jsonObject->announcementTopic;
		if(!is_null($xml) && count($xml->credentialsProvider) && !empty($xml->credentialsProvider))
			$this->credentialsProvider = Kaltura_Client_ParseUtils::unmarshalObject($xml->credentialsProvider, "KalturaCredentialsProvider");
		if(!is_null($jsonObject) && isset($jsonObject->credentialsProvider) && !empty($jsonObject->credentialsProvider))
			$this->credentialsProvider = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->credentialsProvider, "KalturaCredentialsProvider");
		if(!is_null($xml) && count($xml->cognitoUserPool) && !empty($xml->cognitoUserPool))
			$this->cognitoUserPool = Kaltura_Client_ParseUtils::unmarshalObject($xml->cognitoUserPool, "KalturaCognitoUserPool");
		if(!is_null($jsonObject) && isset($jsonObject->cognitoUserPool) && !empty($jsonObject->cognitoUserPool))
			$this->cognitoUserPool = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->cognitoUserPool, "KalturaCognitoUserPool");
		if(!is_null($xml) && count($xml->json))
			$this->json = (string)$xml->json;
		if(!is_null($jsonObject) && isset($jsonObject->json))
			$this->json = (string)$jsonObject->json;
		if(!is_null($xml) && count($xml->topics))
			$this->topics = (string)$xml->topics;
		if(!is_null($jsonObject) && isset($jsonObject->topics))
			$this->topics = (string)$jsonObject->topics;
	}
	/**
	 * announcementTopic
	 *
	 * @var string
	 */
	public $announcementTopic = null;

	/**
	 * KalturaCredentialsProvider
	 *
	 * @var Kaltura_Client_Type_CredentialsProvider
	 */
	public $credentialsProvider;

	/**
	 * CognitoUserPool
	 *
	 * @var Kaltura_Client_Type_CognitoUserPool
	 */
	public $cognitoUserPool;

	/**
	 * json
	 *
	 * @var string
	 */
	public $json = null;

	/**
	 * topics
	 *
	 * @var string
	 */
	public $topics = null;


}

