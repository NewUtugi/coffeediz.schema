<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "IMAGE_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("IMAGE_PARAMS"),
        ),
        "WORKSFOR_PARAMS" => array(
            "SORT" => 130,
            "NAME" => GetMessage("WORKSFOR_PARAMS"),
        ),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "CHECKBOX",
		),
        "NAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("NAME"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "ADDITIONALNAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("additionalName"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "FAMILYNAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("familyName"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "JOBTITLE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("jobTitle"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "IMAGEURL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("IMAGEURL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "REFRESH" => "Y",
        ),
        "WORKSFORNAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("worksForNAME"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "REFRESH" => "Y",
        ),
        "PERSON_URL_SAMEAS" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_URL_SAMEAS"),
            "TYPE" => "STRING",
            "MULTIPLE" =>"Y",
        ),
        "PERSON_URL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_URL"),
            "TYPE" => "STRING",
            "MULTIPLE" =>"Y",
        ),
        "PERSON_PHONE" => Array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_PHONE"),
            "TYPE" =>"STRING",
            "MULTIPLE" =>"Y",
        ),
        "PERSON_EMAIL" => Array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_EMAIL"),
            "TYPE" =>"STRING",
            "MULTIPLE" =>"Y",
        ),

        "ITEMPROP" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("itemprop"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "author" => "author",
            ),
        ),
	)
);

//START IMAGE DETAIL
if (!empty($arCurrentValues['IMAGEURL']))
{
    $arComponentParameters["PARAMETERS"]["IMAGE_NAME"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_CAPTION"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_CAPTION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_DESCRIPTION"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_HEIGHT"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_HEIGHT"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_WIDTH"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_WIDTH"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_TRUMBNAIL_CONTENTURL"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_TRUMBNAIL_CONTENTURL"),
        "TYPE" => "STRING",
    );
}
//END IMAGE DETAIL

//START WORKS_FOR
if (!empty($arCurrentValues['WORKSFORNAME']))
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_DESCRIPTION"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_SITE"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_SITE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_PHONE"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_PHONE"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_POST_CODE"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_POST_CODE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_COUNTRY"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_COUNTRY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_REGION"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_REGION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_LOCALITY"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_LOCALITY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_ADDRESS"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_ADDRESS"),
        "TYPE" => "STRING",
    );
}
//END WORKS_FOR

