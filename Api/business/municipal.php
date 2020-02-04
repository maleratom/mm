<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../Models/Business.php';


$database = new Database();
$db = $database->connect();

$business = new Business($db);

$result = $business->read_municipal();

//print_r($result);

$num = $result->rowCount();

if ($num > 0){
    $business_arr = array();
    $business_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);


        $business_item = array(
'gid'=>$gid,
'tbl_uid'=>$tbl_uid,
'biz_name'=>$biz_name,
'biz_description'=>$biz_description,
'biz_address'=>$biz_address,
'biz_subplace_uid'=>$biz_subplace_uid,
'latitude'=>$latitude,
'longitude'=>$longitude,
'biz_uid'=>$biz_uid,
'biz_category'=>$biz_category,
'biz_type'=>$biz_type,
'biz_owner_name'=>$biz_owner_name,
'biz_owner_gender'=>$biz_owner_gender,
'biz_owner_age'=>$biz_owner_age,
'biz_owner_nationality'=>$biz_owner_nationality,
'biz_owner_phone_number'=>$biz_owner_phone_number,
'biz_internet_access'=>$biz_internet_access,
'biz_bank_account_access'=>$biz_bank_account_access,
'biz_cipc_registered'=>$biz_cipc_registered,
'biz_sars_registered'=>$biz_sars_registered,
'biz_pos_needs'=>$biz_pos_needs,
'biz_date_of_capture'=>$biz_date_of_capture,
'biz_captured_by'=>$biz_captured_by,
'biz_form_uid'=>$biz_form_uid,
'biz_municipality_uid'=>$biz_municipality_uid,
'biz_provincial_uid'=>$biz_provincial_uid,
'biz_country_uid'=>$biz_country_uid,
'biz_operating_days'=>$biz_operating_days,
'biz_normal_operating_start_time'=>$biz_normal_operating_start_time,
'biz_normal_operating_close_time'=>$biz_normal_operating_close_time,
'biz_holiday_operating_start_time'=>$biz_holiday_operating_start_time,
'biz_holiday_operating_close_time'=>$biz_holiday_operating_close_time,
'biz_general_condition'>$biz_general_condition,
'biz_number_of_employees'=>$biz_number_of_employees,
'biz_daily_customers'=>$biz_daily_customers,
'biz_verifi'=>$biz_verifi,
'biz_weekend_daily_customers'=>$biz_weekend_daily_customers,
'biz_additional_comments'=>$biz_additional_comments,
'biz_owner_info_reliability' =>$biz_owner_info_reliability
        );

        array_push($business_arr['data'],$business_item);
        
    }
    echo json_encode($business_arr);

}else{

    echo json_encode(
        array('message'=>'No Business Found')
    );  

}