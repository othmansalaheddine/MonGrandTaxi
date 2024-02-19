<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
        <!-- Styles -->
        <!-- <style>
           
           /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style> -->
        <style>
            @media(max-width:1520px) {
                .left-svg {
                    display: none;
                }
            }
    
            /* small css for the mobile nav close */
            #nav-mobile-btn.close span:first-child {
                transform: rotate(45deg);
                top: 4px;
                position: relative;
                background: #a0aec0;
            }
    
            #nav-mobile-btn.close span:nth-child(2) {
                transform: rotate(-45deg);
                margin-top: 0px;
                background: #a0aec0;
            }
        </style>
    </head>
    <body class="overflow-x-hidden antialiased">
    <!-- Header Section -->
    <header class="relative z-50 w-full h-24">
        @if (Route::has('login'))
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg class="w-auto h-6 text-indigo-600 fill-current" fill="#000000" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5,21v.5a1.5,1.5,0,0,0,3,0V21h8v.5a1.5,1.5,0,0,0,3,0V21a2,2,0,0,0,2-2V14a3,3,0,0,0-2.243-2.891L16.949,5.684A1,1,0,0,0,16,5H8a1,1,0,0,0-.949.684L5.243,11.109A3,3,0,0,0,3,14v5A2,2,0,0,0,5,21ZM8.721,7h6.558l1.334,4H7.387ZM5,14a1,1,0,0,1,1-1H18a1,1,0,0,1,1,1v5H5ZM9,2a1,1,0,0,1,1-1h4a1,1,0,0,1,0,2H10A1,1,0,0,1,9,2ZM8,16a1,1,0,1,1-1-1A1,1,0,0,1,8,16Zm10,0a1,1,0,1,1-1-1A1,1,0,0,1,18,16Z"/></svg>
                 
                    <g fill-rule="evenodd">
                        
                </svg>
                <span class="ml-3 text-xl text-gray-800">MyTaxiDriver<span class="text-pink-500">.</span></span>
            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
               
                <a href="#"
                    class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                <a href="#features"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Features</a>
                <a href="#pricing"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Pricing</a>
                <a href="#testimonials"
                    class="font-bold duration-100 transition-color hover:text-indigo-600">Testimonials</a>
                <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="w-full py-2 font-bold text-center text-pink-500">Dashboard</a>
                    <a href="{{ url('login') }}" class="w-full py-2 font-bold text-center text-pink-500">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">Get
                        Started</a>
                    @endif
                    @endauth
                </div>
            </nav>

            <div
                class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                
                <a href="{{ url('/dashboard') }}"
                    class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0">Dashboard</a>
                <a href="{{ url('login') }}"
                    class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0">Login</a>
                <a href="{{ route('register') }}"
                    class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">Get
                    Started</a>
                <svg class="absolute top-0 left-0 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block"
                    viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                            <stop stop-color="#E614F2" offset="0%" />
                            <stop stop-color="#FC3832" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                            <stop stop-color="#657DE9" offset="0%" />
                            <stop stop-color="#1C0FD7" offset="100%" />
                        </linearGradient>
                        <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                            id="a">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" in="shadowBlurOuter1" />
                        </filter>
                        <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                            id="d">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" in="shadowBlurOuter1" />
                        </filter>
                        <path
                            d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                            id="b" />
                        <path
                            d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                            id="e" />
                    </defs>
                    <g fill="none" fill-rule="evenodd" opacity=".9">
                        <g transform="rotate(65 416.452 409.167)">
                            <use fill="#000" filter="url(#a)" xlink:href="#b" />
                            <use fill="url(#c)" xlink:href="#b" />
                        </g>
                        <g transform="rotate(29 421.929 414.496)">
                            <use fill="#000" filter="url(#d)" xlink:href="#e" />
                            <use fill="url(#f)" xlink:href="#e" />
                        </g>
                    </g>
                </svg>
            </div>

            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
        @endif
    </header>
    <!-- End Header Section-->

    <!-- BEGIN HERO SECTION -->
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">Choose your taxi driver from here</h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
                    adventure and start building the next greatest SAAS app on the market?</p>
                <a href="#_"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-indigo-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">Signup
                    Today!</a>
                <!-- Integrates with section -->
                <div class="flex-col hidden mt-12 sm:flex lg:mt-24">
                    <p class="mb-4 text-sm font-medium tracking-widest text-gray-500 uppercase">Integrates With</p>
                    <div class="flex">
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                            viewBox="0 0 2499 1037" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1">
                                <g>
                                    <path
                                        d="M261.062 466.768c-53.833-19.912-83.335-35.399-83.335-59.735 0-20.652 16.963-32.45 47.201-32.45 55.31 0 112.09 21.388 151.178 40.559l22.124-136.427c-30.973-14.752-94.397-39.088-182.151-39.088-61.947 0-113.573 16.223-150.443 46.46-38.352 31.71-58.263 77.434-58.263 132.744 0 100.293 61.211 143.07 160.769 179.203 64.159 22.86 85.547 39.088 85.547 64.16 0 24.336-20.652 38.346-58.263 38.346-46.46 0-123.153-22.86-173.302-52.356L0 786.087c42.771 24.337 122.417 49.409 205.017 49.409 65.63 0 120.204-15.487 157.08-44.984 41.293-32.45 62.682-80.381 62.682-142.328 0-102.511-62.683-145.282-163.717-181.416zm523.877-80.387l22.124-135.692H690.265V85.966l-157.035 25.84-22.677 138.883-55.232 8.96-20.675 126.732h75.68v266.227c0 69.32 17.7 117.257 53.833 146.754 30.238 24.336 73.745 36.134 134.956 36.134 47.196 0 75.957-8.109 95.868-13.275V678.416c-11.062 2.953-36.133 8.114-53.097 8.114-36.134 0-51.62-18.435-51.62-60.47V386.38h94.673zm350.752-143.618c-51.62 0-92.92 27.102-109.142 75.775l-11.062-67.849H855.459v573.745h182.887V452.017c22.865-28.026 55.31-38.159 99.558-38.159 9.59 0 19.911 0 32.45 2.213V247.188c-12.539-2.948-23.6-4.425-34.663-4.425zm171.095-48.86c53.098 0 95.869-43.507 95.869-96.604 0-53.839-42.771-96.61-95.869-96.61-53.838 0-96.609 42.771-96.609 96.61 0 53.097 42.771 96.604 96.61 96.604zm-92.184 56.786h183.628v573.745h-183.628V250.689zm703.999 51.62c-32.45-42.035-77.434-62.682-134.956-62.682-53.097 0-99.558 22.124-143.07 68.584l-9.585-57.522h-160.769v786.134l182.893-30.232V822.22c28.02 8.85 56.78 13.275 82.594 13.275 45.725 0 112.096-11.798 163.717-67.843 49.408-53.839 74.485-137.168 74.485-247.052 0-97.345-18.44-171.09-55.31-218.291zm-151.92 353.983c-14.75 28.025-37.61 42.777-64.159 42.777-18.435 0-34.662-3.69-49.408-11.062V415.142c30.973-32.445 58.993-36.134 69.32-36.134 46.46 0 69.32 50.15 69.32 148.23 0 56.045-8.11 99.557-25.073 129.054zm731.566-123.894c0-91.443-19.912-163.717-59-214.602-39.822-51.62-99.557-78.169-175.514-78.169-155.608 0-252.212 115.044-252.212 299.408 0 103.247 25.808 180.68 76.692 230.089 45.725 44.248 111.361 66.372 196.168 66.372 78.169 0 150.442-18.435 196.167-48.673l-19.912-125.365c-44.989 24.336-97.345 37.61-156.344 37.61-35.398 0-59.734-7.378-77.434-22.864-19.175-16.223-30.237-42.771-33.921-80.382h303.097c.736-8.85 2.213-50.15 2.213-63.424zm-306.787-48.672c5.16-81.859 27.284-120.205 69.32-120.205 41.3 0 62.688 39.087 65.636 120.205H2191.46z" />
                                </g>
                            </g>
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                            viewBox="0 0 2350 2315" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1"></g>
                            <g>
                                <path
                                    d="M1175 0C525.8 0 0 525.8 0 1175c0 552.2 378.9 1010.5 890.1 1139.7-5.9-14.7-8.8-35.3-8.8-55.8v-199.8H734.4c-79.3 0-152.8-35.2-185.1-99.9-38.2-70.5-44.1-179.2-141-246.8-29.4-23.5-5.9-47 26.4-44.1 61.7 17.6 111.6 58.8 158.6 120.4 47 61.7 67.6 76.4 155.7 76.4 41.1 0 105.7-2.9 164.5-11.8 32.3-82.3 88.1-155.7 155.7-190.9-393.6-47-581.6-240.9-581.6-505.3 0-114.6 49.9-223.3 132.2-317.3-26.4-91.1-61.7-279.1 11.8-352.5 176.3 0 282 114.6 308.4 143.9 88.1-29.4 185.1-47 284.9-47 102.8 0 196.8 17.6 284.9 47 26.4-29.4 132.2-143.9 308.4-143.9 70.5 70.5 38.2 261.4 8.8 352.5 82.3 91.1 129.3 202.7 129.3 317.3 0 264.4-185.1 458.3-575.7 499.4 108.7 55.8 185.1 214.4 185.1 331.9V2256c0 8.8-2.9 17.6-2.9 26.4C2021 2123.8 2350 1689.1 2350 1175 2350 525.8 1824.2 0 1175 0z" />
                            </g>
                            </g>
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                            viewBox="0 0 2500 2158" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1">
                                <g transform="translate(-.157)">
                                    <path
                                        d="M2498.932 499.093c-11.204 242.78-181.152 575.201-509.837 997.268-339.895 440.74-627.499 661.11-862.808 661.11-145.67 0-268.924-134.462-369.776-403.39l-201.693-739.547C480.115 745.61 399.81 611.145 313.904 611.145c-18.675 0-84.04 39.219-196.095 117.656L.155 577.53a31955.67 31955.67 0 00364.171-324.952C528.669 110.644 651.928 35.944 734.1 28.472c194.224-18.675 313.746 113.921 358.567 397.786 48.556 306.277 82.172 496.767 100.845 571.47 56.027 253.986 117.656 380.98 184.887 380.98 52.29 0 130.73-82.172 235.311-246.516 104.584-164.345 160.609-289.47 168.078-375.376 14.94-141.934-41.085-212.9-168.078-212.9-59.762 0-121.392 13.075-184.887 39.219C1552.082 183.48 1787.393-10.745 2134.757.462c257.721 7.471 379.113 173.683 364.17 498.635l.005-.004z" />
                                </g>
                            </g>
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                            viewBox="0 0 680 680" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1">
                                <g transform="translate(-401 -701)">
                                    <g transform="translate(-293 -236)">
                                        <g transform="translate(463 909)">
                                            <g transform="translate(0 28)">
                                                <g transform="translate(229.885)">
                                                    <path
                                                        d="M242.088 0c-36.478.027-66 29.582-65.973 66-.027 36.418 29.522 65.973 66 66h66V66.027C308.142 29.608 278.593.054 242.088 0c.027 0 .027 0 0 0zm.23 175H66.912c-36.365.027-65.824 29.576-65.797 65.987-.054 36.41 29.405 65.96 65.77 66.013h175.433c36.366-.027 65.824-29.576 65.797-65.987.027-36.437-29.431-65.986-65.797-66.013zM681.115 240.987c.027-36.411-29.522-65.96-66-65.987-36.478.027-66.027 29.576-66 65.987V307h66c36.478-.027 66.027-29.576 66-66.013zm-175 .214V65.772C506.142 29.506 476.614.054 440.13 0c-36.486.027-66.04 29.48-66.014 65.772v175.429c-.054 36.293 29.501 65.745 65.987 65.799 36.485-.027 66.04-29.48 66.013-65.8zM440.115 680c36.478-.027 66.027-29.582 66-66 .027-36.418-29.522-65.973-66-66h-66v66c-.027 36.392 29.522 65.946 66 66zm-.23-175h175.433c36.366-.027 65.824-29.576 65.797-65.987.054-36.41-29.404-65.96-65.77-66.013H439.912c-36.366.027-65.824 29.576-65.797 65.987-.027 36.437 29.405 65.986 65.77 66.013zM1.115 439c-.027 36.418 29.522 65.973 66 66 36.478-.027 66.027-29.582 66-66v-66h-66c-36.478.027-66.027 29.582-66 66zm175-.249v175.444c-.054 36.296 29.501 65.751 65.987 65.805 36.485-.027 66.04-29.482 66.013-65.778V438.805c.054-36.296-29.501-65.751-65.986-65.805-36.513 0-66.04 29.455-66.014 65.751 0 0 0 .027 0 0z" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                            viewBox="0 0 1681 417" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1">
                                <g>
                                    <path
                                        d="M1621.33 306.03l.578.008c34.43 0 58.659-23.855 58.924-57.992.126-16.904-4.757-32.38-13.753-43.558-9.512-11.834-22.829-18.142-38.516-18.267h-.313c-21.17 0-40.83 16.062-60.1 49.112l-1.533 2.638-.984-2.875c-4.866-14.163-9.2-25.963-11.791-33.025-1.817-4.925-2.617-7.138-2.809-7.854-.925-3.575-3.979-5.796-7.987-5.796-2.463 0-5.08.837-7.554 2.412-2.455 1.563-3.825 3.471-4.317 6.021l-.125.383c-19.287 60.155-35.188 89.359-48.662 89.359-1.959-.017-3.492-.654-4.634-1.93-3.529-3.9-2.662-13.174-1.462-26.016.879-9.433 1.883-20.112 1.466-31.446-.791-21.787-12.716-34.87-31.879-35.012-24.358-.009-40.141 25.933-47.412 41.395l-2.171 4.609-.48-5.083c-1.816-19.134-8.237-41.988-28.512-42.138-23.65 0-41.667 27.75-52.658 51.042l-2.946 6.241.292-6.891c1.304-31.063 2.375-49.404 3.187-54.492.8-5.104.38-8.53-1.292-10.492-1.583-1.837-4.566-2.516-8.941-2.241-7.571.479-11.442 5.087-17.271 20.533-9.575 25.367-33.93 84.383-53.375 84.383-3.858-.029-6.912-1.341-9.15-3.912-8.154-9.346-4.892-34.621-.38-69.592l.342-2.646c2.138-16.558-1.504-20.091-10.5-21.745a15.487 15.487 0 00-2.733-.267c-7.183 0-10.541 6.879-17.25 25.996-11.937 34.016-27.291 69.791-45.241 69.791-.659 0-1.305-.05-1.967-.154-9.513-1.62-9.304-15.729-9.042-33.608.134-9.667.296-20.63-1.191-30.525-2.684-17.758-13.142-28.846-27.313-28.958-28.267 0-47.33 36.2-56.196 57.783l-2.008 4.883-.671-5.242a486.444 486.444 0 01-3.43-41.729l-.024-.52.32-.409c52.905-66.596 76.647-114.654 76.963-155.829.204-26.304-11.933-42.104-32.462-42.267-15.013 0-50.705 12.505-63.109 128.321a669.633 669.633 0 00-3.75 65.45l-.008.434-.246.35c-24.204 35.033-75.862 95.295-126.437 95.295-45.696 0-82.154-36.97-82.154-102.229 0-87.483 61.92-141.196 108.52-141.196h.388c10.125.075 18.808 2.904 25.108 8.18 6.542 5.474 9.971 13.15 9.9 22.191-.091 12.08-4.029 18.288-7.833 24.284-.971 1.545-1.95 3.079-2.842 4.704-.9 1.641-1.72 4.02-.525 6.058 1.225 2.087 4.354 3.4 8.167 3.43 11.091 0 27.866-16.06 28.05-40.25.192-25.322-21.138-51.413-59.192-51.413-57.587 0-135.15 63.266-135.15 165.8 0 72.529 45.475 122.658 107.075 122.658 43.713 0 86.954-31.3 125.25-83.58l2.346-3.166.167 3.934c.812 19.137 2.2 34.212 3.212 45.224.654 7.08 1.13 12.192 1.113 15.013-.05 6.18.954 10.48 3.091 13.112 2.13 2.638 5.513 3.884 10.646 3.917 8.6 0 10.325-5.862 13.73-20.329l.978-4.13c4.234-17.528 19.867-74.745 43.38-74.745 3.841.037 6.804 1.17 8.908 3.4 5.192 5.508 4.625 16.813 3.967 29.908-.417 8.171-.834 16.609-.017 24.83 2.213 22.191 11.796 33.045 29.292 33.17 17.966.009 36.716-19.346 46.612-37.329l1.867-3.387.729 3.808c1.825 9.625 9.992 41.217 35.563 41.217 23.175 0 43.058-24.404 64.85-74.634l2.854-6.558-.175 7.154c-.463 19.034-1.492 42.275-1.5 60.246-.009 13.9 1.396 19.204 7.82 19.204l1.459.067c6.162 0 10.346-3.68 12.433-10.954 16.4-57.155 30.571-83.771 44.613-83.771 13.75.104 15.037 25.246 16.141 69.67l.075 3.117c.334 15.538.896 22.413 10.546 22.484 7.325 0 9.146-5.755 12.934-19.921.725-2.7 1.508-5.663 2.437-8.863 13.242-45.937 24.217-64.679 37.883-64.679 11.7.088 12.35 12.15 12.567 16.113.45 8.487-.425 17.375-1.267 25.954-.787 7.975-1.596 16.225-1.291 23.887.716 17.967 10.55 27.938 27.7 28.067 22.258 0 42.35-26.033 59.946-77.358l1.22-3.575 1.396 3.52c3.196 8.067 7.354 18.988 11.2 32.017l.146.496-.213.47c-17.041 37.834-29.062 79.976-29.233 102.493-.229 29.654 13.188 48.925 34.184 49.087h.362c11.42 0 38.042-4.587 38.558-47.02.213-17.392-3.9-41.984-12.204-73.105l-.954-3.563 3.063 2.042c10.637 7.038 22.591 10.8 34.616 10.9zm-573.697-143.913c.475-10.634 1.371-20.988 2.642-30.78 8.242-63.091 25.433-107.15 41.83-107.15h.074c7.817.059 11.725 5.971 11.646 17.563-.225 28.487-18.275 69.27-53.642 121.217l-2.766 4.066.216-4.916zm522.804 226.82c-2.608 3.476-6.241 5.238-10.791 5.238-5.225-.046-9.15-1.863-11.821-5.433-7.483-9.996-5.375-33.496 6.833-76.15a370.41 370.41 0 014.717-15.234l1.417-4.254 1.245 4.304c14.221 49.238 17.046 80.03 8.4 91.53zm4.426-126.145l-.259-.471-.516-1.638.241-.487c16.217-33.417 34.8-52.571 50.967-52.571h.167c18.258.137 30.883 16.57 30.708 39.942-.121 15.6-7 24.583-12.742 29.37-6.554 5.467-15.283 8.592-23.95 8.592-21.367-.162-36.033-12.458-44.617-22.737zM540.55 300.504c25.033-2 44.892-36.046 52.267-50.596l1.9-3.75.72 4.142c3.542 20.458 14.671 54.833 49.484 55.108h.291c15.059 0 32.142-9.212 49.409-26.633l1.267-1.28.92 1.538c11.625 19.442 27.217 29.771 43.817 28.921 24.438-1.27 39.27-18.587 40.575-30.617.333-3.066-.475-5.954-2.23-7.9-2.195-2.45-5.387-2.733-7.728-.487l-1.121 1.058c-5.688 5.463-16.288 15.642-27.838 16.242-14.141.692-24.6-7.762-31.358-25.212l-.28-.734.476-.616c38.887-50.863 66.175-128.471 63.479-180.525-1.242-24.092-8.246-52.813-34.558-52.813l-1.963.05c-10.079.52-19.246 5.325-27.241 14.27-24.413 27.313-37.188 94.538-32.55 171.267.958 15.942 3.729 30.842 8.225 44.271l.254.754-.513.609c-14.429 16.862-28.667 26.15-40.091 26.15-27.488 0-26.563-46.092-24.392-84.309.47-8.241 1.167-13.491-1.271-16.475-1.742-2.137-4.658-3.191-8.908-3.225l-.496-.004c-9.784 0-11.83 2.013-16.833 16.53-10.413 30.158-30.967 80.77-51.642 80.77-5.73-.054-10.104-2.008-13.1-5.825-10.03-12.8-2.413-44.725 3.704-70.387 1.1-4.613 2.154-9.042 3.058-13.142 1.338-6.083.93-10.52-1.22-13.208-2.159-2.68-6.463-3.763-12.142-3.313-8.854.709-14.517 4.417-17.254 21.254l-.55 3.5-2.059-2.491c-3.866-5.708-11.404-12.508-25.4-12.508-1.225 0-2.495.05-3.808.154-14.933 1.225-31.938 11.629-44.383 27.158-14.53 18.13-21.471 41.075-19.538 64.62.1 1.247.28 2.442.459 3.63l.1.654-.45.496c-8.692 9.467-17.55 14.275-26.326 14.275-13.545-.1-21.316-10.167-21.316-26.938 0-28.225 19.129-113.32 19.129-144.125 0-32.783-14.608-50.629-39.975-50.825h-.383c-37.042 0-65.909 42.03-93.534 128.505a1413.034 1413.034 0 00-7.641 24.975l-3.88 13.004 1.146-13.517a1682.328 1682.328 0 005.238-87.112c1.375-41.792-4.271-68.688-17.275-82.221-7.013-7.3-16.288-10.896-28.371-10.988h-.308c-45.325 0-67.038 76.442-82.85 130.38-4.771 16.283-14.175 53.012-20.454 78.12l3.72-6.046c2.788-31.616 10.867-110.812 10.338-153.779-.575-46.091-15.917-66.754-49.771-67.012h-.417c-18.083 0-30.629 8.987-37.966 16.525C7.358 52.92.017 70.604.425 85.875c.25 9.283 5.946 17.546 10.262 17.546 2.813 0 4.371-3.754 5.046-5.992 10.475-34.62 24.03-51.454 41.421-51.454 7.213.054 12.583 2.18 16.6 6.5 13.592 14.58 11.117 53.946 6.638 125.417-1.45 23.033-3.084 49.129-4.463 78.816-.24 4.899-.527 9.795-.858 14.688-1.321 20.612-2.371 36.904 5.45 38.116 10.175 1.588 16.796-2.545 20.187-12.612 5.025-14.942 16.296-55.78 38.105-130.4 20.925-71.608 36.733-97.662 56.958-97.662 23.367 0 25.108 40.12 20.825 124.787-.913 17.95-2.133 38.28-3.071 60.4-.13 3.108-.275 6.125-.425 9.025-.9 18.32-1.608 32.767 3.625 38.308 1.633 1.725 3.85 2.58 6.787 2.596 10.13 0 13.175-8.879 18.221-23.6.892-2.596 1.838-5.37 2.892-8.27 34.708-95.746 60.37-178.817 94.817-178.817 10.329 0 18.37 8.391 18.37 24.758 0 37.78-18.475 110.775-18.475 147.792 0 13.262 3.817 25.162 11.026 33.529 7.4 8.591 17.754 13.166 29.941 13.27h.267c11.525 0 23.529-5.6 35.696-16.641l1.141-1.033.917 1.237c8.012 10.767 20.938 16.554 34.896 15.48 21.408-1.667 39.37-20.73 46.054-38.705l1.308-3.517 1.304 3.517c4.967 13.338 15.709 29.413 38.663 27.55zM737.817 50.33l.366-.008c2.446 0 4.596 1.225 6.38 3.65 8.5 11.492 8.629 53.437-5.992 101.162-8.354 27.275-19.592 53.042-32.484 74.504l-2.058 3.417-.525-3.954c-1.517-11.542-2.267-23.558-2.792-33.783-3.729-72.138 18.092-144 37.105-144.988zM500.283 218.925c-7.491 30.146-21.858 66.537-47.762 68.62l-2.108.088c-10.746 0-16.771-7.033-17.909-20.916-1.425-17.367 6.063-37.704 19.071-51.825 8.28-8.992 17.62-13.942 26.3-13.942h.175c10.954.083 18.633 8.88 22.162 17.083l.188.425-.117.467zm120.146-110.52c-9.562 0-17.283 7.532-17.358 16.795-.075 9.33 7.6 16.98 17.1 17.05l.137 1.387v-1.387c9.425 0 17.142-7.53 17.217-16.787.075-9.334-7.596-16.984-17.096-17.059zm601.221 0c-9.563 0-17.28 7.532-17.358 16.795-.075 9.33 7.596 16.98 17.1 17.05l.133 1.387v-1.387c9.433 0 17.15-7.53 17.225-16.787.067-9.334-7.6-16.984-17.1-17.059z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%" id="linearGradient-1">
                            <stop stop-color="#5C54DB" offset="0%" />
                            <stop stop-color="#6A82E7" offset="100%" />
                        </linearGradient>
                        <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                            id="filter-3">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                        </filter>
                        <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                        <g id="Desktop-HD" transform="translate(-39 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(45 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen" style="margin-top: 20rem">
                   
                    <?xml version="1.0" encoding="UTF-8"?>
