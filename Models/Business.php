<?php
class Business {
    private $conn;
    private $table = 'business_locations';

public $gid;
public $biz_uid;
public $biz_name;
public $biz_description;
public $biz_address;
public $biz_subplace_uid;
public $latitude;
public $longitude;
public $biz_category;
public $biz_type;
public $biz_owner_name;
public $biz_owner_gender;
public $biz_owner_age;
public $biz_owner_nationality;
public $biz_owner_phone_number;
public $biz_internet_access;
public $biz_bank_account_access;
public $biz_cipc_registered;
public $biz_sars_registered;
public $biz_pos_needs;
public $biz_date_of_capture;
public $biz_captured_by;
public $biz_form_uid;
public $biz_municipality_uid;
public $biz_provincial_uid;
public $biz_country_uid;
public $biz_operating_days;
public $biz_normal_operating_start_time;
public $biz_normal_operating_close_time;
public $biz_holiday_operating_start_time;
public $biz_holiday_operating_close_time;
public $biz_general_condition;
public $biz_number_of_employees;
public $biz_daily_customers;
public $biz_verifi;
public $biz_weekend_daily_customers;
public $biz_additional_comments;
public $biz_owner_info_reliability;

//constructor with Db
public function __construct($db) {

    $this->conn = $db;
}

//Get business_locations
public function read() {
    $query = 'SELECT *
FROM ' . $this->table . '';

$stmt = $this->conn->prepare($query);
$stmt ->execute();
return $stmt;
}

public function read_single(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
     biz_type = ? 
    LIMIT 1 OFFSET 0';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_type);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_ssingle(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    tbl_uid = ? 
    LIMIT 1 OFFSET 0';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->tbl_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_suburb(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_subplace_uid = ?
    LIMIT 10';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_subplace_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->biz_subplace_uid = $row['biz_subplace_uid'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function read_municipal() {
    $query = 'SELECT *
FROM ' . $this->table . '';

$stmt = $this->conn->prepare($query);
$stmt ->execute();
return $stmt;
}

public function nationality(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_nationality = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bind_param('1', $this->biz_owner_nationality);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->biz_subplace_uid = $row['biz_subplace_uid'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_age(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_age = ?';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_owner_age);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->biz_subplace_uid = $row['biz_subplace_uid'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function category(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_category = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_category);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function gender(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_gender = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->BindParam(1, $this->biz_owner_gender);

    $stmt ->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function province(){
    $query = 'SELECT *
    
    FROM ' . $this->table . '
    WHERE
    biz_provincial_uid = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_provincial_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function form(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_form_uid = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_form_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_latitude(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    latitude = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->latitude);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->biz_subplace_uid = $row['biz_subplace_uid'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_longitude(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    longitude = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->longitude);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_phone(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_phone_number = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_owner_phone_number);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function captured(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
     biz_captured_by = ? 
    LIMIT 1 OFFSET 0';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_captured_by);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function date(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    tbl_uid = ? 
    LIMIT 1 OFFSET 0';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->tbl_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function pos_needs(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_subplace_uid = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->_biz_subplace_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function verifi(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_municipality_uid = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_municipality_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function customer(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_category = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_category);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function owner_name(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_gender = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->BindParam(1, $this->biz_owner_gender);

    $stmt ->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function operating_days(){
    $query = 'SELECT *
    
    FROM ' . $this->table . '
    WHERE
    biz_provincial_uid = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_provincial_uid);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function name(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_phone_number = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_owner_phone_number);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}


public function read_cipc(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_cipc_registered = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->_biz_cipc_registered);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function read_sars(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_sars_registered = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_sars_registered);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function read_captured_date(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_date_of_capture = ?';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_date_of_capture);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}

public function start_time(){
    $query = 'SELECT *
    
    FROM ' . $this->table . '
    WHERE
    biz_normal_operating_start_time = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_normal_operating_start_time);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function close_time(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_normal_operating_close_time = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_normal_operating_close_time);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function holiday_start(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_holiday_operating_start_time = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindParam(1, $this->biz_holiday_operating_start_time);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function holiday_close(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_holiday_operating_close_time = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_holiday_operating_close_time);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function condition(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_general_condition = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_general_condition);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function employees(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_number_of_employees = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_number_of_employees);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function customers(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_daily_customers = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_daily_customers);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function weekend(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_weekend_daily_customers = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_weekend_daily_customers);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function comments(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_additional_comments = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_additional_comments);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function reliability(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_owner_info_reliability = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_owner_info_reliability);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
public function description(){
    $query = 'SELECT *
    FROM ' . $this->table . '
    WHERE
    biz_description = ? ';
    $stmt = $this->conn->prepare($query);
   
    $stmt->bindValue(1, $this->biz_description);

    $stmt ->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->tbl_uid = $row['tbl_uid'];
    $this->biz_name = $row['biz_name'];
    $this->biz_description = $row['biz_description'];
    $this->biz_address = $row['biz_address'];
    $this->latitude = $row['latitude'];
    $this->longitude = $row['longitude'];
    $this->biz_category = $row['biz_category'];
    $this->biz_type = $row['biz_type'];
    $this->biz_owner_name = $row['biz_owner_name'];
    $this->biz_owner_gender = $row['biz_owner_gender'];
    $this->biz_owner_age = $row['biz_owner_age'];
    $this->biz_owner_nationality = $row['biz_owner_nationality'];
    $this->biz_owner_phone_number = $row['biz_owner_phone_number'];
    $this->biz_internet_access = $row['biz_internet_access'];
    $this->biz_bank_account_access = $row['biz_bank_account_access'];
    $this->biz_cipc_registered = $row['biz_cipc_registered'];
    $this->biz_sars_registered = $row['biz_sars_registered'];
    $this->biz_pos_needs = $row['biz_pos_needs'];
    $this->biz_date_of_capture = $row['biz_date_of_capture'];
    $this->biz_captured_by = $row['biz_captured_by'];
    $this->biz_form_uid = $row['biz_form_uid'];
    $this->biz_municipality_uid = $row['biz_municipality_uid'];
    $this->biz_provincial_uid = $row['biz_provincial_uid'];
    $this->biz_country_uid = $row['biz_country_uid'];
    $this->biz_operating_days = $row['biz_operating_days'];
    $this->biz_normal_operating_start_time = $row['biz_normal_operating_start_time'];
    $this->biz_normal_operating_close_time = $row['biz_normal_operating_close_time'];
    $this->biz_holiday_operating_start_time = $row['biz_holiday_operating_start_time'];
    $this->biz_holiday_operating_close_time = $row['biz_holiday_operating_close_time'];
    $this->biz_general_condition = $row['biz_general_condition'];
    $this->biz_number_of_employees = $row['biz_number_of_employees'];
    $this->biz_daily_customers = $row['biz_daily_customers'];
    $this->biz_verifi = $row['biz_verifi'];
    $this->biz_weekend_daily_customers = $row['biz_weekend_daily_customers'];
    $this->biz_additional_comments = $row['biz_additional_comments'];
    $this->biz_owner_info_reliability = $row['biz_owner_info_reliability'];

}
}