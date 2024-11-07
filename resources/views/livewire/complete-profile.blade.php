<div class="mx-2 md:mx-36 lg:mx-8 xl:mx-36 mt-16">
    <div class="pt-8">
    <x-mary-toast />
    <form wire:submit="save" method="POST">
        <div class="mt-4 border-2 border-yellow-400 rounded-lg xl:mx-14">
            <div class="mt-10 font-bold text-center text-yellow-500">Complete your Information</div>

            <div class="pl-2">
                <x-mary-file wire:model="photo" accept="image/png, image/jpeg">
                    <img src="{{ 'storage/logo/default.png' }}" class="h-40 rounded-lg" />
                </x-mary-file>
            </div>


            <div class="p-2">
                <div class="flex flex-col lg:gap-2 lg:flex-row">
                    <input type="text" wire:model="last_name" name="last_name"
                        class="block w-full px-4 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Last Name" />
                    <div>
                        @error('last_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="text" wire:model="first_name" name="first_name"
                        class="block w-full px-4 py-4 mt-1 backdrop-blur-md bg-white/30  border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="First Name"  />
                    <div>
                        @error('first_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="text" wire:model="middle_name" name="middle_name"
                        class="block w-full px-4 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Middle Name" />
                      
                    <div>
                        @error('middle_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col gap-1 lg:gap-4 lg:my-2 lg:flex-row">
                    <input type="email" wire:model="email" name="email"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Email" autocomplete="email" disabled/>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="text" wire:model="phone" name="phone"
                        class="block w-full px-3 py-4 lg:mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Phone" autocomplete="phone" />
                    @error('phone')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col lg:gap-4 lg:my-2 lg:flex-row">
                    <input type="text" wire:model="aka" name="aka"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="AKA" />
                    @error('aka')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="text" wire:model="batch_name" name="batch_name"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Batch Name" aria-atomic="" />
                    @error('batch_name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="date" wire:model="t_birth" name="t_birth"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="T-Birth" />
                    @error('t_birth')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col lg:gap-4 lg:flex-row">
                    <input type="text" wire:model="gt" name="gt"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="GT" />
                    @error('gt')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="text" wire:model="current_chapter" name="current_chapter"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Current Chapter" />
                    @error('current_chapter')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="text" wire:model="root_chapter" name="root_chapter"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Root Chapter" />
                    @error('root_chapter')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="text" wire:model="status" name="status"
                        class="block w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        placeholder="Status" />
                    @error('status')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col lg:gap-4 lg:flex-row">
                    <!-- resources/views/livewire/address-dropdown.blade.php -->

                    <div class="flex flex-col  w-full lg:gap-4 ">
                        <div class="flex flex-col w-full gap-1 mt-1 lg:mt-4 lg:gap-4 lg:flex-row">
                            <select wire:model="selectedRegion" wire:change="setSelectedRegion($event.target.value) "
                                name="selectedRegion"
                                class="w-full px-3 py-4  backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm">
                                <option value="">Select Region</option>
                                @foreach ($regions as $regionKey => $region)
                                    <option value="{{ $regionKey }}">{{ $region['region_name'] }}</option>
                                @endforeach
                            </select>
                            @error('selectedRegion')
                                <span class="error">{{ $message }}</span>
                            @enderror



                            <select wire:model="selectedProvince"
                                wire:change="setSelectedProvince($event.target.value)" name="selectedProvince"
                                class="w-full px-3 py-4  backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm">
                                <option value="">Select Province</option>
                                @foreach ($provinces as $province => $data)
                                    <option value="{{ $province }}">{{ $province }}</option>
                                @endforeach
                            </select>
                            @error('selectedProvince')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="flex flex-col w-full gap-1 lg:gap-4 lg:flex-row">
                            <select wire:model="selectedMunicipality"
                                wire:change="setSelectedMunicipality($event.target.value)" name="selectedMunicipality"
                                class="w-full px-3 py-4 mt-1 backdrop-blur-md bg-white/30 rounded-md shadow-sm border-slate-300 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm">
                                <option value="">Select Municipality</option>
                                @if ($selectedRegion && $selectedProvince)
                                    @foreach ($regions[$selectedRegion]['province_list'][$selectedProvince]['municipality_list'] as $municipality => $data)
                                        <option value="{{ $municipality }}">{{ $municipality }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('selectedMunicipality')
                                <span class="error">{{ $message }}</span>
                            @enderror


                            <select wire:model="selectedBarangay" name="selectedBarangay"
                                class="w-full px-3 py-4 backdrop-blur-md bg-white/30 border rounded-md shadow-sm border-slate-300 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm">
                                <option value="">Select Barangay</option>
                                @if ($selectedRegion && $selectedProvince && $selectedMunicipality)
                                    @foreach ($regions[$selectedRegion]['province_list'][$selectedProvince]['municipality_list'][$selectedMunicipality]['barangay_list'] as $barangay)
                                        <option value="{{ $barangay }}">{{ $barangay }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('selectedBarangay')
                                <span class="error">{{ $message }}</span>
                            @enderror


                        </div>
                    </div>
                </div>
                <input type="hidden" wire:model="user_type" name="user_type"
                    class="block w-full px-3 py-4 mt-1  border rounded-md shadow-sm border-slate-300 placeholder-slate-400 placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                    placeholder="User Type" />

                <div class="mt-1 lg:my-4">
                    <textarea type="text" wire:model="address" id="address" cols="30" rows="4" name="address"
                        class="w-full h-20 p-5 backdrop-blur-md bg-white/30 mb-6 text-yellow-500 border rounded-md resize-none border-slate-300  placeholder:text-black focus:border-yellow-500 focus:outline-none focus:ring-1 focus:ring-yellow-500 text-sm"
                        autocomplete="street-address" placeholder="Address">Complete Address</textarea>
                    @error('address')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>


                <div class="text-center ">
                    <button type="submit"
                        class="px-8 py-2 text-sm font-semibold text-white bg-blue-700 rounded-lg cursor-pointer">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
