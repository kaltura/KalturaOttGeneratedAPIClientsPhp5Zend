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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->priceDetailsId))
			$this->priceDetailsId = (string)$xml->priceDetailsId;
		if(count($xml->fileTypesIds))
			$this->fileTypesIds = (string)$xml->fileTypesIds;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->expiryDate))
			$this->expiryDate = (string)$xml->expiryDate;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->externalOfferId))
			$this->externalOfferId = (string)$xml->externalOfferId;
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

