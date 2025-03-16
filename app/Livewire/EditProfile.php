<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class EditProfile extends Component
{
    use Toast;
    use WithFileUploads;
    public $selectedRegion;
    public $selectedProvince;
    public $selectedMunicipality;
    public $selectedBarangay;
    public $regions;

    public $members;

    public $photo;

    public $user_id;
    public $member_id;

    public $last_name;
    public $first_name;
    public $middle_name;
    public $email;
    public $phone;
    public $aka;
    public $batch_name;
    public $t_birth;

    public $user_type;

    public $gt;
    public $current_chapter;
    public $root_chapter;
    public $status;
    public $address;

    public $photoPath;
  

    

    



    public function mount($member_id)
    {
        // $this->regions = json_decode(Storage::disk('public')->get('address-api.json'), true);

        $json = Storage::disk('public')->get('address-api.json');
        $this->regions = json_decode($json, true);

        // $userId = Auth::id();
        $this->member_id = $member_id;
        
        // $this->members = Member::where('user_id', auth()->user()->id)->first();
        // $this->members = Member::where('user_id', Auth::id())->first();
        $this->members = Member::where('member_id', $this->member_id)->firstOrFail();

        
        // dd($this->members);
        $this->user_id = $this->members->user_id;
        $this->member_id = $this->members->member_id;
        $this->last_name = $this->members->last_name;
        $this->first_name = $this->members->first_name;
        $this->middle_name = $this->members->middle_name;
        $this->email = $this->members->email;
        $this->phone = $this->members->phone;
        $this->aka = $this->members->aka;
        $this->batch_name = $this->members->batch_name;
        $this->t_birth = $this->members->t_birth;
        $this->gt = $this->members->gt;
        $this->current_chapter = $this->members->current_chapter;
        $this->root_chapter = $this->members->root_chapter;
        $this->status = $this->members->status;
        $this->user_type = $this->members->user_type;
        $this->address = $this->members->address;
        $this->photo = $this->members->photo;

        
        
        // Populate the address details if available
        if ($this->members) {
            $this->selectedRegion = $this->members->region;
            $this->selectedProvince = $this->members->province;
            $this->selectedMunicipality = $this->members->municipality;
            $this->selectedBarangay = $this->members->barangay;
        }
    }

    public function render()
    {
        $members = Member::where('user_id', Auth::id())->get();
       
        return view('livewire.edit-profile', [
            'members' => $members,
            'provinces' => $this->getProvinces(),
        ]);
    }

    public function setSelectedRegion($region)
    {
        $this->selectedRegion = $region;
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




public function updateProfile()
{
    // Fetch the member using the provided member_id
    $member = Member::where('member_id', $this->member_id)->firstOrFail();

    // Store the current photo path
    $oldPhotoPath = $member->photo;

    // Initialize flags
    $isUpdated = false;  // Flag to track if any field is updated
    $emptyFields = false;  // Flag to track if any required field is empty

    // Prepare the fields data
    $fields = [
        'user_id' => $this->user_id,
        'last_name' => strtoupper($this->last_name),
        'first_name' => strtoupper($this->first_name),
        'middle_name' => strtoupper($this->middle_name),
        'email' => strtoupper($this->email),
        'phone' => strtoupper($this->phone),
        'aka' => strtoupper($this->aka),
        'batch_name' => strtoupper($this->batch_name),
        't_birth' => $this->t_birth, // Assuming t_birth does not need to be uppercase
        'gt' => strtoupper($this->gt),
        'current_chapter' => strtoupper($this->current_chapter),
        'root_chapter' => strtoupper($this->root_chapter),
        'status' => strtoupper($this->status),
        'user_type' => strtoupper($this->user_type),
        'region' => strtoupper($this->selectedRegion),
        'province' => strtoupper($this->selectedProvince),
        'municipality' => strtoupper($this->selectedMunicipality),
        'barangay' => strtoupper($this->selectedBarangay),
        'address' => strtoupper($this->address),
    ];

    // Loop through fields to check if anything is changed
    foreach ($fields as $key => $value) {
        // Check if the field is not empty and has been changed
        if (!empty($value)) {
            if ($value != $member->$key) {
                $member->$key = $value;  // Update field value
                $isUpdated = true;  // Mark as updated
            }
        // } else {
        //     // If the field is empty, mark it as needing attention
        //     $emptyFields = true;
        }
    }

    // Handle the photo upload separately
    if ($this->photo && $this->photo instanceof \Illuminate\Http\UploadedFile && $this->photo->isValid()) {
        // Delete the old photo if it exists
        if ($oldPhotoPath && Storage::disk('public')->exists($oldPhotoPath)) {
            Storage::disk('public')->delete($oldPhotoPath);
        }
        // Store the new photo
        $photoPath = $this->photo->store('uploads', 'public');
        $member->photo = $photoPath;
        $isUpdated = true;  // Mark as updated because photo has been changed
        $this->reset('photo');

        Storage::disk('local')->deleteDirectory('livewire-tmp');
    }

    // Check if any changes have been made
    if ($isUpdated) {
        // If there are empty fields, show a warning message
        // if ($emptyFields) {
        //     $this->success("Some fields are empty. Please fill them out.", 'Warning', 'toast-top toast-end');
        // } else {
            // Save the updates in the database
            $member->save();
            // Display success message
            $this->success("Profile updated successfully!", 'Thank you!', 'toast-top toast-end');
        // }
    } else {
        // If no changes were made, show a message indicating no update
        $this->success("No changes were made to the profile.", 'Info', 'toast-top toast-end');
    }

    // Redirect back to the previous page
    return redirect()->route('edit-profile', ['member_id' => $this->member_id]);

    
}


}
