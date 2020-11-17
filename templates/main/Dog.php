<?php
class Dog {
	// private $user = 'kk6ev';
    // private $password = 'F4ll2020!!';
    // private $host = 'localhost:3306';
    // private $database= 'dog_website';
    // private $dogTable = 'dog';
    private $user = 'root';
    private $password = '';
    private $host = 'localhost';
    private $database= 'dog_website';
    private $dogTable = 'dog';
    private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}		
	public function getBreed(){
		$sqlQuery = "
			SELECT DISTINCT(Dog_breed)
			FROM ".$this->dogTable." 
			ORDER BY Dog_breed ASC";
        return  $this->getData($sqlQuery);
	}
	public function getSize(){
		$sqlQuery = "
			SELECT DISTINCT(dog_size)
			FROM ".$this->dogTable." 
			ORDER BY dog_size DESC";
        return  $this->getData($sqlQuery);
	}
	public function getColor(){
		$sqlQuery = "
			SELECT DISTINCT(color)
			FROM ".$this->dogTable." 
			ORDER BY color ASC";
        return  $this->getData($sqlQuery);
	}
	public function searchDogs(){
		$sqlQuery = "SELECT * FROM ".$this->dogTable." WHERE price > 0";
		if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
			$sqlQuery .= "
			AND price BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
		}
		if(isset($_POST["Dog_breed"])) {
			$Dog_breedFilterData = implode("','", $_POST["Dog_breed"]);
			$sqlQuery .= "
			AND Dog_breed IN('".$Dog_breedFilterData."')";
		}
		if(isset($_POST["color"])){
			$colorFilterData = implode("','", $_POST["color"]);
			$sqlQuery .= "
			AND color IN('".$colorFilterData."')";
		}
		if(isset($_POST["dog_size"])) {
			$dog_sizeFilterData = implode("','", $_POST["dog_size"]);
			$sqlQuery .= "
			AND dog_size IN('".$dog_sizeFilterData."')";
		}
		$sqlQuery .= " ORDER By name";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$totalResult = mysqli_num_rows($result);
		$searchResultHTML = '';
		if($totalResult > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$searchResultHTML .= '
				<div class="col-sm-4 col-lg-3 col-md-3">
				<div class="dog">
				<input type="checkbox">
				<img src="images/dog.png" alt="" class="img-responsive" >
				<p align="center"><strong><a href="main/dog-profile.php?DogID='. $row['DogID'] .'" id="info">'. $row['name'] .'</a></strong></p>
				<h4 style="text-align:center;" class="text-danger" > $'. $row['price'] .'</h4>
				<h6 style="text-align:center;"> Breed: '. $row['Dog_breed'] .'</h6>
				<h6 style="text-align:center;"> Color: '. $row['color'] .'</h6>
				<h6 style="text-align:center;"> Size: '. $row['dog_size'] .'</h6>
				</div>
				</div>';
			}
		} else {
			$searchResultHTML = '<h3>No dog found.</h3>';
		}
		return $searchResultHTML;	
	}	
}
?>