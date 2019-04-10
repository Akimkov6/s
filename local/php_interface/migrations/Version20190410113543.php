<?php

namespace Sprint\Migration;


class Version20190410113543 extends Version
{
    protected $description = 'Создание таблицы для истории названий лотов';

    private $tableName = 'a_history_lots';

    public function up()
    {
        global $DB;

        $sql = $this->getSQLCreateTable();
        $DB->Query($sql);
    }

    public function down()
    {
        global $DB;

        $sql = "DROP TABLE {$this->tableName};";
        $DB->Query($sql);
    }

    private function getSQLCreateTable()
    {
        return <<<SQL
CREATE TABLE {$this->tableName} (
    ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NAME_LOTS VARCHAR(15) NOT NULL,
  RPS_NAME VARCHAR(15) NOT NULL,
  MONTH VARCHAR(15) NOT NULL,
  YEAR INT(4) UNSIGNED NOT NULL,
  DEPARTURE_STATION_ID INT(11) UNSIGNED NOT NULL,
  DESTINATION_STATION_ID INT(11) UNSIGNED NOT NULL,
  FREIGHT_ID INT(11) UNSIGNED NOT NULL
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
SQL;
    }
}