<svg class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3709.45 3709.45">
  <defs>
    <style>
      .cls-1 {
        fill: #f5d778;
      }

      .cls-1, .cls-2, .cls-3, .cls-4, .cls-5, .cls-6, .cls-7, .cls-8, .cls-9, .cls-10, .cls-11, .cls-12, .cls-13, .cls-14, .cls-15, .cls-16, .cls-17, .cls-18, .cls-19, .cls-20, .cls-21, .cls-22, .cls-23, .cls-24, .cls-25, .cls-26, .cls-27, .cls-28, .cls-29, .cls-30, .cls-31, .cls-32, .cls-33, .cls-34, .cls-35, .cls-36 {
        stroke-width: 0px;
      }

      .cls-2 {
        fill: url(#linear-gradient-2);
        opacity: .7;
      }

      .cls-2, .cls-10, .cls-21, .cls-24, .cls-25, .cls-33, .cls-37 {
        mix-blend-mode: multiply;
      }

      .cls-3, .cls-21 {
        fill: #6d6e71;
      }

      .cls-4 {
        fill: #ed1c24;
      }

      .cls-5 {
        fill: #fff315;
      }

      .cls-6 {
        fill: #ffe603;
      }

      .cls-7 {
        fill: #808285;
      }

      .cls-8, .cls-33 {
        fill: #58595b;
      }

      .cls-9 {
        fill: #e6e7e8;
      }

      .cls-38 {
        clip-path: url(#clippath-2);
      }

      .cls-10, .cls-20 {
        fill: #939598;
      }

      .cls-39 {
        isolation: isolate;
      }

      .cls-11 {
        fill: #3e4ec6;
      }

      .cls-13 {
        opacity: .5;
      }

      .cls-13, .cls-19, .cls-35, .cls-36 {
        fill: #fff;
      }

      .cls-14 {
        fill: #7144fc;
      }

      .cls-15 {
        fill: none;
      }

      .cls-16 {
        fill: #4f46e4;
      }

      .cls-17 {
        fill: #6603d8;
      }

      .cls-40 {
        clip-path: url(#clippath-1);
      }

      .cls-41 {
        clip-path: url(#clippath-4);
      }

      .cls-18 {
        fill: #709aa3;
      }

      .cls-22 {
        fill: #231f20;
      }

      .cls-23 {
        fill: #f1f2f2;
      }

      .cls-24 {
        fill: url(#linear-gradient);
      }

      .cls-42 {
        clip-path: url(#clippath);
      }

      .cls-25, .cls-27 {
        fill: #d1d3d4;
      }

      .cls-26 {
        fill: #bcbec0;
      }

      .cls-28 {
        fill: #5c66e5;
      }

      .cls-29 {
        fill: #414042;
      }

      .cls-43 {
        clip-path: url(#clippath-3);
      }

      .cls-30 {
        fill: #f4ce0f;
      }

      .cls-31 {
        fill: #8d8de2;
      }

      .cls-32 {
        fill: #f9e976;
      }

      .cls-44 {
        filter: url(#luminosity-noclip);
      }

      .cls-45 {
        mask: url(#mask-1);
      }

      .cls-46 {
        mask: url(#mask);
      }

      .cls-34 {
        fill: #be1e2d;
      }

      .cls-35 {
        opacity: .3;
      }

      .cls-36 {
        opacity: 0;
      }
    </style>
    <filter id="luminosity-noclip" x="133.59" y="2538.78" width="2615.84" height="1051.83" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
      <feFlood flood-color="#fff" result="bg"/>
      <feBlend in="SourceGraphic" in2="bg"/>
    </filter>
    <filter id="luminosity-noclip-2" x="133.59" y="-9610.87" width="2615.84" height="32766" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
      <feFlood flood-color="#fff" result="bg"/>
      <feBlend in="SourceGraphic" in2="bg"/>
    </filter>
    <mask id="mask-1" x="133.59" y="-9610.87" width="2615.84" height="32766" maskUnits="userSpaceOnUse"/>
    <linearGradient id="linear-gradient" x1="1441.51" y1="3590.61" x2="1441.51" y2="2538.78" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#000"/>
      <stop offset=".08" stop-color="#080808"/>
      <stop offset=".22" stop-color="#202020"/>
      <stop offset=".39" stop-color="#474747"/>
      <stop offset=".6" stop-color="#7d7d7d"/>
      <stop offset=".82" stop-color="#c1c1c1"/>
      <stop offset="1" stop-color="#fff"/>
    </linearGradient>
    <mask id="mask" x="133.59" y="2538.78" width="2615.84" height="1051.83" maskUnits="userSpaceOnUse">
      <g class="cls-44">
        <g class="cls-45">
          <path class="cls-24" d="m2745.21,2920.12s0,0,0,.02c-2.11,6.19-4.85,11.63-7.85,16.33-.04.06-.07.12-.11.18-.88,1.37-1.79,2.66-2.7,3.91-.14.19-.27.4-.4.58-12.73,17.09-22.22,37.91-22.63,60.43h.28c1.04,0,1.89.98,1.89,2.2,0,.88-.51,1.49-1.14,1.84,5.99,14.17,6.65,30.39,6.65,47.71s-.66,33.53-6.65,47.7c.63.35,1.14.96,1.14,1.84,0,1.21-.84,2.19-1.87,2.19-1.43,43.45-11.93,67.42-106.65,67.42h-58.09c-23.1,0-45.6,6.91-64.86,19.67-18.01,11.94-36.79,23.55-56.03,34.87-2.02,1.19-4.02,2.39-6.05,3.57-4.45,2.59-8.95,5.13-13.45,7.68-2.55,1.45-5.09,2.9-7.66,4.34-4.37,2.44-8.76,4.85-13.17,7.26-.68.37-1.34.75-2.02,1.11v339.62h-1257.27v-219.03c-111.7-9.4-155.77-19.49-164.64-22.64-147.83-52.61-331.36-173.4-380.14-206.39-.85-.57-1.75-1.18-2.52-1.7-.5-.34-.88-.6-1.34-.91-1.08-.73-2.11-1.44-2.99-2.04-.12-.08-.21-.14-.33-.22-3.02-2.07-4.85-3.33-5.14-3.54h0c-.07-.05-.19-.13-.19-.13,0,0-.23-.04-.58-.1-.04,0-.04,0-.07-.01-.4-.07-.98-.17-1.78-.32-.02,0-.05,0-.08-.01-.76-.14-1.7-.31-2.78-.52-.08-.02-.14-.03-.22-.04-1.16-.22-2.5-.48-4.01-.78,0,0,0,0,0,0-3.04-.6-6.76-1.36-11.09-2.28-.08-.02-.15-.03-.23-.05-56.98-12.14-217.6-52.44-313.57-137.22,0,0,0,0-.01-.01-4.27-3.78-8.42-7.64-12.42-11.6,0,0,0,0,0,0-6.31-6.23-12.26-12.69-17.8-19.37-.09-.1-.17-.21-.26-.31-2.63-3.18-5.16-6.41-7.59-9.7-.14-.18-.28-.36-.41-.55-2.46-3.34-4.82-6.74-7.07-10.2-.18-.27-.34-.55-.52-.82-1.96-3.04-3.82-6.13-5.6-9.25-.36-.63-.73-1.26-1.08-1.89-1.89-3.4-3.69-6.83-5.36-10.33-.17-.35-.32-.72-.49-1.07-1.45-3.09-2.8-6.22-4.07-9.39-.37-.92-.74-1.84-1.09-2.77,0,0,0-.02-.01-.03-.09-.23-.19-.47-.28-.7-1.24-3.29-2.41-6.6-3.45-9.98,0-.02-.01-.04-.02-.06-.48-1.55-1.24-2.86-2.12-4.05-.15-.2-.28-.41-.44-.61-.88-1.07-1.92-2-3.06-2.83-.27-.19-.55-.38-.83-.56-1.15-.75-2.38-1.43-3.68-2.02-.37-.17-.76-.31-1.14-.46-.99-.41-2.01-.79-3.04-1.14-7.01-2.38-14.45-3.71-17.68-7.3,0,0,0,0,0,0-1.04-1.15-1.68-2.52-1.68-4.26-.81-36.36,5.85-87.97,17.7-129.23,0-.04.02-.07.03-.11.78-2.7,1.57-5.36,2.39-7.97,0-.02.01-.04.02-.05,3.31-10.51,6.97-20.17,10.94-28.52.03-.06.06-.12.09-.19.92-1.92,1.85-3.76,2.8-5.53.24-.44.48-.85.72-1.28.75-1.36,1.51-2.69,2.28-3.96.33-.55.67-1.06,1.01-1.58.69-1.08,1.38-2.13,2.09-3.13.39-.56.79-1.09,1.19-1.62.67-.89,1.34-1.74,2.02-2.55.43-.51.86-1.01,1.3-1.49.66-.73,1.33-1.42,2-2.07.46-.45.92-.89,1.38-1.3.67-.59,1.35-1.12,2.04-1.64.47-.35.94-.72,1.42-1.03.7-.46,1.42-.85,2.13-1.22.46-.25.93-.52,1.4-.73.78-.34,1.58-.58,2.37-.82.13-.04.25-.1.38-.13,7.22-8.71,17.09-15.9,30.16-18.17,20.13-61.18,71.34-104.67,131.39-104.67h78.1s.02,0,.03,0,.02,0,.03,0h3.1s.02,0,.03,0c59.78,0,110.79,43.11,131.11,103.85h298.01c18.67-55.81,63.24-96.74,116.73-103.01,4.73-.55,9.52-.84,14.37-.84h81.29c27.95,0,53.97,9.46,75.85,25.7,19.92-24.02,49.99-39.33,83.63-39.33h1040.03c20.49,0,39.58,5.78,55.94,15.64,50.04,9.12,91.26,48.73,109.03,101.84h8.77c19.74,0,39.33,3.46,57.88,10.24l77.35,31.42c1.36.55,2.65,1.2,3.98,1.79l74.82,16.66c33.29,6.46,60.97,30.14,71.42,62.4,10.91,33.71,14.43,74.07,15.04,114.01.16,10.39-1.52,19.46-4.21,27.33,0,0,0,0,0,0Z"/>
        </g>
      </g>
    </mask>
    <linearGradient id="linear-gradient-2" x1="1441.51" y1="3590.61" x2="1441.51" y2="2538.78" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#fff"/>
      <stop offset=".16" stop-color="#f6f6f6"/>
      <stop offset=".42" stop-color="#dedfdf"/>
      <stop offset=".74" stop-color="#b7b9bb"/>
      <stop offset="1" stop-color="#939598"/>
    </linearGradient>
    <clipPath id="clippath">
      <path class="cls-12" d="m1075.7,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
    </clipPath>
    <clipPath id="clippath-1">
      <path class="cls-12" d="m2309.07,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
    </clipPath>
    <clipPath id="clippath-2">
      <path class="cls-15" d="m1971.74,295.15h0c0,28.55-23.15,51.7-51.7,51.7h-212.39c-28.55,0-51.7-23.15-51.7-51.7h0c0-40.1-32.5-72.6-72.6-72.6h-242.56c-39.24,0-71.04,31.81-71.04,71.04v2161.15c0,45.51,36.89,82.4,82.4,82.4h923.37c45.51,0,82.41-36.89,82.41-82.41V293.59c0-39.24-31.81-71.04-71.04-71.04h-242.56c-40.1,0-72.6,32.5-72.6,72.6Z"/>
    </clipPath>
    <clipPath id="clippath-3">
      <path class="cls-12" d="m1075.7,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
    </clipPath>
    <clipPath id="clippath-4">
      <path class="cls-12" d="m2309.07,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
    </clipPath>
  </defs>
  <g class="cls-39">
    <g id="Layer_2" data-name="Layer 2">
      <g id="pin">
        <g>
          <rect class="cls-36" width="3709.45" height="3709.45"/>
          <g class="cls-46">
            <path class="cls-2" d="m2745.21,2920.12s0,0,0,.02c-2.11,6.19-4.85,11.63-7.85,16.33-.04.06-.07.12-.11.18-.88,1.37-1.79,2.66-2.7,3.91-.14.19-.27.4-.4.58-12.73,17.09-22.22,37.91-22.63,60.43h.28c1.04,0,1.89.98,1.89,2.2,0,.88-.51,1.49-1.14,1.84,5.99,14.17,6.65,30.39,6.65,47.71s-.66,33.53-6.65,47.7c.63.35,1.14.96,1.14,1.84,0,1.21-.84,2.19-1.87,2.19-1.43,43.45-11.93,67.42-106.65,67.42h-58.09c-23.1,0-45.6,6.91-64.86,19.67-18.01,11.94-36.79,23.55-56.03,34.87-2.02,1.19-4.02,2.39-6.05,3.57-4.45,2.59-8.95,5.13-13.45,7.68-2.55,1.45-5.09,2.9-7.66,4.34-4.37,2.44-8.76,4.85-13.17,7.26-.68.37-1.34.75-2.02,1.11v339.62h-1257.27v-219.03c-111.7-9.4-155.77-19.49-164.64-22.64-147.83-52.61-331.36-173.4-380.14-206.39-.85-.57-1.75-1.18-2.52-1.7-.5-.34-.88-.6-1.34-.91-1.08-.73-2.11-1.44-2.99-2.04-.12-.08-.21-.14-.33-.22-3.02-2.07-4.85-3.33-5.14-3.54h0c-.07-.05-.19-.13-.19-.13,0,0-.23-.04-.58-.1-.04,0-.04,0-.07-.01-.4-.07-.98-.17-1.78-.32-.02,0-.05,0-.08-.01-.76-.14-1.7-.31-2.78-.52-.08-.02-.14-.03-.22-.04-1.16-.22-2.5-.48-4.01-.78,0,0,0,0,0,0-3.04-.6-6.76-1.36-11.09-2.28-.08-.02-.15-.03-.23-.05-56.98-12.14-217.6-52.44-313.57-137.22,0,0,0,0-.01-.01-4.27-3.78-8.42-7.64-12.42-11.6,0,0,0,0,0,0-6.31-6.23-12.26-12.69-17.8-19.37-.09-.1-.17-.21-.26-.31-2.63-3.18-5.16-6.41-7.59-9.7-.14-.18-.28-.36-.41-.55-2.46-3.34-4.82-6.74-7.07-10.2-.18-.27-.34-.55-.52-.82-1.96-3.04-3.82-6.13-5.6-9.25-.36-.63-.73-1.26-1.08-1.89-1.89-3.4-3.69-6.83-5.36-10.33-.17-.35-.32-.72-.49-1.07-1.45-3.09-2.8-6.22-4.07-9.39-.37-.92-.74-1.84-1.09-2.77,0,0,0-.02-.01-.03-.09-.23-.19-.47-.28-.7-1.24-3.29-2.41-6.6-3.45-9.98,0-.02-.01-.04-.02-.06-.48-1.55-1.24-2.86-2.12-4.05-.15-.2-.28-.41-.44-.61-.88-1.07-1.92-2-3.06-2.83-.27-.19-.55-.38-.83-.56-1.15-.75-2.38-1.43-3.68-2.02-.37-.17-.76-.31-1.14-.46-.99-.41-2.01-.79-3.04-1.14-7.01-2.38-14.45-3.71-17.68-7.3,0,0,0,0,0,0-1.04-1.15-1.68-2.52-1.68-4.26-.81-36.36,5.85-87.97,17.7-129.23,0-.04.02-.07.03-.11.78-2.7,1.57-5.36,2.39-7.97,0-.02.01-.04.02-.05,3.31-10.51,6.97-20.17,10.94-28.52.03-.06.06-.12.09-.19.92-1.92,1.85-3.76,2.8-5.53.24-.44.48-.85.72-1.28.75-1.36,1.51-2.69,2.28-3.96.33-.55.67-1.06,1.01-1.58.69-1.08,1.38-2.13,2.09-3.13.39-.56.79-1.09,1.19-1.62.67-.89,1.34-1.74,2.02-2.55.43-.51.86-1.01,1.3-1.49.66-.73,1.33-1.42,2-2.07.46-.45.92-.89,1.38-1.3.67-.59,1.35-1.12,2.04-1.64.47-.35.94-.72,1.42-1.03.7-.46,1.42-.85,2.13-1.22.46-.25.93-.52,1.4-.73.78-.34,1.58-.58,2.37-.82.13-.04.25-.1.38-.13,7.22-8.71,17.09-15.9,30.16-18.17,20.13-61.18,71.34-104.67,131.39-104.67h78.1s.02,0,.03,0,.02,0,.03,0h3.1s.02,0,.03,0c59.78,0,110.79,43.11,131.11,103.85h298.01c18.67-55.81,63.24-96.74,116.73-103.01,4.73-.55,9.52-.84,14.37-.84h81.29c27.95,0,53.97,9.46,75.85,25.7,19.92-24.02,49.99-39.33,83.63-39.33h1040.03c20.49,0,39.58,5.78,55.94,15.64,50.04,9.12,91.26,48.73,109.03,101.84h8.77c19.74,0,39.33,3.46,57.88,10.24l77.35,31.42c1.36.55,2.65,1.2,3.98,1.79l74.82,16.66c33.29,6.46,60.97,30.14,71.42,62.4,10.91,33.71,14.43,74.07,15.04,114.01.16,10.39-1.52,19.46-4.21,27.33,0,0,0,0,0,0Z"/>
          </g>
          <g>
            <ellipse class="cls-33" cx="1441.51" cy="2552.08" rx="1305.81" ry="13.63"/>
            <g>
              <g>
                <path class="cls-22" d="m1527.01,2389.75c0-89.61,62.9-162.29,140.54-162.29h-81.29c-77.64,0-140.55,72.68-140.55,162.29s62.91,162.33,140.55,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                <path class="cls-20" d="m1664.4,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
                <path class="cls-12" d="m1667.55,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
              </g>
              <g>
                <path class="cls-22" d="m293.64,2389.75c0-89.61,62.9-162.29,140.54-162.29h-81.29c-77.64,0-140.55,72.68-140.55,162.29s62.91,162.33,140.55,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                <path class="cls-20" d="m431.03,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
                <path class="cls-12" d="m434.19,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
              </g>
            </g>
            <path class="cls-16" d="m2003.38,2128.19H313.57c-76.71,0-138.88,62.41-138.88,139.4v122.18c0,11.77,14.21,58.46,55.59,58.46h2218.67c19.74,0,39.33-3.46,57.88-10.24l77.35-31.42c42.74-17.36,70.71-59.02,70.71-105.3v-173.08h-651.5Z"/>
            <g>
              <g class="cls-39">
                <path d="m1075.7,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
                <g class="cls-42">
                  <g class="cls-39">
                    <path class="cls-12" d="m935.15,2389.75c0-8.73.63-17.29,1.78-25.64h-81.29c-1.15,8.36-1.78,16.91-1.78,25.64,0,89.65,62.91,162.33,140.54,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                    <path class="cls-12" d="m887.42,2284.5c-10.41,14.1-18.77,30.28-24.54,47.92-3.31,10.11-5.73,20.72-7.24,31.68h81.29c1.51-10.96,3.93-21.57,7.24-31.68h0c5.77-17.64,14.13-33.82,24.54-47.92h-81.29Z"/>
                    <path class="cls-12" d="m914.57,2256.19c-10.08,8.05-19.21,17.57-27.14,28.31h81.29c7.93-10.74,17.06-20.26,27.14-28.31h-81.29Z"/>
                    <path class="cls-12" d="m1075.7,2227.46h-81.29c-29.66,0-57.17,10.62-79.84,28.73h81.29c22.67-18.11,50.18-28.73,79.84-28.73Z"/>
                  </g>
                </g>
              </g>
              <path class="cls-20" d="m1072.54,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
              <path class="cls-29" d="m1075.7,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
              <path class="cls-22" d="m1075.7,2269.06c57.74,0,104.53,54.05,104.53,120.7s-46.78,120.73-104.53,120.73-104.53-54.05-104.53-120.73,46.78-120.7,104.53-120.7Z"/>
              <path class="cls-12" d="m1075.7,2282.69c51.22,0,92.73,47.95,92.73,107.07s-41.5,107.1-92.73,107.1-92.72-47.95-92.72-107.1,41.5-107.07,92.72-107.07Z"/>
              <path class="cls-9" d="m1154.77,2459.92h0c18.57-27.84,24.6-63.16,18.11-95.92,0-.01,0-.02,0-.03h0c-1.92-9.7-4.85-19.17-8.97-28.14h0c-1.24-2.71-2.63-5.35-4.07-7.96h0c-3.82-6.92-8.3-13.51-13.53-19.56-13.98-16.16-31.1-26.41-49.08-30.96h0c-11.07-2.8-22.46-3.4-33.68-1.8h0c-21.28,3.04-41.88,13.88-58.22,32.76-13.47,15.56-22.16,34.5-26.31,54.43h0s0,.01,0,.02c-.62,2.99-1.15,5.99-1.56,9.02h0c-4.78,35.15,4.44,72.35,27.88,99.43,6.5,7.51,13.71,13.65,21.33,18.65.5.32.97.69,1.47,1h0c29.41,18.54,65.15,18.72,94.67.49h0c.54-.34,1.06-.75,1.61-1.1,7.83-5.06,15.24-11.34,21.9-19.04,1.18-1.36,2.21-2.82,3.31-4.23h0s0,0,0-.01c1.8-2.3,3.53-4.63,5.14-7.05,0,0,0,0,0,0Zm-4.06-4.69l-51.1-59.05,69.21-21.43c3.35,27.91-2.68,56.96-18.11,80.48Zm-8.43-142.29c4.75,5.49,8.86,11.44,12.38,17.7l-64.1,34.54,6.15-81.24c16.69,4.38,32.57,13.98,45.56,29Zm-132.95,0c13.32-15.4,29.67-25.13,46.82-29.35l6.12,80.8-64.69-34.86c3.38-5.85,7.29-11.42,11.76-16.59Zm-26.37,60.55l68.99,21.36-51.55,59.57c-15.28-23.73-21.09-52.96-17.44-80.93Zm48.42,111.99l43.92-72.49,44.22,72.97c-27.53,16.72-60.71,16.53-88.14-.49Zm110.9-18.91c-4.91,5.68-10.26,10.54-15.88,14.69l-45.33-74.81-5.14,4.16-5.98-4.84-45.45,75.01c-5.37-4.05-10.46-8.77-15.17-14.21-1.38-1.6-2.61-3.3-3.88-4.96l55.76-64.44-3.05-3.53,1.38-5.96-75.06-23.24c1.92-9.31,4.89-18.39,8.97-26.96l70.1,37.77,1.83-4.52,5.32-.54-6.67-88.11c8.25-1.2,16.58-1.12,24.81.21l-6.66,88,4.3.43,2.26,5.6,69.99-37.72c3.98,8.61,6.82,17.73,8.65,27.06l-74.8,23.16,1.12,4.82-3.78,4.37,55.67,64.33c-1.1,1.41-2.13,2.87-3.31,4.23Z"/>
              <g>
                <g class="cls-37">
                  <path class="cls-20" d="m1070.09,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,66.41-30.49,66.41-30.49-46.96-30.49-66.41,13.65-35.21,30.49-35.21Z"/>
                </g>
                <g>
                  <path class="cls-12" d="m1070.09,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                  <path class="cls-19" d="m1083.1,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                </g>
              </g>
              <path class="cls-19" d="m1075.8,2274.68c-55.03,0-99.63,51.55-99.63,115.1s44.59,115.13,99.63,115.13,99.63-51.55,99.63-115.13-44.59-115.1-99.63-115.1Zm0,222.14c-51.16,0-92.62-47.92-92.62-107.03s41.45-107,92.62-107,92.62,47.92,92.62,107-41.46,107.03-92.62,107.03Z"/>
              <path class="cls-21" d="m1075.7,2282.69c-2.27,0-4.49.21-6.72.39,48.08,3.99,86.01,50.17,86.01,106.68s-37.94,102.72-86.01,106.7c2.23.19,4.45.39,6.72.39,51.22,0,92.72-47.95,92.72-107.1s-41.5-107.07-92.72-107.07Z"/>
            </g>
            <g>
              <g class="cls-39">
                <path d="m2309.07,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
                <g class="cls-40">
                  <g class="cls-39">
                    <path class="cls-12" d="m2168.52,2389.75c0-8.73.63-17.29,1.78-25.64h-81.29c-1.15,8.36-1.78,16.91-1.78,25.64,0,89.65,62.91,162.33,140.54,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                    <path class="cls-12" d="m2120.79,2284.5c-10.41,14.1-18.77,30.28-24.54,47.92-3.31,10.11-5.73,20.72-7.24,31.68h81.29c1.51-10.96,3.93-21.57,7.24-31.68h0c5.77-17.64,14.13-33.82,24.54-47.92h-81.29Z"/>
                    <path class="cls-12" d="m2147.94,2256.19c-10.08,8.05-19.21,17.57-27.14,28.31h81.29c7.93-10.74,17.06-20.26,27.14-28.31h-81.29Z"/>
                    <path class="cls-12" d="m2309.07,2227.46h-81.29c-29.66,0-57.17,10.62-79.84,28.73h81.29c22.67-18.11,50.18-28.73,79.84-28.73Z"/>
                  </g>
                </g>
              </g>
              <path class="cls-20" d="m2305.91,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
              <path class="cls-29" d="m2309.07,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
              <path class="cls-22" d="m2309.07,2269.06c57.74,0,104.53,54.05,104.53,120.7s-46.78,120.73-104.53,120.73-104.53-54.05-104.53-120.73,46.78-120.7,104.53-120.7Z"/>
              <path class="cls-12" d="m2309.07,2282.69c51.22,0,92.73,47.95,92.73,107.07s-41.5,107.1-92.73,107.1-92.72-47.95-92.72-107.1,41.5-107.07,92.72-107.07Z"/>
              <path class="cls-9" d="m2388.13,2459.92h0c18.57-27.84,24.6-63.16,18.11-95.92,0-.01,0-.02,0-.03h0c-1.92-9.7-4.85-19.17-8.97-28.14h0c-1.24-2.71-2.63-5.35-4.07-7.96h0c-3.82-6.92-8.3-13.51-13.53-19.56-13.98-16.16-31.1-26.41-49.08-30.96h0c-11.07-2.8-22.46-3.4-33.68-1.8h0c-21.28,3.04-41.88,13.88-58.22,32.76-13.47,15.56-22.16,34.5-26.31,54.43h0s0,.01,0,.02c-.62,2.99-1.15,5.99-1.56,9.02h0c-4.78,35.15,4.44,72.35,27.88,99.43,6.5,7.51,13.71,13.65,21.33,18.65.5.32.97.69,1.47,1h0c29.41,18.54,65.15,18.72,94.67.49h0c.54-.34,1.06-.75,1.61-1.1,7.83-5.06,15.24-11.34,21.9-19.04,1.18-1.36,2.21-2.82,3.31-4.23h0s0,0,0-.01c1.8-2.3,3.53-4.63,5.14-7.05,0,0,0,0,0,0Zm-4.06-4.69l-51.1-59.05,69.21-21.43c3.35,27.91-2.68,56.96-18.11,80.48Zm-8.42-142.29c4.75,5.49,8.86,11.44,12.38,17.7l-64.1,34.54,6.15-81.24c16.69,4.38,32.57,13.98,45.56,29Zm-132.95,0c13.33-15.4,29.67-25.13,46.82-29.35l6.12,80.8-64.69-34.86c3.38-5.85,7.29-11.42,11.76-16.59Zm-26.37,60.55l68.99,21.36-51.55,59.57c-15.28-23.73-21.09-52.96-17.44-80.93Zm48.42,111.99l43.92-72.49,44.22,72.97c-27.53,16.72-60.71,16.53-88.14-.49Zm110.9-18.91c-4.91,5.68-10.26,10.54-15.88,14.69l-45.33-74.81-5.14,4.16-5.98-4.84-45.45,75.01c-5.37-4.05-10.46-8.77-15.17-14.21-1.38-1.6-2.6-3.3-3.88-4.96l55.76-64.44-3.05-3.53,1.38-5.96-75.06-23.24c1.92-9.31,4.89-18.39,8.97-26.96l70.1,37.77,1.83-4.52,5.32-.54-6.67-88.11c8.25-1.2,16.58-1.12,24.81.21l-6.66,88,4.3.43,2.26,5.6,69.99-37.72c3.98,8.61,6.82,17.73,8.65,27.06l-74.8,23.16,1.12,4.82-3.78,4.37,55.67,64.33c-1.1,1.41-2.13,2.87-3.31,4.23Z"/>
              <g>
                <g class="cls-37">
                  <path class="cls-20" d="m2303.46,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,66.41-30.49,66.41-30.49-46.96-30.49-66.41,13.65-35.21,30.49-35.21Z"/>
                </g>
                <g>
                  <path class="cls-12" d="m2303.46,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                  <path class="cls-19" d="m2316.47,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                </g>
              </g>
              <path class="cls-19" d="m2309.17,2274.68c-55.03,0-99.63,51.55-99.63,115.1s44.59,115.13,99.63,115.13,99.63-51.55,99.63-115.13-44.59-115.1-99.63-115.1Zm0,222.14c-51.16,0-92.62-47.92-92.62-107.03s41.45-107,92.62-107,92.62,47.92,92.62,107-41.46,107.03-92.62,107.03Z"/>
              <path class="cls-21" d="m2309.07,2282.69c-2.27,0-4.49.21-6.72.39,48.08,3.99,86.01,50.17,86.01,106.68s-37.94,102.72-86.01,106.7c2.23.19,4.45.39,6.72.39,51.22,0,92.72-47.95,92.72-107.1s-41.5-107.07-92.72-107.07Z"/>
            </g>
            <path class="cls-28" d="m1835.98,1932.01c322.25-1.7,318.87-164.23,192.85-209.3,0,0-16.03-8.37-309.65-8.37-577.06,0-739.28,34.83-757.25,41.22-172.05,61.23-392.64,214.93-392.64,214.93,0,0-346.48,59.18-401.96,239.37-4.9,15.92-33.66,11.14-33.66,23.23-1.55,70.06,24.56,196.82,62.21,196.82,0,0,419.63.18,674.9,0-.67-9.72,41.83-178.06,41.83-187.94,0-147.62,923.37-309.97,923.37-309.97Z"/>
            <g>
              <path class="cls-28" d="m195.87,2429.91s419.63.18,674.9,0c-.31-4.51,8.68-43.23,18.41-84.4H146.95c11.04,46.11,28.23,84.4,48.92,84.4Z"/>
              <path class="cls-16" d="m2605.15,1932.01h-94.32c-164.45-90.34-268.29-152.31-394.31-197.37,0,0-36.08-13.24-147.8-13.24-197.74,0-321.12,14.76-335.39,18.28-175.58,43.33-389.2,230.81-389.2,230.81,0,0-152.74,13.83-354.43,105.17-72.24,32.71-98.72,80.7-129.88,134.2-8.38,14.39-33.66,11.14-33.66,23.23-1.55,70.06,18.47,196.82,30.06,196.82,0,0,56.38-.04,148.72-.11-.72-10.02-1.12-20.13-1.12-30.32,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,10.1-.4,20.12-1.1,30.06,284.2-.21,634.77-.48,890.04-.66-.67-9.72-1.05-19.53-1.05-29.4,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,9.74-.36,19.42-1.01,29.01l181.33-40.38c33.29-6.46,60.97-30.14,71.42-62.4,10.91-33.71,14.43-74.07,15.04-114.01.32-21.4-7.06-37.32-15.28-48.35-13.01-17.46-22.7-38.81-22.7-61.91,0-106.67,9.02-169.42-106.29-169.42Z"/>
            </g>
            <path class="cls-11" d="m2722.9,2248.13h-191.23c-30.57,0-60.08-13.38-82.78-37.64-37.06-39.59-86.13-63.7-139.96-63.7s-102.89,24.11-139.95,63.7c-22.71,24.26-52.21,37.64-82.79,37.64h-788.99c-30.57,0-60.08-13.38-82.78-37.64-37.06-39.59-86.13-63.7-139.96-63.7s-102.89,24.11-139.95,63.7c-22.71,24.26-52.21,37.64-82.79,37.64H185.67c-47.3,0-32.94,136.74,50.53,136.74,4.13,0,615.47.01,615.47.01,10.13,0,13.63,6.46,13.63,9.72,0,11.98.88,23.7,2.27,35.21,11.7,0,24.11-.02,37.36-.03-.72-10.02-1.12-20.13-1.12-30.32,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,10.1-.4,20.12-1.1,30.06,10.89,0,21.9-.02,32.98-.03.77-22.2-2.42-90.02-2.42-90.02-.01-18.79,295.62-34.15,311.47-34.15h193.39c15.85,0,321.31,15.37,321.3,34.15,0,0-6.05,50.44-2.9,89.41,12.25,0,24.37-.02,36.22-.03-.67-9.72-1.04-19.53-1.04-29.4,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,9.74-.36,19.42-1.01,29.01l36.75-8.18c3.15-15.31,10.9-35.42,32.5-35.42,0,0,76.48-4.36,135.41-34.26,29.4-14.91,39.52-44.89,49.16-81.01,2.84-10.64-3.13-21.48-12.55-21.48Z"/>
            <g>
              <path class="cls-16" d="m2712.24,2030.94c-1.31-63.26,8.52-98.93-107.08-98.93h-58.09c-23.1,0-45.6-6.91-64.86-19.67-111.16-73.71-249.84-136.27-365.69-177.7,0,0-36.08-13.24-147.8-13.24-197.74,0-321.12,14.76-335.39,18.28-175.58,43.33-389.19,230.81-389.19,230.81,0,0-152.74,13.83-354.44,105.17-63.51,28.76-91.65,69.33-118.7,115.07,263.22-99.17,937.85-155.53,1941.24-159.79Z"/>
              <g>
                <path class="cls-16" d="m185.27,2170.33c-7.47,12.49-13.66,25.61-17.94,39.52-4.2,13.63-25.82,12.12-31.98,18.97h452.11c202.28,0,290.93-24.37,319.98-58.49H185.27Z"/>
                <path class="cls-16" d="m2734.14,2163.34c-13.01-17.47-22.7-38.81-22.7-61.91,0-24.82,1.08-47.24.84-67.06h-115.67c0,34.83,66.11,131.23,148.6,150-2.85-8.35-6.84-15.34-11.07-21.02Z"/>
              </g>
            </g>
            <path class="cls-16" d="m2116.51,1734.63s-36.08-13.24-147.8-13.24c-197.74,0-321.12,14.76-335.39,18.28-175.58,43.33-389.19,230.81-389.19,230.81,0,0-152.74,13.83-354.44,105.17-23.34,10.57-41.88,22.75-57.37,36.18,339.13-150.95,1129.08-207.59,1608.06-225.94-102.84-62.2-222.15-114.88-323.86-151.26Zm-1547.23,235.85s-216.27,36.96-334.43,141.35c0,0,411.08-26.22,589.11-144.92h-249.49c-3.28,2.25-5.19,3.57-5.19,3.57Z"/>
            <path class="cls-12" d="m919.31,2123.27h-171.84c-94.9,0-153.52,16.54-189.52,35.27-8.64,4.49-18.13,7.1-27.87,7.1H254.5c-4.92-6.92-8.94-14.85-11.28-23.99-2.55-9.99-10.72-17.38-20.8-18.21-25.39,25.08-45.05,53.75-55.1,86.42-.14.46-.37.84-.55,1.27h592.45c32.03,0,130.29-21.74,169.34-54.6,12.43-10.46,6.09-33.26-9.26-33.26Z"/>
            <g>
              <path class="cls-9" d="m612.38,2205.85h130.21c76.09,0,156.93-27.61,183.43-50.92,10.5-9.24,4.65-29.52-8.33-29.52h-145.03c-141.19,0-231.6,80.44-160.28,80.44Z"/>
              <path class="cls-27" d="m720.52,2199.69c104.66,2.67,132.26-18.41,169.85-40.11,12.6-7.28,5.58-23.25-10-23.25h-32.41c-88.33,0-123.62,34.67-136.1,52.96-3.4,4.98,1.54,10.21,8.65,10.39Z"/>
              <path class="cls-19" d="m655.25,2184.22c42.08-2.81,126.53-16.13,162.49-35.14,12.06-6.38,5.34-20.37-9.56-20.37h-31c-84.5,0-118.27,30.38-130.2,46.41-3.25,4.37,1.48,9.56,8.28,9.1Z"/>
            </g>
            <g>
              <path class="cls-16" d="m2591.59,2001.62c-5.71,0-9.13,7.4-5.99,12.97l20.96,37.25c17.17,30.5,46.34,48.87,77.6,48.87h27.63c6.74-14.6,7.39-31.48,7.39-49.55s-.65-34.95-7.39-49.55h-120.2Z"/>
              <g>
                <path class="cls-28" d="m2629.15,2027.57c-3.8,0-6.08,4.93-4,8.64l13.97,24.83c11.44,20.33,30.88,32.57,51.72,32.57h0c12.53,0,22.89-11.56,23.27-26.17.06-2.25.07-4.54.07-6.85,0-.12,0-.24,0-.36-.01-18.08-12.73-32.66-28.22-32.66h-56.81Z"/>
                <path class="cls-13" d="m2627.82,2006.11c-2.75,0-4.4,3.57-2.89,6.25l10.1,17.95c8.27,14.7,22.32,23.55,37.39,23.55h0c9.05,0,16.55-8.36,16.82-18.92.04-1.63.05-3.28.05-4.95,0-.09,0-.17,0-.26,0-13.07-9.2-23.61-20.4-23.61h-41.07Z"/>
              </g>
              <path class="cls-12" d="m2711.79,2102.92h-27.63c-32,0-61.6-18.64-79.18-49.87l-20.96-37.25c-1.86-3.31-2.01-7.35-.4-10.83,1.61-3.48,4.59-5.55,7.97-5.55h120.2c1.04,0,1.89.98,1.89,2.2s-.84,2.2-1.89,2.2h-120.2c-1.98,0-3.72,1.21-4.65,3.24-.94,2.03-.85,4.39.23,6.32l20.96,37.25c16.88,29.98,45.3,47.88,76.03,47.88h27.63c1.04,0,1.89.98,1.89,2.2s-.84,2.2-1.89,2.2Z"/>
            </g>
            <g>
              <path class="cls-9" d="m168.73,2205.81c3.4.02,7.69.03,13.41.03,45.37,0,71.25-16.17,59.29-64.87-2.26-9.19-11.59-14.66-21.07-15.41-23.32,23.52-41.54,50.17-51.63,80.25Z"/>
              <path class="cls-27" d="m191.36,2200.73c2,.01,4.53.02,7.89.02,26.71,0,41.95-8.92,34.9-35.78-1.33-5.07-6.82-8.08-12.4-8.5-13.73,12.97-24.45,27.67-30.4,44.26Z"/>
              <path class="cls-19" d="m192.77,2167.26c1.87.01,4.24.02,7.4.02,25.02,0,39.3-7.56,32.7-30.32-1.24-4.29-6.39-6.85-11.62-7.2-12.86,10.99-22.91,23.44-28.48,37.5Z"/>
            </g>
            <path class="cls-12" d="m734.88,2399.48H178.49c-5.07,0-9.74-2.94-11.83-7.55-.24-.54-.48-1.07-.72-1.61-16.24-36.3,10.8-77.23,50.57-77.23h428.01c44.07,0,84.34,24.94,103.98,64.39h0c5.03,10.11-2.32,21.99-13.62,21.99Z"/>
            <path class="cls-12" d="m1506.99,1765.21h-570.58c-166.1,65.69-363.53,202.77-366.95,205.15h603.52c18.9,0,37.15-6.54,51.76-18.52,45.59-37.41,155.39-122.85,268.37-175.86,5.49-2.58,19.95-10.76,13.88-10.76Z"/>
            <g>
              <path class="cls-28" d="m2084.71,1762.32c-2.26-.36-69.3-12.87-169.79-12.87-225.3,0-301.45,20.45-302.19,20.65-116.11,32.96-236.53,141.5-308.49,206.35-9.74,8.78-18.7,16.85-26.76,23.95-1.67,1.47-1.99,3.99-.84,6.74,1.03,2.48,3.36,4.99,6.27,4.99l1057.7-68.35c-23.39-39.58-156.28-134.15-255.9-181.47Z"/>
              <path class="cls-16" d="m600.28,1949.58h555.43c31.61,0,62.31-10.39,87.37-29.66,51.41-39.55,128.88-94.48,209.8-134.99h-562.76c-115.07,52.16-234.92,128.32-289.83,164.65Z"/>
            </g>
            <g>
              <path class="cls-16" d="m770.09,1921.1c-15.11,7.1-27.25,16.97-35.61,28.48h421.22c7.17,0,14.28-.61,21.3-1.66,9.83-48.61,22.92-97.88,40.32-145.36-104.76,3.94-149.86,11.49-163.63,14.35-82.77,17.19-189.53,60.02-283.6,104.19Zm593.94-121.02c-27.62,0-52.94.22-76.2.61-14.13,36.06-25.5,73.69-34.7,111.54,44.34-33.59,104.92-76.08,169.63-111.52-17.08-.39-36.52-.63-58.73-.63Zm172.9,9.58c-1.07-.3-4.53-1.16-11.76-2.26-75.87,41.87-147.72,103.5-200.61,150.79l247.97-12.18c7.28-35.54,16.25-71.26,27.46-106.19-20.3-11.2-41.56-21.56-63.05-30.17Zm168.06,101.55c-24.85-20.89-58.77-45.09-96.59-66.68-10.54,33.25-19.11,67.2-26.09,101.01l107.38-5.27c18.95-.93,28.11-18.29,15.3-29.06Z"/>
              <path class="cls-16" d="m1791.95,1779.7c-13.97,0-22.17,15.71-14.18,27.17l23.33,33.44c22.88,32.8,60.35,52.35,100.34,52.35h388.24c-44.89-36.68-110.65-80.66-170.77-112.95h-326.96Z"/>
              <path class="cls-16" d="m1881.04,1938.93h-6.96l1.99-18.35c15.71,0,28.85-10.46,27.71-22.05l-2.78-28.48c-1.9-19.48-22.78-33.87-49.18-33.87h-44.59c-26.39,0-50.4,14.38-56.53,33.87l-8.97,28.48c-3.65,11.59,7.22,22.05,22.93,22.05h8.32l-1.99,18.35h-15.28c-32.36,0-61.12,18.91-65.47,43.05l-.7,3.89,245.82-15.89c-6.14-18.11-27.58-31.05-54.33-31.05Zm240.46,0c-22.36,0-42.99,9.03-55.05,22.58l215.1-13.9c-9.46-5.44-21.42-8.68-34.73-8.68h-6.96l1.99-18.35c15.71,0,28.85-10.46,27.71-22.05l-2.29-23.49c-16.75-12.71-35.33-25.89-54.78-38.86h-39.46c-26.39,0-50.4,14.38-56.53,33.87l-8.97,28.48c-3.65,11.59,7.22,22.05,22.93,22.05h8.32l-1.99,18.35h-15.28Z"/>
              <path class="cls-16" d="m1365.21,1834.57c-8.84-10.18-23.42-16.64-40.33-16.64h-44.59c-26.39,0-50.4,15.62-56.53,36.78l-8.97,30.94c-3.65,12.59,7.22,23.95,22.93,23.95h8.32l-.87,8.73c32.04-24.57,73.78-54.77,120.04-83.75Zm354.66,94.95h-6.96l1.99-19.93c15.71,0,28.85-11.36,27.71-23.95l-2.78-30.94c-1.91-21.16-22.78-36.78-49.18-36.78h-44.59c-26.39,0-50.4,15.62-56.53,36.78l-8.97,30.94c-3.65,12.59,7.22,23.95,22.92,23.95h8.33l-1.99,19.93h-15.28c-32.36,0-61.12,20.54-65.47,46.75l-3.35,20.17,250.12-16.16.14-4.01c.89-26.22-23.76-46.75-56.13-46.75Zm-491.2,0c-18.78.02-36.31,6.99-48.58,17.94,17.15-2.95,33.58-9.06,48.58-17.94Zm128.37.11c-19.45,16.82-37.3,32.86-52.79,46.82-9.74,8.78-18.7,16.85-26.76,23.95-1.67,1.47-1.99,3.99-.84,6.74,1.03,2.48,3.36,4.99,6.27,4.99l126.35-8.16.94-27.7c.86-25.41-22.29-45.42-53.18-46.64Z"/>
              <path class="cls-16" d="m695.14,1924.03c-18.1,0-54.5,10.41-74.28,25.55h534.84c29.23,0,57.61-8.98,81.55-25.55h-542.11Z"/>
            </g>
            <path class="cls-13" d="m1662.95,1866.76c.71-.21,73.13-20.65,287.43-20.65,95.57,0,159.34,12.51,161.49,12.87,45.84,22.89,99.06,56.84,144.33,90.27l84.41-5.45c-23.39-39.58-156.28-134.15-255.9-181.47-2.26-.36-69.3-12.87-169.79-12.87-225.3,0-301.45,20.45-302.19,20.65-116.11,32.96-236.53,141.5-308.49,206.35-9.74,8.78-18.7,16.85-26.76,23.95-1.67,1.47-1.99,3.99-.84,6.74,1.03,2.48,3.36,4.99,6.27,4.99l164.69-10.64c63.14-54.85,140.18-112.3,215.34-134.74Z"/>
            <path class="cls-31" d="m1183.29,1853.72h152.22c36.28-24.05,76.37-48.27,117.36-68.79h-562.76c-115.07,52.16-234.92,128.32-289.83,164.65h168.25c128.77-62.73,270.52-95.86,414.76-95.86Z"/>
            <g>
              <g>
                <g>
                  <path class="cls-12" d="m2346.16,1944.81c-18.46-38.29-156.73-137.62-259.56-186.46-.16-.08-.34-.14-.52-.18-.68-.13-68.98-13.12-171.15-13.12-227.4,0-302.64,20.61-303.38,20.82-117.1,33.24-238,142.21-310.24,207.32-9.73,8.77-18.68,16.83-26.72,23.92-3.1,2.73-3.87,7.23-1.99,11.73,1.62,3.9,5.41,7.7,10.33,7.7.21,0,.42,0,.63-.02l1060.77-68.56c.73-.05,1.39-.46,1.76-1.09.37-.63.4-1.41.08-2.06Zm-921.79-53.63c58.98-46,126.42-89.77,191.86-108.35.58-.16,46.57-12.23,170.97-17.62,6.34,63.18,8.67,132.09,8.51,200.57l-420.89,27.21c0-39.75,18.2-77.36,49.55-101.81Zm433.13,70.6c0-67.29-2.38-135.23-8.54-198.49,20.42-.41,42.32-.64,65.97-.64,91.92,0,155.19,10.54,165.91,12.45,17.91,8.57,36.66,18.59,55.48,29.4,6.54,44.74,10.7,91.48,13.1,138.41l-291.92,18.87Zm428.43-27.7l-127.74,8.26c-2.29-44.75-6.2-89.31-12.2-132.19,55.95,32.93,111.53,72.27,147.1,102.75,8.2,7.03,3.62,20.49-7.16,21.18Z"/>
                  <g>
                    <path class="cls-10" d="m1481.85,2059.47c0-9.93-8.54-24.95-19.06-33.54l-25.92-21.14c-14.92-12.17-28.96-20.05-41.2-23.76-21.36-6.47-37.19-.17-42.88,18.1l-22.67-18.49c-2.04-1.66-3.69-1.45-3.69.47v13.78c0,1.92,1.65,4.82,3.69,6.49l96.6,78.79c1.51,1.23,2.8,1.42,3.38.66l11.04,9.01c22.49,18.35,40.72,16.01,40.72-5.21v-19.77h0v-5.39Z"/>
                    <g>
                      <path class="cls-14" d="m1421.59,1914.52h43.57c9.21,0,16.69,7.48,16.69,16.69v29.24c0,19.67-15.97,35.65-35.65,35.65h-100.29v-5.9c0-41.77,33.91-75.68,75.68-75.68Z"/>
                      <path class="cls-17" d="m1433.82,1937.9h48.03v-5.39c0-9.94-6.93-17.99-15.48-17.99h-50.25c-38.77,0-70.21,36.52-70.21,81.58h7.76c14.54-34.43,44.92-58.19,80.16-58.19Z"/>
                      <path class="cls-12" d="m1329.65,1977.45h65.21c8.84,0,16.02,7.18,16.02,16.02v1.5c0,1.78-1.45,3.23-3.23,3.23h-77.99c-1.78,0-3.23-1.45-3.23-3.23v-14.29c0-1.78,1.45-3.23,3.23-3.23Z"/>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <ellipse class="cls-10" cx="1762.94" cy="2053.66" rx="32.85" ry="22.98"/>
                    <g class="cls-37">
                      <rect class="cls-20" x="1717.49" y="2040.7" width="82.66" height="25.92" rx="12.96" ry="12.96"/>
                    </g>
                    <rect class="cls-12" x="1725.61" y="2040.7" width="82.66" height="25.92" rx="12.96" ry="12.96"/>
                  </g>
                  <g>
                    <ellipse class="cls-10" cx="2257.64" cy="2036.72" rx="32.85" ry="22.98"/>
                    <g class="cls-37">
                      <path class="cls-20" d="m2281.89,2049.68h-56.74c-7.16,0-12.96-5.8-12.96-12.96h0c0-7.16,5.8-12.96,12.96-12.96h56.74c7.16,0,12.96,5.8,12.96,12.96h0c0,7.16-5.8,12.96-12.96,12.96Z"/>
                    </g>
                    <path class="cls-12" d="m2290.01,2049.68h-56.74c-7.16,0-12.96-5.8-12.96-12.96h0c0-7.16,5.8-12.96,12.96-12.96h56.74c7.16,0,12.96,5.8,12.96,12.96h0c0,7.16-5.8,12.96-12.96,12.96Z"/>
                  </g>
                </g>
              </g>
              <g>
                <path class="cls-12" d="m1799.75,2406.8c-.09,0-.18,0-.27-.02-1.21-.15-2.07-1.25-1.92-2.45.47-3.83,46.56-386.18,16.76-655.41-.13-1.21.74-2.3,1.94-2.43,1.27-.11,2.3.74,2.43,1.95,29.85,269.74-16.3,652.59-16.77,656.42-.14,1.12-1.09,1.93-2.18,1.93Z"/>
                <path class="cls-12" d="m2031.6,2407.56h-694.46c-10.55,0-19.77-8.15-21.43-18.96-43.68-284.24,10.27-436.23,10.82-437.73.13-.34.33-.64.6-.89,79.3-70.65,183.3-155.43,284.41-184.13.74-.21,75.98-20.82,303.38-20.82,102.18,0,170.48,12.99,171.16,13.12.18.04.36.09.52.18,102.82,48.84,241.09,148.17,259.55,186.46.2.41.27.88.19,1.33l-14.28,81.78c-6.37,36.46-42.29,65.35-57.44,76.08-133.98,93.63-156.05,163.34-173.78,219.36-5.97,18.85-11.6,36.65-20.79,53.43-10.55,19.27-28.66,30.78-48.44,30.78Zm-701.11-454.67c-3.4,9.87-52.65,160.27-10.43,435.04,1.33,8.68,8.68,15.23,17.08,15.23h694.46c18.15,0,34.82-10.65,44.58-28.49,8.98-16.41,14.55-34.01,20.45-52.64,17.93-56.65,40.25-127.16,175.45-221.63,14.69-10.41,49.55-38.39,55.64-73.23l14.16-81.07c-17.53-34.24-149.15-132.41-256.91-183.65-4.78-.89-71.58-12.99-170.05-12.99-226.8,0-301.45,20.44-302.18,20.65-100.07,28.4-203.36,112.53-282.26,182.79Z"/>
              </g>
            </g>
          </g>
          <g>
            <rect class="cls-22" x="1126.56" y="88.17" width="1139.94" height="2477.54" rx="108.62" ry="108.62"/>
            <rect class="cls-27" x="1230.18" y="88.17" width="1139.94" height="2477.54" rx="108.62" ry="108.62"/>
            <rect class="cls-22" x="1243.88" y="88.17" width="1139.94" height="2477.54" rx="108.62" ry="108.62"/>
            <path class="cls-19" d="m1971.74,295.15h0c0,28.55-23.15,51.7-51.7,51.7h-212.39c-28.55,0-51.7-23.15-51.7-51.7h0c0-40.1-32.5-72.6-72.6-72.6h-242.56c-39.24,0-71.04,31.81-71.04,71.04v2161.15c0,45.51,36.89,82.4,82.4,82.4h923.37c45.51,0,82.41-36.89,82.41-82.41V293.59c0-39.24-31.81-71.04-71.04-71.04h-242.56c-40.1,0-72.6,32.5-72.6,72.6Z"/>
            <g class="cls-37">
              <g>
                <g>
                  <rect class="cls-3" x="2177.3" y="297.57" width="14.31" height="80.21"/>
                  <rect class="cls-3" x="2157.67" y="317.56" width="14.31" height="60.22"/>
                  <rect class="cls-3" x="2138.03" y="337.56" width="14.31" height="40.23"/>
                  <rect class="cls-3" x="2118.39" y="357.55" width="14.31" height="20.23"/>
                </g>
                <path class="cls-3" d="m2256.35,303.9v-6.32h-23.63v6.32h-10.15v73.89h43.93v-73.89h-10.15Zm-30.86,18.42v-15h38.09v15h-38.09Z"/>
              </g>
              <g>
                <path class="cls-3" d="m1632.77,459.2h-.4l-22.44,14.26-3.38-15.67,28.2-17.77h14.89v152h-16.88v-132.82Z"/>
                <path class="cls-3" d="m1782.69,514.39c0,51.68-16.48,80.21-44.88,80.21-25.22,0-42.49-27.83-42.89-78.1,0-51.21,18.86-79.04,45.08-79.04s42.69,28.53,42.69,76.93Zm-70.1,2.34c0,39.52,10.33,61.97,26.21,61.97,17.67,0,26.21-24.55,26.21-63.37s-7.94-61.97-26.21-61.97c-15.09,0-26.21,21.98-26.21,63.37Z"/>
                <path class="cls-3" d="m1800.15,497.55c0-8.65,4.96-14.73,11.72-14.73,7.15,0,11.72,6.08,11.72,14.73,0,8.18-4.57,14.5-11.91,14.5-6.75,0-11.52-6.31-11.52-14.5Zm0,82.55c0-8.65,4.96-14.73,11.72-14.73,7.15,0,11.72,6.08,11.72,14.73,0,8.18-4.57,14.5-11.91,14.5-6.75,0-11.52-6.31-11.52-14.5Z"/>
                <path class="cls-3" d="m1925.64,514.39c0,51.68-16.48,80.21-44.88,80.21-25.22,0-42.5-27.83-42.89-78.1,0-51.21,18.86-79.04,45.08-79.04s42.69,28.53,42.69,76.93Zm-70.1,2.34c0,39.52,10.33,61.97,26.21,61.97,17.67,0,26.21-24.55,26.21-63.37s-7.94-61.97-26.21-61.97c-15.09,0-26.21,21.98-26.21,63.37Z"/>
                <path class="cls-3" d="m2018.57,457.33h-49.25l-4.96,39.05c2.98-.47,5.76-.7,10.52-.7,10.13,0,19.86,2.34,27.8,8.18,10.13,6.55,18.47,19.88,18.47,38.82,0,29.7-20.06,51.91-48.06,51.91-14.1,0-25.82-4.68-32.17-9.35l4.37-15.67c5.36,3.74,15.89,8.42,27.8,8.42,16.28,0,30.58-12.63,30.38-32.97,0-19.64-11.32-33.44-36.94-33.44-7.55,0-13.31.7-18.07,1.4l8.34-72.96h61.76v17.3Z"/>
              </g>
            </g>
            <path class="cls-35" d="m1929.08,88.17h-576.58c-59.99,0-108.62,48.63-108.62,108.62v2260.3c0,59.99,48.63,108.62,108.62,108.62h447.65c-325.82-1268.68,11.13-2193,128.93-2477.54Z"/>
          </g>
          <g>
            <g class="cls-38">
              <g>
                <ellipse class="cls-33" cx="1441.51" cy="2552.08" rx="1305.81" ry="13.63"/>
                <g>
                  <g>
                    <g>
                      <path class="cls-22" d="m1527.01,2389.75c0-89.61,62.9-162.29,140.54-162.29h-81.29c-77.64,0-140.55,72.68-140.55,162.29s62.91,162.33,140.55,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                      <path class="cls-20" d="m1664.4,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
                      <path class="cls-12" d="m1667.55,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
                    </g>
                    <g>
                      <path class="cls-22" d="m293.64,2389.75c0-89.61,62.9-162.29,140.54-162.29h-81.29c-77.64,0-140.55,72.68-140.55,162.29s62.91,162.33,140.55,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                      <path class="cls-20" d="m431.03,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
                      <path class="cls-12" d="m434.19,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
                    </g>
                  </g>
                  <path class="cls-12" d="m2003.38,2128.19H313.57c-76.71,0-138.88,62.41-138.88,139.4v122.18c0,11.77,14.21,58.46,55.59,58.46h2218.67c19.74,0,39.33-3.46,57.88-10.24l77.35-31.42c42.74-17.36,70.71-59.02,70.71-105.3v-173.08h-651.5Z"/>
                  <g>
                    <g class="cls-39">
                      <path d="m1075.7,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
                      <g class="cls-43">
                        <g class="cls-39">
                          <path class="cls-12" d="m935.15,2389.75c0-8.73.63-17.29,1.78-25.64h-81.29c-1.15,8.36-1.78,16.91-1.78,25.64,0,89.65,62.91,162.33,140.54,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                          <path class="cls-12" d="m887.42,2284.5c-10.41,14.1-18.77,30.28-24.54,47.92-3.31,10.11-5.73,20.72-7.24,31.68h81.29c1.51-10.96,3.93-21.57,7.24-31.68h0c5.77-17.64,14.13-33.82,24.54-47.92h-81.29Z"/>
                          <path class="cls-12" d="m914.57,2256.19c-10.08,8.05-19.21,17.57-27.14,28.31h81.29c7.93-10.74,17.06-20.26,27.14-28.31h-81.29Z"/>
                          <path class="cls-12" d="m1075.7,2227.46h-81.29c-29.66,0-57.17,10.62-79.84,28.73h81.29c22.67-18.11,50.18-28.73,79.84-28.73Z"/>
                        </g>
                      </g>
                    </g>
                    <path class="cls-20" d="m1072.54,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
                    <path class="cls-29" d="m1075.7,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
                    <path class="cls-22" d="m1075.7,2269.06c57.74,0,104.53,54.05,104.53,120.7s-46.78,120.73-104.53,120.73-104.53-54.05-104.53-120.73,46.78-120.7,104.53-120.7Z"/>
                    <g class="cls-37">
                      <path class="cls-12" d="m1075.7,2286.64c49.33,0,89.3,46.18,89.3,103.12s-39.97,103.14-89.3,103.14-89.3-46.18-89.3-103.14,39.97-103.12,89.3-103.12Z"/>
                    </g>
                    <path class="cls-9" d="m1075.69,2274.68c-55.09,0-99.73,51.58-99.73,115.17s44.64,115.19,99.73,115.19,99.73-51.57,99.73-115.19-44.64-115.17-99.73-115.17Zm15.33,126.71l72.32,22.45c-4.2,14.47-11.02,27.51-19.79,38.46l-52.53-60.91Zm53.77-82.4c8.58,11.15,15.24,24.31,19.2,38.89l-72.01,22.36,52.82-61.25Zm-48.93-33.34l-19.21,83.06-19.32-83.56c5.94-1.38,12.08-2.12,18.37-2.12,6.94,0,13.67.95,20.16,2.62Zm-89.25,175.08c-8.58-11.15-15.23-24.31-19.19-38.89l72-22.36-52.81,61.24Zm-18.55-104.85c4.2-14.46,11.02-27.5,19.79-38.46l52.53,60.91-72.32-22.45Zm67.49,138.2l19.21-83.06,19.32,83.56c-5.94,1.38-12.08,2.12-18.38,2.12-6.93,0-13.66-.95-20.16-2.62Z"/>
                    <path class="cls-25" d="m1075.7,2386.15c33.91,0,65.38,6.81,91.44,18.45.59-4.86,1-9.8,1-14.85,0-58.93-41.37-106.73-92.43-106.73s-92.43,47.8-92.43,106.73c0,5.05.41,9.98,1,14.85,26.06-11.64,57.53-18.45,91.44-18.45Z"/>
                    <path class="cls-19" d="m1075.8,2274.68c-55.03,0-99.63,51.55-99.63,115.1s44.59,115.13,99.63,115.13,99.63-51.55,99.63-115.13-44.59-115.1-99.63-115.1Zm0,222.14c-51.16,0-92.62-47.92-92.62-107.03s41.45-107,92.62-107,92.62,47.92,92.62,107-41.46,107.03-92.62,107.03Z"/>
                    <g class="cls-37">
                      <path class="cls-20" d="m1062.69,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,66.41-30.49,66.41-30.49-46.96-30.49-66.41,13.65-35.21,30.49-35.21Z"/>
                    </g>
                    <g>
                      <path class="cls-12" d="m1062.69,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                      <path class="cls-19" d="m1075.7,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                    </g>
                  </g>
                  <g>
                    <g class="cls-39">
                      <path d="m2309.07,2552.08h-81.29c-77.64,0-140.54-72.68-140.54-162.33s62.91-162.29,140.54-162.29h81.29c-77.64,0-140.54,72.68-140.54,162.29s62.91,162.33,140.54,162.33Z"/>
                      <g class="cls-41">
                        <g class="cls-39">
                          <path class="cls-12" d="m2168.52,2389.75c0-8.73.63-17.29,1.78-25.64h-81.29c-1.15,8.36-1.78,16.91-1.78,25.64,0,89.65,62.91,162.33,140.54,162.33h81.29c-77.64,0-140.54-72.68-140.54-162.33Z"/>
                          <path class="cls-12" d="m2120.79,2284.5c-10.41,14.1-18.77,30.28-24.54,47.92-3.31,10.11-5.73,20.72-7.24,31.68h81.29c1.51-10.96,3.93-21.57,7.24-31.68h0c5.77-17.64,14.13-33.82,24.54-47.92h-81.29Z"/>
                          <path class="cls-12" d="m2147.94,2256.19c-10.08,8.05-19.21,17.57-27.14,28.31h81.29c7.93-10.74,17.06-20.26,27.14-28.31h-81.29Z"/>
                          <path class="cls-12" d="m2309.07,2227.46h-81.29c-29.66,0-57.17,10.62-79.84,28.73h81.29c22.67-18.11,50.18-28.73,79.84-28.73Z"/>
                        </g>
                      </g>
                    </g>
                    <path class="cls-20" d="m2305.91,2227.46c79.38,0,143.7,72.68,143.7,162.29s-64.32,162.33-143.7,162.33-143.7-72.68-143.7-162.33,64.32-162.29,143.7-162.29Z"/>
                    <path class="cls-29" d="m2309.07,2227.46c77.64,0,140.55,72.68,140.55,162.29s-62.91,162.33-140.55,162.33-140.54-72.68-140.54-162.33,62.91-162.29,140.54-162.29Z"/>
                    <path class="cls-22" d="m2309.07,2269.06c57.74,0,104.53,54.05,104.53,120.7s-46.78,120.73-104.53,120.73-104.53-54.05-104.53-120.73,46.78-120.7,104.53-120.7Z"/>
                    <g class="cls-37">
                      <path class="cls-12" d="m2309.07,2286.64c49.33,0,89.3,46.18,89.3,103.12s-39.97,103.14-89.3,103.14-89.3-46.18-89.3-103.14,39.97-103.12,89.3-103.12Z"/>
                    </g>
                    <path class="cls-9" d="m2309.06,2274.68c-55.09,0-99.73,51.58-99.73,115.17s44.64,115.19,99.73,115.19,99.73-51.57,99.73-115.19-44.64-115.17-99.73-115.17Zm15.33,126.71l72.32,22.45c-4.2,14.47-11.02,27.51-19.79,38.46l-52.53-60.91Zm53.77-82.4c8.58,11.15,15.24,24.31,19.2,38.89l-72.01,22.36,52.82-61.25Zm-48.93-33.34l-19.21,83.06-19.32-83.56c5.94-1.38,12.08-2.12,18.37-2.12,6.94,0,13.67.95,20.16,2.62Zm-89.25,175.08c-8.58-11.15-15.23-24.31-19.19-38.89l72-22.36-52.81,61.24Zm-18.55-104.85c4.2-14.46,11.02-27.5,19.79-38.46l52.53,60.91-72.32-22.45Zm67.49,138.2l19.21-83.06,19.32,83.56c-5.94,1.38-12.08,2.12-18.38,2.12-6.93,0-13.66-.95-20.16-2.62Z"/>
                    <path class="cls-25" d="m2309.07,2386.15c33.91,0,65.38,6.81,91.44,18.45.59-4.86,1-9.8,1-14.85,0-58.93-41.37-106.73-92.43-106.73s-92.43,47.8-92.43,106.73c0,5.05.41,9.98,1,14.85,26.06-11.64,57.53-18.45,91.44-18.45Z"/>
                    <path class="cls-19" d="m2309.17,2274.68c-55.03,0-99.63,51.55-99.63,115.1s44.59,115.13,99.63,115.13,99.63-51.55,99.63-115.13-44.59-115.1-99.63-115.1Zm0,222.14c-51.16,0-92.62-47.92-92.62-107.03s41.45-107,92.62-107,92.62,47.92,92.62,107-41.46,107.03-92.62,107.03Z"/>
                    <g class="cls-37">
                      <path class="cls-20" d="m2296.06,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,66.41-30.49,66.41-30.49-46.96-30.49-66.41,13.65-35.21,30.49-35.21Z"/>
                    </g>
                    <g>
                      <path class="cls-12" d="m2296.06,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                      <path class="cls-19" d="m2309.07,2354.56c16.84,0,30.49,15.77,30.49,35.21s-13.65,35.22-30.49,35.22-30.49-15.77-30.49-35.22,13.65-35.21,30.49-35.21Z"/>
                    </g>
                  </g>
                  <path class="cls-32" d="m1835.98,1932.01c322.25-1.7,318.87-164.23,192.85-209.3,0,0-16.03-8.37-309.65-8.37-577.06,0-739.28,34.83-757.25,41.22-172.05,61.23-392.64,214.93-392.64,214.93,0,0-346.48,59.18-401.96,239.37-4.9,15.92-33.66,11.14-33.66,23.23-1.55,70.06,24.56,196.82,62.21,196.82,0,0,419.63.18,674.9,0-.67-9.72,41.83-178.06,41.83-187.94,0-147.62,923.37-309.97,923.37-309.97Z"/>
                  <g>
                    <path class="cls-1" d="m195.87,2429.91s419.63.18,674.9,0c-.31-4.51,8.68-43.23,18.41-84.4H146.95c11.04,46.11,28.23,84.4,48.92,84.4Z"/>
                    <path class="cls-1" d="m2605.15,1932.01h-94.32c-164.45-90.34-268.29-152.31-394.31-197.37,0,0-36.08-13.24-147.8-13.24-197.74,0-321.12,14.76-335.39,18.28-175.58,43.33-389.2,230.81-389.2,230.81,0,0-152.74,13.83-354.43,105.17-72.24,32.71-98.72,80.7-129.88,134.2-8.38,14.39-33.66,11.14-33.66,23.23-1.55,70.06,18.47,196.82,30.06,196.82,0,0,56.38-.04,148.72-.11-.72-10.02-1.12-20.13-1.12-30.32,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,10.1-.4,20.12-1.1,30.06,284.2-.21,634.77-.48,890.04-.66-.67-9.72-1.05-19.53-1.05-29.4,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,9.74-.36,19.42-1.01,29.01l181.33-40.38c33.29-6.46,60.97-30.14,71.42-62.4,10.91-33.71,14.43-74.07,15.04-114.01.32-21.4-7.06-37.32-15.28-48.35-13.01-17.46-22.7-38.81-22.7-61.91,0-106.67,9.02-169.42-106.29-169.42Z"/>
                  </g>
                  <path class="cls-32" d="m2722.9,2248.13h-191.23c-30.57,0-60.08-13.38-82.78-37.64-37.06-39.59-86.13-63.7-139.96-63.7s-102.89,24.11-139.95,63.7c-22.71,24.26-52.21,37.64-82.79,37.64h-788.99c-30.57,0-60.08-13.38-82.78-37.64-37.06-39.59-86.13-63.7-139.96-63.7s-102.89,24.11-139.95,63.7c-22.71,24.26-52.21,37.64-82.79,37.64H185.67c-47.3,0-32.94,136.74,50.53,136.74,4.13,0,615.47.01,615.47.01,10.13,0,13.63,6.46,13.63,9.72,0,11.98.88,23.7,2.27,35.21,11.7,0,24.11-.02,37.36-.03-.72-10.02-1.12-20.13-1.12-30.32,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,10.1-.4,20.12-1.1,30.06,10.89,0,21.9-.02,32.98-.03.77-22.2-2.42-90.02-2.42-90.02-.01-18.79,295.62-34.15,311.47-34.15h193.39c15.85,0,321.31,15.37,321.3,34.15,0,0-6.05,50.44-2.9,89.41,12.25,0,24.37-.02,36.22-.03-.67-9.72-1.04-19.53-1.04-29.4,0-147.62,77.34-222.44,172.74-222.44s172.74,74.83,172.74,222.44c0,9.74-.36,19.42-1.01,29.01l36.75-8.18c3.15-15.31,10.9-35.42,32.5-35.42,0,0,76.48-4.36,135.41-34.26,29.4-14.91,39.52-44.89,49.16-81.01,2.84-10.64-3.13-21.48-12.55-21.48Z"/>
                  <g>
                    <path class="cls-30" d="m2712.24,2030.94c-1.31-63.26,8.52-98.93-107.08-98.93h-58.09c-23.1,0-45.6-6.91-64.86-19.67-111.16-73.71-249.84-136.27-365.69-177.7,0,0-36.08-13.24-147.8-13.24-197.74,0-321.12,14.76-335.39,18.28-175.58,43.33-389.19,230.81-389.19,230.81,0,0-152.74,13.83-354.44,105.17-63.51,28.76-91.65,69.33-118.7,115.07,263.22-99.17,937.85-155.53,1941.24-159.79Z"/>
                    <g>
                      <path class="cls-30" d="m185.27,2170.33c-7.47,12.49-13.66,25.61-17.94,39.52-4.2,13.63-25.82,12.12-31.98,18.97h452.11c202.28,0,290.93-24.37,319.98-58.49H185.27Z"/>
                      <path class="cls-30" d="m2734.14,2163.34c-13.01-17.47-22.7-38.81-22.7-61.91,0-24.82,1.08-47.24.84-67.06h-115.67c0,34.83,66.11,131.23,148.6,150-2.85-8.35-6.84-15.34-11.07-21.02Z"/>
                    </g>
                  </g>
                  <path class="cls-5" d="m2116.51,1734.63s-36.08-13.24-147.8-13.24c-197.74,0-321.12,14.76-335.39,18.28-175.58,43.33-389.19,230.81-389.19,230.81,0,0-152.74,13.83-354.44,105.17-23.34,10.57-41.88,22.75-57.37,36.18,339.13-150.95,1129.08-207.59,1608.06-225.94-102.84-62.2-222.15-114.88-323.86-151.26Zm-1547.23,235.85s-216.27,36.96-334.43,141.35c0,0,411.08-26.22,589.11-144.92h-249.49c-3.28,2.25-5.19,3.57-5.19,3.57Z"/>
                  <g>
                    <g>
                      <rect class="cls-12" x="1326.21" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1376.46" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1426.7" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1476.95" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1527.2" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1301.09" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1351.33" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1401.58" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1451.83" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1502.07" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1552.32" y="2150.04" width="25.12" height="29.53"/>
                    </g>
                    <g>
                      <rect class="cls-12" x="1577.44" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1627.69" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1677.94" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1728.18" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1778.43" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1828.67" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1602.57" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1652.81" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1703.06" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1753.3" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1803.55" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1853.8" y="2150.04" width="25.12" height="29.53"/>
                    </g>
                    <g>
                      <rect class="cls-12" x="1878.92" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1929.17" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1979.41" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2029.66" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2079.91" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2130.15" y="2179.57" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1904.04" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="1954.29" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2004.54" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2054.78" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2105.03" y="2150.04" width="25.12" height="29.53"/>
                      <rect class="cls-12" x="2155.28" y="2150.04" width="25.12" height="29.53"/>
                    </g>
                  </g>
                  <path class="cls-12" d="m919.31,2123.27h-171.84c-94.9,0-153.52,16.54-189.52,35.27-8.64,4.49-18.13,7.1-27.87,7.1H254.5c-4.92-6.92-8.94-14.85-11.28-23.99-2.55-9.99-10.72-17.38-20.8-18.21-25.39,25.08-45.05,53.75-55.1,86.42-.14.46-.37.84-.55,1.27h592.45c32.03,0,130.29-21.74,169.34-54.6,12.43-10.46,6.09-33.26-9.26-33.26Z"/>
                  <g>
                    <path class="cls-9" d="m612.38,2205.85h130.21c76.09,0,156.93-27.61,183.43-50.92,10.5-9.24,4.65-29.52-8.33-29.52h-145.03c-141.19,0-231.6,80.44-160.28,80.44Z"/>
                    <path class="cls-27" d="m720.52,2199.69c104.66,2.67,132.26-18.41,169.85-40.11,12.6-7.28,5.58-23.25-10-23.25h-32.41c-88.33,0-123.62,34.67-136.1,52.96-3.4,4.98,1.54,10.21,8.65,10.39Z"/>
                    <path class="cls-19" d="m655.25,2184.22c42.08-2.81,126.53-16.13,162.49-35.14,12.06-6.38,5.34-20.37-9.56-20.37h-31c-84.5,0-118.27,30.38-130.2,46.41-3.25,4.37,1.48,9.56,8.28,9.1Z"/>
                  </g>
                  <g>
                    <path class="cls-34" d="m2591.59,2001.62c-5.71,0-9.13,7.4-5.99,12.97l20.96,37.25c17.17,30.5,46.34,48.87,77.6,48.87h27.63c6.74-14.6,7.39-31.48,7.39-49.55s-.65-34.95-7.39-49.55h-120.2Z"/>
                    <g>
                      <path class="cls-4" d="m2629.15,2027.57c-3.8,0-6.08,4.93-4,8.64l13.97,24.83c11.44,20.33,30.88,32.57,51.72,32.57h0c12.53,0,22.89-11.56,23.27-26.17.06-2.25.07-4.54.07-6.85,0-.12,0-.24,0-.36-.01-18.08-12.73-32.66-28.22-32.66h-56.81Z"/>
                      <path class="cls-13" d="m2627.82,2006.11c-2.75,0-4.4,3.57-2.89,6.25l10.1,17.95c8.27,14.7,22.32,23.55,37.39,23.55h0c9.05,0,16.55-8.36,16.82-18.92.04-1.63.05-3.28.05-4.95,0-.09,0-.17,0-.26,0-13.07-9.2-23.61-20.4-23.61h-41.07Z"/>
                    </g>
                    <path class="cls-12" d="m2711.79,2102.92h-27.63c-32,0-61.6-18.64-79.18-49.87l-20.96-37.25c-1.86-3.31-2.01-7.35-.4-10.83,1.61-3.48,4.59-5.55,7.97-5.55h120.2c1.04,0,1.89.98,1.89,2.2s-.84,2.2-1.89,2.2h-120.2c-1.98,0-3.72,1.21-4.65,3.24-.94,2.03-.85,4.39.23,6.32l20.96,37.25c16.88,29.98,45.3,47.88,76.03,47.88h27.63c1.04,0,1.89.98,1.89,2.2s-.84,2.2-1.89,2.2Z"/>
                  </g>
                  <g>
                    <path class="cls-9" d="m168.73,2205.81c3.4.02,7.69.03,13.41.03,45.37,0,71.25-16.17,59.29-64.87-2.26-9.19-11.59-14.66-21.07-15.41-23.32,23.52-41.54,50.17-51.63,80.25Z"/>
                    <path class="cls-27" d="m191.36,2200.73c2,.01,4.53.02,7.89.02,26.71,0,41.95-8.92,34.9-35.78-1.33-5.07-6.82-8.08-12.4-8.5-13.73,12.97-24.45,27.67-30.4,44.26Z"/>
                    <path class="cls-19" d="m192.77,2167.26c1.87.01,4.24.02,7.4.02,25.02,0,39.3-7.56,32.7-30.32-1.24-4.29-6.39-6.85-11.62-7.2-12.86,10.99-22.91,23.44-28.48,37.5Z"/>
                  </g>
                  <path class="cls-12" d="m734.88,2399.48H178.49c-5.07,0-9.74-2.94-11.83-7.55-.24-.54-.48-1.07-.72-1.61-16.24-36.3,10.8-77.23,50.57-77.23h428.01c44.07,0,84.34,24.94,103.98,64.39h0c5.03,10.11-2.32,21.99-13.62,21.99Z"/>
                  <path class="cls-12" d="m1506.99,1765.21h-570.58c-166.1,65.69-363.53,202.77-366.95,205.15h603.52c18.9,0,37.15-6.54,51.76-18.52,45.59-37.41,155.39-122.85,268.37-175.86,5.49-2.58,19.95-10.76,13.88-10.76Z"/>
                  <g>
                    <path class="cls-29" d="m2084.71,1762.32c-2.26-.36-69.3-12.87-169.79-12.87-225.3,0-301.45,20.45-302.19,20.65-116.11,32.96-236.53,141.5-308.49,206.35-9.74,8.78-18.7,16.85-26.76,23.95-1.67,1.47-1.99,3.99-.84,6.74,1.03,2.48,3.36,4.99,6.27,4.99l1057.7-68.35c-23.39-39.58-156.28-134.15-255.9-181.47Z"/>
                    <path class="cls-29" d="m600.28,1949.58h555.43c31.61,0,62.31-10.39,87.37-29.66,51.41-39.55,128.88-94.48,209.8-134.99h-562.76c-115.07,52.16-234.92,128.32-289.83,164.65Z"/>
                  </g>
                  <g>
                    <path class="cls-18" d="m770.09,1921.1c-15.11,7.1-27.25,16.97-35.61,28.48h421.22c7.17,0,14.28-.61,21.3-1.66,9.83-48.61,22.92-97.88,40.32-145.36-104.76,3.94-149.86,11.49-163.63,14.35-82.77,17.19-189.53,60.02-283.6,104.19Zm593.94-121.02c-27.62,0-52.94.22-76.2.61-14.13,36.06-25.5,73.69-34.7,111.54,44.34-33.59,104.92-76.08,169.63-111.52-17.08-.39-36.52-.63-58.73-.63Zm172.9,9.58c-1.07-.3-4.53-1.16-11.76-2.26-75.87,41.87-147.72,103.5-200.61,150.79l247.97-12.18c7.28-35.54,16.25-71.26,27.46-106.19-20.3-11.2-41.56-21.56-63.05-30.17Zm168.06,101.55c-24.85-20.89-58.77-45.09-96.59-66.68-10.54,33.25-19.11,67.2-26.09,101.01l107.38-5.27c18.95-.93,28.11-18.29,15.3-29.06Z"/>
                    <path class="cls-18" d="m1791.95,1779.7c-13.97,0-22.17,15.71-14.18,27.17l23.33,33.44c22.88,32.8,60.35,52.35,100.34,52.35h388.24c-44.89-36.68-110.65-80.66-170.77-112.95h-326.96Z"/>
                    <path class="cls-8" d="m1881.04,1938.93h-6.96l1.99-18.35c15.71,0,28.85-10.46,27.71-22.05l-2.78-28.48c-1.9-19.48-22.78-33.87-49.18-33.87h-44.59c-26.39,0-50.4,14.38-56.53,33.87l-8.97,28.48c-3.65,11.59,7.22,22.05,22.93,22.05h8.32l-1.99,18.35h-15.28c-32.36,0-61.12,18.91-65.47,43.05l-.7,3.89,245.82-15.89c-6.14-18.11-27.58-31.05-54.33-31.05Zm240.46,0c-22.36,0-42.99,9.03-55.05,22.58l215.1-13.9c-9.46-5.44-21.42-8.68-34.73-8.68h-6.96l1.99-18.35c15.71,0,28.85-10.46,27.71-22.05l-2.29-23.49c-16.75-12.71-35.33-25.89-54.78-38.86h-39.46c-26.39,0-50.4,14.38-56.53,33.87l-8.97,28.48c-3.65,11.59,7.22,22.05,22.93,22.05h8.32l-1.99,18.35h-15.28Z"/>
                    <path class="cls-3" d="m1365.21,1834.57c-8.84-10.18-23.42-16.64-40.33-16.64h-44.59c-26.39,0-50.4,15.62-56.53,36.78l-8.97,30.94c-3.65,12.59,7.22,23.95,22.93,23.95h8.32l-.87,8.73c32.04-24.57,73.78-54.77,120.04-83.75Zm354.66,94.95h-6.96l1.99-19.93c15.71,0,28.85-11.36,27.71-23.95l-2.78-30.94c-1.91-21.16-22.78-36.78-49.18-36.78h-44.59c-26.39,0-50.4,15.62-56.53,36.78l-8.97,30.94c-3.65,12.59,7.22,23.95,22.92,23.95h8.33l-1.99,19.93h-15.28c-32.36,0-61.12,20.54-65.47,46.75l-3.35,20.17,250.12-16.16.14-4.01c.89-26.22-23.76-46.75-56.13-46.75Zm-491.2,0c-18.78.02-36.31,6.99-48.58,17.94,17.15-2.95,33.58-9.06,48.58-17.94Zm128.37.11c-19.45,16.82-37.3,32.86-52.79,46.82-9.74,8.78-18.7,16.85-26.76,23.95-1.67,1.47-1.99,3.99-.84,6.74,1.03,2.48,3.36,4.99,6.27,4.99l126.35-8.16.94-27.7c.86-25.41-22.29-45.42-53.18-46.64Z"/>
                    <path class="cls-7" d="m695.14,1924.03c-18.1,0-54.5,10.41-74.28,25.55h534.84c29.23,0,57.61-8.98,81.55-25.55h-542.11Z"/>
                  </g>
                  <path class="cls-13" d="m1662.95,1866.76c.71-.21,73.13-20.65,287.43-20.65,95.57,0,159.34,12.51,161.49,12.87,45.84,22.89,99.06,56.84,144.33,90.27l84.41-5.45c-23.39-39.58-156.28-134.15-255.9-181.47-2.26-.36-69.3-12.87-169.79-12.87-225.3,0-301.45,20.45-302.19,20.65-116.11,32.96-236.53,141.5-308.49,206.35-9.74,8.78-18.7,16.85-26.76,23.95-1.67,1.47-1.99,3.99-.84,6.74,1.03,2.48,3.36,4.99,6.27,4.99l164.69-10.64c63.14-54.85,140.18-112.3,215.34-134.74Z"/>
                  <path class="cls-13" d="m1183.29,1853.72h152.22c36.28-24.05,76.37-48.27,117.36-68.79h-562.76c-115.07,52.16-234.92,128.32-289.83,164.65h168.25c128.77-62.73,270.52-95.86,414.76-95.86Z"/>
                  <g>
                    <g>
                      <g>
                        <path class="cls-12" d="m2346.16,1944.81c-18.46-38.29-156.73-137.62-259.56-186.46-.16-.08-.34-.14-.52-.18-.68-.13-68.98-13.12-171.15-13.12-227.4,0-302.64,20.61-303.38,20.82-117.1,33.24-238,142.21-310.24,207.32-9.73,8.77-18.68,16.83-26.72,23.92-3.1,2.73-3.87,7.23-1.99,11.73,1.62,3.9,5.41,7.7,10.33,7.7.21,0,.42,0,.63-.02l1060.77-68.56c.73-.05,1.39-.46,1.76-1.09.37-.63.4-1.41.08-2.06Zm-921.79-53.63c58.98-46,126.42-89.77,191.86-108.35.58-.16,46.57-12.23,170.97-17.62,6.34,63.18,8.67,132.09,8.51,200.57l-420.89,27.21c0-39.75,18.2-77.36,49.55-101.81Zm433.13,70.6c0-67.29-2.38-135.23-8.54-198.49,20.42-.41,42.32-.64,65.97-.64,91.92,0,155.19,10.54,165.91,12.45,17.91,8.57,36.66,18.59,55.48,29.4,6.54,44.74,10.7,91.48,13.1,138.41l-291.92,18.87Zm428.43-27.7l-127.74,8.26c-2.29-44.75-6.2-89.31-12.2-132.19,55.95,32.93,111.53,72.27,147.1,102.75,8.2,7.03,3.62,20.49-7.16,21.18Z"/>
                        <g>
                          <path class="cls-10" d="m1481.85,2059.47c0-9.93-8.54-24.95-19.06-33.54l-25.92-21.14c-14.92-12.17-28.96-20.05-41.2-23.76-21.36-6.47-37.19-.17-42.88,18.1l-22.67-18.49c-2.04-1.66-3.69-1.45-3.69.47v13.78c0,1.92,1.65,4.82,3.69,6.49l96.6,78.79c1.51,1.23,2.8,1.42,3.38.66l11.04,9.01c22.49,18.35,40.72,16.01,40.72-5.21v-19.77h0v-5.39Z"/>
                          <g>
                            <path class="cls-32" d="m1421.59,1914.52h43.57c9.21,0,16.69,7.48,16.69,16.69v29.24c0,19.67-15.97,35.65-35.65,35.65h-100.29v-5.9c0-41.77,33.91-75.68,75.68-75.68Z"/>
                            <path class="cls-5" d="m1433.82,1937.9h48.03v-5.39c0-9.94-6.93-17.99-15.48-17.99h-50.25c-38.77,0-70.21,36.52-70.21,81.58h7.76c14.54-34.43,44.92-58.19,80.16-58.19Z"/>
                            <path class="cls-12" d="m1329.65,1977.45h65.21c8.84,0,16.02,7.18,16.02,16.02v1.5c0,1.78-1.45,3.23-3.23,3.23h-77.99c-1.78,0-3.23-1.45-3.23-3.23v-14.29c0-1.78,1.45-3.23,3.23-3.23Z"/>
                          </g>
                        </g>
                      </g>
                      <g>
                        <g>
                          <ellipse class="cls-10" cx="1762.94" cy="2053.66" rx="32.85" ry="22.98"/>
                          <g class="cls-37">
                            <rect class="cls-20" x="1717.49" y="2040.7" width="82.66" height="25.92" rx="12.96" ry="12.96"/>
                          </g>
                          <rect class="cls-12" x="1725.61" y="2040.7" width="82.66" height="25.92" rx="12.96" ry="12.96"/>
                        </g>
                        <g>
                          <ellipse class="cls-10" cx="2257.64" cy="2036.72" rx="32.85" ry="22.98"/>
                          <g class="cls-37">
                            <path class="cls-20" d="m2281.89,2049.68h-56.74c-7.16,0-12.96-5.8-12.96-12.96h0c0-7.16,5.8-12.96,12.96-12.96h56.74c7.16,0,12.96,5.8,12.96,12.96h0c0,7.16-5.8,12.96-12.96,12.96Z"/>
                          </g>
                          <path class="cls-12" d="m2290.01,2049.68h-56.74c-7.16,0-12.96-5.8-12.96-12.96h0c0-7.16,5.8-12.96,12.96-12.96h56.74c7.16,0,12.96,5.8,12.96,12.96h0c0,7.16-5.8,12.96-12.96,12.96Z"/>
                        </g>
                      </g>
                    </g>
                    <g>
                      <path class="cls-12" d="m1799.75,2406.8c-.09,0-.18,0-.27-.02-1.21-.15-2.07-1.25-1.92-2.45.47-3.83,46.56-386.18,16.76-655.41-.13-1.21.74-2.3,1.94-2.43,1.27-.11,2.3.74,2.43,1.95,29.85,269.74-16.3,652.59-16.77,656.42-.14,1.12-1.09,1.93-2.18,1.93Z"/>
                      <path class="cls-12" d="m2031.6,2407.56h-694.46c-10.55,0-19.77-8.15-21.43-18.96-43.68-284.24,10.27-436.23,10.82-437.73.13-.34.33-.64.6-.89,79.3-70.65,183.3-155.43,284.41-184.13.74-.21,75.98-20.82,303.38-20.82,102.18,0,170.48,12.99,171.16,13.12.18.04.36.09.52.18,102.82,48.84,241.09,148.17,259.55,186.46.2.41.27.88.19,1.33l-14.28,81.78c-6.37,36.46-42.29,65.35-57.44,76.08-133.98,93.63-156.05,163.34-173.78,219.36-5.97,18.85-11.6,36.65-20.79,53.43-10.55,19.27-28.66,30.78-48.44,30.78Zm-701.11-454.67c-3.4,9.87-52.65,160.27-10.43,435.04,1.33,8.68,8.68,15.23,17.08,15.23h694.46c18.15,0,34.82-10.65,44.58-28.49,8.98-16.41,14.55-34.01,20.45-52.64,17.93-56.65,40.25-127.16,175.45-221.63,14.69-10.41,49.55-38.39,55.64-73.23l14.16-81.07c-17.53-34.24-149.15-132.41-256.91-183.65-4.78-.89-71.58-12.99-170.05-12.99-226.8,0-301.45,20.44-302.18,20.65-100.07,28.4-203.36,112.53-282.26,182.79Z"/>
                    </g>
                  </g>
                  <g>
                    <path class="cls-32" d="m1668.47,1728.65h-271.27l12.84-103.6c1.07-8.63,8.4-15.1,17.09-15.1h211.4c8.69,0,16.02,6.48,17.09,15.1l12.84,103.6Z"/>
                    <path class="cls-6" d="m1668.47,1728.65l-12.85-103.6c-.26-2.11-.91-4.09-1.84-5.87h-17.21c-8.69,0-16.02,6.48-17.09,15.1l9.71,94.38h39.29Z"/>
                    <path class="cls-12" d="m1392.33,1706.78h281.02c4.78,0,8.66,3.88,8.66,8.66v13.22h-298.33v-13.22c0-4.78,3.88-8.66,8.66-8.66Z"/>
                    <g>
                      <path class="cls-12" d="m1421.2,1647.46l.03-7.97h41.43l-.03,7.97h-16.26l.13,44.56h-9.25l-.13-44.56h-15.92Z"/>
                      <path class="cls-12" d="m1502.93,1639.49l20.52,52.52h-10.43l-5.3-14.74h-20.02c-.49,1.26-.96,2.5-1.39,3.71-.44,1.23-.87,2.43-1.29,3.64-.42,1.21-.84,2.42-1.26,3.65-.42,1.23-.85,2.48-1.28,3.73h-9.7l20.05-52.52h10.12Zm1.68,29.71l-6.91-19.28-6.75,19.28h13.66Z"/>
                      <path class="cls-12" d="m1534.44,1639.49h11.19l11.56,18.42,12.01-18.42h10.54l-17.18,25.51,18.34,27.01h-11.3l-12.48-19.26-12.9,19.26h-10.67l17.89-27.12-16.99-25.41Z"/>
                      <path class="cls-12" d="m1604.91,1639.49l.08,52.52h-9.25l-.08-52.52h9.25Z"/>
                    </g>
                  </g>
                </g>
              </g>
            </g>
            <path class="cls-35" d="m1929.08,88.17h-576.58c-59.99,0-108.62,48.63-108.62,108.62v2260.3c0,59.99,48.63,108.62,108.62,108.62h447.65c-325.82-1268.68,11.13-2193,128.93-2477.54Z"/>
          </g>
          <g>
            <g class="cls-37">
              <path class="cls-27" d="m2061.15,797.97c0,131.17,77.94,516.57,183.27,631.95-38.85,98.13-85.71,170.15-136.15,170.15-134.23,0-243.05-509.95-243.05-664.95s101.76-272.33,229.85-280.24c-21.55,41.9-33.92,90.83-33.92,143.09Z"/>
              <path class="cls-27" d="m2351.33,935.12c0,19.05-1.64,43.47-4.78,71.64-.42,3.83-.88,7.73-1.36,11.7-4.97,40.99-12.84,88.98-23.19,139.5-13.44,65.69-31.07,135.65-51.93,200.09-80.61-157.75-136.09-449.41-136.09-560.08,0-49.33,11.03-95.69,30.39-135.98,15.13,4.12,29.71,9.88,43.6,17.1,10.94,5.69,21.45,12.29,31.46,19.72,67.3,49.9,111.9,137.09,111.9,236.31Z"/>
            </g>
            <g>
              <g>
                <path class="cls-16" d="m2270.07,1358.05c-8.08,24.98-16.66,49.12-25.65,71.87-105.33-115.38-183.27-500.78-183.27-631.95,0-52.26,12.37-101.19,33.92-143.09,4.37-.27,8.77-.41,13.2-.41,19.31,0,38.09,2.6,56.1,7.52-19.36,40.29-30.39,86.65-30.39,135.98,0,110.67,55.48,402.33,136.09,560.08Z"/>
                <path class="cls-16" d="m2377.03,517.31c-91.51,0-171.2,58.4-212.66,144.68-18.01-4.92-36.79-7.52-56.1-7.52-4.43,0-8.83.14-13.2.41,42.35-82.36,120.16-137.57,209.13-137.57h72.83Z"/>
                <path class="cls-16" d="m2620.09,797.97c0,154.99-108.83,664.95-243.06,664.95h-72.83c-20.63,0-40.66-12.05-59.78-33,8.99-22.75,17.57-46.89,25.65-71.87-80.61-157.75-136.09-449.41-136.09-560.08,0-49.33,11.03-95.69,30.39-135.98,41.46-86.28,121.15-144.68,212.66-144.68,134.23,0,243.06,125.66,243.06,280.66Z"/>
                <path class="cls-28" d="m2620.09,797.97c0,154.99-108.83,664.95-243.06,664.95-38.38,0-74.69-41.7-106.96-104.87-80.61-157.75-136.09-449.41-136.09-560.08,0-49.33,11.03-95.69,30.39-135.98,41.46-86.28,121.15-144.68,212.66-144.68,134.23,0,243.06,125.66,243.06,280.66Z"/>
              </g>
              <path class="cls-25" d="m2373.68,572c107.33,0,194.36,100.46,194.36,224.43s-87.03,381.19-194.36,381.19-194.36-257.25-194.36-381.19,87.03-224.43,194.36-224.43Z"/>
              <g>
                <path class="cls-26" d="m2414.49,572h-40.81c-107.33,0-194.36,100.46-194.36,224.43s87.03,224.43,194.36,224.43h40.81c107.33,0,194.36-100.49,194.36-224.43s-87.03-224.43-194.36-224.43Z"/>
                <ellipse class="cls-23" cx="2414.49" cy="796.43" rx="194.36" ry="224.43"/>
              </g>
            </g>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>
               
               
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- BEGIN FEATURES SECTION -->
    <div id="features" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Features</h2>
            <h3
                class="max-w-2xl px-5 mt-2 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
                Built and Designed with you in Mind</h3>
            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 377 340"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 1 -->
                        <svg class="relative w-20 h-20" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-1TriangleIcon1">
                                    <stop stop-color="#9C09DB" offset="0%" />
                                    <stop stop-color="#1C0FD7" offset="100%" />
                                </linearGradient>
                                <filter x="-14%" y="-10%" width="128%" height="128%" filterUnits="objectBoundingBox"
                                    id="filter-3TriangleIcon1">
                                    <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1"
                                        result="shadowBlurOuter1" />
                                    <feColorMatrix
                                        values="0 0 0 0 0.141176471 0 0 0 0 0.031372549 0 0 0 0 0.501960784 0 0 0 0.15 0"
                                        in="shadowBlurOuter1" />
                                </filter>
                                <path
                                    d="M17.947 0h14.106c6.24 0 8.503.65 10.785 1.87a12.721 12.721 0 015.292 5.292C49.35 9.444 50 11.707 50 17.947v14.106c0 6.24-.65 8.503-1.87 10.785a12.721 12.721 0 01-5.292 5.292C40.556 49.35 38.293 50 32.053 50H17.947c-6.24 0-8.503-.65-10.785-1.87a12.721 12.721 0 01-5.292-5.292C.65 40.556 0 38.293 0 32.053V17.947c0-6.24.65-8.503 1.87-10.785A12.721 12.721 0 017.162 1.87C9.444.65 11.707 0 17.947 0z"
                                    id="path-2TriangleIcon1" />
                            </defs>
                            <g id="Page-1TriangleIcon1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Desktop-HDTriangleIcon1" transform="translate(-291 -1278)">
                                    <g id="FeaturesTriangleIcon1" transform="translate(170 915)">
                                        <g id="Group-9TriangleIcon1" transform="translate(0 365)">
                                            <g id="Group-8TriangleIcon1" transform="translate(125)">
                                                <g id="Rectangle-9TriangleIcon1">
                                                    <use fill="#000" filter="url(#filter-3TriangleIcon1)"
                                                        xlink:href="#path-2TriangleIcon1" />
                                                    <use fill="url(#linearGradient-1TriangleIcon1)"
                                                        xlink:href="#path-2TriangleIcon1" />
                                                </g>
                                                <g id="playTriangleIcon1" transform="translate(18 15)" fill="#FFF"
                                                    fill-rule="nonzero">
                                                    <path
                                                        d="M9.432 2.023l8.919 14.879a1.05 1.05 0 01-.384 1.452 1.097 1.097 0 01-.548.146H-.42A1.07 1.07 0 01-1.5 17.44c0-.19.052-.375.15-.538L7.567 2.023a1.092 1.092 0 011.864 0z"
                                                        id="TriangleIcon1" transform="rotate(90 8.5 10)" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h4 class="relative mt-6 text-lg font-bold">Automated Tools</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Automate your workflow with these
                            top of the
                            line marketing tools.</p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-indigo-500 underline">Learn
                            More</a>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->
                        <svg class="relative w-20 h-20" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-1Icon2">
                                    <stop stop-color="#F2C314" offset="0%" />
                                    <stop stop-color="#FC3832" offset="100%" />
                                </linearGradient>
                                <filter x="-14%" y="-10%" width="128%" height="128%" filterUnits="objectBoundingBox"
                                    id="filter-3Icon2">
                                    <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1"
                                        result="shadowBlurOuter1" />
                                    <feColorMatrix
                                        values="0 0 0 0 0.501960784 0 0 0 0 0.125490196 0 0 0 0 0 0 0 0 0.15 0"
                                        in="shadowBlurOuter1" />
                                </filter>
                                <path
                                    d="M17.947 0h14.106c6.24 0 8.503.65 10.785 1.87a12.721 12.721 0 015.292 5.292C49.35 9.444 50 11.707 50 17.947v14.106c0 6.24-.65 8.503-1.87 10.785a12.721 12.721 0 01-5.292 5.292C40.556 49.35 38.293 50 32.053 50H17.947c-6.24 0-8.503-.65-10.785-1.87a12.721 12.721 0 01-5.292-5.292C.65 40.556 0 38.293 0 32.053V17.947c0-6.24.65-8.503 1.87-10.785A12.721 12.721 0 017.162 1.87C9.444.65 11.707 0 17.947 0z"
                                    id="path-2Icon2" />
                            </defs>
                            <g id="Page-1Icon2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Desktop-HDIcon2" transform="translate(-691 -1278)">
                                    <g id="FeaturesIcon2" transform="translate(170 915)">
                                        <g id="Group-9-CopyIcon2" transform="translate(400 365)">
                                            <g id="Group-8Icon2" transform="translate(125)">
                                                <g id="Rectangle-9Icon2">
                                                    <use fill="#000" filter="url(#filter-3Icon2)"
                                                        xlink:href="#path-2Icon2" />
                                                    <use fill="url(#linearGradient-1Icon2)" xlink:href="#path-2Icon2" />
                                                </g>
                                                <g id="machine-learningIcon2" transform="translate(14 12)" fill="#FFF"
                                                    fill-rule="nonzero">
                                                    <path
                                                        d="M10.554 21.418v-2.68c-1.1-.204-1.932-1.143-1.932-2.271 0-.468.143-.903.388-1.267l-2.32-1.662L4.367 15.2a2.254 2.254 0 01-.005 2.541l5.28 4.05c.268-.182.577-.311.911-.373zm.892 0c.334.062.643.191.912.373l5.28-4.05a2.254 2.254 0 01-.006-2.54l-2.321-1.663L12.99 15.2c.245.364.388.8.388 1.267 0 1.128-.832 2.067-1.932 2.27v2.681zm1.538.997c.25.365.394.803.394 1.274C13.378 24.965 12.314 26 11 26s-2.378-1.035-2.378-2.311c0-.471.145-.91.394-1.274l-5.28-4.05c-.385.26-.853.413-1.358.413C1.065 18.778 0 17.743 0 16.467c0-1.129.832-2.068 1.932-2.27v-2.393C.832 11.6 0 10.662 0 9.534c0-1.277 1.065-2.312 2.378-2.312.505 0 .973.153 1.358.414l5.28-4.05a2.254 2.254 0 01-.394-1.275C8.622 1.035 9.686 0 11 0s2.378 1.035 2.378 2.311c0 .471-.145.91-.394 1.274l5.28 4.05c.385-.26.853-.413 1.358-.413C20.935 7.222 22 8.257 22 9.533c0 1.129-.832 2.068-1.932 2.27v2.393c1.1.203 1.932 1.142 1.932 2.27 0 1.277-1.065 2.312-2.378 2.312-.505 0-.973-.153-1.358-.414l-5.28 4.05zm-9.243-7.843L5.937 13l-2.196-1.572c-.27.183-.58.314-.917.376v2.392c.336.062.647.193.917.376zm.627-3.772l2.321 1.662L9.01 10.8a2.254 2.254 0 01-.388-1.267c0-1.128.832-2.067 1.932-2.27V4.582a2.403 2.403 0 01-.912-.373l-5.28 4.05a2.254 2.254 0 01.006 2.54zm13.89 3.772c.27-.183.582-.314.918-.376v-2.392a2.403 2.403 0 01-.917-.376L16.063 13l2.196 1.572zm-.62-6.313l-5.28-4.05a2.403 2.403 0 01-.912.373v2.68c1.1.204 1.932 1.143 1.932 2.271 0 .468-.143.903-.388 1.267l2.32 1.662 2.322-1.662a2.254 2.254 0 01.005-2.541zm-8 6.313A2.415 2.415 0 0111 14.156c.507 0 .977.154 1.363.416L14.559 13l-2.196-1.572a2.415 2.415 0 01-1.363.416c-.507 0-.977-.154-1.363-.416L7.441 13l2.196 1.572zM11 10.978c.821 0 1.486-.647 1.486-1.445 0-.797-.665-1.444-1.486-1.444s-1.486.647-1.486 1.444c0 .798.665 1.445 1.486 1.445zm0 6.933c.821 0 1.486-.647 1.486-1.444 0-.798-.665-1.445-1.486-1.445s-1.486.647-1.486 1.445c0 .797.665 1.444 1.486 1.444zm8.622-6.933c.82 0 1.486-.647 1.486-1.445 0-.797-.665-1.444-1.486-1.444s-1.487.647-1.487 1.444c0 .798.666 1.445 1.487 1.445zm0 6.933c.82 0 1.486-.647 1.486-1.444 0-.798-.665-1.445-1.486-1.445s-1.487.647-1.487 1.445c0 .797.666 1.444 1.487 1.444zM2.378 10.978c.821 0 1.487-.647 1.487-1.445 0-.797-.666-1.444-1.487-1.444-.82 0-1.486.647-1.486 1.444 0 .798.665 1.445 1.486 1.445zm0 6.933c.821 0 1.487-.647 1.487-1.444 0-.798-.666-1.445-1.487-1.445-.82 0-1.486.647-1.486 1.445 0 .797.665 1.444 1.486 1.444zM11 25.133c.821 0 1.486-.646 1.486-1.444 0-.798-.665-1.445-1.486-1.445s-1.486.647-1.486 1.445.665 1.444 1.486 1.444zm0-21.377c.821 0 1.486-.647 1.486-1.445S11.821.867 11 .867s-1.486.646-1.486 1.444c0 .798.665 1.445 1.486 1.445z"
                                                        id="ShapeIcon2" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h4 class="relative mt-6 text-lg font-bold">Machine Learning</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Your Marketing tools will learn how
                            to better
                            convert and sell.</p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-indigo-500 underline">Learn
                            More</a>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 378 410"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 3 -->
                        <svg class="relative w-20 h-20" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-1Icon3">
                                    <stop stop-color="#32FBFC" offset="0%" />
                                    <stop stop-color="#3214F2" offset="100%" />
                                </linearGradient>
                                <filter x="-14%" y="-10%" width="128%" height="128%" filterUnits="objectBoundingBox"
                                    id="filter-3Icon3">
                                    <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1"
                                        result="shadowBlurOuter1" />
                                    <feColorMatrix
                                        values="0 0 0 0 0.031372549 0 0 0 0 0.149019608 0 0 0 0 0.658823529 0 0 0 0.15 0"
                                        in="shadowBlurOuter1" />
                                </filter>
                                <path
                                    d="M17.947 0h14.106c6.24 0 8.503.65 10.785 1.87a12.721 12.721 0 015.292 5.292C49.35 9.444 50 11.707 50 17.947v14.106c0 6.24-.65 8.503-1.87 10.785a12.721 12.721 0 01-5.292 5.292C40.556 49.35 38.293 50 32.053 50H17.947c-6.24 0-8.503-.65-10.785-1.87a12.721 12.721 0 01-5.292-5.292C.65 40.556 0 38.293 0 32.053V17.947c0-6.24.65-8.503 1.87-10.785A12.721 12.721 0 017.162 1.87C9.444.65 11.707 0 17.947 0z"
                                    id="path-2Icon3" />
                            </defs>
                            <g id="Page-1Icon3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Desktop-HDIcon3" transform="translate(-1091 -1278)">
                                    <g id="FeaturesIcon3" transform="translate(170 915)">
                                        <g id="Group-9-Copy-2Icon3" transform="translate(800 365)">
                                            <g id="Group-8Icon3" transform="translate(125)">
                                                <g id="Rectangle-9Icon3">
                                                    <use fill="#000" filter="url(#filter-3Icon3)"
                                                        xlink:href="#path-2Icon3" />
                                                    <use fill="url(#linearGradient-1Icon3)" xlink:href="#path-2Icon3" />
                                                </g>
                                                <g id="smart-notificationsIcon3" transform="translate(15 11)"
                                                    fill="#FFF" fill-rule="nonzero">
                                                    <path
                                                        d="M12.519 3.243a6.808 6.808 0 00-.187 1.298h-8.44a2.595 2.595 0 00-2.595 2.594v12.973a2.595 2.595 0 002.595 2.595h12.973a2.595 2.595 0 002.594-2.595v-8.44c.445-.02.88-.084 1.298-.187v8.627A3.892 3.892 0 0116.865 24H3.892A3.892 3.892 0 010 20.108V7.135a3.892 3.892 0 013.892-3.892h8.627zm6.616 6.487a4.865 4.865 0 110-9.73 4.865 4.865 0 010 9.73z"
                                                        id="IconIcon3" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h4 class="relative mt-6 text-lg font-bold">Smart Notifications</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Our smart notifications will notify
                            you when
                            users convert.</p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-indigo-500 underline">Learn
                            More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END FEATURES SECTION -->

    <!-- Pricing Section -->
    <div class="relative px-8 py-10 bg-white border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">

        <div id="pricing" class="container flex flex-col items-center h-full max-w-6xl mx-auto">
            <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Pricing</h2>
            <h3
                class="w-full max-w-2xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0">
                Simple, Transparent Pricing for Everyone</h3>

            <div class="max-w-full mx-auto md:max-w-6xl sm:px-8">
                <!-- Basic Pricing -->
                <div class="relative flex flex-col items-center block sm:flex-row">
                    <div
                        class="relative z-0 w-11/12 max-w-sm my-8 border border-gray-200 rounded-lg sm:w-3/5 lg:w-1/3 sm:my-5 md:-mr-4">
                        <div class="overflow-hidden text-black bg-white border-t border-gray-100 rounded-lg shadow-sm">
                            <div
                                class="block max-w-sm px-8 mx-auto mt-5 text-sm text-left text-black sm:text-md lg:px-6">
                                <h3 class="p-3 text-lg font-bold tracking-wide text-center uppercase">Basic<span
                                        class="ml-2 font-light">Plan</span></h3>
                                <h4
                                    class="flex items-center justify-center pb-6 text-4xl font-bold text-center text-gray-900">
                                    <span class="mr-1 -ml-2 text-lg text-gray-700">$</span>48</h4>
                                <p class="text-sm text-gray-600">In our basic plan you can take advantage of all these
                                    features below.
                                </p>
                            </div>

                            <div class="flex flex-wrap px-6 mt-8">
                                <ul>
                                    <li class="flex items-center">
                                        <div class="p-2 text-green-500 rounded-full fill-current ">
                                            <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-lg text-gray-700">Awesome Feature</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="p-2 text-green-500 rounded-full fill-current ">
                                            <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-lg text-gray-700">And Another Cool Feature</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="p-2 text-green-500 rounded-full fill-current ">
                                            <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-lg text-gray-700">One More Feature</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center block p-8 uppercase">
                                <a href="#_"
                                    class="block w-full px-6 py-4 mt-3 text-lg font-semibold text-center text-white bg-gray-900 rounded shadow-sm hover:bg-green-600">Select
                                    This Plan</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Pricing -->
                    <div
                        class="relative z-10 w-full max-w-md my-8 bg-white rounded-lg shadow-lg sm:w-2/3 lg:w-1/3 sm:my-5">
                        <div
                            class="py-4 text-sm font-semibold leading-none tracking-wide text-center text-white uppercase bg-indigo-500 rounded-t">
                            Most Popular</div>
                        <div class="block max-w-sm px-8 mx-auto mt-5 text-sm text-left text-black sm:text-md lg:px-6">
                            <h3 class="p-3 pb-1 text-lg font-bold tracking-wide text-center uppercase">Pro<span
                                    class="ml-2 font-light">Plan</span></h3>
                            <h4
                                class="flex items-center justify-center pb-6 text-5xl font-bold text-center text-gray-900">
                                <span class="mr-1 -ml-2 text-lg text-gray-700">$</span>98</h4>
                            <p class="text-sm text-gray-600">Our most popular package is the Pro Plan which gives you
                                access to the
                                following:</p>
                        </div>
                        <div class="flex justify-start pl-12 mt-8 sm:justify-start">
                            <ul>
                                <li class="flex items-center">
                                    <div class="p-2 text-green-500 rounded-full fill-current">
                                        <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-lg text-gray-700">Really Cool Features</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="p-2 text-green-500 rounded-full fill-current ">
                                        <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-lg text-gray-700">Another Cool Feature</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="p-2 text-green-500 rounded-full fill-current ">
                                        <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-lg text-gray-700">And One More</span>
                                </li>
                            </ul>
                        </div>

                        <div class="flex items-center block p-8 uppercase">
                            <a href="#_"
                                class="block w-full px-6 py-4 mt-3 text-lg font-semibold text-center text-white bg-gray-900 rounded shadow-sm hover:bg-indigo-600">Select
                                This Plan</a>
                        </div>
                    </div>
                    <!-- Premium Pricing -->
                    <div
                        class="relative z-0 w-11/12 max-w-sm my-8 rounded-lg shadow-lg sm:w-3/5 lg:w-1/3 sm:my-5 md:-ml-4">
                        <div class="overflow-hidden text-black bg-white rounded-lg shadow-lg shadow-inner">
                            <div
                                class="block max-w-sm px-8 mx-auto mt-5 text-sm text-left text-black sm:text-md lg:px-8">
                                <h3 class="p-3 pb-1 text-lg font-bold tracking-wide text-center uppercase">Premium<span
                                        class="ml-2 font-light">Plan</span></h3>
                                <h4
                                    class="flex items-center justify-center pb-6 text-4xl font-bold text-center text-gray-900">
                                    <span class="mr-1 -ml-2 text-lg text-gray-700">$</span>78</h4>
                                <p class="pl-2 text-sm text-gray-600">With our premium plan you can take advantage of
                                    all the following
                                    features:</p>
                            </div>
                            <div class="flex flex-wrap px-8 mt-8">
                                <ul>
                                    <li class="flex items-center">
                                        <div class="p-2 text-green-500 rounded-full fill-current ">
                                            <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-lg text-gray-700">Totally Tubular Feature</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="p-2 text-green-500 rounded-full fill-current ">
                                            <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-lg text-gray-700">Super Cool Feature</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="p-2 text-green-500 rounded-full fill-current ">
                                            <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-lg text-gray-700">And One More</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex items-center block p-8 uppercase">
                                <a href="#_"
                                    class="block w-full px-6 py-4 mt-3 text-lg font-semibold text-center text-white bg-gray-900 rounded shadow-sm hover:bg-green-600">Select
                                    This Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End Pricing Section -->

    <!-- Start Testimonials -->
    <div id="testimonials"
        class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex-col items-center ">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our customers love
                        our product
                    </p>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                        Testimonials</h2>
                    <p class="my-6 text-xl font-medium text-gray-500">Don't just take our word for it, read from our
                        extensive
                        list of case studies and customer testimonials.</p>

                </div>
                <div class="flex flex-col items-center justify-center max-w-2xl py-8 mx-auto xl:flex-row xl:max-w-full">
                    <div class="w-full xl:w-1/2 xl:pr-8">
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">I'm loving these templates! Very nice
                                        features and layouts.
                                    </p>
                                </div>

                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Sandra
                                    Walton <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO
                                        SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                                src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2694&q=80"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 mt-16 mb-16 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease xl:mb-0">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Really digging this service. Now I can
                                        quickly bootstrap any
                                        project.</p>
                                </div>
                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Kenny
                                    Jones <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO
                                        SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                                src="https://images.unsplash.com/photo-1546820389-44d77e1f3b31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                alt="">
                        </blockquote>
                    </div>
                    <div class="w-full xl:w-1/2 xl:pl-8">
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Extremely helpful in every single project we
                                        have released.
                                    </p>
                                </div>

                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Mike Smith
                                    <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1700&q=80"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 mt-16 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Finally a quick and easy system I can use
                                        for any type of
                                        project.</p>
                                </div>

                                <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">Molly
                                    Sanchez <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO
                                        SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2700&q=80"
                                alt="">
                        </blockquote>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Testimonials-->


    <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
        <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
            <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
                <a href="/"
                    class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start">
                    <span class="flex items-start sm:items-center">
                        <svg class="w-auto h-6 text-gray-800 fill-current" viewBox="0 0 194 116"
                            xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="evenodd">
                                <path
                                    d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z">
                                </path>
                                <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z"></path>
                            </g>
                        </svg>
                    </span>
                </a>
                <p class="mt-6 mr-4 text-base text-gray-500">Crafting the next-level of user experience and engagement.
                </p>
            </div>
            <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                        Product</li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Features</a>
                    </li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Integrations</a>
                    </li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Pricing</a>
                    </li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">FAQ</a></li>
                </ul>
                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                        Company</li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                    </li>
                    <li><a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Terms
                            of
                            Service</a></li>
                </ul>
                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                        TailwindCSS
                    </li>
                    <li><a href="https://devdojo.com/tailwindcss/components"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tailwind
                            Components</a></li>
                    <li><a href="https://devdojo.com/tailwindcss/templates"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tailwind
                            Templates</a></li>
                    <li><a href="https://devdojo.com/tails"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tails</a></li>
                </ul>
                <div class="flex flex-col w-full text-gray-700">
                    <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us</div>
                    <div class="flex justify-start pl-4 mt-2">
                        <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                            target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                            </svg>
                        </a>
                        <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                            target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                            </svg>
                        </a>
                        <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600"
                            target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">© 2020 Landmark. All rights
            reserved.</div>

            <div class="pt-2 pt-4 mt-2 text-center text-gray-600 border-t border-gray-100">Distributed By <a href="https://themewagon.com/">Themewagon</a></div>
    </footer>

    <!-- a little JS for the mobile nav button -->
    <script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>
</body>
    <script src="https://cdn.tailwindcss.com"></script>
</html>
