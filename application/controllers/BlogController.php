<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

    public function index()
    {
        $this->load->model('BlogModel');
        $blogs = $this->BlogModel->get_blogs();


        echo "<h1>View Blog with ID</h1>";
        foreach($blogs as $blog){
            echo "<a href='blogs/".$blog['id']."'><h2>".$blog['title']."</h2></a>";
        }   
        echo "<br>";
        echo "<h1>View Blog with Slug</h1>";
        foreach($blogs as $blog){
            echo "<a href='blogs/".$blog['slug']."'><h2>".$blog['title']."</h2></a>";
        }   

    }

    public function single_blog($id_slug){

        $this->load->model('BlogModel');
        $blog = $this->BlogModel->get_single_blog($id_slug);
        $fill_name = is_numeric($id_slug) ? 'ID' : 'Slug';
        $blog = reset($blog); // Reset the array to the first element or remove the extra array index
        echo "<h1>Bolg Sowing based on ". $fill_name.": ". $id_slug."</h1>";
        echo "<h2> Title:".$blog['title']."</h2>";
        echo "<p> Content:".$blog['content']."</p>";



    }

    

}



?>