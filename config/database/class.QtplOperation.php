<?php
	require_once 'API/config/database/config.php';
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	class QTPLDatabase
	{
		public $dbConn;
		private $connectionStatus;
		//private $databaseName;
		private $dbSelectedStatus;
		protected $errorArray = array(
				'200'=>array('200','success'),
				'301'=>array('301','Unable to prepare query'),
				'302'=>array('302','Unable to execute query'),
				'303'=>array('303','Unable to bind parameter'),
				'304'=>array('304','Unable to bind result'),
				'305'=>array('305','Record already exist'),
				'306'=>array('306','Input data error'),
				'307'=>array('307','Database connection error'),
				'404'=>array('404','Not Found'),
				'500'=>array('500','Internal Server Error'),
				'501'=>array('501','Exception thrown')

		);
		//private $stmt;
		function __construct()
		{
			//return $this->establishConnection();
		}

		public function checkConnectionStatus(){
			if($this->connectionStatus['Code'] == '200'){
				return true;
			}
			else{
				return false;
			}
		}

		public function closeConnection(){
			if(is_resource($this->dbConn)){
				return mysqli_close($this->dbConn);
			}
		}

		public function establishConnection() {
			try{
				$this->dbConn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($this->dbConn));
				if($this->dbConn){
					return array("STATUS_CODE"=>200,"MESSAGE"=>"Connected successfully");
				}
				else{

				}
			}
			catch (mysqli_sql_exception $mysqlEx){
				return array("STATUS_CODE"=>$mysqlEx->getCode(),"MESSAGE"=>$mysqlEx->getMessage());
			}
		}

		public function executeQuery($query){
			try{
				mysqli_set_charset($this->dbConn,'utf8');
				$res = mysqli_query($this->dbConn, $query)or die(mysqli_error($this->dbConn)) ;

				return $res;
			}
			catch(Exception $ex)
			{
				echo 'Message : '.$ex->getMessage();
			}
				//$this->closeConnection();
		}

		public function executeStatement($stmt){
			mysqli_set_charset($this->dbConn, 'utf8');
			$value = $stmt->execute();
			$this->stmtStoreResult($stmt);
			return $value;
		}

		public function fetchRows($result){
			try{
				while($rows = mysqli_fetch_assoc($result)){
					return $rows;
				}
			}
			catch(Exception $ex){
				echo 'Message : '.$ex->getMessage();
			}
		}

		public function fetchSingleRows($result) {
			try{
				return mysqli_fetch_assoc($result);
			}
			catch(Exception $ex){
				echo 'Message : '.$ex->getMessage();
			}
		}

		public function numberOfRows() {
			return $this->dbConn->affected_rows;
		}

		public function prepareStatement($query){
			$stmt = $this->dbConn->prepare($query);
			return $stmt;
		}

		function real_escape_string($string) {
			try{
				mysqli_set_charset($this->dbConn,'utf8');
				$res = mysqli_real_escape_string($this->dbConn, $string);
				return $res;
			}
			catch(Exception $ex)
			{
				echo 'Message : '.$ex->getMessage();
			}
		}

		public function stmtFetchRows($stmt){
			try{
				$value =  $stmt->fetch();
				return $value;
			}
			catch(Exception $ex){
				echo 'Message : '.$ex->getMessage();
			}
		}

		public function stmtNumberOfRows($stmt){
			return $stmt->num_rows;
		}

		public function stmtStoreResult($stmt){
			$stmt->store_result();
		}
		
		function executeMultipleQuery($query){
			mysqli_set_charset($this->dbConn,'utf8');
			$QueryRes = $this->dbConn->multi_query($query);
			return $QueryRes;
		}
		
		function storeQueryResult(){
			$result = $this->dbConn->store_result();
			return $result;
		}
		
		function freeResult($result){
			$result->free();
		}
		
		function getNextResult(){
			return $this->dbConn->next_result();
		}
		
		function getMoreResults(){
			return $this->dbConn->more_results();
		}
	}
?>