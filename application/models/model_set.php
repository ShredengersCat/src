<?php
    class Model_Set extends model
    {
        public function get_data()
        {
            try {
                $db = new PDO('mysql:host=localhost;dbname=conference',
                            'conference', '');         
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $data = $db->query(
                "SELECT conference.id, conference.Title, conference.Date, conference.id_country, country.Country FROM `conference` \n"
                . "INNER JOIN country\n"
                . "ON conference.id_country = country.id_country"
                );       
                return $data;
            } catch(PDOException $e) {
                print "Couldn't connect to the database: " . $e->getMessage();
            }
        }
    }
    
    