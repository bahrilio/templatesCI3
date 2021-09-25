<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

	public function index()
	{
		set_page_title('SI SCHOOL|Student');
		load_view('student/index');
	}
}
