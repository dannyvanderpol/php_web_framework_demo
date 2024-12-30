<?php use framework as F;

$fields = F\arrayGet($this->pageData, "fields", []);
$records = F\arrayGet($this->pageData, "records", []);
$error = F\arrayGet($this->pageData, "error", "");

?>
<h3>Database</h3>
<p>This page demonstrates database access.</p>
<p>Before using this page, you need to enable the MySQLi extension for PHP.<br />
</p>You also need to setup a MySQL database and user account with the following settings:</p>
<table>
<tr><td>Host</td><td>{DB_HOST}</td></tr>
<tr><td>Database</td><td>{DB_NAME}</td></tr>
<tr><td>User</td><td>{DB_USER}</td></tr>
<tr><td>Password</td><td>{DB_PASSWORD}</td></tr>
</table>
<p>These are defined in the initialize.php of the application. The framework uses those defines.</p>
<p>&nbsp;</p>
<?php
$colspan = count($fields) + 1;

echo "<table class=\"record-table\">\n";
echo "<tr>";
foreach ($fields as $field)
{
    echo "<th>{$field->name}</th>";
}
echo "<th><th><tr>\n";
if (count($records) == 0)
{
    echo "<tr><td class=\"no-border\" colspan=\"{$colspan}\">No records</td></tr>\n";
}
else
{
    foreach ($records as $record)
    {
        echo "<form method=\"post\" action=\"{LINK_ROOT}database/process-record\">\n";
        echo "<input type=\"hidden\" name=\"record[id]\" value=\"{$record["id"]}\" />\n";
        echo "<tr>\n";
        echo "<td>{$record["id"]}</td>\n";
        echo "<td><input type=\"text\" name=\"record[first_name]\" value=\"{$record["first_name"]}\" /></td>\n";
        echo "<td><input type=\"text\" name=\"record[last_name]\" value=\"{$record["last_name"]}\" /></td>\n";
        echo "<td><button class=\"btn-small\" name=\"action\" value=\"save\">Save</button>\n";
        echo "<button class=\"btn-small\" name=\"action\" value=\"delete\">Delete</button></td>\n";
        echo "</tr>\n";
        echo "</form>\n";
    }
}

echo "<tr><td class=\"no-border\" colspan=\"{$colspan}\">&nbsp;</td></tr>\n";
echo "<tr><td class=\"no-border\" colspan=\"{$colspan}\">New record:</td></tr>\n";
echo "<form method=\"post\" action=\"{LINK_ROOT}database/process-record\">\n";
echo "<tr>\n";
echo "<td class=\"no-border\"></td>\n";
echo "<td class=\"no-border\"><input type=\"text\" name=\"record[first_name]\" /></td>\n";
echo "<td class=\"no-border\"><input type=\"text\" name=\"record[last_name]\" /></td>\n";
echo "<td class=\"no-border\"><button class=\"btn-small\" name=\"action\" value=\"add\">Add</button></td>\n";
echo "</tr>\n";
echo "</form>\n";
echo "</table>\n";

if ($error != "")
{
    echo "<p>Last error message: {$error}</p>\n";
}

?>
