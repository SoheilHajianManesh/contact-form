<?php 

namespace App\Http\Livewire\Components;

use Livewire\Attributes\Rule;
use Livewire\Component;

class login extends Component
{
	public string $username;
	public string $password;
	public array  $persons=[];
	public $counter = 0;
	public $errCount=0;
	//protected $rules = [];
	public array $messages = [
        'username.required' => 'The Username cannot be empty.',
        'username.minimum'	=> 'The username must be atleast have 3 letters',
        'password.required' => 'The Password cannot be empty',
        'password.minimum'	=> 'The Password must be atleast have 3 letters',
    ];

	public function addPerson(){
		
		$this->validate([
		'username' => 'required|min:3',
        'password' => 'required|min:3', 
    ]);

	

		array_unshift($this->persons,[$this->username,$this->password]);
		$this->username = "";
		$this->password = "";
		$this->counter+=1;
	}
	public function render(){
		return view('
			livewire..components.login');
	}
}