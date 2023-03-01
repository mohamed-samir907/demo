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
                        لا يوجد بيانات حالياً
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            الأسبوع: الثالث
                        </h2>
                        <div aria-label="Page navigation example" class="my-4">
                            <ul class="inline-flex">
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 mr-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">السابق</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">16</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">17</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">18</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">19</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">20</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">التالى</a>
                                </li>
                            </ul>
                        </div>

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
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                                <li>
                                    <a href="#" class="px-6 py-2.5 mb-1 mx-2 bg-blue-500 rounded-lg"></a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">
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
                                                    <a href="#" class="text-sm font-medium text-gray-900 truncate dark:text-white">
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
                                                    <a href="#" class="text-sm font-medium text-gray-900 truncate dark:text-white">
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
                                                    <a href="#" class="text-sm font-medium text-gray-900 truncate dark:text-white">
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
                                                    <a href="#" class="text-sm font-medium text-gray-900 truncate dark:text-white">
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
                                                    <a href="#" class="text-sm font-medium text-gray-900 truncate dark:text-white">
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
                                                    <a href="#" class="text-sm font-medium text-gray-900 truncate dark:text-white">
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