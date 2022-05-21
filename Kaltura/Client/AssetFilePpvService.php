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
class Kaltura_Client_AssetFilePpvService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_AssetFilePpv
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_AssetFilePpv $assetFilePpv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetFilePpv", $assetFilePpv->toParams());
		$this->client->queueServiceActionCall("assetfileppv", "add", "KalturaAssetFilePpv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFilePpv");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetFilePpv");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($assetFileId, $ppvModuleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetFileId", $assetFileId);
		$this->client->addParam($kparams, "ppvModuleId", $ppvModuleId);
		$this->client->queueServiceActionCall("assetfileppv", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetFilePpvListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_AssetFilePpvFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("assetfileppv", "list", "KalturaAssetFilePpvListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFilePpvListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetFilePpvListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AssetFilePpv
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($assetFileId, $ppvModuleId, Kaltura_Client_Type_AssetFilePpv $assetFilePpv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetFileId", $assetFileId);
		$this->client->addParam($kparams, "ppvModuleId", $ppvModuleId);
		$this->client->addParam($kparams, "assetFilePpv", $assetFilePpv->toParams());
		$this->client->queueServiceActionCall("assetfileppv", "update", "KalturaAssetFilePpv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFilePpv");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AssetFilePpv");
		return $resultObject;
	}
}
