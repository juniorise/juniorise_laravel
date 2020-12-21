<?php

namespace App\Models;

class CategoriesData {
    public function get(){
        $categories = array(
            array(
                'id' => 'computer-science',
                'name' => "Computer Science",
                'class' => "list-group-item category"
            ),
            array(
                'id' => "network-telecom",
                'name' => "Network & Telecom",
                'class' => "list-group-item category"
            ),
            array(
                'id' => "architecture",
                'name' => "Architecture",
                'class' => "list-group-item category"
            ),
            array(
                'id' => "civil-engineer",
                'name' => "Civil Engineer",
                'class' => "list-group-item category"
            ),
            array(
                'id' => "doctor",
                'name' => "Doctor",
                'class' => "list-group-item category"
            ),
            array(
                'id' => "biology-engineer",
                'name' => "Biology Engineering",
                'class' => "list-group-item category"
            ),
        );
        return $categories;
    }
}
