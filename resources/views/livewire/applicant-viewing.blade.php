<div class="grid grid-cols-3 gap-4 mt-4 px-2 mb-4">
    <div class="w-full col-span-2 border-[1px] border-gray-300 rounded-xs ">
        <div class="w-full p-2 bg-red-500 text-white font-bold text-lg flex justify-content-between align-items-center">
            <span>Viewings</span>
        </div>
        <div class="overflow-x-auto p-2">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Organiser</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Viewing Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Property</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Meet at</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Confirmed With</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-[1px] border-gray-300">Action</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($viewings as $viewing)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-[1px] border-gray-300">{{ ucfirst($viewing->organiser) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-[1px] border-gray-300">{{ $viewing->date->format('d M, Y h:i a') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-[1px] border-gray-300">{{ $viewing->property->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-[1px] border-gray-300">{{ $viewing->meet_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-[1px] border-gray-300">
                            @if($viewing->confirm_with['landlord'])
                                <span class="text-green-500">Landlord</span>
                            @endif
                            @if($viewing->confirm_with['applicant'])
                                <span class="text-green-500">Applicant</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-[1px] border-gray-300">
                        <span class="@class(['text-green-500' => $viewing->status == 'confirmed', 'text-red-500' => $viewing->status == 'unconfirmed'])">
                            {{ strtoupper($viewing->status) }}
                        </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium border-[1px] border-gray-300">
                            <i class="fa fa-edit bg-blue-100 p-1 rounded-md text-blue-800 hover:text-blue-500 cursor-pointer" wire:click="edit({{ $viewing->id }})"></i>
                            <i class="fa fa-xmark-circle bg-red-100 p-1 rounded-md text-red-800 hover:text-red-500 cursor-pointer" wire:click="edit({{ $viewing->id }})"></i>
                            <i class="fa fa-check-circle bg-green-100 p-1 rounded-md text-green-800 hover:text-green-500 cursor-pointer" wire:click="edit({{ $viewing->id }})"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="w-full h-max shadow-lg shadow-gray-400">

        <div class="w-full p-2 bg-red-500 text-white font-bold text-lg flex justify-content-between align-items-center">
            <span>
                @if($editMode)
                    Edit @else
                    Add
                @endif
                Viewing</span>
            <i class="fa fa-history bg-blue-400 p-2 rounded-md hover:bg-blue-600" wire:click="clearForm"></i>
        </div>

        <form wire:submit.prevent="submit" class="w-full p-2 bg-white shadow-sm shadow-gray-400">
            <div class="w-full p-2 bg-gray-100 flex flex-col gap-2">
                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg">Organiser</span>
                    </div>
                    <div class="w-max flex flex-col ">
                        <div class="flex">
                            <input name="organiser" type="radio" wire:model="viewingForm.organiser" value="agent">
                            <label for="organiser" class="text-gray-400 text-lg ml-1">Agent</label>
                            <input name="organiser" type="radio" class="ml-4" wire:model="viewingForm.organiser"
                                   value="landlord">
                            <label for="organiser" class="text-gray-400 text-lg ml-1">Landlord</label>
                        </div>
                        @error('viewingForm.organiser') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg">Viewing date</span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <input type="datetime-local" wire:model="viewingForm.date">
                        </div>
                        @error('viewingForm.date') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                </div>

            </div>
            <div class="w-full p-2 flex flex-col gap-2">
                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg">Property</span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <x-select wire:model="viewingForm.property_id" name="property_id" id="property_id"
                                      class="border-[1px] border-gray-300 text-blue-600 w-[200px] p-2">
                                <option value="">-- Select Property --</option>
                                @foreach($properties as $property)
                                    <option value="{{$property->id}}">{{$property->title}}</option>
                                @endforeach
                            </x-select>
                        </div>
                        @error('viewingForm.property_id') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg">Meet at</span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <select wire:model="viewingForm.meet_at"
                                    class="border-[1px] border-gray-300 text-blue-600 w-[200px] p-2">
                                <option value="office">Office</option>
                                <option value="property">Property</option>
                                <option value="other">Other</option>
                            </select>

                        </div>
                        @error('viewingForm.meet_at') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg">Confirm with</span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <input name="confirm_with" wire:model="viewingForm.confirm_with.landlord" type="checkbox"
                                   class="border-[1px] border-gray-300 text-blue-600">
                            <label for="confirm_with" class="text-gray-400 text-lg ml-1">Landlord</label>
                            <input name="confirm_with" wire:model="viewingForm.confirm_with.applicant" type="checkbox"
                                   class="border-[1px] border-gray-300 text-blue-600 ml-4">
                            <label for="confirm_with" class="text-gray-400 text-lg ml-1">Applicant</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 bg-gray-100 flex flex-col gap-2 mt-4">
                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg">Reminder Alert</span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <input name="reminder_alert" wire:model="viewingForm.reminder_alert.via_email"
                                   type="checkbox" class="border-[1px] border-gray-300 text-blue-600">
                            <label for="reminder_alert" class="text-gray-400 text-lg ml-1">Email</label>
                        </div>
                    </div>
                </div>

                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg"></span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <select class="border-[1px] border-gray-300 text-blue-600 w-[200px] p-2"
                                    wire:model="viewingForm.reminder_alert.reminder_before">
                                <option value="5">5 Min</option>
                                <option value="10">10 Min</option>
                                <option value="15">15 Min</option>
                            </select>

                        </div>
                        @error('viewingForm.reminder_alert.reminder_before') <span
                            class="text-red-500">{{ $message }}</span> @enderror


                    </div>
                </div>

                <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-2">
                    <div class="w-[150px]">
                        <span class="text-gray-400 text-lg"></span>
                    </div>
                    <div class="w-max flex flex-col">
                        <div class="flex">
                            <input name="type" wire:model="viewingForm.reminder_alert.reminder_receiver.landlord"
                                   type="checkbox" class="border-[1px] border-gray-300 text-blue-600">
                            <label for="type" class="text-gray-400 text-lg ml-1">Landlord</label>
                            <input name="type" wire:model="viewingForm.reminder_alert.reminder_receiver.applicant"
                                   type="checkbox" class="border-[1px] border-gray-300 text-blue-600 ml-4">
                            <label for="type" class="text-gray-400 text-lg ml-1">Applicant</label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="w-full mt-8 flex justify-content-end">
                <button type="submit"
                        class="px-4 py-2 bg-blue-400 border-[1px] border-white text-white font-semibold rounded-sm hover:scale-105 transition ease-in duration-2000">
                    Save
                </button>
            </div>
        </form>
    </div>


</div>
