<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class ViewMainController extends Controller
{
    public function main($lang) {

        if(in_array($lang, ['ar', 'en', 'fi', 'el', 'jp', 'la', 'pt', 'es'])) {
            $langTemp = App::getLocale();
            if($langTemp != $lang) {
                App::setLocale($lang);
            }
        } else {
            return redirect()->to('/en');
        }

        $compare = array(
            date('d') - 28,
            date('m') - 12,
            date('Y') - 1994
        );
        if($compare[0] < 0 || $compare[1] < 0) {
            $age = $compare[2] - 1;
        } else {
            $age = $compare[2];
        };

        $projects = array (
            "project 1" => [
                'title' => 'Project 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.',
                'image' => '../assets/images/me.jpg',
                'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'more' => 'more information'
            ],
            "project 2" => [
                'title' => 'Project 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.',
                'image' => 'https://images.unsplash.com/photo-1586111400000-300000000000?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
                'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'more' =>'more information'
            ],
            "project 3" => [
                'title' => 'Project 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.',
                'image' => 'https://images.unsplash.com/photo-1586111400000-300000000000?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
                'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'more' =>'more information'
            ],
            "project 4" => [
                'title' => 'Project 4',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.',
                'image' => 'https://images.unsplash.com/photo-1586111400000-300000000000?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
                'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'more' =>'more information'
            ]
        );

        return view('main', [
            'lang' => $lang,
            'main' => true,
            'title' => 'Áquila Trindade',
            'age' => $age,
            'projects' => $projects
        ]);

    }
}
