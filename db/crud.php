<?php
    class crud{
        private $db;

        function __construct($conn){
            $this->db =$conn;
        }

        public function insert ($gfname,$gmname,$glname,$gdob,$gage,$gstatus,$goccupation,$gaddress,$gtown,$gparish,$gffname,
                                $gfmname,$gflname,$bfname,$bmname,$blname,$bdob,$bage,$bstatus,$boccupation,$baddress,$btown,
                                $bparish,$bffname,$bfmname,$bflname,$contact,$email,$avatar_path,$g_identification,$b_identification,
                                $g_birthcert,$b_birthcert,$ministerslicence,$other){
            try {
                $sql = "INSERT INTO couples_data (g_firstname,g_middlename,g_lastname,g_dateofbirth,g_age,g_status_id,g_occupation,
                                                g_address,g_town,g_parish_id,g_father_fname,g_father_mname,g_father_lname,
                                                b_firstname,b_middlename,b_lastname,b_dateofbirth,b_age,b_status_id,b_occupation,
                                                b_address,b_town,b_parish_id,b_father_fname,b_father_mname,b_father_lname,
                                                contactnumber,email,avatar_path,g_identification,b_identification,g_birthcert,
                                                b_birthcert,ministers_licence,other) 
                VALUES (:gfname, :gmname, :glname, :gdob, :gage, :gstatus, :goccupation, :gaddress,:gtown, :gparish, :gffname, :gfmname,:gflname,
                        :bfname, :bmname, :blname, :bdob, :bage, :bstatus, :boccupation, :baddress,:btown, :bparish, :bffname, :bfmname,:bflname,
                        :contact,:email, :avatar_path, :g_identification,  :b_identification, :g_birthcert,:b_birthcert, :ministerslicence, :other)";
                $stmt = $this-> db->prepare($sql);

                $stmt->bindparam(':gfname',$gfname);
                $stmt->bindparam(':gmname',$gmname);
                $stmt->bindparam(':glname',$glname);
                $stmt->bindparam(':gdob',$gdob);
                $stmt->bindparam(':gage',$gage);
                $stmt->bindparam(':gstatus',$gstatus);
                $stmt->bindparam(':goccupation',$goccupation);
                $stmt->bindparam(':gaddress',$gaddress);
                $stmt->bindparam(':gtown',$gtown);
                $stmt->bindparam(':gparish',$gparish);
                $stmt->bindparam(':gffname',$gffname);
                $stmt->bindparam(':gfmname',$gfmname);
                $stmt->bindparam(':gflname',$gflname);

                $stmt->bindparam(':bfname',$bfname);
                $stmt->bindparam(':bmname',$bmname);
                $stmt->bindparam(':blname',$blname);
                $stmt->bindparam(':bdob',$bdob);
                $stmt->bindparam(':bage',$bage);
                $stmt->bindparam(':bstatus',$bstatus);
                $stmt->bindparam(':boccupation',$boccupation);
                $stmt->bindparam(':baddress',$baddress);
                $stmt->bindparam(':btown',$btown);
                $stmt->bindparam(':bparish',$bparish);
                $stmt->bindparam(':bffname',$bffname);
                $stmt->bindparam(':bfmname',$bfmname);
                $stmt->bindparam(':bflname',$bflname);

                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':avatar_path',$avatar_path);
                $stmt->bindparam(':g_identification',$g_identification);
                $stmt->bindparam(':b_identification',$b_identification);
                $stmt->bindparam(':g_birthcert',$g_birthcert);
                $stmt->bindparam(':b_birthcert',$b_birthcert);
                $stmt->bindparam(':ministerslicence',$ministerslicence);
                $stmt->bindparam(':other',$other);

                $stmt ->execute();
                return true;

            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
            }
        } 
        public function edit ($id,$gfname,$gmname,$glname,$gdob,$gage,$gstatus,$goccupation,$gaddress,$gtown,$gparish,$gffname,
        $gfmname,$gflname,$bfname,$bmname,$blname,$bdob,$bage,$bstatus,$boccupation,$baddress,$btown,
        $bparish,$bffname,$bfmname,$bflname,$contact,$email){
            try {
                $sql = "UPDATE couples_data SET g_firstname = :g_firstname ,g_middlename = :g_middlename ,g_lastname = :g_lastname,
                g_dateofbirth = :g_dateofbirth ,g_age = :g_age ,g_status_id = :g_status,g_occupation = :g_occupation, 
                g_address = :g_address,g_town = :g_town,g_parish_id = :g_parish,g_father_fname = :g_father_fname,
                g_father_mname = :g_father_mname,g_father_lname = :g_father_lname,b_firstname = :b_firstname,
                b_middlename = :b_middlename, b_lastname = :b_lastname,b_dateofbirth = :b_dateofbirth,b_age = :b_age,
                b_status_id = :b_status,b_occupation = :b_occupation, b_address = :b_address,b_town = :b_town,b_parish_id = :b_parish,
                b_father_fname = :b_father_fname,b_father_mname = :b_father_mname,b_father_lname = :b_father_lname,
                contactnumber = :contactnumber,email = :email WHERE couple_id = :coupleid";
                $stmt = $this-> db->prepare($sql);

                $stmt->bindparam(':coupleid',$id);
                $stmt->bindparam(':g_firstname',$gfname);
                $stmt->bindparam(':g_middlename',$gmname);
                $stmt->bindparam(':g_lastname',$glname);
                $stmt->bindparam(':g_dateofbirth',$gdob);
                $stmt->bindparam(':g_age',$gage);
                $stmt->bindparam(':g_status',$gstatus);
                $stmt->bindparam(':g_occupation',$goccupation);
                $stmt->bindparam(':g_address',$gaddress);
                $stmt->bindparam(':g_town',$gtown);
                $stmt->bindparam(':g_parish',$gparish);
                $stmt->bindparam(':g_father_fname',$gffname);
                $stmt->bindparam(':g_father_mname',$gfmname);
                $stmt->bindparam(':g_father_lname',$gflname);

                $stmt->bindparam(':b_firstname',$bfname);
                $stmt->bindparam(':b_middlename',$bmname);
                $stmt->bindparam(':b_lastname',$blname);
                $stmt->bindparam(':b_dateofbirth',$bdob);
                $stmt->bindparam(':b_age',$bage);
                $stmt->bindparam(':b_status',$bstatus);
                $stmt->bindparam(':b_occupation',$boccupation);
                $stmt->bindparam(':b_address',$baddress);
                $stmt->bindparam(':b_town',$btown);
                $stmt->bindparam(':b_parish',$bparish);
                $stmt->bindparam(':b_father_fname',$bffname);
                $stmt->bindparam(':b_father_mname',$bfmname);
                $stmt->bindparam(':b_father_lname',$bflname);

                $stmt->bindparam(':contactnumber',$contact);
                $stmt->bindparam(':email',$email);

                $stmt ->execute();
                return true;

            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getWeddings(){
            try{
            $sql = "SELECT * FROM `couples_data` ";
            $result = $this->db->query($sql);
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;           
        }
        }
        public function getWeddingDetails($id){
            try{
            $sql = "select c.couple_id, c.g_firstname, c.g_middlename, c.g_lastname, c.g_dateofbirth, c.g_age, a.marrital_status, c.g_occupation,
            c.g_address, c.g_town, d.parish_name, c.g_father_fname, c.g_father_mname,c.g_father_lname, c.b_firstname, c.b_middlename, c.b_lastname,
            c.b_dateofbirth, c.b_age, b.marrital_status, c.b_occupation, c.b_address, c.b_town, e.parish_name, c.b_father_fname, c.b_father_mname, 
            c.b_father_lname, c.contactnumber, c.email, c.avatar_path, c.g_identification, c.b_identification, c.g_birthcert, c.b_birthcert, 
            c.ministers_licence, c.other 
            from couples_data c 
            inner join status a on c.g_status_id = a.status_id 
            inner join status b on c.b_status_id = b.status_id
            inner join parish d on c.g_parish_id = d.parish_id
            inner join parish e on c.b_parish_id = e.parish_id
             where couple_id = :coupleid";
            $stmt =$this->db->prepare($sql);
            $stmt->bindparam(':coupleid', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }

        public function deleteApplicant($id){
            try{            
                    $sql = "delete from couples_data where couple_id =:coupleid";
                    $stmt =$this->db->prepare($sql);
                    $stmt->bindparam(':coupleid', $id);
                    $stmt->execute();
                    return true;
                } catch (PDOExeption $e) {
                    echo $e->getMessage();
                    return false;
                }
            }

        public function getGroomsStatus(){
            try{
            $sql = "SELECT * FROM `status`";
            $result = $this->db->query($sql);
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }
        public function getBridesStatus(){
            try{
            $sql = "SELECT * FROM `status`";
            $result = $this->db->query($sql);
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }
        public function getGroomsParish(){
            try{
            $sql = "SELECT * FROM `parish`";
            $result = $this->db->query($sql);
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }
        public function getBridesParish(){
            try{
            $sql = "SELECT * FROM `parish`";
            $result = $this->db->query($sql);
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }
        public function getStatusById($id){
            try{
            $sql = "SELECT * FROM `status` where status_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }
        public function getParishById($id){
            try{
            $sql = "SELECT * FROM `parish` where parish_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
                return false;
        }
        }
    }

?>