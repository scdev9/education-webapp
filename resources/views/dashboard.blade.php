<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if($role==1)
                    {{ __("You're logged in as Student") }}

                    <div>
                    <table class="table">
                        <thead>
                           <tr> 
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                           </tr> 
                        </thead>
                          <tbody>
                           @foreach($students as $student)
                             <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->student_email}}</td>
                             </tr>
                        @endforeach
                          </tbody>
                    </table>
            </div>
                    @else
                    {{ __("You're logged in as Teacher") }}
                    @endif

                    @foreach($students as $student)
                    {{$student->student_name}}
                    @endforeach 


                </div>
               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
