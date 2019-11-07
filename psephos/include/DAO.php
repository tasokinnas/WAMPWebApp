<?php
require_once('password_compat/lib/password.php');
/**
 * Data Access Object (DAO) class. Contains all DB access code.
 */
class Dao
{
	private $host ="localhost";
	private $dbname = "psephos";
	private $user = "root";
	private $password = "hahahaha";  /* update after submit!!!!*/
	
	/**
	 * Crate new PDO connection and return handle.
	 */
	private function getConnection()
	{
		$conn = new PDO("mysql:dbname={$this->dbname};host={$this->host};",
						"$this->user", "$this->password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	}
	
	/**
	 * Returns all rows in the users table.
	 * No user input.
	 */
	public function getUsers()
	{
		$conn = $this->getConnection();
		$stmt = $conn->query("SELECT * FROM users");
		return $stmt->fetchAll();
		echo "$stmt";
	}
	
	/**
	 * Returns rows with userid column equal to the given userid.
	 * Accepts user input.
	 */
	public function getRowUserid($userid)
	{
		$conn = $this->getConnection();
		$query = "SELECT * FROM users WHERE userid = :userid";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':userid', $userid);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	/**
	 * Adds a row to the users table with the given email attribute (aka column).
	 * Accepts user input.
	 */
	public function addUser($lname, $fname, $email, $userid, $psword)
	{
		$digest = password_hash($psword, PASSWORD_DEFAULT);
		if(!$digest) {
			throw new Exception("Password could not be hashed.");
		}
		$conn = $this->getConnection();
		$query = "INSERT INTO users (lname, fname, email, userid, psword) VALUES (:lname, :fname, :email, :userid, :psword)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':lname', $lname);
		$stmt->bindParam(':fname', $fname);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':userid', $userid);
		$stmt->bindParam(':psword', $digest);
		try {
			$stmt->execute();
			return true;
		} catch(PDOException $e) {
			echo($e->getMessage());
			return false;
		}
	}
	
	/**
	 * Returns true or false if the given userid exists.
	 * Accepts user input.
	 */
	public function userExists($userid)
	{
		$conn = $this->getConnection();
		$query = "SELECT * FROM users WHERE userid = :userid";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':userid', $userid);
		$stmt->execute();
		var_dump($stmt);
		if($stmt->fetch()) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Returns true or false if the given email exists.
	 * Accepts user input.
	 */
	public function emailExists($email)
	{
		$conn = $this->getConnection();
		$query = "SELECT * FROM users WHERE email = :email";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		var_dump($stmt);
		if($stmt->fetch()) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Validates the username and password entered.
	 * Accepts user input.
	 */
	public function validateUser($userid, $psword) {
		$conn = $this->getConnection();
		$query = "SELECT psword, fname FROM users WHERE userid = :userid";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':userid', $userid);
		$stmt->execute();
		if(($user = $stmt->fetch())) {
			$digest = $user['psword'];
			if(password_verify($psword, $digest)) {
				return array('fname' => $user['fname']);
			}
		}
		return false;
	}

	/**
	 * Returns all rows in the voterdata table.
	 * Based on city.
	 */
	public function getVoterData($city)
	{
		$conn = $this->getConnection();
		$query = "SELECT First_Name, Last_Name, Street_Number, Street_Name, Unit, City, State, Zip, 2014_GENERAL_VOTE, 2014_PRIMARY_VOTE FROM voterdata WHERE city = :city LIMIT 0, 100";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':city', $city);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);	
	}
		
	/**
	 * Adds a row to the comments table.
	 * Accepts user input.
	 */
	public function submitComment($lname, $fname, $email, $comments)
	{
		$conn = $this->getConnection();
		$query = "INSERT INTO comments (lname, fname, email, comments) VALUES (:lname, :fname, :email, :comments)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':lname', $lname);
		$stmt->bindParam(':fname', $fname);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':comments', $comments);
		try {
			$stmt->execute();
			return true;
		} catch(PDOException $e) {
			echo($e->getMessage());
			return false;
		}
	}	
		
}
?>