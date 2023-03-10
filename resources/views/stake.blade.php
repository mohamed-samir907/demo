<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            الحصة
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
                            <a href="{{ route('class') }}"
                                class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                فصل 1/4
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600">
                                28/02/2023
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-4 text-gray-400">/</span>
                            <span class="text-sm font-medium text-gray-500">
                                الحصة الأولى
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="bg-white overflow-hidden mt-2 shadow-sm sm:rounded-lg p-6">

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
                                aria-controls="dashboard" aria-selected="false">طلاب الفصل</button>
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

                        <div class="flex">
                            <div class="w-1/2 ml-2">
                                <h2 class="font-semibold mb-2 text-xl text-gray-800 leading-tight">
                                    الإيجابيات
                                </h2>
                                <div class="bg-white bg-white rounded-lg p-4 shadow-sm">
                                    <ul class="divide-y divide-gray-200">

                                        @php
                                        $data = [
                                        "إلتزام الطلاب بحضور الحصص",
                                        "إلتزام الطلاب بحل الواجبات ",
                                        "إلتزام الطلاب بعمل الأنشطة ",
                                        "إحضار الأدوات المدرسية ",
                                        "إحضار أدوات الأنشطة ",
                                        "الإلتزام بالزى المدرسى ",
                                        "الإلتزام بالمظهر العام ",
                                        "المحافظة على النظافة ",
                                        "المحافظة على ممتلكات الفصل ",
                                        "عدم إستخدام الأجهزة التى تعوق الفصل ",
                                        "التعاون مع الآخرين",
                                        ];
                                        @endphp

                                        @foreach ($data as $item)
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-green-700 truncate dark:text-white">
                                                        {{ $item }}
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-green-700 dark:text-white">
                                                    20
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="w-1/2 ml-2">
                                <h2 class="font-semibold mb-2 text-xl text-gray-800 leading-tight">
                                    السلبيات
                                </h2>
                                <div class="bg-white bg-white rounded-lg p-4 shadow-sm">
                                    <ul class="divide-y divide-gray-200">
                                        @php
                                        $data = [
                                        "التأخر عن الطابور",
                                        "التأخر عن بدء الحصة",
                                        "الغياب بدون عذر",
                                        "عدم أداء الواجبات",
                                        "عدم إحضار الأدوات المدرسية",
                                        "عدم إحضار أدوات الأنشطة",
                                        "عدم الإلتزام بالزى المدرسى",
                                        "عدم الإلتزام بالمظهر العام",
                                        "رمى المخلفات",
                                        "رمى الأوراق",
                                        "عدم الإهتمام بالنظافة",
                                        "الهروب",
                                        "إتلاف ممتلكات المدرسة",
                                        "الكتابة على الجدران",
                                        "قطع اللوحات",
                                        "كسر النوافذ",
                                        "إساءة إستخدام الأجهزة",
                                        "السلوك العدوانى",
                                        "الإستيلاء على ممتلكات الغير",
                                        "إساءة الأدب مع المعلمين",
                                        "العنف ضد المعلم",
                                        "إذاء النفس",
                                        "التدخين",
                                        "الأوشمة",
                                        "المواد المخدرة",
                                        "المساس بالسيادة الوطنية",
                                        "التحريض ضد الوطن",
                                        "الإنحرافات الأخلاقية",
                                        "الألفاظ النابية",
                                        ];
                                        @endphp
                                        @foreach ($data as $item)
                                        <li class="py-3">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <a href="#"
                                                        class="text-sm font-medium text-red-900 truncate dark:text-white">
                                                        {{ $item }}
                                                    </a>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-red-900 dark:text-white">
                                                    10
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">

                        <div class="flex items-center">
                            <div class="w-1/3 ml-2 bg-white rounded-lg p-4">
                                <ul class="max-w-md divide-y divide-gray-200">
                                    @for ($i = 1; $i <= 15; $i++)
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    @endfor
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-red-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/3 ml-2 bg-white rounded-lg p-4">
                                <ul class="max-w-md divide-y divide-gray-200">
                                    @for ($i = 1; $i <= 15; $i++)
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    @endfor
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-red-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/3 ml-2 bg-white rounded-lg p-4">
                                <ul class="max-w-md divide-y divide-gray-200">
                                    @for ($i = 1; $i <= 15; $i++)
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    @endfor
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-green-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 ml-2">
                                                <img class="w-8 h-8 p-1 rounded-full ring-2 ring-red-500"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Bordered avatar">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('dashboard') }}"
                                                    class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    محمد احمد محمود
                                                </a>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    رائد الفصل
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                الأول
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">

                        <div class="p-4 bg-white shadow-sm w-72 text-lg font-bold mb-2 mx-auto text-center">
                            معلومات الحصة
                        </div>

                        <div class="p-4 bg-white shadow-sm flex justify-between">
                            <span>التاريخ: </span>
                            <span>رقم الحصة:</span>
                            <span>المعلم:</span>
                            <span>المادة:</span>
                            <span>الحجرة الدراسية:</span>
                            <span>موضوع الدرس:</span>
                            <span></span>
                        </div>

                        <div class="p-4 bg-white shadow-sm flex justify-between mt-2">
                            <div class="flex items-center">
                                <input checked type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox"
                                    class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">المعلم
                                    الأساسى</label>
                            </div>
                            <div class="flex items-center">
                                <input checked type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox"
                                    class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">المعلم
                                    الإحتياطى</label>
                            </div>
                            <div class="flex items-center">
                                <label for="checked-checkbox"
                                    class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">الموضوع</label>
                            </div>
                            <div class="flex items-center">
                                <label for="checked-checkbox"
                                    class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">نوع الحصة</label>
                            </div>
                            <span></span>
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
                                                    <span class="bg-green-700 text-white rounded-lg px-2 py-1">{{ $value[0] }}</span> - <span class="bg-red-700 text-white rounded-lg px-2 py-1">{{ $value[1] }}</span>
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
                                                    <span class="bg-green-700 text-white rounded-lg px-2 py-1">{{ $value[0] }}</span> - <span class="bg-red-700 text-white rounded-lg px-2 py-1">{{ $value[1] }}</span>
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
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                        aria-labelledby="contacts-tab">
                        لا يوجد بيانات حالياً
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>