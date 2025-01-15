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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Asset");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkUpload");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetCount");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetCount");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Asset");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAdsContext");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AdsContext");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_BulkPlaybackContext
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getBulkPlaybackContext(array $fileTypes, $streamerType, $context, $urlType)
	{
		$kparams = array();
		foreach($fileTypes as $index => $obj)
		{
			$this->client->addParam($kparams, "fileTypes:$index", $obj->toParams());
		}
		$this->client->addParam($kparams, "streamerType", $streamerType);
		$this->client->addParam($kparams, "context", $context);
		$this->client->addParam($kparams, "urlType", $urlType);
		$this->client->queueServiceActionCall("asset", "getBulkPlaybackContext", "KalturaBulkPlaybackContext", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkPlaybackContext");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkPlaybackContext");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackContext");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PlaybackContext");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackContext");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PlaybackContext");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function groupRepresentativeList(Kaltura_Client_Type_AssetGroupBy $groupBy, $unmatchedItemsPolicy, Kaltura_Client_Type_BaseAssetOrder $orderBy = null, Kaltura_Client_Type_ListGroupsRepresentativesFilter $filter = null, Kaltura_Client_Type_RepresentativeSelectionPolicy $selectionPolicy = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupBy", $groupBy->toParams());
		$this->client->addParam($kparams, "unmatchedItemsPolicy", $unmatchedItemsPolicy);
		if ($orderBy !== null)
			$this->client->addParam($kparams, "orderBy", $orderBy->toParams());
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($selectionPolicy !== null)
			$this->client->addParam($kparams, "selectionPolicy", $selectionPolicy->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("asset", "groupRepresentativeList", "KalturaAssetListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetListResponse");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listPersonalSelection(Kaltura_Client_Type_PersonalAssetSelectionFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("asset", "listPersonalSelection", "KalturaAssetListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetListResponse");
		}
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
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Asset");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function watchBasedRecommendationsList($profileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "profileId", $profileId);
		$this->client->queueServiceActionCall("asset", "watchBasedRecommendationsList", "KalturaAssetListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetListResponse");
		}
			return $resultObject;
	}
}
