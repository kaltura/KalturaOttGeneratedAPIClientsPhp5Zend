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
class Kaltura_Client_IngestStatusService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_IngestEpgDetails
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getEpgDetails($ingestId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ingestId", $ingestId);
		$this->client->queueServiceActionCall("ingeststatus", "getEpgDetails", "KalturaIngestEpgDetails", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestEpgDetails");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_IngestEpgDetails");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_IngestStatusEpgListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getEpgList(Kaltura_Client_Type_IngestByIdsFilter $idsFilter = null, Kaltura_Client_Type_IngestByCompoundFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($idsFilter !== null)
			$this->client->addParam($kparams, "idsFilter", $idsFilter->toParams());
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("ingeststatus", "getEpgList", "KalturaIngestStatusEpgListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestStatusEpgListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_IngestStatusEpgListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_IngestStatusEpgProgramResultListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getEpgProgramResultList($ingestId, Kaltura_Client_Type_IngestEpgProgramResultFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ingestId", $ingestId);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("ingeststatus", "getEpgProgramResultList", "KalturaIngestStatusEpgProgramResultListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestStatusEpgProgramResultListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_IngestStatusEpgProgramResultListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_IngestStatusPartnerConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPartnerConfiguration()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ingeststatus", "getPartnerConfiguration", "KalturaIngestStatusPartnerConfiguration", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestStatusPartnerConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_IngestStatusPartnerConfiguration");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_VodIngestAssetResultResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getVodAssetResult(Kaltura_Client_Type_VodIngestAssetResultFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("ingeststatus", "getVodAssetResult", "KalturaVodIngestAssetResultResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaVodIngestAssetResultResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_VodIngestAssetResultResponse");
		}
			return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updatePartnerConfiguration(Kaltura_Client_Type_IngestStatusPartnerConfiguration $config)
	{
		$kparams = array();
		$this->client->addParam($kparams, "config", $config->toParams());
		$this->client->queueServiceActionCall("ingeststatus", "updatePartnerConfiguration", null, $kparams);
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
		}
	}
}
