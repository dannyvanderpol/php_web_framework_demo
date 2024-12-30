<?php use framework as F;

class ModelDatabaseTableTest extends F\ModelDatabaseTable
{
    public function __construct()
    {
        $this->database = DB_NAME;
        $this->table = "test";

        $this->fields = [
            (new F\ModelDatabaseField())->name("id")->type("INT")->isRequired(true)->autoIncrement(true)->isKey(true),
            (new F\ModelDatabaseField())->name("first_name")->type("VARCHAR(200)")->isRequired(true),
            (new F\ModelDatabaseField())->name("last_name")->type("VARCHAR(200)")->isRequired(true),
        ];

        parent::__construct(DB_HOST, DB_USER, DB_PASSWORD);
    }
}
