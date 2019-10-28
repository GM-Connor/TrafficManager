<?php 

// Variables
// --------------------------------------------------

require_once( '_links.php' );



// Functions
// --------------------------------------------------

require_once( '_functions.php' );



// Main
// --------------------------------------------------

// Defaults
$default_tier1_link = pick_link_from_array(
	array()
);

$default_tier2_link = pick_link_from_array(
	array()
);



// Based on country
switch ( get_client_country_code() ) {

	// Tier 1
	
	case 'AU': // Australia
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'AT': // Austria
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'BE': // Belgium
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'CA': // Canada
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'DK': // Denmark
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'FI': // Finland
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'FR': // France
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'DE': // Germany
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'IE': // Ireland
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'IT': // Italy
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'LU': // Luxembourg
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'NL': // Netherlands
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'NZ': // New Zealand
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'NO': // Norway
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'ES': // Spain
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'SE': // Sweden
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'CH': // Switzerland
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'GB': // United Kingdom
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;

	case 'UM': // United States Minor Outlying Islands
	case 'US': // United States
		$link = pick_link_from_array(
			array(
				$default_tier1_link
			)
		);
		break;



	// Tier 2

	case 'AD': // Andorra
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'AR': // Argentina
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BS': // Bahamas
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BY': // Belarus
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BO': // Bolivia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BA': // Bosnia and Herzegovina
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BR': // Brazil
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BN': // Brunei Darussalam
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'BG': // Bulgaria
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'CL': // Chile
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'CN': // China
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'CO': // Colombia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'CR': // Costa Rica
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'HR': // Croatia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'CY': // Cyprus
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'CZ': // Czech Republic
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'DO': // Dominican Republic
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'EC': // Ecuador
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'EG': // Egypt
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'EE': // Estonia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'FJ': // Fiji
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'GR': // Greece
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'GY': // Guyana
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'HK': // Hong Kong
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'HU': // Hungary
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'IS': // Iceland
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'ID': // Indonesia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'IL': // Israel
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'JP': // Japan
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'KZ': // Kazakhstan
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'LV': // Latvia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'LT': // Lithuania
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'MO': // Macao
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'MY': // Malaysia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'MT': // Malta
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'MX': // Mexico
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'ME': // Montenegro
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'MA': // Morocco
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'NP': // Nepal
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'OM': // Oman
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PA': // Panama
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PY': // Paraguay
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PE': // Peru
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PH': // Philippines
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PL': // Poland
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PT': // Portugal
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'PR': // Puerto Rico
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'QA': // Qatar
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'KR': // Republic of Korea (South)
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'RO': // Romania
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'RU': // Russian Federation
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'SA': // Saudi Arabia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'RS': // Serbia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'SG': // Singapore
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'SK': // Slovakia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case '': // 
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case '': // 
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'TW': // Taiwan
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'SI': // Slovenia
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'ZA': // South Africa
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'TH': // Thailand
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'TR': // Turkey
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'UA': // Ukraine
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'AE': // United Arab Emirates
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'UY': // Uruguay
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;

	case 'VU': // Vanuatu
		$link = pick_link_from_array(
			array(
				$default_tier2_link
			)
		);
		break;



	// Tier 3

	case 'IN': // India
		$link = pick_link_from_array(
			array()
		);
		break;



	// Default

	default:
		$link = pick_link_from_array(
			array()
		);
		break;
}

// Redirect to url

header('Location: ' . $link);
die();

?>