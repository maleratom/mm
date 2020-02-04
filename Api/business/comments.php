<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../Models/Business.php';

$database = new Database();
$db = $database->connect();

$business = new Business($db);

$business->biz_additional_comments = isset($_GET['BusinessAdditionalComments'])? $_GET['BusinessAdditionalComments'] : die();

$business->comments();

$business_arr = array(
    'BusinessName'=> $business->biz_name,
    'BusinessDescription'=> $business->biz_description,
    'BusinessAddress'=> $business->biz_address,
    'BusinessSuburbId'=> $business->biz_subplace_uid,
    'Latitude'=> $business->latitude,
    'Longitude'=> $business->longitude,
    'BusinessId'=> $business->biz_uid,
    'BusinessCategory'=> $business->biz_category,
    'BusinessType'=> $business->biz_type,
    'BusinessOwnerName'=> $business->biz_owner_name,
    'BusinessOwnerGender'=> $business->biz_owner_gender,
    'BusinessAwnerAge'=> $business->biz_owner_age,
    'BusinessOwnerNationality'=> $business->biz_owner_nationality,
    'BusinessOwnerPhoneNumber'=> $business->biz_owner_phone_number,
    'BusinessInternetAccess'=> $business->biz_internet_access,
    'BusinessBankAccountAccess'=> $business->biz_bank_account_access,
    'BusinessCpicRegistered'=> $business->biz_cipc_registered,
    'BusinessSarsRegistered'=> $business->biz_sars_registered,
    'BusinessPosNeeds'=> $business->biz_pos_needs,
    'BusinessDateOfCapture'=> $business->biz_date_of_capture,
    'BusinessCapturedBy'=> $business->biz_captured_by,
    'BusinessFormId'=> $business->biz_form_uid,
    'BusinessMunicipalityId'=> $business->biz_municipality_uid,
    'BusinessProvincialId'=> $business->biz_provincial_uid,
    'BusinessCountryId'=> $business->biz_country_uid,
    'BusinessOperatingDays'=> $business->biz_operating_days,
    'BusinessNormalOperatingStartTime'=> $business->biz_normal_operating_start_time,
    'BusinessNormalOperatingCloseTime'=> $business->biz_normal_operating_close_time,
    'BusinessHolidayOperatingStartTime'=> $business->biz_holiday_operating_start_time,
    'BusinessHolidayOperatingCloseTime'=> $business->biz_holiday_operating_close_time,
    'BusinssGeneralCondition'> $business->biz_general_condition,
    'BusinessNumberOfEmployees'=> $business->biz_number_of_employees,
    'BusinessDailyCustomers'=> $business->biz_daily_customers,
    'BusinessVerifi'=> $business->biz_verifi,
    'BusinesseekendDailyCustomers'=> $business->biz_weekend_daily_customers,
    'BusinessAdditionalComments'=> $business->biz_additional_comments,
    'BusinessOwnerInfoReliability' => $business->biz_owner_info_reliability
    );
    print_r(json_encode($business_arr));
    ?>