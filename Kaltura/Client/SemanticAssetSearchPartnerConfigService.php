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
class Kaltura_Client_SemanticAssetSearchPartnerConfigService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_FilteringCondition
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getFilteringCondition()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("semanticassetsearchpartnerconfig", "getFilteringCondition", "KalturaFilteringCondition", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFilteringCondition");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_FilteringCondition");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SearchableAttributes
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getSearchableAttributes($assetStructId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetStructId", $assetStructId);
		$this->client->queueServiceActionCall("semanticassetsearchpartnerconfig", "getSearchableAttributes", "KalturaSearchableAttributes", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSearchableAttributes");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SearchableAttributes");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_FilteringCondition
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function upsertFilteringCondition(Kaltura_Client_Type_FilteringCondition $filteringCondition)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filteringCondition", $filteringCondition->toParams());
		$this->client->queueServiceActionCall("semanticassetsearchpartnerconfig", "upsertFilteringCondition", "KalturaFilteringCondition", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFilteringCondition");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_FilteringCondition");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SearchableAttributes
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function upsertSearchableAttributes(Kaltura_Client_Type_SearchableAttributes $attributes)
	{
		$kparams = array();
		$this->client->addParam($kparams, "attributes", $attributes->toParams());
		$this->client->queueServiceActionCall("semanticassetsearchpartnerconfig", "upsertSearchableAttributes", "KalturaSearchableAttributes", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSearchableAttributes");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SearchableAttributes");
		}
			return $resultObject;
	}
}
