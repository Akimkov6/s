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

        $sql = "DROP TABLE {$this->a1_secret};";
        $sql = "DROP TABLE {$this->a1_dostyp};";
        $DB->Query($sql);
    }

    private function getSQLCreateTable()
    {
        return <<<SQL
        
CREATE TABLE {$this->a1_secret} (
    ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(15) NOT NULL,
  Text VARCHAR(1023) NOT NULL
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE {$this->a1_dostyp} (
    ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ID_Secret INT(11) UNSIGNED NOT NULL,
    ID_Dostyp INT(11) UNSIGNED NOT NULL
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

SQL;

    }
}
