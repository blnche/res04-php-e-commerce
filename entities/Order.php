<?php

class Order {
	private ?int $id;
	private int $user_id;
	private string $order_date;
	private string $address;
	public function __construct($user_id,$order_date,$address) {
		$this->user_id = $user_id;
		$this->order_date = $order_date;
		$this->address = $address;
		$this->id = null;
	}
	public function getId() : ?int {
		return $this->id;
	}
	public function getUser_id() : int {
		return $this->user_id;
	}
	public function getOrder_date() : string {
		return $this->order_date;
	}
	public function getAddress() : string {
		return $this->address;
	}

	public function setId(int $id) : void {
		$this->id = $id;
	}
	public function setUser_id(int $user_id) : void {
		$this->user_id = $user_id;
	}
	public function setOrder_date(string $order_date) : void {
		$this->order_date = $order_date;
	}
	public function setAddress(string $address) : void {
		$this->address = $address;
	}
	public static function createInstanceFromAssoc(array $assoc) : Order {
		$order = new Order(
			$assoc['user_id'],
			$assoc['order_date'],
			$assoc['address']
		);
		$order->setId($assoc['id']);
		return $order;
	}
}

