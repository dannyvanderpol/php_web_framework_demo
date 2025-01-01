<?php

define("PAGE_TITLE", "PHP framework demo");

define("ROUTES", [
    ["DEFAULT",                                         "ControllerPages",  "showHome"      ],

    // Route with parameters, can have different formats, we must define each format
    // Show the parameters demo page
    ["parameters",                                      "ControllerPages",  "showParameters"],
    // Only parameter 1
    ["parameters/param-1/{param_1}",                    "ControllerPages",  "showParameters"],
    // Only parameter 2
    ["parameters/param-2/{param_2}",                    "ControllerPages",  "showParameters"],
    // Both parameters
    ["parameters/param-1/{param_1}/param-2/{param_2}",  "ControllerPages",  "showParameters"],

    // Email test
    ["email-test",                                      "ControllerPages",  "showEmailTest" ],
    ["send-email",                                      "ControllerPost",   "sendEmail"     ],

    // Database
    ["database",                                        "ControllerPages",  "showDatabase"  ],
    ["database/process-record",                         "ControllerPost",   "processRecord" ],

    // Post data
    ["post",                                            "ControllerPages",  "showPost"      ],
    ["post-js",                                         "ControllerPost",   "processJsPost" ],

    // Show log files
    ["show-log/{filename}",                             "ControllerPages",  "showLogFile"   ]
]);

define("SEARCH_PATHS", [
    "application/controllers",
    "application/models",
    "application/views"
]);

// Test database settings, these are only for testing and not used in any real live database
define("DB_HOST",     "localhost");
define("DB_NAME",     "framework_demo");
define("DB_USER",     "framework_user");
define("DB_PASSWORD", "V3ryS3cr3tP@ssw0rd!");
