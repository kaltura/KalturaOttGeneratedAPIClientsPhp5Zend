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
class Kaltura_Client_AiMetadataGeneratorService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_GenerateMetadataBySubtitlesJob
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generateMetadataBySubtitles($subtitlesFileId, array $externalAssetIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "subtitlesFileId", $subtitlesFileId);
		foreach($externalAssetIds as $index => $obj)
		{
			$this->client->addParam($kparams, "externalAssetIds:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("aimetadatagenerator", "generateMetadataBySubtitles", "KalturaGenerateMetadataBySubtitlesJob", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenerateMetadataBySubtitlesJob");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_GenerateMetadataBySubtitlesJob");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_GenerateMetadataResult
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getGeneratedMetadata($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("aimetadatagenerator", "getGeneratedMetadata", "KalturaGenerateMetadataResult", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenerateMetadataResult");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_GenerateMetadataResult");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_GenerateMetadataBySubtitlesJob
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getGenerateMetadataJob($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("aimetadatagenerator", "getGenerateMetadataJob", "KalturaGenerateMetadataBySubtitlesJob", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenerateMetadataBySubtitlesJob");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_GenerateMetadataBySubtitlesJob");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_MetaFieldNameMap
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getMetadataFieldDefinitions()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("aimetadatagenerator", "getMetadataFieldDefinitions", "KalturaMetaFieldNameMap", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMetaFieldNameMap");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_MetaFieldNameMap");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AiMetadataGeneratorConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPartnerConfiguration()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("aimetadatagenerator", "getPartnerConfiguration", "KalturaAiMetadataGeneratorConfiguration", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAiMetadataGeneratorConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AiMetadataGeneratorConfiguration");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AiMetadataGeneratorConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updatePartnerConfiguration(Kaltura_Client_Type_AiMetadataGeneratorConfiguration $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("aimetadatagenerator", "updatePartnerConfiguration", "KalturaAiMetadataGeneratorConfiguration", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAiMetadataGeneratorConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AiMetadataGeneratorConfiguration");
		}
			return $resultObject;
	}
}
