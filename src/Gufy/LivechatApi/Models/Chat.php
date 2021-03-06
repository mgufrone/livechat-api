<?php namespace Gufy\LivechatApi\Models;

class Chat extends Base
{
  public $baseUrl = 'chats';
  public function get()
  {
    return $this->request('GET', '/');
  }
  public function find($id)
  {
    return $this->request('GET', '/'.$id);
  }
  public function send($id, $to)
  {
    $data['to'] = $to;
    return $this->request('POST', '/'.$id, $data);
  }
  public function updateTags($id, $data)
  {
    return $this->request('PUT', '/'.$id.'/tags', $data);
  }
}
