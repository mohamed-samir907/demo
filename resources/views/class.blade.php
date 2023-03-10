<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            الفصل
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-700 rounded shadow bg-white dark:bg-gray-800" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            المنيا
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                مطاى
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                قطاع البندر
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                المرحلة الثانوية
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                مدرسة مطاى الثانوية العامة بنين
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                الصف الأول الثانوى
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <span class="text-sm font-medium text-gray-500">
                                فصل 1/4
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="bg-white overflow-hidden mt-2 shadow-sm sm:rounded-lg p-6">

                <div class="flex flex-center justify-center">
                    <div id="cal-heatmap"></div>
                </div>

                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-between" id="myTab"
                        data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">الآداءات</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">خطة الحصص</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">إحصائيات</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">أخبار</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">

                        <div class="flex justify-right items-center">
                            <h1 class="text-lg font-bold ml-4">تقرير اليوم الدراسى:</h1>

                            <div class="relative max-w-sm bg-white ml-4">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input datepicker type="text"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="قم بإختيار التاريخ">
                            </div>
                        </div>

                        <div class="p-4 flex mt-4 text-center">
                            <div class="flex-1 bg-white mx-5 rounded-lg p-4 shadow-sm">
                                <h1 class="text-lg font-bold">آداءات المعلم</h1>
                                <ul class="divide-y mx-auto w-72 divide-gray-200 text-right">
                                    @php
                                    $data = [
                                    "حضور وإنصراف" => "90%",
                                    "سجلات ومهام" => "90%",
                                    "آداءات طلاب" => "30",
                                    "متوسط آداءت" => "30%",
                                    ];
                                    @endphp

                                    @foreach ($data as $key => $value)
                                    <li class="py-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <a href="#"
                                                    class="text-sm font-medium text-green-700 truncate dark:text-white">
                                                    {{ $key }}
                                                </a>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-green-700 dark:text-white">
                                                {{ $value }}
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="flex-1 bg-white mx-5 rounded-lg p-4 shadow-sm">
                                <h1 class="text-lg font-bold">آداءات الطلاب</h1>
                                <ul class="divide-y mx-auto w-72 divide-gray-200 text-right">
                                    @php
                                    $data = [
                                    "عدد الطلاب" => "40",
                                    "الحضور والغياب" => ["35", "5"],
                                    "الواجبات والأدوات" => ["25", "10"],
                                    "المظهر العام" => [25, 10],
                                    "السلوكيات" => [25, 10]
                                    ];
                                    @endphp

                                    @foreach ($data as $key => $value)
                                    <li class="py-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <a href="#"
                                                    class="text-sm font-medium text-green-700 truncate dark:text-white">
                                                    {{ $key }}
                                                </a>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-green-700 dark:text-white">
                                                @if (is_array($value))
                                                <span class="bg-green-700 text-white rounded-lg px-2 py-1">{{ $value[0]
                                                    }}</span> - <span
                                                    class="bg-red-700 text-white rounded-lg px-2 py-1">{{ $value[1]
                                                    }}</span>
                                                @else
                                                {{ $value }}
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="flex-1 bg-white mx-5 rounded-lg p-4 shadow-sm">
                                <h1 class="text-lg font-bold">متابعات</h1>
                                <ul class="divide-y mx-auto w-72 divide-gray-200 text-right">
                                    @php
                                    $data = [
                                    "عدد المتابعات" => "5",
                                    "الإدارة المدرسية" => ["3", "0"],
                                    "التوجيه الفنى" => ["2", "1"],
                                    "أولياء الأمور" => [3, 2],
                                    "المتابعات العليا" => [3, 0]
                                    ];
                                    @endphp

                                    @foreach ($data as $key => $value)
                                    <li class="py-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <a href="#"
                                                    class="text-sm font-medium text-green-700 truncate dark:text-white">
                                                    {{ $key }}
                                                </a>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-green-700 dark:text-white">
                                                @if (is_array($value))
                                                <span class="bg-green-700 text-white rounded-lg px-2 py-1">{{ $value[0]
                                                    }}</span> - <span
                                                    class="bg-red-700 text-white rounded-lg px-2 py-1">{{ $value[1]
                                                    }}</span>
                                                @else
                                                {{ $value }}
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">

                        <div class="bg-white p-6 rounded-lg">
                            <ul class="w-full flex flex-wrap mb-4 items-center justify-between text-gray-900">
                                <li class="w-48 bg-white">
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">1</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">2</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">3</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">4</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">5</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">6</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">7</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">8</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">9</span>
                                </li>
                                <li>
                                    <span class="px-6 py-3 bg-gray-100 rounded-lg">10</span>
                                </li>
                            </ul>
                            @php
                            $days = ["السبت", "الأحد", "الأثنين", "الثلاثاء", "الأربعاء", "الخميس"];
                            @endphp
                            @foreach ($days as $day)
                            <ul class="w-full flex flex-wrap items-center justify-between text-gray-900">
                                <li class="w-48 py-2 mb-1 text-center bg-gray-100 rounded-lg">
                                    {{ $day }}
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="{{ route('stake') }}"
                                        class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">
                        <div class="flex justify-right items-center mb-4">
                            <h1 class="text-lg font-bold ml-4">تقرير اليوم الدراسى</h1>
                            <div class="relative max-w-sm bg-white">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input datepicker type="text"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="قم بإختيار التاريخ">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="w-1/2 ml-2">
                                <h2 class="font-semibold mb-2 text-xl text-gray-800 leading-tight">
                                    الإيجابيات
                                </h2>
                                <div class="bg-white bg-white rounded-lg p-4 shadow-sm">
                                    <ul class="divide-y divide-gray-200">
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        إلتزام الطلاب بحضور الحصص
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    ممتاز
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        إلتزام الطلاب بحل الواجبات
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    90%
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        إلتزام الطلاب بعمل المطلوب منهم
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    100%
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w-1/2 ml-2">
                                <h2 class="font-semibold mb-2 text-xl text-gray-800 leading-tight">
                                    السلبيات
                                </h2>
                                <div class="bg-white bg-white rounded-lg p-4 shadow-sm">
                                    <ul class="divide-y divide-gray-200">
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        إهمال بعض الطلاب فى حل الواجب
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    10%
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        إهمال بعض الطلاب فى حل الواجب
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    10%
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                        إهمال بعض الطلاب فى حل الواجب
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    10%
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                        aria-labelledby="contacts-tab">
                        لا يوجد بيانات حالياً
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>