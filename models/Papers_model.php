<?php

    class Papers_model extends Model
    {
        public static $directory = [];

        public function __construct()
        {
            parent::__construct();
        }

        public function search($semester, $module, $type, $year)
        {
            $st = $this->db->prepare('SELECT * from pastpapers WHERE semester=:semester AND module=:module AND type=:type AND year=:year');
            $st->execute([
                ':semester' => $semester,
                ':module'   => $module,
                ':type'     => $type,
                ':year'     => $year,
            ]);
            while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
                array_push(static::$directory, $row['directory']);
            }
            echo json_encode(static::$directory);
        }
    }
