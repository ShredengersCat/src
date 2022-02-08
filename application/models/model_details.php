<?php
class Model_Details extends model
{
    public function get_data()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=conference',
                'conference',
                ''
            );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $data = $db->query(
                "SELECT conference.id, conference.Title, conference.Date, conference.Latitude, '
                    . 'conference.Longitude, conference.id_country, country.Country FROM conference \n"
                    . "INNER JOIN country\n"
                    . "ON conference.id_country = country.id_country\n"
                    . "WHERE id = " . $routes[3] . ""
            );
            return $data;
        } catch (PDOException $e) {
            print "Couldn't connect to the database: " . $e->getMessage();
        }
    }
}
