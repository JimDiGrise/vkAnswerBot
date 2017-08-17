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
        public function findPost($query) {
            try {
                $res = $this->client->request('GET', "wall.search?access_token=$this->accessToken&query=$query&owner_id=$this->userId");
                $body = json_decode($res->getBody());
                $itemIds = array();
                if(empty($body)) {
                    return FALSE;
                }
                for($i = 1; $i < count($body->response); $i++) {
                    array_push($itemIds, $body->response[$i]->id);
                }
                return $itemIds;

            } catch(ErrorExcption $e) {
                Yii:error($e);
            }
        }
       
    }
?>