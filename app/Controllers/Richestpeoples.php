<?php
class Richestpeoples extends Controller
{
  private $RichModel;

  public function __construct()
  {
    $this->RichModel = $this->model('RichestPeople');
  }
}
  