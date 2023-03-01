<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            الطالب
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

            <div class="flex mt-2">
                <div class="w-1/2 bg-white overflow-hidden shadow-sm sm:rounded-lg ml-1 p-2">
                    <div class="flex relative items-center mx-auto">
                        <div class="flex-grow flex items-center content-center flex-col sm:flex-row">
                            <div
                                class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div class="flex-grow sm:pr-6 mt-6 sm:mt-0">
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">محمد سمير شحاته عمر</h2>
                                <ul class="text-gray-500">
                                    <li>1/7/1998</li>
                                    <li>موهبة الرسم</li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="w-1/2 bg-white overflow-hidden shadow-sm sm:rounded-lg mr-1 p-2">
                    <h2 class="font-semibold text-l text-gray-800 leading-tight mb-3">
                        نتائج الفصل الدراسى الأول
                    </h2>
                    <div class="flex">
                        <ul class="w-1/2 text-gray-500">
                            <li>اللغة العربية</li>
                            <li>اللغة الإنجليزية</li>
                            <li>الرياضيات</li>
                            <li>اللغة الفرنسية</li>
                            <li>الفيزياء</li>
                            <li>الكيمياء</li>
                        </ul>
                        <ul class="w-1/2 text-gray-500">
                            <li><span class="ml-2">:</span> 240</li>
                            <li><span class="ml-2">:</span> 110</li>
                            <li><span class="ml-2">:</span> 125</li>
                            <li><span class="ml-2">:</span> 140</li>
                            <li><span class="ml-2">:</span> 100</li>
                            <li><span class="ml-2">:</span> 90</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="">
                <h2 class="font-semibold text-xl mt-3 text-gray-800 leading-tight">
                    تحليلات نتائج الطالب
                </h2>

                <div class="bg-white rounded-md p-2 mt-2">
                    <h2 class="accordion">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <span>الطالب لا يجيد القراءة ولا الكتابة.</span>
                            <svg class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="hidden acc-body">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                درجة الطالب فى اللغة العربية ضعيف جداً تؤكد أنه لا يجيد القراءة ولا الكتابة أو الإملاء.
                            </p>
                        </div>
                    </div>
                    <h2 class="accordion">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <span>الطالب لا يجيد القراءة ولا الكتابة.</span>
                            <svg class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="hidden acc-body">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                درجة الطالب فى اللغة العربية ضعيف جداً تؤكد أنه لا يجيد القراءة ولا الكتابة أو الإملاء.
                            </p>
                        </div>
                    </div>
                    <h2 class="accordion">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <span>الطالب لا يجيد القراءة ولا الكتابة.</span>
                            <svg class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="hidden acc-body">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                درجة الطالب فى اللغة العربية ضعيف جداً تؤكد أنه لا يجيد القراءة ولا الكتابة أو الإملاء.
                            </p>
                        </div>
                    </div>
                    <h2 class="accordion">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <span>الطالب لا يجيد القراءة ولا الكتابة.</span>
                            <svg class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="hidden acc-body">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                درجة الطالب فى اللغة العربية ضعيف جداً تؤكد أنه لا يجيد القراءة ولا الكتابة أو الإملاء.
                            </p>
                        </div>
                    </div>
                    <h2 class="accordion">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <span>الطالب لا يجيد القراءة ولا الكتابة.</span>
                            <svg class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="hidden acc-body">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                درجة الطالب فى اللغة العربية ضعيف جداً تؤكد أنه لا يجيد القراءة ولا الكتابة أو الإملاء.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="bg-white overflow-hidden mt-2 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>

<script>
    //
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    let elms = document.querySelectorAll(".acc-body");
    for (i=0; i < elms.length; i++) {
        elms[i].classList.add("hidden");
    }

    this.nextElementSibling.classList.toggle("hidden")
  });
}
</script>