<?php

const DS = DIRECTORY_SEPARATOR;

function getSections (String $path) : Array {
    $sections = array();
    foreach(scandir($path) as $item) :
        if($item != '.' && $item != '..') : 
            if(!is_dir($path.DS.$item)) :
                array_push($sections, ['name'=>$item, 'path'=> $path.DS.$item]);
            else : 
                array_push($sections, ['name'=>$item, 'sub'=> getSections($path.DS.$item)]);
            endif;
        endif;
    endforeach;
    return $sections; 
}

function display( Array $sections, Int $nb) : String {
    $result = '';
    foreach($sections as $item) :
        if((isset($item['path']) && strlen($item['path'])>0)  || isset($item['sub']) ) : 
            if(isset($item['path'])) : 
                // if a path is set, adding file's name and content
                $result=$result. '<strong id="'. basename($item["name"], '.html') .'" class="ml-'.($nb-1).'">'. basename($item["name"], '.html').'</strong>';
                $result=$result. '<p class="text-justify" >'. file_get_contents($item['path']).'</p>';
            elseif(isset($item['sub'])) : 
                // else, if a 'sub' array is set, adding folder's name as a <h.$nb></h.$nb> + an iteration of display() on this array, with an incremented $nb
                $result=$result. '<h'.$nb.' id="'. $item["name"] .'" class="ml-'.($nb-1).'">'. $item["name"].'</h'.$nb.'>';
                if(sizeof($item['sub'])>0) :
                    $result=$result.'<ul>'.display($item["sub"], $nb+1).'</ul>';
                endif;
            endif;
        endif;
    endforeach;
    return $result; 
}

function menu(Array $sections, Int $nb) : String {
    foreach($sections as $item) : 
        $menu = 'menu'.'<li class="mx-1"><a class="text-info h'.strval($nb+2).'" href="#'. basename($item['name'], '.html').'">'.basename($item['name'], '.html').'</a>';
        if( (isset($item['sub']) && sizeof($item['sub'])>0)) :
            $menu = $menu.'<ul>';
            if(isset($item['sub']) && sizeof($item['sub'])>0) : 
                $menu = $menu.'<ul>'.menu($item["sub"], $nb+1).'</ul>';
            endif; 
            $menu=$menu.'</ul>';
        endif; 
        $menu=$menu.'</li>';
    endforeach; 
    return $menu;
}

$specs = [
    'name' => basename(dirname(__FILE__)),
    'path' => '.'.DS.$contentDir,
    'hierarchy'=> getSections('.'.DS.$contentDir)
];
