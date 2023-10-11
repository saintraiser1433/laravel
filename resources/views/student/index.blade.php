{{-- @dd(auth()->user()->email) --}}
@include('partials.header')
@php
    $array = ['title' => 'Student System'];
@endphp
<x-nav :data="$array" />
<x-messages />

<header class="w-screen mx-auto mt-10">
    <a href="#">
        <h1 class="text-4xl p-2 text-white text-center">Student List</h1>
    </a>
</header>
<section>
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-6">
                            {{ $student->first_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->last_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->age }}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@include('partials.footer')
{{-- <li>{{ $students }}</li> --}}
