<?php
class Person{
	private $id;
	private $nickname;
	private $headpic;
	private $dept;
	private $major;
	private $year;
	private $degree;
	private $company;
	private $position;
	private $address;
	private $oneword;
	private $qq;
	private $wechat;
	private $tel;
	private $email;
	private $good;
	private $fakeclick;
	private $suggest;
	private $share;

	public function getId() {
		return $this->id;
	}
	public function getNickName() {
		return $this->nickname;
	}
	public function getHeadPic() {
		return $this->headpic;
	}
	public function getDept() {
		return $this->dept;
	}
	public function getMajor() {
		return $this->major;
	}
	public function getYear() {
		return $this->year;
	}
	public function getDegree() {
		return $this->degree;
	}
	public function getCompany() {
		return $this->company;
	}
	public function getPosition() {
		return $this->position;
	}
	public function getAddress() {
		return $this->address;
	}
	public function getOneword() {
		return $this->oneword;
	}
	public function getWeChat() {
		return $this->wechat;
	}
	public function getTel() {
		return $this->tel;
	}
	public function getEmail() {
		return $this->email;
	}
	public function getGood() {
		return $this->good;
	}
	public function getFakeClick() {
		return $this->fakeclick;
	}
	public function getSuggest() {
		return $this->suggest;
	}
	public function getShare() {
		return $this->share;
	}
	public function getQQ() {
		return $this->qq;
	}


	public function setId($id) {
		$this->id = $id;
	}
	public function setNickName($nickname) {
		$this->nickname=$nickname;
	}
	public function setHeadPic($headpic) {
		$this->headpic=$headpic;
	}
	public function setDept($dept) {
		$this->dept=$dept;
	}
	public function setMajor($major) {
		$this->major=$major;
	}
	public function setYear($year) {
		$this->year=$year;
	}
	public function setDegree($degree) {
		$this->degree=$degree;
	}
	public function setCompany($company) {
		$this->company=$company;
	}
	public function setPosition($position) {
		$this->position=$position;
	}
	public function setAddress($address) {
		$this->address=$address;
	}
	public function setOneword($oneword) {
		$this->oneword=$oneword;
	}
	public function setWeChat($wechat) {
		$this->wechat=$wechat;
	}
	public function setTel($tel) {
		$this->tel=$tel;
	}
	public function setEmail($email) {
		$this->email=$email;
	}
	public function setGood($good) {
		$this->good=$good;
	}
	public function setFakeClick($fakeclick) {
		$this->fakeclick=$fakeclick;
	}
	public function setSuggest($suggest) {
		$this->suggest=$suggest;
	}
	public function setShare($share) {
		$this->share=$share;
	}
	public function setQQ($qq) {
		$this->qq=$qq;
	}
}
?>