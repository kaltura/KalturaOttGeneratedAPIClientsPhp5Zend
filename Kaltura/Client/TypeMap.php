<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_TypeMap
{
	private static $map = array(
		'KalturaAccessControlBlockAction' => 'Kaltura_Client_Type_AccessControlBlockAction',
		'KalturaAccessControlMessage' => 'Kaltura_Client_Type_AccessControlMessage',
		'KalturaActionPermissionItem' => 'Kaltura_Client_Type_ActionPermissionItem',
		'KalturaAdsContext' => 'Kaltura_Client_Type_AdsContext',
		'KalturaAdsSource' => 'Kaltura_Client_Type_AdsSource',
		'KalturaAggregatedPropertySkipCondition' => 'Kaltura_Client_Type_AggregatedPropertySkipCondition',
		'KalturaAggregationCountFilter' => 'Kaltura_Client_Type_AggregationCountFilter',
		'KalturaAllowPlaybackAction' => 'Kaltura_Client_Type_AllowPlaybackAction',
		'KalturaAnnouncement' => 'Kaltura_Client_Type_Announcement',
		'KalturaAnnouncementFilter' => 'Kaltura_Client_Type_AnnouncementFilter',
		'KalturaAnnouncementListResponse' => 'Kaltura_Client_Type_AnnouncementListResponse',
		'KalturaApiExceptionArg' => 'Kaltura_Client_Type_ApiExceptionArg',
		'KalturaAppToken' => 'Kaltura_Client_Type_AppToken',
		'KalturaApplyDiscountModuleAction' => 'Kaltura_Client_Type_ApplyDiscountModuleAction',
		'KalturaApplyPlaybackAdapterAction' => 'Kaltura_Client_Type_ApplyPlaybackAdapterAction',
		'KalturaAsset' => 'Kaltura_Client_Type_Asset',
		'KalturaAssetComment' => 'Kaltura_Client_Type_AssetComment',
		'KalturaAssetCommentFilter' => 'Kaltura_Client_Type_AssetCommentFilter',
		'KalturaAssetCommentListResponse' => 'Kaltura_Client_Type_AssetCommentListResponse',
		'KalturaAssetCondition' => 'Kaltura_Client_Type_AssetCondition',
		'KalturaAssetCount' => 'Kaltura_Client_Type_AssetCount',
		'KalturaAssetCountListResponse' => 'Kaltura_Client_Type_AssetCountListResponse',
		'KalturaAssetFieldGroupBy' => 'Kaltura_Client_Type_AssetFieldGroupBy',
		'KalturaAssetFile' => 'Kaltura_Client_Type_AssetFile',
		'KalturaAssetFileContext' => 'Kaltura_Client_Type_AssetFileContext',
		'KalturaAssetFilePpv' => 'Kaltura_Client_Type_AssetFilePpv',
		'KalturaAssetFilePpvFilter' => 'Kaltura_Client_Type_AssetFilePpvFilter',
		'KalturaAssetFilePpvListResponse' => 'Kaltura_Client_Type_AssetFilePpvListResponse',
		'KalturaAssetFilter' => 'Kaltura_Client_Type_AssetFilter',
		'KalturaAssetGroupBy' => 'Kaltura_Client_Type_AssetGroupBy',
		'KalturaAssetHistory' => 'Kaltura_Client_Type_AssetHistory',
		'KalturaAssetHistoryFilter' => 'Kaltura_Client_Type_AssetHistoryFilter',
		'KalturaAssetHistoryListResponse' => 'Kaltura_Client_Type_AssetHistoryListResponse',
		'KalturaAssetListResponse' => 'Kaltura_Client_Type_AssetListResponse',
		'KalturaAssetMetaOrTagGroupBy' => 'Kaltura_Client_Type_AssetMetaOrTagGroupBy',
		'KalturaAssetReminder' => 'Kaltura_Client_Type_AssetReminder',
		'KalturaAssetReminderFilter' => 'Kaltura_Client_Type_AssetReminderFilter',
		'KalturaAssetRule' => 'Kaltura_Client_Type_AssetRule',
		'KalturaAssetRuleAction' => 'Kaltura_Client_Type_AssetRuleAction',
		'KalturaAssetRuleBase' => 'Kaltura_Client_Type_AssetRuleBase',
		'KalturaAssetRuleFilter' => 'Kaltura_Client_Type_AssetRuleFilter',
		'KalturaAssetRuleListResponse' => 'Kaltura_Client_Type_AssetRuleListResponse',
		'KalturaAssetStatistics' => 'Kaltura_Client_Type_AssetStatistics',
		'KalturaAssetStatisticsListResponse' => 'Kaltura_Client_Type_AssetStatisticsListResponse',
		'KalturaAssetStatisticsQuery' => 'Kaltura_Client_Type_AssetStatisticsQuery',
		'KalturaAssetStruct' => 'Kaltura_Client_Type_AssetStruct',
		'KalturaAssetStructFilter' => 'Kaltura_Client_Type_AssetStructFilter',
		'KalturaAssetStructListResponse' => 'Kaltura_Client_Type_AssetStructListResponse',
		'KalturaAssetStructMeta' => 'Kaltura_Client_Type_AssetStructMeta',
		'KalturaAssetStructMetaFilter' => 'Kaltura_Client_Type_AssetStructMetaFilter',
		'KalturaAssetStructMetaListResponse' => 'Kaltura_Client_Type_AssetStructMetaListResponse',
		'KalturaAssetUserRule' => 'Kaltura_Client_Type_AssetUserRule',
		'KalturaAssetUserRuleAction' => 'Kaltura_Client_Type_AssetUserRuleAction',
		'KalturaAssetUserRuleBlockAction' => 'Kaltura_Client_Type_AssetUserRuleBlockAction',
		'KalturaAssetUserRuleFilter' => 'Kaltura_Client_Type_AssetUserRuleFilter',
		'KalturaAssetUserRuleFilterAction' => 'Kaltura_Client_Type_AssetUserRuleFilterAction',
		'KalturaAssetUserRuleListResponse' => 'Kaltura_Client_Type_AssetUserRuleListResponse',
		'KalturaAssetsCount' => 'Kaltura_Client_Type_AssetsCount',
		'KalturaBaseChannel' => 'Kaltura_Client_Type_BaseChannel',
		'KalturaBaseOTTUser' => 'Kaltura_Client_Type_BaseOTTUser',
		'KalturaBaseResponseProfile' => 'Kaltura_Client_Type_BaseResponseProfile',
		'KalturaBaseSearchAssetFilter' => 'Kaltura_Client_Type_BaseSearchAssetFilter',
		'KalturaBaseSegmentCondition' => 'Kaltura_Client_Type_BaseSegmentCondition',
		'KalturaBaseSegmentValue' => 'Kaltura_Client_Type_BaseSegmentValue',
		'KalturaBillingPartnerConfig' => 'Kaltura_Client_Type_BillingPartnerConfig',
		'KalturaBillingResponse' => 'Kaltura_Client_Type_BillingResponse',
		'KalturaBillingTransaction' => 'Kaltura_Client_Type_BillingTransaction',
		'KalturaBillingTransactionListResponse' => 'Kaltura_Client_Type_BillingTransactionListResponse',
		'KalturaBlockPlaybackAction' => 'Kaltura_Client_Type_BlockPlaybackAction',
		'KalturaBookmark' => 'Kaltura_Client_Type_Bookmark',
		'KalturaBookmarkFilter' => 'Kaltura_Client_Type_BookmarkFilter',
		'KalturaBookmarkListResponse' => 'Kaltura_Client_Type_BookmarkListResponse',
		'KalturaBookmarkPlayerData' => 'Kaltura_Client_Type_BookmarkPlayerData',
		'KalturaBooleanValue' => 'Kaltura_Client_Type_BooleanValue',
		'KalturaBulkUpload' => 'Kaltura_Client_Type_BulkUpload',
		'KalturaBulkUploadAssetData' => 'Kaltura_Client_Type_BulkUploadAssetData',
		'KalturaBulkUploadAssetResult' => 'Kaltura_Client_Type_BulkUploadAssetResult',
		'KalturaBulkUploadExcelJobData' => 'Kaltura_Client_Type_BulkUploadExcelJobData',
		'KalturaBulkUploadFilter' => 'Kaltura_Client_Type_BulkUploadFilter',
		'KalturaBulkUploadIngestJobData' => 'Kaltura_Client_Type_BulkUploadIngestJobData',
		'KalturaBulkUploadJobData' => 'Kaltura_Client_Type_BulkUploadJobData',
		'KalturaBulkUploadListResponse' => 'Kaltura_Client_Type_BulkUploadListResponse',
		'KalturaBulkUploadLiveAssetResult' => 'Kaltura_Client_Type_BulkUploadLiveAssetResult',
		'KalturaBulkUploadMediaAssetData' => 'Kaltura_Client_Type_BulkUploadMediaAssetData',
		'KalturaBulkUploadMediaAssetResult' => 'Kaltura_Client_Type_BulkUploadMediaAssetResult',
		'KalturaBulkUploadObjectData' => 'Kaltura_Client_Type_BulkUploadObjectData',
		'KalturaBulkUploadProgramAssetData' => 'Kaltura_Client_Type_BulkUploadProgramAssetData',
		'KalturaBulkUploadProgramAssetResult' => 'Kaltura_Client_Type_BulkUploadProgramAssetResult',
		'KalturaBulkUploadResult' => 'Kaltura_Client_Type_BulkUploadResult',
		'KalturaBumpersPlaybackPluginData' => 'Kaltura_Client_Type_BumpersPlaybackPluginData',
		'KalturaBundleFilter' => 'Kaltura_Client_Type_BundleFilter',
		'KalturaBusinessModuleCondition' => 'Kaltura_Client_Type_BusinessModuleCondition',
		'KalturaBusinessModuleRule' => 'Kaltura_Client_Type_BusinessModuleRule',
		'KalturaBusinessModuleRuleAction' => 'Kaltura_Client_Type_BusinessModuleRuleAction',
		'KalturaBusinessModuleRuleFilter' => 'Kaltura_Client_Type_BusinessModuleRuleFilter',
		'KalturaBusinessModuleRuleListResponse' => 'Kaltura_Client_Type_BusinessModuleRuleListResponse',
		'KalturaBuzzScore' => 'Kaltura_Client_Type_BuzzScore',
		'KalturaCDNAdapterProfile' => 'Kaltura_Client_Type_CDNAdapterProfile',
		'KalturaCDNAdapterProfileListResponse' => 'Kaltura_Client_Type_CDNAdapterProfileListResponse',
		'KalturaCDNPartnerSettings' => 'Kaltura_Client_Type_CDNPartnerSettings',
		'KalturaCDVRAdapterProfile' => 'Kaltura_Client_Type_CDVRAdapterProfile',
		'KalturaCDVRAdapterProfileListResponse' => 'Kaltura_Client_Type_CDVRAdapterProfileListResponse',
		'KalturaCaptionPlaybackPluginData' => 'Kaltura_Client_Type_CaptionPlaybackPluginData',
		'KalturaChannel' => 'Kaltura_Client_Type_Channel',
		'KalturaChannelEnrichmentHolder' => 'Kaltura_Client_Type_ChannelEnrichmentHolder',
		'KalturaChannelExternalFilter' => 'Kaltura_Client_Type_ChannelExternalFilter',
		'KalturaChannelFilter' => 'Kaltura_Client_Type_ChannelFilter',
		'KalturaChannelListResponse' => 'Kaltura_Client_Type_ChannelListResponse',
		'KalturaChannelOrder' => 'Kaltura_Client_Type_ChannelOrder',
		'KalturaChannelsFilter' => 'Kaltura_Client_Type_ChannelsFilter',
		'KalturaClientConfiguration' => 'Kaltura_Client_Type_ClientConfiguration',
		'KalturaCollection' => 'Kaltura_Client_Type_Collection',
		'KalturaCollectionEntitlement' => 'Kaltura_Client_Type_CollectionEntitlement',
		'KalturaCollectionFilter' => 'Kaltura_Client_Type_CollectionFilter',
		'KalturaCollectionListResponse' => 'Kaltura_Client_Type_CollectionListResponse',
		'KalturaCollectionPrice' => 'Kaltura_Client_Type_CollectionPrice',
		'KalturaCompensation' => 'Kaltura_Client_Type_Compensation',
		'KalturaConcurrencyCondition' => 'Kaltura_Client_Type_ConcurrencyCondition',
		'KalturaConcurrencyPartnerConfig' => 'Kaltura_Client_Type_ConcurrencyPartnerConfig',
		'KalturaCondition' => 'Kaltura_Client_Type_Condition',
		'KalturaConfigurationGroup' => 'Kaltura_Client_Type_ConfigurationGroup',
		'KalturaConfigurationGroupDevice' => 'Kaltura_Client_Type_ConfigurationGroupDevice',
		'KalturaConfigurationGroupDeviceFilter' => 'Kaltura_Client_Type_ConfigurationGroupDeviceFilter',
		'KalturaConfigurationGroupDeviceListResponse' => 'Kaltura_Client_Type_ConfigurationGroupDeviceListResponse',
		'KalturaConfigurationGroupListResponse' => 'Kaltura_Client_Type_ConfigurationGroupListResponse',
		'KalturaConfigurationGroupTag' => 'Kaltura_Client_Type_ConfigurationGroupTag',
		'KalturaConfigurationGroupTagFilter' => 'Kaltura_Client_Type_ConfigurationGroupTagFilter',
		'KalturaConfigurationGroupTagListResponse' => 'Kaltura_Client_Type_ConfigurationGroupTagListResponse',
		'KalturaConfigurationIdentifier' => 'Kaltura_Client_Type_ConfigurationIdentifier',
		'KalturaConfigurations' => 'Kaltura_Client_Type_Configurations',
		'KalturaConfigurationsFilter' => 'Kaltura_Client_Type_ConfigurationsFilter',
		'KalturaConfigurationsListResponse' => 'Kaltura_Client_Type_ConfigurationsListResponse',
		'KalturaContentActionCondition' => 'Kaltura_Client_Type_ContentActionCondition',
		'KalturaContentResource' => 'Kaltura_Client_Type_ContentResource',
		'KalturaContentScoreCondition' => 'Kaltura_Client_Type_ContentScoreCondition',
		'KalturaContentSource' => 'Kaltura_Client_Type_ContentSource',
		'KalturaCountry' => 'Kaltura_Client_Type_Country',
		'KalturaCountryCondition' => 'Kaltura_Client_Type_CountryCondition',
		'KalturaCountryFilter' => 'Kaltura_Client_Type_CountryFilter',
		'KalturaCountryListResponse' => 'Kaltura_Client_Type_CountryListResponse',
		'KalturaCoupon' => 'Kaltura_Client_Type_Coupon',
		'KalturaCouponGenerationOptions' => 'Kaltura_Client_Type_CouponGenerationOptions',
		'KalturaCouponsGroup' => 'Kaltura_Client_Type_CouponsGroup',
		'KalturaCouponsGroupListResponse' => 'Kaltura_Client_Type_CouponsGroupListResponse',
		'KalturaCurrency' => 'Kaltura_Client_Type_Currency',
		'KalturaCurrencyFilter' => 'Kaltura_Client_Type_CurrencyFilter',
		'KalturaCurrencyListResponse' => 'Kaltura_Client_Type_CurrencyListResponse',
		'KalturaCustomDrmPlaybackPluginData' => 'Kaltura_Client_Type_CustomDrmPlaybackPluginData',
		'KalturaDateCondition' => 'Kaltura_Client_Type_DateCondition',
		'KalturaDetachedResponseProfile' => 'Kaltura_Client_Type_DetachedResponseProfile',
		'KalturaDeviceBrand' => 'Kaltura_Client_Type_DeviceBrand',
		'KalturaDeviceBrandListResponse' => 'Kaltura_Client_Type_DeviceBrandListResponse',
		'KalturaDeviceFamily' => 'Kaltura_Client_Type_DeviceFamily',
		'KalturaDeviceFamilyBase' => 'Kaltura_Client_Type_DeviceFamilyBase',
		'KalturaDeviceFamilyListResponse' => 'Kaltura_Client_Type_DeviceFamilyListResponse',
		'KalturaDevicePin' => 'Kaltura_Client_Type_DevicePin',
		'KalturaDeviceRegistrationStatusHolder' => 'Kaltura_Client_Type_DeviceRegistrationStatusHolder',
		'KalturaDeviceReport' => 'Kaltura_Client_Type_DeviceReport',
		'KalturaDeviceReportFilter' => 'Kaltura_Client_Type_DeviceReportFilter',
		'KalturaDiscount' => 'Kaltura_Client_Type_Discount',
		'KalturaDiscountDetails' => 'Kaltura_Client_Type_DiscountDetails',
		'KalturaDiscountDetailsFilter' => 'Kaltura_Client_Type_DiscountDetailsFilter',
		'KalturaDiscountDetailsListResponse' => 'Kaltura_Client_Type_DiscountDetailsListResponse',
		'KalturaDiscountModule' => 'Kaltura_Client_Type_DiscountModule',
		'KalturaDoubleValue' => 'Kaltura_Client_Type_DoubleValue',
		'KalturaDrmPlaybackPluginData' => 'Kaltura_Client_Type_DrmPlaybackPluginData',
		'KalturaDrmProfile' => 'Kaltura_Client_Type_DrmProfile',
		'KalturaDrmProfileListResponse' => 'Kaltura_Client_Type_DrmProfileListResponse',
		'KalturaDynamicChannel' => 'Kaltura_Client_Type_DynamicChannel',
		'KalturaDynamicOrderBy' => 'Kaltura_Client_Type_DynamicOrderBy',
		'KalturaEmailMessage' => 'Kaltura_Client_Type_EmailMessage',
		'KalturaEndDateOffsetRuleAction' => 'Kaltura_Client_Type_EndDateOffsetRuleAction',
		'KalturaEngagement' => 'Kaltura_Client_Type_Engagement',
		'KalturaEngagementAdapter' => 'Kaltura_Client_Type_EngagementAdapter',
		'KalturaEngagementAdapterBase' => 'Kaltura_Client_Type_EngagementAdapterBase',
		'KalturaEngagementAdapterListResponse' => 'Kaltura_Client_Type_EngagementAdapterListResponse',
		'KalturaEngagementFilter' => 'Kaltura_Client_Type_EngagementFilter',
		'KalturaEngagementListResponse' => 'Kaltura_Client_Type_EngagementListResponse',
		'KalturaEntitlement' => 'Kaltura_Client_Type_Entitlement',
		'KalturaEntitlementFilter' => 'Kaltura_Client_Type_EntitlementFilter',
		'KalturaEntitlementListResponse' => 'Kaltura_Client_Type_EntitlementListResponse',
		'KalturaEntitlementRenewal' => 'Kaltura_Client_Type_EntitlementRenewal',
		'KalturaEntitlementRenewalBase' => 'Kaltura_Client_Type_EntitlementRenewalBase',
		'KalturaExportTask' => 'Kaltura_Client_Type_ExportTask',
		'KalturaExportTaskFilter' => 'Kaltura_Client_Type_ExportTaskFilter',
		'KalturaExportTaskListResponse' => 'Kaltura_Client_Type_ExportTaskListResponse',
		'KalturaExternalChannelProfile' => 'Kaltura_Client_Type_ExternalChannelProfile',
		'KalturaExternalChannelProfileListResponse' => 'Kaltura_Client_Type_ExternalChannelProfileListResponse',
		'KalturaExternalReceipt' => 'Kaltura_Client_Type_ExternalReceipt',
		'KalturaExternalRecording' => 'Kaltura_Client_Type_ExternalRecording',
		'KalturaExternalRecordingFilter' => 'Kaltura_Client_Type_ExternalRecordingFilter',
		'KalturaFacebookPost' => 'Kaltura_Client_Type_FacebookPost',
		'KalturaFacebookSocial' => 'Kaltura_Client_Type_FacebookSocial',
		'KalturaFairPlayPlaybackPluginData' => 'Kaltura_Client_Type_FairPlayPlaybackPluginData',
		'KalturaFavorite' => 'Kaltura_Client_Type_Favorite',
		'KalturaFavoriteFilter' => 'Kaltura_Client_Type_FavoriteFilter',
		'KalturaFavoriteListResponse' => 'Kaltura_Client_Type_FavoriteListResponse',
		'KalturaFeed' => 'Kaltura_Client_Type_Feed',
		'KalturaFilter' => 'Kaltura_Client_Type_Filter',
		'KalturaFilterPager' => 'Kaltura_Client_Type_FilterPager',
		'KalturaFollowDataBase' => 'Kaltura_Client_Type_FollowDataBase',
		'KalturaFollowTvSeries' => 'Kaltura_Client_Type_FollowTvSeries',
		'KalturaFollowTvSeriesFilter' => 'Kaltura_Client_Type_FollowTvSeriesFilter',
		'KalturaFollowTvSeriesListResponse' => 'Kaltura_Client_Type_FollowTvSeriesListResponse',
		'KalturaGeneralPartnerConfig' => 'Kaltura_Client_Type_GeneralPartnerConfig',
		'KalturaGenericListResponse' => 'Kaltura_Client_Type_GenericListResponse',
		'KalturaGroupPermission' => 'Kaltura_Client_Type_GroupPermission',
		'KalturaHeaderCondition' => 'Kaltura_Client_Type_HeaderCondition',
		'KalturaHomeNetwork' => 'Kaltura_Client_Type_HomeNetwork',
		'KalturaHomeNetworkListResponse' => 'Kaltura_Client_Type_HomeNetworkListResponse',
		'KalturaHousehold' => 'Kaltura_Client_Type_Household',
		'KalturaHouseholdDevice' => 'Kaltura_Client_Type_HouseholdDevice',
		'KalturaHouseholdDeviceFamilyLimitations' => 'Kaltura_Client_Type_HouseholdDeviceFamilyLimitations',
		'KalturaHouseholdDeviceFilter' => 'Kaltura_Client_Type_HouseholdDeviceFilter',
		'KalturaHouseholdDeviceListResponse' => 'Kaltura_Client_Type_HouseholdDeviceListResponse',
		'KalturaHouseholdLimitations' => 'Kaltura_Client_Type_HouseholdLimitations',
		'KalturaHouseholdLimitationsListResponse' => 'Kaltura_Client_Type_HouseholdLimitationsListResponse',
		'KalturaHouseholdPaymentGateway' => 'Kaltura_Client_Type_HouseholdPaymentGateway',
		'KalturaHouseholdPaymentGatewayListResponse' => 'Kaltura_Client_Type_HouseholdPaymentGatewayListResponse',
		'KalturaHouseholdPaymentMethod' => 'Kaltura_Client_Type_HouseholdPaymentMethod',
		'KalturaHouseholdPaymentMethodListResponse' => 'Kaltura_Client_Type_HouseholdPaymentMethodListResponse',
		'KalturaHouseholdPremiumService' => 'Kaltura_Client_Type_HouseholdPremiumService',
		'KalturaHouseholdPremiumServiceListResponse' => 'Kaltura_Client_Type_HouseholdPremiumServiceListResponse',
		'KalturaHouseholdQuota' => 'Kaltura_Client_Type_HouseholdQuota',
		'KalturaHouseholdUser' => 'Kaltura_Client_Type_HouseholdUser',
		'KalturaHouseholdUserFilter' => 'Kaltura_Client_Type_HouseholdUserFilter',
		'KalturaHouseholdUserListResponse' => 'Kaltura_Client_Type_HouseholdUserListResponse',
		'KalturaImage' => 'Kaltura_Client_Type_Image',
		'KalturaImageFilter' => 'Kaltura_Client_Type_ImageFilter',
		'KalturaImageListResponse' => 'Kaltura_Client_Type_ImageListResponse',
		'KalturaImageType' => 'Kaltura_Client_Type_ImageType',
		'KalturaImageTypeFilter' => 'Kaltura_Client_Type_ImageTypeFilter',
		'KalturaImageTypeListResponse' => 'Kaltura_Client_Type_ImageTypeListResponse',
		'KalturaInboxMessage' => 'Kaltura_Client_Type_InboxMessage',
		'KalturaInboxMessageFilter' => 'Kaltura_Client_Type_InboxMessageFilter',
		'KalturaInboxMessageListResponse' => 'Kaltura_Client_Type_InboxMessageListResponse',
		'KalturaIngestProfile' => 'Kaltura_Client_Type_IngestProfile',
		'KalturaIngestProfileListResponse' => 'Kaltura_Client_Type_IngestProfileListResponse',
		'KalturaIntegerValue' => 'Kaltura_Client_Type_IntegerValue',
		'KalturaIntegerValueListResponse' => 'Kaltura_Client_Type_IntegerValueListResponse',
		'KalturaIpRangeCondition' => 'Kaltura_Client_Type_IpRangeCondition',
		'KalturaKeyValue' => 'Kaltura_Client_Type_KeyValue',
		'KalturaLanguage' => 'Kaltura_Client_Type_Language',
		'KalturaLanguageFilter' => 'Kaltura_Client_Type_LanguageFilter',
		'KalturaLanguageListResponse' => 'Kaltura_Client_Type_LanguageListResponse',
		'KalturaLicensedUrl' => 'Kaltura_Client_Type_LicensedUrl',
		'KalturaLicensedUrlBaseRequest' => 'Kaltura_Client_Type_LicensedUrlBaseRequest',
		'KalturaLicensedUrlEpgRequest' => 'Kaltura_Client_Type_LicensedUrlEpgRequest',
		'KalturaLicensedUrlMediaRequest' => 'Kaltura_Client_Type_LicensedUrlMediaRequest',
		'KalturaLicensedUrlRecordingRequest' => 'Kaltura_Client_Type_LicensedUrlRecordingRequest',
		'KalturaListResponse' => 'Kaltura_Client_Type_ListResponse',
		'KalturaLiveAsset' => 'Kaltura_Client_Type_LiveAsset',
		'KalturaLoginResponse' => 'Kaltura_Client_Type_LoginResponse',
		'KalturaLoginSession' => 'Kaltura_Client_Type_LoginSession',
		'KalturaLongValue' => 'Kaltura_Client_Type_LongValue',
		'KalturaManualChannel' => 'Kaltura_Client_Type_ManualChannel',
		'KalturaMediaAsset' => 'Kaltura_Client_Type_MediaAsset',
		'KalturaMediaConcurrencyRule' => 'Kaltura_Client_Type_MediaConcurrencyRule',
		'KalturaMediaConcurrencyRuleListResponse' => 'Kaltura_Client_Type_MediaConcurrencyRuleListResponse',
		'KalturaMediaFile' => 'Kaltura_Client_Type_MediaFile',
		'KalturaMediaFileFilter' => 'Kaltura_Client_Type_MediaFileFilter',
		'KalturaMediaFileListResponse' => 'Kaltura_Client_Type_MediaFileListResponse',
		'KalturaMediaFileType' => 'Kaltura_Client_Type_MediaFileType',
		'KalturaMediaFileTypeListResponse' => 'Kaltura_Client_Type_MediaFileTypeListResponse',
		'KalturaMediaImage' => 'Kaltura_Client_Type_MediaImage',
		'KalturaMessage' => 'Kaltura_Client_Type_Message',
		'KalturaMessageTemplate' => 'Kaltura_Client_Type_MessageTemplate',
		'KalturaMeta' => 'Kaltura_Client_Type_Meta',
		'KalturaMetaFilter' => 'Kaltura_Client_Type_MetaFilter',
		'KalturaMetaListResponse' => 'Kaltura_Client_Type_MetaListResponse',
		'KalturaMonetizationCondition' => 'Kaltura_Client_Type_MonetizationCondition',
		'KalturaMonetizationSource' => 'Kaltura_Client_Type_MonetizationSource',
		'KalturaMultilingualString' => 'Kaltura_Client_Type_MultilingualString',
		'KalturaMultilingualStringValue' => 'Kaltura_Client_Type_MultilingualStringValue',
		'KalturaMultilingualStringValueArray' => 'Kaltura_Client_Type_MultilingualStringValueArray',
		'KalturaNetworkActionStatus' => 'Kaltura_Client_Type_NetworkActionStatus',
		'KalturaNotCondition' => 'Kaltura_Client_Type_NotCondition',
		'KalturaNotificationsPartnerSettings' => 'Kaltura_Client_Type_NotificationsPartnerSettings',
		'KalturaNotificationsSettings' => 'Kaltura_Client_Type_NotificationsSettings',
		'KalturaNpvrPremiumService' => 'Kaltura_Client_Type_NpvrPremiumService',
		'KalturaOSSAdapterBaseProfile' => 'Kaltura_Client_Type_OSSAdapterBaseProfile',
		'KalturaOSSAdapterProfile' => 'Kaltura_Client_Type_OSSAdapterProfile',
		'KalturaOSSAdapterProfileListResponse' => 'Kaltura_Client_Type_OSSAdapterProfileListResponse',
		'KalturaOTTCategory' => 'Kaltura_Client_Type_OTTCategory',
		'KalturaOTTObjectSupportNullable' => 'Kaltura_Client_Type_OTTObjectSupportNullable',
		'KalturaOTTUser' => 'Kaltura_Client_Type_OTTUser',
		'KalturaOTTUserDynamicData' => 'Kaltura_Client_Type_OTTUserDynamicData',
		'KalturaOTTUserFilter' => 'Kaltura_Client_Type_OTTUserFilter',
		'KalturaOTTUserListResponse' => 'Kaltura_Client_Type_OTTUserListResponse',
		'KalturaOTTUserType' => 'Kaltura_Client_Type_OTTUserType',
		'KalturaOrCondition' => 'Kaltura_Client_Type_OrCondition',
		'KalturaPPVItemPriceDetails' => 'Kaltura_Client_Type_PPVItemPriceDetails',
		'KalturaParentalRule' => 'Kaltura_Client_Type_ParentalRule',
		'KalturaParentalRuleFilter' => 'Kaltura_Client_Type_ParentalRuleFilter',
		'KalturaParentalRuleListResponse' => 'Kaltura_Client_Type_ParentalRuleListResponse',
		'KalturaPartnerConfiguration' => 'Kaltura_Client_Type_PartnerConfiguration',
		'KalturaPartnerConfigurationFilter' => 'Kaltura_Client_Type_PartnerConfigurationFilter',
		'KalturaPartnerConfigurationHolder' => 'Kaltura_Client_Type_PartnerConfigurationHolder',
		'KalturaPartnerConfigurationListResponse' => 'Kaltura_Client_Type_PartnerConfigurationListResponse',
		'KalturaPaymentGatewayBaseProfile' => 'Kaltura_Client_Type_PaymentGatewayBaseProfile',
		'KalturaPaymentGatewayConfiguration' => 'Kaltura_Client_Type_PaymentGatewayConfiguration',
		'KalturaPaymentGatewayProfile' => 'Kaltura_Client_Type_PaymentGatewayProfile',
		'KalturaPaymentGatewayProfileListResponse' => 'Kaltura_Client_Type_PaymentGatewayProfileListResponse',
		'KalturaPaymentMethodProfile' => 'Kaltura_Client_Type_PaymentMethodProfile',
		'KalturaPaymentMethodProfileFilter' => 'Kaltura_Client_Type_PaymentMethodProfileFilter',
		'KalturaPaymentMethodProfileListResponse' => 'Kaltura_Client_Type_PaymentMethodProfileListResponse',
		'KalturaPermission' => 'Kaltura_Client_Type_Permission',
		'KalturaPermissionFilter' => 'Kaltura_Client_Type_PermissionFilter',
		'KalturaPermissionListResponse' => 'Kaltura_Client_Type_PermissionListResponse',
		'KalturaPersistedFilter' => 'Kaltura_Client_Type_PersistedFilter',
		'KalturaPersonalFeed' => 'Kaltura_Client_Type_PersonalFeed',
		'KalturaPersonalFeedFilter' => 'Kaltura_Client_Type_PersonalFeedFilter',
		'KalturaPersonalFeedListResponse' => 'Kaltura_Client_Type_PersonalFeedListResponse',
		'KalturaPersonalList' => 'Kaltura_Client_Type_PersonalList',
		'KalturaPersonalListFilter' => 'Kaltura_Client_Type_PersonalListFilter',
		'KalturaPersonalListListResponse' => 'Kaltura_Client_Type_PersonalListListResponse',
		'KalturaPersonalListSearchFilter' => 'Kaltura_Client_Type_PersonalListSearchFilter',
		'KalturaPin' => 'Kaltura_Client_Type_Pin',
		'KalturaPinResponse' => 'Kaltura_Client_Type_PinResponse',
		'KalturaPlaybackContext' => 'Kaltura_Client_Type_PlaybackContext',
		'KalturaPlaybackContextOptions' => 'Kaltura_Client_Type_PlaybackContextOptions',
		'KalturaPlaybackPluginData' => 'Kaltura_Client_Type_PlaybackPluginData',
		'KalturaPlaybackProfile' => 'Kaltura_Client_Type_PlaybackProfile',
		'KalturaPlaybackProfileFilter' => 'Kaltura_Client_Type_PlaybackProfileFilter',
		'KalturaPlaybackProfileListResponse' => 'Kaltura_Client_Type_PlaybackProfileListResponse',
		'KalturaPlaybackSource' => 'Kaltura_Client_Type_PlaybackSource',
		'KalturaPlayerAssetData' => 'Kaltura_Client_Type_PlayerAssetData',
		'KalturaPluginData' => 'Kaltura_Client_Type_PluginData',
		'KalturaPpv' => 'Kaltura_Client_Type_Ppv',
		'KalturaPpvEntitlement' => 'Kaltura_Client_Type_PpvEntitlement',
		'KalturaPpvFilter' => 'Kaltura_Client_Type_PpvFilter',
		'KalturaPpvListResponse' => 'Kaltura_Client_Type_PpvListResponse',
		'KalturaPpvPrice' => 'Kaltura_Client_Type_PpvPrice',
		'KalturaPremiumService' => 'Kaltura_Client_Type_PremiumService',
		'KalturaPreviewModule' => 'Kaltura_Client_Type_PreviewModule',
		'KalturaPrice' => 'Kaltura_Client_Type_Price',
		'KalturaPriceDetails' => 'Kaltura_Client_Type_PriceDetails',
		'KalturaPriceDetailsFilter' => 'Kaltura_Client_Type_PriceDetailsFilter',
		'KalturaPriceDetailsListResponse' => 'Kaltura_Client_Type_PriceDetailsListResponse',
		'KalturaPricePlan' => 'Kaltura_Client_Type_PricePlan',
		'KalturaPricePlanFilter' => 'Kaltura_Client_Type_PricePlanFilter',
		'KalturaPricePlanListResponse' => 'Kaltura_Client_Type_PricePlanListResponse',
		'KalturaProductCode' => 'Kaltura_Client_Type_ProductCode',
		'KalturaProductPrice' => 'Kaltura_Client_Type_ProductPrice',
		'KalturaProductPriceFilter' => 'Kaltura_Client_Type_ProductPriceFilter',
		'KalturaProductPriceListResponse' => 'Kaltura_Client_Type_ProductPriceListResponse',
		'KalturaProductsPriceListResponse' => 'Kaltura_Client_Type_ProductsPriceListResponse',
		'KalturaProgramAsset' => 'Kaltura_Client_Type_ProgramAsset',
		'KalturaPropertySkipCondition' => 'Kaltura_Client_Type_PropertySkipCondition',
		'KalturaPublicCouponGenerationOptions' => 'Kaltura_Client_Type_PublicCouponGenerationOptions',
		'KalturaPurchase' => 'Kaltura_Client_Type_Purchase',
		'KalturaPurchaseBase' => 'Kaltura_Client_Type_PurchaseBase',
		'KalturaPurchaseSession' => 'Kaltura_Client_Type_PurchaseSession',
		'KalturaPurchaseSettings' => 'Kaltura_Client_Type_PurchaseSettings',
		'KalturaPushMessage' => 'Kaltura_Client_Type_PushMessage',
		'KalturaPushParams' => 'Kaltura_Client_Type_PushParams',
		'KalturaRandomCouponGenerationOptions' => 'Kaltura_Client_Type_RandomCouponGenerationOptions',
		'KalturaRatio' => 'Kaltura_Client_Type_Ratio',
		'KalturaRatioListResponse' => 'Kaltura_Client_Type_RatioListResponse',
		'KalturaRecommendationProfile' => 'Kaltura_Client_Type_RecommendationProfile',
		'KalturaRecommendationProfileListResponse' => 'Kaltura_Client_Type_RecommendationProfileListResponse',
		'KalturaRecording' => 'Kaltura_Client_Type_Recording',
		'KalturaRecordingAsset' => 'Kaltura_Client_Type_RecordingAsset',
		'KalturaRecordingContextFilter' => 'Kaltura_Client_Type_RecordingContextFilter',
		'KalturaRecordingFilter' => 'Kaltura_Client_Type_RecordingFilter',
		'KalturaRecordingListResponse' => 'Kaltura_Client_Type_RecordingListResponse',
		'KalturaRegion' => 'Kaltura_Client_Type_Region',
		'KalturaRegionFilter' => 'Kaltura_Client_Type_RegionFilter',
		'KalturaRegionListResponse' => 'Kaltura_Client_Type_RegionListResponse',
		'KalturaRegionalChannel' => 'Kaltura_Client_Type_RegionalChannel',
		'KalturaRegistryResponse' => 'Kaltura_Client_Type_RegistryResponse',
		'KalturaRegistrySettings' => 'Kaltura_Client_Type_RegistrySettings',
		'KalturaRegistrySettingsListResponse' => 'Kaltura_Client_Type_RegistrySettingsListResponse',
		'KalturaRelatedEntity' => 'Kaltura_Client_Type_RelatedEntity',
		'KalturaRelatedEntityArray' => 'Kaltura_Client_Type_RelatedEntityArray',
		'KalturaRelatedExternalFilter' => 'Kaltura_Client_Type_RelatedExternalFilter',
		'KalturaRelatedFilter' => 'Kaltura_Client_Type_RelatedFilter',
		'KalturaRelatedObjectFilter' => 'Kaltura_Client_Type_RelatedObjectFilter',
		'KalturaReminder' => 'Kaltura_Client_Type_Reminder',
		'KalturaReminderFilter' => 'Kaltura_Client_Type_ReminderFilter',
		'KalturaReminderListResponse' => 'Kaltura_Client_Type_ReminderListResponse',
		'KalturaReport' => 'Kaltura_Client_Type_Report',
		'KalturaReportFilter' => 'Kaltura_Client_Type_ReportFilter',
		'KalturaReportListResponse' => 'Kaltura_Client_Type_ReportListResponse',
		'KalturaRequestConfiguration' => 'Kaltura_Client_Type_RequestConfiguration',
		'KalturaRule' => 'Kaltura_Client_Type_Rule',
		'KalturaRuleAction' => 'Kaltura_Client_Type_RuleAction',
		'KalturaSSOAdapterProfile' => 'Kaltura_Client_Type_SSOAdapterProfile',
		'KalturaSSOAdapterProfileListResponse' => 'Kaltura_Client_Type_SSOAdapterProfileListResponse',
		'KalturaScheduledRecordingProgramFilter' => 'Kaltura_Client_Type_ScheduledRecordingProgramFilter',
		'KalturaSearchAssetFilter' => 'Kaltura_Client_Type_SearchAssetFilter',
		'KalturaSearchAssetListFilter' => 'Kaltura_Client_Type_SearchAssetListFilter',
		'KalturaSearchExternalFilter' => 'Kaltura_Client_Type_SearchExternalFilter',
		'KalturaSearchHistory' => 'Kaltura_Client_Type_SearchHistory',
		'KalturaSearchHistoryFilter' => 'Kaltura_Client_Type_SearchHistoryFilter',
		'KalturaSearchHistoryListResponse' => 'Kaltura_Client_Type_SearchHistoryListResponse',
		'KalturaSeasonsReminderFilter' => 'Kaltura_Client_Type_SeasonsReminderFilter',
		'KalturaSegmentAllValues' => 'Kaltura_Client_Type_SegmentAllValues',
		'KalturaSegmentRange' => 'Kaltura_Client_Type_SegmentRange',
		'KalturaSegmentRanges' => 'Kaltura_Client_Type_SegmentRanges',
		'KalturaSegmentSource' => 'Kaltura_Client_Type_SegmentSource',
		'KalturaSegmentValue' => 'Kaltura_Client_Type_SegmentValue',
		'KalturaSegmentValues' => 'Kaltura_Client_Type_SegmentValues',
		'KalturaSegmentationType' => 'Kaltura_Client_Type_SegmentationType',
		'KalturaSegmentationTypeFilter' => 'Kaltura_Client_Type_SegmentationTypeFilter',
		'KalturaSegmentationTypeListResponse' => 'Kaltura_Client_Type_SegmentationTypeListResponse',
		'KalturaSegmentsCondition' => 'Kaltura_Client_Type_SegmentsCondition',
		'KalturaSeriesRecording' => 'Kaltura_Client_Type_SeriesRecording',
		'KalturaSeriesRecordingFilter' => 'Kaltura_Client_Type_SeriesRecordingFilter',
		'KalturaSeriesRecordingListResponse' => 'Kaltura_Client_Type_SeriesRecordingListResponse',
		'KalturaSeriesReminder' => 'Kaltura_Client_Type_SeriesReminder',
		'KalturaSeriesReminderFilter' => 'Kaltura_Client_Type_SeriesReminderFilter',
		'KalturaSession' => 'Kaltura_Client_Type_Session',
		'KalturaSessionInfo' => 'Kaltura_Client_Type_SessionInfo',
		'KalturaSingleSegmentValue' => 'Kaltura_Client_Type_SingleSegmentValue',
		'KalturaSkipCondition' => 'Kaltura_Client_Type_SkipCondition',
		'KalturaSkipOnErrorCondition' => 'Kaltura_Client_Type_SkipOnErrorCondition',
		'KalturaSlimAsset' => 'Kaltura_Client_Type_SlimAsset',
		'KalturaSocial' => 'Kaltura_Client_Type_Social',
		'KalturaSocialAction' => 'Kaltura_Client_Type_SocialAction',
		'KalturaSocialActionFilter' => 'Kaltura_Client_Type_SocialActionFilter',
		'KalturaSocialActionListResponse' => 'Kaltura_Client_Type_SocialActionListResponse',
		'KalturaSocialActionRate' => 'Kaltura_Client_Type_SocialActionRate',
		'KalturaSocialComment' => 'Kaltura_Client_Type_SocialComment',
		'KalturaSocialCommentFilter' => 'Kaltura_Client_Type_SocialCommentFilter',
		'KalturaSocialCommentListResponse' => 'Kaltura_Client_Type_SocialCommentListResponse',
		'KalturaSocialConfig' => 'Kaltura_Client_Type_SocialConfig',
		'KalturaSocialFacebookConfig' => 'Kaltura_Client_Type_SocialFacebookConfig',
		'KalturaSocialFriendActivity' => 'Kaltura_Client_Type_SocialFriendActivity',
		'KalturaSocialFriendActivityFilter' => 'Kaltura_Client_Type_SocialFriendActivityFilter',
		'KalturaSocialFriendActivityListResponse' => 'Kaltura_Client_Type_SocialFriendActivityListResponse',
		'KalturaSocialNetworkComment' => 'Kaltura_Client_Type_SocialNetworkComment',
		'KalturaSocialResponse' => 'Kaltura_Client_Type_SocialResponse',
		'KalturaSocialUser' => 'Kaltura_Client_Type_SocialUser',
		'KalturaSocialUserConfig' => 'Kaltura_Client_Type_SocialUserConfig',
		'KalturaStartDateOffsetRuleAction' => 'Kaltura_Client_Type_StartDateOffsetRuleAction',
		'KalturaStringValue' => 'Kaltura_Client_Type_StringValue',
		'KalturaStringValueArray' => 'Kaltura_Client_Type_StringValueArray',
		'KalturaSubscription' => 'Kaltura_Client_Type_Subscription',
		'KalturaSubscriptionDependencySet' => 'Kaltura_Client_Type_SubscriptionDependencySet',
		'KalturaSubscriptionDependencySetFilter' => 'Kaltura_Client_Type_SubscriptionDependencySetFilter',
		'KalturaSubscriptionEntitlement' => 'Kaltura_Client_Type_SubscriptionEntitlement',
		'KalturaSubscriptionFilter' => 'Kaltura_Client_Type_SubscriptionFilter',
		'KalturaSubscriptionListResponse' => 'Kaltura_Client_Type_SubscriptionListResponse',
		'KalturaSubscriptionPrice' => 'Kaltura_Client_Type_SubscriptionPrice',
		'KalturaSubscriptionSet' => 'Kaltura_Client_Type_SubscriptionSet',
		'KalturaSubscriptionSetFilter' => 'Kaltura_Client_Type_SubscriptionSetFilter',
		'KalturaSubscriptionSetListResponse' => 'Kaltura_Client_Type_SubscriptionSetListResponse',
		'KalturaSubscriptionSwitchSet' => 'Kaltura_Client_Type_SubscriptionSwitchSet',
		'KalturaT' => 'Kaltura_Client_Type_T',
		'KalturaTag' => 'Kaltura_Client_Type_Tag',
		'KalturaTagFilter' => 'Kaltura_Client_Type_TagFilter',
		'KalturaTagListResponse' => 'Kaltura_Client_Type_TagListResponse',
		'KalturaTimeOffsetRuleAction' => 'Kaltura_Client_Type_TimeOffsetRuleAction',
		'KalturaTimeShiftedTvPartnerSettings' => 'Kaltura_Client_Type_TimeShiftedTvPartnerSettings',
		'KalturaTopic' => 'Kaltura_Client_Type_Topic',
		'KalturaTopicFilter' => 'Kaltura_Client_Type_TopicFilter',
		'KalturaTopicListResponse' => 'Kaltura_Client_Type_TopicListResponse',
		'KalturaTransaction' => 'Kaltura_Client_Type_Transaction',
		'KalturaTransactionHistoryFilter' => 'Kaltura_Client_Type_TransactionHistoryFilter',
		'KalturaTransactionStatus' => 'Kaltura_Client_Type_TransactionStatus',
		'KalturaTranslationToken' => 'Kaltura_Client_Type_TranslationToken',
		'KalturaTvmDeviceRule' => 'Kaltura_Client_Type_TvmDeviceRule',
		'KalturaTvmGeoRule' => 'Kaltura_Client_Type_TvmGeoRule',
		'KalturaTvmRule' => 'Kaltura_Client_Type_TvmRule',
		'KalturaTvmRuleFilter' => 'Kaltura_Client_Type_TvmRuleFilter',
		'KalturaTvmRuleListResponse' => 'Kaltura_Client_Type_TvmRuleListResponse',
		'KalturaTwitterTwit' => 'Kaltura_Client_Type_TwitterTwit',
		'KalturaUnifiedPaymentRenewal' => 'Kaltura_Client_Type_UnifiedPaymentRenewal',
		'KalturaUploadToken' => 'Kaltura_Client_Type_UploadToken',
		'KalturaUploadedFileTokenResource' => 'Kaltura_Client_Type_UploadedFileTokenResource',
		'KalturaUrlResource' => 'Kaltura_Client_Type_UrlResource',
		'KalturaUsageModule' => 'Kaltura_Client_Type_UsageModule',
		'KalturaUserAssetRule' => 'Kaltura_Client_Type_UserAssetRule',
		'KalturaUserAssetRuleFilter' => 'Kaltura_Client_Type_UserAssetRuleFilter',
		'KalturaUserAssetRuleListResponse' => 'Kaltura_Client_Type_UserAssetRuleListResponse',
		'KalturaUserAssetsListItem' => 'Kaltura_Client_Type_UserAssetsListItem',
		'KalturaUserDataCondition' => 'Kaltura_Client_Type_UserDataCondition',
		'KalturaUserDynamicDataSource' => 'Kaltura_Client_Type_UserDynamicDataSource',
		'KalturaUserInterest' => 'Kaltura_Client_Type_UserInterest',
		'KalturaUserInterestListResponse' => 'Kaltura_Client_Type_UserInterestListResponse',
		'KalturaUserInterestTopic' => 'Kaltura_Client_Type_UserInterestTopic',
		'KalturaUserLoginPin' => 'Kaltura_Client_Type_UserLoginPin',
		'KalturaUserRole' => 'Kaltura_Client_Type_UserRole',
		'KalturaUserRoleFilter' => 'Kaltura_Client_Type_UserRoleFilter',
		'KalturaUserRoleListResponse' => 'Kaltura_Client_Type_UserRoleListResponse',
		'KalturaUserSegment' => 'Kaltura_Client_Type_UserSegment',
		'KalturaUserSegmentFilter' => 'Kaltura_Client_Type_UserSegmentFilter',
		'KalturaUserSegmentListResponse' => 'Kaltura_Client_Type_UserSegmentListResponse',
		'KalturaUserSocialActionResponse' => 'Kaltura_Client_Type_UserSocialActionResponse',
		'KalturaValue' => 'Kaltura_Client_Type_Value',
	);
	
	public static function getZendType($kalturaType)
	{
		if(isset(self::$map[$kalturaType]))
			return self::$map[$kalturaType];
		return null;
	}
}
