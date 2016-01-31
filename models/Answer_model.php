<?php

    class Answer_model extends Model
    {
        public static $owner = [];
        public static $directory = [];
        public static $result = [];

        public function __construct()
        {
            parent::__construct();
        }

        public function search($semester, $module, $type, $year)
        {
            $st = $this->db->prepare('SELECT * from papers WHERE semester=:semester AND module=:module AND type=:type AND year=:year');
            $st->execute([
                ':semester' => $semester,
                ':module'   => $module,
                ':type'     => $type,
                ':year'     => $year,
            ]);
            while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
                array_push(static::$owner, $row['owner']);
                array_push(static::$directory, $row['directory']);
            }
            //echo json_encode(static::$owner);
            //echo json_encode(static::$directory);
            $size = count(static::$owner);
            for ($a = 0; $a < $size; $a++) {
                for ($b = 0; $b < 2; $b++) {
                    if ($b === 0) {
                        static::$result[$a][$b] = static::$owner[$a];
                    }
                    if ($b === 1) {
                        static::$result[$a][$b] = static::$directory[$a];
                    }
                }
            }
            echo json_encode(static::$result);
        }
    }
