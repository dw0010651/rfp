<?php
	class User{
		private $id;
		private $firstName;
		private $lastName;
		private $phoneNumber;
		private $email;
		private $password;
		private $join_date;
		private $last_login_date;
		private $user_type;
		private $picture;
		private $birth_date;
		private $address;
		private $city;
		private $postal_code;
		private $country;
		private $schedule;
		private $cerficate;
		private $experience;
		private $level_of_experience;
		private $bio;
		private $cost;
		private $services;

		function __construct($id, $firstName, $lastName, $phoneNumber, $email, $passWord, $join_date, $last_login_date, $user_type,
			$picture = null, $birth_date = null, $address = null,  $city = null,  $postal_code = null,  $schedule = null, $cerficate = null, $experience = null, $level_of_experience = null, $bio = null, $cost = null, $services = null, $gender=null){
			$this->setUserId($id);
			$this->setFirstName($firstName);
			$this->setLastName($lastName);
			$this->setPhoneNumber($phoneNumber);
			$this->setEmail($email);
			$this->setPassword($passWord);
			$this->setJoinDate($join_date);
			$this->setLastLoginDate($last_login_date);
			$this->setUserType($user_type);
			$this->setPicture($picture);
			$this->setDob($birth_date);
			$this->setAddress($address);
			$this->setCity($city);
			$this->setPostalCode($postal_code);
			$this->setSchedule($schedule);
			$this->setCertificate($cerficate);
			$this->setExperience($experience);
			$this->setLevelOfExperience($level_of_experience);
			$this->setBio(trim($bio));
			$this->setGender($gender);
			$this->setCost(trim($cost));
			$this->setServices($services);
		}
		
		public function getUserId(){
			return $this->id;
		}
		
		public function setUserId($id){
			$this->id = $id;
		}
		
		public function getFirstName(){
			return $this->firstName;
		}
		
		public function setFirstName($firstName){
			$this->firstName = $firstName;
		}
		
		public function getLastName(){
			return $this->lastName;
		}
		
		public function setLastName($lastName){
			$this->lastName = $lastName;
		}

		public function getPhoneNumber(){
			return $this->phoneNumber;
		}
		
		public function setPhoneNumber($phoneNumber){
			$this->phoneNumber = $phoneNumber;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}

		public function getLastLoginDate(){
			return $this->last_login_date;
		}
		
		public function setLastLoginDate($last_login_date){
			$this->last_login_date = $last_login_date;
		}

		public function getJoinDate(){
			return $this->join_date;
		}
		
		public function setJoinDate($join_date){
			$this->join_date = $join_date;
		}

		public function getPassword(){
			return $this->passWord;
		}
		
		public function setPassword($passWord){
			$this->passWord = $passWord;
		}


		public function getUserType(){
			return $this->user_type;
		}
		
		public function setUserType($user_type){
			$this->user_type = $user_type;
		}

		public function getPicture(){
			return $this->picture;
		}
		
		public function setPicture($picture){
			$this->picture = $picture;
		}

		public function getDob(){
			return $this->birth_date;
		}
		
		public function setDob($birth_date){
			$this->birth_date = $birth_date;
		}

		public function getSchedule(){
			return $this->schedule;
		}
		
		public function setSchedule($schedule){
			$this->schedule = $schedule;
		}

		public function getCertificate(){
			return $this->cerficate;
		}
		
		public function setCertificate($cerficate){
			$this->cerficate = $cerficate;
		}

		public function getExperience(){
			return $this->experience;
		}
		
		public function setExperience($experience){
			$this->experience = $experience;
		}

		public function getLevelOfExperience(){
			return $this->level_of_experience;
		}
		
		public function setLevelOfExperience($level_of_experience){
			$this->level_of_experience = $level_of_experience;
		}

		public function getBio(){
			return $this->bio;
		}
		
		public function setBio($bio){
			$this->bio = $bio;
		}

		public function getAddress(){
			return $this->address;
		}
		
		public function setAddress($address){
			$this->address = $address;
		}


		public function getCity(){
			return $this->city;
		}
		
		public function setCity($city){
			$this->city = $city;
		}


		public function getPostalCode(){
			return $this->postal_code;
		}
		
		public function setPostalCode($postal_code){
			$this->postal_code = $postal_code;
		}


		public function getCountry(){
			return $this->country;
		}
		
		public function setCountry($country){
			$this->country = $country;
		}


		public function getCost(){
			return $this->cost;
		}
		
		public function setCost($cost){
			$this->cost = $cost;
		}

		public function getGender(){
			return $this->gender;
		}
		
		public function setGender($gender){
			$this->gender = $gender;
		}

		public function getServices(){
			return $this->services;
		}
		
		public function setServices($services){
			$this->services = $services;
		}
		
	}
?>