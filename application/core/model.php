<?php
    class model
    {
        public function get_data()
        {
        }
        public static function delete_data($id)
        {
            try {
                $db = new PDO('mysql:host=localhost;dbname=conference',
                            'conference', '');         
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $data = $db->query('DELETE FROM conference WHERE id='.$id);       
                return $data;
            } catch(PDOException $e) {
                print "Couldn't connect to the database: " . $e->getMessage();
            }
        }
    }