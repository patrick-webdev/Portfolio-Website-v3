<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('portfolioModel');
	}

	public function index()
	{
		$data = [
			"page" => "Home",
			"navLinks" => $this->portfolioModel->getNavLinks(),
			"contactLinks" => $this->portfolioModel->getContactLinks()
		];
		$this->load->view('include/head', $data);
		$this->load->view('home', $data);
		$this->load->view('include/foot', $data);
	}

	public function projects(){
		$data = [
			"page" => "Projects",
			"navLinks" => $this->portfolioModel->getNavLinks(),
			"projects" => $this->portfolioModel->getProjects(),
			"contactLinks" => $this->portfolioModel->getContactLinks()
		];

		foreach($data["projects"] as $index=>$project){
			$tagIDs = $this->portfolioModel->getProjectTags($project["id"]);
			$tags = array();
			foreach($tagIDs as $tagID){
				$tag = $this->portfolioModel->getTag($tagID["tagID"])[0]["tag"];
				array_push($tags,$tag);
			}
			array_push($data["projects"][$index],$tags);
		}

		$this->load->view('include/head', $data);
		$this->load->view('projects', $data);
		$this->load->view('include/foot', $data);
	}

	public function games(){
		$data = [
			"page" => "Games",
			"navLinks" => $this->portfolioModel->getNavLinks(),
			"games" => $this->portfolioModel->getGames(),
			"contactLinks" => $this->portfolioModel->getContactLinks()
		];

		foreach($data["games"] as $index=>$game){
			$roleIDs = $this->portfolioModel->getGameRoles($game["id"]);
			$roles = array();
			foreach($roleIDs as $roleID){
				$role = $this->portfolioModel->getRole($roleID["roleID"])[0]["role"];
				array_push($roles, $role);
			}
			array_push($data["games"][$index],$roles);
		}

		$this->load->view('include/head', $data);
		$this->load->view('games', $data);
		$this->load->view('include/foot', $data);
	}

	public function playground(){
		$data = [
			"page" => "Playground",
			"navLinks" => $this->portfolioModel->getNavLinks(),
			"projects" => $this->portfolioModel->getPlaygrounds(),
			"contactLinks" => $this->portfolioModel->getContactLinks()
		];
		$this->load->view('include/head', $data);
		$this->load->view('playground', $data);
		$this->load->view('include/foot', $data);
	}
}
