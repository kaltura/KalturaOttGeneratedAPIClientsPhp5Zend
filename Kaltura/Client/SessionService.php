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
class Kaltura_Client_SessionService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_SessionCharacteristic
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function createSessionCharacteristic($userId, $householdId, $udid, $expiration, $regionId = null, array $sessionCharacteristicParams = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "householdId", $householdId);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "expiration", $expiration);
		$this->client->addParam($kparams, "regionId", $regionId);
		if ($sessionCharacteristicParams !== null)
			$this->client->addParam($kparams, "sessionCharacteristicParams", $sessionCharacteristicParams->toParams());
		$this->client->queueServiceActionCall("session", "createSessionCharacteristic", "KalturaSessionCharacteristic", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSessionCharacteristic");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SessionCharacteristic");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Session
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($session = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "session", $session);
		$this->client->queueServiceActionCall("session", "get", "KalturaSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSession");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Session");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function revoke()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("session", "revoke", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LoginSession
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function switchUser($userIdToSwitch)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userIdToSwitch", $userIdToSwitch);
		$this->client->queueServiceActionCall("session", "switchUser", "KalturaLoginSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginSession");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LoginSession");
		return $resultObject;
	}
}
