<?php

/**
 * Returns countries for given criteria
 * 
 * @param string $region
 * @param string $language
 * @return array
 */
function langbf_get_countries( $region, $language ) {

	$supported_regions = array( 'europe', 'america', 'asia', 'africa', 'all' );
	$supported_languages = array( 'native', 'english' );

	if ( ! in_array( $region, $supported_regions ) || ! in_array( $language, $supported_languages ) ) {
		return array();
	}

	// Array of europe country codes with thier names in native language
	$europe_native = array(
		'at' => 'Österreich',
		'al' => 'Shqipëria',
		'be' => 'Belgien',
		'bg' => 'България',
		'by' => 'Беларусь',
		'ch' => 'Schweiz',
		'cz' => 'Česko',
		'de' => 'Deutschland',
		'dk' => 'Danmark',
		'ee' => 'Eesti',
		'es' => 'España',
		'fi' => 'Suomi',
		'fr' => 'France',
		'gr' => 'Ελλάδα',
		'hr' => 'Hrvatska',
		'hu' => 'Magyarország',
		'ie' => 'Ireland/Éire',
		'is' => 'Ísland',
		'it' => 'Italia',
		'li' => 'Liechtenstein',
		'lt' => 'Lietuva',
		'lu' => 'Luxemburg',
		'lv' => 'Latvija',
		'me' => 'Црна Гор',
		'mt' => 'Malta',
		'nl' => 'Nederland',
		'no' => 'Norge',
		'pl' => 'Polska',
		'pt' => 'Portugal',
		'ro' => 'România',
		'rs' => 'Србија',
		'ru' => 'Россия',
		'se' => 'Sverige',
		'si' => 'Slovenija',
		'sk' => 'Slovensko',
		'tr' => 'Türkiye',
		'ua' => 'Україна',
		'uk' => 'United Kingdom',
	);
/*
		'ad' => 'Andorra',
		'ba' => 'Bosna i Hercegovina',
		'mc' => 'Monaco',
		'md' => 'Moldova',
		'mk' => 'Македонија',
		'sm' => 'San Marino',
		'va' => 'Vatican',
		'abk' => 'Аҧсны',
		'xk' => 'Kosovë',
		'amd' => 'Լեռնային Ղարաբաղի Հանրապետություն',
		'nc-tr' => 'Kuzey Kıbrıs Türk Cumhuriyeti',
		'soos' => 'Республикæ Хуссар Ирыстон',
		'373' => 'Transnistria',
		'ax' => 'Åland',
		'fo' => 'Føroyar',
		'rs-ba' => 'Република Српска',
		'gi' => 'Gibraltar',
		'gg' => 'Guernesey',
		'im' => 'Ellan Vannin',
		'je' => 'Jersey',
		'sj' => 'Svalbard and Jan Mayen',
*/

	// Array of europe country codes with thier names in english language, just for admin panel to manage it easy
	$europe_english = array(
		'at' => __( 'Austria', LANGBF_TD ),
		'al' => __( 'Albania', LANGBF_TD ),
		'be' => __( 'Belgium', LANGBF_TD ),
		'bg' => __( 'Bulgaria', LANGBF_TD ),
		'by' => __( 'Belarus', LANGBF_TD ),
		'ch' => __( 'Switzerland', LANGBF_TD ),
		'cz' => __( 'Czech Republic', LANGBF_TD ),
		'de' => __( 'Germany', LANGBF_TD ),
		'dk' => __( 'Denmark', LANGBF_TD ),
		'ee' => __( 'Estonia', LANGBF_TD ),
		'es' => __( 'Spain', LANGBF_TD ),
		'fi' => __( 'Finland', LANGBF_TD ),
		'fr' => __( 'France', LANGBF_TD ),
		'gr' => __( 'Greece', LANGBF_TD ),
		'hr' => __( 'Croatia', LANGBF_TD ),
		'hu' => __( 'Hungary', LANGBF_TD ),
		'ie' => __( 'Ireland', LANGBF_TD ),
		'is' => __( 'Iceland', LANGBF_TD ),
		'it' => __( 'Italy', LANGBF_TD ),
		'li' => __( 'Liechtenstein', LANGBF_TD ),
		'lt' => __( 'Lithuania', LANGBF_TD ),
		'lu' => __( 'Luxembourg', LANGBF_TD ),
		'lv' => __( 'Latvia', LANGBF_TD ),
		'me' => __( 'Montenegro', LANGBF_TD ),
		'mt' => __( 'Malta', LANGBF_TD ),
		'nl' => __( 'Netherlands', LANGBF_TD ),
		'no' => __( 'Norway', LANGBF_TD ),
		'pl' => __( 'Poland', LANGBF_TD ),
		'pt' => __( 'Portugal', LANGBF_TD ),
		'ro' => __( 'Romania', LANGBF_TD ),
		'rs' => __( 'Serbia', LANGBF_TD ),
		'ru' => __( 'Russian Federation', LANGBF_TD ),
		'se' => __( 'Sweden', LANGBF_TD ),
		'si' => __( 'Slovenia', LANGBF_TD ),
		'sk' => __( 'Slovakia', LANGBF_TD ),
		'tr' => __( 'Turkey', LANGBF_TD ),
		'ua' => __( 'Ukraine', LANGBF_TD ),
		'uk' => __( 'United Kingdom', LANGBF_TD ),
	);
/*
		'ad' => __( 'Andorra', LANGBF_TD ),
		'ba' => __( 'Bosnia and Herzegovina', LANGBF_TD ),
		'mc' => __( 'Monaco', LANGBF_TD ),
		'md' => __( 'Moldova', LANGBF_TD ),
		'mk' => __( 'Macedonia', LANGBF_TD ),
		'sm' => __( 'San Marino', LANGBF_TD ),
		'va' => __( 'Vatican', LANGBF_TD ),
		'abk' => __( 'Abkhazia', LANGBF_TD ),
		'xk' => __( 'Kosovo', LANGBF_TD ),
		'amd' => __( 'Nagorno-Karabakh', LANGBF_TD ),
		'nc-tr' => __( 'Northern Cyprus', LANGBF_TD ),
		'soos' => __( 'South Ossetia', LANGBF_TD ),
		'373' => __( 'Transnistria', LANGBF_TD ),
		'ax' => __( 'Åland', LANGBF_TD ),
		'fo' => __( 'Faroe Islands', LANGBF_TD ),
		'rs-ba' => __( 'Republika Srpska', LANGBF_TD ),
		'gi' => __( 'Gibraltar', LANGBF_TD ),
		'gg' => __( 'Guernsey', LANGBF_TD ),
		'im' => __( 'Isle of Man', LANGBF_TD ),
		'je' => __( 'Jersey', LANGBF_TD ),
		'sj' => __( 'Svalbard and Jan Mayen', LANGBF_TD ),
*/

	// Array of americas country codes with thier names in native language
	$america_native = array(
		'ar' => 'Argentina',
		'bs' => 'Bahamas',
		'bb' => 'Barbados',
		'bz' => 'Belize',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'ca' => 'Canada',
		'cl' => 'Chile',
		'co' => 'Colombia',
		'cr' => 'Costa Rica',
		'cu' => 'Cuba',
		'dm' => 'Dominique',
		'do' => 'República Dominicana',
		'ec' => 'Ecuador',
		'sv' => 'El Salvador',
		'gd' => 'Grenada',
		'gt' => 'Guatemala',
		'gy' => 'Guyana',
		'ht' => 'Haïti',
		'hn' => 'Honduras',
		'jm' => 'Jamaica',
		'mx' => 'México',
		'ni' => 'Nicaragua',
		'pa' => 'Panamá',
		'py' => 'Paraguay',
		'pe' => 'Perú',
		'pr' => 'Puerto Rico',
		'sr' => 'Suriname',
		'tt' => 'Trinidad and Tobago',
		'us' => 'United States',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
	);
/*
		'bm' => 'Bermuda',
		'gl' => 'Kalaallit Nunaat',
		'pm' => 'Saint Pierre and Miquelon',
		'ai' => 'Anguilla',
		'ag' => 'Antigua and Barbuda',
		'aw' => 'Aruba',
		'nl-bo' => 'Bonaire',
		'vg' => 'British Virgin Islands',
		'ky' => 'Cayman Islands',
		'cw' => 'Curaçao',
		'fr-gd' => 'Guadeloupe',
		'fr-ma' => 'Martinique',
		'ms' => 'Montserrat',
		'bq' => 'Navassa Island',
		'nl-sa' => 'Saba',
		'bl' => 'Saint Barthélemy',
		'kn' => 'Saint Kitts and Nevis',
		'lc' => 'Saint Lucia',
		'mf' => 'Saint Martin',
		'vc' => 'Saint Vincent and the Grenadines',
		'nl-se' => 'Sint Eustatius',
		'sx' => 'Sint Maarten',
		'tc' => 'Turks and Caicos Islands',
		'vi' => 'United States Virgin Islands',
		'fk' => 'Falkland Islands',
		'fr-gu' => 'Guyane française',
		'gs' => 'South Georgia and South Sandwich Islands',
*/

	// Array of americas country codes with thier names in english language, just for admin panel to manage it easy
	$america_english = array(
		'ar' => __( 'Argentina', LANGBF_TD ),
		'bs' => __( 'Bahamas', LANGBF_TD ),
		'bb' => __( 'Barbados', LANGBF_TD ),
		'bz' => __( 'Belize', LANGBF_TD ),
		'bo' => __( 'Bolivia', LANGBF_TD ),
		'br' => __( 'Brazil', LANGBF_TD ),
		'ca' => __( 'Canada', LANGBF_TD ),
		'cl' => __( 'Chile', LANGBF_TD ),
		'co' => __( 'Colombia', LANGBF_TD ),
		'cr' => __( 'Costa Rica', LANGBF_TD ),
		'cu' => __( 'Cuba', LANGBF_TD ),
		'dm' => __( 'Dominica', LANGBF_TD ),
		'do' => __( 'Dominican Republic', LANGBF_TD ),
		'ec' => __( 'Ecuador', LANGBF_TD ),
		'sv' => __( 'El Salvador', LANGBF_TD ),
		'gd' => __( 'Grenada', LANGBF_TD ),
		'gt' => __( 'Guatemala', LANGBF_TD ),
		'gy' => __( 'Guyana', LANGBF_TD ),
		'ht' => __( 'Haiti', LANGBF_TD ),
		'hn' => __( 'Honduras', LANGBF_TD ),
		'jm' => __( 'Jamaica', LANGBF_TD ),
		'mx' => __( 'Mexico', LANGBF_TD ),
		'ni' => __( 'Nicaragua', LANGBF_TD ),
		'pa' => __( 'Panama', LANGBF_TD ),
		'py' => __( 'Paraguay', LANGBF_TD ),
		'pe' => __( 'Peru', LANGBF_TD ),
		'pr' => __( 'Puerto Rico', LANGBF_TD ),
		'sr' => __( 'Suriname', LANGBF_TD ),
		'tt' => __( 'Trinidad and Tobago', LANGBF_TD ),
		'us' => __( 'United States', LANGBF_TD ),
		'uy' => __( 'Uruguay', LANGBF_TD ),
		've' => __( 'Venezuela', LANGBF_TD ),
	);
/*
		'bm' => __( 'Bermuda', LANGBF_TD ),
		'gl' => __( 'Greenland', LANGBF_TD ),
		'pm' => __( 'Saint Pierre and Miquelon', LANGBF_TD ),
		'ai' => __( 'Anguilla', LANGBF_TD ),
		'ag' => __( 'Antigua and Barbuda', LANGBF_TD ),
		'aw' => __( 'Aruba', LANGBF_TD ),
		'nl-bo' => __( 'Bonaire', LANGBF_TD ),
		'vg' => __( 'British Virgin Islands', LANGBF_TD ),
		'ky' => __( 'Cayman Islands', LANGBF_TD ),
		'cw' => __( 'Curaçao', LANGBF_TD ),
		'fr-gd' => __( 'Guadeloupe', LANGBF_TD ),
		'fr-ma' => __( 'Martinique', LANGBF_TD ),
		'ms' => __( 'Montserrat', LANGBF_TD ),
		'bq' => __( 'Navassa Island', LANGBF_TD ),
		'nl-sa' => __( 'Saba', LANGBF_TD ),
		'bl' => __( 'Saint Barthélemy', LANGBF_TD ),
		'kn' => __( 'Saint Kitts and Nevis', LANGBF_TD ),
		'lc' => __( 'Saint Lucia', LANGBF_TD ),
		'mf' => __( 'Saint Martin', LANGBF_TD ),
		'vc' => __( 'Saint Vincent and the Grenadines', LANGBF_TD ),
		'nl-se' => __( 'Sint Eustatius', LANGBF_TD ),
		'sx' => __( 'Sint Maarten', LANGBF_TD ),
		'tc' => __( 'Turks and Caicos Islands', LANGBF_TD ),
		'vi' => __( 'United States Virgin Islands', LANGBF_TD ),
		'fk' => __( 'Falkland Islands', LANGBF_TD ),
		'fr-gu' => __( 'French Guiana', LANGBF_TD ),
		'gs' => __( 'South Georgia and South Sandwich Islands', LANGBF_TD ),
*/

	// Array of asia country codes with thier names in native language
	$asia_native = array(
		'af' => 'افغانستان',
		'am' => 'Հայաստան',
		'au' => 'Australia',
		'az' => 'Azərbaycan',
		'bh' => '‏البحرين',
		'bd' => 'বাংলাদেশ',
		'bt' => 'འབྲུག་ཡུལ་',
		'bn' => 'نڬارا بروني دارالسلام',
		'kh' => 'Kâmpŭchéa',
		'cn' => '中国/中华',
		'cy' => 'Κύπρος',
		'ge' => 'საქართველო',
		'hk' => '香港',
		'in' => 'भारत गणराज्य',
		'id' => 'Indonesia',
		'ir' => 'ایران',
		'iq' => 'العراق',
		'il' => 'מְדִינַת יִשְׂרָאֵל',
		'jp' => '日本',
		'jo' => 'اَلأُرْدُن',
		'kz' => 'Қазақстан',
		'kw' => 'دولة الكويت',
		'kg' => 'Кыргызстан',
		'la' => 'ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ',
		'lb' => 'لُبْنَان',
		'my' => 'Malaysia',
		'mv' => 'ދިވެހިރާއްޖެ',
		'mn' => 'Монгол улс',
		'mm' => 'Myanmar',
		'np' => 'नेपाल',
		'nz' => 'New Zealand',
		'kp' => '朝鮮民主主義人民共和國',
		'om' => 'عمان',
		'pk' => 'پاکِستان',
		'pg' => 'Papua Niugini',
		'ph' => 'Pilipinas',
		'qa' => 'قطر',
		'sa' => 'العربية السعودية',
		'sg' => 'Singapore',
		'kr' => '大韓民國',
		'lk' => 'ශ්‍රී ලංකා',
		'sy' => 'سورية',
		'tw' => '台灣',
		'tj' => 'Тоҷикистон',
		'th' => 'ประเทศไทย',
		'tl' => 'Timór Lorosa\'e',
		'tm' => 'Türkmenistan',
		'ae' => 'دولة الإمارات العربية المتحدة',
		'uz' => 'O‘zbekiston',
		'vn' => 'Việt Nam',
		'ye' => 'الجمهورية اليمنية',
	);
/*
		'ps' => 'فلسطين',
		'cy-ad' => 'Akrotiri and Dhekelia',
		'io' => 'British Indian Ocean Territory',
		'cx' => 'Christmas Island',
		'cc' => 'Cocos (Keeling) Islands',
		'mo' => '澳門',
		'nf' => 'Norfolk Island',
		'fj' => 'Viti',
		'nc' => 'Nouvelle-Calédonie',
		'sb' => 'Solomon Islands',
		'vu' => 'Vanuatu',
		'fm' => 'Federated States of Micronesia',
		'gu' => 'Guåhån',
		'ki' => 'Kiribati',
		'mh' => 'Marshall Islands',
		'nr' => 'Nauru',
		'mp' => 'Northern Mariana Islands',
		'pw' => 'Palau',
		'um' => 'Wake Island',
		'as' => 'Amerika Sāmoa',
		'ck' => 'Kūki 'Āirani',
		'cl' => 'Rapa Nui',
		'pf' => 'Polynésie française',
		'us-ha' => 'Hawaiʻi',
		'nu' => 'Niuē',
		'pn' => 'Pitcairn Islands',
		'ws' => 'Sāmoa',
		'tk' => 'Tokelau',
		'to' => 'Tonga',
		'tv' => 'Tuvalu',
		'wf' => 'Wallis et Futuna',
*/

	// Array of asia country codes with thier names in english language, just for admin panel to manage it easy
	$asia_english = array(
		'af' => __( 'Afghanistan', LANGBF_TD ),
		'am' => __( 'Armenia', LANGBF_TD ),
		'au' => __( 'Australia', LANGBF_TD ),
		'az' => __( 'Azerbaijan', LANGBF_TD ),
		'bh' => __( 'Bahrain', LANGBF_TD ),
		'bd' => __( 'Bangladesh', LANGBF_TD ),
		'bt' => __( 'Bhutan', LANGBF_TD ),
		'bn' => __( 'Brunei', LANGBF_TD ),
		'kh' => __( 'Cambodia', LANGBF_TD ),
		'cn' => __( 'China', LANGBF_TD ),
		'cy' => __( 'Cyprus', LANGBF_TD ),
		'ge' => __( 'Georgia', LANGBF_TD ),
		'hk' => __( 'Hong Kong', LANGBF_TD ),
		'in' => __( 'India', LANGBF_TD ),
		'id' => __( 'Indonesia', LANGBF_TD ),
		'ir' => __( 'Iran', LANGBF_TD ),
		'iq' => __( 'Iraq', LANGBF_TD ),
		'il' => __( 'Israel', LANGBF_TD ),
		'jp' => __( 'Japan', LANGBF_TD ),
		'jo' => __( 'Jordan', LANGBF_TD ),
		'kz' => __( 'Kazakhstan', LANGBF_TD ),
		'kw' => __( 'Kuwait', LANGBF_TD ),
		'kg' => __( 'Kyrgyzstan', LANGBF_TD ),
		'la' => __( 'Laos', LANGBF_TD ),
		'lb' => __( 'Lebanon', LANGBF_TD ),
		'my' => __( 'Malaysia', LANGBF_TD ),
		'mv' => __( 'Maldives', LANGBF_TD ),
		'mn' => __( 'Mongolia', LANGBF_TD ),
		'mm' => __( 'Myanmar', LANGBF_TD ),
		'np' => __( 'Nepal', LANGBF_TD ),
		'nz' => __( 'New Zealand', LANGBF_TD ),
		'kp' => __( 'North Korea', LANGBF_TD ),
		'om' => __( 'Oman', LANGBF_TD ),
		'pk' => __( 'Pakistan', LANGBF_TD ),
		'pg' => __( 'Papua New Guinea', LANGBF_TD ),
		'ph' => __( 'Philippines', LANGBF_TD ),
		'qa' => __( 'Qatar', LANGBF_TD ),
		'sa' => __( 'Saudi Arabia', LANGBF_TD ),
		'sg' => __( 'Singapore', LANGBF_TD ),
		'kr' => __( 'South Korea', LANGBF_TD ),
		'lk' => __( 'Sri Lanka', LANGBF_TD ),
		'sy' => __( 'Syria', LANGBF_TD ),
		'tw' => __( 'Taiwan', LANGBF_TD ),
		'tj' => __( 'Tajikistan', LANGBF_TD ),
		'th' => __( 'Thailand', LANGBF_TD ),
		'tl' => __( 'Timor-Leste', LANGBF_TD ),
		'tm' => __( 'Turkmenistan', LANGBF_TD ),
		'ae' => __( 'United Arab Emirates', LANGBF_TD ),
		'uz' => __( 'Uzbekistan', LANGBF_TD ),
		'vn' => __( 'Vietnam', LANGBF_TD ),
		'ye' => __( 'Yemen', LANGBF_TD ),
	);
/*
		'ps' => __( 'Palestine', LANGBF_TD ),
		'cy-ad' => __( 'Akrotiri and Dhekelia', LANGBF_TD ),
		'io' => __( 'British Indian Ocean Territory', LANGBF_TD ),
		'cx' => __( 'Christmas Island', LANGBF_TD ),
		'cc' => __( 'Cocos (Keeling) Islands', LANGBF_TD ),
		'mo' => __( 'Macau', LANGBF_TD ),
		'nf' => __( 'Norfolk Island', LANGBF_TD ),
		'fj' => __( 'Fiji', LANGBF_TD ),
		'nc' => __( 'New Caledonia', LANGBF_TD ),
		'sb' => __( 'Solomon Islands', LANGBF_TD ),
		'vu' => __( 'Vanuatu', LANGBF_TD ),
		'fm' => __( 'Federated States of Micronesia', LANGBF_TD ),
		'gu' => __( 'Guam', LANGBF_TD ),
		'ki' => __( 'Kiribati', LANGBF_TD ),
		'mh' => __( 'Marshall Islands', LANGBF_TD ),
		'nr' => __( 'Nauru', LANGBF_TD ),
		'mp' => __( 'Northern Mariana Islands', LANGBF_TD ),
		'pw' => __( 'Palau', LANGBF_TD ),
		'um' => __( 'Wake Island', LANGBF_TD ),
		'as' => __( 'American Samoa', LANGBF_TD ),
		'ck' => __( 'Cook Islands', LANGBF_TD ),
		'cl' => __( 'Easter Island', LANGBF_TD ),
		'pf' => __( 'French Polynesia', LANGBF_TD ),
		'us-ha' => __( 'Hawaii', LANGBF_TD ),
		'nu' => __( 'Niue', LANGBF_TD ),
		'pn' => __( 'Pitcairn Islands', LANGBF_TD ),
		'ws' => __( 'Samoa', LANGBF_TD ),
		'tk' => __( 'Tokelau', LANGBF_TD ),
		'to' => __( 'Tonga', LANGBF_TD ),
		'tv' => __( 'Tuvalu', LANGBF_TD ),
		'wf' => __( 'Wallis and Futuna', LANGBF_TD ),
*/

	// Array of africa country codes with thier names in native language
	$africa_native = array(
		'dz' => 'الجزائر‎',
		'ao' => 'Angola',
		'bj' => 'Bénin',
		'bw' => 'Botswana',
		'bf' => 'Burkina Faso',
		'bi' => 'Burundi',
		'cm' => 'Cameroun',
		'cv' => 'Cabo Verde',
		'cf' => 'Centrafrique',
		'td' => 'Tchad',
		'km' => 'Union des Comores',
		'cg' => 'République du Congo',
		'cd' => 'République démocratique du Congo',
		'ci' => 'Côte d\'Ivoire',
		'dj' => 'Djibouti',
		'eg' => 'مصر',
		'gq' => 'Guinea Ecuatorial',
		'er' => 'ኤርትራ',
		'et' => 'ኢትዮጵያ',
		'ga' => 'Gabon',
		'gm' => 'Gambia',
		'gh' => 'Ghana',
		'gn' => 'Guinea',
		'gw' => 'Guiné-Bissau',
		'ke' => 'Kenya',
		'ls' => 'Lesotho',
		'lr' => 'Liberia',
		'ly' => 'ليبيا‎',
		'mg' => 'Madagasikara',
		'mw' => 'Malawi',
		'ml' => 'Mali',
		'mr' => 'موريتانيا',
		'mu' => 'Moris',
		'ma' => 'المغرب‎',
		'mz' => 'Moçambique',
		'na' => 'Namibia',
		'ne' => 'Niger',
		'ng' => 'Nigeria',
		'rw' => 'Rwanda',
		'st' => 'São Tomé and Príncipe',
		'sn' => 'le Sénégal',
		'sc' => 'Seychelles',
		'sl' => 'Sierra Leone',
		'so' => 'Soomaaliya',
		'za' => 'South Africa',
		'sd' => 'السودان‎',
		'sz' => 'Swaziland',
		'tz' => 'Tanzania',
		'tg' => 'Togo',
		'tn' => 'تونس‎',
		'ug' => 'Uganda',
		'zm' => 'Zambia',
		'zw' => 'Zimbabwe',
	);
/*
		'ic' => 'Islas Canarias',
		'es-ce' => 'Ceuta',
		'pt-30' => 'Madeira',
		'yt' => 'Mayotte',
		'es-ml' => 'Melilla',
		're' => 'Réunion',
		'eh' => 'الجمهورية العربية الصحراوية الديمقراطية',
		'sh' => 'Saint Helena',
		'ss' => 'South Sudan',
*/

	// Array of africa country codes with thier names in english language, just for admin panel to manage it easy
	$africa_english = array(
		'dz' => __( 'Algeria', LANGBF_TD ),
		'ao' => __( 'Angola', LANGBF_TD ),
		'bj' => __( 'Benin', LANGBF_TD ),
		'bw' => __( 'Botswana', LANGBF_TD ),
		'bf' => __( 'Burkina Faso', LANGBF_TD ),
		'bi' => __( 'Burundi', LANGBF_TD ),
		'cm' => __( 'Cameroon', LANGBF_TD ),
		'cv' => __( 'Cape Verde', LANGBF_TD ),
		'cf' => __( 'Central African Republic', LANGBF_TD ),
		'td' => __( 'Chad', LANGBF_TD ),
		'km' => __( 'Comoros', LANGBF_TD ),
		'cg' => __( 'Republic of the Congo', LANGBF_TD ),
		'cd' => __( 'Democratic Republic of the Congo', LANGBF_TD ),
		'ci' => __( 'Côte d\'Ivoire', LANGBF_TD ),
		'dj' => __( 'Djibouti', LANGBF_TD ),
		'eg' => __( 'Egypt', LANGBF_TD ),
		'gq' => __( 'Equatorial Guinea', LANGBF_TD ),
		'er' => __( 'Eritrea', LANGBF_TD ),
		'et' => __( 'Ethiopia', LANGBF_TD ),
		'ga' => __( 'Gabon', LANGBF_TD ),
		'gm' => __( 'Gambia', LANGBF_TD ),
		'gh' => __( 'Ghana', LANGBF_TD ),
		'gn' => __( 'Guinea', LANGBF_TD ),
		'gw' => __( 'Guinea-Bissau', LANGBF_TD ),
		'ke' => __( 'Kenya', LANGBF_TD ),
		'ls' => __( 'Lesotho', LANGBF_TD ),
		'lr' => __( 'Liberia', LANGBF_TD ),
		'ly' => __( 'Libya', LANGBF_TD ),
		'mg' => __( 'Madagascar', LANGBF_TD ),
		'mw' => __( 'Malawi', LANGBF_TD ),
		'ml' => __( 'Mali', LANGBF_TD ),
		'mr' => __( 'Mauritania', LANGBF_TD ),
		'mu' => __( 'Mauritius', LANGBF_TD ),
		'ma' => __( 'Morocco', LANGBF_TD ),
		'mz' => __( 'Mozambique', LANGBF_TD ),
		'na' => __( 'Namibia', LANGBF_TD ),
		'ne' => __( 'Niger', LANGBF_TD ),
		'ng' => __( 'Nigeria', LANGBF_TD ),
		'rw' => __( 'Rwanda', LANGBF_TD ),
		'st' => __( 'São Tomé and Príncipe', LANGBF_TD ),
		'sn' => __( 'Senegal', LANGBF_TD ),
		'sc' => __( 'Seychelles', LANGBF_TD ),
		'sl' => __( 'Sierra Leone', LANGBF_TD ),
		'so' => __( 'Somalia', LANGBF_TD ),
		'za' => __( 'South Africa', LANGBF_TD ),
		'sd' => __( 'Sudan', LANGBF_TD ),
		'sz' => __( 'Swaziland', LANGBF_TD ),
		'tz' => __( 'Tanzania', LANGBF_TD ),
		'tg' => __( 'Togo', LANGBF_TD ),
		'tn' => __( 'Tunisia', LANGBF_TD ),
		'ug' => __( 'Uganda', LANGBF_TD ),
		'zm' => __( 'Zambia', LANGBF_TD ),
		'zw' => __( 'Zimbabwe', LANGBF_TD ),
	);
/*
		'ic' => __( 'Canary Islands', LANGBF_TD ),
		'es-ce' => __( 'Ceuta', LANGBF_TD ),
		'pt-30' => __( 'Madeira', LANGBF_TD ),
		'yt' => __( 'Mayotte', LANGBF_TD ),
		'es-ml' => __( 'Melilla', LANGBF_TD ),
		're' => __( 'Réunion', LANGBF_TD ),
		'eh' => __( 'Sahrawi Arab Democratic Republic', LANGBF_TD ),
		'sh' => __( 'Saint Helena', LANGBF_TD ),
		'ss' => __( 'South Sudan', LANGBF_TD ),
*/


	if ( $region == 'all' ) {
		$countries = array_merge( ${'europe_' . $language}, ${'america_' . $language}, ${'asia_' . $language}, ${'africa_' . $language} );
	} else {
		$countries = ${$region . '_' . $language};
	}

	return apply_filters( 'langbf_countries', $countries, $region, $language );
}

