<?php

class BlogModel extends CI_Model {

    public function get_blogs(){
        return $this->blogs();
    }

    public function get_single_blog($slug_id){
        $blogs = $this->blogs();
        $fill_name = is_numeric($slug_id) ? 'id' : 'slug';
        $filtered_blogs = array_filter($blogs, function($blog) use ($fill_name, $slug_id) {
            return $blog[$fill_name] == $slug_id;  
        });
        return $filtered_blogs;
    }


    public function blogs(){
        $blogs = [
            [
                'id' => 1,
                'title' => 'Blog 1',
                'slug' => 'blog-1',
                'content' => 'This is the content of Blog 1'
            ],
            [
                'id' => 2,
                'title' => 'Blog 2',
                'slug' => 'blog-2',
                'content' => 'This is the content of Blog 2'
            ],
            [       
                'id' => 3,
                'title' => 'Blog 3',
                'slug' => 'blog-3',
                'content' => 'This is the content of Blog 3'
            ]
        ];

        return $blogs;
    }


}

