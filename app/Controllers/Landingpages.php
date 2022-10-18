<?php

class Landingpages extends Controller
{
    //properties
    private $RichModel;

    // Dit is de constructor van de controller
    public function __construct() 
    {
        $this->RichModel = $this->model('Richestpeople');
    }

    public function index()
    {
        $richestpeople = $this->RichModel->getRichestpeople();
        //var_dump($records);

        $rows = '';

        foreach ($richestpeople as $value) {
            $rows .= '<tr>';
            $rows .= '<td>' . $value->Name . '</td>';
            $rows .= '<td>' . $value->Networth . '</td>';
            $rows .= '<td>' . $value->Age . '</td>';
            $rows .= '<td>' . $value->Country . '</td>';
            $rows .= '</tr>';
        }
       
        $data = [
            'title' => "Landingspagina",
            'richestpeople' => $rows
        ];
        $this->view('Landingpage/index', $data);
    }
}