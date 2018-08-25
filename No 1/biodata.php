<?php
$name = "Muhammad Avtara Khrisna";
$address = "Jalan Gunung Sumbing No 18 RT.3 RW.6 Bancarkembar, Purwokerto Utara,";
$hobbies = array("Swimming","Learn Something New", "Running");
$is_married = false;
$skills = [
    'Web' => ['HTML', 'CSS', 'JavaScript', 'Php'],
		'Mobile Development' => ['React Native'],
		'Other Language' => ['Node JS','Python']
];

$schools = [
    'highSchool' => 'SMK Shandy Putra Telkom Purwokerto',
    'universitas' => '-'
];

function biodata($name, $address, $hobbies, $is_married, $schools, $skills){
    return json_encode(array(
        'name' => $name,
        'address' => $address,
        'hobbies' => $hobbies,
        'is_married' => $is_married,
        'schools' => $schools,
        'skills' => $skills
    ),JSON_PRETTY_PRINT);
}

echo biodata($name, $address, $hobbies, $is_married, $schools, $skills);