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
    // $member = Member::where('user_id', Auth::id())->first();

    $member = Member::where('member_id', $this->member_id)->firstOrFail();

    // Store the current photo path
    // $photoPath = $member->photo;

    // // Delete the old photo if a new one is being uploaded
    // if ($this->photo && $this->photo instanceof \Illuminate\Http\UploadedFile && $this->photo->isValid()) {
    //     Storage::delete('public/' . $member->photo);
    //     $photoPath = $this->photo->store('uploads', 'public');
    // }

    $oldPhotoPath = $member->photo;

    // If a new photo is uploaded, delete the old photo and store the new one
    if ($this->photo && $this->photo instanceof \Illuminate\Http\UploadedFile && $this->photo->isValid()) {
        // Delete the old photo if it exists
        if ($oldPhotoPath && Storage::disk('public')->exists($oldPhotoPath)) {
            Storage::disk('public')->delete($oldPhotoPath);
        }
        // Store the new photo with a unique name
        $photoPath = $this->photo->store('uploads', 'public');
    } else {
        // Keep the old photo if no new photo is uploaded
        $photoPath = $oldPhotoPath;
    }

    // Update member data, excluding photo if it hasn't changed
    $data = [
        'user_id' => $this->user_id,
        'member_id' => $this->member_id,
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
    // Only include photo if it has been updated
    if ($this->photo) {
        $data['photo'] = $photoPath;
    }

    $member->update($data);

    // Display success message
    $this->success("Profile updated successfully!", 'Thank you!', 'toast-top toast-end');
    return redirect()->back();
}


}
