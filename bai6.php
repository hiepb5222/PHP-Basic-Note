<?php
//ham
function intro($mau_sac,$so_chan){
    echo "Bàn có màu {$mau_sac} và có {$so_chan} chân";

}
class Table{
    public $mau_sac;
    public $so_chan;

    
    //ham dựng
    public function __construct($mau_sac,$so_chan){
        $this ->mau_sac =$mau_sac;
        $this ->so_chan =$so_chan;
    }
    //phuong thuc
    public function intro(){
        echo "Bàn có màu {$this->mau_sac} và có {$this->so_chan} chân";
    }

}
$table= new Table('Trắng',4);
echo '<pre>';
var_dump($table);
echo'</pre>';

class Table_2 extends Table{
    public $chat_lieu;

      //ham dựng
      public function __construct($mau_sac,$so_chan,$chat_lieu){
        $this ->mau_sac =$mau_sac;
        $this ->so_chan =$so_chan;
        $this ->chat_lieu=$chat_lieu;
    }
    //phuong thuc
    public function intro(){
        echo "Bàn có màu {$this->mau_sac} và có {$this->so_chan} chân và làm bằng {$chat_lieu}";
        parent::intro();
    }
    public function get_chat_lieu(){
        return $this->chat_lieu;
    }

    public function set_chat_lieu(){
        return $this->chat_lieu=$chat_lieu;
    }

}





?>