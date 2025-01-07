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
class Kaltura_Client_AssetEnrichService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_CaptionUploadJob
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generateMetadata($captionUploadJobId, array $externalAssetIds, $targetDisplayLanguage)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionUploadJobId", $captionUploadJobId);
		foreach($externalAssetIds as $index => $obj)
		{
			$this->client->addParam($kparams, "externalAssetIds:$index", $obj->toParams());
		}
		$this->client->addParam($kparams, "targetDisplayLanguage", $targetDisplayLanguage);
		$this->client->queueServiceActionCall("assetenrich", "generateMetadata", "KalturaCaptionUploadJob", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionUploadJob");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CaptionUploadJob");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CaptionUploadJob
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getCaptionUploadJob($captionUploadJobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionUploadJobId", $captionUploadJobId);
		$this->client->queueServiceActionCall("assetenrich", "getCaptionUploadJob", "KalturaCaptionUploadJob", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionUploadJob");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CaptionUploadJob");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_EnrichedMetadataResult
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getGeneratedMetadata($captionUploadJobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionUploadJobId", $captionUploadJobId);
		$this->client->queueServiceActionCall("assetenrich", "getGeneratedMetadata", "KalturaEnrichedMetadataResult", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEnrichedMetadataResult");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_EnrichedMetadataResult");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_MetaEnrichConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPartnerConfiguration()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("assetenrich", "getPartnerConfiguration", "KalturaMetaEnrichConfiguration", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMetaEnrichConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_MetaEnrichConfiguration");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_MetaEnrichConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updatePartnerConfiguration(Kaltura_Client_Type_MetaEnrichConfiguration $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("assetenrich", "updatePartnerConfiguration", "KalturaMetaEnrichConfiguration", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMetaEnrichConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_MetaEnrichConfiguration");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CaptionUploadJob
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function uploadCaptionFile(Kaltura_Client_Type_CaptionUploadData $json, $fileName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "json", $json->toParams());
		$kfiles = array();
		$this->client->addParam($kfiles, "fileName", $fileName);
		$this->client->queueServiceActionCall("assetenrich", "uploadCaptionFile",  "KalturaCaptionUploadJob", $kparams, $kfiles);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionUploadJob");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CaptionUploadJob");
		}
			return $resultObject;
	}
}
