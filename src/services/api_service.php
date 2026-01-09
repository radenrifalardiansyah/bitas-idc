<?php
// api_service.php - API Service for CRUD Operations

require_once '../global/config.php'; // Include config

class ApiService {
    private $baseUrl;
    private $apiKey;

    public function __construct() {
        $this->baseUrl = API_BASE_URL;
        $this->apiKey = API_KEY;
    }

    // Helper function to make API requests
    private function makeRequest($endpoint, $method = 'GET', $data = null) {
        $url = $this->baseUrl . $endpoint;
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->apiKey
        ];

        $options = [
            'http' => [
                'header' => implode("\r\n", $headers),
                'method' => $method,
            ]
        ];

        if ($data && in_array($method, ['POST', 'PUT', 'PATCH'])) {
            $options['http']['content'] = json_encode($data);
        }

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            return ['error' => 'API request failed'];
        }

        return json_decode($result, true);
    }

    // CREATE - Add new item
    public function create($endpoint, $data) {
        return $this->makeRequest($endpoint, 'POST', $data);
    }

    // READ - Get data
    public function read($endpoint, $id = null) {
        $url = $id ? $endpoint . '/' . $id : $endpoint;
        return $this->makeRequest($url, 'GET');
    }

    // UPDATE - Update existing item
    public function update($endpoint, $id, $data) {
        return $this->makeRequest($endpoint . '/' . $id, 'PUT', $data);
    }

    // DELETE - Remove item
    public function delete($endpoint, $id) {
        return $this->makeRequest($endpoint . '/' . $id, 'DELETE');
    }

    // Example methods for specific endpoints
    public function getProducts() {
        return $this->read('products');
    }

    public function getProduct($id) {
        return $this->read('products', $id);
    }

    public function createProduct($data) {
        return $this->create('products', $data);
    }

    public function updateProduct($id, $data) {
        return $this->update('products', $id, $data);
    }

    public function deleteProduct($id) {
        return $this->delete('products', $id);
    }

    // Add more methods for other entities (services, testimonials, etc.)
    public function getServices() {
        return $this->read('services');
    }

    public function getTestimonials() {
        return $this->read('testimonials');
    }
}

// Usage example:
// $api = new ApiService();
// $products = $api->getProducts();
// $product = $api->getProduct(1);
// $newProduct = $api->createProduct(['name' => 'New Product', 'description' => 'Desc']);
?>