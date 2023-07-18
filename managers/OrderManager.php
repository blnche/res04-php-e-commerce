<?php

class OrderManager extends AbstractManager {
	public function getOrderById(int $id) : Order {
		$query = $this->db->prepare('
			SELECT * FROM orders WHERE id = :id
		');
		$parameters = [
			'id' => $id
		];
		$query->execute($parameters);
		$result = $query->fetch(PDO::FETCH_ASSOC);
		$order = Order::createInstanceFromAssoc($result);
		return $order;
	}
	public function getOrdersByUser_id(int $user_id) : array {
		$query = $this->db->prepare('
			SELECT * FROM orders WHERE user_id = :user_id
		');
		$parameters = [
			'user_id' => $user_id
		];
		$query->execute($parameters);
		$results = $query->fetchAll(PDO::FETCH_ASSOC);
		$orders = Order::createInstancesArrFromAssocArr($results);
		return $orders;
	}
	public function getOrdersByAddress_id(int $address_id) : array {
		$query = $this->db->prepare('
			SELECT * FROM orders WHERE address_id = :address_id
		');
		$parameters = [
			'address_id' => $address_id
		];
		$query->execute($parameters);
		$results = $query->fetchAll(PDO::FETCH_ASSOC);
		$orders = Order::createInstancesArrFromAssocArr($results);
		return $orders;
	}

	public function getLastOrdersSortedByOrder_date(int $n = 10) : array {
		$query = $this->db->prepare('
			SELECT * FROM orders 
			ORDER BY order_date DESC 
			LIMIT :n
		');
		$parameters = [
			'n' => $n
		];
		$query->execute($parameters);
		$results = $query->fetchAll(PDO::FETCH_ASSOC);
		$orders = Order::createInstancesArrFromAssocArr($results);
		return $orders;
	}
}
