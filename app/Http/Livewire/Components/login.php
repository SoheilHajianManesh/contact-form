<?php 

namespace App\Http\Livewire\Components;

use Livewire\Component;

class login extends Component
{
	public string $username;
	public string $password;
	public array  $persons;
	public function addPerson(){
		$this->persons=[$this->username,$this->password];
	}
	public function render(){
		return view('
			livewire..components.login');
	}
}
