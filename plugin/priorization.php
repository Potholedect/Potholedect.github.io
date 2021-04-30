<?php

include('duplicates_report.php');
include('get_data.php');
// include('update_record.php');

class PriorityQueue implements Iterator, Countable
{
    /**
     * Extract the data.
     */
    const EXTR_DATA = 1;
    /**
     * Extract the priority.
     */
    const EXTR_PRIORITY = 2;
    /**
     * Extract an array containing both priority and data.
     */
    const EXTR_BOTH = 3;
    private $flags;
    private $items;

    public function __construct()
    {
        $this->flags = self::EXTR_DATA;
        $this->items = array();
    }

    function compare($priority1, $priority2)
    {
    }

    function count()
    {
        return count($this->items);
    }

    function extract()
    {
        $result = $this->current();
        $this->next();
        return $result;
    }

    function current()
    {
        switch ($this->flags) {
            case self::EXTR_BOTH:
                $result = $this->key() . ' - ' . current($this->items);
                break;
            case self::EXTR_DATA:
                $result = $this->key();
                break;
            case self::EXTR_PRIORITY:
                $result = current($this->items);
                break;
            default:
                $result = '';
        }
        return $result;
    }

    function key()
    {
        return key($this->items);
    }

    function next()
    {
        return next($this->items);
    }

    function insert($name, $priority)
    {
        $this->items[$name] = $priority;
        arsort($this->items);
        return $this;
    }

    function isEmpty()
    {
        return empty($this->items);
    }

    function recoverFromCorruption()
    {
    }

    function rewind()
    {
    }

    function setExtractFlags($flags)
    {
        switch ($flags) {
            case self::EXTR_BOTH:
            case self::EXTR_DATA:
            case self::EXTR_PRIORITY:
                $this->flags = $flags;
                break;
        };
    }

    function valid()
    {
        return (null === key($this->items)) ? false : true;
    }
}
function full_prioritization($fetchdata){
    $sorted_queue = new PriorityQueue();
    $sorted_queue->setExtractFlags(PriorityQueue::EXTR_BOTH);
    
    
    $keys = array();
    $total_pri = array();
    if ($fetchdata > 0) {
        //store all keys in a list 
    
        foreach ($fetchdata as $key => $row) {
            $sorted_queue->insert($key, $row['priority']);
        }
    }
    
    $keys_pri=array(); //stores the priority keys based on priority 
    foreach ($sorted_queue as $pothole) {
        array_push($keys_pri,$sorted_queue->key());
    }

  
    reportcount($fetchdata);
    return $keys_pri;
}
   
?>

