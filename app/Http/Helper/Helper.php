<?php

if (!function_exists('view_button')) {
    function view_button($route )
    {
        return '<a href="' . $route . '" class="db-table-action view modal-btn">
                <i class="fa-solid fa-eye"></i>
                <span class="db-tooltip">view</span>
                </a>';
    
    }
}
if (!function_exists('edit_button')) {
    function edit_button($route)
    {
        return '<a href="' . $route . '" class="db-table-action edit modal-btn">
        <i class="fa-solid fa-pencil"></i>
        <span class="db-tooltip">edit</span>
      </a>';
    }
}
if (!function_exists('delete_button')) {
    function delete_button($route)
    {
            return '<form class="inline-block" action="' . $route . '" method="POST">' . method_field('DELETE') . csrf_field() .
                '<button class="db-table-action delete modal-btn"> <i class="fa-solid fa-trash-can"></i> <span class="db-tooltip">delete</span></button></form>';
 
    }
}
if (!function_exists('action_button')) {
    function action_button($array)
    {
        if (isset($array['view']) || isset($array['edit']) || isset($array['delete'])) {
            $retAction = '';
            if (isset($array['view']['route'])) {
                $retAction .= view_button($array['view']['route'], $array['view']);
            }
            if (isset($array['edit']['route'])) {
                $retAction .= edit_button($array['edit']['route'], $array['edit']);
            }
            if (isset($array['delete']['route'])) {
                $retAction .= delete_button($array['delete']['route'], $array['delete']);
            }
            return $retAction;
        }
        return '';
    }

    if (!function_exists('date_time_format')) {
        function date_time_format($date)
        {
            return \Carbon\Carbon::parse($date)->format('d M Y h:i A');
        }
    }
    if (!function_exists('custome_date_format')) {
        function custome_date_format($date)
        {
            return \Carbon\Carbon::parse($date)->format('d M Y');
        }
    }
    if (!function_exists('time_format')) {
        function time_format($time)
        {
           return  date('h:i A', strtotime($time));
        }
    }
}
