<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        * {
            font-family: "Work Sans", serif;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar hidden lg:block h-[100px] max-w-7xl mx-auto">
            <div class="container mx-auto h-full p-4 lg:flex flex-row items-center justify-between">
                <div class="brand">
                    <a href="#" class="text-2xl font-bold text-gray-800">
                        <img src="{{ asset('./images/brand/kanginpo.png') }}" class="max-h-[28px] object-contain" alt="">
                    </a>
                </div>
                <div class="menu">
                    <ul class="flex flex-row gap-x-10">
                        <li class="link-item">
                            <a href="" class="text-[#3b3c4a] text-base font-normal font-['Work Sans'] leading-normal">Beranda</a>
                        </li>
                        <li class="link-item">
                            <a href="" class="text-[#3b3c4a] text-base font-normal font-['Work Sans'] leading-normal">Kategori</a>
                        </li>
                        <li class="link-item">
                            <a href="" class="text-[#3b3c4a] text-base font-normal font-['Work Sans'] leading-normal">Terbaru</a>
                        </li>
                        <li class="link-item">
                            <a href="" class="text-[#3b3c4a] text-base font-normal font-['Work Sans'] leading-normal">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-row items-center justify-between">
                    <form action="" class="px-[16px] gap-x-3 rounded-[5px] bg-zinc-100 me-[40px]">
                        <input type="text" class="w-[166px] h-9 border-0 focus:ring-0 focus:outline-0 placeholder:text-zinc-400 bg-zinc-100" placeholder="Search">
                        <button>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.90906 2C5.93814 2 4.98903 2.28791 4.18174 2.82733C3.37444 3.36674 2.74524 4.13343 2.37368 5.03045C2.00213 5.92746 1.90491 6.91451 2.09433 7.86677C2.28375 8.81904 2.75129 9.69375 3.43783 10.3803C4.12438 11.0668 4.99909 11.5344 5.95135 11.7238C6.90362 11.9132 7.89067 11.816 8.78768 11.4444C9.6847 11.0729 10.4514 10.4437 10.9908 9.63639C11.5302 8.8291 11.8181 7.87998 11.8181 6.90906C11.818 5.60712 11.3008 4.35853 10.3802 3.43792C9.45959 2.51731 8.211 2.00008 6.90906 2Z" stroke="#52525B" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M10.5715 10.5716L14 14" stroke="#52525B" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </button>
                    </form>
                    <button>
                        <svg width="48" height="29" viewBox="0 0 48 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="28" rx="14" fill="#E8E8EA" />
                            <g filter="url(#filter0_d_888_2468)">
                                <rect x="2" y="2" width="24" height="24" rx="12" fill="white" shape-rendering="crispEdges" />
                                <g clip-path="url(#clip0_888_2468)">
                                    <path d="M14 10.2266C13.8405 10.2266 13.6874 10.1632 13.5746 10.0504C13.4618 9.93755 13.3984 9.78454 13.3984 9.625V8.3125C13.3984 8.15296 13.4618 7.99995 13.5746 7.88713C13.6874 7.77432 13.8405 7.71094 14 7.71094C14.1595 7.71094 14.3126 7.77432 14.4254 7.88713C14.5382 7.99995 14.6016 8.15296 14.6016 8.3125V9.625C14.6016 9.78454 14.5382 9.93755 14.4254 10.0504C14.3126 10.1632 14.1595 10.2266 14 10.2266ZM14 20.2891C13.8405 20.2891 13.6874 20.2257 13.5746 20.1129C13.4618 20.0001 13.3984 19.847 13.3984 19.6875V18.375C13.3984 18.2155 13.4618 18.0624 13.5746 17.9496C13.6874 17.8368 13.8405 17.7734 14 17.7734C14.1595 17.7734 14.3126 17.8368 14.4254 17.9496C14.5382 18.0624 14.6016 18.2155 14.6016 18.375V19.6875C14.6016 19.847 14.5382 20.0001 14.4254 20.1129C14.3126 20.2257 14.1595 20.2891 14 20.2891ZM17.0937 11.5079C16.9747 11.5079 16.8584 11.4726 16.7595 11.4065C16.6606 11.3404 16.5835 11.2465 16.538 11.1366C16.4925 11.0267 16.4805 10.9058 16.5037 10.7891C16.5269 10.6725 16.5841 10.5653 16.6682 10.4811L17.5962 9.55309C17.7096 9.44272 17.8618 9.38143 18.0199 9.38247C18.1781 9.38351 18.3295 9.44681 18.4413 9.55865C18.5532 9.6705 18.6165 9.82189 18.6175 9.98006C18.6186 10.1382 18.5573 10.2904 18.4469 10.4038L17.5189 11.3318C17.4631 11.3877 17.3968 11.432 17.3238 11.4623C17.2509 11.4925 17.1726 11.508 17.0937 11.5079ZM9.97828 18.6233C9.8593 18.6233 9.74299 18.588 9.64407 18.5218C9.54515 18.4557 9.46806 18.3618 9.42254 18.2518C9.37703 18.1419 9.36514 18.0209 9.38838 17.9042C9.41161 17.7875 9.46893 17.6804 9.55309 17.5962L10.4811 16.6682C10.5367 16.6111 10.6031 16.5657 10.6764 16.5345C10.7497 16.5033 10.8284 16.4869 10.9081 16.4864C10.9878 16.4859 11.0667 16.5012 11.1404 16.5314C11.2141 16.5617 11.2811 16.6062 11.3374 16.6626C11.3938 16.7189 11.4383 16.7859 11.4686 16.8596C11.4988 16.9333 11.5141 17.0122 11.5136 17.0919C11.5131 17.1716 11.4967 17.2503 11.4655 17.3236C11.4343 17.3969 11.3889 17.4633 11.3318 17.5189L10.4038 18.4469C10.3479 18.5029 10.2816 18.5473 10.2086 18.5776C10.1356 18.6078 10.0573 18.6234 9.97828 18.6233ZM19.6875 14.6016H18.375C18.2155 14.6016 18.0624 14.5382 17.9496 14.4254C17.8368 14.3126 17.7734 14.1595 17.7734 14C17.7734 13.8405 17.8368 13.6874 17.9496 13.5746C18.0624 13.4618 18.2155 13.3984 18.375 13.3984H19.6875C19.847 13.3984 20.0001 13.4618 20.1129 13.5746C20.2257 13.6874 20.2891 13.8405 20.2891 14C20.2891 14.1595 20.2257 14.3126 20.1129 14.4254C20.0001 14.5382 19.847 14.6016 19.6875 14.6016ZM9.625 14.6016H8.3125C8.15296 14.6016 7.99995 14.5382 7.88713 14.4254C7.77432 14.3126 7.71094 14.1595 7.71094 14C7.71094 13.8405 7.77432 13.6874 7.88713 13.5746C7.99995 13.4618 8.15296 13.3984 8.3125 13.3984H9.625C9.78454 13.3984 9.93755 13.4618 10.0504 13.5746C10.1632 13.6874 10.2266 13.8405 10.2266 14C10.2266 14.1595 10.1632 14.3126 10.0504 14.4254C9.93755 14.5382 9.78454 14.6016 9.625 14.6016ZM18.0217 18.6233C17.9427 18.6234 17.8644 18.6078 17.7914 18.5776C17.7184 18.5473 17.6521 18.5029 17.5962 18.4469L16.6682 17.5189C16.5578 17.4056 16.4965 17.2533 16.4976 17.0952C16.4986 16.937 16.5619 16.7856 16.6738 16.6738C16.7856 16.5619 16.937 16.4986 17.0952 16.4976C17.2533 16.4965 17.4056 16.5578 17.5189 16.6682L18.4469 17.5962C18.5311 17.6804 18.5884 17.7875 18.6116 17.9042C18.6349 18.0209 18.623 18.1419 18.5775 18.2518C18.5319 18.3618 18.4549 18.4557 18.3559 18.5218C18.257 18.588 18.1407 18.6233 18.0217 18.6233ZM10.9063 11.5079C10.8273 11.508 10.7491 11.4926 10.6761 11.4623C10.6032 11.4321 10.5369 11.3878 10.4811 11.3318L9.55309 10.4038C9.44272 10.2904 9.38143 10.1382 9.38247 9.98006C9.38351 9.82189 9.44681 9.6705 9.55865 9.55865C9.6705 9.44681 9.82189 9.38351 9.98006 9.38247C10.1382 9.38143 10.2904 9.44272 10.4038 9.55309L11.3318 10.4811C11.4159 10.5653 11.4731 10.6725 11.4963 10.7891C11.5195 10.9058 11.5075 11.0267 11.462 11.1366C11.4165 11.2465 11.3394 11.3404 11.2405 11.4065C11.1416 11.4726 11.0253 11.5079 10.9063 11.5079ZM14 16.7891C13.4484 16.7891 12.9091 16.6255 12.4505 16.319C11.9918 16.0126 11.6343 15.577 11.4232 15.0673C11.2121 14.5577 11.1569 13.9969 11.2645 13.4559C11.3721 12.9149 11.6378 12.4179 12.0278 12.0278C12.4179 11.6378 12.9149 11.3721 13.4559 11.2645C13.9969 11.1569 14.5577 11.2121 15.0673 11.4232C15.577 11.6343 16.0126 11.9918 16.319 12.4505C16.6255 12.9091 16.7891 13.4484 16.7891 14C16.7882 14.7394 16.4941 15.4483 15.9712 15.9712C15.4483 16.4941 14.7394 16.7882 14 16.7891Z" fill="#52535F" />
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_888_2468" x="0" y="1" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="1" />
                                    <feGaussianBlur stdDeviation="1" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_888_2468" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_888_2468" result="shape" />
                                </filter>
                                <clipPath id="clip0_888_2468">
                                    <rect width="14" height="14" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <!-- mobile -->
        <nav class="block lg:hidden w-screen">
            <div class="fixed bg-white w-full top-0 z-50 h-[68px] flex flex-row items-center justify-between">
                <div class="p-4 w-full mx-auto flex flex-row items-center justify-between">
                    <div class="brand">
                        <a href="#" class="text-2xl font-bold text-gray-800">
                            <img src="{{ asset('./images/brand/kanginpo.png') }}" class="max-h-[28px] object-contain" alt="">
                        </a>
                    </div>
                    <button>
                        <svg width="48" height="29" viewBox="0 0 48 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="28" rx="14" fill="#E8E8EA" />
                            <g filter="url(#filter0_d_888_2468)">
                                <rect x="2" y="2" width="24" height="24" rx="12" fill="white" shape-rendering="crispEdges" />
                                <g clip-path="url(#clip0_888_2468)">
                                    <path d="M14 10.2266C13.8405 10.2266 13.6874 10.1632 13.5746 10.0504C13.4618 9.93755 13.3984 9.78454 13.3984 9.625V8.3125C13.3984 8.15296 13.4618 7.99995 13.5746 7.88713C13.6874 7.77432 13.8405 7.71094 14 7.71094C14.1595 7.71094 14.3126 7.77432 14.4254 7.88713C14.5382 7.99995 14.6016 8.15296 14.6016 8.3125V9.625C14.6016 9.78454 14.5382 9.93755 14.4254 10.0504C14.3126 10.1632 14.1595 10.2266 14 10.2266ZM14 20.2891C13.8405 20.2891 13.6874 20.2257 13.5746 20.1129C13.4618 20.0001 13.3984 19.847 13.3984 19.6875V18.375C13.3984 18.2155 13.4618 18.0624 13.5746 17.9496C13.6874 17.8368 13.8405 17.7734 14 17.7734C14.1595 17.7734 14.3126 17.8368 14.4254 17.9496C14.5382 18.0624 14.6016 18.2155 14.6016 18.375V19.6875C14.6016 19.847 14.5382 20.0001 14.4254 20.1129C14.3126 20.2257 14.1595 20.2891 14 20.2891ZM17.0937 11.5079C16.9747 11.5079 16.8584 11.4726 16.7595 11.4065C16.6606 11.3404 16.5835 11.2465 16.538 11.1366C16.4925 11.0267 16.4805 10.9058 16.5037 10.7891C16.5269 10.6725 16.5841 10.5653 16.6682 10.4811L17.5962 9.55309C17.7096 9.44272 17.8618 9.38143 18.0199 9.38247C18.1781 9.38351 18.3295 9.44681 18.4413 9.55865C18.5532 9.6705 18.6165 9.82189 18.6175 9.98006C18.6186 10.1382 18.5573 10.2904 18.4469 10.4038L17.5189 11.3318C17.4631 11.3877 17.3968 11.432 17.3238 11.4623C17.2509 11.4925 17.1726 11.508 17.0937 11.5079ZM9.97828 18.6233C9.8593 18.6233 9.74299 18.588 9.64407 18.5218C9.54515 18.4557 9.46806 18.3618 9.42254 18.2518C9.37703 18.1419 9.36514 18.0209 9.38838 17.9042C9.41161 17.7875 9.46893 17.6804 9.55309 17.5962L10.4811 16.6682C10.5367 16.6111 10.6031 16.5657 10.6764 16.5345C10.7497 16.5033 10.8284 16.4869 10.9081 16.4864C10.9878 16.4859 11.0667 16.5012 11.1404 16.5314C11.2141 16.5617 11.2811 16.6062 11.3374 16.6626C11.3938 16.7189 11.4383 16.7859 11.4686 16.8596C11.4988 16.9333 11.5141 17.0122 11.5136 17.0919C11.5131 17.1716 11.4967 17.2503 11.4655 17.3236C11.4343 17.3969 11.3889 17.4633 11.3318 17.5189L10.4038 18.4469C10.3479 18.5029 10.2816 18.5473 10.2086 18.5776C10.1356 18.6078 10.0573 18.6234 9.97828 18.6233ZM19.6875 14.6016H18.375C18.2155 14.6016 18.0624 14.5382 17.9496 14.4254C17.8368 14.3126 17.7734 14.1595 17.7734 14C17.7734 13.8405 17.8368 13.6874 17.9496 13.5746C18.0624 13.4618 18.2155 13.3984 18.375 13.3984H19.6875C19.847 13.3984 20.0001 13.4618 20.1129 13.5746C20.2257 13.6874 20.2891 13.8405 20.2891 14C20.2891 14.1595 20.2257 14.3126 20.1129 14.4254C20.0001 14.5382 19.847 14.6016 19.6875 14.6016ZM9.625 14.6016H8.3125C8.15296 14.6016 7.99995 14.5382 7.88713 14.4254C7.77432 14.3126 7.71094 14.1595 7.71094 14C7.71094 13.8405 7.77432 13.6874 7.88713 13.5746C7.99995 13.4618 8.15296 13.3984 8.3125 13.3984H9.625C9.78454 13.3984 9.93755 13.4618 10.0504 13.5746C10.1632 13.6874 10.2266 13.8405 10.2266 14C10.2266 14.1595 10.1632 14.3126 10.0504 14.4254C9.93755 14.5382 9.78454 14.6016 9.625 14.6016ZM18.0217 18.6233C17.9427 18.6234 17.8644 18.6078 17.7914 18.5776C17.7184 18.5473 17.6521 18.5029 17.5962 18.4469L16.6682 17.5189C16.5578 17.4056 16.4965 17.2533 16.4976 17.0952C16.4986 16.937 16.5619 16.7856 16.6738 16.6738C16.7856 16.5619 16.937 16.4986 17.0952 16.4976C17.2533 16.4965 17.4056 16.5578 17.5189 16.6682L18.4469 17.5962C18.5311 17.6804 18.5884 17.7875 18.6116 17.9042C18.6349 18.0209 18.623 18.1419 18.5775 18.2518C18.5319 18.3618 18.4549 18.4557 18.3559 18.5218C18.257 18.588 18.1407 18.6233 18.0217 18.6233ZM10.9063 11.5079C10.8273 11.508 10.7491 11.4926 10.6761 11.4623C10.6032 11.4321 10.5369 11.3878 10.4811 11.3318L9.55309 10.4038C9.44272 10.2904 9.38143 10.1382 9.38247 9.98006C9.38351 9.82189 9.44681 9.6705 9.55865 9.55865C9.6705 9.44681 9.82189 9.38351 9.98006 9.38247C10.1382 9.38143 10.2904 9.44272 10.4038 9.55309L11.3318 10.4811C11.4159 10.5653 11.4731 10.6725 11.4963 10.7891C11.5195 10.9058 11.5075 11.0267 11.462 11.1366C11.4165 11.2465 11.3394 11.3404 11.2405 11.4065C11.1416 11.4726 11.0253 11.5079 10.9063 11.5079ZM14 16.7891C13.4484 16.7891 12.9091 16.6255 12.4505 16.319C11.9918 16.0126 11.6343 15.577 11.4232 15.0673C11.2121 14.5577 11.1569 13.9969 11.2645 13.4559C11.3721 12.9149 11.6378 12.4179 12.0278 12.0278C12.4179 11.6378 12.9149 11.3721 13.4559 11.2645C13.9969 11.1569 14.5577 11.2121 15.0673 11.4232C15.577 11.6343 16.0126 11.9918 16.319 12.4505C16.6255 12.9091 16.7891 13.4484 16.7891 14C16.7882 14.7394 16.4941 15.4483 15.9712 15.9712C15.4483 16.4941 14.7394 16.7882 14 16.7891Z" fill="#52535F" />
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_888_2468" x="0" y="1" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="1" />
                                    <feGaussianBlur stdDeviation="1" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_888_2468" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_888_2468" result="shape" />
                                </filter>
                                <clipPath id="clip0_888_2468">
                                    <rect width="14" height="14" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="fixed z-50 w-full max-w-[95%] h-16 md:max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">
                <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
                    <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-s-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <span class="sr-only">Home</span>
                    </button>
                    <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Home
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button data-tooltip-target="tooltip-wallet" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                            <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                        </svg>
                        <span class="sr-only">Wallet</span>
                    </button>
                    <div id="tooltip-wallet" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Wallet
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div class="flex items-center justify-center">
                        <button data-tooltip-target="tooltip-new" type="button" class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                            <span class="sr-only">New item</span>
                        </button>
                    </div>
                    <div id="tooltip-new" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Create new item
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                        </svg>
                        <span class="sr-only">Settings</span>
                    </button>
                    <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Settings
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button data-tooltip-target="tooltip-profile" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        <span class="sr-only">Profile</span>
                    </button>
                    <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Profile
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero lg:mt-0 mt-[72px]">
            <div class="container max-w-7xl mx-auto">
                <div class="hero-content max-w-[95%] lg:max-w-full mx-auto flex flex-col items-center text-center ">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative overflow-hidden rounded-xl h-[232px] md:h-[400px] lg:h-[600px]">
                            @foreach($posts as $post)
                            @php
                            $gambar = $post->getFirstMediaUrl('gambar');
                            @endphp
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ $gambar }}" class="absolute object-cover h-full block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                <div class="card absolute lg:w-[299px] w-[180px] z-50 lg:p-8 p-4 bg-white rounded-xl lg:bottom-12 bottom-6 lg:left-12 left-6 shadow-[0px_12px_24px_-6px_rgba(24,26,42,0.12)] border border-[#e8e8ea]">
                                    <div class="card-body">
                                        <div class="h-7 w-fit mb-[16px] px-2.5 py-1 bg-[#4b6bfb] rounded-md">
                                            <div class="text-white lg:text-sm text-[12px] font-medium font-['Work Sans'] leading-tight">{{ $post->category->name }}</div>
                                        </div>
                                        <div class="title text-start">
                                            <h2 class="text-[#181a2a] text-ellipsis line-clamp-3 lg:text-2xl text-sm font-semibold font-['Work Sans']">{{ $post->title }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            @foreach($posts as $index => $post)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            @endforeach
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div class="max-w-7xl mx-auto flex-row flex justify-center items-center my-[80px]">
            <div class="w-[750px] h-[100px] bg-[#e8e8ea] rounded-xl flex-col justify-center items-center gap-2.5 inline-flex">
                <div class="flex-col justify-start items-center flex">
                    <div class="text-center text-[#696a75] text-sm font-normal font-['Work Sans'] leading-tight">Advertisement</div>
                    <div class="text-center text-[#696a75] text-xl font-semibold font-['Work Sans'] leading-normal">You can place ads</div>
                    <div class="text-center text-[#696a75] text-lg font-normal font-['Work Sans'] leading-relaxed">750x100</div>
                </div>
            </div>
        </div>
        <section class="last-blog">
            <div class="blog-content container max-w-7xl mx-auto">
                <div class="heading">
                    <span class="text-[#181a2a] text-2xl font-bold font-['Work Sans'] leading-7">
                        Post Terbaru
                    </span>
                </div>
                <div class="blog-list my-[32px]">
                    @foreach($posts as $post)
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</body>

</html>