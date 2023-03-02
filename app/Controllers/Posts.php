<?php
/**
 * Posts controller
 * 
 * PHP version 5.6
 */
class Posts
{

    /**
     * show the index page
     * 
     * @return void
     */
    public function index()
    {
        echo "hello from the indec action in the Posts controller";
    }

    /**
     * show the add new page
     * 
     * @return void
     */
     public function addNew()
     {
         echo "hello from the addNew action in the Posts controller";
     }
}