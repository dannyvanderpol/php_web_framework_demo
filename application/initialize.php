<?php

define("PAGE_TITLE", "PHP framework demo");

define("ROUTES", [
    ["DEFAULT",                                        "ControllerPages", "showHome"      ],

    // Route with parameters, can have different formats, we must define each format
    // Show the parameters demo page
    ["parameters",                                     "ControllerPages", "showParameters"],
    // Only parameter 1
    ["parameters/param-1/{param_1}",                   "ControllerPages", "showParameters"],
    // Only parameter 2
    ["parameters/param-2/{param_2}",                   "ControllerPages", "showParameters"],
    // Both parameters
    ["parameters/param-1/{param_1}/param-2/{param_2}", "ControllerPages", "showParameters"]
]);

define("SEARCH_PATHS", [
    "application/controllers",
    "application/models",
    "application/views"
]);
