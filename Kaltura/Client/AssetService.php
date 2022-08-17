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
class Kaltura_Client_AssetService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_Asset
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_Asset $asset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "asset", $asset->toParams());
		$this->client->queueServiceActionCall("asset", "add", "KalturaAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Asset");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addFromBulkUpload($fileData, Kaltura_Client_Type_BulkUploadJobData $bulkUploadJobData, Kaltura_Client_Type_BulkUploadAssetData $bulkUploadAssetData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->addParam($kparams, "bulkUploadJobData", $bulkUploadJobData->toParams());
		$this->client->addParam($kparams, "bulkUploadAssetData", $bulkUploadAssetData->toParams());
		$this->client->queueServiceActionCall("asset", "addFromBulkUpload",  "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkUpload");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetCount
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function count(Kaltura_Client_Type_SearchAssetFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("asset", "count", "KalturaAssetCount", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetCount");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetCount");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($id, $assetReferenceType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->queueServiceActionCall("asset", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Asset
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id, $assetReferenceType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->queueServiceActionCall("asset", "get", "KalturaAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Asset");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AdsContext
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getAdsContext($assetId, $assetType, Kaltura_Client_Type_PlaybackContextOptions $contextDataParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->queueServiceActionCall("asset", "getAdsContext", "KalturaAdsContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAdsContext");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AdsContext");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PlaybackContext
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPlaybackContext($assetId, $assetType, Kaltura_Client_Type_PlaybackContextOptions $contextDataParams, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("asset", "getPlaybackContext", "KalturaPlaybackContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackContext");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PlaybackContext");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PlaybackContext
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPlaybackManifest($assetId, $assetType, Kaltura_Client_Type_PlaybackContextOptions $contextDataParams, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("asset", "getPlaybackManifest", "KalturaPlaybackContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackContext");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PlaybackContext");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_AssetFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("asset", "list", "KalturaAssetListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetListResponse");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function removeMetasAndTags($id, $assetReferenceType, $idIn)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->addParam($kparams, "idIn", $idIn);
		$this->client->queueServiceActionCall("asset", "removeMetasAndTags", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Asset
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($id, Kaltura_Client_Type_Asset $asset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "asset", $asset->toParams());
		$this->client->queueServiceActionCall("asset", "update", "KalturaAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Asset");
		return $resultObject;
	}
}
