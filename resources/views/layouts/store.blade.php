<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="favicon"content="{{ asset('storage/' . str_replace('\\', '/', setting('admin.icon_image')))  }}">
    <title>
        @yield('title')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{ setting('scripts.header') }}
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" class="bg-gray-50 home-one"
    data-new-gr-c-s-check-loaded="14.1167.0" data-gr-ext-installed="">
    {{-- mobile side bar --}}
    <div class="relative hidden w-full h-full drawer-wrapper">
        <div
            class="w-[280px] transition-all duration-300 ease-in-out h-screen overflow-y-auto overflow-x-hidden overflow-style-none bg-white fixed left-0 top-0 z-50 -left-[280px]">
            <div class="w-full px-5 mt-5 mb-4">
                <div class="flex items-center justify-between">
                    <button type="button"><svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.0363 33.9994C7.66923 34.031 0.0436412 26.4423 0.000545718 17.0452C-0.0425497 7.68436 7.54917 0.0479251 16.9447 0.00021656C26.3072 -0.0467224 33.9505 7.54277 33.9998 16.9352C34.0483 26.3153 26.4411 33.9679 17.0363 33.9994Z"
                                fill="black"></path>
                            <path
                                d="M17.0363 33.9994C26.4411 33.9679 34.0483 26.3153 33.9998 16.9352C33.9505 7.54277 26.3072 -0.0467224 16.9447 0.00021656C7.54917 0.0479251 -0.0425497 7.68436 0.000545718 17.0452C0.0436412 26.4423 7.66846 34.031 17.0363 33.9994ZM23.4629 21.5945C23.4514 21.8445 23.3321 22.0908 23.1305 22.3039C22.7865 22.6671 22.4479 23.0342 22.1039 23.3966C21.5236 24.0084 21.1458 24.0068 20.5648 23.3889C19.4581 22.2124 18.3492 21.0389 17.2533 19.8523C17.0633 19.6461 16.9686 19.6169 16.7608 19.8431C15.6511 21.0512 14.5222 22.2424 13.3978 23.4366C12.8753 23.9914 12.4697 23.9891 11.9388 23.4312C11.6032 23.0788 11.2715 22.7218 10.9399 22.3647C10.4089 21.7938 10.4081 21.3575 10.9376 20.7927C12.0503 19.6046 13.1593 18.4126 14.2836 17.2361C14.4822 17.0283 14.5037 16.9152 14.2921 16.6943C13.1654 15.5193 12.058 14.3266 10.9452 13.1385C10.4004 12.556 10.4042 12.1259 10.9545 11.5387C11.2785 11.1925 11.6009 10.8447 11.9272 10.5007C12.4821 9.91666 12.8822 9.92358 13.4417 10.5192C14.5468 11.6965 15.6588 12.8677 16.7516 14.0573C16.9671 14.2912 17.071 14.2651 17.271 14.0473C18.3831 12.8415 19.5082 11.6472 20.6363 10.4561C21.1273 9.93743 21.5521 9.94359 22.0469 10.4576C22.3848 10.8085 22.7157 11.1655 23.0474 11.5226C23.6115 12.1289 23.6122 12.5552 23.052 13.1539C21.9477 14.3328 20.8503 15.517 19.7321 16.6828C19.5058 16.9183 19.5382 17.0391 19.7475 17.2584C20.8641 18.4249 21.9623 19.6092 23.0681 20.7865C23.2721 21.002 23.456 21.229 23.4629 21.5945Z"
                                fill="#FE4949"></path>
                            <path
                                d="M23.4614 21.5947C23.4545 21.2292 23.2706 21.0022 23.0659 20.7844C21.9608 19.6071 20.8619 18.4228 19.7452 17.2563C19.5359 17.0377 19.5036 16.9169 19.7298 16.6807C20.848 15.5157 21.9454 14.3307 23.0497 13.1518C23.61 12.5539 23.6084 12.1276 23.0451 11.5205C22.7134 11.1635 22.3825 10.8064 22.0447 10.4555C21.5498 9.9415 21.125 9.93611 20.6341 10.454C19.5059 11.6452 18.3808 12.8394 17.2688 14.0452C17.0679 14.263 16.964 14.2891 16.7493 14.0552C15.6565 12.8663 14.5445 11.6952 13.4394 10.5171C12.88 9.92149 12.4798 9.91456 11.9249 10.4986C11.5979 10.8426 11.2762 11.1904 10.9522 11.5367C10.402 12.1238 10.3981 12.5547 10.943 13.1364C12.0558 14.3245 13.1632 15.5172 14.2898 16.6922C14.5014 16.9131 14.4799 17.0254 14.2813 17.234C13.157 18.4113 12.0481 19.6025 10.9353 20.7906C10.4058 21.3561 10.4074 21.7917 10.9376 22.3626C11.2693 22.7197 11.601 23.076 11.9365 23.4291C12.4675 23.987 12.873 23.9893 13.3956 23.4345C14.5207 22.2403 15.6488 21.0491 16.7586 19.841C16.9671 19.614 17.061 19.644 17.2511 19.8502C18.3469 21.0368 19.4559 22.2103 20.5625 23.3868C21.1435 24.0047 21.5214 24.0063 22.1016 23.3945C22.4456 23.0321 22.7842 22.6643 23.1282 22.3018C23.3306 22.091 23.4507 21.8448 23.4614 21.5947Z"
                                fill="white"></path>
                        </svg></button>
                </div>
            </div>
            <div class="w-full px-5 mt-5">
                <div class="search-bar w-full h-[34px]  flex ">
                    <div class="flex-1 bg-white h-full border border-r-0 border-[#E9E9E9]"><input type="text"
                            class="w-full text-xs h-full focus:outline-none foucus:ring-0 placeholder:text-qgraytwo pl-2.5 "
                            placeholder="Search Product..."></div>
                    <div class="w-[40px] h-full bg-qyellow flex justify-center items-center"><span><svg width="23"
                                height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 8.83158C0.0484783 8.43809 0.0969566 8.04461 0.169674 7.67571C0.484783 5.92962 1.2362 4.42946 2.39968 3.12604C3.75707 1.60128 5.45381 0.592971 7.44142 0.199486C9.76838 -0.267779 11.9741 0.0765214 14.0345 1.33076C16.3614 2.75714 17.84 4.82294 18.3975 7.50356C18.8823 9.7907 18.5187 11.9795 17.4037 14.0453C17.1856 14.4388 17.1856 14.4388 17.5007 14.7585C19.1247 16.4062 20.7487 18.0539 22.3727 19.7016C22.906 20.2427 23.1242 20.8575 22.9302 21.5953C22.5667 22.9971 20.8457 23.5135 19.7549 22.3822C18.8338 21.4231 17.9127 20.5132 16.9674 19.5541C16.216 18.7917 15.4888 18.0539 14.7374 17.2915C14.6889 17.2423 14.6404 17.1932 14.6162 17.1686C14.0345 17.4637 13.5012 17.808 12.9195 18.0539C10.4228 19.1114 7.90196 19.0868 5.42957 17.9555C3.56316 17.0948 2.15728 15.7422 1.16348 13.9469C0.533261 12.791 0.145435 11.5614 0.0484783 10.2334C0.0484783 10.1596 0.0242392 10.0858 0 10.012C0 9.64314 0 9.22507 0 8.83158ZM3.00566 9.4464C3.00566 12.9632 5.84164 15.816 9.30784 15.816C12.774 15.7914 15.5615 12.9632 15.5858 9.4464C15.5858 5.95422 12.7498 3.07685 9.30784 3.07685C5.8174 3.07685 3.00566 5.92962 3.00566 9.4464Z"
                                    fill="#1D1D1D"></path>
                            </svg></span></div>
                </div>
            </div>
            <div class="flex items-center w-full px-5 mt-5 space-x-3"><span
                    class="text-base font-semibold text-qblack">Categories</span><span
                    class="w-[1px] h-[14px] bg-qgray"></span><span class="text-base font-semibold text-qgray ">Main
                    Menu</span></div>
            <div class="w-full mt-5 category-item">
                <ul class="categories-list">
                    <li class="category-item"><a href="/all-products">
                            <div
                                class="flex items-center justify-between h-12 px-5 transition-all duration-300 ease-in-out bg-white cursor-pointer hover:bg-qyellow">
                                <div class="flex items-center space-x-6"><span><svg width="12" height="16"
                                            viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.911344 0.0514231C0.633547 0.132053 0.157324 0.565442 0.0722839 0.822452C-0.0240946 1.12481 -0.0240946 14.8132 0.0722839 15.1156C0.162993 15.3928 0.633547 15.811 0.94536 15.8917C1.10977 15.932 1.72773 15.9521 2.94663 15.9521H4.71546L4.85152 15.8262C5.03861 15.6649 5.03861 15.4331 4.85152 15.2718L4.71546 15.1458H2.9523H1.18914L1.05308 15.0199L0.911344 14.8989V8.85526V1.03914L1.05308 0.9182L1.18914 0.792214H5.90035H10.6116L10.7476 0.9182L10.8894 1.03914V8.85526V14.8989L10.7476 15.0199L10.6116 15.1458H8.8484H7.08524L6.94917 15.2718C6.76208 15.4331 6.76208 15.6649 6.94917 15.8262L7.08524 15.9521H8.85406C10.073 15.9521 10.6909 15.932 10.8553 15.8917C11.1842 15.806 11.6377 15.3877 11.7284 15.0955C11.7851 14.9191 11.7964 14.8673 11.7851 8.72423L11.7681 0.807333L11.598 0.560402C11.4903 0.409221 11.3202 0.258039 11.1501 0.16229L10.8723 0.0111084L5.99106 0.00102901C2.53844 -0.0040102 1.05308 0.0111074 0.911344 0.0514231Z"
                                                fill="black"></path>
                                            <path
                                                d="M1.96009 1.72447C1.86938 1.80006 1.81836 1.90588 1.81836 2.00163C1.81836 2.09738 1.86938 2.20321 1.96009 2.2788C2.09049 2.39975 2.13584 2.40479 2.72545 2.40479C3.31506 2.40479 3.36042 2.39975 3.49081 2.2788C3.58152 2.20321 3.63254 2.09738 3.63254 2.00163C3.63254 1.90588 3.58152 1.80006 3.49081 1.72447C3.36042 1.60352 3.31506 1.59848 2.72545 1.59848C2.13584 1.59848 2.09049 1.60352 1.96009 1.72447Z"
                                                fill="black"></path>
                                            <path
                                                d="M8.16214 1.66399C7.83899 1.76981 7.61221 1.93611 7.4478 2.19312C7.31174 2.3947 7.28906 2.48541 7.28906 2.81297C7.28906 3.15061 7.31174 3.22116 7.45914 3.44289C7.56686 3.59407 7.73694 3.74526 7.90702 3.84101C8.15647 3.97707 8.23584 3.99219 8.62135 3.99219C9.00687 3.99219 9.08624 3.97707 9.33569 3.84101C9.50577 3.74526 9.67585 3.59407 9.78357 3.44289C9.93664 3.22116 9.95364 3.15061 9.95364 2.80793C9.95364 2.46525 9.93664 2.3947 9.78357 2.17296C9.54545 1.83029 9.18829 1.64383 8.7234 1.61863C8.50797 1.60351 8.28686 1.62367 8.16214 1.66399ZM8.93317 2.53076C9.02388 2.60635 9.0749 2.71218 9.0749 2.80793C9.0749 2.90368 9.02388 3.0095 8.93317 3.0851C8.84813 3.16573 8.72907 3.21108 8.62135 3.21108C8.51364 3.21108 8.39458 3.16573 8.30954 3.0851C8.21883 3.0095 8.16781 2.90368 8.16781 2.80793C8.16781 2.71218 8.21883 2.60635 8.30954 2.53076C8.39458 2.45013 8.51364 2.40478 8.62135 2.40478C8.72907 2.40478 8.84813 2.45013 8.93317 2.53076Z"
                                                fill="black"></path>
                                            <path
                                                d="M1.96009 3.33677C1.86938 3.41236 1.81836 3.51819 1.81836 3.61394C1.81836 3.70969 1.86938 3.81551 1.96009 3.8911C2.09049 4.01205 2.13584 4.01709 2.72545 4.01709C3.31506 4.01709 3.36042 4.01205 3.49081 3.8911C3.58152 3.81551 3.63254 3.70969 3.63254 3.61394C3.63254 3.51819 3.58152 3.41236 3.49081 3.33677C3.36042 3.21583 3.31506 3.21079 2.72545 3.21079C2.13584 3.21079 2.09049 3.21583 1.96009 3.33677Z"
                                                fill="black"></path>
                                            <path
                                                d="M1.96009 4.94908C1.86938 5.02467 1.81836 5.13049 1.81836 5.22624C1.81836 5.32199 1.86938 5.42782 1.96009 5.50341C2.09049 5.62436 2.13584 5.62939 2.72545 5.62939C3.31506 5.62939 3.36042 5.62436 3.49081 5.50341C3.58152 5.42782 3.63254 5.32199 3.63254 5.22624C3.63254 5.13049 3.58152 5.02467 3.49081 4.94908C3.36042 4.82813 3.31506 4.82309 2.72545 4.82309C2.13584 4.82309 2.09049 4.82813 1.96009 4.94908Z"
                                                fill="black"></path>
                                            <path
                                                d="M1.96009 6.56187C1.86938 6.63746 1.81836 6.74329 1.81836 6.83904C1.81836 6.93478 1.86938 7.04061 1.96009 7.1162C2.09049 7.23715 2.13584 7.24219 2.72545 7.24219C3.31506 7.24219 3.36042 7.23715 3.49081 7.1162C3.58152 7.04061 3.63254 6.93478 3.63254 6.83904C3.63254 6.74329 3.58152 6.63746 3.49081 6.56187C3.36042 6.44092 3.31506 6.43588 2.72545 6.43588C2.13584 6.43588 2.09049 6.44092 1.96009 6.56187Z"
                                                fill="black"></path>
                                            <path
                                                d="M6.03052 7.19834C4.31271 8.72024 4.08594 8.94197 4.08594 9.07804C4.08594 9.17379 4.13696 9.28465 4.22767 9.37032L4.36373 9.50135H5.71303H7.05666L5.5713 10.8267C4.27303 11.9807 4.08594 12.1722 4.08594 12.3083C4.08594 12.5149 4.32405 12.7266 4.56216 12.7266C4.71523 12.7266 4.96468 12.5199 6.67682 10.998C8.80848 9.10324 8.79148 9.12339 8.47966 8.82607L8.3436 8.69504H6.9943H5.65067L7.13603 7.36968C8.42297 6.21566 8.6214 6.01912 8.6214 5.8881C8.6214 5.68148 8.38328 5.46983 8.14517 5.46983C7.9921 5.46983 7.74265 5.6714 6.03052 7.19834Z"
                                                fill="black"></path>
                                            <path
                                                d="M5.589 15.2714C5.49829 15.347 5.44727 15.4528 5.44727 15.5486C5.44727 15.6443 5.49829 15.7502 5.589 15.8257C5.8668 16.0777 6.35436 15.9013 6.35436 15.5486C6.35436 15.342 6.13325 15.1454 5.90081 15.1454C5.79309 15.1454 5.67404 15.1908 5.589 15.2714Z"
                                                fill="black"></path>
                                        </svg></span><span class="text-sm font-400">Mobile &amp; Laptops</span>
                                </div>
                                <div><span><svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="1.49805" y="0.818359" width="5.78538" height="1.28564"
                                                transform="rotate(45 1.49805 0.818359)" fill="#1D1D1D"></rect>
                                            <rect x="5.58984" y="4.90918" width="5.78538" height="1.28564"
                                                transform="rotate(135 5.58984 4.90918)" fill="#1D1D1D"></rect>
                                        </svg></span></div>
                            </div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto overflow-x-hidden">
        <header class="relative header-section-wrapper">
            {{-- Top header  --}}
            <div class="w-full h-10 mb-1 bg-white border-b border-gray-500 ">
                <div class="max-w-[1216px] mx-auto h-full ">
                    <div class="flex items-center justify-between h-full ">
                        <div class="topbar-nav">
                            <ul class="flex space-x-6">
                                <li><a href="/tracking-order"><span class="text-xs leading-6 text-qblack font-500">Track
                                            Order</span></a>
                                </li>
                                <li><a href="/faq"><span
                                            class="text-xs leading-6 text-qblack font-500">Support</span></a></li>
                            </ul>
                        </div>
                        @livewire('currency-switcher')
                    </div>
                </div>
                <div class=" lg:hidden block w-full h-[60px] bg-white ">
                    <div class="flex items-center justify-between w-full h-full px-5">
                        <div><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"></path>
                            </svg></div>
                        <div><a href="/"><img width="152" height="36" src="{{ asset('storage/' . setting('site.logo')) }}"
                                    alt="logo"></a></div>
                        <div class="relative cursor-pointer cart"><a href="/cart"><span><svg width="18"
                                        height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.1568 5.1772C16.0284 4.84626 15.7343 4.81766 14.2887 4.81766H13.0875V4.2947C13.0875 3.48165 12.9716 2.91374 12.6899 2.32949C12.1804 1.2713 11.3272 0.531797 10.2213 0.188601C9.68279 0.0251747 8.87923 -0.0442816 8.39047 0.0292604C7.03602 0.241715 5.88039 1.09562 5.29223 2.31315C5.00642 2.90966 4.89045 3.48165 4.89045 4.2947V4.82175H3.68511C2.23954 4.82175 1.94546 4.85035 1.81705 5.19354C1.75078 5.41008 1.12948 10.0637 0.864385 12.0697C0.632431 13.8184 0.417045 15.469 0.259648 16.711C-0.0137267 18.8519 -0.00544266 18.8846 0.00284141 18.9214V18.9255C0.0401198 19.0644 0.408761 19.428 0.520596 19.5342L1.00521 20H16.9438L17.3041 19.6854C17.4657 19.5424 18 19.0562 18 18.8152C18 18.6517 16.1899 5.27117 16.1568 5.1772ZM16.6911 18.5046C16.687 18.5332 16.6538 18.619 16.5958 18.6803L16.513 18.7702H1.46498L1.2496 18.5414L2.09871 12.2863C2.39694 10.0596 2.66203 8.11888 2.81943 6.95855C2.88984 6.45193 2.92298 6.19453 2.93955 6.06788C3.49872 6.06379 5.94252 6.0597 8.98278 6.0597H15.0302L15.0384 6.10465C15.1047 6.4315 16.6621 18.141 16.6911 18.5046ZM6.1372 4.82175V4.35598C6.1372 4.04139 6.17862 3.6083 6.22418 3.40811C6.46856 2.38669 7.30111 1.5573 8.34076 1.29173C8.77568 1.1855 9.48811 1.22228 9.92303 1.37753H9.92717C10.3828 1.5287 10.7556 1.77384 11.0994 2.14972C11.6544 2.74623 11.8408 3.28145 11.8408 4.27018V4.82175H6.1372Z"
                                            fill="black"></path>
                                    </svg></span></a><span
                                class="w-[18px] h-[18px] rounded-full  absolute -top-2.5 -right-2.5 flex justify-center items-center text-[9px] bg-qyellow text-qblack">15</span>
                        </div>
                    </div>
                </div>
                {{-- Header search bar --}}
                @livewire('search-bar')
            </div>
        </header>

        @yield('content')

        <div class="discount-banner w-full h-[307px] bg-cover flex justify-center items-center "
            style="background: url({{ asset('storage/default/discount-banner-1.jpg') }}) 0% 0% / cover no-repeat;">
            <div>
                <div data-aos="fade-up" class="aos-init">
                    <h1 class="mb-2 text-xl font-bold text-center text-black sm:text-3xl">Get <span
                            class="mx-1 text-yellow-500">20%</span> Off Discount Coupon</h1>
                    <p class="text-center sm:text-[18px] text-sm font-normal">by Subscribe our Newsletter</p>
                </div>
                <div data-aos="fade-right" class="sm:w-[543px] w-[300px] h-[54px] flex mt-8 aos-init">
                    <div
                        class="flex items-center flex-1 h-full pl-4 space-x-2 text-black bg-white focus-within:text-yellow-500">
                        <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 14H2C1.4 14 1 13.6 1 13V2C1 1.4 1.4 1 2 1H15C15.6 1 16 1.4 16 2V13C16 13.6 15.6 14 15 14Z"
                                    stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M3 4L8.5 8.5L14 4" stroke="currentColor" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></span><input type="email" name="email"
                            class="w-full h-full text-sm tracking-wider focus:outline-none placeholder:text-xs placeholder:text-qblack text-qblack font-400"
                            placeholder="EMAIL ADDRESS">
                    </div><button type="button" class="sm:w-[158px] w-[80px]  h-full bg-yellow-400 text-sm font-semibold">Get
                        the Coupon</button>
                </div>
            </div>
        </div>
        <footer class="p-3 bg-white print:hidden">
            <div class="max-w-[1216px] block mx-auto pt-[56px]">
                <div class="w-full flex flex-col items-center mb-[50px]">
                    <div class="mb-[40px]"><a href="/"><img width="152" height="36"
                                src="{{ asset('storage/' . setting('site.logo')) }}" alt="logo"></a></div>
                    <div class="w-full h-[1px] bg-[#E9E9E9]"></div>
                </div>
                <div class="lg:flex justify-between mb-[50px]">
                    <div class="lg:w-[424px]  ml-0 w-full mb-10 lg:mb-0">
                        <h1 class="text-[18] font-500 text-[#2F2F2F] mb-5">About Us</h1>
                        <p class="text-[#9A9A9A] text-[15px] w-[247px] leading-[28px]">We know there are a lot of
                            threa developers our but we pride into a firm in the industry.</p>
                    </div>
                    <div class="flex-1 lg:flex">
                        <div class="w-full mb-10 lg:w-1/3 lg:mb-0">
                            <div class="mb-5">
                                <h6 class="text-[18] font-500 text-[#2F2F2F]">Feature</h6>
                            </div>
                            <div>
                                <ul class="flex flex-col space-y-4 ">
                                    <li><a href="/about"><span
                                                class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">About
                                                Us</span></a></li>
                                    <li><a href="/terms-condition"><span
                                                class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Terms
                                                Condition</span></a></li>
                                    <li><a href="/all-products"><span
                                                class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Best
                                                Products</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-center w-full mb-10 lg:w-1/3 lg:flex lg:flex-col lg:mb-0 ">
                            <div>
                                <div class="mb-5">
                                    <h6 class="text-[18] font-500 text-[#2F2F2F]">General Links</h6>
                                </div>
                                <div>
                                    <ul class="flex flex-col space-y-4 ">
                                        <li><a href="/blogs"><span
                                                    class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Blog</span></a>
                                        </li>
                                        <li><a href="/tracking-order"><span
                                                    class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Tracking
                                                    Order</span></a></li>
                                        <li><a href="/become-saller"><span
                                                    class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Become
                                                    Seller</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="items-center w-full mb-10 lg:w-1/3 lg:flex lg:flex-col lg:mb-0">
                            <div>
                                <div class="mb-5">
                                    <h6 class="text-[18] font-500 text-[#2F2F2F]">Helpful</h6>
                                </div>
                                <div>
                                    <ul class="flex flex-col space-y-4 ">
                                        <li><a href="/flash-sale"><span
                                                    class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Flash
                                                    Sale</span></a></li>
                                        <li><a href="/faq"><span
                                                    class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">FAQ</span></a>
                                        </li>
                                        <li><a href="/about"><span
                                                    class="text-[#9A9A9A] text-[15px] hover:text-qblack border-b border-transparent hover:border-qblack cursor-pointer capitalize">Support</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-bar border-t border-qgray-border lg:h-[82px] lg:flex justify-between items-center">
                    <div class="flex items-center justify-between mb-3 lg:space-x-5">
                        <div class="flex items-center space-x-5"><a href="#"><svg width="16"
                                    height="16" viewBox="0 0 16 16" fill="none"
                                    class="fill-current text-qgray hover:text-qblack"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.1016 4.90039C12.6538 4.90039 13.1016 4.45268 13.1016 3.90039C13.1016 3.34811 12.6538 2.90039 12.1016 2.90039C11.5493 2.90039 11.1016 3.34811 11.1016 3.90039C11.1016 4.45268 11.5493 4.90039 12.1016 4.90039Z">
                                    </path>
                                    <path
                                        d="M8 12C5.8 12 4 10.2 4 8C4 5.8 5.8 4 8 4C10.2 4 12 5.8 12 8C12 10.2 10.2 12 8 12ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z">
                                    </path>
                                    <path
                                        d="M12 16H4C1.9 16 0 14.1 0 12V4C0 1.9 1.9 0 4 0H12C14.1 0 16 1.9 16 4V12C16 14.1 14.1 16 12 16ZM4 2C3.1 2 2 3.1 2 4V12C2 13 3 14 4 14H12C12.9 14 14 12.9 14 12V4C14 3.1 12.9 2 12 2H4Z">
                                    </path>
                                </svg></a><a href="#"><svg width="10" height="16" viewBox="0 0 10 16"
                                    fill="none" class="fill-current text-qgray hover:text-qblack"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 16V9H0V6H3V4C3 1.3 4.7 0 7.1 0C8.3 0 9.2 0.1 9.5 0.1V2.9H7.8C6.5 2.9 6.2 3.5 6.2 4.4V6H10L9 9H6.3V16H3Z">
                                    </path>
                                </svg></a><a href="#"><svg width="16" height="12" viewBox="0 0 16 12"
                                    fill="none" class="fill-current text-qgray hover:text-qblack"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.8 2.8C15.6 1.5 15 0.6 13.6 0.4C11.4 8.9407e-08 8 0 8 0C8 0 4.6 8.9407e-08 2.4 0.4C1 0.6 0.3 1.5 0.2 2.8C0 4.1 0 6 0 6C0 6 0 7.9 0.2 9.2C0.4 10.5 1 11.4 2.4 11.6C4.6 12 8 12 8 12C8 12 11.4 12 13.6 11.6C15 11.3 15.6 10.5 15.8 9.2C16 7.9 16 6 16 6C16 6 16 4.1 15.8 2.8ZM6 9V3L11 6L6 9Z">
                                    </path>
                                </svg></a></div>
                        <span class="sm:text-base text-[10px] text-gray-500 font-normal">©{{ date('Y') }}<a
                                href="{{ route('index') }}" target="_blank" rel="noreferrer"
                                class="mx-1 font-normal text-black">{{ setting('site.title') }}</a>All rights
                            reserved</span>
                    </div>
                    <div class=""><a href="#"><img width="318" height="28"
                                src="/assets/images/payment-getways.png" alt="payment-getways"></a></div>
                </div>
            </div>
        </footer>
    </div>
</body>
{{ setting('scripts.footer') }}
</html>
