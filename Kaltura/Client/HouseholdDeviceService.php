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
class Kaltura_Client_HouseholdDeviceService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_HouseholdDevice
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_HouseholdDevice $device)
	{
		$kparams = array();
		$this->client->addParam($kparams, "device", $device->toParams());
		$this->client->queueServiceActionCall("householddevice", "add", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_HouseholdDevice");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_HouseholdDevice
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addByPin($deviceName, $pin)
	{
		$kparams = array();
		$this->client->addParam($kparams, "deviceName", $deviceName);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->queueServiceActionCall("householddevice", "addByPin", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_HouseholdDevice");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($udid)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("householddevice", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function deleteDynamicData($udid, $key)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "key", $key);
		$this->client->queueServiceActionCall("householddevice", "deleteDynamicData", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_DevicePin
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generatePin($udid, $brandId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "brandId", $brandId);
		$this->client->queueServiceActionCall("householddevice", "generatePin", "KalturaDevicePin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDevicePin");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_DevicePin");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_HouseholdDevice
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($udid = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("householddevice", "get", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_HouseholdDevice");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_HouseholdDeviceListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_HouseholdDeviceFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("householddevice", "list", "KalturaHouseholdDeviceListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDeviceListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_HouseholdDeviceListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LoginResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function loginWithPin($partnerId, $pin, $udid = null, array $extraParams = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "udid", $udid);
		if ($extraParams !== null)
			$this->client->addParam($kparams, "extraParams", $extraParams->toParams());
		$this->client->queueServiceActionCall("householddevice", "loginWithPin", "KalturaLoginResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LoginResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_HouseholdDevice
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($udid, Kaltura_Client_Type_HouseholdDevice $device)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "device", $device->toParams());
		$this->client->queueServiceActionCall("householddevice", "update", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_HouseholdDevice");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateStatus($udid, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("householddevice", "updateStatus", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_DynamicData
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function upsertDynamicData($udid, $key, Kaltura_Client_Type_StringValue $value)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "key", $key);
		$this->client->addParam($kparams, "value", $value->toParams());
		$this->client->queueServiceActionCall("householddevice", "upsertDynamicData", "KalturaDynamicData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDynamicData");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_DynamicData");
		return $resultObject;
	}
}
