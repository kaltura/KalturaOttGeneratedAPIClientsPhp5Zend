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
class Kaltura_Client_LiveToVodService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_LiveToVodFullConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getConfiguration()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("livetovod", "getConfiguration", "KalturaLiveToVodFullConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveToVodFullConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveToVodFullConfiguration");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveToVodLinearAssetConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getLinearAssetConfiguration($linearAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "linearAssetId", $linearAssetId);
		$this->client->queueServiceActionCall("livetovod", "getLinearAssetConfiguration", "KalturaLiveToVodLinearAssetConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveToVodLinearAssetConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveToVodLinearAssetConfiguration");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveToVodPartnerConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPartnerConfiguration()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("livetovod", "getPartnerConfiguration", "KalturaLiveToVodPartnerConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveToVodPartnerConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveToVodPartnerConfiguration");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveToVodLinearAssetConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateLinearAssetConfiguration(Kaltura_Client_Type_LiveToVodLinearAssetConfiguration $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("livetovod", "updateLinearAssetConfiguration", "KalturaLiveToVodLinearAssetConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveToVodLinearAssetConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveToVodLinearAssetConfiguration");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveToVodPartnerConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updatePartnerConfiguration(Kaltura_Client_Type_LiveToVodPartnerConfiguration $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("livetovod", "updatePartnerConfiguration", "KalturaLiveToVodPartnerConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveToVodPartnerConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveToVodPartnerConfiguration");
		return $resultObject;
	}
}
