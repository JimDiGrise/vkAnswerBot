<?php 
    namespace app\models;

    use yii\base\Model;
    use GuzzleHttp\Client;

    class Bot extends Model 
    {
        public $accessToken;
        public $client;
        
        public $userId;
        public $query;
        public $comment;
        public function __construct($token, $userId) {
            $this->accessToken = $token;
            $this->userId = $userId;
            
            $this->client = new Client([
                'base_uri' => 'https://api.vk.com/method/',
                'timeout'  => 2.0,
            ]); 
        }
       
    }
?>