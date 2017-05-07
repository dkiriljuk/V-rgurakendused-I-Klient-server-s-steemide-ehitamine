<?php
class Devices{
        public function insert()
        {
            $name = $_POST['name'];
            $manufacture = $_POST['manufacture'];
            $model = $_POST['model'];
            $location = $_POST['location'];
            $ip = $_POST['ip'];
            $type = $_POST['type'];
            $database = new db();
            if ($insert = $database->execute("INSERT INTO devices (name, manufacture, model, location, ip, type) VALUES ('$name', '$manufacture', '$model', '$location', '$ip', '$type')")) {
                return "success";
            } 
            else {
                return "";

            }
        }
        public function select(){
            $return_arr = array();
            $database = new db();

            $Data = $database->getALL("SELECT * FROM devices");
            foreach($Data as $data) {
                $row_array['id'] = $data['id'];
                $row_array['name'] = $data['name'];
                $row_array['manufacture'] = $data['manufacture'];
                $row_array['model'] = $data['model'];
                $row_array['location'] = $data['location'];
                $row_array['ip'] = $data['ip'];
                $row_array['type'] = $data['type']; 
                array_push($return_arr,$row_array); 
            }
            return json_encode($return_arr);
        }
        public function markers(){
            $doc = new DOMDocument('1.0','UTF-8');
            $node = $doc->createElement("markers");
            $parnode = $doc->appendChild($node);

            $database = new db();
            header("Content-type: text/xml");
            $Data = $database->getALL("SELECT * FROM devices");
            $arr=array();
            foreach($Data as $data) {
                array_push($arr, $data['location']);
                $node = $doc->createElement("marker");
                $newnode = $parnode->appendChild($node);
                $newnode->setAttribute("id", $data['id']);
                $newnode->setAttribute("name", $data['name']);
                $newnode->setAttribute("address", $data['location']);
                $newnode->setAttribute("state", $data['state']);
                $vals = array_count_values($arr);
                foreach ($arr as &$value) {
                    $newnode->setAttribute("count", $vals[$value]);
                }
            }
            $xmlfile = $doc->saveXML();
            return $xmlfile;
        }
        public function login()
        {
            session_start();
                $database = new db(); 
                $usname = strip_tags($_POST['inputUsername']);
                $paswd = strip_tags($_POST['inputPassword']);
                $hash_pass = md5($paswd);
                $login = $database->getOne("SELECT id, username, password FROM login WHERE username = '$usname'");
                $id = $login['id'];
                $dbUsname = $login['username'];
                $dbPassword = $login['password'];
                if ($usname == $dbUsname && $hash_pass == $dbPassword) { 
                    $_SESSION['username'] = $usname;
                    $_SESSION['id'] = $id;
                    return header("Location: site.php");
                } 
            else {
                return "Abort";
            }   
        }
}      
?>
