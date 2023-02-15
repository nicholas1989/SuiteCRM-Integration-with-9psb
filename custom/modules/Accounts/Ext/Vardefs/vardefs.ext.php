<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Case']['fields']['source']['name']='source';
$dictionary['Case']['fields']['source']['vname']='LBL_SOURCE';
$dictionary['Case']['fields']['source']['type']='enum';


$dictionary['Account']['indices'][] = array(
     'name' => 'idx_phone_office_cstm',
     'type' => 'index',
     'fields' => array(
         0 => 'phone_office',
     ),
     'source' => 'non-db',
);

 // created: 2022-02-17 10:07:07
$dictionary['Account']['fields']['lga_c']['inline_edit']='1';
$dictionary['Account']['fields']['lga_c']['labelValue']='LGA';

 

 // created: 2022-02-17 10:23:17
$dictionary['Account']['fields']['phone_office']['inline_edit']=true;
$dictionary['Account']['fields']['phone_office']['comments']='The office phone number';
$dictionary['Account']['fields']['phone_office']['merge_filter']='disabled';

 

 // created: 2022-02-16 10:35:08
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2022-02-17 10:05:49
$dictionary['Account']['fields']['account_types_c']['inline_edit']='1';
$dictionary['Account']['fields']['account_types_c']['labelValue']='Account Type';

 

 // created: 2022-02-17 10:04:30
$dictionary['Account']['fields']['contact_type_c']['inline_edit']='1';
$dictionary['Account']['fields']['contact_type_c']['labelValue']='Contact Type';

 

 // created: 2022-02-17 10:06:29
$dictionary['Account']['fields']['state_c']['inline_edit']='1';
$dictionary['Account']['fields']['state_c']['labelValue']='State';

 

 // created: 2022-02-16 10:35:07
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2022-02-16 10:35:07
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2022-02-16 10:35:06
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2022-03-07 08:11:59
$dictionary['Account']['fields']['account_number_c']['inline_edit']='1';
$dictionary['Account']['fields']['account_number_c']['labelValue']='Account Number';

 

 // created: 2022-03-07 08:07:18
$dictionary['Account']['fields']['gender_c']['inline_edit']='1';
$dictionary['Account']['fields']['gender_c']['labelValue']='Gender';

 
?>