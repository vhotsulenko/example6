<?php
echo 'Включение point_class'; ?><br>
<?php
if (!defined('Point::NAME'))
{
class Point 
    {
    const NAME = 'point';
    public $x;
    public $y;
    public $z;
    }
}