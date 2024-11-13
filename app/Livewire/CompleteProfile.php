<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mary\Traits\Toast;
use Livewire\WithFileUploads;

class CompleteProfile extends Component
{
    use Toast;
    use WithFileUploads;

    #[Validate('required')]
    public $last_name="";

    #[Validate('required')]
    public $first_name="";

    #[Validate('required')]
    public $middle_name="";
    
    #[Validate('required')]
    public $email="";

    #[Validate('required')]
    public $phone="";

    #[Validate('required')]
    public $aka="";

    #[Validate('required')]
    public $batch_name="";

    #[Validate('required')]
    public $t_birth="";

    #[Validate('required')]
    public $gt="";

    #[Validate('required')]
    public $current_chapter="";

    #[Validate('required')]
    public $root_chapter="";

    #[Validate('required')]
    public $status="";

    #[Validate('required')]
    public $address="";

    #[Validate('required')]
    public $regions=[];
    #[Validate('required')]
    public $selectedRegion;

    #[Validate('required')]
    public $selectedProvince;

    #[Validate('required')]
    public $selectedMunicipality;

    #[Validate('required')]
    public $selectedBarangay;

    // public $user_type="";

    public $user;
    public $memberId;

    #[Validate('image|max:1024')] // 1MB Max
    public $photo;




 

    public function save()
    {
        
        
    $this->validate();
   

    $lastNameInitial = strtoupper(substr($this->last_name, 0, 1));
    $firstNameInitial = strtoupper(substr($this->first_name, 0, 1));
    $middleNameInitial = strtoupper(substr($this->middle_name ?? '', 0, 1)); // Use middle_name if provided
    $birthday = date('Ymd', strtotime($this->t_birth));
    $randomNumber = rand(100000, 999999); // Generate a random 6-digit number
    $memberId = $lastNameInitial . $firstNameInitial . $middleNameInitial . $birthday . $randomNumber;

    // dd($this->all());
    $userId = Auth::id();

    $photo = $this->photo->store('uploads', 'public');


    Member::create([
        'user_id' => $userId,
        'member_id' => $memberId,
        'last_name' => strtoupper($this->last_name),
        'first_name' => strtoupper($this->first_name),
        'middle_name' => strtoupper($this->middle_name),
        't_birth' => $this->t_birth, // Assuming t_birth does not need to be uppercase
        'email' => strtoupper($this->email),
        'phone' => strtoupper($this->phone),
        'aka' => strtoupper($this->aka),
        'gt' => strtoupper($this->gt),
        'batch_name' => strtoupper($this->batch_name),
        'current_chapter' => strtoupper($this->current_chapter),
        'root_chapter' => strtoupper($this->root_chapter),
        'status' => strtoupper($this->status),
        // 'user_type' => strtoupper($this->user_type),
        'address' => strtoupper($this->address),
        'region' => strtoupper($this->selectedRegion),
        'province' => strtoupper($this->selectedProvince),
        'municipality' => strtoupper($this->selectedMunicipality),
        'barangay' => strtoupper($this->selectedBarangay),
        'photo' => $photo, // Assuming photo does not need to be uppercase
    ]);
    

    
        $this->reset();
  

        $this->success("Profile saved successfully!", 'Thank you!', 'toast-top toast-end');
        return redirect()->to('dashboard');

    }

    public function CompleteYourProfileFirst(){

        $this->emit('info', "Complete your profile first!", 'Thank you!', 'toast-top toast-center');

    }


    public function render()
    {
        // return view('livewire.complete-profile');
        return view('livewire.complete-profile', [
            'provinces' => $this->getProvinces(),
        ]);
    }

    public function mount()
    {
        $json = Storage::disk('public')->get('address-api.json');
        $this->regions = json_decode($json, true);
    
        $this->user = Auth::user(); // Set $this->user to the authenticated user object
        $this->email = $this->user->email;
        // $this->user_type = $this->user->user_type;
    }
    
    public function setSelectedRegion($value)
    {
        $this->selectedRegion = $value;
        $this->selectedProvince = null;
        $this->selectedMunicipality = null;
        $this->selectedBarangay = null;
    }

    public function setSelectedProvince($value)
    {
        $this->selectedProvince = $value;
        $this->selectedMunicipality = null;
        $this->selectedBarangay = null;
    }

    public function setSelectedMunicipality($value)
    {
        $this->selectedMunicipality = $value;
        $this->selectedBarangay = null;
    }

    public function getProvinces()
    {
        if (!$this->selectedRegion || !isset($this->regions[$this->selectedRegion]['province_list'])) {
            return [];
        }

        return $this->regions[$this->selectedRegion]['province_list'];
    }

  
    // public function showProfileToast()
    // {
    //     $this->dispatchBrowserEvent('show-toast', [
    //         'message' => 'Please complete your profile first!',
    //         'type' => 'warning'
    //     ]);
    // }

}
