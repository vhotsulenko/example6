<?php
echo 'Включение point_class'; ?><br>
<?php
if (defined('Point::FLAG')) return;
class Point 
    {
    const FLAG = true;
    public $x;
    public $y;
    public $z;
    }