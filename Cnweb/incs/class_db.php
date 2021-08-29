<?php 
class dblib {
    // biến lưu trữ kết nối
    private $__conn;
    function connect() {
        // thông tin database
        $servername = "localhost";
        $username ="root";
        $password ="";
        $dbname = "webtintuc";
        
        // kiểm tra nếu chưa kết nối thì thực hiện kết nối
        if(!$this->__conn) {
            // kết nối
            try{
                $this->__conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
                $this->__conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "Error: " . $e->getMessage();
                die();
            }
        }

    }
    // Hàm ngắt kết nối
    function dis_connect(){
        // nếu đang kết nối thì ngắt
        if($this->__conn){
            $this->__conn = null;
        }
    }

    // hàm insert
    function insert($table, $data) {
        // kết nối
        $this->connect();

        // lưu trữ danh sách field
        $field_list = '';
        // Lưu danh sách giá trị tương ứng với field
        $value_list = '';

		// Lập qua data

		foreach ($data as $key => $value){
			$field_list .= ",$key";
			$value_list .= ",'".$value."'";
		}
        // sau vòng lặp  các biến $field và $value sẽ thừa một dấu , nên ta dùng hàm trim để xóa
        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
		// ham prepare	
		$stmt = $this->__conn->prepare($sql);
		
		return $stmt->execute();
    }

    // Hàm Update
	function update($table, $data, $where)
	{
		// Kết nối
		$this->connect();
		$sql = '';
		foreach ($data as $key => $value){
			$sql .= "$key = '".$value."',";
		}
		
		$sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
		$stmt = $this->__conn->prepare($sql);
		
		return $stmt->execute();
	}
	
	// Hàm delete
	function remove($table, $where){
		// Kết nối
		$this->connect();
		
		// Delete
		$sql = "DELETE FROM $table WHERE $where";
		$stmt = $this->__conn->prepare($sql);
		
		return $stmt->execute();
	}
	
	// Hàm lấy danh sách
	function get_list($sql)
	{
		// Kết nối
		$this->connect();
		
		// Thực hiện lấy dữ liệu
		$stmt = $this->__conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
		return $stmt->fetchALL();	
	}
	
	// Hàm lấy 1 record duy nhất
	function get_row($sql)
	{
		// Kết nối
		$this->connect();
		
		// Thực hiện lấy dữ liệu
		$stmt = $this->__conn->prepare($sql);
		$stmt->execute();
		// đổi thành một array
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		// trả về 1 dòng fetall thì hết
		return $stmt->fetch();	
	}
	
	function get_row_number($sql)
	{
		// Kết nối
		$this->connect();
		
		// Thực hiện lấy dữ liệu
		$stmt = $this->__conn->prepare($sql);
		$stmt->execute();
		
		return $stmt->fetchColumn();
	}


}
?>