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
class Kaltura_Client_SsoAdapterProfileService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_SSOAdapterProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_SSOAdapterProfile $ssoAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapter", $ssoAdapter->toParams());
		$this->client->queueServiceActionCall("ssoadapterprofile", "add", "KalturaSSOAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SSOAdapterProfile");
		}
			return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($ssoAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapterId", $ssoAdapterId);
		$this->client->queueServiceActionCall("ssoadapterprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SSOAdapterProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generateSharedSecret($ssoAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapterId", $ssoAdapterId);
		$this->client->queueServiceActionCall("ssoadapterprofile", "generateSharedSecret", "KalturaSSOAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SSOAdapterProfile");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SSOAdapterProfileInvoke
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function invoke($intent, array $adapterData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "intent", $intent);
		foreach($adapterData as $index => $obj)
		{
			$this->client->addParam($kparams, "adapterData:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("ssoadapterprofile", "invoke", "KalturaSSOAdapterProfileInvoke", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfileInvoke");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SSOAdapterProfileInvoke");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SSOAdapterProfileListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ssoadapterprofile", "list", "KalturaSSOAdapterProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfileListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SSOAdapterProfileListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SSOAdapterProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($ssoAdapterId, Kaltura_Client_Type_SSOAdapterProfile $ssoAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapterId", $ssoAdapterId);
		$this->client->addParam($kparams, "ssoAdapter", $ssoAdapter->toParams());
		$this->client->queueServiceActionCall("ssoadapterprofile", "update", "KalturaSSOAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SSOAdapterProfile");
		}
			return $resultObject;
	}
}
