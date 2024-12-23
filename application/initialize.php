<?php

define("PAGE_TITLE", "PHP framework demo");

define("ROUTES", [
    ["DEFAULT", "ControllerPages", "showHome"]
]);

define("SEARCH_PATHS", [
    "application/controllers",
    "application/models",
    "application/views"
]);
