<?php

namespace samark\genfile;

class BaseGenerateFile
{
    /**
     * set host
     * @var string
     */
    private $host = '127.0.0.1';

    /**
     * set username
     * @var string
     */
    private $user = 'maxca';

    /**
     * set password
     * @var string
     */
    private $pass = '14712001';

    /**
     * set dbname
     * @var string
     */
    private $dbname = 'tsis';

    /**
     * instance of database connection
     * @var object
     */
    private $connect;

    public function __construct()
    {
        $this->connectDatabase();
    }

    public function getColumnName($table)
    {
        $sql = "SELECT `COLUMN_NAME`
					FROM `INFORMATION_SCHEMA`.`COLUMNS`
					WHERE `TABLE_SCHEMA`='tsis'
					    AND `TABLE_NAME`='{$table}';";
        $data = $this->connect->query($sql);
        if ($data->nun_rows > 0) {
        	$respones = [];
            while ($row = $data->fetch_assoc()) {
            	$respones[] = $row['COLUMNS']
            }
            return $respones;
        }
    }
    /**
     * [connectDatabase description]
     * @return [type] [description]
     */
    public function connectDatabase()
    {
        $this->connect = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->connect->connect_error) {
            die('mysqli connect error');
        }
        return $this;

    }
}
