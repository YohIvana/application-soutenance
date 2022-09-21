<?php

namespace App\Http\Livewire;

use App\Models\pointage;
use Illuminate\Support\Facades\Validator;

use Livewire\Component;

class PointagesList extends Component
{
    
    public $pointages;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->pointages = pointage::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'heure_A' => 'required',
            'heure_D' => 'required',
            ' date' => 'required',
           
        ])->validate();

        pointage::create($this->state);

        $this->reset('state');
        $this->pointages = pointage::all();
    }

    public function edit($signature)
    {
        $this->updateMode = true;

        $pointage = pointage::find($signature);

        $this->state = [
            'signature' => $pointage->signature,
            'heure_A' => $pointage->heure_A,
            'heure_D' => $pointage->heure_D,
            'date' => $pointage->date,
        ];
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset('state');
    }

    public function update()
    {
        $validator = Validator::make($this->state, [
            'heure_A' => 'required',
            'prix' => 'required|email',
        ])->validate();


        if ($this->state['signature']) {
            $car = pointage::find($this->state['signature']);
            $car->update([
                'heure_A' => $this->state['heure_A'],
                'prix' => $this->state['prix'],
            ]);


            $this->updateMode = false;
            $this->reset('state');
            $this->pointages = pointage::all();
        }
    }

    public function delete($signature)
    {
        if($signature){
            pointage::where('signature',$signature)->delete();
            $this->pointages = pointage::all();
        }
    }

    public function render()
    {
        return view('livewire.pointages-list');
    }
}
