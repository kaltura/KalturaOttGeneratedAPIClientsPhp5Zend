<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_CdnAdapterProfileService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_CDNAdapterProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_CDNAdapterProfile $adapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdnadapterprofile", "add", "KalturaCDNAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CDNAdapterProfile");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($adapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdnadapterprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CDNAdapterProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generateSharedSecret($adapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdnadapterprofile", "generateSharedSecret", "KalturaCDNAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CDNAdapterProfile");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CDNAdapterProfileListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("cdnadapterprofile", "list", "KalturaCDNAdapterProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfileListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CDNAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CDNAdapterProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($adapterId, Kaltura_Client_Type_CDNAdapterProfile $adapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdnadapterprofile", "update", "KalturaCDNAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCDNAdapterProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CDNAdapterProfile");
		return $resultObject;
	}
}
