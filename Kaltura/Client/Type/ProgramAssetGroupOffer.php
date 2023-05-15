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
class Kaltura_Client_Type_ProgramAssetGroupOffer extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaProgramAssetGroupOffer';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualName))
		{
			if(empty($jsonObject->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->priceDetailsId))
			$this->priceDetailsId = (string)$xml->priceDetailsId;
		if(!is_null($jsonObject) && isset($jsonObject->priceDetailsId))
			$this->priceDetailsId = (string)$jsonObject->priceDetailsId;
		if(!is_null($xml) && count($xml->fileTypesIds))
			$this->fileTypesIds = (string)$xml->fileTypesIds;
		if(!is_null($jsonObject) && isset($jsonObject->fileTypesIds))
			$this->fileTypesIds = (string)$jsonObject->fileTypesIds;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualDescription))
		{
			if(empty($jsonObject->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualDescription, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->virtualAssetId))
			$this->virtualAssetId = (string)$jsonObject->virtualAssetId;
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->expiryDate))
			$this->expiryDate = (string)$xml->expiryDate;
		if(!is_null($jsonObject) && isset($jsonObject->expiryDate))
			$this->expiryDate = (string)$jsonObject->expiryDate;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->externalOfferId))
			$this->externalOfferId = (string)$xml->externalOfferId;
		if(!is_null($jsonObject) && isset($jsonObject->externalOfferId))
			$this->externalOfferId = (string)$jsonObject->externalOfferId;
	}
	/**
	 * Unique Kaltura internal identifier for the module
	 *
	 * @var bigint
	 */
	public $id = null;

	/**
	 * Name of the Program asset group offer
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Name of the Program asset group offer
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualName;

	/**
	 * ID of the KalturaPriceDetails object which contains details of the price to be paid for purchasing this KalturaProgramAssetGroupOffer.
	 *
	 * @var bigint
	 */
	public $priceDetailsId = null;

	/**
	 * Comma separated file types identifiers that are supported in this Program asset group offer.
	 *             The subset of KalturaMediaFiles of the live linear channel on which the associated Program Assets are carried to which households entitled to this
	 *             Program Asset Group Offer are entitled to view E.g.may be used to restrict entitlement only to HD flavour of the Program Asset(and not the UHD flavour)
	 *             If this parameter is empty, the Household shall be entitled to all KalturaMediaFiles associated with the KalturaLiveAsset.
	 *
	 * @var string
	 */
	public $fileTypesIds = null;

	/**
	 * A list of the descriptions of the Program asset group offer on different languages (language code and translation)
	 *
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * A list of the descriptions of the Program asset group offer on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualDescription;

	/**
	 * The id of the paired asset
	 *
	 * @var bigint
	 * @readonly
	 */
	public $virtualAssetId = null;

	/**
	 * Indicates whether the PAGO is active or not (includes whether the PAGO can be purchased and whether it is returned in list API response for regular users)
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Specifies when was the pago created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the pago last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * The date/time at which the Program Asset Group Offer is first purchasable by households. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * The date/time at which the Program Asset Group Offer is last purchasable by households.Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * The last date/time at which the system will attempt to locate Program Assets that may be associated with this offer.Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $expiryDate = null;

	/**
	 * External identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Identifies the Program Assets which will be entitled by Households that purchase this offer. Must be a unique value in the context of an account.
	 *
	 * @var string
	 */
	public $externalOfferId = null;


}

